<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\SelectionDay;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\SelectionDayRequest;

class NextSelectionDayController extends Controller
{
    public function getNextSelectionDay(): JsonResponse
    {
        $nextSelectionDay = SelectionDay::where('date', '>', now())
                            ->orderBy('date', 'asc')
                            ->first();

        return response()->json(['data' => $nextSelectionDay], 200);
    }
}
