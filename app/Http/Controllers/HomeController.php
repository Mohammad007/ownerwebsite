<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {
        $aboutlist = DB::table('abouts')->limit(8)->orderBy('id','desc')->get();
        $serviceslist = DB::table('services')->limit(8)->orderBy('id','desc')->get();
        $teamlist = DB::table('teams')->limit(8)->orderBy('id','desc')->get();
        $portfolioslist = DB::table('portfolios')->limit(8)->orderBy('id','desc')->get();
        $settings = DB::table('settings')->get();
        return view('home.index', compact('settings','aboutlist','serviceslist','teamlist','portfolioslist'));
    }
}
