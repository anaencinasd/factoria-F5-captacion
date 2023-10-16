<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;
use App\Http\Requests\RequirementRequest;
use Illuminate\Http\JsonResponse;

class RequirementController extends Controller
{
    
    public function index():JsonResponse
    {
        $requirements = Requirement::all();
        return response()->json(['data'=>$requirements], 200);
    }

    
    
    
    public function store(RequirementRequest $request):JsonResponse
    {
        $requirement=Requirement::create($request->all());

        return response()->json([
            'success'=>true,
            'data'=>$requirement], 201);
    }

    
    public function show($id):JsonResponse
    {
        $requirement = Requirement::find($id);
        return response ()->json($requirement, 200);
    }

    
    public function update(RequirementRequest $request, $id):JsonResponse
    {
        $requirement = Requirement::find($id);
        $requirement->name=$request->name;
        $requirement->description=$request->description;
        $requirement ->save();

        return response()->json([
            'success'=>true
            ], 200);
        
    }

    
    public function destroy($id):JsonResponse
    {
        Requirement::find($id)->delete();
        return response()->json([
            'success'=>true
        ], 200);
    }
}
