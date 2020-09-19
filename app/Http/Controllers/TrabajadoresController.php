<?php

namespace App\Http\Controllers;

use App\Trabajadores;
use App\general;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class TrabajadoresController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadore = Trabajadores::all();
     return view('trabajadores.trabajadores',['trabajadores'=>$trabajadore]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user  = DB::table('datosgenerales')->where('iduser',$id)->first();
        $dato =  DB::table('trabajadores')->where('id',$id)->first();
       if ($user) {
        return view('trabajadores.datotrabajador',['dn'=>$dato,'datos'=>$user]);
       }else{
        return view('trabajadores.rellenar',['dato'=>$dato] );
       }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajadores $trabajadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajadores $trabajadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajadores $trabajadores)
    {
        //
    }
}
