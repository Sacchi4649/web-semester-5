<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('index',['games'=>$games]);
    }    
    
    public function create(){
        return view('register-game');
    }

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'item_code' => 'required|min:6|max:10|unique:games',
                'title' => 'required|min:3|max:50',
                'store_platform' => 'required|in:steam,epicgames',
                'price' => 'required',
                'release_date' => 'required',
                'rating' => 'required|max:4',
            ]
            );
            Game::create($validateData);
            session()->flash('message',"{$validateData['title']} data added successfully!");
            return redirect()->route('games.index');
    }

    public function show($game){
        // $result = Game::find($game);
        $result = Game::findOrFail($game);
        return view('show-game',['game'=>$result]);
    }

    public function edit(Game $game){
        return view('edit',['game'=>$game]);
    }

    public function update(Request $request, Game $game){
        $validateData = $request->validate([
                'title' => 'required|min:3|max:50',
                'store_platform' => 'required|in:steam,epicgames',
                'price' => 'required',
                'release_date' => 'required',
                'rating' => 'required|max:4',
        ]);
        $game->update($validateData);
        return redirect()->route('games.index',['game'=>$game->id])
        ->with('message',"{$validateData['title']} data updated successfully!");
    }
    public function destroy(Game $game){
        $game->delete() ;
        return redirect()->route('games.index')->with('message',"$game->title data deleted successfully!");
    }
}
