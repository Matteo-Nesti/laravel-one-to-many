<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder


{
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $project = new Project();
            $project->title = $faker->text(20);
            $project->slug = Str::slug($project->title, '-');
            $project->image = $faker->imageUrl(300, 300);
            $project->content = $faker->paragraph(10, true);
            $project->save();
        }
    }
}
