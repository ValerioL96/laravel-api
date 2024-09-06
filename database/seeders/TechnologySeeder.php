<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologiesData = [
            [
                'id' => 1,
                'name' => 'JavaScript',
                'color' => '#FF5733'
            ],
            [
                'id' => 2,
                'name' => 'Laravel',
                'color' => '#FF0000'
            ],
            [
                'id' => 3,
                'name' => 'Bootstrap',
                'color' => '#563D7C'
            ],
            [
                'id' => 4,
                'name' => 'PHP',
                'color' => '#8892BF'
            ],
            [
                'id' => 5,
                'name' => 'HTML',
                'color' => '#FF4500'
            ],
            [
                'id' => 6,
                'name' => 'CSS',
                'color' => '#264DE4'
            ],
            [
                'id' => 7,
                'name' => 'Vue',
                'color' => '#42B883'
            ],
            [
                'id' => 8,
                'name' => 'MySQL',
                'color' => '#F29111'
            ],
            [
                'id' => 9,
                'name' => 'Blade',
                'color' => '#774DF4'
            ],
        ];



        foreach ($technologiesData as $technologyData) {
            Technology::create($technologyData);
        }
    }
}
