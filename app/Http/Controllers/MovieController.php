<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // ASSEGNO UNA VARIABILE AL DB CON ::ALL() SELEZIONO TUTTE LE TABELLE
        $movies = Movie::all();
        // RITORNO CON LA FUNZIONE VIEW GLI ELEMENTI CHE BISOGNO VISUALIIZARE
        return view("layout.MovieController", compact("movies"));
    }
}
