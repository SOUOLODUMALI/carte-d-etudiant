@extends('layouts.app')

@section('content')
<style>
    .tout {
        text-align: center !important;
        justify-content: center !important;
        position: center !important;
    }

    @media only screen and (max-width:1083px) {}

    img {
        margin-left: 45%;
        margin-top: 10%
    }

    .na {
        text-align: center !important;
        justify-content: center !important;
        font-size: 3em;
    }

    input {
        padding-left: 25%;
        margin-top: 3%;
        border-radius: 9px;
        text-align: center;
        font-size: 3em;
        background-color: #FDEF75;
        color: black;
    }

    legend {
        font-size: 3em;
    }

    button {
        font-size: 3em;
        text-align: center;
        justify-content: center;
        background-color: #FDEF75;
        border-radius: 30%;
        padding: 5%;
    }

    .placeholder {
        font-size: 3em;
    }

    .un {
        border: 1px solid #FDEF75;
        height: 300px;
        width: 30%;
        margin-left: 70%;
        background-color: #FDEF75;
        border-radius: 30% 30% 10% 30%/ 30% 30%;
    }

    .deux {
        border: 1px solid #0BD4B6;
        height: 90px;
        width: 10%;
        /* margin-left: 70%; */
        background-color: #0BD4B6;
        border-radius: 30% 30% 10% 30%/ 30% 30%;
    }

    .trois {
        border: 1px solid #0BD4B6;
        height: 300px;
        width: 30%;
        margin-left: 70%;
        background-color: #0BD4B6;
        border-radius: 30% 30% 10% 30%/ 30% 30%;
    }
</style>

<div class="un"></div>
<div class=" formulaire">
    <img src="{{asset('images/esi.jpg')}}" alt="logo">
</div>
<div class="na">INSCRIPTION DE L'ETUDIANT
</div>
<div class="deux"></div>
<div class="container">
    <div class="col">
        <div class="uk-grid uk-align-center uk-width-1-3 uk-card uk-card-default add-main ">
            @if(isset($etudiant))
            <form action="{{ route('Etudiant.update', $etudiant) }}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @else
                <form action="{{ route('Etudiant.store') }}" method="POST" enctype="multipart/form-data">
                    @endif
                    @csrf

                    <!-- <img src=" {{ asset('storage/images/logo/logo-v3.jpg') }}" alt="" width="200px" height="200px" class="add-img  uk-align-center"> -->
                    <div class="uk-grid uk-algin-center ">
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="matricule" name="matricule" placeholder="matricule" value="{{ isset($etudiant) ? $etudiant->matricule : old('matricule') }}">
                            </div>
                            @error('nmatricule')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="nom" name="nom" placeholder="Nom" value="{{ isset($etudiant) ? $etudiant->nom : old('nom') }}">
                            </div>
                            @error('nom')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="prenom" name="prenom" placeholder="Prenom" value="{{ isset($etudiant) ? $etudiant->prenom : old('prenom') }}">
                            </div>
                            @error('prenom')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="cycle" name="cycle" placeholder="cycle" value="{{ isset($etudiant) ? $etudiant->cycle : old('cycle') }}">
                            </div>
                            @error('cycle')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="niveau" name="niveau" placeholder="niveau" value="{{ isset($etudiant) ? $etudiant->nivau : old('niveau') }}">
                            </div>
                            @error('niveau')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="uk-margin-small">

                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input type="email" class="uk-input" id="email" name="email" placeholder="email" value="{{ isset($etudiant) ? $etudiant->email : old('email') }}">
                            </div>
                            @error('email')
                            <p> {{ $message }}</p>
                            @enderror


                        </div>
                        <div uk-form-custom>

                            <input type="file" accept="image/*" class="form-control" id="photo" name="photo" title="photo" value="{{ isset($etudiant) ? $etudiant->etudiant: old('photo') }}">
                            @if (isset($etud->photo))
                            <p>Image actuelle</p>
                            <img src="{{ asset('storage/' . $type->photo) }}" alt="" width="190" style="border:5px solid #aa0a30;">
                            @endif
                            </input>
                            @if (!isset($etud->photo))
                            <button class="uk-button" type="button" tabindex="-1">Choisir une photo</button>
                            @endif 

                        </div>
                        @error('photo')
                        <p> {{ $message }}</p>
                        @enderror
                    </div>


                    <div class="uk-margin-small">

                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                            <input type="text" onfocus="(this.type='date')" class="uk-input" id="annee_accademique" name="annee_accademique" placeholder="annee_accademique" value="{{ isset($etudiant) ? $etudiant->annee_accademique : old('annee_accademique') }}">
                        </div>
                        @error('annee_accademique')
                        <p> {{ $message }} </p>
                        @enderror
                    </div>

                    <br />
                    <div class="uk-margin">



                    </div>
                    <div class="uk-margin uk-remove-margin-top">
                        <button> <a href="{{ route('Etudiant.index' ) }}">
                            liste
                            </a></button>
                        <input type="submit" value="Valider" name="ajouter" class="uk-button uk-button-default uk-align-left">
                    </div>
                    <br>
                    <br>
                </form>
                <div class="trois"></div>
        </div>
    </div>




    @endsection