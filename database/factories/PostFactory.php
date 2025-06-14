<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title = $this->faker-> sentence(5);

        return [

            'user_id' => rand(1,20),
            'category_id' => rand(1,20),
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->text(200),
            'content' => $this->faker->text(500),
            'img' => $this->faker->imageUrl($width = 1200, $height = 400),
            'statusx' => $this->faker->randomElement(['DRAFT', 'PUBLISHED']),
            'level' => $this->faker->randomElement(['blog', 'project', 'event']),


        ];


    }
}
