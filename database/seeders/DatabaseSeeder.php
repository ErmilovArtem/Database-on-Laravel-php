<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Banner;
use App\Models\BannerCategory;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //DB::table('categories')->truncate();
        //DB::table('banners')->truncate();
        //DB::table('banner_category')->truncate();
        Banner::factory(10)->create();
        Category::factory(10)->create();
        BannerCategory::factory(10)->create();
    }
}
