<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Model\Game;


class AddProductController extends Controller {

    /**
     * Constructor that initializes a Game object.
     * 
     * @param \App\Http\Controllers\Game $game
     */
    public function __construct(Game $game) {
        $this->game = $game;
        
        $this->middleware('auth');
    }
    
	public function getAddProduct() {
        return view('AddProduct');
    }
    
    public function postAddProduct(ProductRequest $request) {
        //Setting up the Game object to insert into the DB
        $this->game->setTitle     ($request->title);
        $this->game->setDeveloper ($request->developer);
        $this->game->setConsole   ($request->console);
        $this->game->setPrice     ($request->price);
        $this->game->setRating    ($request->rating);
        $this->game->setComments  ($request->comments);
        $this->game->save(); //Insert into DB
        
        //Send success message to the user.
        return redirect('/products')->with('data', 'Success! The product has been added!');
    }

}
