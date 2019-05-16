<?php

namespace App\Http\Controllers;

use App\game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){ 
            $games = game::where('user_id', Auth::user()->id)->get();
        
            return view('games.index', ['games'=>$games]);
        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::check()){
            $game = game::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id
            ]);
            if($game){
                return redirect()->route('games.show', ['game'=> $game->id])
                ->with('success' , 'game created successfully');
            }
        }
        
            return back()->withInput()->with('errors', 'Error creating new game');
            // return back()->withInput()->wordwrap(str)ith('errors' , 'Error creating new game');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(game $game)
    {
        $game = game::find($game->id );
        

        return view('games.show', [ 'game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(game $game)
    {
        //
        $game = game::find($game->id );
         

        return view('games.edit', [ 'game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, game $game)
    {

        // save data 
        $gameUpdate = game::where('id', $game->id)
                                ->update([
                                    'name' => $request->input('name'),
                                    'description' => $request->input('description')
                                ]);

        if($gameUpdate){
            return redirect()->route('games.show',['game'=>$game->id])->with('succes', 'game updated succesfully');
        }
        //redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(game $game)
    {
        $findgame = game::find( $game->id);
        if($findgame->delete()){
            
            //redirect
            return redirect()->route('games.index')
            ->with('success' , 'game deleted successfully');
        }
        return back()->withInput()->with('errors' , 'game could not be deleted');
        
    }
}
