@extends('layouts.app')

@section('content')
    <style>
        .tout{
            text-align:center !important;
            justify-content:center !important;
            position:center !important;
        }
   
@media only screen and (max-width:1083px) {}
   img{
   margin-left:45%;
   margin-top:10%
   } 
   .na{ 
    text-align:center !important;
            justify-content:center !important;
            font-size:3em;
   }
   input{
    padding-left:25%;
    margin-top:3%; 
    border-radius:9px;
    text-align:center;
    font-size:3em;
    background-color:#FDEF75;
    color:black;
   }
   legend{
    font-size:3em;
   }
   button{
    font-size:3em;
    text-align:center;
    justify-content:center;
    background-color:#FDEF75;
    border-radius:30%;
    padding:5%;
   }
   .placeholder{
    font-size:3em;
   }
   .un{
    border:1px   solid #FDEF75;
    height:300px;
    width:30%;
    margin-left: 70%;
    background-color:#FDEF75;
    border-radius:30% 30% 10% 30%/ 30% 30%;
   }
   .deux{
    border:1px   solid #0BD4B6;
    height:90px;
    width:10%;
    /* margin-left: 70%; */
    background-color:#0BD4B6;
    border-radius:30% 30% 10% 30%/ 30% 30%;
   } 
   .trois{
    border:1px   solid #0BD4B6;
    height:300px;
    width:30%;
    margin-left: 70%;
    background-color:#0BD4B6;
    border-radius:30% 30% 10% 30%/ 30% 30%;
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
        <form action="{{route('Etud.store')}}" method="post">
        <div class="tout">
        @csrf
            <!-- <legend for="" >nom</legend> -->
            <input type="text" name="matricule" class="mal" placeholder="matricule"> <br> <br>
            <!-- <legend for=""> prenom</legend> -->
            <!-- <legend for="" >nom</legend> -->
            <input type="text" name="nom" class="mal" placeholder="nom"> <br> <br>
            <!-- <legend for=""> prenom</legend> -->
            <input type="text" name="prenom" class="mal" placeholder="prenom"> <br> 
            <br>
            <!-- <legend for="">email</legend> -->
            <input type="text" name="cycle" class="mal" placeholder="cycle"> <br> <br>
            <!-- <legend for=""> mot de pass</legend> -->
            <input type="text" name="niveau" class="mal" placeholder="niveau"> <br> 
            <br>
            <!-- <legend for="">email</legend> -->
            <input type="email" name="email" class="mal" placeholder="email"> <br> <br>
            <input type="file" name="photo" class="mal" placeholder="photo"> <br> <br>
            <!-- <legend for=""> mot_de_pass</legend>-->
            <input type="date" name="annee_accademique" class="mal" placeholder="annee_accademique"> <br> 
            <br> 
            <button type="submit " class="btn btn-warning " >Envoyer<button>
            
            </div>
            </form>
            <div class="trois"></div>
        </div>
    </div>

    


@endsection