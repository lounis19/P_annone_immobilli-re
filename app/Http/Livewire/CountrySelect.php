<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class CountrySelect extends Component
{
    public $country='';
    public function render()
    {
       
        $countries=DB::table('countries')->get()->unique('wilaya_name_ascii');
        
        $states=DB::table('states')->where('country_id',$this->country)->get();


        return view('livewire.country-select', compact('countries', $countries));
    }
}
