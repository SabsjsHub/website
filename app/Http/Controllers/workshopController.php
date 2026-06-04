<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class workshopController extends Controller
{
     public function index()
    {
        $workshop = Http::get('https://website.sadhumargi.in/api/padhadhikari-prashashan-karyashala')->json();
        

        return view('workshop.index', compact('workshop'));
    }
}
