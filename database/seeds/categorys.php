<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorys extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create('vi_VN');
        $limit=4;
        for($i=1;$i<=$limit;$i++){
            DB::table('categorys')->insert([
                'name'=>'hoa'.$faker->name,
                'describe'=>str_random(50),
            ]);
        }
    }
}
