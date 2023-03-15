<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborator;

class ColaboratorController extends Controller
{
    public function getColaborators()
    {
        return response()->json(Colaborator::all(), 200);
    }
    public function getColaboratorById($id)
    {
        $colaborator = Colaborator::find($id);
        if (is_null($colaborator)) {
            return response()->json(['message' => 'Colaborator not found'], 404);
        }
        return response()->json($colaborator, 200);
    }
    public function registerColaborator(Request $request)
    {
        $colaborator = Colaborator::create($request->all());
        return response($colaborator, 201);
    }

    public function updateColaborator(Request $request, $id)
    {
        $colaborator = Colaborator::find($id);
        if (is_null($colaborator)) {
            return response()->json(['message' => 'Colaborator not found'], 404);
        }
        $colaborator->update($request->all());
        return response($colaborator, 200);
    }

    public function deleteColaborator($id)
    {
        $colaborator = Colaborator::find($id);
        if (is_null($colaborator)) {
            return response()->json(['message' => 'Colaborator not found'], 404);
        }
        $colaborator->delete();
        return response()->json(null, 204);
    }
}
