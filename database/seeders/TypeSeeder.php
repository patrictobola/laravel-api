<?php

namespace Database\Seeders;

use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = ['Front-end', 'Back-End', 'FullStack', 'Web-Designer', 'On-Going Project', 'Analyst'];
        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->label = $type;
            $new_type->color = $faker->hexColor();
            $new_type->save();
        }
    }
}
