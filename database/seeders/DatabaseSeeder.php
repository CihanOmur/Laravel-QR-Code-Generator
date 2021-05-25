<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\qr_lists::insert([
            'image' => 'cihan',
            'name' => public_path('qrcodes.denemedir.svg'),
            'time' => now(),
            'remember_token' => Str::random(10)
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
