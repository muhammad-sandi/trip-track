<?php

namespace App\Http\Controllers\Api;

use App\Models\Catatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CatatanResource;
use Illuminate\Support\Facades\Validator;


class CatatanApiController extends Controller
{
    public function index()
    {
        //get catatan
        $catatan = Catatan::latest()->get();

        //return collection of Catatan as a resource
        return new CatatanResource(true, 'List Data Catatan Perjalanan', $catatan);
    }

    //store
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'id_user'     => 'required',
            'tanggal'     => 'required',
            'jam'   => 'required',
            'lokasi'   => 'required',
            'suhu'   => 'required', 
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

       //create catatan
    $catatan = Catatan::create([
        'id_user'   => $request->id_user,
        'tanggal'   => $request->tanggal,
        'jam'   => $request->jam,
        'lokasi'   => $request->lokasi,
        'suhu'   => $request->suhu,
    ]);

        //return response
        return new CatatanResource(true, 'Data Catatan Perjalanan Berhasil Ditambahkan!', $catatan);
        return redirect(route('catatan'))->with('message', 'data berhasil terkirim');
    }

    //show
    public function show(Catatan $catatan)
    {
        //return single catatan as a resource
        return new CatatanResource(true, 'Data Catatan Perjalanan Ditemukan!', $catatan);
    }
    public function update(request $request, catatan $catatan){

        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'jam'   => 'required',
            'lokasi'   => 'required',
            'suhu'   => 'required', 
        ]);

        //check if validation fails
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

            //update post with new catatan
            $catatan->update([
                'tanggal'   => $request->tanggal,
                'jam'   => $request->jam,
                'lokasi'   => $request->lokasi,
                'suhu'   => $request->suhu,
            ]);
        
            //return response
       return new CatatanResource(true, 'Data catatan Berhasil Diubah!', $catatan);
}

        public function destroy(catatan $catatan)
        {
    
            //delete post
            $catatan->delete();
    
            //return response
            return new CatatanResource(true, 'Data catatan Berhasil Dihapus!', null);
        }
        
}
