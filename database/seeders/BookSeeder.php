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
                "editorial_id" => 28,
                "name" => "Fahrenheit 451",
                "author_id" => 12,
                "description" => "ss",
                "image" => "https://i.pinimg.com/originals/8c/09/d9/8c09d9fcb63e9bee8b462ffe27d7de18.png",
                "pdf" => "https://planetadelibrospe0.cdnstatics.com/libros_contenido_extra/42/41828_Fahrenheit_451.pdf",
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
                "image" => "https://1.bp.blogspot.com/-9JDlEheMaAs/Xz5_-qp9urI/AAAAAAAAR-k/GFwDyXNVyaQUc4CknKLycdLEXFKZQPtrgCLcBGAsYHQ/s1600/prosa-completa-i-los-gatos-de-ulthar-h-p-lovecraft-D_NQ_NP_875827-MLA27106201935_032018-F.jpg",
                "pdf" => "http://www.alconet.com.ar/varios/libros/e-book_l/los_gatos_de_ulthar.pdf",
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
                "image" => "https://images.cdn1.buscalibre.com/fit-in/360x360/c1/8c/c18cdeb80fa6f9a212a1cc5639e94c6d.jpg",
                "pdf" => "https://agora.xtec.cat/cfabonpastor/wp-content/uploads/usu260/2017/03/Un-mundo-feliz-Huxley.pdf",
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
                "image" => "https://m.media-amazon.com/images/I/41cpApvrYqL.jpg",
                "pdf" => "http://www.bnjm.cu/img/noticias/2021/8/1/Lengyel%20Olga%20-%20Los%20Hornos%20de%20Hitler.pdf",
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
                "image" => "https://www.planetadelibros.com/usuaris/libros/fotos/285/m_libros/portada_el-manifiesto-comunista_karl-marx_201811061652.jpg",
                "pdf" => "https://centromarx.org/images/stories/PDF/manifiesto%20comunista.pdf",
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
                "image" => "https://1.bp.blogspot.com/-uB4_mzYdOdI/Xod1Cl0PDCI/AAAAAAAADsA/4KB8iQx0KT4XY7FEul5RcFmuG0Ra5KVPwCNcBGAsYHQ/s1600/JaneAusten-OrgulloYPrejuicio.png",
                "pdf" => "https://biblioteca.org.ar/libros/131513.pdf",
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
                "image" => "https://images.squarespace-cdn.com/content/v1/5a0dd6831f318dcf5130a0d5/1551905228484-Q9UV0JNTRIG0RUNZ9AJ7/cien-anos-de-soledad-gabriel-garcia-marquez.jpg",
                "pdf" => "http://www.secst.cl/upfiles/documentos/19072016_1207am_578dc39115fe9.pdf",
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
                "image" => "https://images-na.ssl-images-amazon.com/images/I/81zXRFnhXuL.jpg",
                "pdf" => "http://biblio3.url.edu.gt/Libros/2011/los-4acuerdos.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 39,
                "editorial_id" => 15,
                "name" => "La Divina Comedia",
                "author_id" => 28,
                "description" => "ss",
                "image" => "https://minepub.net/media/k2/items/cache/21874bc28813810f3a3edffddba32e28_M.jpg",
                "pdf" => "https://web.seducoahuila.gob.mx/biblioweb/upload/Dante%20Alighieri%20Divina%20comedia.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 27,
                "editorial_id" => 26,
                "name" => "Crimen y Castigo",
                "author_id" => 21,
                "description" => "ss",
                "image" => "https://imagessl2.casadellibro.com/a/l/t5/22/9788418008122.jpg",
                "pdf" => "http://www.suneo.mx/literatura/subidas/Fiodor%20Dostoyevski%20Crimen%20y%20castigo.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 28,
                "editorial_id" => 20,
                "name" => "El hombre invisible",
                "author_id" => 10,
                "description" => "ss",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/91qlnxi6UIL.jpg",
                "pdf" => "http://web.seducoahuila.gob.mx/biblioweb/upload/El%20Hombre%20Invisible.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 28,
                "editorial_id" => 20,
                "name" => "La Maquina del Tiempo",
                "author_id" => 10,
                "description" => "ss",
                "image" => "https://m.media-amazon.com/images/I/51T2VLwKzXL.jpg",
                "pdf" => "https://portalacademico.cch.unam.mx/materiales/al/cont/tall/tlriid/tlriid4/circuloLectores/docs/maquina_del_tiempo.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 36,
                "editorial_id" => 26,
                "name" => "De la Tierra a la Luna",
                "author_id" => 27,
                "description" => "ss",
                "image" => "https://imagessl8.casadellibro.com/a/l/t0/38/9788445908938.jpg",
                "pdf" => "https://biblioteca.org.ar/libros/656256.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 36,
                "editorial_id" => 26,
                "name" => "La Isla Misteriosa",
                "author_id" => 27,
                "description" => "ss",
                "image" => "https://www.exlibris.com.co/imagenes/9788491/978849187024.JPG",
                "pdf" => "https://biblioteca.org.ar/libros/133575.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 40,
                "editorial_id" => 2,
                "name" => "La Metamorfosis",
                "author_id" => 4,
                "description" => "ss",
                "image" => "https://www.libreriaserendipia.com/imagenes/9788468/978846834119.JPG",
                "pdf" => "https://biblioteca.org.ar/libros/1587.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 43,
                "editorial_id" => 31,
                "name" => "El Tao Del Jeet Kune Do",
                "author_id" => 41,
                "description" => "ss",
                "image" => "https://imagessl1.casadellibro.com/a/l/t7/41/9788494709241.jpg",
                "pdf" => "https://aprendizaje.mec.edu.py/dw-recursos/system/content/0c59c97/content/Lee,%20Bruce%20(1940-1973)/Lee,%20Bruce%20-%20El%20Tao%20del%20Jeet%20Kune%20Do.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 29,
                "editorial_id" => 30,
                "name" => "La Mecanica del Corazón",
                "author_id" => 42,
                "description" => "ss",
                "image" => "https://static.megustaleer.com.mx/images/libros_650_x/EGM22908.jpg",
                "pdf" => "https://profesordann.files.wordpress.com/2018/10/la-mecanica-del-corazon-mathias-malzieu.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 33,
                "editorial_id" => 30,
                "name" => "El misterio de Salem's Lot",
                "author_id" => 22,
                "description" => "ss",
                "image" => "https://somoslibros.net/wp-content/uploads/2021/05/Descargar-el-misterio-de-salmens-lot-stephen-king-pdf-epub-300x459.jpg",
                "pdf" => "https://repolibros.files.wordpress.com/2015/05/1975-el-misterio-de-salems-lot-salems-lot.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 33,
                "editorial_id" => 30,
                "name" => "El Resplandor",
                "author_id" => 22,
                "description" => "ss",
                "image" => "https://www.libros-prohibidos.com/wp-content/uploads/2016/02/El-resplandor-portada.jpg",
                "pdf" => "https://gualeguaychu.gov.ar/apps/dashboard/ftp/biblioteca/45/45.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 31,
                "editorial_id" => 1,
                "name" => "1984",
                "author_id" => 11,
                "description" => "ss",
                "image" => "https://imagessl4.casadellibro.com/a/l/t5/44/9780141036144.jpg",
                "pdf" => "http://www.laorquestafilosofica.com/wp-content/uploads/2018/01/1984.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 33,
                "editorial_id" => 30,
                "name" => "Misery",
                "author_id" => 22,
                "description" => "ss",
                "image" => "https://quelibroleo.com/images/libros/libro-1500360302.jpg",
                "pdf" => "https://repolibros.files.wordpress.com/2015/05/1987-misery.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 37,
                "editorial_id" => 28,
                "name" => "Dí Hola",
                "author_id" => 37,
                "description" => "ss",
                "image" => "https://images-na.ssl-images-amazon.com/images/I/91IjCroSKGL.jpg",
                "pdf" => "https://especialess3.lanacion.com.ar/pdfs/gendarmeria-di-hola-1erCap.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 29,
                "editorial_id" => 25,
                "name" => "El Principito",
                "author_id" => 40,
                "description" => "ss",
                "image" => "https://cloudfront-us-east-1.images.arcpublishing.com/eluniverso/PERPKPAQLVHFHIUUSGKX77UX6Q.jpg",
                "pdf" => "http://bibliotecadigital.ilce.edu.mx/Colecciones/ObrasClasicas/_docs/ElPrincipito.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 34,
                "editorial_id" => 27,
                "name" => "Aura",
                "author_id" => 36,
                "description" => "ss",
                "image" => "https://hellodf.com/wp-content/uploads/2015/01/30-aura.jpg",
                "pdf" => "https://brasilia.cervantes.es/imagenes/file/biblioteca/pdf/carlos_fuentes_aura.pdf",
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
                "image" => "https://imagessl7.casadellibro.com/a/l/t7/37/9788490567937.jpg",
                "pdf" => "http://web.seducoahuila.gob.mx/biblioweb/upload/Julio%20Verne%20-%20Vuelta%20al%20Mundo%20en%2080%20Dias.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 36,
                "editorial_id" => 26,
                "name" => "Viaje al Centro de la Tierra",
                "author_id" => 27,
                "description" => "ss",
                "image" => "https://imagessl9.casadellibro.com/a/l/t7/99/9788427203099.jpg",
                "pdf" => "http://web.seducoahuila.gob.mx/biblioweb/upload/Julio%20Verne%20-%20Viaje%20al%20Centro%20de%20la%20Tierra.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 36,
                "editorial_id" => 26,
                "name" => "20,000 leguas de viaje submarino",
                "author_id" => 27,
                "description" => "ss",
                "image" => "https://espaciolibros.com/wp-content/uploads/2021/06/mejores-libros-de-julio-verne-Veinte-mil-leguas-de-viaje-submarino-600x891.jpg",
                "pdf" => "https://biblioteca.org.ar/libros/656610.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 33,
                "editorial_id" => 26,
                "name" => "El Color que Cayó del Cielo",
                "author_id" => 2,
                "description" => "ss",
                "image" => "https://images.cdn3.buscalibre.com/fit-in/360x360/b7/7f/b77f4049f4c402785ec29f312c7fef48.jpg",
                "pdf" => "https://web.seducoahuila.gob.mx/biblioweb/upload/Lovecraft_El_Color_que_cay%C3%B3_del_cielo.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 28,
                "editorial_id" => 32,
                "name" => "¿Quién se ha llevado mi queso?",
                "author_id" => 43,
                "description" => "ss",
                "image" => "https://blog.12min.com/es/wp-content/uploads/sites/2/2019/04/Qui%C3%A9n-se-ha-llevado-mi-queso.jpg",
                "pdf" => "http://www.librosmaravillosos.com/miqueso/pdf/Quien%20se%20ha%20llevado%20mi%20queso%20-%20Spencer%20Johnson%20.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
        DB::table("books")->insert(
            array(
                "category_id" => 8,
                "editorial_id" => 29,
                "name" => "Libro de Lecturas de 1er Grado",
                "author_id" => 39,
                "description" => "ss",
                "image" => "https://img.chilango.com/2020/08/libro-de-lecturas-primer-grado-1997-1.jpg",
                "pdf" => "https://bibliospd.files.wordpress.com/2019/05/libro-de-lecturas-plan93-el-perrito.pdf",
                'created_at'=>now(),
                'updated_at'=>now(),
            )
        );
    }
}
