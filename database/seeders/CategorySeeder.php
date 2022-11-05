<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Vestidos',
                'slug' => Str::slug('Vestidos'),
            ],
            [
                'name' => 'Jeans',
                'slug' => Str::slug('Jeans'),
            ],
            [
                'name' => 'Conjuntos',
                'slug' => Str::slug('Conjuntos'),
            ],
            [
                'name' => 'Top Jean',
                'slug' => Str::slug('Top Jean'),
            ],
            [
                'name' => 'Ropa Intima',
                'slug' => Str::slug('Ropa Intima'),
            ],
            [
                'name' => 'Playeros',
                'slug' => Str::slug('Playeros'),
            ],
            [
                'name' => 'Deportivos',
                'slug' => Str::slug('Deportivos'),
            ],
            [
                'name' => 'Zapatos',
                'slug' => Str::slug('Zapatos'),
            ],
            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios')
            ],
        ];
        foreach ($categories as $category) {
           $category = Category::factory(1)->create($category)->first(); 
           
           $brands = Brand::factory(4)->create();

           foreach ($brands as $brand)
           $brand->categories()->attach($category->id);
        }
    }
}
