<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Categorias;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $productos = DB::table('productos')->get ();
        // $users=['users' => $users];
        // dd($users);
        // $productos=Productos::select('precioUnidad')->get();
        // $hola=max(array($productos));
        $hola=Productos::select('nombreProducto','precioUnidad')->where('precioUnidad','>','avg(precioUnidad)')->orderbyDesc('precioUnidad')->limit(10)->get();
        $hola2=Productos::select('idCategoria')->selectRaw('count(idproducto)')->groupBy('idCategoria')->get();  

        $hola3=Categorias::select('nombreCategoria','descripcion')->selectRaw('AVG(productos.precioUnidad) as promedio_de_preiocio_unidad')
        ->join('Productos','categorias.idCategoria','=','productos.idCategoria')->groupBy('categorias.idCategoria','nombreCategoria','descripcion')->orderBy('promedio_de_preiocio_unidad')->get();
          
        return view('productos.index',compact('hola','hola2','hola3'));                          
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
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
