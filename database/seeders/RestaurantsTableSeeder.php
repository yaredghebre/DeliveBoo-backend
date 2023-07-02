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
        $italian_restaurants=['da Gino','Mamma mia','la Luna','Roma Roma','pizza italia','magica','trattoria','pizzeria ristorante','sora lella','pizza napoli','sushi shiso','sushi brasiliano','sushi roma','sushi sushi','bistecche wow','brace viva','la griglieria'];
        $number=12345678912;
        foreach($italian_restaurants as $restaurant){
            $new_restaurant=new Restaurant();
            $new_restaurant->name=$restaurant;
            $new_restaurant->address='via roma';
            $new_restaurant->image='https://th.bing.com/th/id/OIP.tKUOt_OKQoDbSrb39CFbTwHaHa?pid=ImgDet&rs=1';
            $new_restaurant->vat_number=$number++;
            $new_restaurant->save();

        }
        
        
    }
}
