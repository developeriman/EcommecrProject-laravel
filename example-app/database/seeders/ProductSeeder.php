<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
    [
            'name'=>'Panasoinc TV', 
            'price'=>'400', 
             'category'=>'tv',
            'description'=>'A smart tv with much more feature',
            'gallery'=>'https://static.digit.in/default/514997f36523c8adf3cb55a2d5f552a58b5bbabb.jpeg?tr=w-1200', 
    ],
    [
            'name'=>'sony tv', 
            'price'=>'400', 
             'category'=>'tv',
            'description'=>'A smart with much more feature',
            'gallery'=>'https://www.mke.com.bd/pub/media/catalog/product/cache/34a90cddec6fe65108e6e12543ab3753/t/i/tivi-sony-kd-55x8000g-1.jpg', 
    ],
    [
            'name'=>'LG fridge', 
            'price'=>'500', 
             'category'=>'fridge',
            'description'=>'A LG firdge with  much more feature',
            'gallery'=>'https://www.butterflygroupbd.com/media/catalog/product/cache/a256606fc0a9a79df2101e339f07be86/l/g/lg_284_liter_no-frost_refrigerator_shiny_steel.jpg', 
    ],
    );    
    }
}
