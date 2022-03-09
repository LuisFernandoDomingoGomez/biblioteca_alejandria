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
                'name' => 'Español',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
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
                'name' => 'Geometría',
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
                'name' => 'Historia',
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
                'name' => 'Novela distópica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
