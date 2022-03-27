<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\Annonce;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Pagination\Paginator;


class AnnonceController extends Controller
{
    public function show_details($id){
        $annonces=Annonce::find($id);
        
        return view('show_detail',compact('annonces',$annonces));
    }

    
    public function search(Request $request){
       
       $annonces=Annonce::where('type_bien','=', $request->type_bien )
       ->orwhere('countrie','=',$request->country) 
       ->get();
        return view('Annonce.search')->with('annonces',$annonces);

    }
    public function getAnnonce(){
        $annonces= Annonce::Paginate(6);

        return view('admin.annonce', \compact('annonces',$annonces));
    }
    
    public function getUser(){
        $users=User::Paginate(6);

        return view('admin.user', \compact('users',$users));
    }
   

   /* public function index(){
        
        $annonces=Annonce::where('user_id',Auth::user()->id,'descendants')->get();

        $countries = Country::get()->unique('wilaya_name_ascii');


        return view('/home',compact(['annonces',$annonces, 'countries',$countries]));

    }*/
    public function index()
    {
        $annonces=Annonce::where('user_id',Auth::user()->id,'descendants')->Paginate(6);

        $countries = Country::get()->unique('wilaya_name_ascii');

        $role=Auth::user()->role;
        if($role=='1'){

            return view('admin.dashboard');
        }else{

            return view('/home',compact(['annonces',$annonces, 'countries',$countries]));
        }
       
    
    }
     
    public function getState(Request $request)
    {
        $states= State::where("country_id", $request->country_id)->get(["commune_name_ascii", "id"]);
      
      $output='<option >select state</option>';
      foreach($states as $key){
          $output.='<option value="'.$key->commune_name_ascii.'">'.$key->commune_name_ascii.'</option>';
      }
        //return ['states',$states];
        echo json_encode($output);
    }
/*

*/

public function showAnnonce($id)
{
  $annonces=Annonce::find($id);
  
  echo json_encode($annonces);   
   }


  public function show_annonce(){
      
    //$annonces=Annonce::all();
    $annonces=Annonce::Paginate(6);
    $countries = Country::get()->unique('wilaya_name_ascii');

    return view('welcome',compact(['annonces', $annonces, 'countries',$countries]));

  }
    public function Store(Request $request){
        $user=user::all();

        $annonces=new Annonce;
        $annonces->type_annonce=$request->type_annonce;
        $annonces->type_bien=$request->type_bien;
        $annonces->operation=$request->operation;
        $annonces->description=$request->description;
        $annonces->countrie=$request->country;
        $annonces->state=$request->state;
        $annonces->phone_number=$request->phone_number;
        if(Request('image')){ 
            $annonces->image=Request('image')->store('image','public'); 
           }
   
        $annonces->user_id=Auth::user()->id;
        $annonces->save();

return redirect('/home');   
 
    }
    /*
    */
     public function update(Request $request, $id)
    {
        $annonces=Annonce::find($id);
        $annonces->type_annonce=$request->input('type_annonce');
        $annonces->type_bien=$request->input('type_bien');
        $annonces->operation=$request->input('operation');
        $annonces->description=$request->input('description');
        $annonces->phone_number=$request->input('phone_number');
        
       
        $annonces->save();

        return redirect('/home');
    }
/*
*/
public function edit($id){
    $annonces=Annonce::find($id);
    
    return view('Annonce.edit',compact('annonces',$annonces));
}
/*
*/
    public function destroy($id){

        $annonces=Annonce::find($id)->delete();

       
        $role=Auth::user()->role;
        if($role=='1'){

            return redirect('annonce');
        }else{

            return redirect('/home');
        }

    }

   


}
