<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::with("user", "type", "technologies")->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);

    }

    public function show(string $id){

        $project = Project::with("user", "type", "technologies")->findOrFail($id);

        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }
}
