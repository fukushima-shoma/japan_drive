<?php

use Illuminate\Database\Seeder;

class HomeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('home_categories')->insert([
        ['home_category_name' => 'ホーム'],
        ['home_category_name' => 'ツーリング'],
        ['home_category_name' => 'グルメ'],
        ['home_category_name' => '観光'],
        ['home_category_name' => '天気'],
      ]);
    }
}
