<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {
        
        $myTrains = Train::where('date', '=', date('Y-m-d'))->get();
        
        $data = [
            'trains' => $myTrains
        ];

        return view('index', $data);
    }
}
