<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=[
            [
                'name'=>'https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/samsung_galaxy_a50/samsung_galaxy_a50_L_1.jpg',
                'card_id'=>1
            ],
            [
                'name'=>'https://images-na.ssl-images-amazon.com/images/I/61YVqHdFRxL._SX569_.jpg',
                'card_id'=>1
            ],
            [
                'name'=>'https://media.wired.com/photos/5a91c7303ea6d47cc8933e40/master/pass/Samsung-TA.jpg',
                'card_id'=>1
            ],
            [
                'name'=>'https://www.maltalingua.com/sites/default/files/styles/front_header_banner/public/language-school_0.jpg',
                'card_id'=>2
            ],
            [
                'name'=>'https://www.dilit.it/upload/CONF68/20151014/23-tSa-1140X475.png',
                'card_id'=>2
            ],
            [
                'name'=>'https://cdn.ila-france.com/wp-content/uploads/2015/02/our-students-1750x660-1.jpg',
                'card_id'=>2
            ],
            [
                'name'=>'https://cache.marriott.com/marriottassets/marriott/TPETM/tpetm-entrance-0006-hor-feat.jpg',
                'card_id'=>3
            ],
            [
                'name'=>'https://s23040.pcdn.co/wp-content/images/rewards-hero.jpg',
                'card_id'=>3
            ],
            [
                'name'=>'https://s-ec.bstatic.com/images/hotel/max1024x768/229/22931657.jpg',
                'card_id'=>3
            ]
            ];
            DB::table('images')->insert($images);
    }
}
