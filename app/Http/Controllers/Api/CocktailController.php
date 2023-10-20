<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function index(){
        //recupero i dati dalla tabella
        $cocktails = Cocktail::all();

        //ritorno il json con i dati
        return response()->json($cocktails);
    }
}
