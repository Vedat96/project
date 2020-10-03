<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $games = Game::all()->where('name', 'like', '%',$search, '%');
        return view('search', [ 'games' => $games]); 
    }

    public function index(Game $games)
    {
            $games = Game::all();


            // return view()->first(['search', 'games.index'], ['games'=>$games]);

            return view('games.index', ['games'=>$games]);
        
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            if(Auth::user()->role_id == 1){
        
                return view('games.create');
            }
            return view('auth.login');
        }
        return view('auth.login');

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
            $game = Game::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id,
                'genre' => $request->input('genre'),
                'developer' => $request->input('developer'),
                'os' => $request->input('os'),
                'date' => $request->input('date')

            ]);
            if($game){
                return redirect()->route('games.show', ['game'=> $game->id])
                ->with('success' , 'Game created successfully');
            }
        }
        
            return back()->withInput()->with('errors', 'Error creating new game');
            // return back()->withInput()->wordwrap(str)ith('errors' , 'Error creating new game');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        $game = Game::find($game->id );

        $comments = $game->comments;

        $comments = ($comments) ? $comments : [];


        return view('games.show')
            ->with('game', $game)
            ->with('comments', $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
        $game = Game::find($game->id );

        if(Auth::check()){
            if(Auth::user()->role_id == 1){
        
                return view('games.edit', [ 'game' => $game]);
            }
            return view('auth.login');
        }
        return view('auth.login');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {

        // save data 
        if(Auth::check()){
            $gameUpdate = Game::where('id', $game->id)
                                    ->update([
                                        'name' => $request->input('name'),
                                        'description' => $request->input('description'),
                                        'genre' => $request->input('genre'),
                                        'developer' => $request->input('developer'),
                                        'os' => $request->input('os'),
                                        'date' => $request->input('date')
                                    ]);

            if($gameUpdate){
                return redirect()->route('games.show',['game'=>$game->id])->with('succes', 'Game updated succesfully');
            }
            //redirect
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $findGame = Game::find( $game->id);
        if($findGame->delete()){
            
            //redirect
            return redirect()->route('games.index')
            ->with('success' , 'Game deleted successfully');
        }
        return back()->withInput()->with('errors' , 'Game could not be deleted');
        
    }
}
