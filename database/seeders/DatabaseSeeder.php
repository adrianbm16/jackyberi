<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Asegúrate de importar Hash para encriptar la contraseña

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Item::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();

        $user->name = 'Jacky Bernal';
        $user->email = 'jackyberi@gmail.com';
        $user->password = Hash::make('12345'); // Contraseña encriptada

        $user->save(); // Guarda el usuario en la base de datos

    }
}
