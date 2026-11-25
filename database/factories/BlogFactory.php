<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'about_id' => About::factory(),
            'tanggal' => fake()->date(),
            'judul' => fake()->sentence(),
            'ringkasan' => fake()->paragraph(),
        ];
    }
}