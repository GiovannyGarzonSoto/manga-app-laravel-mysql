<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        if (!$authors) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudieron listar los Autores'
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $authors
        ]);
    }

    public function store(Request $request)
    {
        $author = new Author;
        $author->name = $request->name;
        $author->save();
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo guardar el Autor'
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $author
        ]);
    }

    public function showOne(Author $author)
    {
        $author = Author::find($author->id);
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo listar el Autor'
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $author
        ]);
    }

    public function update(Request $request, Author $author)
    {
        $author->name = $request->name;
        $author->save();
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo actualizar el Autor'
            ]);
        }
        return response()->json([
            'message' => 'Autor actualizado correctamente',
            'data' => $author
        ]);
    }


    public function destroy(Author $author)
    {
        $author->delete();
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo eliminar el Autor'
            ]);
        }
        return response()->json([
            'message' => 'Autor eliminado correctament',
            'data' => $author
        ]);
    }
}
