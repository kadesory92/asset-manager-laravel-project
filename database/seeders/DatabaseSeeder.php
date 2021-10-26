<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Asset;
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
        Category::factory(4)->create();

        User::factory(10)->create()->each(function ($user) {
            Asset::factory(2)->create([
                'user_id' => $user->id,
                'category_id' => rand(1, 4)
            ]);
        });
    }
}
