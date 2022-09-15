<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customercontroler extends Controller
{
    public function list() {
        $customerslist = [
            'Emmanuel',
            'Marycynthia',
            'Prince',
        ];
        return view('customers', [ 'clist' => $customerslist ] );
    }
}
