<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'empleado';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula',
        'tipo',
        'riflocal',
    ];

    /**
     * Get the local that owns the empleado.
     */
    public function local()
    {
        return $this->belongsTo('App\Models\Local', 'riflocal', 'rif');
    }

    /**
     * The orders that belong to the employee.
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'empleadopedido', 'cedulaempleado', 'codigopedido');
    }
}
