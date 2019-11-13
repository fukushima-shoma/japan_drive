<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('seasons')->insert([
        ['season_name' => '春'],
        ['season_name' => '夏'],
        ['season_name' => '秋'],
        ['season_name' => '冬'],
        ['season_name' => '通年'],
      ]);
    }
}
