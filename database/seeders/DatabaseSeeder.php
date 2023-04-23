<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Jeu;
use App\Models\Tag;
use App\Models\User;
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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Categorie::factory(10)->create();
        Jeu::factory(10)->create();
        Jeu::factory()->create(['titre'=>'mario']);
        
        Tag::factory(50)->create();
        $jeux = Jeu::all();
        foreach($jeux as $jeu){
            $jeu->tags()->attach('1');
        }
    }
}
