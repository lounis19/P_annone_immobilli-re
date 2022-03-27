<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class ApiController extends Controller
{
   /* public function store(Request $request)
    {
        Country::insert($request->data);
        return 'ok';
    }*/
    public function store(Request $request)
    {
        State::insert($request->data);
        return 'ok';
    }
}
