<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller {

    public function index() {
        $personas = Persons::all();
        if ($personas != null && $personas!= '') {
            $data = [
                'personas' => $personas,
                'status' => 200,
            ];
        } else {
            $data = [
                'personas' => array(),
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
        $persona = Persons::find($id);
        if ($persona != null && $persona!= '') {
            $data = [
                'personas' => $persona,
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
