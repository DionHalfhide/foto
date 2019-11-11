<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class PagesController extends Controller
{
    public function index()
    {
        $albums = Album::with('Photo')->get();
        return view('bezoeker.index')->with('albums', $albums);
    }

    public function show($id)
    {
        $albums = Album::with('Photo')->find($id);
        return view('bezoeker.show')->with('albums', $albums);
    }
}
