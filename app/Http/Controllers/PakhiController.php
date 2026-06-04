<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PakhiController extends Controller
{
    public function latest()
    {
        // 60 minutes cache ताकि हर रिक्वेस्ट पर API न लगे
        $pdfUrl = Cache::remember('pakhi_latest_pdf', 60, function () {
            $res = Http::get('https://website.sadhumargi.in/api/pakhi');

            if (!$res->successful()) {
                return null;
            }

            $data = collect($res->json() ?? [])
                ->sortByDesc('year')
                ->first();

            if (!$data || empty($data['pdf'])) {
                return null;
            }

            return Str::startsWith($data['pdf'], ['http://','https://'])
                ? $data['pdf']
                : 'https://website.sadhumargi.in' . $data['pdf']; // "/storage/..." को पूरा URL
        });

        if (!$pdfUrl) {
            abort(404, 'Pakhi PDF not found.');
        }

        // बाहरी PDF पर redirect
        return redirect()->away($pdfUrl);
    }
}
