<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <= 100; $i++) { 
            $comic = new Comic;
            $comic->title = $faker->word();
            $comic->description = $faker->sentence();
            $comic->price = rand(10,50);
            $comic->series = $faker->word() ;
            $comic->sale_date = $faker->dateTimeThisCentury();
            
            $comic->save();
        }
        
    }
}
