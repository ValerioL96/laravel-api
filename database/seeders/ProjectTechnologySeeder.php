<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectTechnology;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Project

        $projectTechnology = [
            [
                "project_id" => [2,1,7,12,16,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,46],
                "technology_id" => 1
            ],
            [
                "project_id" => [3,1,4,5,6,7,8,9,10,11,12],
                "technology_id" => 2
            ],
            [
                "project_id" => [2,3,1,4,5,6,7,8,11],
                "technology_id" => 3
            ],
            [
                "project_id" => [3,1,4,5,6,7,8,9,10,11,12,13,16,17,18,19,20,21,22],
                "technology_id" => 4
            ],
            [
                "project_id" => [2,1,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,48,49,50,51,52,53,54,55,56,57,58,59,60],
                "technology_id" => 5
            ],
            [
                "project_id" => [2,1,12,18,24,25,26,27,29,30,31,33,34,35,36,39,40,44,45,46,48,49,50,51,52,53,54,55,56,57,60],
                "technology_id" => 6
            ],
            [
                "project_id" => [2,1,23,24,25,26,27],
                "technology_id" => 7
            ],
            [
                "project_id" => [3,1,4,5,6,7,8,9,10,11,12,14,15],
                "technology_id" => 8
            ],
            [
                "project_id" => [3,1,4,5,6,7,8,9,10,12],
                "technology_id" => 9
            ],
        ];


 // Ciclo su ciascuna tecnologia e i relativi progetti
foreach ($projectTechnology as $data) {
    $technologyId = $data['technology_id'];
    $projectIds = $data['project_id'];

    // Associare la tecnologia ai progetti specificati
    foreach ($projectIds as $projectId) {
        $project = Project::find($projectId);
        if ($project) {
            $project->technologies()->attach($technologyId);
        }
    }
}
}
}
