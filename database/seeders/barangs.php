<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama' => 'Kety si Manis Putih',
                'kode_jenis' => 'aaaa',
                'umur' => '12',
                'harga' => 1200000,
                'deskripsi_view' =>'Laborum officia officia anim reprehenderit sit dolor ullamco pariatur dolore ipsum duis consequat aliquip.',
                'deskripsi_detail' => 'Veniam mollit laboris excepteur amet ex mollit mollit tempor minim ad occaecat. Exercitation ut velit id exercitation amet. Fugiat cillum ex et Lorem consectetur. Ea duis aliqua elit veniam amet exercitation fugiat. Ut commodo amet eiusmod quis anim non veniam officia commodo cillum qui elit. Ex consequat excepteur amet incididunt.',
                'foto' => 'kety.png',
                'stock' => 13

            
            ],

            [
                'nama' => 'Bucin si Manis Hitam',
                'kode_jenis' => 'aaab',
                'umur' => '5',
                'harga' => 1000000,
                'deskripsi_view' =>'Laborum officia officia anim reprehenderit sit dolor ullamco pariatur dolore ipsum duis consequat aliquip.',
                'deskripsi_detail' => 'Veniam mollit laboris excepteur amet ex mollit mollit tempor minim ad occaecat. Exercitation ut velit id exercitation amet. Fugiat cillum ex et Lorem consectetur. Ea duis aliqua elit veniam amet exercitation fugiat. Ut commodo amet eiusmod quis anim non veniam officia commodo cillum qui elit. Ex consequat excepteur amet incididunt.',
                'foto' => 'bucin.png',
                'stock' => 10

            
            ],

            [
                'nama' => 'Rem si Manis Hitam Oyen',
                'kode_jenis' => 'aaab',
                'umur' => '10',
                'harga' => 1700000,
                'deskripsi_view' =>'Laborum officia officia anim reprehenderit sit dolor ullamco pariatur dolore ipsum duis consequat aliquip.',
                'deskripsi_detail' => 'Veniam mollit laboris excepteur amet ex mollit mollit tempor minim ad occaecat. Exercitation ut velit id exercitation amet. Fugiat cillum ex et Lorem consectetur. Ea duis aliqua elit veniam amet exercitation fugiat. Ut commodo amet eiusmod quis anim non veniam officia commodo cillum qui elit. Ex consequat excepteur amet incididunt.',
                'foto' => 'rem.png',
                'stock' => 10

            
            ],

            
            [
                'nama' => 'Bloddy si Manis Hitam Putih',
                'kode_jenis' => 'aaaa',
                'umur' => '10',
                'harga' => 1700000,
                'deskripsi_view' =>'Laborum officia officia anim reprehenderit sit dolor ullamco pariatur dolore ipsum duis consequat aliquip.',
                'deskripsi_detail' => 'Veniam mollit laboris excepteur amet ex mollit mollit tempor minim ad occaecat. Exercitation ut velit id exercitation amet. Fugiat cillum ex et Lorem consectetur. Ea duis aliqua elit veniam amet exercitation fugiat. Ut commodo amet eiusmod quis anim non veniam officia commodo cillum qui elit. Ex consequat excepteur amet incididunt.',
                'foto' => 'bloddy.png',
                'stock' => 10

            
            ],

            [
                'nama' => 'Robby si Oyen bar - bar',
                'kode_jenis' => 'aaac',
                'umur' => '8',
                'harga' => 700000,
                'deskripsi_view' =>'Laborum officia officia anim reprehenderit sit dolor ullamco pariatur dolore ipsum duis consequat aliquip.',
                'deskripsi_detail' => 'Veniam mollit laboris excepteur amet ex mollit mollit tempor minim ad occaecat. Exercitation ut velit id exercitation amet. Fugiat cillum ex et Lorem consectetur. Ea duis aliqua elit veniam amet exercitation fugiat. Ut commodo amet eiusmod quis anim non veniam officia commodo cillum qui elit. Ex consequat excepteur amet incididunt.',
                'foto' => 'robby.png',
                'stock' => 10

            
            ],
            [
                'nama' => 'Luffy si Hitam Gemoy',
                'kode_jenis' => 'aaac',
                'umur' => '7',
                'harga' => 800000,
                'deskripsi_view' =>'Laborum officia officia anim reprehenderit sit dolor ullamco pariatur dolore ipsum duis consequat aliquip.',
                'deskripsi_detail' => 'Veniam mollit laboris excepteur amet ex mollit mollit tempor minim ad occaecat. Exercitation ut velit id exercitation amet. Fugiat cillum ex et Lorem consectetur. Ea duis aliqua elit veniam amet exercitation fugiat. Ut commodo amet eiusmod quis anim non veniam officia commodo cillum qui elit. Ex consequat excepteur amet incididunt.',
                'foto' => 'luffy.png',
                'stock' => 4

            
            ]
            
        ]);
    }
 }

