<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(['title' => 'Best post ever', 'slug' => 'best-post-ever']);
        Post::create(['title' => 'Even Better post', 'slug' => 'even-better-post']);
        Post::create(['title' => 'One More post', 'slug' => 'one-more-post']);
        Post::create(['title' => 'How to use Tailwind CSS', 'slug' => 'how-to-use-tailwind-css']);
        Post::create(['title' => 'How to use Livewire', 'slug' => 'how-to-use-livewire']);
    }
}
