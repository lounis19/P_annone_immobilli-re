<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--icons awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img src="../logo/immo.png" alt="erreur" width="100px" height="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container">
    <br>
<div class="row justify-content-md-center">
@foreach($annonces as $annonce)
 <div class="col">
    <div class="card" style="width: 20rem;margin-bottom:3%;">
        <div class="card-header">
        {{ $annonce->countrie }} {{ $annonce->state }}
        
        </div>
       <div class="cad-body">
       <img src="{{ asset('storage/'.$annonce->image ) }}"  class="card-img-top" alt="erreur" style="height:250px;" >
       </div>
       <div class="card-footer" id="footer">
            
       <p>{{ $annonce->type_annonce }} {{ $annonce->type_bien }}  {{ $annonce->operation }}</p>
     
       </div>
       <div class="btn btn-danger" id="btn_info">Plus detais</div>
    </div>
 </div>
 @endforeach
</div>
</div>

<div class="card bg-dark text-white" style="text-align: center">
    <div class="card-header">
      <div class="row">
        <div class="col">Contacte: 0676 33 98 38</div>
        <div class="col">E-mail: mokranelounis19ls@gmail.com</div>
        <div class="col">Facebook: immostore.immo</div>
      </div>
    </div>
  <div class="card-body">
    Copyright 2022
  </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>