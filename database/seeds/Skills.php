<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Facker ;

class Skills extends Seeder
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
        ];
        \App\Models\Skill::create($Array);
       }
    }
    }
}
