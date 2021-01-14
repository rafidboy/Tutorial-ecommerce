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
            [
                'nama'=>'oppo A2 ',
                'price'=>'300',
                'kategori'=>'mobile',
                'deskripsi'=>'Bagus',
                'galeri'=>'https://imageshack.com/i/pnoI9ukXp'
            ],
            [
                'nama'=>'oppo A32 ',
                'price'=>'300',
                'kategori'=>'mobile',
                'deskripsi'=>'Bagus',
                'galeri'=>'https://imageshack.com/i/pnoI9ukXp'
            ],
            [
                'nama'=>'oppo A4 ',
                'price'=>'300',
                'kategori'=>'mobile',
                'deskripsi'=>'Bagus',
                'galeri'=>'https://imageshack.com/i/pnoI9ukXp'
            ],

        ]);
    }
}
