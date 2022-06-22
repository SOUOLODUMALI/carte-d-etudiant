<style>
   .border{ border:2px solid black;
    height:250px;
    width:25%;
    margin-left:5%;
}
   
    .bord{
        border:1px solid black;
        background-color:#0BD4B6;
        height: 25px;
        max-width:100%;
        text-align:center;
    }
    em{
        margin-left:100px;
    }
    .photo{
        border:3px solid black;
        border-radius:10px;
        height: 90px;
        width: 25%;
        margin-left:5%;
        margin-top:5%;
        text-align:center;
        align-items:center;
        position:center;
        justify-content:center;

    }
    span{
        margin-bottom:25%;
        text-align:center;
    }
    .covid{
        list-style: none;
        margin-left:3%;
    
        
    }
    .flex{
        display:flex;
      
    }
   
    .carte{
        border:2px solid black;
    height:220px;
    width:25%;
    margin-left:5%;
    }
.noir{
    border:1px solid black;
    height: 95px;
    max-width:100%;
    background-color:black;
    color:white;
    
}
h2 , h4 , h6{
    text-align:center;
}
.email{
    text-align:center;
}
.text{
    text-align:center;
}
ul li{list-style: none;

}

</style>

@extends('layouts.app')

@section('content')

<div class="border">
<div>
   <h6 class=text>UNIVERSITE NAZI BONI
<img src={{asset('images/esi.jpg')}} alt="logo" height="20px" width="20px">
 BURKINA FASO<br>
ufr/esi <em>Unite Progres justice</em>

</h6>
        <div class="bord">
            annee accademique 2021-2022
 </div>

</div > 
</h6>
    <div class="flex">
<div class="photo">
    
        ici photo
    
    </div>
<div class="covid">

    <ul>
        <li>matricule:</li>
        <li>nom:</li>
        <li>prenom(s):</li>
        <li>nee(e)le:</li>
        <li>niveau:</li>
    </ul>
    </div>
</div>
</div>
<br> <br>
</div>
<div class="carte">
<h2>UNIVERSITE NAZI BONI</h2>
<h4>BP 00376 BOBO (00226) 20 98 06 36 </h4>
<div class="email">
    site web http//:esi-utb.bf/
</div>
    <div class=noir>
        <h4>cete carte est scritement personnelle et doit etre<br> obligatoirement
             avec le proprietairelors des activites<br> accademique et pedagogique</h4>
    </div>
</div>
@endsection