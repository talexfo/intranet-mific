<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directorio;

class PagesController extends Controller
{
    //
    
    public function inicio(){


        if (auth()->guest()){
            $lista = Directorio::select('directorio.*')
            ->where('condicion', '=', 1)
            ->orderby('nombre', 'asc')
            ->paginate(3);
    
        }else{
            $lista = Directorio::select('directorio.*')
            
            ->orderby('nombre', 'asc')
            ->paginate(3);
    
        }
       
        return view('directorio.index', compact('lista'));
    }
  
}
