<?php

namespace App\Http\Controllers;

use App\Models\Etud;
use Illuminate\Http\Request;

class EtudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $etuds = Etud::all();

           return view('carte.liste' , compact('etuds'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carte.Etud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request, [
            "matricule" => "bail|required|string|max:200",
            "nom" => "bail|required|string|max:200",
            "prenom" => "bail|required|string|max:256",
            "cycle" => "bail|required|string|max:256",
            "niveau" => "bail|required|string|max:256",
            "email" => "bail|required|string|unique:Etud|max:256",
            "photo" => "bail|image|required|max:1024",
            "annee_accademique" => "bail|required|date",

        ]);
        $img_path = $request->photo->store("etuds");
        Etud::create(
            [
                "matricule" => $request->matricule,
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "cycle" => $request->cycle,
                "niveau" => $request->niveau,
                "email" => $request->email,
                "photo" =>  $img_path,
                "annee_accademique" => $request->annee_accademique,

            ]
        );

        return redirect(route("Etud.store"));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etud  $etud
     * @return \Illuminate\Http\Response
     */
    public function show(Etud $etud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etud  $etud
     * @return \Illuminate\Http\Response
     */
    public function edit(Etud $etud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etud  $etud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etud $etud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etud  $etud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etud $etud)
    {
        //
    }
}
