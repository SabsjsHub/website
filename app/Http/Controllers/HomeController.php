<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function index()
    {
        $cacheKey = 'home_page_data_v2';

        $data = cache()->remember($cacheKey, now()->addMinutes(30), function () {
            $keys = [
                'thought',
                'vihar',
                'news',
                'shramnopasak',
                'homepageBooks',
                'slides',
                'pst'
            ];

            // Run in parallel
            $responses = Http::pool(fn($pool) => [
                $pool->get('https://website.sadhumargi.in/api/latest-thought'),
                $pool->get('https://website.sadhumargi.in/api/vihar/latest'),
                $pool->get('https://website.sadhumargi.in/api/news'),
                $pool->get('https://website.sadhumargi.in/api/shramnopasak/latest'),
                $pool->get('https://website.sadhumargi.in/api/sahitya/homepage-books'),
                $pool->get('https://website.sadhumargi.in/api/home_slider'),
                $pool->get('https://website.sadhumargi.in/api/pst'),
            ]);

            // Combine keys with responses
            $responses = array_combine($keys, $responses);

            return [
                'thought' => $responses['thought']->json(),
                'vihar' => $responses['vihar']->json(),
                'news' => $responses['news']->json(),
                'shramnopasak' => $responses['shramnopasak']->successful() ? $responses['shramnopasak']->json()['data'] : null,
                'homepageBooks' => $responses['homepageBooks']->successful() ? $responses['homepageBooks']->json() : [],
                'slides' => $responses['slides']->successful() ? $responses['slides']->json() : [],
                'pst' => $responses['pst']->successful() ? $responses['pst']->json() : [],
            ];
        });

        // ✅ Process slides
        $slides = collect($data['slides'])->map(function ($item) {
            $path = $item['photo'] ?? '';
            $url = Str::startsWith($path, ['http://', 'https://'])
                ? $path
                : 'https://website.sadhumargi.in/' . ltrim($path, '/');

            return [
                'id' => $item['id'],
                'url' => $url,
                'alt' => 'Slide ' . $item['id'],
            ];
        });

        // ✅ Process PST - Filter by current session (2025-27)
        $pstMembers = collect($data['pst'])
            ->filter(function ($m) {
                return isset($m['session']) && $m['session'] === '2025-27';
            })
            ->map(function ($m) {
                $path = $m['photo'] ?? '';
                $photoUrl = Str::startsWith($path, ['http://', 'https://'])
                    ? $path
                    : 'https://website.sadhumargi.in/storage/' . ltrim($path, '/');

                return [
                    'id' => $m['id'],
                    'name' => $m['name'],
                    'post' => $m['post'],
                    'photo' => $photoUrl,
                ];
            });

        return view('home', [
            'thought' => $data['thought'],
            'vihar' => $data['vihar'],
            'news' => $data['news'],
            'shramnopasak' => $data['shramnopasak'],
            'homepageBooks' => $data['homepageBooks'],
            'slides' => $slides,
            'pstMembers' => $pstMembers,
        ]);
    }


}
