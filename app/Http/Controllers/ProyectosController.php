<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
   
    public function index()
    {
        $proyecto = DB::table('proyectos')->get();
        return view('proyecto.proyecto',['proyecto'=> $proyecto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:70',
            'descripcion' => 'required',
        ]);
        proyecto::create($request->all());
        return redirect()->route('proyecto.create')

            ->with('success','Post created successfully.');
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Pruebas $pruebas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('producto.proyecto', compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                'nombre' => 'required|max:255',
                'descripcion' => 'required',
            ]);
        $proyecto = proyecto::find($id);
        $proyecto->update($request->all());
        return redirect()->route('proyecto.proyecto')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proyecto = proyecto::find($id);
        $proyecto->delete();
        return redirect()->route('proyecto.proyecto')
            ->with('success', 'Post deleted successfully.');
    }
}