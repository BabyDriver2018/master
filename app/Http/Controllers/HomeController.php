<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = Cliente::all();
        $clientes->toArray();
        $cls=[];
        $clss=[];
        foreach($clientes as $cl){
            $cls[] = $cl['id'];
        }
        foreach($clientes as $cl){
            $clss[]=$cl;
        }
        
        for ($i=0 ; $i<count($cls) ; $i++){
            $cle[] = DB::select("SELECT cliente_id,SUM(monto) as monto FROM pagos WHERE cliente_id=? GROUP BY cliente_id",[ $cls[$i] ]);
        }
        //dd($cle);
        for($i=0; $i<count($cls);$i++){
            if($cle[$i]==null){
                unset($cle[$i]);
            }
        }
        //dd($cle);
        //dd($cle[3][0]);
        //dd(count($cls));
        for($i=0; $i<count($cle) ;$i++){

            //dd($cle);
            if($clss[$i]->id == $cle[$i][0]->cliente_id){
                
                $clss[$i]->deuda = $cle[$i][0]->monto;
                
            }
            
        }
        
        for($i=0; $i<count($clss);$i++){
            $clt= Cliente::find($clss[$i]->id);
            $clt->deuda = $clss[$i]->deuda ;
            $clt->save();
            
        }

        $clts= Cliente::all();
        //dd($cle);
        return view('home', compact('clts'));
    }
}
