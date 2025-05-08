<?php

namespace Database\Seeders;

use App\Models\Merchandise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchandisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $param = [
        'judge' => 'IRONWHELL尼崎',
        'name' => 'RAPTOR250',
        'image' => 'img/IRONWHELL尼崎/RAPTOR250.png',
        'description' => '38.50',
        'description_details_short' => 'IRONWHELL尼崎 RAPTOR250は、信頼性と快適性を備えた初心者にも安心な軽量・高燃費の250ccバイクです。',
        'description_details' => 'IRONWHELL尼崎 RAPTOR250は、軽量で扱いやすい250ccクラスのバイクです。燃費性能が高く、初心者にも安心の操作性を提供。シンプルかつ洗練されたデザインで、通勤からツーリングまで幅広く活躍します。信頼性と快適性を兼ね備えた、日常使いに最適な一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'IRONWHELL尼崎',
        'name' => 'BLAZE400',
        'image' => 'img/IRONWHELL尼崎/BLAZE400.png',
        'description' => '121.00',
        'description_details_short' => 'IRONWHELL尼崎 BLAZE400は、VTEC搭載のスムーズでパワフルな400ccエンジンとクラシックなデザインが魅力のネイキッドバイクの名車です。',
        'description_details' => 'IRONWHELL尼崎 BLAZE400は、ネイキッドバイクの代名詞ともいえる400ccクラスの名車です。直列4気筒エンジンが生み出すスムーズでパワフルな加速と、独自のVTEC機構による優れた燃費性能が特徴。安定感あるハンドリングと快適な乗り心地で、街乗りからツーリングまで幅広く対応します。クラシックなスタイルに現代の技術が融合した、信頼性と楽しさを兼ね備えた一台です。'
    ];
    DB::table('merchandises')->insert($param);
        $param = [
        'judge' => 'IRONWHELL尼崎',
        'name' => 'IRONWOLF350',
        'image' => 'img/IRONWHELL尼崎/IRONWOLF350.png',
        'description' => '55.00',
        'description_details_short' => 'IRONWHELL尼崎 IRONWOLF350は、クラシックなデザインとトルクフルな空冷単気筒エンジンが魅力の、扱いやすく快適な350ccバイクです。',
        'description_details' => 'IRONWHELL尼崎 IRONWOLF350は、クラシックなデザインとモダンな性能を兼ね備えた350ccクラスのバイクです。空冷単気筒エンジンが生み出すトルクフルでスムーズな走りが魅力。軽量な車体と扱いやすいハンドリングで、初心者からベテランまで幅広いライダーに対応します。シンプルでレトロな外観と、長距離でも快適な乗り心地を提供する設計で、日常の移動からツーリングまで楽しめる一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'IRONWHELL尼崎',
        'name' => 'VELOCITY650R',
        'image' => 'img/IRONWHELL尼崎/VELOCITY650R.png',
        'description' => '91.30',
        'description_details_short' => 'IRONWHELL尼崎 VELOCITY650Rは、ネオクラシックデザインと直列4気筒エンジンの力強さを兼ね備えた、多用途なミドルクラスのネイキッドバイクです。',
        'description_details' => 'IRONWHELL尼崎 VELOCITY650Rは、ネオクラシックデザインと高性能を融合したミドルクラスのネイキッドバイクです。直列4気筒エンジンによる滑らかな加速と力強いトルクが特徴で、街乗りからスポーツ走行まで幅広く対応します。コンパクトな車体とバランスの取れたハンドリングにより、高い操作性を実現。LEDライトやフルデジタルメーターなどの最新装備を備え、スタイルと機能性を兼ね備えた一台です。'
    ];
    DB::table('merchandises')->insert($param);


    $param = [
        'judge' => 'ROADLEGEND',
        'name' => 'SWIFTY125',
        'image' => 'img/ROADLEGEND/SWIFTY125.png',
        'description' => '26.73',
        'description_details_short' => '当店はROADLEGENDの正規代理店で、中古車探しやツーリングイベントなどを通じてバイクライフをサポートしています。',
        'description_details' => '当店はROADLEGENDの正規代理店です。中古車をお探しのお客様とはご希望などをご相談させていただき、素敵なバイクをお探しし、バイクライフを応援させていただいております。毎月第三日曜日は基本的にツーリングを開催しています！たまに、ミニバイク・モトクロス練習やレース観戦などバイクイベントにも参加していますので、ご興味をもっていただけましたら、お気兼ねなくお声をおかけください♪'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'ROADLEGEND',
        'name' => 'VOLTAGEX125',
        'image' => 'img/ROADLEGEND/VOLTAGEX125.png',
        'description' => '16.80',
        'description_details_short' => '当店はROADLEGENDの正規代理店で、中古車探しやツーリング・イベントを通じてバイクライフをサポートしています。',
        'description_details' => '当店はROADLEGENDの正規代理店です。中古車をお探しのお客様とはご希望などをご相談させていただき、素敵なバイクをお探しし、バイクライフを応援させていただいております。毎月第三日曜日は基本的にツーリングを開催しています！たまに、ミニバイク・モトクロス練習やレース観戦などバイクイベントにも参加していますので、ご興味をもっていただけましたら、お気兼ねなくお声をおかけください♪'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'ROADLEGEND',
        'name' => 'STORMRIDER250',
        'image' => 'img/ROADLEGEND/STORMRIDER250.png',
        'description' => '39.80',
        'description_details_short' => '当店はROADLEGENDの正規代理店で、中古車探しやツーリングなどを通じてバイクライフをサポートします。',
        'description_details' => '当店はROADLEGENDの正規代理店です。中古車をお探しのお客様とはご希望などをご相談させていただき、素敵なバイクをお探しし、バイクライフを応援させていただいております。毎月第三日曜日は基本的にツーリングを開催しています！たまに、ミニバイク・モトクロス練習やレース観戦などバイクイベントにも参加していますので、ご興味をもっていただけましたら、お気兼ねなくお声をおかけください♪'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'ROADLEGEND',
        'name' => 'URBANDASH125',
        'image' => 'img/ROADLEGEND/URBANDASH125.png',
        'description' => '27.39',
        'description_details_short' => 'ワンタッチで始動する快適な装備とエレガントな立体デザインが上質感を演出する車両です。',
        'description_details' => 'スタートボタンをひと押ししただけでエンジンが始動し、快適性と充実した装備の車体はボリュームある大きな曲面と、のびやかな線使いによる立体的な造形により、新しいエレガントなデザインを表現。メッキを施したヘッドランプリムや、立体エンブレムを配置し車両全体で上質感を演出.'
    ];
    DB::table('merchandises')->insert($param);


    $param = [
        'judge' => 'TinyWheelsGarage',
        'name' => 'PHANTOMXB1200',
        'image' => 'img/TinyWheelsGarage/PHANTOMXB1200.png',
        'description' => '89.80',
        'description_details_short' => 'ロングツーリングを意識し、ホイールベースを延長した快適なモデルです。',
        'description_details' => 'ロングツーリングを楽しむことも視野に入れたモデル。スイングアームの延長によってホイールベースを 50mm延長。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'TinyWheelsGarage',
        'name' => 'AEROVOLT125',
        'image' => 'img/TinyWheelsGarage/AEROVOLT125.png',
        'description' => '26.20',
        'description_details_short' => 'AEROVOLT125は、スタイリッシュなデザインと高い燃費性能を備えた、街乗りに最適なコンパクトスクーターです。',
        'description_details' => 'TinyWheelsGarage AEROVOLT125は、スタイリッシュで実用性に優れた125ccクラスのスクーターです。高い燃費性能と快適な乗り心地を提供し、街乗りや通勤に最適。洗練されたデザインと先進装備を備え、日常の移動をより快適にする一台です。'
    ];
    DB::table('merchandises')->insert($param);
        $param = [
        'judge' => 'TinyWheelsGarage',
        'name' => 'CITYBREEZE110',
        'image' => 'img/TinyWheelsGarage/CITYBREEZE110.png',
        'description' => '8.50',
        'description_details_short' => 'TinyWheelsGarage CITYBREEZE110は、高燃費で扱いやすく、通勤や日常使いに最適な50ccスクーターです。',
        'description_details' => 'TinyWheelsGarage CITYBREEZE110は、手軽で扱いやすい50ccクラスのスクーターです。高い燃費性能とシンプルな操作性を備え、初心者にも安心。コンパクトで実用的なデザインが通勤や買い物など日常使いに最適な一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'TinyWheelsGarage',
        'name' => 'STRATOCRUISER1000',
        'image' => 'img/TinyWheelsGarage/STRATOCRUISER1000.png',
        'description' => '80.00',
        'description_details_short' => 'STRATOCRUISER1000は、高速巡航性能と快適性を兼ね備えたスポーツツアラータイプのバイクです。',
        'description_details' => 'STRATOCRUISER1000は、高速巡航に優れたスポーツツアラータイプのバイクです。水冷4気筒エンジンによる滑らかな走行性能と安定感のあるハンドリングが特徴。洗練されたエアロダイナミクスデザインで、長距離ツーリングから日常使いまで幅広く活躍します。快適性と信頼性を兼ね備えた、一台で多彩なシーンに対応するモデルです。'
    ];
    DB::table('merchandises')->insert($param);


    $param = [
        'judge' => 'GRITMOTORWORKS',
        'name' => 'TERRAHAWK250',
        'image' => 'img/GRITMOTORWORKS/TERRAHAWK250.png',
        'description' => '39.00',
        'description_details_short' => 'TERRAHAWK250は、車格の大きさからツーリングに最適な人気のバイクです。',
        'description_details' => '人気のTERRAHAWK250、入庫しました。車格が大きいので、あまり通勤向きではありませんが、ツーリングには最適なバイクですよ。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'GRITMOTORWORKS',
        'name' => 'RAPTOR-X125',
        'image' => 'img/GRITMOTORWORKS/RAPTOR-X125.png',
        'description' => '24.80',
        'description_details_short' => '外装をRAPTOR-X125に交換したDトラッカー125は、小ぶりで旋回性能が高く、通勤やセカンドバイクにも最適な楽しい一台です。',
        'description_details' => '程度の良いDトラッカー１２５が入庫しました。外装はRAPTOR-X125に交換しています。小ぶりで旋回性能も高く、乗って楽しいバイクです。通勤、通学は勿論、セカンドバイクとしてもお勧めします。'
    ];
    DB::table('merchandises')->insert($param);
        $param = [
        'judge' => 'GRITMOTORWORKS',
        'name' => 'NIMBLE110',
        'image' => 'img/GRITMOTORWORKS/NIMBLE110.png',
        'description' => '11.50',
        'description_details_short' => '状態の良いNIMBLE110は、乗りやすく通勤・通学に便利な一台です。',
        'description_details' => '状態の良いNIMBLE110、入庫しました。乗り易く、通勤、通学にも便利ですよ。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'GRITMOTORWORKS',
        'name' => 'ZESTY110i',
        'image' => 'img/GRITMOTORWORKS/ZESTY110i.png',
        'description' => '11.30',
        'description_details_short' => '軽くて扱いやすいレッツは、女性に人気の高い一台で、消耗品も新品交換済みです。',
        'description_details' => 'とても程度の良いレッツ、入庫しました。軽くて取り扱いも楽で、女性に人気あります。バッテリー(新品)、スパークプラグ、エンジンオイルは、必須交換させて頂きます。'
    ];
    DB::table('merchandises')->insert($param);


    $param = [
        'judge' => 'RIDERSBASECAMP',
        'name' => 'STRIKER80',
        'image' => 'img/RIDERSBASECAMP/STRIKER80.png',
        'description' => '28.50',
        'description_details_short' => 'リアキャリア付きのRIDERSBASECAMP KSR-2は、軽量で高い機動性と実用性を兼ね備えた小型オフロードバイクです。',
        'description_details' => 'RIDERSBASECAMP STRIKER80 リアキャリア付きは、軽量で取り回しが良い小型オフロードバイクです。高い機動性と遊び心あふれるデザインが特徴で、街乗りからツーリングまで幅広く活躍します。リアキャリアを標準装備することで、荷物の積載が容易になり、日常使いの利便性が向上。信頼性と操作性を兼ね備えた、実用性と楽しさを両立する一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'RIDERSBASECAMP',
        'name' => 'TITAN800R',
        'image' => 'img/RIDERSBASECAMP/TITAN800R.png',
        'description' => '53.00',
        'description_details_short' => 'TITAN800Rは、軽快なハンドリングとパワフルな走行性能を備えた、日常使いからツーリングまで対応するミドルクラスのロードスターです。',
        'description_details' => 'TITAN800Rは、軽快なハンドリングと力強い走行性能を兼ね備えたミドルクラスのロードスターです。798ccの直列2気筒エンジンはスムーズでパワフルな加速を提供し、高速道路からワインディングまで多彩なシーンで活躍します。洗練されたデザインと優れた燃費性能を持ち、初心者からベテランライダーまで幅広い層に支持されるモデルです。快適性とスポーティさを両立した、日常使いにもツーリングにも最適な一台です。'
    ];
    DB::table('merchandises')->insert($param);
        $param = [
        'judge' => 'RIDERSBASECAMP',
        'name' => 'TRAILMASTER125',
        'image' => 'img/RIDERSBASECAMP/TRAILMASTER125.png',
        'description' => '43.00',
        'description_details_short' => 'RIDERSBASECAMP TRAILMASTER125は、レトロなデザインと高い実用性を備え、オン・オフ問わず多用途に活躍する125ccバイクです。',
        'description_details' => 'RIDERSBASECAMP TRAILMASTER125は、レトロなデザインと現代的な性能を融合させた軽量な125ccバイクです。扱いやすい車体と信頼性の高いエンジンを備え、街乗りからキャンプツーリングまで幅広く活躍します。高めのグランドクリアランスや耐久性のある装備により、オンロードでもオフロードでも安心して走行可能。荷物を運べるリアキャリアも標準装備されており、実用性と冒険心を兼ね備えた、多目的に楽しめる一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'RIDERSBASECAMP',
        'name' => 'LUNETTA50',
        'image' => 'img/RIDERSBASECAMP/LUNETTA50.png',
        'description' => '19.80',
        'description_details_short' => 'RIDERSBASECAMP LUNETTA50は、レトロモダンなデザインと実用性を備えた、街乗りや通勤に最適な50ccスクーターです。',
        'description_details' => 'RIDERSBASECAMP LUNETTA50は、丸みを帯びたレトロモダンなデザインが魅力の50ccスクーターです。コンパクトな車体と軽快な操作性を備え、街乗りや通勤に最適。高い燃費性能と静かでスムーズなエンジンにより、環境にも配慮されています。シート下収納や小物入れを備え、実用性も抜群。おしゃれなスタイルと使いやすさを兼ね備えた、日常生活を彩る一台です。'
    ];
    DB::table('merchandises')->insert($param);


    $param = [
        'judge' => 'EDGEMOTORSUPPLY',
        'name' => 'BREEZA50',
        'image' => 'img/EDGEMOTORSUPPLY/BREEZA50.png',
        'description' => '8.25',
        'description_details_short' => 'EDGEMOTORSUPPLY BREEZA50は、シンプルで扱いやすく、日常使いに最適な軽量コンパクトな50ccスクーターです。',
        'description_details' => 'EDGEMOTORSUPPLY BREEZA50は、シンプルで親しみやすいデザインが特徴の50ccスクーターです。軽量コンパクトな車体と優れた燃費性能で、通勤や買い物などの日常使いに最適。扱いやすいエンジンと安定した走行性能により、初心者でも安心して乗ることができます。シート下には便利な収納スペースを備え、実用性も充実。手軽さと信頼性を兼ね備えた、日常生活にぴったりの一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'EDGEMOTORSUPPLY',
        'name' => 'GLADIUS250',
        'image' => 'img/EDGEMOTORSUPPLY/GLADIUS250.png',
        'description' => '25.30',
        'description_details_short' => 'EDGEMOTORSUPPLY GLADIUS250は、スタイリッシュなデザインと快適性を備えた、街乗りからツーリングまで楽しめる250ccスクーターです。',
        'description_details' => 'EDGEMOTORSUPPLY GLADIUS250は、低く構えたフォルムとスタイリッシュなデザインが特徴の250ccクラスのスクーターです。快適なロングシートと広いフットスペースを備え、ゆったりとした乗り心地を提供します。水冷4ストロークエンジンによる力強い走行性能と高い燃費性能で、街乗りからロングツーリングまで幅広く活躍。収納力のあるラゲッジスペースも装備され、実用性と快適性を両立した一台です。'
    ];
    DB::table('merchandises')->insert($param);
        $param = [
        'judge' => 'EDGEMOTORSUPPLY',
        'name' => 'BELVITA50',
        'image' => 'img/EDGEMOTORSUPPLY/BELVITA50.png',
        'description' => '12.98',
        'description_details_short' => 'EDGEMOTORSUPPLY BELVITA50は、可愛らしいデザインと扱いやすさを兼ね備えた、街乗りや通勤に最適な50ccスクーターです。',
        'description_details' => 'EDGEMOTORSUPPLY BELVITA50は、クラシカルで可愛らしいデザインが魅力の50ccスクーターです。軽量で扱いやすい車体により、初心者や女性ライダーにも安心して乗れる操作性を提供。環境に優しい高燃費エンジンを搭載し、街乗りや通勤で活躍します。シート下には十分な収納スペースを備え、実用性も充実。おしゃれさと機能性を兼ね備えた、日常の移動を楽しくする一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'EDGEMOTORSUPPLY',
        'name' => 'FLEXY50',
        'image' => 'img/EDGEMOTORSUPPLY/FLEXY50.png',
        'description' => '9.02',
        'description_details_short' => 'EDGEMOTORSUPPLY FLEXY50は、軽量で取り回しやすく、街乗りや通勤に最適な実用性抜群の50ccスクーターです。',
        'description_details' => 'EDGEMOTORSUPPLY FLEXY50は、軽量でスリムなデザインが特徴の50ccスクーターです。取り回しの良さと力強いエンジン性能により、街乗りや通勤で快適な走行を実現します。燃費性能も優れており、経済的な日常使いに最適。シート下の収納スペースや使いやすい装備を備え、実用性も抜群です。スタイリッシュで機能的なデザインを兼ね備えた、一台で頼れるパートナーです。'
    ];
    DB::table('merchandises')->insert($param);


    $param = [
        'judge' => 'IRONCLADCUSTOMS',
        'name' => 'CRUIZA100',
        'image' => 'img/IRONCLADCUSTOMS/CRUIZA100.png',
        'description' => '13.80',
        'description_details_short' => 'IRONCLADCUSTOMS CRUIZA100は、軽快な走行性能と高い実用性を備え、街乗りや通勤に最適な100ccスクーターです。',
        'description_details' => 'IRONCLADCUSTOMS CRUIZA100は、軽快な走行性能と実用性を兼ね備えた100ccスクーターです。コンパクトながら安定感のある車体で、街乗りや通勤に最適な使い心地を提供します。信頼性の高いエンジンは滑らかな加速を実現し、優れた燃費性能で経済性も抜群。広めのシート下収納スペースや快適な乗り心地で、日常の移動から軽いツーリングまで幅広く活躍する一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'IRONCLADCUSTOMS',
        'name' => 'AURION125',
        'image' => 'img/IRONCLADCUSTOMS/AURION125.png',
        'description' => '23.80',
        'description_details_short' => 'IRONCLADCUSTOMS AURION125は、スタイリッシュなデザインと高い燃費性能、便利な装備を備えた日常使いに最適な125ccスクーターです。',
        'description_details' => 'IRONCLADCUSTOMS AURION125は、洗練されたスタイリッシュなデザインと高い実用性が魅力の125ccスクーターです。滑らかな加速を提供するエンジンと優れた燃費性能により、街乗りから通勤、軽いツーリングまで幅広く活躍します。アイドリングストップ機能を備えたエコ性能と快適な乗り心地が特徴。シート下収納や充電ポートなどの便利な装備も充実し、日常使いに最適な一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'IRONCLADCUSTOMS',
        'name' => 'CHUNKY125ABS',
        'image' => 'img/IRONCLADCUSTOMS/CHUNKY125ABS.png',
        'description' => '55.00',
        'description_details_short' => 'IRONCLADCUSTOMS CHUNKY125ABSは、クラシックなデザインと安全性を備えた、街乗りやツーリングに最適な125ccミニバイクです。',
        'description_details' => 'IRONCLADCUSTOMS CHUNKY125ABSは、クラシックなデザインと現代的な性能を融合させた125ccミニバイクです。小柄ながら力強いエンジンとスムーズな操作性を備え、街乗りやツーリングで楽しめます。ABS（アンチロックブレーキシステム）を標準装備し、安全性も向上。コンパクトな車体は取り回しが良く、初心者からベテランライダーまで幅広く支持されています。おしゃれさと機能性を両立した、遊び心あふれる一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'IRONCLADCUSTOMS',
        'name' => 'HERITAGE400',
        'image' => 'img/IRONCLADCUSTOMS/HERITAGE400.png',
        'description' => '44.00',
        'description_details_short' => 'IRONCLADCUSTOMS HERITAGE400は、クラシカルなデザインと軽快な走行性能を兼ね備えた、初心者にも扱いやすい400ccバイクです。',
        'description_details' => 'IRONCLADCUSTOMS HERITAGE400は、クラシカルで魅力的なスタイルを持つ400ccクラスのバイクです。空冷単気筒エンジンを搭載し、軽快な走行性能と心地よいエンジンサウンドを提供します。扱いやすさと力強さを兼ね備え、初心者から経験者まで幅広いライダーに支持されています。レトロなデザインとシンプルな構造が特徴で、ツーリングから街乗りまで多用途に活躍します。信頼性とメンテナンス性も高く、バイクライフを存分に楽しめる一台です。'
    ];
    DB::table('merchandises')->insert($param);


    $param = [
        'judge' => 'BLACKTOPGARAGE',
        'name' => 'BLADE-R125',
        'image' => 'img/BLACKTOPGARAGE/BLADE-R125.png',
        'description' => '28.05',
        'description_details_short' => 'BLACKTOPGARAGE BLADE-R125は、高出力エンジンと軽快な操作性を備えた、スポーティでアグレッシブな125ccバイクです。',
        'description_details' => 'BLACKTOPGARAGE BLADE-R125は、軽量でスポーティな125ccクラスのバイクです。水冷DOHCエンジンを搭載し、クラスを超えた高出力と鋭いレスポンスを実現。スリムでコンパクトなボディにより、優れた操作性と軽快な走行感を提供します。レーシングDNAを受け継いだアグレッシブなデザインが特徴で、初心者からスポーツライディングを楽しみたいライダーまで幅広く支持されています。街乗りからワインディングロードまで、スポーティな走りを堪能できる一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'BLACKTOPGARAGE',
        'name' => 'RAGE-X690',
        'image' => 'img/BLACKTOPGARAGE/RAGE-X690.png',
        'description' => '69.00',
        'description_details_short' => 'RAGE-X690は、軽量ボディと高トルクエンジンで、刺激的な走りと高いコントロール性を楽しめるモタードバイクです。',
        'description_details' => 'RAGE-X690は、パフォーマンス重視のモタードバイクで、エキサイティングな走りを求めるライダーに最適な一台です。690ccの単気筒エンジンを搭載し、軽量な車体と高トルクを活かしたダイナミックな走行性能を実現。スリッパークラッチやトラクションコントロールなど最新の電子制御システムを採用し、高い安全性とコントロール性を提供します。鋭いコーナリング性能とパワフルな加速が特徴で、サーキットやワインディングロードで真価を発揮。モタードスタイルならではの自由で刺激的な走りを楽しめるモデルです。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'BLACKTOPGARAGE',
        'name' => 'VELOCITY-R1100',
        'image' => 'img/BLACKTOPGARAGE/VELOCITY-R1100.png',
        'description' => '40.00',
        'description_details_short' => 'BLACKTOPGARAGE VELOCITY-R1100は、圧倒的なパワーと快適性を備えた、ツアラーとスポーツ性能を両立する伝説的なバイクです。',
        'description_details' => 'BLACKTOPGARAGE VELOCITY-R1100は、かつて世界最速を誇ったスポーツツアラーで、1100ccクラスのバイクとして圧倒的なパワーと存在感を備えています。水冷4気筒エンジンを搭載し、高速巡航からスムーズな街乗りまで幅広いシーンで優れたパフォーマンスを発揮。空力性能に優れた流線型のデザインと快適なライディングポジションが特徴で、長距離ツーリングにも最適です。信頼性の高いブレーキ性能と安定感のあるハンドリングにより、安全性も抜群。ツアラーとスポーツ性能を両立した、ライダーの夢を叶える一台です。'
    ];
    DB::table('merchandises')->insert($param);
    $param = [
        'judge' => 'BLACKTOPGARAGE',
        'name' => 'TITAN-RR1000',
        'image' => 'img/BLACKTOPGARAGE/TITAN-RR1000.png',
        'description' => '385.00',
        'description_details_short' => 'TITAN-RR1000は、モータースポーツ技術と圧倒的なパフォーマンスを備えた究極のスーパースポーツバイクです。',
        'description_details' => 'TITAN-RR1000は、モータースポーツのDNAを受け継いだ究極のスーパースポーツバイクです。999ccの水冷4気筒エンジンを搭載し、圧倒的なパワーと高回転域でのスムーズなパフォーマンスを実現。カーボンファイバー製ウイングレットや高性能ブレーキシステムなど、サーキット走行に特化した最新技術を採用しています。軽量かつ高剛性のフレームにより、卓越したハンドリングとコーナリング性能を発揮。アグレッシブで洗練されたデザインも特徴で、外見からもその高性能ぶりが伝わります。公道でもサーキットでも、極限の走りを楽しめる一台です。'
    ];
    DB::table('merchandises')->insert($param);

    }
}
