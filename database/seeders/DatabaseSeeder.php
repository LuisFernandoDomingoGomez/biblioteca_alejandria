<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Editorial;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategorySeeder::class,
            EditorialSeeder::class,
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
    }
}
