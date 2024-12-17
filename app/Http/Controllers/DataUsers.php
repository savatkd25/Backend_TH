<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DatosUsers;


class DataUsers extends Controller  
{
    public function obtenerusuarios()
    {
        $users = DatosUsers::all();
        return response()->json($users);
    }
}

