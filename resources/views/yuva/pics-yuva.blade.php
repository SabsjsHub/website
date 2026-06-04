@extends('layouts.yuvaApp')

@section('title', 'फोटो गैलेरी | SABSJS-Yuva')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔰 Heading Section -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
            class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2
            class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            फोटो गैलेरी
        </h2>
    </div>

    <!-- 🖼 महिला समिति गैलरी -->
    <div class="mb-12 bg-blue-50 border-l-4 border-blue-500 p-6 rounded-md shadow">
        <h3 class="text-2xl font-bold text-blue-800 mb-6">📚 युवा संघ</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($deptC as $index => $event)
                @php
                    $eventName = $event['event_name'];
                    $photos = $event['photos'];
                    $galleryKey = 'deptC-' . $index;
                @endphp

                <div>
                    <h4 class="text-xl font-semibold text-blue-700 mb-2">🎊 {{ $eventName }}</h4>
                    <a href="{{ $photos[0]['url'] }}" class="glightbox" data-gallery="{{ $galleryKey }}" data-title="{{ $eventName }}">
                        <img src="{{ $photos[0]['url'] }}"
                             class="w-full h-56 object-cover rounded-lg shadow hover:scale-105 transition-transform duration-300"
                             alt="Event Image">
                    </a>
                    @foreach(array_slice($photos, 1) as $photo)
                        <a href="{{ $photo['url'] }}" class="glightbox hidden" data-gallery="{{ $galleryKey }}" data-title="{{ $eventName }}"></a>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
