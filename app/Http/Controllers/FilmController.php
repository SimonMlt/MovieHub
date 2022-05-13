<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index() {
        $films = Film::paginate(15);
        return view('home', compact('films'));
    }
}
