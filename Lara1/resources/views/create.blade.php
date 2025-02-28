@extends('template') 
@section('content') 

<form action="{{ url('clients') }}" method="POST"> 
    @csrf 
    <div class="form-group">
    <label for="nom">Entrez votre nom :  </label> 
    <input type="text" name="nom" id="nom"> 
    </div>

    <div class="form-group">
    <label for="nom">Entrez votre email :  </label> 
    <input type="email" name="email" id="email"> 
    </div>
  
    <div class="form-group">
    <label for="nom">Entrez votre ville :  </label> 
    <input type="text" name="ville" id="ville"> 
    </div>
    <div class="form-group">
    <label for="nom">Entrez votre age :  </label> 
    <input type="text" name="age" id="age"> 
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
    <input type="submit" class="btn btn-primary" value="Créer !"> 
</form> 
    
@endsection 