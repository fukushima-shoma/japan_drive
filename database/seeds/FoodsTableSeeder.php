<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('foods')->insert([
          [
            'home_category_id' => 1,
            'food_theme_category_id' => 1,
            'region_id' => ,
            'pref_id' => ,
            'season_id' =>,
            'food_name' => '',
            'food_adress' => '',
            
          ],
          [
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'hoge',
            'content' => 'test2',
            'image' => ''
          ],
          [
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'hoge',
            'content' => 'test3',
            'image' => ''
          ]
    }
}
