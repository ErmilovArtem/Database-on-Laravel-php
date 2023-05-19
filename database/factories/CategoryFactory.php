<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;
    public function definition()
    {
        $count = Category::query()->count();
        return [
            'title' => $this->faker->unique()->word(),
            'active' => $this->faker->boolean(),
            'slug' => $this->faker->slug(),
            'parent_id' => $count ? Category::query()->inRandomOrder()->first()->id : 0,
        ];
    }
}
