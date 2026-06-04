<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;

class applicationFormController extends Controller
{
   
    
  public function index()
{
    $baseApi    = 'https://website.sadhumargi.in/api/aavedan-patra';
    $remoteBase = 'https://website.sadhumargi.in/storage/aavedan_patra/';

    $categories = [
        'sangh_membership'        => 'संघ सदस्यता आवेदन-पत्र',
        'samata_scholarship'      => 'समता छात्रवृत्ति आवेदन-पत्र',
        'vishisht_membership'     => 'अन्य विशिष्ट सदस्यता आवेदन-पत्र',
        'anya_membership'         => 'अन्य सदस्यता आवेदन-पत्र',
        'pathshala'               => 'पाठशाला आवेदन-पत्र',
        'shivir'                  => 'शिविर आवेदन-पत्र',
        'swadhyayee_registration' => 'स्वाध्यायी पंजीकरण आवेदन-पत्र',
        'ganesh_jain_hostel'      => 'गणेश जैन छात्रावास',
        'samata_trust'            => 'श्री समता जनकल्याण प्रन्यास',
        'acharya_shrilal_yojana'  => 'पूज्य आचार्य श्री श्रीलाल उच्च शिक्षा योजना आवेदन-पत्र',
        'acharya_nanesh_award'    => 'आचार्य श्री नानेश समता पुरस्कार हेतु प्रविष्टियाँ आमंत्रित',
        'champalal_award'         => 'सेठ श्री चम्पालाल सांड स्मृति उच्च प्रशासनिक पुरस्कार',
        'pradeep_rampuria_award'  => 'स्व. श्री प्रदीप कुमार रामपुरिया स्मृति साहित्य पुरस्कार प्रतियोगिता आवेदन प्रपत्र',
        'exam'                    => 'परीक्षा आवेदन-पत्र',
        'other'                   => 'अन्य आवेदन-पत्र',
        'report'                  => 'प्रतिवेद',
    ];

    // ✅ Cache only the JSON content, not the Response objects
    $cachedData = cache()->remember('application_forms_data_v1', now()->addMinutes(60), function () use ($baseApi, $categories) {
        $responses = Http::pool(fn ($pool) =>
            collect($categories)->map(fn ($title, $slug) =>
                $pool->as($slug)->get("$baseApi/$slug")
            )
        );

        // Extract only JSON content to make it cacheable
        return collect($categories)->mapWithKeys(function ($title, $slug) use ($responses) {
            $response = $responses[$slug] ?? null;
            return [$slug => ($response && $response->successful()) ? $response->json() : []];
        })->toArray();
    });

    // ✅ Now decorate and categorize
    $offlineForms = [];
    $onlineForms  = [];

    foreach ($categories as $slug => $title) {
        $forms = collect($cachedData[$slug] ?? []);

        $forms = $forms->map(function ($item) use ($remoteBase) {
            $isAbsolute = Str::startsWith($item['file'], ['http://', 'https://']);
            $item['url'] = $isAbsolute ? $item['file'] : $remoteBase . $item['file'];
            $item['download_url'] = $isAbsolute
                ? $item['url']
                : route('forms.download', ['filename' => $item['file']]);
            return $item;
        })->sortBy('preference')->values();

        $offlineForms[$title] = $forms->where('file_type', 'pdf')->values();
        $onlineForms[$title]  = $forms->where('file_type', '!=', 'pdf')->values();
    }

    return view('application-form.index', compact('offlineForms', 'onlineForms'));
}



    // 🔽 यह method remote PDF को stream कर के forced download कराता है
    public function proxyDownload(string $filename): StreamedResponse
    {
        $remote = 'https://website.sadhumargi.in/storage/aavedan_patra/' . $filename;

        // stream GET (कुछ servers HEAD block करते हैं)
        $resp = Http::withOptions(['stream' => true])->get($remote);
        abort_unless($resp->successful(), 404, 'File not found on remote');

        $downloadName = basename($filename);

        return response()->stream(function () use ($resp) {
            $body = $resp->toPsrResponse()->getBody();
            while (! $body->eof()) {
                echo $body->read(8192);
                flush();
            }
        }, 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="'.$downloadName.'"',
            'Cache-Control'       => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma'              => 'no-cache',
            'X-Accel-Buffering'   => 'no',
        ]);
    }
}
