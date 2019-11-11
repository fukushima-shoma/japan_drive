<?php

use Illuminate\Database\Seeder;

class SightseeingAreasThemeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sightseeing_areas_theme_categories')->insert([
        ['sightseeing_area_theme_category_name' => '自然・風景'],
        ['sightseeing_area_theme_category_name' => '建物・史跡'],
        ['sightseeing_area_theme_category_name' => '公園・植物園'],
        ['sightseeing_area_theme_category_name' => '美術館・博物館'],
        ['sightseeing_area_theme_category_name' => 'テーマパーク・体験施設'],
        ['sightseeing_area_theme_category_name' => '温泉'],
        ['sightseeing_area_theme_category_name' => '道の駅'],
        ['sightseeing_area_theme_category_name' => 'グルメ'],

      ]);
    }
}
