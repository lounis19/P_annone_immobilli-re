<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
<div class="container">
<br>
<div class="row justify-content-md-center">
@foreach($annonces as $annonce)
 <div class="col">
    <div class="card" style="width: 20rem;">
        <div class="card-header">
        {{ $annonce->countrie }} {{ $annonce->state }}
        
        </div>
       <div class="cad-body">
       <img src="{{ asset('storage/'.$annonce->image ) }}"  class="card-img-top" alt="erreur" style="height:250px;" >
       </div>
       <div class="card-footer">
       <p>{{ $annonce->type_annonce }} {{ $annonce->type_bien }}  {{ $annonce->operation }}</p>
       <div class="btn btn-danger">Plus detais</div>
       </div>
    </div>
 </div>
 @endforeach
</div>
   
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
