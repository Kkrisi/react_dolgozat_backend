<?php

namespace App\Http\Controllers;

use App\Models\szakdoga;
use Illuminate\Http\Request;


class SzakdogaController extends Controller
{
    public function index(){
        return szakdoga::all();
    }

    public function store(Request $request){
        $record = new szakdoga();
        $record -> fill($request->all());
        $record -> save();
    }

    public function show(string $id){
        return szakdoga::find($id);
    }

    public function update(Request $request, string $id){
        $record = szakdoga::find($id);
        $record -> fill($request);
        $record -> save();
    }

    public function destroy(string $id){
        szakdoga::find($id)->delete();
    }
}
