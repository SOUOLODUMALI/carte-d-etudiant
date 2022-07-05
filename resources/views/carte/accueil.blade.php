@extends('layouts.app')

@section('content')
<style>
       .color {
background-color:#0bd4b6;
 height:300px;
 max-width:100%;

    }
    img{
        align-items:center;
        justify-content:center;
     text-align:center;
     padding-left:50%;
     padding-top:5%
    }
    h1{
     font: 4em sans-serif;   
     justify-content:center;
     text-align:center;
     color:#ffff;
    }
    .whit{
         border:2px solid black; 
            border-radius:9px; 
        background-color:white;
 height:100px;
 max-width:100%;
    }
    .inputt{border:2px solid #FDEF75;
        height:80px;
        width:40%;     
        justify-content:center;
        margin-top:80px;
        margin-left:30%;
        background-color:#FDEF75;
    }
    h2{
        font-size:2em ;
        justify-content:center;
     text-align:center;
    }
</style>
<div class="color">
<div class="mb-5">
<img src="{{('./images/esi.jpg')}}" alt="" height="100px" width="100px">


</div>

<div class="form">
<h1>
        BIENVENUE
</h1>
</div>
</div>
    <div class="whit">
        <div class="inputt">

      <h2>
      <a href="{{route('Etudiant.create')}}">NEXT ></a>
      </h2>
        </div>

</div>
</div>

@endsection