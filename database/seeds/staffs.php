<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class staffs extends Seeder
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
            DB::table('staffs')->insert([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'salary'=>$faker->randomElement([3000000,5000000,1000000])
            ]);
        }
    }
}
