<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $imgPasta1= 'https://th.bing.com/th/id/R.712a85870f56771717d0df7074d31f36?rik=kZe1hjC7hkwedQ&riu=http%3a%2f%2fbubbles.com.pl%2fwp-content%2fuploads%2f2018%2f10%2ffotolia_109759077_subscription_monthly_m.jpg&ehk=fjmP0dP5%2f93HGLrwLOkWLIAhKeRl8w1LQmwgezypq3Q%3d&risl=&pid=ImgRaw&r=0';
        $imgPasta2='https://www.ricettedellanonna.net/wp-content/uploads/2019/07/primi-piatti.png';
        $imgSecondiIta1='https://th.bing.com/th/id/OIP.FezD1Azy4P2wqrGzCdak0wHaE8?w=273&h=182&c=7&r=0&o=5&dpr=1.3&pid=1.7';
        $imgSecondiIta2='https://www.ricettasprint.it/wp-content/uploads/2018/05/secondi-piatti.jpg';
        $imgPizza1= 'https://www.bofrost.de/medias/01783-DE-pizza-diavola-pic1.jpg-W1440xH900R1.6?context=bWFzdGVyfHByb2R1Y3QtaW1hZ2VzfDgwNjI1NnxpbWFnZS9qcGVnfHByb2R1Y3QtaW1hZ2VzL2hhNi9oYzAvOTE3MDMwMTk0MzgzOC5qcGd8NGRkNTUzZmUzMWI1OGM3MTA5MjQ5OWFjYTllY2FmMzFmMzk2ZDZjODA2ZjQyODhiZTY4ODlmMWQ1OWZkMDliMA';
        $imgPizza2='https://ilfattoalimentare.it/wp-content/uploads/2017/03/Fotolia_134998829_Subscription_Monthly_M.jpg';
        $imgPrimiJap1='https://www.deabyday.tv/.imaging/mte/deabyday/974x629/article/guides/cucina-e-ricette/primi/Ricette-col-daikon--gli-gnocchi-di-riso-cinesi/imageOriginal/ricette%2520daikon.jpg';
        $imgPrimiJap2='https://i.pinimg.com/originals/24/1c/0f/241c0fb60a35109d7ad3622ee900fe48.jpg';
        $imgSteak1= 'https://www.ilcantodellabistecca.it/wp-content/uploads/2020/11/tagliata.jpg';
        $imgSteak2='https://shop.benazzoli.com/wp-content/uploads/2019/10/grigliata-mista_1200x800-900x600.jpg';
        function get_new_product($cat_id, $rest_id, $name, $price, $image)
        {
            $new_product = new Product();
            $new_product->category_id  = $cat_id;
            $new_product->restaurant_id = $rest_id;
            $new_product->visible = true;
            $new_product->name = $name;
            $new_product->price = $price;
            $new_product->image = $image;
            $new_product->save();
        }

        for ($j = 1; $j < 5; $j++) {
            if ($j == 1) {
                for ($i = 1; $i < 11; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['carbonara', 'funghi', 'amatriciana']), '11', $faker->randomElement([$imgPasta1,$imgPasta2 ]));
                    }
                }
            } elseif ($j == 2) {
                for ($i = 1; $i < 11; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['Saltimbocca', 'Fritto misto di mare', 'Polpette di carne']), '13', $faker->randomElement([$imgSecondiIta1,$imgSecondiIta2]));
                    }
                }
            } elseif ($j == 3) {
                for ($i = 1; $i < 11; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['margherita', 'diavola', 'napoli']), '9', $faker->randomElement([$imgPizza1,$imgPizza2]));
                    }
                }
            } elseif ($j == 4) {
                for ($i = 1; $i < 11; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['coca cola', 'fanta', 'sprite']), '3', 'https://s3.amazonaws.com/images.ecwid.com/images/46354171/2058155064.jpg');
                    }
                }
            }
        }

        for ($j = 1; $j < 5; $j++) {
            if ($j == 1) {
                for ($i = 11; $i < 15; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['noodles', 'ravioli cinesi', 'riso']), '8', $faker->randomElement([$imgPrimiJap1,$imgPrimiJap2]));
                    }
                }
            } elseif ($j == 2) {
                for ($i = 11; $i < 15; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['nigiri', 'maki', 'uramaki']), '14', 'https://cdn.grmag.com/wp-content/uploads/sites/113/2020/08/iStock-1053854124-scaled-e1597862441846.jpg');
                    }
                }
            } elseif ($j == 4) {
                for ($i = 11; $i < 15; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['coca cola', 'fanta', 'sprite']), '3', 'https://s3.amazonaws.com/images.ecwid.com/images/46354171/2058155064.jpg');
                    }
                }
            }
        }
        for ($j = 1; $j < 5; $j++) {
            if ($j == 1) {
                for ($i = 15; $i < 18; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['hamburger maxi', 'hamburger vegetariano', 'hamburger']), '12', 'https://images.smulweb.nl/blog/2015/10/Hamburger-1024x682.jpg');
                    }
                }
            } elseif ($j == 2) {
                for ($i = 15; $i < 18; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['tagliata', 'grigliata mista', 'pollo']), '22', $faker->randomElement([$imgSteak1,$imgSteak2]));
                    }
                }
            } elseif ($j == 4) {
                for ($i = 15; $i < 18; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['coca cola', 'fanta', 'sprite']), '3', 'https://s3.amazonaws.com/images.ecwid.com/images/46354171/2058155064.jpg');
                    }
                }
            }
        }
    }
}
