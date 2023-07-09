<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Show extends Controller
{
    public function viewBarang(){
        return redirect()->route('show-barang');
    }
}
