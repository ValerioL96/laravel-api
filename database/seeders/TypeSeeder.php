<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                "id"=>"1",
                "name" => "Front-End",
                "color" => "#00BFFF", // DeepSkyBlue
            ],
            [
                "id"=>"2",
                "name" => "Back-End",
                "color" => "#FF6347", // Tomato
            ],
            [
                "id"=>"3",
                "name"=> "Full-Stack",
                "color" => "#2E8B57", // SeaGreen
            ]
    ];


    foreach ($types as $type) {
        $newType = new Type();
        $newType->name = $type["name"];
        $newType->color = $type["color"];
        $newType->save();
    }
    }
}
