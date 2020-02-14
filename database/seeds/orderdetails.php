<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderdetails extends Seeder
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
            DB::table('orderdetails')->insert([
                'orderid'=>rand(1,30),
                'listitem'=>rand(1,30),
                'total'=>'100000',
                'describe'=>str_random(50),
            ]);
        }
    }
}
