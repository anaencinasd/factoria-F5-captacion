<?php

namespace App\Http\Controllers;

use App\Models\SelectionDay;
use Illuminate\Http\Request;
use App\Http\Requests\SelectionDayRequest;
use Illuminate\Http\JsonResponse;

class SelectionDayController extends Controller
{
    
    public function index():JsonResponse
    {
        $selectionDays = SelectionDay::all();
        return response()->json(['data'=>$selectionDays], 200);
     
    }

   
    public function store(SelectionDayRequest $request):JsonResponse
    {
        $selectionDay=SelectionDay::create($request->all());

        return response()->json([
            'success'=>true,
            'data'=>$selectionDay], 201);
        
    }

    public function show($id):JsonResponse
    {
        $selectionDay = SelectionDay::find($id);
        return response ()->json($selectionDay, 200);
    }

    
    public function update(SelectionDayRequest $request, $id):JsonResponse
    {
        $selectionDay = SelectionDay::find($id);
        $selectionDay->school=$request->school;
        $selectionDay->date=$request->date;
        $selectionDay->save();

        return response()->json([
            'success'=>true
        ], 200);
    }

    public function destroy($id):JsonResponse
    {
        SelectionDay::find($id)->delete();
        return response()->json([
            'success'=>true
        ], 200);
    }
}

