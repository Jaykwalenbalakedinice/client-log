<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function logForm() {
        return view('client.logForm');
    }

    public function store(Request $request) {
        dd($request);
    }
}
