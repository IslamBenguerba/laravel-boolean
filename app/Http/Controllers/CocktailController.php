<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Cocktail;
class CocktailController extends Controller
{   
    
    
   
    //
    public function index()
    {
        // $stateQuery = $cocktail->get('https://www.thecocktaildb.com/api/json/v1/1/search.php?s=');
        // $states = $stateQuery->getBody();
        // $states = json_decode($states, true);
        // foreach ($states as $state) {
        //     \App\Models\Cocktail::create(['strDrink	' => $state['strDrink']]);
        // }ù
       

        $response = Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?s=');

        $data = $response->json();
         // Assicurati di avere il tuo modello Eloquent definito
        $cocktail = Cocktail::find($data['id']);
        @dd($cocktail);
        $esempio = new Cocktail;
        $esempio->colonna1 = $data['colonna1'];
        $esempio->colonna2 = $data['colonna2'];
        // ... altre colonne ...
        $esempio->save();
        return response()->json([$cocktail]);
    }
}
