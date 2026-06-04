<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class CurrentCommitee extends Controller
{
    public function index()
    {
        $presidents           = Http::get('https://website.sadhumargi.in/api/pst')->json();
        $rawVicePresidents    = Http::get('https://website.sadhumargi.in/api/vp-sec')->json();
        $vicePresidents       = collect($rawVicePresidents)->collapse()->all();
        $pravartiSanyojaks    = Http::get('https://website.sadhumargi.in/api/pravarti-sanyojak')->json();
        $itCellMembers        = Http::get('https://website.sadhumargi.in/api/it-cell')->json();
        $antrastriyaMembers   = Http::get('https://website.sadhumargi.in/api/sanyojan-mandal-antrastriya-sadasyata')->json();
        $samtaJanKalyanMembers= Http::get('https://website.sadhumargi.in/api/samta-jan-kalyan-pranayash')->json();

        // ✅ सही API + fallback (अगर कभी route बदल दे)
        $candidateUrls = [
            'https://website.sadhumargi.in/api/sthayi-sampati',
            'https://website.sadhumargi.in/api/sthayi_sampati_sanwardhan_samiti',
        ];

        $sthayiSampatiMembers = collect();
        foreach ($candidateUrls as $url) {
            $res = Http::timeout(8)->get($url);
            if ($res->successful() && is_array($res->json())) {
                $sthayiSampatiMembers = collect($res->json())->map(function ($item) {
                    // full photo URL
                    $photo = $item['photo'] ?? '';
                    $photoUrl = Str::startsWith($photo, ['http://','https://'])
                        ? $photo
                        : 'https://website.sadhumargi.in' . (Str::startsWith($photo, '/') ? '' : '/') . $photo;

                    return [
                        'id'     => $item['id'] ?? null,
                        'name'   => $item['name'] ?? '',
                        'post'   => $item['post'] ?? '',
                        'city'   => $item['city'] ?? '',
                        'mobile' => $item['mobile_number'] ?? ($item['mobile'] ?? ''),
                        'photo'  => $photoUrl,
                    ];
                })->values();
                break;
            }
        }

        return view('current-commitee.index', compact(
            'presidents',
            'vicePresidents',
            'pravartiSanyojaks',
            'itCellMembers',
            'antrastriyaMembers',
            'samtaJanKalyanMembers',
            'sthayiSampatiMembers'
        ));
    }
}
