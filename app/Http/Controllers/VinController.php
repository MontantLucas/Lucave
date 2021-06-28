<?php

namespace App\Http\Controllers;

use App\Models\Vin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VinController extends Controller
{
    //
    public function ViewVin($idVin){

        $url="https://api.globalwinescore.com/globalwinescores/latest/";
        $response = Http::withHeaders([
            'Authorization' => 'Token c5df04ada3269be676c3b7a4549b54a2a32cc5d2'
        ])->get($url);

        $vins = $response->json();

        foreach ($vins['results'] as $vin){
            if($vin['wine_id'] == $idVin){
                $vinSelected = $vin;
            }
        }

        return view('information', [
            'vin' => $vinSelected
        ]);
    }

    public function create(){
        return view('vin.create');
    }

    public function store(Request $req){
        $this->validate($req,[
            'nom' => 'string|required',
            'quantite' => 'int|required'
        ]);

        $vin = new Vin();
        $vin->nom = $req->get('nom');
        $vin->quantite = $req->get('quantite');
        $vin->user_id = auth()->id();
        $vin->save();

        return redirect()->route('dashboard');
    }

    public function delete(Vin $vin)
    {
        $vin->delete();

        return redirect()->route('vin.index');
    }

    public function edit(Vin $vin)
    {
        return view('vin.edit', [
            'vin' => $vin
        ]);
    }

    public function index()
    {
        $vin = Vin::all();

        return view('vin.index', [
            'vin' => $vin
        ]);
    }

    public function update(Vin $vin, Request $request)
    {
        $this->validate($request, [
            'nom' => 'string|required',
            'quantite' => 'int|required'
        ]);

        $vin->nom = $request->get('nom');
        $vin->quantite = $request->get('quantite');
        $vin->save();

        return redirect()->route('vin.index');
    }

}
