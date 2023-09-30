<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'United Kindom']);
        Country::create(['name' => 'Türkiye']);

        City::create(['country_id' => 1,'name' => 'London ']);
        City::create(['country_id' => 1,'name' => 'Liverpool ']);
        City::create(['country_id' => 1,'name' => 'Leicester ']);
        City::create(['country_id' => 2,'name' => 'Istanbul ']);
        City::create(['country_id' => 2,'name' => 'Trabzon ']);
        City::create(['country_id' => 2,'name' => 'Diyarbakır ']);

        Tag::create(['name' => 'Laravel','slug' =>'laravel']);
        Tag::create(['name' => 'Vue JS','slug' =>'vue-js']);   
        Tag::create(['name' => 'Livewire','slug' =>'livewire']);

    }
}
