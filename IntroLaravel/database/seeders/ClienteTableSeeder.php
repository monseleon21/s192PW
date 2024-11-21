<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'María',
                'apellido'=>'Campuzano',
                'correo'=>'monseleon0p72@gmail.com',
                'telefono'=>'5611743414',
            ],[
                'nombre'=>'Felix',
                'apellido'=>'Camorlinga',
                'correo'=>'felixale72@gmail.com',
                'telefono'=>'5611745877',
            ],[
                'nombre'=>'Michelle',
                'apellido'=>'León',
                'correo'=>'mich2@gmail.com',
                'telefono'=>'4411747452',
            ]]);
    }
}
