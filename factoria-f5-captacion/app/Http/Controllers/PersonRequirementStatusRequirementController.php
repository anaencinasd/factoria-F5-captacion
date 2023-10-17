<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequirementStatusRequirementRequest;
use App\Models\Person_Requirement_StatusRequirement;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class PersonRequirementStatusRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = Person_Requirement_StatusRequirement::all();
       return response()->json([
        'data'=>$data
       ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(PersonRequirementStatusRequirementRequest $request): JsonResponse

    {
        $data = $request->validated();

    
    $personResponse = Http::get('http://127.0.0.1:8002/api/person/' . $data['id_person']);

    if ($personResponse->successful()) {
        $personData = $personResponse->json();

        
        $personRequirementStatus = Person_Requirement_StatusRequirement::create([
            'id_person' => $personData['id'], 
            'id_requirement' => $data['id_requirement'],
            'id_statusRequirement' => $data['id_statusRequirement'],
        ]);

        return response()->json([
            'message' => 'Registro creado correctamente',
            'success' => true,
            'data' => $personRequirementStatus
        ], 201);
    } else {
        return response()->json([
            'message' => 'Error al obtener los datos de la persona',
            'success' => false,
        ], 500); 
    }
    }


    /**
     * Display the specified resource.
     */
    public function show(Person_Requirement_StatusRequirement $Person_Requirement_StatusRequirement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person_Requirement_StatusRequirement $Person_Requirement_StatusRequirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person_Requirement_StatusRequirement $Person_Requirement_StatusRequirement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person_Requirement_StatusRequirement $Person_Requirement_StatusRequirement)
    {
        //
    }
}
