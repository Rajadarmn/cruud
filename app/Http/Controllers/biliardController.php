<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biliard;

class biliardController extends Controller
{
    public function home(){
        $main = biliard::all();
        return view('home',compact(['main']));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $main = biliard::create([
            'nama' => $request->input('nama'),
            'meja' => $request->input('meja'),
            'waktu' => $request->input('waktu'),
        ]);
        return redirect('/');
    }

    public function edit($id){
        $main = biliard::find($id);
        return view('update.edit',compact(['main']));
    }

    public function update($id, Request $request){
        $main = biliard::find($id);
        $main->update($request->all());
        return redirect('/');
    }
    
    public function destroy($id){
        $main = biliard::find($id);
        $main->delete();
        return redirect('/');
    }
}
