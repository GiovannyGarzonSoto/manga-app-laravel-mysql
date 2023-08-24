<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $image = Cloudinary::upload($request->file('image'));
        $poster = new Poster;
        $poster->image =  $image->getSecurePath();
        $poster->publicId = $image->getPublicId();
        $poster->save();
        if (!$poster) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo guardar el Poster'
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $poster
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Poster $poster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poster $poster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poster $poster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poster $poster)
    {
        //
    }
}
