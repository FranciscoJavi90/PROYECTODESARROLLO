<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients=Client::all();
        $data['clients'] = $clients;
        return view('product', $data); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente=new Client();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente-> DPI = $request-> DPI;
        $cliente->save();  
 
        
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client=Client::find($id);
        $data['client'] = $client;
        //
        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Client::find($id);
      
       $cliente->nombre = $request->nombre;
       $cliente->apellido = $request->apellido;
       $cliente->fecha_nacimiento = $request->fecha_nacimiento;
       $cliente->DPI = $request->DPI;
       $cliente->update(); 


       return redirect()->route('client.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return redirect()->route('client.create');
    }
}