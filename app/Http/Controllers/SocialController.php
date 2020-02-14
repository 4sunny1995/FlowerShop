<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Client;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->client = new Client();
    }
    public function login(Request $request,$provider)
    {
        if($provider=='google'){
            return $this->checkGoogle($request->social_token);
        }
        if ($provider == 'facebook') {
            return $this->checkFacebook($request->social_token);
        }
    }
    public function checkGoogle($social_token)
    {
        try {
            $checkToken = $this->client->get("https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=$social_token");
            $responseGoogle = json_decode($checkToken->getBody()->getContents(), true);

            return $this->checkUserByEmail($responseGoogle);
        } catch (\Exception $e) {
            return $this->responseBadRequest(['message' => $e->getMessage()]);
        }
    }
    public function checkFacebook($social_token)
    {
        try {
            $checkToken = $this->client->get("https://graph.facebook.com/v3.1/me?fields=id,name,email&access_token=$social_token");
            $responseFacebook = json_decode($checkToken->getBody()->getContents(), true);

            return $this->checkUserByEmail($responseFacebook);
        } catch (\Exception $e) {
            return $this->responseBadRequest(['message' => $e->getMessage()]);
        }
    }
    public function checkUserByEmail($profile)
    {
        $user = User::where('email', $profile['email'])->first();
        if (!$user) {
            $user = User::create([
                'name' => $profile['name'],
                'email' => $profile['email'],
                'password' => bcrypt(str_random(8)),
            ]);
        }

        $user->forceFill([
            'verified' => true,
            'email' => $user['email'],
            'activated_at' => Carbon::now(),
        ])->save();
        $tokenResult = $user->createToken('Personal Access Client');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addMonth();
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
}
