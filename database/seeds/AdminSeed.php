<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!\App\User::whereEmail('admin@q-check.com')->exists()) {
            \App\User::create([
                'name' => 'Q-Check Admin',
                'email' => 'admin@q-check.com',
                'password' => app()->isLocal() ? bcrypt('admin') : bcrypt('p@ssw0rd'),
            ]);
        }
    }
}
