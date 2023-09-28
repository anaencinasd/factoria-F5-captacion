<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusRequirement;
use App\Http\Requests\StatusRequirementRequest;

class StatusRequirementController extends Controller
{
    public function index()
    {
        $statusRequirement = StatusRequirement::all();
        return response()->json(
            ['data'=>$statusRequirement], 200);
    }


    public function store(StatusRequirementRequest $request)
    {
        $statusRequirement=StatusRequirement::create($request->all);
        return response()->json([
            'data'=>$statusRequirement,
            'success'=>true
        ], 201);
    }

    
    public function show(string $id)
    {
<<<<<<< HEAD
        $statusRequirement = StatusRequirement::find($id);
=======
        $statusRequirement = StatusRequirement::fin($id);
>>>>>>> f48ae6b7f37939f49fa14c594aaf2df1299071d7
        return response()->json($statusRequirement, 200);
    }

    
    public function update(StatusRequirementRequest $request, string $id)
    {
        $statusRequirement = StatusRequirement::find($id);
        $statusRequirement->name = $request->name;
        $statusRequirement -> save();

        return response()->json([
            'data'=>$statusRequirement,
            'success'=>true
        ], 200);

    }

    public function destroy(string $id)
    {
        StatusRequirement::find($id)->delete();

        return response()->json([
            'success'=>true
        ], 200);

    }
}
