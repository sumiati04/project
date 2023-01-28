<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
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
        $a = Promo::all();
        return view('promo.index', ['promo' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('promo.create');
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
            'promo' => 'required',
            'deskripsi_promo' => 'required',
        ]);

        $promo = new Promo();
        $promo->promo = $request->promo;
        $promo->deskripsi_promo = $request->deskripsi_promo;
        $promo->save();
        return redirect()->route('promo.index')->with(
            'succes',
            'Data berhasil dibuat!'
        );
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
        $promo = Promo::findOrFail($id);
        return view('promo.show', compact('promo'));
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
        $promo = Promo::findOrFail($id);
        return view('promo.edit', compact('promo'));
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
            'promo' => 'required',
            'deskripsi_promo' => 'required',
        ]);

        $promo =  Promo::findorFail($id);
        $promo->promo = $request->promo;
        $promo->deskripsi_promo = $request->deskripsi_promo;
        $promo->save();
        return redirect()->route('promo.index')->with(
            'succes',
            'Data berhasil dibuat!'
        );
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
        $promo = Promo::findOrFail($id);
        $promo->delete();
        return redirect()->route('promo.index')->with(
            'succes',
            'Data berhasil dihapus!'
        );
    }
}
