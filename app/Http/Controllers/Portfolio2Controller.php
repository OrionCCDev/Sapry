<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portfolio2Controller extends Controller
{
    public function index()
    {
        $cvDataPath = public_path('assets/portfolio2/cvData.json');
        $cvData = [];
        
        if (file_exists($cvDataPath)) {
            $cvData = json_decode(file_get_contents($cvDataPath), true);
        }
        
        return view('portfolio2.index', compact('cvData'));
    }
}
