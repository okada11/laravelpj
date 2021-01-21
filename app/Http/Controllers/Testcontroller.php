<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function index() {
        $data = [
            'cat', 'dog', 'pig'
        ];
        return view('test', compact('data'));
    }
}
