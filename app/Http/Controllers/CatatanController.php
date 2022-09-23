<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catatan;
use App\Models\User;
use Auth;

class CatatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // $user = User::find(Auth::user()->id);

        if (auth()->user()->role == 'admin') {
            $data = catatan::all();
            return view('catatan.viewcatatan', compact('data'));
        } else {
            $user = User::find(Auth::user()->id);
            $data = catatan::where('user_id', $user->id)->get();
            return view('catatan.viewcatatan',['user' => $user], compact('data'));
        }
        
    }

    // tambah perjalanan
    public function create(){
        $user = User::find(Auth::user()->id);
        return view('catatan.addcatatan',['user' => $user,]);;

        // $catatan = catatan::all();
        // return view('catatan.addcatatan');
    }
    public function store(Request $request){
        $user = Auth::user();
        catatan::create([
            'user_id' =>$user->id,
            'tanggal' =>$request->tanggal,
            'jam' =>$request->jam,
            'lokasi' =>$request->lokasi,
            'suhu' =>$request->suhu,
        ]);

        return redirect()->route('viewcatatan');
        // $this->validate($request, [
        //     'tanggal' => 'required',
        //     'jam' => 'required',
        //     'lokasi' => 'required',
        //     'suhu' => 'required'
        // ]);
        // catatan::create($request->all());
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
