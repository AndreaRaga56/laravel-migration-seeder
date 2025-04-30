<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{

    public function index (){
        $today = Carbon::today();
        $treni= Train::where("orario_di_partenza", ">=", $today)
        ->OrderBy("orario_di_partenza", "asc")
        ->get();
        return view("home", compact("treni"));
    }
}
