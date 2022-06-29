<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//cargar el modelo 
use App\Models\Cliente;


class ClienteController extends Controller
{
    //Para proteger a nuestras clases y metodos con el middelware
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
        $clientes = Cliente::All(); //Para cargar todos los registros
        return view('cliente.index')->with('clientes',$clientes);  //Carga la vista del cliente ubicada en View
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();

        $clientes->nom_cliente=$request->get('nom_cliente');
        $clientes->Appaterno=$request->get('Appaterno');
        $clientes->Apmaterno=$request->get('Apmaterno');
        $clientes->sexo=$request->get('sexo');
        $clientes->correo=$request->get('correo');
        $clientes->telefono=$request->get('telefono');

        $clientes->save();

        return redirect('/clientes');
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
        //Mostrar los datos que ya estan precargados en la base de datos y que nos traega un solo elemento por id
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
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
        $cliente = Cliente::find($id);

        $cliente->nom_cliente=$request->get('nom_cliente');
        $cliente->Appaterno=$request->get('Appaterno');
        $cliente->Apmaterno=$request->get('Apmaterno');
        $cliente->sexo=$request->get('sexo');
        $cliente->correo=$request->get('correo');
        $cliente->telefono=$request->get('telefono');

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }
}
