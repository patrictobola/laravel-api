<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tech_ids = Technology::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {

            $project = new Project;
            $project->title = $faker->words(3, true);
            $project->type_id = rand(1, 6);
            $project->description = $faker->text();
            $project->date = $faker->date();
            $project->thumb = $faker->imageUrl(200, 200);
            $project->save();

            // Randomizzo dei dati nella relazione molti a molti
            $project_technologies = [];
            foreach ($tech_ids as $tech_id) {
                if (rand(0, 1))  $project_technologies[] = $tech_id;
            }

            $project->technologies()->attach($project_technologies);
        }
    }
}
