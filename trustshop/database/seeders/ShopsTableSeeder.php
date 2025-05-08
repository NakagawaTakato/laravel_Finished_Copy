<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $param = [
        'user_id' => null,
        'name' => 'IRONWHELL尼崎',
        'image' => 'img/shopFolder/shop-1.png',
        'detail' => 'お客様のオートバイライフを全力でサポート致します！
■IRONWHELL尼崎国内新車オートバイ全機種取扱い
■IRONWHELL尼崎ドリーム優良認定中古車・認定中古車販売
■レンタルバイク
■各種保険取り扱い
■クレジットローン取り扱い
■認証工場完備
オートバイ駐輪場、四輪駐車場有<br>下取り、買取りもお気軽にご相談ください。
スタッフ一同皆様のご来店を心よりお待ちしております。',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);
    $param = [
        'user_id' => null,
        'name' => 'ROADLEGEND',
        'image' => 'img/shopFolder/shop-2.png',
        'detail' => '当店はROADLEGENDの正規代理店です。
中古車をお探しのお客様とはご希望などをご相談させていただき、素敵なバイクをお探しし、
バイクライフを応援させていただいております。
毎月第三日曜日は基本的にツーリングを開催しています！
たまに、ミニバイク・モトクロス練習やレース観戦などバイクイベントにも参加していますので、
ご興味をもっていただけましたら、お気兼ねなくお声をおかけください♪<br>
LINEでのお問い合わせも承っております！<br>',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);
        $param = [
        'user_id' => null,
        'name' => 'TinyWheelsGarage',
        'image' => 'img/shopFolder/shop-3.png',
        'detail' => '兵庫県のバイクショップ「TinyWheelsGarage」です。
中古バイク、新車の販売を行っております。
4輪の中古車、新車も取り扱いしてます。',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);
    $param = [
        'user_id' => null,
        'name' => 'GRITMOTORWORKS',
        'image' => 'img/shopFolder/shop-4.png',
        'detail' => '親切・丁寧・誠実をモットーに地域に根差したバイクの販売、修理を行っております。
ちょっとした修理、点検はサービスでさせて頂きます。
他店で購入したバイクの修理も大歓迎ですので、ご相談ください。
また、探しているバイクがございましたら、ご予算に応じて出来る限り程度の良い車両を提供させて頂いております。
ご気軽に、ご来店ください。',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);
    $param = [
        'user_id' => null,
        'name' => 'RIDERSBASECAMP',
        'image' => 'img/shopFolder/shop-5.png',
        'detail' => '近畿陸運局認証、兵庫県のバイクショップ「RIDERSBASECAMP」の正規取扱い店です。在庫のない車両は、メーカー取り寄せとなりますので、お気軽にご相談下さい。
新車・中古車の販売以外にも、修理、点検、車検、カスタマイズなどを承っております。確かな技術で「安心で、楽しいバイクのある生活。」をお手伝いさせて頂きます。また、乗らなくなったバイクの「買取り」も当店にお任せください。買取り査定だけでも致します！
修理・車両価格などのお問い合せは、電話またはBDSバイクセンサーのお問い合せフォームからお問合せください。フォームからのお問い合せは、お時間を頂戴する場合がございますので、お急ぎの方はお電話でお問合せくださいませ。<br>
皆様のお問合せ・ご来店お待ちしております。',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);
    $param = [
        'user_id' => null,
        'name' => 'EDGEMOTORSUPPLY',
        'image' => 'img/shopFolder/shop-6.png',
        'detail' => '兵庫県のバイクショップ「EDGEMOTORSUPPLY」です。
新車・中古車販売スクーターから大型車まで修理・車検等何でもご相談ください。<br>引取・買取も電話1本で参上します。<br>
－－お客様へのお願い－－<br>
・当店には犬がいますが、苦手な方は別室へ移動させますので、お声掛けください。
・安全のため、歩道上では車両の点検・作業などは行いませんので、当店敷地内に車両をお停めください。
・他店でご購入の車両も点検・修理承りますが、有料になります。
・当店販売車両の保証につきましては、保証期間が過ぎてからは有料となります。詳しくはお渡ししております保証書をご覧ください。
・ご希望に添えず、販売・修理をお断りする場合がございます。',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);
        $param = [
        'user_id' => null,
        'name' => 'IRONCLADCUSTOMS',
        'image' => 'img/shopFolder/shop-7.png',
        'detail' => 'バイクショップIRONCLADCUSTOMSは、兵庫でバイク一筋に６０年以上営業している老舗です。
おかげさまで「バイクを買うなら」と、親ごさま、お子さま、お孫さまの世代までごひいきいただいております☆
自賠責保険（他ショップ加入分もＯＫ）の新規継続手続きや、盗難保険も用意しております。整備士も常駐しておりますので、急な修理にも対応しています。
そのほか買取にも力を入れておりますので、乗り換えのための下取りはもちろん、
ご不要になったバイクの処分もお気軽にお申し付けください！
バイク、スクーターの事ならゼネラルオートにおまかせください。',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);
    $param = [
        'user_id' => null,
        'name' => 'BLACKTOPGARAGE',
        'image' => 'img/shopFolder/shop-8.png',
        'detail' => '兵庫県のバイクショップ　BLACKTOPGARAGEです。
原付～外車、オン・オフ各種ジャンルお任せください。
新車販売・中古車販売をはじめ、カスタム・メンテナンス・修理・車検・買取等、バイクの事ならなんでもご相談ください。
オークション代行も承っておりますので、お探しの新車や中古車がございましたらオーダー頂く事も可能です。
兵庫県二輪認証工場を完備しておりますので、修理やメンテナンスも安心して大切な愛車をお任せいただけます。<br>
・小型自動車分解整備事業認証
・小型二輪自動車
・認証番号　近運整認兵　第7094号<br>
親切・丁寧をモットーに、プロの技術で一生懸命お客様のバイクライフをサポートいたします！
皆様のお問合せ・ご来店をお待ちしております！<br>',
        'is_display' => false
    ];
    DB::table('shops')->insert($param);

    }
}
