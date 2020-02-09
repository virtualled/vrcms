<?php

namespace App\Http\Controllers;

use App\BookMethod;
use App\Game;
use App\PaymentMethod;
use App\Session;
use App\TypeGame;
use Illuminate\Http\Request;

class AdminSessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::all()->sortByDesc('date_booking');

        return view('admin.sessions.index', compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeGame = TypeGame::pluck('name', 'id')->all();
        $bookMethod = BookMethod::pluck('name', 'id')->all();
        $paymentMethod = PaymentMethod::pluck('name', 'id')->all();
        $game = Game::pluck('name', 'id')->all();
        return view('admin.sessions.create', compact('typeGame', 'bookMethod', 'paymentMethod', 'game'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::create($request->all());

        return redirect('admin/sessions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $session = Session::findOrFail($id);

        return view('admin.sessions.show', compact('session'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
