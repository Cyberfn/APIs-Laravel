<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class UsuarioController extends RoutingController
{
    public function index()
    {
    return response()->json(['message' => 'API carregada corretamente']);
    }
}
