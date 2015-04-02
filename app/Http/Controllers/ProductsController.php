<?php
    namespace App\Http\Controllers;
    
    use App\Model\Game;

    class ProductsController extends Controller {
        /**
        * Grab the list of games from the db and load the products view content.
        *
        * @return view
        */
       public function index()
       {
           //Submit the array of Game objects to the view as $gameList variable.
           return view('products', ['gameList' => Game::all()]);
       }
    }