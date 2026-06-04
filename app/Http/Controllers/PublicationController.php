<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class PublicationController extends Controller
{
    public function naneshvani()
    {
        $response = Http::get('https://website.sadhumargi.in/api/sahitya/category/naneshvani');
        $naneshvani = $response->successful() ? $response->json() : [];

        return view('activities.nanesh_vani', compact('naneshvani'));
    }

    public function ram_uvach()
    {
        $response = Http::get('https://website.sadhumargi.in/api/sahitya/category/ram_uvach');
        $naneshvani = $response->successful() ? $response->json() : [];

        return view('activities.ram_uvach', compact('naneshvani'));
    }

    public function ram_dhwani()
    {
        $response = Http::get('https://website.sadhumargi.in/api/sahitya/category/shri_ram_dhwani');
        $naneshvani = $response->successful() ? $response->json() : [];

        return view('activities.ram-dhwani', compact('naneshvani'));
    }

    public function ram_darshan()
    {
        $response = Http::get('https://website.sadhumargi.in/api/sahitya/category/ram_darshan');
        $naneshvani = $response->successful() ? $response->json() : [];

        return view('activities.ram-darshan', compact('naneshvani'));
    }
    public function samta_katha_mala()
    {
        $response = Http::get('https://website.sadhumargi.in/api/sahitya/category/samta_katha_mala');
        $naneshvani = $response->successful() ? $response->json() : [];

        return view('activities.samta-katha-mala', compact('naneshvani'));
    }

    public function other_sahitya()
    {
        $response = Http::get('https://website.sadhumargi.in/api/sahitya/category/any');
        $naneshvani = $response->successful() ? $response->json() : [];

        return view('activities.other_sahitya', compact('naneshvani'));
    }

    public function agam()
    {
        $response = Http::get('https://website.sadhumargi.in/api/sahitya/category/agam');
        $naneshvani = $response->successful() ? $response->json() : [];

        return view('activities.aagam_ahimsa_udaipur', compact('naneshvani'));
    }

    
}
