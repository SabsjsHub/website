<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class KSMController extends Controller
{
        public function index()
        {
            $anchal = Http::get('https://website.sadhumargi.in/api/anchal');
            $ksmMembers = Http::get('https://website.sadhumargi.in/api/karyasamiti_sadasya');

            return view('KSM.index', [
                'anchal' => $anchal->successful() ? $anchal->json() : [],
                'ksmMembers' => $ksmMembers->successful() ? $ksmMembers->json() : [],
            ]);
        }

}
