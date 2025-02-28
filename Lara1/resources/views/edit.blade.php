@extends('template') 
@section('content') 

<form action="{{ route('clients.update',$client->id) }}" method="POST" type="hidden"> 
@method('PUT')
    @csrf 
    
    <div class="form-group">
    <label for="nom">Entrez votre nom :  </label> 
    <input type="text" name="nom" id="nom" value="{{ $client->nom}}"> 
    </div>

    <div class="form-group">
    <label for="nom">Entrez votre email :  </label> 
    <input type="email" name="email" id="email" value="{{ $client->email}}"> 
    </div>
  
    <div class="form-group">
    <label for="nom">Entrez votre ville :  </label> 
    <input type="text" name="ville" id="ville" value="{{ $client->ville}}"> 
    </div>
    <div class="form-group">
    <label for="nom">Entrez votre age :  </label> 
    <input type="text" name="age" id="age" value="{{ $client->age}}"> 
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif     
    <input type="submit" class="btn btn-primary" value="Modifier !"> 
</form> 

@endsection 