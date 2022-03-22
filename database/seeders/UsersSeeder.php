<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'name' => 'Mauricio',
            'email'=> 'mauricio@uroff.net',
            'password' => bcrypt('123456')
        ]);
    }
}
