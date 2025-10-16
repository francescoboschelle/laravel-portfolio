<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();

            $project->name = $faker->word();
            $project->client = $faker->name();
            $project->date = $faker->date();
            $project->summary = $faker->paragraph(10);

            $project->save();
        }
    }
}
