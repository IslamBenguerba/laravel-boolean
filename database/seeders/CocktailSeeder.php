<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $cocktails = Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?s=')->json()["drinks"];
        // @dd($cocktails);
        foreach ($cocktails as $cocktail) {
            Cocktail::create([
                'idDrink'=>$cocktail['idDrink'],
                'strDrink'=>$cocktail['strDrink'],
                'strDrinkAlternate'=>$cocktail['strDrinkAlternate'],
                'strTags'=>$cocktail['strTags'],
                'strVideo'=>$cocktail['strVideo'],
                'strCategory'=>$cocktail['strCategory'],
                'strIBA'=>$cocktail['strIBA'],
                'strAlcoholic'=>$cocktail['strAlcoholic'],
                'strGlass'=>$cocktail['strGlass'],
                'strInstructions'=>$cocktail['strInstructions'],
                'strInstructionsES'=>$cocktail['strInstructionsES'],
                'strInstructionsDE'=>$cocktail['strInstructionsDE'],
                'strInstructionsFR'=>$cocktail['strInstructionsFR'],
                'strInstructionsIT'=>$cocktail['strInstructionsIT'],
                'strDrinkThumb'=>$cocktail['strDrinkThumb'],
                'strIngredient1'=> $cocktail['strIngredient1'],
                'strIngredient2'=> $cocktail['strIngredient2'],
                'strIngredient3'=> $cocktail['strIngredient3'],
                'strIngredient4'=> $cocktail['strIngredient4'],
                'strIngredient5'=> $cocktail['strIngredient5'],
                'strIngredient6'=> $cocktail['strIngredient6'],
                'strIngredient7'=> $cocktail['strIngredient7'],
                'strIngredient8'=> $cocktail['strIngredient8'],
                'strIngredient9'=> $cocktail['strIngredient9'],
                'strIngredient10'=> $cocktail['strIngredient10'],
                'strIngredient11'=> $cocktail['strIngredient11'],
                'strIngredient12'=> $cocktail['strIngredient12'],
                'strIngredient13'=> $cocktail['strIngredient13'],
                'strIngredient14'=> $cocktail['strIngredient14'],
                'strIngredient15'=>$cocktail['strIngredient15'],
                'strMeasure1'=>$cocktail['strMeasure1'],
                'strMeasure2'=>$cocktail['strMeasure2'],
                'strMeasure3'=>$cocktail['strMeasure3'],
                'strMeasure4'=>$cocktail['strMeasure4'],
                'strMeasure5'=>$cocktail['strMeasure5'],
                'strMeasure6'=>$cocktail['strMeasure6'],
                'strMeasure7'=>$cocktail['strMeasure7'],
                'strMeasure8'=>$cocktail['strMeasure8'],
                'strMeasure9'=>$cocktail['strMeasure9'],
                'strMeasure10'=>$cocktail['strMeasure10'],
                'strMeasure11'=>$cocktail['strMeasure11'],
                'strMeasure12'=>$cocktail['strMeasure12'],
                'strMeasure13'=>$cocktail['strMeasure13'],
                'strMeasure14'=>$cocktail['strMeasure14'],
                'strMeasure15'=>$cocktail['strMeasure15'],
                'strImageSource'=>$cocktail['strImageSource'],
                'strImageAttribution'=>$cocktail['strImageAttribution'],
                'strCreativeCommonsConfirmed'=>$cocktail['strCreativeCommonsConfirmed'],
                'dateModified'=>$cocktail['dateModified'],
            ]);
        }
        // foreach ($cocktails as $cocktail) {
        //     Cocktail::create([
        //         'idDrink'=> $cocktail->,
        //     ]);
        }
}
