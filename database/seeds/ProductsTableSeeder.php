<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       // bats
        for ($i = 1; $i < 30; $i++ ){

        
        Product::create([
                    'name' => 'Bat' . $i,
                    'slug' =>'bat-' . $i,
                    'details' => [18,19,20][array_rand([18,19,20])] . 'inch,' . [1,2,3][array_rand([1,2,3])] . 'Bat with branding',
                    'price' => rand(14999,24999),
                    'description'=> 'lorem' . $i . 'ipsum my description of my bat my data',


        ])->categories()->attach(1);
        }

        // // bat has 2 categories
        // $product = Product::find(1);
        // $product->categories()->attach(3);



                    //balls
        for($i = 31; $i < 40; $i++ ){

        
            Product::create([
                        'name' => 'Ball' . $i,
                        'slug' =>'ball-' . $i,
                        'details' => [18,19,20][array_rand([18,19,20])] . 'inch,' . [1,2,3][array_rand([1,2,3])] . 'Ball with branding',
                        'price' => rand(14999,24999),
                        'description'=> 'lorem' . $i . 'ipsum my description of my bat my data',
    
    
            ])->categories()->attach(2);
            }

                    // ball is in 2 categories
        // $product = Product::find(2);
        // $product->categories()->attach(3);



                                //kits
        for($i = 41; $i < 50; $i++ ){

        
            Product::create([
                        'name' => 'kit' . $i,
                        'slug' =>'kit-' . $i,
                        'details' => [18,19,20][array_rand([18,19,20])] . 'inch,' . [1,2,3][array_rand([1,2,3])] . 'Ball with branding',
                        'price' => rand(14999,24999),
                        'description'=> 'lorem' . $i . 'ipsum my description of my bat my data',
    
    
            ])->categories()->attach(3);
            }



    
    }
}

