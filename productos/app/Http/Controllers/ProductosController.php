<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;
use Productos\Productos;

class ProductosController extends Controller
{
    public function getAll(){
        $productos = Productos::all();
        return $productos;
    }

    public function add(Request $request){
        $productos = Productos::create($request->all());
        return $productos;
    }

    public function get($id){
        $productos = Productos::find($id);
        return $productos;
    }
    public function edit($id,Request $request){
        $producto=$this->get($id);
        $producto->fill($request->all())->save();
        return $producto;
    }
    public function delete($id){
        $productos=$this->get($id);
        $productos->delete();
        return $productos;
    }



    
}
