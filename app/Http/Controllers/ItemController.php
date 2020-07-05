<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class ItemController extends Controller
{
    public function index()
    {
        $artikels = ArtikelModel::get_all();
        return view('hasil.buatartikel', compact('artikels'));
    }
    public function create()
    {
        return view('hasil.form');
    }
    public function store(Request $request)
    {       
        $data = $request->all();
        unset ($data["_token"]);
        ArtikelModel::savedata($data); 
        return redirect('/artikel');
    }
    public function show($id)
    {
        $artikels = ArtikelModel::find_by_artikel_id($id);
        return view('hasil.detailartikel', compact('artikels'));
    }
    public function edit($id)
    {
        $artikels = ArtikelModel::find_by_artikel_id($id);
        return view ('hasil.editartikel', compact('artikels'));
    }
    public function update($id, Request $request )
    {
        ArtikelModel::update_artikel($id, $request->all());
        return redirect('/artikel');
    }
    public function destroy($id)
    {
        ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
