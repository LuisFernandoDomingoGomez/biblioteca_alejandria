<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table("categories")->insert(
            [
                'name' => 'Matemáticas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Álgebra',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Trigonometría',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Geometría',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Programación',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Ingles',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Español',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Español Lecturas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Antropología',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Ciencias jurídicas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Ciencias Políticas',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Ciencias e Ingenierías',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Economía',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Psicología',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Sociología',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Historia Universal',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Geografia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Geologia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Astronomía',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Botanica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Biologia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Fisica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Neurologia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Medicina',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Autoayuda',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela autobiográfica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela policíaca',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela de ciencia ficción',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela fantástica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela epistolar',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela distópica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela utópica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela de terror',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela gótica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela satírica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela de aventuras',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela romántica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela costumbrista',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Epopeya',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela psicológica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Novela corta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Suspenso',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("categories")->insert(
            [
                'name' => 'Ficción deportiva',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
