<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now= Carbon::now()->toDateTimeString();

        Category::insert([
            ['name'=> 'bats', 'slug' => 'bats' , 'created_at' => $now, 'updated_at' => $now],
            ['name'=> 'balls', 'slug' => 'balls' , 'created_at' => $now, 'updated_at' => $now],
            ['name'=> 'kits', 'slug' => 'kits' , 'created_at' => $now, 'updated_at' => $now],


        ]);


    }
}
