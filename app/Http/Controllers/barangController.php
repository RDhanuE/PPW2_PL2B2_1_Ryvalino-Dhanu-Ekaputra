<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function show(){
        $table = barang::all();
        return view('barang.barang', compact('table'));
    }
}
