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
        $imgPasta1= 'https://www.bing.com/ck/a?!&&p=ee193326f176f369JmltdHM9MTY4ODM0MjQwMCZpZ3VpZD0yYzE5ZjhkNC01YmFhLTY3M2YtMGI4NS1lYTU1NWE3NzY2Y2UmaW5zaWQ9NTUyNw&ptn=3&hsh=3&fclid=2c19f8d4-5baa-673f-0b85-ea555a7766ce&u=a1L2ltYWdlcy9zZWFyY2g_cT1mb3RvIHBhc3RhJkZPUk09SVFGUkJBJmlkPTc1MDc4Qzg4QjI4NDhCQjE5ODZCNzUxRTRDODZCQjMwODZCNTk3OTE&ntb=1';
        $imgPasta2='https://www.bing.com/images/search?view=detailV2&ccid=9Rr4YtYq&id=391EA49C83589301EDFA7DCCD4491B6CDEE9849A&thid=OIP.9Rr4YtYq5wxhcLD4BNT7TQHaE7&mediaurl=https%3a%2f%2fwww.ricettedellanonna.net%2fwp-content%2fuploads%2f2019%2f07%2fprimi-piatti.png&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.f51af862d62ae70c6170b0f804d4fb4d%3frik%3dmoTp3mwbSdTMfQ%26pid%3dImgRaw%26r%3d0&exph=666&expw=1000&q=Primo+Piatto+PNG&simid=607999324737966021&FORM=IRPRST&ck=A8C2E89DE9EE45E3ADE85B9CCD85DA79&selectedIndex=0';
        $imgSecondiIta1='https://th.bing.com/th/id/OIP.FezD1Azy4P2wqrGzCdak0wHaE8?w=273&h=182&c=7&r=0&o=5&dpr=1.3&pid=1.7';
        $imgSecondiIta2='https://www.bing.com/images/search?view=detailV2&ccid=YNC9GdJ8&id=9CBFF6E2F5309B9446A86B60D1BE9DEA1B89B064&thid=OIP.YNC9GdJ8EFNsbY-T4uMjCAHaE8&mediaurl=https%3a%2f%2fi1.wp.com%2fwww.ricettasprint.it%2fwp-content%2fuploads%2f2018%2f05%2fsecondi-piatti.jpg%3fssl%3d1&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.60d0bd19d27c10536c6d8f93e2e32308%3frik%3dZLCJG%252bqdvtFgaw%26pid%3dImgRaw%26r%3d0&exph=483&expw=724&q=secondi+Piatto+PNG&simid=608049429827298516&FORM=IRPRST&ck=CB9B8FCFBFF2876D1F9F9579EDCB10D3&selectedIndex=5';
        $imgPizza1= 'https://www.bing.com/images/search?view=detailV2&ccid=JK7JHXEf&id=0761C1664C852642AC150C33C3E31DF2112BE42D&thid=OIP.JK7JHXEfdUfD9I5aAT-iUwHaEo&mediaurl=https%3a%2f%2fwww.bofrost.de%2fmedias%2f01783-DE-pizza-diavola-pic1.jpg-W1440xH900R1.6%3fcontext%3dbWFzdGVyfHByb2R1Y3QtaW1hZ2VzfDgwNjI1NnxpbWFnZS9qcGVnfHByb2R1Y3QtaW1hZ2VzL2hhNi9oYzAvOTE3MDMwMTk0MzgzOC5qcGd8NGRkNTUzZmUzMWI1OGM3MTA5MjQ5OWFjYTllY2FmMzFmMzk2ZDZjODA2ZjQyODhiZTY4ODlmMWQ1OWZkMDliMA&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.24aec91d711f7547c3f48e5a013fa253%3frik%3dLeQrEfId48MzDA%26pid%3dImgRaw%26r%3d0&exph=900&expw=1440&q=pizza+diavola&simid=607989231590277069&FORM=IRPRST&ck=CA2FB8068744A3FCAFD9F1CF5E3B074A&selectedIndex=5';
        $imgPizza2='https://www.bing.com/images/search?view=detailV2&ccid=4lN5KeF9&id=3EC0CA41D946BD3F3C4C7B7F07FBF681D215DFF7&thid=OIP.4lN5KeF9MSzsUGLVjYy8igHaE7&mediaurl=https%3a%2f%2filfattoalimentare.it%2fwp-content%2fuploads%2f2017%2f03%2fFotolia_134998829_Subscription_Monthly_M.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.e2537929e17d312cec5062d58d8cbc8a%3frik%3d998V0oH2%252bwd%252few%26pid%3dImgRaw%26r%3d0&exph=1125&expw=1688&q=pizza+immagine&simid=607992439940737247&FORM=IRPRST&ck=775EA4E0524874EB20F5C2181B7AEFA6&selectedIndex=6';
        $imgPrimiJap1='https://www.bing.com/images/search?view=detailV2&ccid=TM7vgd1I&id=F645A39BADE7F178B403F726BD53A551AFBEFF46&thid=OIP.TM7vgd1Izt4i9q_keIQcaAHaEy&mediaurl=https%3a%2f%2fwww.deabyday.tv%2f.imaging%2fmte%2fdeabyday%2f974x629%2farticle%2fguides%2fcucina-e-ricette%2fprimi%2fRicette-col-daikon--gli-gnocchi-di-riso-cinesi%2fimageOriginal%2fricette%252520daikon.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.4cceef81dd48cede22f6afe478841c68%3frik%3dRv%252b%252br1GlU70m9w%26pid%3dImgRaw%26r%3d0&exph=629&expw=974&q=primi+cinesi+giapponesi&simid=608010719318391382&FORM=IRPRST&ck=7168858D595B6608CD980FFB70C3B500&selectedIndex=43';
        $imgPrimiJap2='https://www.bing.com/images/search?view=detailV2&ccid=8B5OqgnD&id=15507BA33A8CDC8CD309AD431CE8F60891DBF8FC&thid=OIP.8B5OqgnDDnaadCxBsxkOYAHaEK&mediaurl=https%3a%2f%2fi.pinimg.com%2foriginals%2f24%2f1c%2f0f%2f241c0fb60a35109d7ad3622ee900fe48.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.f01e4eaa09c30e769a742c41b3190e60%3frik%3d%252fPjbkQj26BxDrQ%26pid%3dImgRaw%26r%3d0&exph=540&expw=960&q=primi+cinesi+giapponesi&simid=608012828117180230&FORM=IRPRST&ck=2E87718B7F35953B84CE71F2260160A8&selectedIndex=30';
        $imgSteak1= 'https://www.bing.com/images/search?view=detailV2&ccid=j8KFbztY&id=96FD114486A04B7903984EF9A32CFDB88BC7257F&thid=OIP.j8KFbztYaP_sZvuA0bZiKQHaFm&mediaurl=https%3a%2f%2fwww.ilcantodellabistecca.it%2fwp-content%2fuploads%2f2020%2f11%2ftagliata.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.8fc2856f3b5868ffec66fb80d1b66229%3frik%3dfyXHi7j9LKP5Tg%26pid%3dImgRaw%26r%3d0&exph=1358&expw=1796&q=tagliata+di+carne&simid=608036089663401543&FORM=IRPRST&ck=A1D93AF3B6AD32060631AD0694ECD200&selectedIndex=10';
        $imgSteak2='https://www.bing.com/images/search?view=detailV2&ccid=PVuXzRsx&id=052B1BB6D08E7F2FBBBED7619A3A4F0341608E76&thid=OIP.PVuXzRsxq6XazJkPUv4D0wHaE8&mediaurl=https%3a%2f%2fshop.benazzoli.com%2fwp-content%2fuploads%2f2019%2f10%2fgrigliata-mista_1200x800-900x600.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.3d5b97cd1b31aba5dacc990f52fe03d3%3frik%3ddo5gQQNPOpph1w%26pid%3dImgRaw%26r%3d0&exph=600&expw=900&q=grigliata+mista&simid=607999672625274871&FORM=IRPRST&ck=B5C7688783F1E44292EEA1B3DC6DDAE3&selectedIndex=1';
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
                        get_new_product($j, $i, $faker->randomElement(['coca cola', 'fanta', 'sprite']), '3', 'https://www.bing.com/images/search?view=detailV2&ccid=R9prV8yr&id=0C940936792CE32F869E37AA16DBAA5D882B0B77&thid=OIP.R9prV8yrm7rtcrKPRNBqxQHaGU&mediaurl=https%3a%2f%2fs3.amazonaws.com%2fimages.ecwid.com%2fimages%2f46354171%2f2058155064.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.47da6b57ccab9bbaed72b28f44d06ac5%3frik%3ddwsriF2q2xaqNw%26pid%3dImgRaw%26r%3d0&exph=873&expw=1024&q=bibite+fanta+sprite+cocacola&simid=608009267583790249&FORM=IRPRST&ck=5B533D2CA40B7003C616E91F29C139F8&selectedIndex=3');
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
                        get_new_product($j, $i, $faker->randomElement(['nigiri', 'maki', 'uramaki']), '14', 'https://www.bing.com/images/search?view=detailV2&ccid=PxocyvuO&id=59DAE83D1D58B31DA534C0ECCED746AEE33B1691&thid=OIP.PxocyvuOjUKdW2kYSIyamwHaE8&mediaurl=https%3a%2f%2fcdn.grmag.com%2fwp-content%2fuploads%2fsites%2f113%2f2020%2f08%2fiStock-1053854124-scaled-e1597862441846.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.3f1a1ccafb8e8d429d5b6918488c9a9b%3frik%3dkRY7465G187swA%26pid%3dImgRaw%26r%3d0&exph=668&expw=1000&q=sushi&simid=608024132488163685&FORM=IRPRST&ck=AE2BD2C39FA50536702D147ADC06A21D&selectedIndex=14');
                    }
                }
            } elseif ($j == 4) {
                for ($i = 11; $i < 15; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['coca cola', 'fanta', 'sprite']), '3', 'https://www.bing.com/images/search?view=detailV2&ccid=R9prV8yr&id=0C940936792CE32F869E37AA16DBAA5D882B0B77&thid=OIP.R9prV8yrm7rtcrKPRNBqxQHaGU&mediaurl=https%3a%2f%2fs3.amazonaws.com%2fimages.ecwid.com%2fimages%2f46354171%2f2058155064.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.47da6b57ccab9bbaed72b28f44d06ac5%3frik%3ddwsriF2q2xaqNw%26pid%3dImgRaw%26r%3d0&exph=873&expw=1024&q=bibite+fanta+sprite+cocacola&simid=608009267583790249&FORM=IRPRST&ck=5B533D2CA40B7003C616E91F29C139F8&selectedIndex=3');
                    }
                }
            }
        }
        for ($j = 1; $j < 5; $j++) {
            if ($j == 1) {
                for ($i = 15; $i < 18; $i++) {
                    for ($x = 0; $x < 5; $x++) {
                        get_new_product($j, $i, $faker->randomElement(['hamburger maxi', 'hamburger vegetariano', 'hamburger']), '12', 'https://www.bing.com/images/search?view=detailV2&ccid=XainD0My&id=91241106339D5994590DF630A03E80AA51D0EB97&thid=OIP.XainD0My2VckyXAniM4eOQHaE7&mediaurl=https%3a%2f%2fimages.smulweb.nl%2fblog%2f2015%2f10%2fHamburger-1024x682.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.5da8a70f4332d95724c9702788ce1e39%3frik%3dl%252bvQUaqAPqAw9g%26pid%3dImgRaw%26r%3d0&exph=682&expw=1024&q=hamburger&simid=608028285718983484&FORM=IRPRST&ck=1568FA62CA6E75AC33EEFC9817BEDAF9&selectedIndex=28');
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
                        get_new_product($j, $i, $faker->randomElement(['coca cola', 'fanta', 'sprite']), '3', 'https://www.bing.com/images/search?view=detailV2&ccid=R9prV8yr&id=0C940936792CE32F869E37AA16DBAA5D882B0B77&thid=OIP.R9prV8yrm7rtcrKPRNBqxQHaGU&mediaurl=https%3a%2f%2fs3.amazonaws.com%2fimages.ecwid.com%2fimages%2f46354171%2f2058155064.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.47da6b57ccab9bbaed72b28f44d06ac5%3frik%3ddwsriF2q2xaqNw%26pid%3dImgRaw%26r%3d0&exph=873&expw=1024&q=bibite+fanta+sprite+cocacola&simid=608009267583790249&FORM=IRPRST&ck=5B533D2CA40B7003C616E91F29C139F8&selectedIndex=3');
                    }
                }
            }
        }
    }
}
