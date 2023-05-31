<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        $totalDisponible = DB::table('clients')->where('availability', 'disponible')->count();
        $totalUtilise = DB::table('clients')->where('availability', 'utilisé')->count();
        $totalCartes = $totalDisponible + $totalUtilise;

        return view('mes-cartes-nfc.mes-cartes-nfc', compact('clients', 'totalDisponible', 'totalUtilise', 'totalCartes'));
    }

    public function destroy($id)
    {
        // Recherche le client avec l'ID donné
        $client = Client::find($id);
    
        if ($client) {
            $client->delete();
        } else {
            
        }
    
        return redirect()->back();
    }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    // Méthode pour mettre à jour les informations d'un client
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name = $request->input('name');
        $client->availability = $request->input('availability');
        $client->save();

        return redirect()->back();
    }

}
