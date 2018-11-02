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
            'name' => 'Tito Farinas',
            'email' => 'titofarinas@gmail.com',
            'password' => '$2y$10$JTfsg.9j2Lno15k066jrbuU4dBkqMqHI.DYnxyeNiZ6kj6dtwaJdm'

        ]);
    }
}
