<?php

namespace Database\Seeders;

use App\Models\Technology;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ['PHP', 'Laravel', 'JS', 'HTML', 'VueJS', 'MySQL', 'CSS'];
        foreach ($technologies as $technology) {
            $project = new Technology();
            $project->label = $technology;
            $project->color = $faker->hexColor();
            $project->save();
        }
    }
}
