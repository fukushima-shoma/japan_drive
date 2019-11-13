<?php

use Illuminate\Database\Seeder;

class PrefsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('prefs')->insert([
        ['pref_name' => '北海道'],
        ['pref_name' => '青森'],
        ['pref_name' => '秋田'],
        ['pref_name' => '山形'],
        ['pref_name' => '福島'],
        ['pref_name' => '宮城'],
        ['pref_name' => '岩手'],
        ['pref_name' => '栃木'],
        ['pref_name' => '群馬'],
        ['pref_name' => '埼玉'],
        ['pref_name' => '東京'],
        ['pref_name' => '神奈川'],
        ['pref_name' => '千葉'],
        ['pref_name' => '茨城'],
        ['pref_name' => '新潟'],
        ['pref_name' => '富山'],
        ['pref_name' => '石川'],
        ['pref_name' => '福井'],
        ['pref_name' => '山梨'],
        ['pref_name' => '長野'],
        ['pref_name' => '愛知'],
        ['pref_name' => '静岡'],
        ['pref_name' => '岐阜'],
        ['pref_name' => '京都'],
        ['pref_name' => '大阪'],
        ['pref_name' => '兵庫'],
        ['pref_name' => '和歌山'],
        ['pref_name' => '奈良'],
        ['pref_name' => '滋賀'],
        ['pref_name' => '三重'],
        ['pref_name' => '鳥取'],
        ['pref_name' => '島根'],
        ['pref_name' => '山口'],
        ['pref_name' => '広島'],
        ['pref_name' => '岡山'],
        ['pref_name' => '香川'],
        ['pref_name' => '愛媛'],
        ['pref_name' => '高知'],
        ['pref_name' => '徳島'],
        ['pref_name' => '福岡'],
        ['pref_name' => '佐賀'],
        ['pref_name' => '長崎'],
        ['pref_name' => '熊本'],
        ['pref_name' => '鹿児島'],
        ['pref_name' => '宮崎'],
        ['pref_name' => '大分'],
        ['pref_name' => '沖縄'],  
      ]);
    }
}
