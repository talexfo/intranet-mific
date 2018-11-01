<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directorio;

class PagesController extends Controller
{
    //
    
    public function inicio(){

        $lista = Directorio::select('directorio.*')
        ->orderby('nombre', 'asc')
        ->paginate(3);

        return view('directorio.index', compact('lista'));
    }
  
}
