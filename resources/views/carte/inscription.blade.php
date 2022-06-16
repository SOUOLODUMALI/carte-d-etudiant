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
    background-color:yellow;
    color:black;
   }
   legend{
    font-size:3em;
   }
   button{
    font-size:3em;
    text-align:center;
    justify-content:center;
    background-color:yellow;
    border-radius:30%;
    padding:5%;
   }
   .placeholder{
    font-size:3em;
   }
   .un{
    border:1px   solid yellow;
    height:300px;
    width:30%;
    margin-left: 70%;
    background-color:yellow;
    border-radius:30% 30% 10% 30%/ 30% 30%;
   }
   .deux{
    border:1px   solid red;
    height:90px;
    width:10%;
    /* margin-left: 70%; */
    background-color:red;
    border-radius:30% 30% 10% 30%/ 30% 30%;
   } 
   .trois{
    border:1px   solid red;
    height:300px;
    width:30%;
    margin-left: 70%;
    background-color:red;
    border-radius:30% 30% 10% 30%/ 30% 30%;
   }
    </style>

<div class="un"></div>
    <div class=" formulaire">
        <img src="{{asset('images/esi.jpg')}}" alt="logo">
    </div>
    <div class="na">INSCRIPTION DE L'ADMINISTRATEUR  
    </div>
    <div class="deux"></div>
    <div class="container">
        <div class="col">
        <form  method="post" action="{{ route('carte') }}">
        <div class="tout">
        @csrf
            <!-- <legend for="" >nom</legend> -->
            <input type="text" name="nom" class="mal" placeholder="nom"> <br> <br>
            <!-- <legend for=""> prenom</legend> -->
            <input type="text" name="prenom" class="mal" placeholder="prenom"> <br> 
            <br>
            <!-- <legend for="">email</legend> -->
            <input type="email" name="email" class="mal" placeholder="email"> <br> <br>
    
            <!-- <legend for="">email</legend> -->
            <input type="text" name="role" class="mal" placeholder="role"> <br> <br>
    
            <!-- <legend for=""> mot de pass</legend> -->
            <input type="password" name="mot de pass" class="mal" placeholder="password"> <br> 
            <br>
            <!-- <legend for="">email</legend> -->
            <input type="password" name="confirmer mot pass" class="mal" placeholder="cpassword"> <br> <br>
            <!-- <legend for=""> mot_de_pass</legend>
            <input type="text" name="mot_de_pass" class="mal" placeholder="nom"> <br> 
            <br> -->
            <button type="submit " class="btn btn-warning " placeholder="nom">Envoyer<button>
            
            </div>
            </form>
            <div class="trois"></div>
        </div>
    </div>

    


@endsection