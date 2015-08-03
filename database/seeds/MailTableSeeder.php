<?php

use Illuminate\Database\Seeder;

class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mails')->delete();

        DB::statement('ALTER TABLE mails AUTO_INCREMENT=1');

        DB::table('mails')->insert([
            [
                'email' => 'jacky@gmail.com',
                'message' => 'Le sushi c\'est la vie, le PHP aussi.',
            ],
            [
                'email' => 'jeanjulesbaptistere@gmail.com',
                'message' => 'Bravo! Si Balzac était vivant il écrirait en PHP!',
            ],
            [
                'email' => 'garibaldi@gmail.com',
                'message' => 'PHP Power Wazaaaaaaa...',
            ],
            [
                'email' => 'tutu@gmail.com',
                'message' => 'Ich bin ein php lover!',
            ],
        ]);
    }
}
