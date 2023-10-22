<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     /* Roles iniciales */
     $administrador = Role::create(['name'=>'Administrador']); //CRUD
     $usuario = Role::create(['name'=>'Usuario']); //RU
     /* Roles iniciales */


     /* Permisos iniciales */

     Permission::create(['name'=>"Create"])->syncRoles([$administrador]);
     Permission::create(['name'=>"Read"])->syncRoles([$administrador, $usuario]);
     Permission::create(['name'=>"Update"])->syncRoles([$administrador, $usuario]);
     Permission::create(['name'=>"Delete"])->syncRoles([$administrador]);


     // administrador
     User::create([
         'name' => 'Administrador',
         'email' => 'administrador@administrador.com',
         'email_verified_at' => Carbon::now(),
         'password' => Hash::make('12345678'),
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now(),

     ])->assignRole($administrador);

     // usuario
     User::create([
        'name' => 'Usuario',
        'email' => 'usuario@usuario.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ])->assignRole($usuario);

    User::create([
        'name' => 'Usuario 3',
        'email' => 'usuario3@usuario4.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ])->assignRole($usuario);

    User::create([
        'name' => 'Usuario 4',
        'email' => 'usuario4@usuario4.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ])->assignRole($usuario);

    User::create([
        'name' => 'Usuario 5',
        'email' => 'usuario5@usuario5.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ])->assignRole($usuario);
    }
}
