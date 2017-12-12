<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $table = 'extra';
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
     * The orders that belong to the Additional.
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'extrapedido', 'idextra', 'codigopedido')
            ->withPivot('precio_unitario', 'cantidad');
    }

    /**
     * The menus that belong to the additional.
     */
    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu', 'extramenu', 'idextra', 'idmenu');
    }
}
