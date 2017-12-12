<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    /**
     * The restaurants that belong to the menu.
     */
    public function restaurants()
    {
        return $this->belongsToMany('App\Models\Local', 'localmenu', 'idmenu', 'riflocal')
            ->withPivot('activo');
    }

    /**
     * The plates that belong to the menu.
     */
    public function plates()
    {
        return $this->belongsToMany('App\Models\Plate', 'menuplato', 'idmenu', 'idplato');
    }

    /**
     * The additionals that belong to the menu.
     */
    public function additionals()
    {
        return $this->belongsToMany('App\Models\Additional', 'extramenu', 'idmenu', 'idextra');
    }

    /**
     * The drinks that belong to the menu.
     */
    public function drinks()
    {
        return $this->belongsToMany('App\Models\Drink', 'bebidamenu', 'idmenu', 'idbebida');
    }

}
