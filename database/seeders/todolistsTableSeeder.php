<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class todolistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'Coachtech学習',
        ];
        DB::table('todolists')->insert($param);
        $param = [
            'content' => '事業計画作成',
        ];
        DB::table('todolists')->insert($param);
        $param = [
            'content' => '契約書作成',
        ];
        DB::table('todolists')->insert($param);
        // //
    }
}
