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
            'name' => 'SuperAdmin',
            'email' => 'superadmin@email.com',
            'password' => '$2y$10$JTfsg.9j2Lno15k066jrbuU4dBkqMqHI.DYnxyeNiZ6kj6dtwaJdm'

        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@email.com',
            'password' => '$2y$10$JTfsg.9j2Lno15k066jrbuU4dBkqMqHI.DYnxyeNiZ6kj6dtwaJdm'

        ]);

        User::create([
            'name' => 'Administrador 2',
            'email' => 'administrador_2@email.com',
            'password' => '$2y$10$JTfsg.9j2Lno15k066jrbuU4dBkqMqHI.DYnxyeNiZ6kj6dtwaJdm'

        ]);
    }
}
