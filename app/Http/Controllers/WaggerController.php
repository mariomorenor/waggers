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
                $users = User::with('waggers.game_date')->paginate(10);
          
                return $users;
            }
      

            return view('waggers.show_players');
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
        //
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
        //
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
