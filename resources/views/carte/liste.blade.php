@extends('layouts.app')

@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des abonnés</h3>
    <div class="mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a href="{{route('Etudiant.create')}}" class="btn btn-primary">Ajouter un Etudiant</a>
        </div>
        @if(session()->has("successDelete"))
        <div class="alert alert-sucess">
            {{session()->get('successDelete')}}
        </div>
        @endif
        <div class="center">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>

                        <th scope="col">N°</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Cycle</th>
                        <th scope="col">niveau</th>
                        <th scope="col">Email</th>
                        <th scope="col">photo</th>
                        <th scope="col">annee_accademique</th>
                        <th scope="col">date_d'inscription</th>
                        <th scope="col">editer</th>
                        <th scope="col">suprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($etudiant as $etudiant)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$etudiant->matricule}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->cycle}}</td>
                        <td>{{$etudiant->niveau}}</td>
                        <td>{{$etudiant->email}}</td>
                        <td>{{$etudiant->photo}}</td>
                        <td>{{$etudiant->annee_accademique}}</td>
                        <td>{{$etudiant->created_at}}</td>
                        <td>
			
					<a href="{{ route('Etudiant.edit', $etudiant) }}"> Modifier</a>
				</td>
				<td>
			
					<form method="POST" action="{{ route('Etudiant.destroy', $etudiant) }}" >
						
						@csrf
						 <input type="hidden" name="_method" value="DELETE"> 
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function cnf() {
        let ret = confirm("Voulez vous retirer cet abonne de la liste ? ");
        if (ret) {
            return true;
        }
        return false;
    }
</script>
@endsection