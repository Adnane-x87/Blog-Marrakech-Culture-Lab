<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $users = User::factory(10)->create();

      
        $tags = Tag::factory(15)->create();

        $articles = Article::factory(40)->recycle($users)->create();

        $articles->each(function ($article) use ($tags) {
            $article->tags()->attach(
                $tags->random(rand(1, 4))->pluck('id')->toArray()
            );
        });
    }
}