<?php

namespace App;

// use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;

class local_customer extends Authenticate
{
    use Notifiable;
    protected $fillable = [
        'name','email',
    ];
    protected $hidden = [
        'password','remember_token'
    ];
}
