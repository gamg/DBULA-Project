<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $table = 'direccion_envio';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedulacliente',
        'direccion',
    ];

    /**
     * Get the customer that owns the shipping address.
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'cedulacliente', 'cedula');
    }
}
