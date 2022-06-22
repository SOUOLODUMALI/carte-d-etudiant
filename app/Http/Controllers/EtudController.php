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
            "email" => "bail|required|string|unique:etuds|max:256",
            "photo" => "bail|required|max:1024",
            "annee_accademique" => "bail|required|date",

        ]);
        // $img_path = $request->photo->store("etuds");
        Etud::create(
            [
                "matricule" => $request->matricule,
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "cycle" => $request->cycle,
                "niveau" => $request->niveau,
                "email" => $request->email,
                "photo" =>  $request->photo,
                "annee_accademique" => $request->annee_accademique,

            ]
        );

        return redirect(route("Etud.create"));
    
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
        return view("carte/Etud", compact("etuds"));
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
       
    
            $rules = [
                "matricule" => "bail|required|string|max:200",
            "nom" => "bail|required|string|max:200",
            "prenom" => "bail|required|string|max:256",
            "cycle" => "bail|required|string|max:256",
            "niveau" => "bail|required|string|max:256",
            "email" => "bail|required|string|unique:etuds|max:256",
            "photo" => "bail|required|max:1024",
            "annee_accademique" => "bail|required|date",
  
            ];
    
            if ($request->has("photo")) {
                $rules["photo"] = "bail|image|required|max:1024";
            }
            $this->validate($request, $rules);
            if ($request->has("photo")) {
                Storage::delete($etuds->photo);
                $img_path = $request->photo->store("etuds");
            }
            $abonne->update(
                [
                    "matricule" => $request->matricule,
                    "nom" => $request->nom,
                    "prenom" => $request->prenom,
                    "cycle" => $request->cycle,
                    "niveau" => $request->niveau,
                    "email" => $request->email,
                    "photo" =>  $request->photo,
                    "annee_accademique" => $request->annee_accademique,   
                ]
            );
            return redirect(route("Etud.create"));
        }
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
