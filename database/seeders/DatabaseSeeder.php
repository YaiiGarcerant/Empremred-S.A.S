<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'ADMINISTRADOR',
            'email' => 'empremred.sas@hotmail.com',
            'password' => bcrypt('empremred.sas*'),
        ]);
    }
}