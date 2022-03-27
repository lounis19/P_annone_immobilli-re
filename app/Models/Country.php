<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable=['commune_name','commune_name_ascii','daira_name','daira_name_ascii','wilaya_code','wilaya_name','wilaya_name_ascii'

];
public function states()
{
    return $this->hasMany(State::class);
}
public function annonces(){
    //cette relation traduit que un user peut créer un ou plusiers bien
    return $this->hasMany('App\Models\Annonce');
}
}
