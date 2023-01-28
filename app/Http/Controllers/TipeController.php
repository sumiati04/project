<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $a = Tipe::all();
        return view('tipe.index', ['tipe' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipe.create');
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
        $validated = $request->validate([
            'tipe_rumah' => 'required',
        ]);

        $tipe = new Tipe();
        $tipe->tipe_rumah = $request->tipe_rumah;
        $tipe->save();
        return redirect()->route('tipe.index')->with('succes', 
            'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tipe = Tipe::findOrFail($id);
        return view ('tipe.show', compact('tipe'));
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
        $tipe = Tipe::findOrFail($id);
        return view ('tipe.edit', compact('tipe'));
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
        $validated = $request->validate([
            'tipe_rumah' => 'required',
        ]);

        $tipe = Tipe::findOrFail($id);
        $tipe->tipe_rumah = $request->tipe_rumah;
        $tipe->save();
        return redirect()->route('tipe.index')->with('succes', 
            'Data berhasil diedit!');
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
        $tipe = Tipe::findOrFail($id);
        $tipe->delete();
        return redirect()->route('tipe.index')->with('succes', 
            'Data berhasil dihapus!');
    }
}
