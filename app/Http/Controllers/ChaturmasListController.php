<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChaturmasListController extends Controller
{
   public function chaturmasLists()
{
    $chaturmas = Http::get('https://website.sadhumargi.in/api/chaturmas-suchi')->json();

    // Append full base URL to each PDF
    $chaturmas = collect($chaturmas)->map(function ($item) {
        $item['pdf_url'] = 'https://website.sadhumargi.in' . $item['pdf'];
        return $item;
    })->sortByDesc('year')->values();

    return view('activities.chaturmas-lists', compact('chaturmas'));
}

}
