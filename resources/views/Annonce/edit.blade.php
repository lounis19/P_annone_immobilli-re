@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
@livewireStyles
@section('content')
<div class="container">

<div class="card bg-dark" id="add_annonce" tabindex="-1" role="dialog">
  <div class="card-dialog" role="document">
    <div class="card-content">
      <div class="card-header">
        <h5 class="card-title">Edite Annonce</h5>
        
      </div>
      <div class="card-body">
      <form id="frm" action="{{ url('edit/'.$annonces->id)}}" method="post" >
<input type="hidden" name="_method" value="PUT">
@csrf

        
            <div class="form-group">
                <select class="form-control" name="type_annonce" id="type_annonce">
                <option value="{{ $annonces->type_annonce }}">{{ $annonces->type_annonce }}</option>
                    <option value="Offre">Offre</option>
                    <option value="Recherche">Recherche</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="type_bien" id="type_bien">
                    <option value="{{ $annonces->type_bien }}"> {{ $annonces->type_bien }}</option>
                    <option value="Maison">Maison</option>
                    <option value="Appartement">Appartement</option>
                    <option value="Villa">Villa</option>
                    <option value="Studio">Studio</option>
                    <option value="Espace commercial">Espace commercial</option>
                    <option value="Terrain">Terrain</option>  
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="operation" id="operation">
                    <option value="{{ $annonces->operation }}"> {{ $annonces->operation }}</option>
                    <option value="Vente">Vente</option>
                    <option value="Achat">Achat</option>
                    <option value="Location">Location</option>
                    <option value="Echange">Echange</option>
                </select>
            </div>


            <div class="form-group">
                <textarea class="form-control" name="description" id="description" cols="10" rows="5">{{ $annonces->description }}</textarea>
            </div>
         
            <div class="form-group">
           
           </div>
           <div class="form-group">
                <input class="form-control" type="text" value="{{ $annonces->phone_number }}" name="phone_number" id="phone_number" required>
            </div>
      
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" href="/home" class="btn btn-dark text-white"> Annuler </button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

@endsection


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
