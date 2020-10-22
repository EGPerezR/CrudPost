<?php

namespace App\Http\Controllers;

use App\comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function index()
    {
        return comentarios::all();
    }
    public function store(Request $request)
    {
        $article = comentarios::create($request->all());

        return response()->json($article, 201);
    }
    public function show(comentarios $id)
    {
        return $id;
    }
   public function update(Request $request, comentarios $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }
    public function delete(comentarios $id)
    {
        $id->delete();

        return $estado=comentarios::all();
        return response()->json(null, 204);
    }
}
