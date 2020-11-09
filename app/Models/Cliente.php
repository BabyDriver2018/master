<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = ['id', 'contrato', 'abonado','propiedad', 'sector','estado','pagomes', 'servicio','agencia'];
    use HasFactory;

    
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago');
    }

    
}
