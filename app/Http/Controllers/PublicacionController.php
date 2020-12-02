<?php

namespace App\Http\Controllers;

use App\publicacion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    public function index()
    {
        return publicacion::all();
    }
    public function store(Request $request)
    {
        $publicacion = publicacion::create($request->all());

        return response()->json($publicacion, 201);
    }
    public function show(publicacion $id)
    {
        return $id;
    }
   public function update(Request $request, publicacion $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }
    public function delete(publicacion $id)
    {
        $id->delete();

        return $estado=publicacion::all();
        return response()->json(null, 204);
    }
}
