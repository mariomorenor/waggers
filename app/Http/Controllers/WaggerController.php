<?php

namespace App\Http\Controllers;

use App\User;
use App\Wagger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaggerController extends Controller
{
        public function __construct( ) {
            $this->middleware('auth');
        }

        public function list_wagger_users(Request $request)
        {   
            if ($request->ajax()) {
                $users = User::paginate(10);
                return $users;
            }
            return view('waggers.show_players');
        }

        public function list_waggers(User $user, Request $request)
        {   
            
            if ($request->ajax()) {
                
                return Wagger::where('winner_user_id',$user->id)
                                ->orWhere('loser_user_id',$user->id)
                                ->with(['winner','loser','game_date.local_user','game_date.visitor_user'])
                                ->orderBy('created_at','desc')
                                ->paginate(5);
            }
        }


























    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('waggers.create_game_date');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wagger  $wagger
     * @return \Illuminate\Http\Response
     */
    public function show(Wagger $wagger)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wagger  $wagger
     * @return \Illuminate\Http\Response
     */
    public function edit(Wagger $wagger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wagger  $wagger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wagger $wagger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wagger  $wagger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wagger $wagger)
    {
        //
    }



}
