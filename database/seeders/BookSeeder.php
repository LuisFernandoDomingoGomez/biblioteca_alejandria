<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("books")->insert(
            array(
                "category_id" => 31,
                "editorial_id" => 1,
                "name" => "1984",
                "author_id" => 11,
                "description" => "ss",
                "image" => "1984.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 33,
                "editorial_id" => 15,
                "name" => "Los Gatos de Ulthar",
                "author_id" => 2,
                "description" => "ss",
                "image" => "ulthar.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 31,
                "editorial_id" => 15,
                "name" => "Un Mundo Feliz",
                "author_id" => 13,
                "description" => "ss",
                "image" => "un_mundo_feliz.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 26,
                "editorial_id" => 8,
                "name" => "Los Hornos de Hitler",
                "author_id" => 29,
                "description" => "ss",
                "image" => "los_hornos_de_hitler.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 2,
                "editorial_id" => 16,
                "name" => "Álgebra de Baldor",
                "author_id" => 6,
                "description" => "ss",
                "image" => "baldor.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 11,
                "editorial_id" => 24,
                "name" => "El manifiesto comunista",
                "author_id" => 31,
                "description" => "ss",
                "image" => "el_manifiesto_comunista.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 27,
                "editorial_id" => 1,
                "name" => "Orgullo y prejuicio",
                "author_id" => 24,
                "description" => "ss",
                "image" => "orgullo_y_prejuicio.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 36,
                "editorial_id" => 26,
                "name" => "La vuelta al mundo en 80 dias",
                "author_id" => 27,
                "description" => "ss",
                "image" => "la_vuelta_al_mundo_en_80_dias.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 29,
                "editorial_id" => 15,
                "name" => "Cien años de soledad",
                "author_id" => 1,
                "description" => "ss",
                "image" => "cien_anos_de_soledad.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 25,
                "editorial_id" => 25,
                "name" => "Los Cuatro Acuerdos",
                "author_id" => 35,
                "description" => "ss",
                "image" => "los_4_acuerdos.jpg",
                "pdf" => "ss",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
    }
}
