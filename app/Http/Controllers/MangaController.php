<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class MangaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Manga $manga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manga $manga)
    {
        //
    }
}
