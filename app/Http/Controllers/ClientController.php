<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client ::all();
        return view('clients.index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->Nom_Client = $request->input('Nom_Client');
        $client->Pre_Client = $request->input('Pre_Client');
        $client->save();
        return redirect()->route('clients.index');
    }
    public function show($Num_Client)
    {
        $client = Client::where('Num_Client', $Num_Client)->firstOrFail();
        return view('clients.show', ['client' => $client]);
    }
    
    public function edit($Num_Client)
    {
        $client = Client::where('Num_Client', $Num_Client)->firstOrFail();
        return view('clients.edit', ['client' => $client]);
    }
    
    public function update(Request $request, $Num_Client)
    {
        $client = Client::findOrFail($Num_Client);
        $client->Nom_Client = $request->input('Nom_Client');
        $client->Pre_Client = $request->input('Pre_Client');
        $client->save();
        return redirect()->route('clients.show', $client->Num_Client);
    }
    
    public function destroy($Num_Client)
    {
        $client = Client::where('Num_Client', $Num_Client)->firstOrFail();
        if ($client) {
            $client->delete();
            return redirect()->route('clients.index')->with('success', 'Client deleted successfully');
        } else {
            return redirect()->route('clients.index')->with('error', 'Client not found');
        }
    }
};
