<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();

for ($j = 1; $j < 5; $j++) {
    if ($j == 1) {
        for ($i = 1; $i < 11; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'primi pasta';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=9Rr4YtYq&id=391EA49C83589301EDFA7DCCD4491B6CDEE9849A&thid=OIP.9Rr4YtYq5wxhcLD4BNT7TQHaE7&mediaurl=https%3a%2f%2fwww.ricettedellanonna.net%2fwp-content%2fuploads%2f2019%2f07%2fprimi-piatti.png&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.f51af862d62ae70c6170b0f804d4fb4d%3frik%3dmoTp3mwbSdTMfQ%26pid%3dImgRaw%26r%3d0&exph=666&expw=1000&q=Primo+Piatto+PNG&simid=607999324737966021&FORM=IRPRST&ck=A8C2E89DE9EE45E3ADE85B9CCD85DA79&selectedIndex=0';
                $new_product->save();
            }
        }
    } elseif ($j == 2) {
        for ($i = 1; $i < 11; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'secondi italiani';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=YNC9GdJ8&id=9CBFF6E2F5309B9446A86B60D1BE9DEA1B89B064&thid=OIP.YNC9GdJ8EFNsbY-T4uMjCAHaE8&mediaurl=https%3a%2f%2fi1.wp.com%2fwww.ricettasprint.it%2fwp-content%2fuploads%2f2018%2f05%2fsecondi-piatti.jpg%3fssl%3d1&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.60d0bd19d27c10536c6d8f93e2e32308%3frik%3dZLCJG%252bqdvtFgaw%26pid%3dImgRaw%26r%3d0&exph=483&expw=724&q=secondi+Piatto+PNG&simid=608049429827298516&FORM=IRPRST&ck=CB9B8FCFBFF2876D1F9F9579EDCB10D3&selectedIndex=5';
                $new_product->save();
            }
        }
    }elseif ($j == 3) {
        for ($i = 1; $i < 11; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'margherita';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=4lN5KeF9&id=3EC0CA41D946BD3F3C4C7B7F07FBF681D215DFF7&thid=OIP.4lN5KeF9MSzsUGLVjYy8igHaE7&mediaurl=https%3a%2f%2filfattoalimentare.it%2fwp-content%2fuploads%2f2017%2f03%2fFotolia_134998829_Subscription_Monthly_M.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.e2537929e17d312cec5062d58d8cbc8a%3frik%3d998V0oH2%252bwd%252few%26pid%3dImgRaw%26r%3d0&exph=1125&expw=1688&q=pizza+immagine&simid=607992439940737247&FORM=IRPRST&ck=775EA4E0524874EB20F5C2181B7AEFA6&selectedIndex=6';
                $new_product->save();
            }
        }
    }elseif ($j == 4) {
        for ($i = 1; $i < 11; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'cocacola';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=gOSWD16O&id=86B2E646A74E952F01A984793C99FD6B65AE318D&thid=OIP.gOSWD16OMZ6vAMmKT8ltUwHaHa&mediaurl=https%3a%2f%2fwww.nexpressdelivery.co.uk%2fimg%2fproduct%2fmain_697_cokecanpng.png&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.80e4960f5e8e319eaf00c98a4fc96d53%3frik%3djTGuZWv9mTx5hA%26pid%3dImgRaw%26r%3d0&exph=1500&expw=1500&q=cocacola+immagine&simid=608000561694261609&FORM=IRPRST&ck=A6D41813B27CB2FE44BBA440C317CCCC&selectedIndex=0';
                $new_product->save();
            }
        }
    }
}

for ($j = 1; $j < 5; $j++) {
    if ($j == 1) {
        for ($i = 11; $i < 15; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'primi cinesi/giapponesi';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=9AJrM%2buk&id=CC5FBB3FA3D692B6583D32E2D2365EBAAE909B21&thid=OIP.9AJrM-ukWGALsBfBHpFWuQHaFF&mediaurl=https%3a%2f%2fdata.viaggio-in-cina.it%2fkcfinder%2fupload%2fit%2fimage%2fSabrina%2fCiboHongKong800.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.f4026b33eba458600bb017c11e9156b9%3frik%3dIZuQrrpeNtLiMg%26pid%3dImgRaw%26r%3d0&exph=550&expw=800&q=primi+piatti+cinesi&simid=608054789948992696&FORM=IRPRST&ck=C8E96B558E1E23719CD6D20AA6DEC77B&selectedIndex=23';
                $new_product->save();
            }
        }
    } elseif ($j == 2) {
        for ($i = 11; $i < 15; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'sushi';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=PxocyvuO&id=59DAE83D1D58B31DA534C0ECCED746AEE33B1691&thid=OIP.PxocyvuOjUKdW2kYSIyamwHaE8&mediaurl=https%3a%2f%2fcdn.grmag.com%2fwp-content%2fuploads%2fsites%2f113%2f2020%2f08%2fiStock-1053854124-scaled-e1597862441846.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.3f1a1ccafb8e8d429d5b6918488c9a9b%3frik%3dkRY7465G187swA%26pid%3dImgRaw%26r%3d0&exph=668&expw=1000&q=sushi&simid=608024132488163685&FORM=IRPRST&ck=AE2BD2C39FA50536702D147ADC06A21D&selectedIndex=14';
                $new_product->save();
            }
        }
    }elseif ($j == 4) {
        for ($i = 11; $i < 15; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'cocacola';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=gOSWD16O&id=86B2E646A74E952F01A984793C99FD6B65AE318D&thid=OIP.gOSWD16OMZ6vAMmKT8ltUwHaHa&mediaurl=https%3a%2f%2fwww.nexpressdelivery.co.uk%2fimg%2fproduct%2fmain_697_cokecanpng.png&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.80e4960f5e8e319eaf00c98a4fc96d53%3frik%3djTGuZWv9mTx5hA%26pid%3dImgRaw%26r%3d0&exph=1500&expw=1500&q=cocacola+immagine&simid=608000561694261609&FORM=IRPRST&ck=A6D41813B27CB2FE44BBA440C317CCCC&selectedIndex=0';
                $new_product->save();
            }
        }
    }
}
for ($j = 1; $j < 5; $j++) {
    if ($j == 1) {
        for ($i = 15; $i < 18; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'hamburger';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=XainD0My&id=91241106339D5994590DF630A03E80AA51D0EB97&thid=OIP.XainD0My2VckyXAniM4eOQHaE7&mediaurl=https%3a%2f%2fimages.smulweb.nl%2fblog%2f2015%2f10%2fHamburger-1024x682.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.5da8a70f4332d95724c9702788ce1e39%3frik%3dl%252bvQUaqAPqAw9g%26pid%3dImgRaw%26r%3d0&exph=682&expw=1024&q=hamburger&simid=608028285718983484&FORM=IRPRST&ck=1568FA62CA6E75AC33EEFC9817BEDAF9&selectedIndex=28';
                $new_product->save();
            }
        }
    } elseif ($j == 2) {
        for ($i = 15; $i < 18; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'secondi carne';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=Z4agZy%2fG&id=2508B6B06F9176B8EA658F056B1C2DCEF3756046&thid=OIP.Z4agZy_GK5Xm5rRvkgHOcgHaFa&mediaurl=https%3a%2f%2fwww.braciamiancora.com%2fwp-content%2fuploads%2f2020%2f04%2fsteak.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.6786a0672fc62b95e6e6b46f9201ce72%3frik%3dRmB1884tHGsFjw%26pid%3dImgRaw%26r%3d0&exph=935&expw=1280&q=bistecche&simid=608015203240862028&FORM=IRPRST&ck=BBA9957BF8897401A72577638AD3F404&selectedIndex=20';
                $new_product->save();
            }
        }
    }elseif ($j == 4) {
        for ($i = 15; $i < 18; $i++) {
            for ($x = 0; $x < 5; $x++) {
                $new_product = new Product();
                $new_product->category_id = $category->id = $j;
                $new_product->restaurant_id = $i;
                $new_product->visible = true;
                $new_product->name = 'cocacola';
                $new_product->price = 12;
                $new_product->image = 'https://www.bing.com/images/search?view=detailV2&ccid=gOSWD16O&id=86B2E646A74E952F01A984793C99FD6B65AE318D&thid=OIP.gOSWD16OMZ6vAMmKT8ltUwHaHa&mediaurl=https%3a%2f%2fwww.nexpressdelivery.co.uk%2fimg%2fproduct%2fmain_697_cokecanpng.png&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.80e4960f5e8e319eaf00c98a4fc96d53%3frik%3djTGuZWv9mTx5hA%26pid%3dImgRaw%26r%3d0&exph=1500&expw=1500&q=cocacola+immagine&simid=608000561694261609&FORM=IRPRST&ck=A6D41813B27CB2FE44BBA440C317CCCC&selectedIndex=0';
                $new_product->save();
            }
        }
    }
}
               
            }
           
        
    
}
