<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function create()
    {
        return view('pedidos.create');
    }
}
