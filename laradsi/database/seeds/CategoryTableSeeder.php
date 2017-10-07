<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'economia']);
        Category::create(['name'=>'deportes']);
        Category::create(['name'=>'cultura']);
        Category::create(['name'=>'entretenimiento']);
        Category::create(['name'=>'salud']);
        Category::create(['name'=>'religion']);
    }
}
