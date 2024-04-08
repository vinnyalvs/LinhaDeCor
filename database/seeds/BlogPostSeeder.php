<?php

use App\Post;
use Illuminate\Database\Seeder;

use App\BlogPost;
use App\User;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create()->each(function ($user) {
            factory(Post::class, 5)->create([
                'user_id' => $user->id
            ])->each(function ($post) {
                factory(BlogPost::class,1)->create([
                    'id' => $post->id,
                ]);
            });
        });

    }
}
