<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Facker ;
class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker= Facker::create();
       for($i=0 ;$i<10 ;$i++){

        $Array=[
            'name'=>$faker->word,
            'meta_keywords'=>$faker->name,
            'meta_des'=>$faker->name,
        ];
        \App\Models\Category::create($Array);
       }
    }
}
