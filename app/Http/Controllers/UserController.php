<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data = User::all();
        return view('user.viewuser', compact('data'));
    }

    // tambah user
    // public function create(){
    //     $user = user::all();
    //     return view('user.adduser');
    // }
    // public function store(Request $request){
    //     $this->validate($request, [
    //         'nik' => 'required',
    //         'nama_user' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);
    //     user::create($request->all(
    //         [
    //             'nik' => $request['nik'],
    //             'nama_user' => $request['nama_user'],
    //             'email' => $request['email'],
    //             // 'password' => $request['password'],
    //             'password' => Hash::make($request['password']),
    //         ]
    //     ));
    //     return redirect()->route('viewuser');
    // }

    // edit perjalanan
    public function edit($id){
        $data = user::find($id);
        return view('user.edituser', compact('data'));
    }

    public function update(Request $request, $id){
        $data = user::find($id);
        $data->update($request->all());
        return redirect()->route('viewuser');
    }

    // delete perjalanan
    public function destroy($id){
        $data= user::find($id);
        $data->delete();
        return redirect()->route('viewuser');
    }
}

