<?php

namespace App\Services;

use App\Models\Local;

class Restaurants
{
    public function getAll()
    {
        return Local::get();
    }
}