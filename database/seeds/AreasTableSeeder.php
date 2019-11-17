<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('areas')->insert([
          [
            'area_name' => 'さいたま市',
            'latitude' => '35.861649',
            'longitude' => '139.645478',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '川越市',
            'latitude' => '35.925134',
            'longitude' => '139.485804',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '熊谷市',
            'latitude' => '36.147196',
            'longitude' => '139.38898',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '川口市',
            'latitude' => '35.807736',
            'longitude' => '139.724187',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '行田市',
            'latitude' => '36.13905',
            'longitude' => '139.455933',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '秩父市',
            'latitude' => '35.991644',
            'longitude' => '139.085587',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '所沢市',
            'latitude' => '35.799423',
            'longitude' => '139.468711',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '飯能市',
            'latitude' => '35.855103',
            'longitude' => '139.328608',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '加須市',
            'latitude' => '36.131388',
            'longitude' => '139.601771',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '本庄市',
            'latitude' => '36.243548',
            'longitude' => '139.190477',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '東松山市',
            'latitude' => '36.042208',
            'longitude' => '139.399972',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '春日部市',
            'latitude' => '35.975262',
            'longitude' => '139.752313',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '狭山市',
            'latitude' => '35.852839',
            'longitude' => '139.412183',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '羽生市',
            'latitude' => '36.172671',
            'longitude' => '139.5484592',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '鴻巣市',
            'latitude' => '36.06591',
            'longitude' => '139.52217',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '深谷市',
            'latitude' => '36.197482',
            'longitude' => '139.281448',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '上尾市',
            'latitude' => '35.977447',
            'longitude' => '139.59318',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '草加市',
            'latitude' => '35.825408',
            'longitude' => '139.805378',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '越谷市',
            'latitude' => '35.889699',
            'longitude' => '139.791486',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '蕨市',
            'latitude' => '35.825592',
            'longitude' => '139.679757',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '戸田市',
            'latitude' => '35.817585',
            'longitude' => '139.677779',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '入間市',
            'latitude' => '35.8358',
            'longitude' => '139.391079',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '朝霞市',
            'latitude' => '35.79717',
            'longitude' => '139.593641',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '志木市',
            'latitude' => '35.836195',
            'longitude' => '139.580058',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '和光市',
            'latitude' => '35.781333',
            'longitude' => '139.605806',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '新座市',
            'latitude' => '35.793153',
            'longitude' => '139.56573',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '桶川市',
            'latitude' => '36.005766',
            'longitude' => '139.542583',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '久喜市',
            'latitude' => '36.062029',
            'longitude' => '139.666777',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '北本市',
            'latitude' => '36.026803',
            'longitude' => '139.530199',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '八潮市',
            'latitude' => '35.822679',
            'longitude' => '139.839239',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '富士見市',
            'latitude' => '35.856857',
            'longitude' => '139.547966',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '三郷市',
            'latitude' => '35.830226',
            'longitude' => '139.872331',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '蓮田市',
            'latitude' => '35.994368',
            'longitude' => '139.662176',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '坂戸市',
            'latitude' => '35.957357',
            'longitude' => '139.40314',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '幸手市',
            'latitude' => '36.078098',
            'longitude' => '139.725881',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '鶴ヶ島市',
            'latitude' => '35.934505',
            'longitude' => '139.393127',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '日高市',
            'latitude' => '35.907725',
            'longitude' => '139.339016',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '吉川市',
            'latitude' => '35.896147',
            'longitude' => '139.855555',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => 'ふじみ野市',
            'latitude' => '35.879352',
            'longitude' => '139.519617',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '白岡市',
            'latitude' => '36.019114',
            'longitude' => '139.676853',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '伊奈町',
            'latitude' => '35.999584',
            'longitude' => '139.624471',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '三芳町',
            'latitude' => '35.828386',
            'longitude' => '139.526475',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '毛呂山町',
            'latitude' => '35.941562',
            'longitude' => '139.315959',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '越生町',
            'latitude' => '35.96452',
            'longitude' => '139.29421',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '滑川町',
            'latitude' => '36.066007',
            'longitude' => '139.360815',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '嵐山町',
            'latitude' => '36.056536',
            'longitude' => '139.320551',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '小川町',
            'latitude' => '36.056628',
            'longitude' => '139.26191',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '川島町',
            'latitude' => '35.992467',
            'longitude' => '139.484289',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '吉見町',
            'latitude' => '36.039869',
            'longitude' => '139.45376',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '鳩山町',
            'latitude' => '35.981695',
            'longitude' => '139.334271',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => 'ときがわ町',
            'latitude' => '36.008673',
            'longitude' => '139.297012',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '横瀬町',
            'latitude' => '35.987284',
            'longitude' => '139.100015',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '皆野町',
            'latitude' => '36.070861',
            'longitude' => '139.098666',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '長瀞町',
            'latitude' => '36.114768',
            'longitude' => '139.109611',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '小鹿野町',
            'latitude' => '36.017277',
            'longitude' => '139.008676',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '東秩父村',
            'latitude' => '36.058252',
            'longitude' => '139.194688',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '美里町',
            'latitude' => '36.177158',
            'longitude' => '139.181514',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '神川町',
            'latitude' => '36.213889',
            'longitude' => '139.101771',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '上里町',
            'latitude' => '36.251814',
            'longitude' => '139.145163',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '寄居町',
            'latitude' => '36.118416',
            'longitude' => '139.192954',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '宮代町',
            'latitude' => '36.022654',
            'longitude' => '139.722984',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '杉戸町',
            'latitude' => '36.025851',
            'longitude' => '139.736743',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ],
          [
            'area_name' => '松伏町',
            'latitude' => '35.92561',
            'longitude' => '139.815276',
            'created_at' => '2019-11-14',
            'updated_at' => null

          ]
        ]);
    }
}
