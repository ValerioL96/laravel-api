<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::with( "type", "technologies")->paginate(9);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);

    }

    public function show(string $id){

        $project = Project::with( "type", "technologies")->findOrFail($id);

        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }

    public function search(Request $request){

        $data = $request->all();


        $projects = Project::where("name", "LIKE", "%" . $data["name"] . "%")->get();

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);

    }
}
