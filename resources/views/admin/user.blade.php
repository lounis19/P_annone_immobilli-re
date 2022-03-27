@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--icons awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('content')
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa-solid fa-bars"></i>Menu
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="user">User</a>
    <a class="dropdown-item" href="annonce">Annonce</a>
    <a class="dropdown-item" href="#">Something else here</a>
</div>
<div class="container">

<table class="table table-dark table-striped">
  <thead>
<th>id</th>
<th>Statu</th>
<th>Nom</th>
<th>Email</th>
<th>Action</th>
  </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
          <td> {{ $user->id }} </td>
          <td>
          </td>
          <td> {{ $user->name }} </td>
          <td> {{ $user->email }} </td>
          <td>
          <form action="{{ url('/user/'.$user->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
{{ method_field('DELETE')}}

   <a class="dropdown-item" href="#">
   <button type="submit" style="background: white; border:0px"><i class="fa-solid fa-trash-can"></i> Delete</button> 
   </a>
   </form>
          </td>
      </tr>

      @endforeach

  </tbody>
</table>


</div>

@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>