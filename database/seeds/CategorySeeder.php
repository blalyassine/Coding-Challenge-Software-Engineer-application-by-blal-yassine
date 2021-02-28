<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product=App\Product::All();
         factory(App\Category::class,10)->make()->each(function($Category) use ($product){
         $Category->parent_id=$product->random()->id;
         $Category->save();
        });
    }
}
