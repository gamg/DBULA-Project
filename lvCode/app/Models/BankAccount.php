<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $table = 'cuenta_bancaria';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero_de_cuenta',
        'banco',
        'riflocal',
    ];

    /**
     * Get the restaurant (local) that owns the bank account.
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Models\Local', 'riflocal', 'rif');
    }
}
