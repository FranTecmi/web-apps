<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Crea 10 usuarios de prueba para la API.
     */
    public function run(): void
    {
        User::factory(10)->create();
    }
}
