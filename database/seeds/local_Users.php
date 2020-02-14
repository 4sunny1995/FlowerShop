<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class local_Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create('vi_VN');
        $limit=10;
        for($i=1;$i<=$limit;$i++){
            DB::table('local_customers')->insert([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>Hash::make('12345678'),
            ]);
        }
    }
}
