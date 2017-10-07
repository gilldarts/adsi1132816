<?php

use Illuminate\Database\Seeder;
use App\Article;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(['name'=>'economia','image'=>'imgs/articles/petroleo.png','content'=>'Lorem ipsum dolor sit amet.','category_id'=>1]);
        Article::create(['name'=>'nairto','image'=>'imgs/articles/nairo.png','content'=>'Lorem ipsum dolor sit amet.','category_id'=>3]);
        Article::create(['name'=>'nintendo swich','image'=>'imgs/articles/nintendo.png','content'=>'Lorem ipsum dolor sit amet.','category_id'=>5]);
    }
}
