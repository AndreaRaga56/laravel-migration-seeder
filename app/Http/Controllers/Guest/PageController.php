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
        $treni= Train::where("orario_di_arrivo", ">=", $today)->get();
        return view("home", compact("treni", "today"));
    }
}
