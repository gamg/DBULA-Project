<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'pedido';
    public $timestamps = false;
    protected $primaryKey = 'codigo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo',
        'estado',
        'fecha',
        'cedulacliente',
        'idtipoiva',
        'total',
    ];

    /**
     * Get the customer that owns the order.
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'cedulacliente', 'cedula');
    }

    /**
     * Get the IVA type that owns the order.
     */
    public function ivaType()
    {
        return $this->belongsTo('App\Models\IvaType', 'idtipoiva', 'id');
    }

    /**
     * The plates that belong to the order.
     */
    public function plates()
    {
        return $this->belongsToMany('App\Models\Plate', 'pedidoplato', 'codigopedido', 'idplato')
            ->withPivot('precio_unitario', 'cantidad');
    }

    /**
     * The drinks that belong to the order.
     */
    public function drinks()
    {
        return $this->belongsToMany('App\Models\Drink', 'bebidapedido', 'codigopedido', 'idbebida')
            ->withPivot('precio_unitario', 'cantidad');
    }

    /**
     * The additionals that belong to the order.
     */
    public function additionals()
    {
        return $this->belongsToMany('App\Models\Additional', 'extrapedido', 'codigopedido', 'idextra')
            ->withPivot('precio_unitario', 'cantidad');
    }

    /**
     * The customer transfer that belong to the order.
     */
    public function customerTransfer()
    {
        return $this->belongsToMany('App\Models\Customer', 'clientepedidotransferencia', 'codigopedido', 'cedulacliente')
            ->withPivot('codigo_confirmacion');
    }

    /**
     * The orders that belong to the employee.
     */
    public function employees()
    {
        return $this->belongsToMany('App\Models\Employee', 'empleadopedido', 'codigopedido', 'cedulaempleado');
    }

    public function getStatusColor()
    {
        $status = 'warning';
        switch ($this->estado) {
            case 'esperando':
                $status = 'warning';
                break;
            case 'procesando':
                $status = 'warning';
                break;
            case 'enviado':
                $status = 'info';
                break;
            case 'entregado':
                $status = 'success';
                break;
            case 'cancelado':
                $status = 'danger';
                break;
        }
        return $status;
    }

}
