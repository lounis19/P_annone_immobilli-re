<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable=['commune_name','commune_name_ascii','daira_name','daira_name_ascii','wilaya_code','wilaya_name','wilaya_name_ascii'

     ];

     public function country()
     {
         return $this->belongsTo(Country::class);
     }
}
