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
}

//"https://api.nomics.com/v1/currencies/ticker?key=51df5574056bf70b0453c2f67e6c872cde7dfb12&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"

//"https://api.nomics.com/v1/currencies/ticker?key=51df5574056bf70b0453c2f67e6c872cde7dfb12&ids