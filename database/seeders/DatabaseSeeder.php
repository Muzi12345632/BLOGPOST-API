<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\Role::factory( 1)->create(['name' => 'admin']);
        \App\Models\Role::factory( 1)->create(['name' => 'guest']);
        \App\Models\Role::factory( 1)->create(['name' => 'moderator']);

        \App\Models\User::factory(200)->create(['role_id' => \App\Models\Role::GUEST]);

        \App\Models\Category::factory(40)->create();

        \App\Models\Location::factory(20)->create();

        \App\Models\Posts::factory(200)->create();

        \App\Models\Review::factory(400)->create();

        \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => Hash::make('password'),
             'role_id' => \App\Models\Role::ADMIN
        ]);


        //TODO seed the following list items

        // posts
        // location
        // categories


        
    }
}
