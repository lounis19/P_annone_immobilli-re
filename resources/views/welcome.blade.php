<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<!--icons awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            a{
              color: black;
            }
            a:hover{
              color: #D91022 ;
            }
        </style>
    </head>
    <body class="antialiased">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 2px solid black">
  <a class="navbar-brand" href="#"><img src="../logo/immo.png" alt="erreur" width="100px" height="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        
             @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa-solid fa-house"></i>  Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa-solid fa-right-to-bracket"></i>  Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa-solid fa-registered"></i>  Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
      </li>
     
    </ul>
    
  
   
   
  </div>
  <nav class="navbar navbar-light bg-light" style="text-align:right; float:right">
  
  <form class="form-inline" action="{{ route('search')  }}" methode="get" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
                <select class="form-control" name="type_bien" id="type_bien">
                    <option value="Maison">Maison</option>
                    <option value="Appartement">Appartement</option>
                    <option value="Villa">Villa</option>
                    <option value="Studio">Studio</option>
                    <option value="Espace commercial">Espace commercial</option>
                    <option value="Terrain">Terrain</option>  
                </select>
            </div>
            
            <div class="form-group">
            <select class="form-control" name="country" id="country" >
            <option value="">Country</option>
            @foreach( $countries as $country)
                <option value="{{ $country->wilaya_name_ascii }}">{{ $country->wilaya_name_ascii }}</option>
            @endforeach
           </select>
           </div>

    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
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
       <div style="text-align: center;">
      
       <a href="{{ url($annonce->id.'/show_detail') }}" style="font-size:20px"><i class="fa-solid fa-eye"></i> Show</a>
       
       </div>
    </div>
 </div>
 
 @endforeach
 

  <div class="d-flex justify-content-center" style="width:100%">
  {{ $annonces->links() }}
        </div>

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
