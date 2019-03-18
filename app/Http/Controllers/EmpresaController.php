<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresasRequest;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {   
        
        $empresas = Empresa::search1($request->idEmpresaContraEmp)->orderByDesc('id')->paginate('8');

        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');   
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresas = new Empresa;

            $empresas->nit = $request->nit;
            $empresas->nombre = $request->nombre;
            $empresas->nombre_contacto = $request->nombre_contacto;
            $empresas->telefono_contacto = $request->telefono_contacto;
            $empresas->email_contacto = $request->email_contacto;
            $empresas->estado = $request->estado;
            $empresas->id_usuario = $request->id_usuario;
            $empresas->id_ciudad = $request->id_ciudad;
            $empresas->direccion = $request->direccion;
            $empresas->id_usuario = 1;

            $empresas->save();

            return redirect("/createEmp/$empresas->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $empresa = Empresa::find($id);

        
        //$clientes = Clientes::where('idEmpresaContraCli','=', $empresa->idEmpresaContraEmp)->get();
        
        return view('empresas.show', compact('empresa', 'clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('empresas.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $empresas = Empresa::find($id);

            $empresas->nit = $request->nit;
            $empresas->nombre = $request->nombre;
            $empresas->nombre_contacto = $request->nombre_contacto;
            $empresas->telefono_contacto = $request->telefono_contacto;
            $empresas->email_contacto = $request->email_contacto;
            $empresas->estado = $request->estado;
            $empresas->id_usuario = $request->id_usuario;
            $empresas->id_ciudad = $request->id_ciudad;
            $empresas->direccion = $request->direccion;

            $empresas->save();

            return redirect()->route('empresa.index')
            ->with('info','El empresa fue actualizado');
    }
    public function destroy(Empresa $empresa)
    {
        //
    }
}
