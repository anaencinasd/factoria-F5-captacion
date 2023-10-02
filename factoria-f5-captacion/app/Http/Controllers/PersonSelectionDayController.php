<?php

namespace App\Http\Controllers;

use App\Models\Person_SelectionDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonSelectionDayController extends Controller
{
    public function getPersonInSelectionDay($id)
    {
        $response = Http::get('http://127.0.0.1:8002/api/person/');

        if($response ->successfull()){
            $people = $response->json();
        }else{
            return response ()->json(['Error al obtener las personas participantes'], 500);
        }
    }

    public function addPersonToSelectionDay()
    {
        
        $response = Http::get('http://127.0.0.1:8002/api/person/1');
    
    
        if ($response->successful()) {
            $personData = $response->json();
    
            if (!empty($personData) && isset($personData['id'])) {
                $personId = $personData['id'];
    
                
                Person_SelectionDay::create([
                    'id_person' => $personId,
                    'id_selection_day' => 1, 
                    'comments' => '',
                    'turn' => '',
                    'school' => '',
                    'decission' => '', 
                ]);
    
                return response()->json(['message' => 'Persona agregada a la jornada de selección con éxito'], 200);
            } else {
                return response()->json(['error' => 'No se encontró la persona con id=1 en la otra API'], 404);
            }
        } else {
            return response()->json(['error' => 'Error al obtener la persona desde la otra API'], 500);
        }
    }







    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person_SelectionDay $person_SelectionDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person_SelectionDay $person_SelectionDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person_SelectionDay $person_SelectionDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person_SelectionDay $person_SelectionDay)
    {
        //
    }
}
