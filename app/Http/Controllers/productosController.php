<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Storage;
use App\Models\Producto;
use App\Http\Requests\create_productos_request;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::all();

        return view('productos/index', compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('/productos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(create_productos_request $request)
    {
        
        //return view('/productos/insert');

        /*$producto = new Producto;
        $producto->nombre_producto = $request->nombre_producto;
        $producto->seccion = $request->seccion;
        $producto->pais_origen = $request->pais_origen;
        $producto->precio = $request->precio;
        $producto->fecha = $request->fecha;
        $producto->save();*/

        $entrada=$request->all();

        if($archivo=$request->file('imagen_producto')){

            $nombre=$archivo->getClientOriginalName();
            $archivo->move(storage_path('app').'/public/uploads/', $nombre);
            $entrada['imagen_producto'] = $nombre;

        }

        Producto::create($entrada);

        return redirect('/productos');

    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $producto = Producto::findOrFail($id);

        return view("/productos/show", compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);

        return view ("productos.edit", compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(create_productos_request $request, string $id)
    {

        $producto = Producto::findOrFail($id);

        $producto->update($request->all());
        
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto=Producto::findOrFail($id);

        $producto->delete();

        return redirect('/productos');
    }
}
