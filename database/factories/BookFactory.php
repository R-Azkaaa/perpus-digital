<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Rack;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Judul buku random
            'author' => $this->faker->name, // Nama penulis
            'publisher' => $this->faker->company, // Penerbit
            'year' => $this->faker->year, // Tahun terbit
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id ?? 1, 
            'rack_id' => \App\Models\Rack::inRandomOrder()->first()->id ?? 1,
            'stock' => $this->faker->numberBetween(1, 20), // stok buku
        ];
    }
}
