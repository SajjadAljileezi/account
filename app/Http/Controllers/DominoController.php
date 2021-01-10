<?php

namespace App\Http\Controllers;

use App\Models\Domino;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DominoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $x = Domino::inRandomOrder()->limit(7)->chunk(7, function ($users) {
            foreach ($users as $user) {
                echo $user;
            }
        });

        return($x);
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
     * @param  \App\Models\Domino  $domino
     * @return \Illuminate\Http\Response
     */
    public function show(Domino $domino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domino  $domino
     * @return \Illuminate\Http\Response
     */
    public function edit(Domino $domino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domino  $domino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domino $domino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domino  $domino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domino $domino)
    {
        //
    }
}
