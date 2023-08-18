<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Listing;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

           listing::factory(6)->create();
    
            Listing::create([
                'title' => 'Laravel Senior Developer',
                'tags' => 'Laravel, javascript',
                'company' => 'kayodecopany',
                'location' => 'Lagos Mile 12',
                'email' => 'email@gmail.com',
                'website' => 'https://www.kayode.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, maiores.',
            ]);
            Listing::create([
                'title' => 'Laravel Senior Developer',
                'tags' => 'Laravel, javascript',
                'company' => 'kayodecopany',
                'location' => 'Lagos Mile 12',
                'email' => 'email@gmail.com',
                'website' => 'https://www.kayode.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, maiores.',
            ]);
            Listing::create([
                'title' => 'Laravel Senior Developer',
                'tags' => 'Laravel, javascript',
                'company' => 'kayodecopany',
                'location' => 'Lagos Mile 12',
                'email' => 'email@gmail.com',
                'website' => 'https://www.kayode.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, maiores.',
            ]); 
        


    }
}
