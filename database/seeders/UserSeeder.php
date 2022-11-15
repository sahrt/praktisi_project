<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'type' => 1, // super User/admin
                'password' => bcrypt('admin'),
                'email_verified_at' => Carbon::now()->format('Y-n-d H:i:s')
            ]
         ];

         foreach ($users as $key => $user) {
            User::create($user);
         }
    }
}
