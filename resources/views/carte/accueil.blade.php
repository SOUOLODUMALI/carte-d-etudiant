@extends('layouts.app')

@section('content')
<body>
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

      <h2>NEXT ></h2>
        </div>

</div>
</div>
<body>
<style>
    .{
        margin:0;
        padding:0;

    }
    .color{
background-color:red;
 height:300px;
 max-width:100%;

    }
    img{
        align-item:center;
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
         boder:2px solid black; 
            border-radius:9px; 
        background-color:white;
 height:100px;
 max-width:100%;
    }
    .inputt{border:2px solid yellow;
        height:80px;
        width:40%;     
        justify-conent:center;
        margin-top:80px;
        margin-left:30%;
        background-color:yellow;
    }
    h2{
        font-size:2em ;
        justify-content:center;
     text-align:center;
    }
</style>
@endsection