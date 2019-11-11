<?php

use Illuminate\Database\Seeder;

class FoodsThemeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('foods_theme_categories')->insert([
        ['food_theme_category_name' => '野菜・農産品'],
        ['food_theme_category_name' => '魚介・海産品'],
        ['food_theme_category_name' => '肉類・畜産類'],
        ['food_theme_category_name' => '果実・種実'],
        ['food_theme_category_name' => 'お米・穀物'],
        ['food_theme_category_name' => '乳製品・卵'],

      ]);
    }
}
