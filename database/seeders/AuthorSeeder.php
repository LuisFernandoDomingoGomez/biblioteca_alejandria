<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table("authors")->insert(
            [
                'name' => 'Gabriel García Márquez',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'H. P. Lovecraft',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Charles Dickens',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Franz Kafka',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Umberto Eco',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Aurelio Baldor',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Virginia Wolf',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Ralph Ellison',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Edurne Portela',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'H. G. Wells',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'George Orwell',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Ray Bradbury',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Aldous Huxley',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Philip K. Dick',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Francis Bacon',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'J. K. Rowling',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'C. S. Lewis',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Michael Scott',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'James Barry',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Agatha Christie',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Fiódor Dostoyevski',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Stephen King',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Bram Stoker',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Jane Austen',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Mary Shelley',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Daniel Defoe',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Julio Verne',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Dante Alighieri',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Olga Lengyel',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Nelson Mandela',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Karl Marx',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Friedrich Engels',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Friedrich Nietzsche',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Anand Dílvar',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Miguel Ángel Ruiz Macías',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'Carlos Fuentes',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("authors")->insert(
            [
                'name' => 'German Garmendia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
