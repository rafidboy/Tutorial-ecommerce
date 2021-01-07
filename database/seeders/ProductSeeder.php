<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        DB::table('products')->insert([
            ['nama'=>'oppo A53 ',
            'harga'=>'300',
            'kategori'=>'mobile',
            'deskripsi'=>'Bagus',
            'galeri'=>'https://www.oppo.com/content/dam/oppo/product-asset-library/a/a53/v2/specs/assets/kv.png',]
            
        ]);
    }
}
