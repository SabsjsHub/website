<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ExPresidentController extends Controller
{
    public function index()
    {
        $response = Http::get('https://website.sadhumargi.in/api/ex-president');

        $presidents = $response->successful() ? $response->json() : [];

        return view('members.ex_president', compact('presidents'));
    }
}
