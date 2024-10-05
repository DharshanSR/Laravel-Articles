<?php

namespace Database\Seeders;
use App\Models\Article;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Article::factory()->count(10)->create(['author_id' => 1]);
    }
}
