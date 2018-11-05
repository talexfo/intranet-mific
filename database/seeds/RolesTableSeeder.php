<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create([
            'name' => 'superadmin',
            'display_name' => 'Super administrador del sitio',
            'description' => 'Es el superadmin de la aplicacion'

        ]);


        Role::create([
            'name' => 'admin',
            'display_name' => 'administrador de la aplicación',
            'description' => 'administrar el directorio'

        ]);
    }
}
