<?php

namespace App\Http\Controllers;

use App\Models\Person_SelectionDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonSelectionDayController extends Controller
{
    public function getPersonsInSelectionDay($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/person/');

        if($response ->successfull()){
            $people = $response->json();
        }else{
            return response ()->json(['Error al obtener las personas participantes'], 500);
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
