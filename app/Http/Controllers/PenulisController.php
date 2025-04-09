<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;


class PenulisController extends Controller
{
    //
    //Menampilkan list penulis 
    function index()
    {
        $data['penuliss']= Penulis::all();
        return view('penulis.index',$data);
    }

    // Form input data penulis
    function create()
    {
        return view('penulis.create');
    }

    function store(Request $request){
        $penulis= new penulis();
        $penulis->nama= $request->nama;
        $penulis->email= $request->email;
        $penulis->nomor_hp= $request->nomor_hp;
        $penulis->save();
        return redirect('penulis');
    }


    // Form edit data penulis
    function edit($id)
    {
        $data['penulis']=Penulis::find($id);
        return view('penulis.edit',$data);
    }

    function update($id,request $request){
        $penulis= Penulis::find($id); 
        $penulis->nama= $request->nama;
        $penulis->email= $request->email;
        $penulis->nomor_hp= $request->nomor_hp;
        $penulis->update();
        return redirect('penulis');
    }


    function destroy($id){
        $book= Penulis::find($id);
        $book->delete();
        return redirect('penulis');
    }
}
