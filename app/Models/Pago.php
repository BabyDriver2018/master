<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pago extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'id';
    
    protected $fillable = ['id', 'mes', 'anio', 'monto', 'estado','cliente_id'];
    use HasFactory;

    

    public function clientes()
    {
        return $this->belongsTo('App\Models\Cliente','cliente_id');
    }
    

}
