<?php

namespace App\Http\Controllers\demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{
    public function index(){
        $all = DB::table('demo_tests')->get();
        return view('charts.demoCharts')->with(compact('all'));
    }
}
