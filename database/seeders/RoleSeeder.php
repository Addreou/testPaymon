<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Desarrollador',
            'description' => 'Acceso a cada una de las funcionalidades del sistema. Rol especializado para desarrolladores',
        ]);

        Role::create([
            'name' => 'Administrador',
            'description' => 'Acceso restringido. Rol principal para usuarios finales, puede no tener habilitadas funcionalidades muy específicas del sistema.',
        ]);

        Role::create([
            'name' => 'Usuario',
            'description' => 'Acceso limitado. Pruebas 1.',
        ]);
    }
}
