<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class DatabaseSeeder extends Seeder
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
            $newProduct->artists = json_encode($product['artists']);
            $newProduct->writers = json_encode($product['writers']);
            $newProduct->slug = $product['slug'];
            $newProduct->save();
        }
    }
}
