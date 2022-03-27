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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
   /*  public function index()
    {
        $annonces=Annonce::where('user_id',Auth::user()->id,'descendants')->get();

        $countries = Country::get()->unique('wilaya_name_ascii');

        $role=Auth::user()->role;
        if($role=='1'){

            return view('admin.dashboard');
        }else{

            return view('/home',compact(['annonces',$annonces, 'countries',$countries]));
        }
       
    
    }*/

    public function destroy($id){

        $users= User::find($id)->delete();

         return redirect('user');
 
    }
}
