<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kucings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kucings')->insert([
            [
                'id' => 'aaaa',
                'jenis' => 'USA'
            ],

            [
                'id' => 'aaab',
                'jenis' => 'TURKY'
            ],

            [
                'id' => 'aaac',
                'jenis' => 'JAVA'
            ],

         
            
        ]);
    }
}
