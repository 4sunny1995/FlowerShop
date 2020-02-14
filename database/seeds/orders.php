<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create('vi_VN');
        $limit=30;
        for($i=1;$i<=$limit;$i++)
        {
            DB ::table('orders')->insert([
                'total'=>'100000',
                'userid'=>rand(1,30),
                'staffid'=>rand(1,10),
                'status'=>$faker->randomElement([0,1,2,-1]),
                'address'=>$faker->address
            ]);
        }
    }
}
