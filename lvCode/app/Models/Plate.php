<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    protected $table = 'plato';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'decripcion',
        'precio',
        'tiempo_estimado',
        'imagen',
    ];

    /**
     * The orders that belong to the user.
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'pedidoplato', 'idplato', 'codigopedido')
            ->withPivot('precio_unitario', 'cantidad');
    }

    /**
     * The menus that belong to the plate.
     */
    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu', 'menuplato', 'idplato', 'idmenu');
    }
}
