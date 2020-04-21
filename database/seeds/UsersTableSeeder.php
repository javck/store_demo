<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'role_id' => 1,
            'name' => '管理員',
            'email' => 'admin@goblinlab.org',
            'avatar' => 'users/default.png',
            'username' => 'admin',
            'password' => bcrypt('password')
        ]);
        factory(User::class,50)->create();
    }
}
