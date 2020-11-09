<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('registrar');
        
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
        //dd($request);
        $cliente = new Cliente();
        $cliente->contrato =$request->input('contrato');
        $cliente->abonado =$request->input('nombre');
        $cliente->propiedad =$request->input('propiedad');
        $cliente->sector =$request->input('sector');
        $cliente->servicio =$request->input('servicio');
        $cliente->estado = 1;
        $cliente->agencia = "FiberTV";
        $aux = $request->input('servicio');
        //dd($aux);
        if($aux == 1){
            $cliente->pago_mes = 50;
        }
        elseif($aux == 2){
            $cliente->pago_mes = 70;
        }
        elseif($aux == 3){
            $cliente->pago_mes = 90;
        }
        $cliente->deuda =0;
        
        $cliente->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        return view('editar',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);
        $editCliente = Cliente::findOrFail($request->cliente);
        $editCliente->abonado=$request->input('nombre');
        $editCliente->propiedad=$request->input('propiedad');
        $editCliente->sector=$request->input('sector');
        $editCliente->servicio=$request->input('servicio');
        $aux = $request->input('servicio');
        //dd($aux);
        if($aux == 1){
            $editCliente->pago_mes = 50;
        }
        elseif($aux == 2){
            $editCliente->pago_mes = 70;
        }
        elseif($aux == 3){
            $editCliente->pago_mes = 90;
        }
        $editCliente->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function deuda()
    {   

        $allclientes = Cliente::all();
        $allclientes->toArray();
        foreach($allclientes as $deudas){
            $pagomes[] = $deudas['pago_mes'];
        }
        //dd($pagomes);
        for( $i=0 ; $i<count($pagomes) ; $i++ ){
            $cliente = Cliente::all()->where('deuda','>=',($pagomes[$i]*2));
            
            
        }
        dd($cliente);
        //DB:select();
        
        //dd($allclientes[0]);
        //dd($deuda);
        return view('home',compact('clientes'));
    }
}
