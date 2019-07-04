<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             Users::class,
             Categories::class,
             skills::class,
             Tags::class,
             Videos::class,
             Pages::class,

  
         ]);
    }
}
