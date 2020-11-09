<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    

    public function pagar($id){
        
        //dd("flugsk");
        $pago = Pago::all()->where('cliente_id',$id)->where('estado','=',1);
        
        $cliente= Cliente::find($id);
        return view ('pagar', compact('pago','cliente'));
    }
    public function pagado($idpago, $idcliente){
        $timestamp = date("Y-m-d H:i:s");
        DB::select("UPDATE pagos SET estado=0,updated_at='$timestamp' WHERE id=?",[$idpago]);

        $pago = Pago::all()->where('cliente_id',$idcliente)->where('estado','=',1);
        
        $cliente = Cliente::findOrFail($idcliente);
        
        return view('pagar',compact('pago','cliente'));
    }


    //desabilitar un cliente q deba mas de 2 meses
    public function testAutomatic(){
        $cl= Cliente::all();
        $cl->toArray();
        foreach($cl as $cls){
            $clss[]= $cls['pago_mes'];
        }
        //dd($clss);
        for($i=0; $i<count($clss); $i++){
            //dd($clss[$i]);
            DB::select("UPDATE clientes SET estado=0 WHERE deuda=?",[($clss[$i]*2)]);
            
        }
        
    }
    
    //para generar datos en la tabla pago cada q pasa el mes
    public function cobro(){
        $cliente = Cliente::all();
        $cliente->toArray();
        
        $mes = Carbon::now();
        $mes = $mes->format('m');
        //dd($cliente);
        $anio = Carbon::now();
        //dd($anio);
        $anio = $anio->format('Y');

        foreach($cliente as $cl){
            $cle[]=$cl['id'];
        }
        foreach($cliente as $cl){
            $pgmes[]=$cl['pago_mes'];
        }
        
            for($i=0 ; $i < count($cle); $i++){
                $cobro = new Pago();
                $cobro->mes = $mes;
                $cobro->anio = $anio;
                $cobro->estado = 1;
                $cobro->monto = $pgmes[$i];
                $cobro->cliente_id = $cle[$i];
                $cobro->save();
            }
        
        

    }
}
