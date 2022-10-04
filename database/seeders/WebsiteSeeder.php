<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Website::factory()
            ->count(100)
            ->create()
            ->each(function(Website $website) {
                Post::factory()
                    ->count(10)
                    ->create([
                        'website_id' => $website->id
                    ]);
            });
    }
}
