<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        DB::statement('ALTER TABLE posts AUTO_INCREMENT=1');

        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'Symfony Live Madrid 2014',
                'slug'      => str_slug('symfony Madrid'),
                'excerpt' => 'SensioLabs Madrid is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid.',
                'content' => 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember.',
                'date_start' => '2014-10-29 09:00:00',
                'date_end' => '2014-10-31 18:00:00',
                'thumbnail_link' => 'symfony_madrid.png',
                'url_site' => 'http://madrid2014.live.symfony.com/',
                'status' => 'publish',
            ],
            [
                'user_id' => 1,
                'title' => 'Symfony Live London 2014',
                'slug' => str_slug('symfony London'),
                'excerpt' => 'SensioLabs UK is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid.',
                'content' => 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of London, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember. ',
                'date_start'=> '2014-05-15 09:00:00',
                'date_end'  => '2014-05-17 18:00:00',
                'thumbnail_link' => 'symfony_london.png',
                'url_site' => 'http://london2014.live.symfony.com/',
                'status' => 'publish',
            ],
            [
                'user_id' => 2,
                'title' => 'Laracon Amsterdam 2014',
                'slug' => str_slug('laracon amsterdam'),
                'excerpt' => 'The creator of Laravel gives a talk about building artisan commands, the IoC container, queues, testing, and some upcoming Laravel features.',
                'content' => 'The Community contributor Tony talks about his experiences writing large applications with Laravel 4 and his current architectural approaches. The creator of Laravel gives a talk about building artisan commands, the IoC container, queues, testing, and some upcoming Laravel features.',
                'date_start'=> '2014-11-28 09:00:00',
                'date_end'  => '2014-11-31 18:00:00',
                'thumbnail_link' => 'laravel_amsterdam2014.jpg',
                'url_site' => 'http://laracon.eu/2014/',
                'status' => 'publish',
            ],
            [
                'user_id' => 2,
                'title' => 'PHP Tour 2014',
                'slug' => str_slug('php tour lyon'),
                'excerpt' => 'Cette année au PHP Tour Lyon 2014, l\'AFUP et JoliCode, sponsor Argent, exaucent leur souhait ! Un apéro communautaire se tiendra le lundi 23 juin, uniquement réservé aux visiteurs de l\'event, juste après la fin de la première journée de conférences.',
                'content' => 'C\'est au Red House, pub situé à quelques pas de la Manufacture des Tabacs, que nous organiserons cet apéro PHP exceptionnel. Repas, boissons, ambiance conviviale, quelques surprises, on se charge de tout ! Et l\'AFUP est soutenue dans l\'organisation de cette soirée par JoliCode, agence experte dans la réalisation de projets Web et mobiles. En effet, JoliCode s\'implique dans de nombreuses conférences à travers le monde, et a depuis toujours une véritable affinité avec les événements AFUP. Sans compter que les développeurs de JoliCode sont convaincus que, ce qu\'il y a de mieux dans une conférence, ce sont les gens que l\'on y croise et les discussions qui s\'en suivent... C\'est pourquoi, en plus de devenir sponsor Argent du PHP Tour Lyon 2014, JoliCode participe à l\'organisation de cet apéro communautaire gratuit pour tous les visiteurs de l\'event !',
                'date_start'=> '2015-01-29 09:00:00',
                'date_end'  => '2015-01-31 18:00:00',
                'thumbnail_link' => 'rasmusLerdorf.jpg',
                'url_site' => 'http://afup.org/pages/phptourlyon2014/',
                'status' => 'publish',
            ],
        ]);
    }
};