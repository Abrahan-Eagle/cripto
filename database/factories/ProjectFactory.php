<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->text(150),
            'content' => $this->faker->paragraph(100),
            'img' => $this->faker->randomElement(['project1.jpg' , 'project2.jpg' , 'project3.jpg']),
            'url_video' => $this->faker->url,

        ];
    }
}
