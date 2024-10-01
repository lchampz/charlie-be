<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        return Categoria::all();
    }

    public function show($categoria) {
        return Categoria::with('Produtos')->findOrFail($categoria);
    }

}
