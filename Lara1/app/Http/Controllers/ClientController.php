<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "hello"; 

        // return view('test'); 

        $clients = Client::all(); 
        return view('test', ['clients'=> $clients]); 

        $clients = Client::all();              
        foreach($clients as $client) {             
            echo $client->nom;
            echo"<br>";
            echo $client->email;
            echo"<br>";
            echo $client->ville;
            echo"<br>";
            echo $client->age; 
            echo"<br><br>";        
        } 
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|max:50|alpha',
            'email' => 'required|email',
            'ville' => 'required|max:50|alpha',
            'age' => 'required|integer'
            ]
            );
            $client = new Client;
            
            $client->nom = $request->nom;
            $client->email = $request->email;
            $client->ville = $request->ville;
            $client->age = $request->age;
            Session::flash('message', 'Création effectuée !');
            $client->save();
            return redirect('/clients');    
        } 
        

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id); 
        echo $client->nom;
            echo"<br>";
            echo $client->email;
            echo"<br>";
            echo $client->ville;
            echo"<br>";
            echo $client->age; 
            echo"<br><br>";   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
        return view('edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nom' => 'required|max:50|alpha',
            'email' => 'required|email',
            'ville' => 'required|max:50|alpha',
            'age' => 'required|integer'
            ]
            );
            $client = Client::find($id);
            
            $client->nom = $request->nom;
            $client->email = $request->email;
            $client->ville = $request->ville;
            $client->age = $request->age;
            Session::flash('message', 'Modification effectuée !');
            $client->save();
            return redirect('/clients');    
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Session::flash('messages', 'Suppression effectuée !');
        $client = Client::find($id);
        // dd($client);
        $client->delete();
            return redirect()->route('clients.index')
                ->with('success', 'Project deleted successfully');
        
        

    }
}


    