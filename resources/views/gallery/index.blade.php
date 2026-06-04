@extends('layouts.app')

@section('title', 'Gallery | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10" x-data="{ tab: 'sangh' }">
    
    <!-- Heading -->
    <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
            class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
            फोटो गैलरी
        </h2>
    </div>

    <!-- Tab Bar -->
    <div class="flex justify-center mb-8 bg-gray-100 p-1 rounded-full shadow-inner max-w-md mx-auto">
        <button @click="tab = 'sangh'"
            :class="tab === 'sangh' ? 'bg-yellow-400 text-black font-bold shadow' : 'text-gray-600'"
            class="w-1/3 text-center py-2 rounded-full transition duration-300">
            📸 श्री संघ
        </button>
        <button @click="tab = 'mahila'"
            :class="tab === 'mahila' ? 'bg-blue-300 text-blue-900 font-bold shadow' : 'text-gray-600'"
            class="w-1/3 text-center py-2 rounded-full transition duration-300">
            🎭 महिला समिति
        </button>
        <button @click="tab = 'yuva'"
            :class="tab === 'yuva' ? 'bg-green-300 text-green-900 font-bold shadow' : 'text-gray-600'"
            class="w-1/3 text-center py-2 rounded-full transition duration-300">
            📚 युवा संघ
        </button>
    </div>

    <!-- श्री संघ -->
    <div x-show="tab === 'sangh'" x-transition class="mb-12 bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-md shadow">
        <h3 class="text-2xl font-bold text-yellow-800 mb-6">📸 श्री संघ</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($deptA as $index => $event)
                @php
                    $eventName = $event['event_name'];
                    $photos = $event['photos'];
                    $galleryKey = 'deptA-' . $index;
                @endphp

                <div>
                    <h4 class="text-xl font-semibold text-yellow-700 mb-2">🎉 {{ $eventName }}</h4>
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

    <!-- महिला समिति -->
    <div x-show="tab === 'mahila'" x-transition class="mb-12 bg-blue-50 border-l-4 border-blue-500 p-6 rounded-md shadow">
        <h3 class="text-2xl font-bold text-blue-800 mb-6">🎭 महिला समिति</h3>
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

    <!-- युवा संघ -->
    <div x-show="tab === 'yuva'" x-transition class="mb-12 bg-green-50 border-l-4 border-green-500 p-6 rounded-md shadow">
        <h3 class="text-2xl font-bold text-green-800 mb-6">📚 युवा संघ</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($deptB as $index => $event)
                @php
                    $eventName = $event['event_name'];
                    $photos = $event['photos'];
                    $galleryKey = 'deptB-' . $index;
                @endphp

                <div>
                    <h4 class="text-xl font-semibold text-green-700 mb-2">🪔 {{ $eventName }}</h4>
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
