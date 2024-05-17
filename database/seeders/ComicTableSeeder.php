<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Functions\Helper;

class ComicTableSeeder extends Seeder
{
    public function run(): void
    {
        $products = config('comics');
        foreach ($products as $product) {
            $newProduct = new Comic();
            $newProduct->title = $product['title'];
            $newProduct->description = $product['description'];
            $newProduct->thumb = $product['thumb'];
            $newProduct->price = $product['price'];
            $newProduct->series = $product['series'];
            $newProduct->sale_date = $product['sale_date'];
            $newProduct->type = $product['type'];
            $newProduct->artists = implode(",", $product['artists']);
            $newProduct->writers = implode(",", $product['writers']);
            $newProduct->slug = Helper::generateSlug($newProduct->title, new Comic());
            $newProduct->save();
        }
    }
}
