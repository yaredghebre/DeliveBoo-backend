<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        $restaurants=['da Gino','Mamma mia','la Luna','Roma Roma'];
        foreach($restaurants as $restaurant){
            $new_restaurant=new Restaurant();
            $new_restaurant->user_id=$faker->randomNumber(count($restaurants));
            $new_restaurant->name='da Gino';
            $new_restaurant->address='via roma';
            $new_restaurant->vat_number=$faker->vat();
            $new_restaurant->save();

        }
        
    }
}
