<?php

namespace App\Services;

use App\Models\Order;

class Orders
{
    public function getAll()
    {
        return Order::orderBy('codigo')->get();
    }
}