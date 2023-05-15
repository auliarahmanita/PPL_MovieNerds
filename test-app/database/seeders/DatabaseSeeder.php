<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Tier_User;
use App\Models\User;
use App\Models\Tier;
use Database\Factories\Tier_UserFactory;
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
        Tier::create([
            'tier_name' => 'Bronze'
        ]);

        Tier::create([
            'tier_name' => 'Silver'
        ]);

        Tier::create([
            'tier_name' => 'Gold'
        ]);

        Tag::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        Tag::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);

        Tag::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment'
        ]);

        User::factory(5)->create();
        Article::factory(10)->create();
        Tier_User::factory(5)->create();
    }
}