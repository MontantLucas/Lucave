<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{

    //api token c5df04ada3269be676c3b7a4549b54a2a32cc5d2
    public function home(){
        $url="https://api.globalwinescore.com/globalwinescores/latest/";
        $response = Http::withHeaders([
            'Authorization' => 'Token c5df04ada3269be676c3b7a4549b54a2a32cc5d2'
        ])->get($url);

        $vins = $response->json();

        return view('dashboard',[
            'vins' => $vins['results']
        ]);
    }

    public function isAdmin(){
        return view('welcome');
    }
}
