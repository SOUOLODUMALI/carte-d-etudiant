


@extends('layouts.app')
@section('content')
<div class='container-fluid corps'>
    <div class='row'>
        <div class='col-md-6 offset-md-3 col-sm-12 mt-5 text-light text-center demand'>
           <h3> ENREGISTREMENT D'UN NOUVEL ABONNE</h3>
        </div>
    </div>
   @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class='row container-fluid justify-content-evenly'>
        <div class='col-md-4 col-sm-12 offset-1'>
            <form action={{
                route('inscription.store')
            }} method='post'>
                @csrf
                <div class='row'>
                    <div class='col mt-5 text-center bg-warning text-light mb-3'>
                       <h4> NOUVEAU ABONNE</h4>
                    </div>
                </div>
                <div class='input-group input-group-sm c1 mb-3'>
                    <span  class='input-group-text' id='inputGroup-sizing-sm'>NOM</span>
                    <input name='nom' type='text' 
                    pattern = '[a-zA-Z]{1,20}'
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' 
                    
                    id='inputGroup-sizing-sm'>PRENOMS</span>
                    
                    <input name='prenom' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm'
                    pattern = "[a-zA-Z\s]{1,20}" required>
                  </div>
                  <div class='input-group input-group-sm c1 mb-3'>
                    <span class='input-group-text'id='inputGroup-sizing-sm'>DATE DE NAISSANCE</span>
                    <input name='date_naissance' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>DEBUT D'ABONNEMENT</span>
                    <input name='date_abonne' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c1 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>NUMERO DE TEL</span>
                    <input name='telephone' type='number'
                    pattern = "[0-9]{8,10}"
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>EMAIL</span>
                    <input name='email' type='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='row justify-content-center '>
                      
                        <button  type='submit' class=' col-6 envoi btn btn-primary'> Enregitrer</button>
                      
                  </div>
            </form>
        </div>

        <div class='col-md-4 col-sm-12 offset-1'>
            <div>
                <div class='row'>
                    <div class='col mt-5 text-center bg-success text-light mb-3'>
                       <h4> DERNIER ENREGISTREMENT</h4>
                    </div>
                </div>
                <div class=' inpu2 input-group-sm mb-3'>
                    <span  class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>NOM:
                    <span style='font-weight: bold;'>&nbsp;
                    {{
                        $etudiant ? $etudiant->nom : 'Pas encore d\'enregistrement'
                    }}
                    </span></span>
                    
                  </div>
                  <div class=' inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>PRENOMS:
                    <span style='font-weight: bold;'>&nbsp;
                    {{
                      $etudiant ? $etudiant->prenom : '- '
                    }}</span></span>
                    
                  </div>
                  <div class=' inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>DATE DE NAISSANCE:
                    <span style='font-weight: bold;'>&nbsp;{{
                       $etudiant ? $etudiant->date_naissance : '-'
                    }}
                    </span></span>
                    
                  </div>
                  <div class='inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>DEBUT D'ABONNEMENT:
                    <span style='font-weight: bold;'>&nbsp;
                    {{
                      $etudiant ? $etudiant->date_abonne : '-'
                    
                    }}</span></span>
                  

                  </div>
                  <div class='inpu2 input-group-sm mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm' style='width:100%'>NUMERO DE TEL: 
                    <span style='font-weight: bold;'>&nbsp;
                    {{
                      $etudiant ? $etudiant->telephone : '-'
                    
                    }}</span></span>
                    

                  </div>
                  <div class='inpu2 input-group-sm mb-3'>
                    <span class='input-group-text'
                    style='width:100%' id='inputGroup-sizing-sm'>EMAIL : 
                    <span style='font-weight: bold; font-size:100%'>&nbsp;{{
                      $etudiant ? $etudiant->email : '-'
                    
                    
                    }}</span>
                </span>
                    
                  </div>
                  <div class='row justify-content-center ' >
                      
                        <a href={{ route('list')
                        }}  class=' text-white  col-6 envoi btn btn-warning'>Liste</a>
                  </div>
            </div>

        </div>
    </div>
</div>
@endsection
