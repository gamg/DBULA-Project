<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'cliente';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula',
        'telefono',
    ];

    /**
     * Get the orders for the customer.
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'cedulacliente', 'cedula');
    }

    /**
     * Get the shipping addresses for the customer.
     */
    public function shippingAddresses()
    {
        return $this->hasMany('App\Models\ShippingAddress', 'cedulacliente', 'cedula');
    }

    /**
     * The order with transfer that belong to the customer.
     */
    public function orderWithTransfer()
    {
        return $this->belongsToMany('App\Models\Order', 'clientepedidotransferencia', 'cedulacliente', 'codigopedido')
            ->withPivot('codigo_confirmacion');
    }
}
