<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

       
        $tags = Tag::factory(15)->create();

        $articles = Article::factory(40)->recycle($users)->create();

      foreach ($articles as $article){
        $randomTags = $tags->random(rand(1,4));
        $article->tags()->attach($randomTags);
      }

    
    }
}
