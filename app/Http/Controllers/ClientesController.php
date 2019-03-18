<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\ClientesRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $clientes = Clientes::search1($request->identificacion)->orderbydesc('id')->paginate('8');

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $porcentaje = 10;
        return view('clientes.create',compact('porcentaje'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Clientes;


            $clientes->identificacion = $request->identificacion;
            $clientes->nombre = $request->nombre;
            $clientes->apellido = $request->apellido;
            $clientes->tipo_id = $request->tipo_id;
            $clientes->salario = $request->salario;
            $clientes->ciudad = $request->ciudad;
            $clientes->direccion = $request->direccion;
            $clientes->email = $request->email;
            $clientes->telefono = $request->telefono;
            $clientes->estado = $request->estado;
            $clientes->id_usuario = $request->id_usuario;
            $clienets->id_eps = $request->id_eps;
            $clientes->id_arl = $request->id_arl;
            $clientes->id_cjc = $request->id_cjc;
            $cliente->id_afp = $request->id_afp;
            $clientes->tipo_cliente = $request->tipo_cliente;
            $clientes->fecha_ingreso = $request->fecha_ingreso;
            $clientes->fecha_nacimiento = $request->fecha_nacimiento;


            $clientes->save();

            return redirect()->route('clientes.index')
            ->with('info','El cliente fue creado');
    }



    public function storeEmp(ClientesRequest $request, $id)
    {
        $clientes = new Clientes;

            $clientes->nuip            = $request->nuip;    
            $clientes->nombreCli       = $request->nombreCli;
            $clientes->apellidoCli     = $request->apellidoCli;
            $clientes->estadoCli       = $request->estadoCli;
            $clientes->tipoIdCli       = $request->tipoIdCli;
            $clientes->direccionCli    = $request->direccionCli;
            $clientes->oficinaCli      = $request->oficinaCli;
            $clientes->ciudadCli       = $request->ciudadCli;
            $clientes->telefonoCli     = $request->telefonoCli;
            $clientes->emailCli        = $request->emailCli;
            $clientes->fechaNacCli     = $request->fechaNacCli;
            $clientes->salarioCli      = $request->salarioCli;
            $clientes->rangoCli        = $request->rangoCli;
            $clientes->EPScli          = $request->EPScli;
            $clientes->ARLcli          = $request->ARLcli;
            $clientes->AFPcli          = $request->AFPcli;
            $clientes->cajaCompCli     = $request->cajaCompCli;
            $clientes->beneficioCli    = $request->beneficioCli;
            $clientes->fechaIngCli     = $request->fechaIngCli;
            $clientes->tipoCli         = $request->tipoCli;
            $clientes->idEmpresaContraCli = $request->idEmpresaContraCli;
            $clientes->idNIT           = $request->idNIT;
            $clientes->nombreEmpCli    = $request->nombreEmpCli;
            $clientes->UPCadicCli      = $request->UPCadicCli;
            $clientes->estadoPago      = $request->estadoPago;

            $clientes->save();

            
            return redirect()->route('createEmp', $id )->with('info','El cliente fue creado, Puede seguir añadiendo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Clientes::find($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $porcentaje = 10;
        $cliente =Clientes::find($id);

        return view('clientes.edit', compact('cliente','porcentaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesRequest $request, $id)
    {
            $clientes = Clientes::find($id);

            $clientes->nuip            = $request->nuip;
            $clientes->nombreCli       = $request->nombreCli;
            $clientes->apellidoCli     = $request->apellidoCli;
            $clientes->estadoCli       = $request->estadoCli;
            $clientes->tipoIdCli       = $request->tipoIdCli;
            $clientes->direccionCli    = $request->direccionCli;
            $clientes->oficinaCli      = $request->oficinaCli;
            $clientes->ciudadCli       = $request->ciudadCli;
            $clientes->telefonoCli     = $request->telefonoCli;
            $clientes->emailCli        = $request->emailCli;
            $clientes->fechaNacCli     = $request->fechaNacCli;
            $clientes->salarioCli      = $request->salarioCli;
            $clientes->rangoCli        = $request->rangoCli;
            $clientes->EPScli          = $request->EPScli;
            $clientes->ARLcli          = $request->ARLcli;
            $clientes->AFPcli          = $request->AFPcli;
            $clientes->cajaCompCli     = $request->cajaCompCli;
            $clientes->beneficioCli    = $request->beneficioCli;
            $clientes->fechaIngCli     = $request->fechaIngCli;
            $clientes->tipoCli         = $request->tipoCli;
            $clientes->idEmpresaContraCli = $request->idEmpresaContraCli;
            $clientes->idNIT           = $request->idNIT;
            $clientes->nombreEmpCli    = $request->nombreEmpCli;
            $clientes->UPCadicCli      = $request->UPCadicCli;
            $clientes->estadoPago      = $request->estadoPago;

            $clientes->save();

            return redirect()->route('clientes.index')->with('info','El cliente fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}
