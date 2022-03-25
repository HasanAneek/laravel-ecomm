<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone',
                'price' => '999$',
                'category' =>'mobile',
                'gallery' => "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-black-select-2020?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1604343702000",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, reprehenderit.'
            ],
            [
                'name' => 'Samsung',
                'price' => '800$',
                'category' =>'mobile',
                'gallery' => "https://www.samsung.com/global/galaxy/main/images/kv_galaxy-s22_s.jpg",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, reprehenderit.'
            ],
            [
                'name' => 'One Plus',
                'price' => '900$',
                'category' =>'mobile',
                'gallery' => "https://ae01.alicdn.com/kf/H79555caded584067a86ef640c1c15b98C/Global-Version-OnePlus-Nord-5G-OnePlus-Official-Store-Snapdragon-765G-Smartphone-8GB-128GB-6-44-90Hz.png",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, reprehenderit.'
            ],
            [
                'name' => 'Google Pixel',
                'price' => '999$',
                'category' =>'mobile',
                'gallery' => "https://images-eu.ssl-images-amazon.com/images/I/41Kv6TePGRL._SX300_SY300_QL70_ML2_.jpg",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, reprehenderit.'
            ],
            [
                'name' => 'Asus',
                'price' => '700$',
                'category' =>'mobile',
                'gallery' => "https://fdn2.gsmarena.com/vv/pics/asus/asus-zenfone-8-01.jpg",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, reprehenderit.'
            ]
            ]);
    }
}
