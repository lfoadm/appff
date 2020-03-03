<?php

use App\User;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Leandro Oliveira',
            'email' => 'lfoadm@icloud.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'user_type' => '1',
            'remember_token' => Str::random(10),
        ]);
    }
}
