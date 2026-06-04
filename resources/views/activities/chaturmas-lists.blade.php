@extends('layouts.app')

@section('title', 'चातुर्मास सूचियां | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            चातुर्मास सूचियां
        </h2>
    </div>
</div>

<!-- 🌟 Full Width Panel -->
<div class="w-full bg-yellow-100 py-10 px-6 sm:px-10 lg:px-20">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-8">

        <!-- 📸 Left Side: Image -->
        <div class="w-full md:w-1/2 flex justify-center items-center">
            <img src="{{ asset('img/chaturmas/chaturmas_banner.jpeg') }}" alt="चातुर्मास के प्रमुख सूत्र" class="rounded-lg shadow-lg max-w-full h-auto" />
        </div>

        
        <!-- 📂 Right Side: Year Cards -->
        <div class="w-full md:w-1/2">
            <h3 class="text-2xl sm:text-3xl font-bold text-yellow-800 mb-4">चातुर्मास सूचियां</h3>

            <div class="space-y-4">
    @foreach ($chaturmas as $item)
        <a href="{{ $item['pdf_url'] }}"
           download target="_blank"
           class="flex items-center justify-between bg-white hover:bg-yellow-50 border border-yellow-300 p-4 rounded-lg shadow transition duration-300"
        >
            <span class="text-lg font-semibold text-yellow-800">
                चातुर्मास सूची {{ $item['year'] }}
            </span>
            <i class="fas fa-download text-yellow-700 text-xl"></i>
        </a>
    @endforeach
</div>

        </div>


    </div>
</div>

@endsection
