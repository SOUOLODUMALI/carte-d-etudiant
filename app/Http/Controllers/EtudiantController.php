<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     $etudiant = Etudiant::all();

    // On transmet les Post à la vue
    return view("carte.liste", compact("etudiant"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("carte.Etud");
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
            "email" => "bail|required|string||max:256",
            "photo" => "bail|required|max:1024",
            "annee_accademique" => "bail|required|date",

        ]);
         $img_path = $request->photo->store("etudiant");
        Etudiant::create(
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

        return redirect(route("Etudiant.create"));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        return view("carte.Etud", compact("etudiant"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        
           
            $request->validate([
                    "matricule" => "bail|required|string|max:200",
                "nom" => "bail|required|string|max:200",
                "prenom" => "bail|required|string|max:256",
                "cycle" => "bail|required|string|max:256",
                "niveau" => "bail|required|string|max:256",
                "email" => "bail|required|string|max:256",
                "photo" => "bail|required|max:1024",
                "annee_accademique" => "bail|required|date",
      
                ]);
    
                $etudiant->update(
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
                return redirect(route("Etudiant.index"));
                
           

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        // Redirection route "posts.index"
        return redirect(route('Etudiant.index'));
    }
}
