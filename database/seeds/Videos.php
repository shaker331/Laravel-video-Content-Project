<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Facker ;

class Videos extends Seeder
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
            'category_id'=>1,
            'youtube'=>'https://www.youtube.com/watch?v=XswyoS8mNHQ',
            'published'=>1,
            'image'=>'upload/videoimg\15615449071.jpg',
            'user_id'=>1,
            'desc'=>'ENGLISH MOVIE 2019 - NEWYORK HAS FALLEN | HOLLYWOOD Full Movies 2019 | English Movies 2019'

        ];
        \App\Models\Video::create($Array);
       }
    
    }
}
