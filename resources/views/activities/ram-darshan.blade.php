@extends('layouts.app')

@section('title', 'राम-दर्शन | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            राम-दर्शन
        </h2>
    </div>
    

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
    @forelse ($naneshvani as $item)
    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col items-center text-center">
        <img src="https://website.sadhumargi.in{{ $item['cover_photo'] }}" 
             alt="{{ $item['name'] }}" 
             class="w-full h-64 object-contain bg-white p-4" />

        <div class="p-4 flex-1 flex flex-col justify-between">
            <h3 class="text-md font-semibold text-gray-800 mb-3">{{ $item['name'] }}</h3>

            <a href="https://website.sadhumargi.in{{ $item['pdf'] }}" 
               target="_blank"
               class="inline-block px-4 py-2 bg-yellow-700 text-white rounded hover:bg-yellow-800 transition">
                📥 डाउनलोड करें
            </a>
        </div>
    </div>
    @empty
    <div class="col-span-3 text-center text-gray-500">
        कोई साहित्य उपलब्ध नहीं है।
    </div>
    @endforelse
</div>


    
</div>
@endsection
