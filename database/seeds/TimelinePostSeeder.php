<?php

use Illuminate\Database\Seeder;
use App\TimelinePost;
use App\User;

class TimelinePostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TimelinePost::truncate();

        $path = getcwd() . "/database/data/csvjson.json";

        $json = json_decode(file_get_contents($path), true);

        $faker = Faker\Factory::create();

        factory(User::class, 1)->create([
        ]);

        foreach ($json as $key => $value) {
            factory(\App\Post::class, 1)->create([
                'user_id' => 1,
                'title' => $value['title'],
                'subtitle' => $value['subtitle'] || null,
                'body' => $value['body'],
                'thumbnail' => $value['thumbnail'] || null,
            ])->each(function ($post) use ($faker, $value) {
                    factory(TimelinePost::class, 1)->create([
                        'id' => $post->id,
                        'timeline_type' => 'law',
                        'event_date' => $value['event_date'] . "/01/01"
                    ]);
                }
            );
        }
    }
}
