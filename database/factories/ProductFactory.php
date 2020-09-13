<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Factory to seed
            'category_id' => Category::inRandomOrder()->first()->id,
            'name'        => $this->faker->sentence(3),
            'price'       => $this->faker->numberBetween(999, 9999),
            'description' => $this->faker->paragraph(),
            'amount'     => $this->faker->numberBetween(5, 100),
        ];
    }
}
