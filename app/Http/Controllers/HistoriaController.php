<?php

namespace App\Http\Controllers;

use App\Historia;
use Illuminate\Http\Request;
use App\Http\Requests\HistoriaRequest;
use Illuminate\Support\Facades\File;



class HistoriaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historias = Historia::all();
        return view('historia.index')->with(['historias' => $historias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HistoriaRequest $request)
   {
       // $request->validated();
        $datos = $request->all();
        if($request->file('imagen')){
            $archivo = $request->file('imagen');
            $nombreArchivo = $archivo->getClientOriginalName();
            $archivo->move(public_path('img'), $nombreArchivo);
            $datos['imagen'] = 'img/' . $nombreArchivo;
        }
        $historia = Historia::create($datos);

        return redirect()->route('historias.index')
            ->withSuccess("La Historia Con El Titulo {$historia->Titulo} Se Ha Creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function show(Historia $historia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function edit(Historia $historia)
    {
        return view('historia.edit')->with(['historia'=>$historia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function update(HistoriaRequest $request, Historia $historia)
    {

        $datos = $request->all();

        if($request->file('imagen')){
            $archivo = $request->file('imagen');
            $nombreArchivo = $archivo->getClientOriginalName();
            $archivo->move(public_path('img'), $nombreArchivo);
            $datos['imagen'] = 'img/' . $nombreArchivo;
            File::delete($historia->imagen);
        }

        $historia->update($datos);

         return redirect()->route('historias.index')
            ->withSuccess("La Historia Con El Titulo {$historia->Titulo} Se Ha Actualizado");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historia $historia)
    {   
        File::delete($historia->imagen);
        $historia->delete();


        return redirect()->route('historias.index')
      ->withSuccess("La Historia Con El Titulo {$historia->Titulo} Se Ha Eliminado");
    }
}
