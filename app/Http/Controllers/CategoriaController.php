<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        // retornanos una respuesta en formato JSON con todas las categorias, 'categorias' es el nombre de la clave 
        // que contendra el array de categorias y Categoria::all() es el array de categorias que hace referencia al modelo
        // return response()->json(['categorias' => Categoria::all()]);

        return new CategoriaCollection(Categoria::all());
    }
}
