<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Clothes_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('clothes')->insert([
                'number' => '450198',
                'name' => 'ファーリーフリースフルジップジャケット（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450198-000/01?colorDisplayCode=27&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450195',
                'name' => 'フリースフルジップジャケット（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450195-000/01?colorDisplayCode=26&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '449632',
                'name' => 'ウルトラライトダウンベスト（ワイドキルト）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E449632-000/01?colorDisplayCode=32&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '451702',
                'name' => 'ウルトラライトダウンジャケット（3Dカット）',
                'price' => '4990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E451702-000/00?colorDisplayCode=24&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '449628',
                'name' => 'ヒートテックウォームパデッドベスト',
                'price' => '4990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E449628-000/00?colorDisplayCode=08&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '449613',
                'name' => 'ポケッタブルUVカットパーカ（3Dカット）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444550-000/00?colorDisplayCode=03&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '449614',
                'name' => 'ブロックテックパーカ（3Dカット）',
                'price' => '5990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E449614-000/00?colorDisplayCode=09&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '453776',
                'name' => 'デニムジャケット',
                'price' => '4990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E449616-000/00?colorDisplayCode=65&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '449629',
                'name' => 'MA-1ブルゾン',
                'price' => '5990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E449629-000/00?colorDisplayCode=57&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457986',
                'name' => 'オーバーサイズユーティリティジャケット',
                'price' => '7990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457986-000/00?colorDisplayCode=12&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450543',
                'name' => 'カシミヤクルーネックセーター（長袖）',
                'price' => '9990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450543-000/00?colorDisplayCode=32&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455402',
                'name' => 'スウェットカーディガン（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455402-000/00?colorDisplayCode=09&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455396',
                'name' => ' スウェットハーフジッププルオーバー（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455396-000/00?colorDisplayCode=30&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '453763',
                'name' => 'ウォッシャブルミラノリブVネックカーディガン',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E453763-000/00?colorDisplayCode=09&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '453761',
                'name' => '3Dクルーネックセーター（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E453761-000/00?colorDisplayCode=02&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457087',
                'name' => 'スウェットプルパーカ',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E453613-000/00?colorDisplayCode=02&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '456971',
                'name' => 'ライトウエイトスウェットシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E456971-000/00?rrec=true&colorDisplayCode=08&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455400',
                'name' => 'スウェットフルジップパーカ（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450189-000/00?colorDisplayCode=68&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455395',
                'name' => 'スウェットプルパーカ（長袖）セットアップ可能',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444967-000/00?colorDisplayCode=76&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '433047',
                'name' => 'ウルトラストレッチドライスウェットフルジップパーカ（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E429183-000/00?colorDisplayCode=58&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458468',
                'name' => 'スウェットプルパーカ（長袖・欧米仕様）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E458468-000/00?colorDisplayCode=01&sizeDisplayCode=005',
                'category_id' => 2,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455978',
                'name' => 'オーバーサイズワークシャツ（半袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455978-000/00?colorDisplayCode=79&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457425',
                'name' => 'エクストラファインコットンオーバーサイズスタンドカラーシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457425-000/00?colorDisplayCode=00&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457426',
                'name' => 'デニムオーバーサイズスタンドカラーシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457426-000/00?colorDisplayCode=01&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450267',
                'name' => 'フランネルシャツ（ボタンダウンカラー・長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450267-000/00?colorDisplayCode=67&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455955',
                'name' => 'オックスフォードシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450259-000/00?colorDisplayCode=64&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '444645',
                'name' => 'オープンカラーシャツ（半袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444645-000/00?colorDisplayCode=56&sizeDisplayCode=005',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '444641',
                'name' => 'プレミアムリネンシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444641-000/00?colorDisplayCode=52&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '444754',
                'name' => 'リネンコットンスタンドカラーシャツ（半袖）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444754-000/00?colorDisplayCode=69&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '452303',
                'name' => 'ヒッコリーワークシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E452479-000/00?colorDisplayCode=65&sizeDisplayCode=005',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455962',
                'name' => 'オーバーサイズシャツ（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455962-000/00?colorDisplayCode=40&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '453002',
                'name' => 'スマートアンクルパンツ2WAYストレッチ（ウールライク・丈標準64.5～70.5cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444598-000/00?colorDisplayCode=09&sizeDisplayCode=005',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455480',
                'name' => 'レギュラーフィットジーンズ',
                'price' => '4990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455480-000/00?colorDisplayCode=61&sizeDisplayCode=030',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '461614',
                'name' => 'タックワイドパンツ（丈標準70～76cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E461614-000/00?colorDisplayCode=32&sizeDisplayCode=004',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457619',
                'name' => '感動パンツ2WAYストレッチ（ウールライク・丈70・73・76・85cm）セットアップ可能',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E447780-000/00?colorDisplayCode=05&sizeDisplayCode=076&pldDisplayCode=076',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '448595',
                'name' => 'ウルトラストレッチアクティブジョガーパンツ（丈標準66～72cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E448595-000/00?colorDisplayCode=03&sizeDisplayCode=004',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457574',
                'name' => 'ワイドフィットジーンズ（丈標準74～77cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444591-000/00?colorDisplayCode=62&sizeDisplayCode=030',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457209',
                'name' => 'ユーティリティワークパンツ（カーゴ）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457209-000/00?colorDisplayCode=57&sizeDisplayCode=004',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457578',
                'name' => 'ウルトラストレッチスキニーフィットジーンズ',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450242-000/00?colorDisplayCode=68&sizeDisplayCode=029',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '456352',
                'name' => 'ワイドフィットワークパンツ（デニム・丈標準71～77cm）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E456352-000/00?colorDisplayCode=68&sizeDisplayCode=005',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '448656',
                'name' => '感動パンツウルトラライト（コットンライク・丈73・76・85cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E422373-000/00?colorDisplayCode=69&sizeDisplayCode=076&pldDisplayCode=085',
                'category_id' => 5,
                'gender_id' => 1,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450198',
                'name' => 'ファーリーフリースフルジップジャケット（長袖）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450198-000/01?colorDisplayCode=27&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450195',
                'name' => 'フリースフルジップジャケット（長袖）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450195-000/01?colorDisplayCode=26&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450534',
                'name' => 'ブラッシュドジャージーシャツジャケット セットアップ可能',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450534-000/00?colorDisplayCode=32&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457106',
                'name' => 'ウォームパデッドベスト',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457106-000/00?colorDisplayCode=11&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455944',
                'name' => 'コットンブルゾン',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455944-000/00?colorDisplayCode=16&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450520',
                'name' => 'ポケッタブルUVカットパーカ',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E445003-000/00?colorDisplayCode=03&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450530',
                'name' => 'コットンブレンドパーカ',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450530-000/00?colorDisplayCode=27&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450314',
                'name' => 'ウォームパデッドキルティングジャケット',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450314-000/01?colorDisplayCode=19&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '454761',
                'name' => 'ニットショートジャケット（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E454761-000/00?colorDisplayCode=63&sizeDisplayCode=005',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450453',
                'name' => 'ウルトラライトダウンリラックスジャケット',
                'price' => '4990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450453-000/00?colorDisplayCode=33&sizeDisplayCode=004',
                'category_id' => 1,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450635',
                'name' => '3Dカシミヤクルーネックセーター（長袖）',
                'price' => '7990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450635-000/00?colorDisplayCode=52&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458006',
                'name' => 'Vネックセーター（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E458006-000/00?colorDisplayCode=30&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457506',
                'name' => 'オーバーサイズロングシャツ（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457506-000/00?colorDisplayCode=40&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '446845',
                'name' => 'プレミアムリネンシャツ（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E446845-000/00?colorDisplayCode=70&sizeDisplayCode=005',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '454766',
                'name' => 'UVカットⅤネックロングカーディガン（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E454766-000/00?colorDisplayCode=07&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458261',
                'name' => 'コットンストライプシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E458261-000/00?colorDisplayCode=54&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '456158',
                'name' => 'UVカットシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E456158-000/00?colorDisplayCode=01&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '454754',
                'name' => 'ウォッシャブルソフトニットクルーセーター（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E454754-000/00?colorDisplayCode=61&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '451686',
                'name' => '3Dスフレヤーンカーディガン（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E451686-000/00?colorDisplayCode=01&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '445192',
                'name' => 'UVカットクルーネックカーディガン（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E445192-000/00?colorDisplayCode=01&sizeDisplayCode=004',
                'category_id' => 2,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458546',
                'name' => 'スーピマコットンストレッチストライプシャツ（長袖・欧米仕様）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E458546-000/00?colorDisplayCode=64&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457503',
                'name' => 'シアーコットンシャツ（半袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457503-000/00?colorDisplayCode=11&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '446846',
                'name' => 'レーヨンブラウス（半袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E446846-000/00?colorDisplayCode=04&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '452993',
                'name' => 'レーヨンスキッパーブラウス（7分袖）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E452682-000/00?colorDisplayCode=32&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '445455',
                'name' => 'リネンブレンドオープンカラーシャツ（半袖）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E445455-000/00?colorDisplayCode=33&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457505',
                'name' => 'ストレッチシャツ（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E457505-000/00?colorDisplayCode=30&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458429',
                'name' => 'スーピマコットンストレッチシャツ（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E418409-000/00?colorDisplayCode=00&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455734',
                'name' => 'レーヨンブラウス（長袖）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E433604-000/00?colorDisplayCode=71&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '447814',
                'name' => 'コットンシャツ（5分袖）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E447814-000/00?colorDisplayCode=31&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '444645',
                'name' => 'オープンカラーシャツ（半袖）',
                'price' => '1500',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444645-000/01?colorDisplayCode=56&sizeDisplayCode=004',
                'category_id' => 3,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '452898',
                'name' => 'エアリズムコットンロングフレアワンピース（半袖・標準丈・113～124cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E447085-000/00?colorDisplayCode=58&sizeDisplayCode=005',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '447376',
                'name' => 'ウルトラストレッチフレアロングワンピース（ノースリーブ）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E447376-000/00?colorDisplayCode=09&sizeDisplayCode=005',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '452073',
                'name' => 'Vネックサロペット',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E452073-000/00?colorDisplayCode=08&sizeDisplayCode=005',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '447080',
                'name' => 'マーセライズコットンAラインワンピース（ノースリーブ・標準丈・120～131cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E447080-000/00?colorDisplayCode=38&sizeDisplayCode=004',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '451753',
                'name' => 'キャミソールフレアワンピース（標準丈・116～126cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E451753-000/00?colorDisplayCode=53&sizeDisplayCode=005',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '452732',
                'name' => 'スフレヤーンタートルネックワンピース（長袖）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E452732-000/00?colorDisplayCode=08&sizeDisplayCode=004',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455754',
                'name' => 'コットンティアードミニワンピース（半袖）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455754-000/00?colorDisplayCode=00&sizeDisplayCode=004',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '447081',
                'name' => 'クルーネックTワンピース（半袖）',
                'price' => '1500',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E447081-000/00?colorDisplayCode=08&sizeDisplayCode=004',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '454310',
                'name' => 'エアリズムコットンロングフレアワンピース（半袖・丈短め・108～119cm）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E448069-000/01?colorDisplayCode=58&sizeDisplayCode=007',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455793',
                'name' => 'プリントキャミソールフレアワンピース（丈短め・109～119cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455793-000/00?colorDisplayCode=69&sizeDisplayCode=004',
                'category_id' => 4,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '443906',
                'name' => 'ウルトラストレッチハイライズデニムレギンスパンツ（丈長め74～76cm）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E443906-000/00?colorDisplayCode=64&sizeDisplayCode=002',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '449266',
                'name' => 'ストレートハイライズジーンズ（ダメージ・丈長め84cm）',
                'price' => '1500',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E449266-000/00?colorDisplayCode=64&sizeDisplayCode=023',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '461622',
                'name' => 'スマートアンクルパンツ（グレンチェック・2WAYストレッチ・テーパード・標準丈64～66cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450608-000/00?colorDisplayCode=02&sizeDisplayCode=004',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '457574',
                'name' => 'ワイドフィットジーンズ（丈標準74～77cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E444591-000/00?colorDisplayCode=62&sizeDisplayCode=030',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '446807',
                'name' => 'フレアハイライズジーンズ（標準丈73cm）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E446807-000/00?colorDisplayCode=08&sizeDisplayCode=023',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '456193',
                'name' => 'イージーフレアレギンスパンツ（丈標準70～72cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E456193-000/00?colorDisplayCode=08&sizeDisplayCode=004',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450639',
                'name' => 'タックワイドパンツ（丈標準68～70cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450639-000/00?colorDisplayCode=39&sizeDisplayCode=005',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450600',
                'name' => 'ウルトラストレッチハイライズレギンスパンツ（丈長め74～76cm）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E445294-000/01?colorDisplayCode=34&sizeDisplayCode=004',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455149',
                'name' => 'ウルトラストレッチアクティブジョガーパンツ（丈標準63.5～65.5cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E433737-000/00?colorDisplayCode=69&sizeDisplayCode=004',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '454350',
                'name' => 'バギージーンズ（丈標準76cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E451193-000/00?colorDisplayCode=10&sizeDisplayCode=023',
                'category_id' => 5,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '456036',
                'name' => 'デニムジャージーナローロングスカート（丈標準80～84cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E456036-000/00?colorDisplayCode=68&sizeDisplayCode=004',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '455663',
                'name' => 'ストレッチダブルフェイスナロースカート（丈標準80～84cm）',
                'price' => '1550',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E455663-000/00?colorDisplayCode=59&sizeDisplayCode=004',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '450645',
                'name' => 'マーメイドスカート（丈標準83～87cm）',
                'price' => '1990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E450645-000/00?colorDisplayCode=66&sizeDisplayCode=061',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '445974',
                'name' => 'マーメイドロングスカート（丈標準84～88cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E445974-000/00?colorDisplayCode=55&sizeDisplayCode=005',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '454756',
                'name' => 'スムースコットンブレンドスカート　セットアップ可能',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E454756-000/00?colorDisplayCode=31&sizeDisplayCode=004',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '456094',
                'name' => 'コットンフレアミディスカート（丈標準75～79cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E456094-000/00?colorDisplayCode=11&sizeDisplayCode=061',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458623',
                'name' => 'シフォンプリーツスカート（丈標準78～82cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E458623-000/00?colorDisplayCode=54&sizeDisplayCode=004',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458287',
                'name' => 'ストレッチダブルフェイススリットスカート（丈短め69～73cm）',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E458287-000/00?colorDisplayCode=09&sizeDisplayCode=004',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '458624',
                'name' => 'シフォンプリーツスカート（丈短め71～75cm）',
                'price' => '3990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E458624-000/00?colorDisplayCode=54&sizeDisplayCode=004',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
         
         DB::table('clothes')->insert([
                'number' => '456476',
                'name' => 'ストレッチタイトスカート（ミドル丈・56～58cm）セットアップ可能',
                'price' => '2990',
                'url' => 'https://www.uniqlo.com/jp/ja/products/E429145-000/00?colorDisplayCode=69&sizeDisplayCode=061',
                'category_id' => 6,
                'gender_id' => 2,
                
         ]);
    }
}
