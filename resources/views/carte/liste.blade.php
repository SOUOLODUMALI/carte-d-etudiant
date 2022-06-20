













@extends('layouts.app')

@section('content')

<style>
  *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
   
}
header{
    color: #fff;
    background-color: rgb(170, 3, 3);
    border: 1px solid black;
    float: 50%;
     height: 100px; 
    width: 100%;
}
h3{
    text-align: center;
    padding-top: 2%;
    contain: content ;
    font-size: 2em;
    
}

.retour{
    font-size: 2em;
    color:rgb(115, 10, 10);
    margin-left: 900px;
    border: 2px solid black;
    border-radius: 8px;
}
.bien{
    color:rgb(190, 11, 11);
    font-size: 2em;
}

 a{
    text-decoration: none;   
}
.table caption-top{
    color: rgb(196, 24, 24)!important;
}
h2{
    color:rgb(27, 17, 2);
    text-align: center;
    margin-top: 50px;
   
}
</style>





     <div class="bien"> 



  <h2 class="abonne">La liste des Etudiants </h2>
 
<img src="{{asset('images/esi.jpg')}}" alt="logo">
 







<div class="table-responsive">
    
    <table class="table caption-top">
        <thead>
        <tr class="table-dark">
         
          <th scope="col">matricule</th>
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col">cycle</th>
          <th scope="col">niveau</th>
          <th scope="col">email</th>
          <th scope="col">photo</th>
          <th scope="col">annee_accademique</th>
        </tr>
      </thead>

        @foreach($etuds as $etud)
            <tr>
    
            <td>{{$etud->matricule}}</td> 
            <td>{{$etud->nom}}</td> 
            <td>{{$etud->prenom}}</td>  
            <td>{{$etud->cycle}}</td>
            <td>{{$etud->niveau}}</td>
            <td>{{$etud->email }}</td>
            <td>{{$etud->photo}}</td>
            <td>{{$etud->annee_accademique}}</td>

             <!-- <td>
                              
                                        <button type='button'
                                        value="{{$etuds->id}}"
                                        class='btn delete btn-outline-info btn-circle btn-lg btn-circle ml-2'>suprimer</button> 
                                         <a href={{
                                            route('edit',['id'=>$etuds->id])
                                        
                                        }}  
                                        <button type='button' class='btn  btn-outline-info btn-circle btn-lg btn-circle ml-2'>modifier </button></a>
                                    </td>   -->

          </tr>
       @endforeach
        </tbody>
    </table>
</div>
</div>

    
    
@endsection

