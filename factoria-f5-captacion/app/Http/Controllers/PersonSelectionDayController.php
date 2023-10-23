<?php

namespace App\Http\Controllers;

use App\Models\Person_SelectionDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonSelectionDayController extends Controller
{
   

    public function getPeopleInSelectionDay($selectionDay)
{
    $people = Person_SelectionDay::where('id_selection_day', $selectionDay)->get();
    if ($people->count() > 0) {
        return response()->json(['data' => $people], 200);
    } else {
        return response()->json(['error' => 'No se encontraron personas en la jornada de selección'], 404);
    }
}

    public function addPersonToSelectionDay(Request $request, $selectionDay, $person)
    
    {

        $idSelectionDay = $selectionDay;
        $personId = $person;
        $response = Http::get("http://127.0.0.1:8002/api/person/{$personId}");
    
        if ($response->successful()) {
            $personData = $response->json();
    
            if (!empty($personData) && isset($personData['id'])) {
                $personId = $personData['id'];
    
                Person_SelectionDay::create([
                    'id_person' => $personId,
                    'id_selection_day' => $idSelectionDay,  
                    'comments' => $request->input('comments'),
                    'turn' => $request->input('turn'),
                    'school' => $request->input('school'),
                    'id_status' => $personData['id_status'] 
                ]);
    
                return response()->json(['message' => 'Persona agregada a la jornada de selección con éxito'], 200);
            } else {
                return response()->json(['error' => 'No se encontró la persona en la otra API'], 404);
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
