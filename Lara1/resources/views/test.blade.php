@extends('template') 
@section('title', 'Table Clients') 
@section('content') 
<!-- <p class="text-white bg-primary">C'est le contenu de l'élément body</p>  -->
@endsection
<H1 style="text-align: center; font-family:Garamond; font-weight: 700; ">Table Clients</H1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Ville</th>
      <th scope="col">Age</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
@foreach ($clients as $client) 
<!-- <p class="text-white bg-primary"> {{ $client->nom }} {{ $client->ville }}  </p>  -->
  <tbody style="border-bottom: solid #DEE2E6 3px ;">
    <tr>
      <td>{{ $client->nom }}</td>
      <td>{{ $client->ville }}</td>
      <td>{{ $client->age }}</td>
      <td><form action="{{ route('clients.destroy',$client->id) }}" method="POST" type="hidden"> 
            @csrf 
            @method('DELETE')
              
            <button type="submit" class="btn btn-primary" value="Supprimer !" > Supprimer</button>
          </form> 
      </td>
      <td>
          <form action="{{ route('clients.edit',$client->id) }}" method="GET" > 
            @csrf 
              
            <button type="submit" class="btn btn-primary" value="Modifier !" > Modifier</button>
          </form> 
      </td> 
    </tr>
  </tbody>
@endforeach 
</table>
<form action="{{ route('clients.create',$client->id) }}" method="GET" > 
  @csrf 
              
  <button type="submit" class="btn btn-primary" style="margin-left:47.5%;" value="Ajouter !" > Ajouter</button>
</form> 

