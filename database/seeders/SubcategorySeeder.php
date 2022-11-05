<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [

            // Verstidos
            [
                'category_id' =>  1,
                'name' => 'Vestidos',
                'slug' => Str::slug('Vestidos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  1,
                'name' => 'Luxe',
                'slug' => Str::slug('Luxe'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  1,
                'name' => 'Conjuntos',
                'slug' => Str::slug('Conjuntos'),
                'color' => true,
                'size' => true
            ],

               // Jeans
            [
                'category_id' =>  2,
                'name' => 'Baggy',
                'slug' => Str::slug('Baggy'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' =>  2,
                'name' => 'Straight',
                'slug' => Str::slug('Straight'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'High Rise',
                'slug' => Str::slug('High Rise'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' =>  2,
                'name' => 'Skinny',
                'slug' => Str::slug('Skinny'),
                'color' => true,
                'size' => true
            ],
 
            [
                'category_id' =>  2,
                'name' => 'Tradicional',
                'slug' => Str::slug('Tradicional'),
                'color' => true,
                'size' => true
            ],
 
             // Conjuntos
            [
                'category_id' =>  3,
                'name' => 'Casual',
                'slug' => Str::slug('Casual'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' =>  3,
                'name' => 'Luxe',
                'slug' => Str::slug('Luxe'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' =>  3,
                'name' => 'Hogar',
                'slug' => Str::slug('Hogar'),
                'color' => true,
                'size' => true
                
            ],

                // Top Jeans
            [
                'category_id' =>  4,
                'name' => 'Jackets',
                'slug' => Str::slug('Jackets'),
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Jeans',
                'slug' => Str::slug('Jeans'),
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Bolsos',
                'slug' => Str::slug('Bolsos'),
                
            ],
            [
                'category_id' =>  4,
                'name' => 'sweeters',
                'slug' => Str::slug('sweeters'),
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Shorts',
                'slug' => Str::slug('Shorts'),
                'size' => true
            ],

             // Ropa Intima
            [
                'category_id' =>  5,
                'name' => 'Brassiers',
                'slug' => Str::slug('Brassiers'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  5,
                'name' => 'Sostenes',
                'slug' => Str::slug('Sostenes'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  5,
                'name' => 'Pantaletas y Bikinis',
                'slug' => Str::slug('Pantaletas y Bikinis'),
                'color' => true,
                'size' => true
            ],

             // Playeros
            [
                'category_id' =>  6,
                'name' => 'Trajes de Baños',
                'slug' => Str::slug('Trajes de Baños'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  6,
                'name' => 'Pareos',
                'slug' => Str::slug('Pareos'),
                'color' => true
            ],
            [
                'category_id' =>  6,
                'name' => 'Sombreros',
                'slug' => Str::slug('Sombreros'),
                'color' => true
            ],
            [
                'category_id' =>  6,
                'name' => 'Sandalias',
                'slug' => Str::slug('Sandalias'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' =>  6,
                'name' => 'Paños',
                'slug' => Str::slug('Paños'),
                'color' => true
            ],
            [
                'category_id' =>  6,
                'name' => 'Bolsos',
                'slug' => Str::slug('Bolsos'),
                'color' => true
            ],
            [
                'category_id' =>  6,
                'name' => 'Lentes de Sol',
                'slug' => Str::slug('Lentes de Sol'),
                'color' => false
            ],

            // Deportivo 
            [
                'category_id' =>  7,
                'name' => 'Monos',
                'slug' => Str::slug('Monos'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' =>  7,
                'name' => 'Sweeter',
                'slug' => Str::slug('Sweeter'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' =>  7,
                'name' => 'Jackets',
                'slug' => Str::slug('Jackets'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' =>  7,
                'name' => 'Licras',
                'slug' => Str::slug('Licras'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' =>  7,
                'name' => 'Leggins',
                'slug' => Str::slug('Leggins'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' =>  7,
                'name' => 'Shorts',
                'slug' => Str::slug('Shorts'),
                'color' => true,
                'size' => true

            ],

            // Zapatos
            [
                'category_id' =>  8,
                'name' => 'Botas',
                'slug' => Str::slug('Botas'),
                'color' => true
            ],
            [
                'category_id' =>  8,
                'name' => 'Tacones',
                'slug' => Str::slug('Tacones'),
                'color' => true
            ],
            [
                'category_id' =>  8,
                'name' => 'Casual',
                'slug' => Str::slug('Casual'),
                'color' => true
            ],
            [
                'category_id' =>  8,
                'name' => 'Deportivos',
                'slug' => Str::slug('Deportivos'),
                'color' => true
            ],
            [
                'category_id' =>  8,
                'name' => 'Bajos',
                'slug' => Str::slug('Bajos'),
                'color' => true
            ],
            [
                'category_id' =>  8,
                'name' => 'Sandalias',
                'slug' => Str::slug('Sandalias'),
                'color' => true
            ],

            // Accesoriios
            [
                'category_id' =>  9,
                'name' => 'Sarcillos',
                'slug' => Str::slug('Sarcillos'),
                
            ],
            [
                'category_id' =>  9,
                'name' => 'Pulceras',
                'slug' => Str::slug('Pulceras'),
                
            ],
            [
                'category_id' =>  9,
                'name' => 'Ganchetas',
                'slug' => Str::slug('Ganchetas'),
                'color' => true
            ],
            [
                'category_id' =>  9,
                'name' => 'Cadenas',
                'slug' => Str::slug('Cadenas'),
                
            ],
            [
                'category_id' =>  9,
                'name' => 'Perfumes',
                'slug' => Str::slug('Perfumes'),
                
            ],
            [
                'category_id' =>  9,
                'name' => 'Cremas',
                'slug' => Str::slug('Cremas'),
                
            ],

            ];
            
            foreach ($subcategories as $subcategory){
                Subcategory::factory(1)->create($subcategory);
              }
    }
}
