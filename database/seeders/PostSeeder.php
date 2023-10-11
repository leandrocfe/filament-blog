<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(50)
            ->create();

        $posts->each(function (Post $post) {
            $post->categories()->attach(Category::inRandomOrder()->limit(2)->get());
        });
    }
}
