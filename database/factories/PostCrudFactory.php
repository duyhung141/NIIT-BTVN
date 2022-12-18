<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCrudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->name(),
            'content' => $this->faker->paragraph(),
            'keyword' => $this->faker->word(5,true),
            'user_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
