<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Country;

class Annonce extends Model
{
    use HasFactory;
    protected  $fillable=[
    "id","type_annonce","type_bien","operation","description","image","countrie","state","phone_number","user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
