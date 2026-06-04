<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShramnopasakController extends Controller
{
    public function index()
{
    $response = Http::get('https://website.sadhumargi.in/api/shramnopasak');

    // Ensure successful response
    if ($response->successful()) {
        $data = $response->json();
    } else {
        $data = [];
    }

    return view('activities.shramnopasak', compact('data'));
}
}
