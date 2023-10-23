<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\StatusRequirement;
use App\Http\Requests\StatusRequirementRequest;

class StatusRequirementController extends Controller
{
    public function index():JsonResponse
    {
        $statusRequirement = StatusRequirement::all();
        return response()->json(
            ['data'=>$statusRequirement], 200);
    }


    public function store(StatusRequirementRequest $request):JsonResponse
    {
        $statusRequirement=StatusRequirement::create($request->all());
        return response()->json([
            'data'=>$statusRequirement,
            'success'=>true
        ], 201);
    }

    
    public function show(string $id):JsonResponse
    {
        $statusRequirement = StatusRequirement::find($id);
        return response()->json($statusRequirement, 200);
    }

    
    public function update(StatusRequirementRequest $request, string $id):JsonResponse
    {
        $statusRequirement = StatusRequirement::find($id);
        $requirement->name=$request->name;
        $statusRequirement -> save();
        return response()->json([
            //'data'=>$statusRequirement,
            'success'=>true
        ], 200);

    }

    public function destroy(string $id):JsonResponse
    {
        StatusRequirement::find($id)->delete();

        return response()->json([
            'success'=>true
        ], 200);

    }
}
