<?php

namespace App\Http\Controllers;

use App\Directorio;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;



class DirectorioController extends Controller
{

 function __construct(){
    $this->middleware('auth')->only('create');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $buscar = $request->buscar;
        $criterio = $request->criterio;

    //    $lista =  DB::table('directorio')->get();

    if ($buscar == ''){
        $lista = Directorio::select('directorio.*')
        ->orderby('nombre', 'asc')
        ->paginate(3);
    }else{
        $lista = Directorio::select('directorio.*')
        ->where($criterio, 'like', '%'. $buscar . '%')
        ->orderby('nombre', 'asc')
        ->paginate(3);
    }
           
                
            return view('directorio.index', compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directorio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //guardar
        // DB::table('directorio')->insert(
        //     [
        //         "nombre"=>$request->input('nombre'),
        //         "area"=>$request->input('area'),
        //         "extension"=>$request->input('extension'),
        //         "created_at" => Carbon::now(),
        //         "updated_at" => Carbon::now(),
        //     ]
        // );

        $directorio = new Directorio();
        $directorio->nombre = strtoupper($request->nombre);
        $directorio->email = strtoupper($request->email);
        $directorio->oficina = strtoupper($request->oficina);
        $directorio->extension = $request->extension;
        $directorio->save();



        //redireccionar
        $lista = Directorio::paginate(3);
                
            return view('directorio.index', compact('lista'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directorio = Directorio::findOrFail($id);
        return view('directorio.edit', compact('directorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $directorio = Directorio::findOrFail($id);

        $directorio->nombre = strtoupper($request->nombre);
        $directorio->email = strtoupper($request->email);
        $directorio->oficina = strtoupper($request->oficina);
        $directorio->extension = $request->extension;
        $directorio->save();



        //redireccionar
        $lista = Directorio::paginate(3);
                
             return view('directorio.index', compact('lista'));
            
    }


    public function desactivar($id){
        $directorio = Directorio::findOrFail($id);

        $directorio->condicion = 0;
        $directorio->save();

        //redireccionar
        $lista = Directorio::paginate(3);
                
            return view('directorio.index', compact('lista'));
    }
}
