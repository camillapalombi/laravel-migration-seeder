<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index() {
        
        $myTrains = Train::where('date', '2022-05-05')->get();
        
        $data = [
            'trains' => $myTrains
        ];

        return view('index', $data);
    }
}
