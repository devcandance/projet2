<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        DB::statement('ALTER TABLE comments AUTO_INCREMENT=1');

        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'email' => 'jacky@gmail.com',
                'message' => 'Le sushi c\'est la vie, le PHP aussi.',
                'status' => 'publish',
            ],
            [
                'post_id' => 2,
                'email' => 'jeanjulesbaptistere@gmail.com',
                'message' => 'Bravo! Si Balzac était vivant il écrirait en PHP!',
                'status' => 'publish',
            ],
            [
                'post_id' => 3,
                'email' => 'garibaldi@gmail.com',
                'message' => 'PHP Power Wazaaaaaaa...',
                'status' => 'publish',
            ],
            [
                'post_id' => 4,
                'email' => 'tutu@gmail.com',
                'message' => 'Ich bin ein php lover!',
                'status' => 'publish',
            ],
        ]);
    }
}
