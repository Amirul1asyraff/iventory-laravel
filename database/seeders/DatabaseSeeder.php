<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Type;
use App\Models\User;
use App\Models\Color;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::create([
            'name'=> 'amirul asyraff',
            'email'=> 'amirul@gmail.com',
            'password'=> bcrypt('password'),
        ]);

        Type::create([
            'name' => 'Electronics',
        ]);

        Color::create([
            'name'=> 'Red',
        ]);

        Item::create([
            'user_id'=> User::where('name','amirul asyraff')->first()->id,
            'uuid'=> Str::uuid(),
            'name'=> 'Laptop',
            'type_id'=> Type::where('name','Electronics')->first()->id,
            'color_id'=> Color::where('name','Red')->first()->id,
            'quantity'=> rand(1,10),
        ]);

    }
}
