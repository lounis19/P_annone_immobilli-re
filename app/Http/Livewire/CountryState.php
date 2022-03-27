<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use App\Models\Country;
use App\Models\States;

class CountryState extends Component
{
    
    public $wilaya_name_ascii='';

    public function render()
    {
        $countries=DB::table('countries')->get()->unique('wilaya_name_ascii');
 
        $states=DB::table('states')->where('country_id',$this->wilaya_name_ascii)->get();

        return view('livewire.country-state', compact('countries','states'));
    }
}
