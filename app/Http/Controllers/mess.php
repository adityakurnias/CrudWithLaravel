<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mess extends Controller
{
    public function index() {
        return view('message', 
        [
            'mess' => 'asdfghjkl', 
            'tittle' => 'iudghuweiefjdbhfjud'
        ]);
    }
}
