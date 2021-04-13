<?php

namespace App\Http\Controllers;

use App\Models\Instituto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInstituto;

class InstitutosController extends Controller
{
    public function index () {

        $institutos = Instituto::orderBy('id', 'desc')->paginate(10);

        return view('institutos.index', compact('institutos'));

    }

    public function create () {

        return view('institutos.create');

    }

    public function store (StoreInstituto $request) {

/*         $instituto = new Instituto();

        $instituto->nombre = $request->nombre;
        $instituto->municipio = $request->municipio;
        $instituto->direccion = $request->direccion;
        $instituto->correo = $request->correo;
        $instituto->telefono = $request->telefono;

        $instituto->save(); */

        $instituto = Instituto::create($request->all());

        return redirect()->route('institutos.index', $instituto->id);

    }

    public function show ($id) {

        $instituto = Instituto::find($id);

        return view('institutos.show', compact('instituto'));

    }

    public function edit (Instituto $instituto) {

        return view('institutos.edit', compact('instituto'));

    }

    public function update (StoreInstituto $request, Instituto $instituto) {

/*         $instituto->nombre = $request->nombre;
        $instituto->municipio = $request->municipio;
        $instituto->direccion = $request->direccion;
        $instituto->correo = $request->correo;
        $instituto->telefono = $request->telefono;

        $instituto->save(); */

        $instituto->update($request->all());

        return redirect()->route('institutos.index', $instituto->id);
    }

    public function destroy($id) {

        $instituto = new Instituto();

        $instituto = Instituto::where('id', $id)
        ->update(['estado' => 'inactivo']);

        return redirect()->route('institutos.index', compact('instituto'));

    }
}
