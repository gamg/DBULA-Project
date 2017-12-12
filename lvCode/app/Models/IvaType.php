<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IvaType extends Model
{
    protected $table = 'tipo_iva';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo',
        'porcentaje',
        'activo',
    ];

    /**
     * Get the orders for the iva type.
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'idtipoiva', 'id');
    }
}
