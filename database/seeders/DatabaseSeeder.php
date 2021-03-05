<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'username' => 'Test',
            'business_name' => 'Test',
            'type' => 1,
            'confirmed' => 1,
            'email' => 'test@gmail.com',
            'password' => bcrypt('Password'),            
        ]);

        \App\Models\Operator::create([
            'name' => 'Paypal',
        ]);

        \App\Models\Language::create([
            'name' => 'English',           
        ]);

        \App\Models\Language::create([
            'name' => 'French',           
        ]);

        \App\Models\Category::create([
            'name' => 'Basketball',           
        ]);

        \App\Models\Category::create([
            'name' => 'Football',           
        ]);

        
        $events = [
            [
              'type' => 1,
              'timing' => 1,
              'group' => 1,
              'category_id'=> 1,
              'language_id'=> 1,
              'name' => 'Borussia Dortmund vs Bayern München',
              'views' => 15000,
              'image_name'=> 'image01.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 1,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Lakers VS Celtics',
                'views' => 15000,
                'image_name'=> 'image02.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 1,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Cleveland Browns VS Los Angeles Chargers',
                'views' => 15000,
                'image_name'=> 'image03.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 1,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Patriots VS Eagles',
                'views' => 15000,
                'image_name'=> 'image04.png',
            ],
            // premiere live
            [
              'type' => 1,
              'timing' => 2,
              'group' => 1,
              'category_id'=> 1,
              'language_id'=> 1,
              'name' => 'Cleveland Cavaliers VS Milwaukee Bucks',
              'views' => 15000,
              'image_name'=> 'image05.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 1,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Colts VS Texans',
                'views' => 15000,
                'image_name'=> 'image06.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 1,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'FCB VS Paris Saint Germain',
                'views' => 15000,
                'image_name'=> 'image07.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 1,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Pittsburgh Penguins VS Florida Panthers',
                'views' => 15000,
                'image_name'=> 'image08.png',
            ],
            // sports upcoming
            [
              'type' => 1,
              'timing' => 1,
              'group' => 2,
              'category_id'=> 1,
              'language_id'=> 1,
              'name' => 'Calgary Flames VS Dallas Stars',
              'views' => 15000,
              'image_name'=> 'image09.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 2,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Atlanta Braves VS Los Angeles Dodgers',
                'views' => 15000,
                'image_name'=> 'image10.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 2,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'New York Yankees VS Kansas City Royals',
                'views' => 15000,
                'image_name'=> 'image11.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 2,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Nascar Indianapolis 500',
                'views' => 15000,
                'image_name'=> 'image12.png',
            ],
            // sports live    
            [
              'type' => 1,
              'timing' => 2,
              'group' => 2,
              'category_id'=> 1,
              'language_id'=> 1,
              'name' => 'Sumo Nihon League',
              'views' => 15000,
              'image_name'=> 'image13.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 2,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Volkan VS Smith',
                'views' => 15000,
                'image_name'=> 'image14.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 2,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Oleinik VS Werdum',
                'views' => 15000,
                'image_name'=> 'image15.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 2,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Chicago Bulls VS Indiana Pacers',
                'views' => 15000,
                'image_name'=> 'image16.png',
            ],
            // events upcoming
            
            [
              'type' => 1,
              'timing' => 1,
              'group' => 3,
              'category_id'=> 1,
              'language_id'=> 1,
              'name' => 'Louisville Cardinals VS University of Kentucky',
              'views' => 15000,
              'image_name'=> 'image17.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 3,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Fortnite World Championship',
                'views' => 15000,
                'image_name'=> 'image18.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 3,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Kentucky Derby',
                'views' => 15000,
                'image_name'=> 'image19.png',
            ],
            [
                'type' => 1,
                'timing' => 1,
                'group' => 3,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Bowling World Championship',
                'views' => 15000,
                'image_name'=> 'image20.png',
            ],
            // events live
            [
              'type' => 1,
              'timing' => 2,
              'group' => 3,
              'category_id'=> 1,
              'language_id'=> 1,
              'name' => 'New York Knicks VS Houston Rockets',
              'views' => 15000,
              'image_name'=> 'image21.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 3,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Rainbow 6 Siege World Championship',
                'views' => 15000,
                'image_name'=> 'image22.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 3,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'League of Legends World Championship',
                'views' => 15000,
                'image_name'=> 'image23.png',
            ],
            [
                'type' => 1,
                'timing' => 2,
                'group' => 3,
                'category_id'=> 1,
                'language_id'=> 1,
                'name' => 'Monopoly Tournament Phoenix',
                'views' => 15000,
                'image_name'=> 'image24.png',
            ]
        ];

        \DB::table('events')->insert($events);

        // \App\Models\Event::create($events);

    }
}
         















