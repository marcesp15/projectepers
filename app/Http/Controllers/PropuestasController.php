<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Propuestas;
use App\Http\Requests\StorePropuesta;
use App\Models\Instituto;

class PropuestasController extends Controller
{
    public function index () {

        $propuestas = Propuestas::orderBy('id', 'desc')->paginate(10);

        return view('propuestas.index', compact('propuestas'));

    }

    public function create () {

        return view('propuestas.create');

    }

    public function store (StorePropuesta $request) {

        $propuesta = Propuestas::create($request->all());
    
        return redirect()->route('propuestas.index', $propuesta->id);
    
    }
    public function show ($id) {

        $propuestas = Propuestas::find($id);

        $institutos = Instituto::find($id);

        return view('propuestas.show', compact('propuestas', 'institutos'));

    }

    public function edit (Propuestas $propuesta) {

        return view('propuestas.edit', compact('propuesta'));

    }

    public function update (StorePropuesta $request, Propuestas $propuesta) {

/*         $instituto->nombre = $request->nombre;
        $instituto->municipio = $request->municipio;
        $instituto->direccion = $request->direccion;
        $instituto->correo = $request->correo;
        $instituto->telefono = $request->telefono;

        $instituto->save(); */

        $propuesta->update($request->all());

        return redirect()->route('propuestas.index', $propuesta->id);
    }

    public function destroy($id) {

        $propuesta = new Propuestas();

        $propuesta = Propuestas::where('id', $id)
        ->update(['estado' => 'inactivo']);

        return redirect()->route('propuestas.index', compact('propuesta'));

    }
}
