<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Prodact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prodact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'title' => $product_name,
            'description' => $this->faker->text(500),
            'photo' => 'http://lorempixel.com/400/200/food/',
            'price' => $this->faker->numberBetween(10,500),
            'slug' => $slug,
            'category_id' => Category::get(['id'])->random()->id,

        ];
    }
}
