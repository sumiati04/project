<?php

namespace App\Http\Controllers;

use App\Models\Perumahan;
use App\Models\Tipe;
use Illuminate\Http\Request;

class PerumahanController extends Controller
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
        $a = Perumahan::with('tipe')->get();
        return view('perumahan.index', ['perumahan' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $tipe = Tipe::all();
        return view('perumahan.create', ['tipe' => $tipe]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perumahan = new Perumahan();
        $perumahan->luas_rumah = $request->luas_rumah;
        $perumahan->fasilitas_rumah = $request->fasilitas_rumah;
        $perumahan->harga = $request->harga;
        $perumahan->id_tipe = $request->id_tipe;
        if ($request->hasfile('foto_rumah')){
            $image = $request->file('foto_rumah');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image -> move('image/fotorumah', $name);
            $perumahan->foto_rumah = $name;
        }
        $perumahan->save();
        return redirect()->route('perumahan.index')->with(
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
        $perumahan = Perumahan::findOrFail($id);
        return view('perumahan.show', compact('perumahan'));
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
        $perumahan = Perumahan::findOrFail($id);
        $tipe = Tipe::all();

        return view('perumahan.edit', compact('perumahan', 'tipe'));
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
        $validated = $request->validate([
            'luas_rumah' => 'required',
            'fasilitas_rumah' => 'required',
            'harga' => 'required',
            'id_tipe' => 'required',
            'foto_rumah' => 'image|max:2048',
        ]);

        $perumahan = Perumahan::findOrFail($id);

        $perumahan->luas_rumah = $request->luas_rumah;
        $perumahan->fasilitas_rumah = $request->fasilitas_rumah;
        $perumahan->harga = $request->harga;
        $perumahan->id_tipe = $request->id_tipe;
        if ($request->hasfile('foto_rumah')){
            $image = $request->file('foto_rumah');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image -> move('image/fotorumah', $name);
            $perumahan->foto_rumah = $name;
        }
        $perumahan->save();
        return redirect()->route('perumahan.index')->with(
            'succes',
            'Data berhasil diedit!'
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
        $perumahan = Perumahan::findOrFail($id);
        $foto = $perumahan->foto_rumah;
        // dd($foto);

        if (!Perumahan::destroy($id)){
            return redirect()->back;
        }
        if ($foto){
            $perumahan->deleteImage();
        }
        return redirect()->route('perumahan.index')->with(
            'succes',
            'Data berhasil dihapus!'
        );
    }
}
