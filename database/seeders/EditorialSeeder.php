<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table("editorials")->insert(
            [
                'name' => 'No Aplica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Clasicos Universales',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Alias Editorial',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'AM Editores',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editores Mexicanos Unidos',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Amate Editorial',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Caligrama Editores',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'DIANA',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'RESERVOIR BOOKS',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Ediciones el Naranjo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Ediciones Era',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial CIDCLI',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial el Dragón Rojo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial Lectorum',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial Sudamericana',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial Patria',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial Pax',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial Praxis',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Editorial Santillana México',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'La Tinta del Silencio',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Mantis Editores',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Parentalia Ediciones',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Tumbona Ediciones',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Austral',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Ediciones Urano',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Hetzel',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Era',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Planeta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Diario Educacion',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Debolsillo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Budo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("editorials")->insert(
            [
                'name' => 'Empresa Activa',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
