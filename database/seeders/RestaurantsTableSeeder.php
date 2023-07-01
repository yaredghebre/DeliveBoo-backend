<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
            $new_restaurant=new Restaurant();
            $new_restaurant->name='da Gino';
            $new_restaurant->address='via roma';
            $new_restaurant->vat_number=;
            $new_restaurant->image='';
            $new_restaurant->text='blablabla';

        }
    }
}
