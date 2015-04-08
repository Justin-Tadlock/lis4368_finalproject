<?php
    namespace App\Http\Controllers;

use App\Model\Game;

    class ProductsController extends Controller {
        
        /**
         * Constructor
         */
        public function __construct() {
            //$this->middleware('guest');
        }
        
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