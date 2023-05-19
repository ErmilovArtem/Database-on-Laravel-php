<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    protected $model = Banner::class;
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
            'active_from' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'active_to' => $this->faker->dateTimeBetween('active_from', '+3 months'),
            'link' => $this->faker->url(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
