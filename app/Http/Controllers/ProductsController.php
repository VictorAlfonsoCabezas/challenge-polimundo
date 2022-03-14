<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller {

    public function index() {
        $productos = Product::all();
        if ($productos != null && $productos != '') {
            $data = [
                'productos' => $productos,
                'status' => 200,
            ];
        } else {
            $data = [
                'productos' => array(),
                'status' => 500,
            ];
        }

        return $data;
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show($id) {
        $producto = Product::find($id);
        if ($producto != null && $producto != '') {
            $data = [
                'producto' => $producto,
                'status' => 200,
            ];
        } else {
            $data = [
                'status' => 500,
            ];
        }
        return $data;
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }

}
