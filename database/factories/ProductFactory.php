<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween($min=1500,$max=6000),
            'category' => $this->faker->sentence(),
            'gallery' => $this->faker->image('public/storage/images',640,480,null,false),
            'description' => '<p>'. implode('</p><p>', $this->faker->paragraphs(6)) .'</p>'
        ];
    }
}
//'gallery' => $this->faker->imageUrl('public/storage/images',640,480,null,false),
