<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $table = 'bebida';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'precio',
    ];

    /**
     * The orders that belong to the Drink.
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'bebidapedido', 'idbebida', 'codigopedido')
            ->withPivot('precio_unitario', 'cantidad');
    }

    /**
     * The menus that belong to the drink.
     */
    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu', 'bebidamenu', 'idbebida', 'idmenu');
    }
}
