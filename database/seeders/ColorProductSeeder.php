<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //whereHas hace una consulta a los modelos en este caso de Product

        $products = Product::whereHas('subcategory', function(Builder $query){  
            $query->where('color', true)
                    ->where('size', false);
        })->get();

        foreach ($products as $product) {
            $product->colors()->attach([
                1 => [
                    'quantity' => 8
                ], 
                2 => [
                    'quantity' => 6
                ], 
                3 => [
                    'quantity' => 10
                ], 
                4 => [
                    'quantity' => 15
                ]
            ]);
        }
    }
}

