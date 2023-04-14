<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()//creado para introducir datos en la tabla Books
    {
        return [
            'user_id'=>rand(1, 10),
            'title'=> $this->faker->name(),
            'description'=>$this->faker->text(),
        ];
    }
}
