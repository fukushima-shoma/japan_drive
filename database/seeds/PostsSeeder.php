<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        [
          'title' => '杉戸天然温泉 雅楽の湯',
          'theme' => '自然,綺麗',
          'user_id' => 1,
          'category_id' => 1,
          'area_id' => 62,
          'zip' => '345-0036',
          'prefecture' => '埼玉県',
          'address' => '埼玉県北葛飾郡杉戸町杉戸2517',
          'access' => '東武伊勢崎線「東武動物公園駅（東口）」より送迎バスあり\n圏央道　幸手ICから約7分。\n東北自動車道 岩槻ＩＣから約30分。久喜ICから約20分。',
          'parking' => '170台(無料）',
          'content' => '埼玉県は東部。周囲を田園に囲まれたのどかな風景の中につくられた大露天風呂。四季を通じて味わえる美しい木々と杉戸の広い空を眺めながら、天然のなめらかな湯と自然を満喫して下さい。 露天風呂は、身体を芯から温められる「源泉あつ湯」、のんびりと贅沢に利用できる「生源泉つぼ風呂・石風呂」、きめ細かい炭酸ガスを天然温泉に溶かしこんだ「高濃度炭酸温泉」、他にも「岩風呂」「寝湯・寝ころび湯」と多彩。快適な湯めぐりをお楽しみいただけます。',
          'image_path1' => null,
          'image_path2' => null,
          'image_path3' => null,
          'likes_count' => 0,
          'created_at' => '2019-11-13',
          'updated_at' => null

          ]
      ]);
    }
}
