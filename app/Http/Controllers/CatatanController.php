<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catatan;

class CatatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data = catatan::all();
        return view('catatan.viewcatatan', compact('data'));
    }

    // tambah perjalanan
    public function create(){
        $catatan = catatan::all();
        return view('catatan.addcatatan');
    }
    public function store(Request $request){
        $this->validate($request, [
            'tanggal' => 'required',
            'jam' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required'
        ]);
        catatan::create($request->all());
        return redirect()->route('viewcatatan');
    }

    // edit perjalanan
    public function edit($id){
        $data = catatan::find($id);
        return view('catatan.editcatatan', compact('data'));
    }

    public function update(Request $request, $id){
        $data = catatan::find($id);
        $data->update($request->all());
        return redirect()->route('viewcatatan');
    }

    // delete perjalanan
    public function destroy($id){
        $data= catatan::find($id);
        $data->delete();
        return redirect()->route('viewcatatan');
    }
}
