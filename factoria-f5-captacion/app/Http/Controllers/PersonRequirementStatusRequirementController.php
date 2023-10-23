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
    public function show($id_person, $id_requirement)
    {
        $data = Person_Requirement_StatusRequirement::where('id_person', $id_person)
            ->where('id_requirement', $id_requirement)
            ->first();
    
        if (!$data) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }
    
        return response()->json($data, 200);
    }

    
    // public function update(PersonRequirementStatusRequirementRequest $request, $id_person, $id_requirement )
    // {
    //     $data = Person_Requirement_StatusRequirement::where('id_person', $id_person)
    //     ->where('id_requirement', $id_requirement)
    //     ->first();

    //     // $data->id_person=$request->id_person;
    //     // $data->id_requirement=$request->id_requirement;
    //     $data->id_statusRequirement=$request->id_statusRequirement;
        
    //     $data ->save();

    //     return response()->json([
    //         'success'=>true,
    //         'data'=>$data
    //         ], 200);


    // }
    
    public function updateStatus(Request $request, $id_person, $id_requirement)
{
    
    $personResponse = Http::get('http://127.0.0.1:8002/api/person/' . $id_person);

    if (!$personResponse->successful()) {
        return response()->json([
            'success' => false,
            'message' => 'No se pudo obtener el id_person de la API externa',
        ], 500);
    }

    $personData = $personResponse->json();
    $id_person = $personData['id']; 

    
    $data = Person_Requirement_StatusRequirement::where('id_person', $id_person)
        ->where('id_requirement', $id_requirement)
        ->first();

    if (!$data) {
        return response()->json([
            'success' => false,
            'message' => 'Registro no encontrado',
        ], 404);
    }

    $data->id_statusRequirement = $request->input('id_statusRequirement');
    $data->save();

    return response()->json([
        'success' => true,
        'data' => $data,
    ], 200);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person_Requirement_StatusRequirement $Person_Requirement_StatusRequirement)
    {
        //
    }
}
