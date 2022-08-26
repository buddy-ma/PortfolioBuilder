<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'profile_id' => Profile::factory(),
            'project_categories_id' => ProjectCategory::factory(),
            'image' => 'null',
            'details' => 'https://behance.net'
        ];
    }
}
