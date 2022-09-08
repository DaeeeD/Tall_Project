<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoBroController extends Controller
{
    public function getData(Request $request){
        $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=51df5574056bf70b0453c2f67e6c872cde7dfb12&per-page=100&page=1&convert=EUR");
        return view('welcome', ['response'=>$response->json()]);
    }

    public function getDetailledInfo (Request $request){
        $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=51df5574056bf70b0453c2f67e6c872cde7dfb12&ids=BTC");
        return view('detailview', ['response'=>$response->json()]);
    }
}