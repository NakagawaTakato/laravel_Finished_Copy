<?php

namespace Database\Seeders;

use App\Models\Name;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $param = [
        'main' => 'ショップ名',
        'detail' => 'a'
    ];
    DB::table('names')->insert($param);

    }
}
