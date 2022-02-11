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
            "title" => " موبایل",
            "description" => "موبایل درجه یک برادران هاشمی",
            "price" => "20000",
            "star" => 5
        ]);
        DB::table('products')->insert([
            "title" => " لپ تاپ",
            "description" => "لپ تاپ خیلی خوب و درجه یک و ارزون از برند قوقالعاده لنوو که با اون میتونین کد بزنین",
            "price" => "5000000",
            "star" => 5
        ]);
    }
}
