<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products extends Seeder
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
            DB::table('products')->insert([
                'productname'=>'Hoa '.$faker->name,
                'productcode'=>$faker->randomElement(['BH','LH','CH']),
                'image'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10]).'.jpg',
                'price'=>'200000',
                'promotionprice'=>'100000',
                'amount'=>$faker->randomNumber(),
                'category'=>$faker->randomElement([1,2,3,4,5]),
                'VAT'=>10,
                'viewcount'=>rand(10,1000),
                'describe' =>str_random(50),
                'hastag'=>$faker->randomElement(['BH','LH','CH']),
            ]);
        }
    }
}
