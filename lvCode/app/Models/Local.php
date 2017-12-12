<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'local';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'rif';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rif',
        'nombre',
        'correo',
        'direccion',
        'imagen'
    ];

    /**
     * Get the employees for the local.
     */
    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'riflocal', 'rif');
    }

    /**
     * Get the orders for the customer.
     */
    public function bankAccounts()
    {
        return $this->hasMany('App\Models\BankAccount', 'riflocal', 'rif');
    }

    /**
     * The menus that belong to the local.
     */
    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu', 'localmenu', 'riflocal', 'idmenu')
            ->withPivot('activo');
    }
}
