<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogArticle;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        BlogArticle::factory(1000)->create();
    }
}
