<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('projects');

        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->fill($project);
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->save();
        }
    }
}
