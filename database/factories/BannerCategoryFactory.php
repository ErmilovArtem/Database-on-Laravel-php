<?php

namespace Database\Factories;

use App\Models\Banner;
use App\Models\BannerCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerCategoryFactory extends Factory
{
    protected $model = BannerCategory::class;
    public function definition(): array
    {
        $countCategory = Category::query()->count();
        $countBanner = Banner::query()->count();
        return [
            'category_id' => $this->faker->numberBetween(1, $countCategory),
            'banner_id' => $this->faker->numberBetween(1, $countBanner)
        ];
    }
}
