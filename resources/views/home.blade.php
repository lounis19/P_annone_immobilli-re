@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--icons awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
@livewireStyles
@section('content')
<div class="container">
<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#add_annonce" aria-expanded="false" aria-controls="collapseExample">
    Add annonce
  </button>
  
  <div class="row justify-content-md-center"><br>
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
         <div class="row" >
           <div class="col">{{ $annonce->type_annonce }}</div>
           <div class="col">{{ $annonce->type_bien }}</div> 
           <div class="col">{{ $annonce->operation }}</div>
       </div>
       <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  
  <form action="{{ url('/home/'.$annonce->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
{{ method_field('DELETE')}}

    <a class="btn" href="#" onclick="showAnnonce({{$annonce->id}})"><i class="fa-solid fa-eye"></i> View</a>
   
    <a class="dropdown-item" href="{{ url($annonce->id.'/edit') }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

   <a class="dropdown-item" href="#">
   <button type="submit" style="background: white; border:0px"><i class="fa-solid fa-trash-can"></i> Delete</button> 
   </a>
   </form>

  </div>
</div>
       </div>
    </div>
    <br>
 </div>
 @endforeach
</div>
</div>


<div class="modal" id="add_annonce" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal Create Annonce</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/home') }}" method="post" enctype="multipart/form-data">
                 @csrf

        
            <div class="form-group">
                <select class="form-control" name="type_annonce" id="type_annonce">
                
                    <option value="Offre">Offre</option>
                    <option value="Recherche">Recherche</option>
                </select>
            </div>
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
                <select class="form-control" name="operation" id="operation">
                    <option value="Vente">Vente</option>
                    <option value="Achat">Achat</option>
                    <option value="Location">Location</option>
                    <option value="Echange">Echange</option>
                </select>
            </div>

            <div class="form-group">
                <input class="form-control" type="file" name="image" id="image">
            </div>

            <div class="form-group">
                <textarea class="form-control" name="description" id="description" cols="10" rows="5"></textarea>
            </div>
         
            <div class="form-group">
            <select class="form-control" name="country" id="country" >
            <option value="">Country</option>
            @foreach( $countries as $country)
                <option value="{{ $country->wilaya_name_ascii }}">{{ $country->wilaya_name_ascii }}</option>
            @endforeach
           </select>
           </div>
           <div class="form-group">
            <select class="form-control" name="state" id="state">
            
            
           </select>
           </div>
           <div class="form-group">
                <input class="form-control" type="text" placeholder="Number phone" name="phone_number" id="phone_number" required>
            </div>
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!------------------------>
<div class="d-flex justify-content-center" style="width:100%">
  {{ $annonces->links() }}
        </div>
<!-------show annonce-------->

<div class="modal" id="modal_show_annonces" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Details annonce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="annonce_content">
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!------------>
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
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function () {
    $('#country').on('change', function () {
        var idCountry = this.value;
        $("#state").html('');
        $.ajax({
            url: "{{url('getState')}}",
            type: "Get",
            data: {
                country_id: idCountry,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
            
             $("#state").html(result);
               
            }
        });
    });
   
});

</script>

<script>
 function showAnnonce(id){
    $('#annonce_content').html("");

    $('#modal_show_annonces').modal('toggle');

    var ajaxUrl = "http://127.0.0.1:8000/showAnnonce/"+id;
        
    $.ajax({
				url: ajaxUrl,
				type: 'GET',
				dataType: 'json',
			
				data: {
				},
				success: function(response){
          
          var code= "";
          code +="<div class='row'>"
          code += "<div class='col'><img  src='storage/"+ response.image +"' width='250px' height='250px'/></div>";
          
         
          
          code +="<div class='col'><b>Annonce: </b>"+ response.type_annonce +"<br><b>Bien: </b>"+ response.type_bien 
          +"<br><b>Operation: </b>"+ response.operation +"<br><b>Tel: </b>"+ response.phone_number 
          +"<br><b>Wilaya: </b>"+ response.countrie +"<br><b>Commune: </b>"+ response.state +"</div>"
          

          code +="<div class='row'>"
          code +="<div class='col'><b>Description: </b><br>"+ response.description +"</div>"
          code += "</div>"

           
      
      $('#annonce_content').html(code);
				}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
  }

</script>




