<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{
    public function index()
    {
        try {
            $deptA = Http::get('https://website.sadhumargi.in/api/photo-gallery/fetch/sangh')->json();
            $deptB = Http::get('https://website.sadhumargi.in/api/photo-gallery/fetch/yuva')->json();
            $deptC = Http::get('https://website.sadhumargi.in/api/photo-gallery/fetch/mahila')->json();
        } catch (\Exception $e) {
            Log::error('Gallery API fetch failed: ' . $e->getMessage());

            $deptA = $deptB = $deptC = [];
        }

        return view('gallery.index', compact('deptA', 'deptB', 'deptC'));
    }

    public function pics_ms()
    {
        try {

            $deptB = Http::get('https://website.sadhumargi.in/api/photo-gallery/fetch/mahila')->json();
        } catch (\Exception $e) {
            Log::error('Gallery API fetch failed: ' . $e->getMessage());

            $deptB = [];
        }

        return view('mahila.pics-ms', compact('deptB'));
    }
    
    public function pics_yuva()
    {
        try {

            $deptC = Http::get('https://website.sadhumargi.in/api/photo-gallery/fetch/yuva')->json();
        } catch (\Exception $e) {
            Log::error('Gallery API fetch failed: ' . $e->getMessage());

            $deptB = [];
        }

        return view('yuva.pics-yuva', compact('deptC'));
    }
}
