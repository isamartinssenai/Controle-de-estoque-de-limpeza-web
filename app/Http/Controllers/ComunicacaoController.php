<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunicacaoController extends Controller
{
    public function luzes_html(Request $request){
        return view('luzes');
    }

    public function nfc_html(Request $request){
        return view('nfc');
    }
}
