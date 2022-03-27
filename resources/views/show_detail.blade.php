@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
@livewireStyles
@section('content')
<div class="container">

<div class="card " id="add_annonce" tabindex="-1" role="dialog">
  <div class="card-dialog" role="document">
    <div class="card-content">
      <div class="card-header">
        <h5 class="card-title">Show Details</h5>
        
      </div>
      <div class="card-body">
      <form id="frm" action="{{ url('edit/'.$annonces->id)}}" method="post" >
<input type="hidden" name="_method" value="PUT">
@csrf
<div class="row">
    <div class="col" style="float: left">
    <div class="form-group">
            <img src="{{ asset('storage/'.$annonces->image ) }}"  class="card-img-top" alt="erreur" style="height:250px;" >
            </div>
    </div>
    <div class="col" style="float: right">
    <div class="form-group">
                <label for=""><b>Type_annonce : </b>{{ $annonces->type_annonce }}</label>
            </div>
            <div class="form-group">
                <label for=""><b>Type_bien : </b>{{ $annonces->type_bien }}</label>
            </div>
            <div class="form-group">
                <label for=""><b>Operation : </b>{{ $annonces->operation }}</label>
            </div>
        
        <div class="form-group">
                <label for=""><b>Wilaya :</b> {{ $annonces->countrie  }}</label>
            </div>
            <div class="form-group">
                <label for=""><b>Commune :</b> {{ $annonces->state}}</label>
            </div>
            <div class="form-group">
                <label for=""><b>Telephone : </b>{{ $annonces->phone_number }}</label>
            </div>
            </div>
</div>
            

           
            <div class="form-group">
                <label for=""><b>Description:</b></label>
                <label for="">{{ $annonces->description  }}</label>
            </div>
          
            </div>
    
      
      </div>
      <div class="card-footer">
        
        <a href="/" class="btn btn-dark text-white"> Annuler </a>
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
