@extends('layouts.app')

@section('title', 'आवेदन प्रपत्र | SABSJS')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10" x-data="{ tab: 'offline' }">

    <!-- Heading -->
    <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
            आवेदन प्रपत्र
        </h2>
    </div>

    <!-- ⚡ Segment Tabs -->
    <!-- ⚡ Segment Tabs -->
    <div class="flex justify-center mb-10">
        <div class="inline-flex rounded-md overflow-hidden shadow bg-black">
            <button @click="tab = 'offline'" :class="tab === 'offline'
                ? 'bg-white text-black shadow-md'
                : 'bg-black text-white hover:bg-gray-800'" class="px-6 py-3 text-base font-semibold tracking-wide transition-all duration-200">
                📝 ऑफलाइन फॉर्म
            </button>

            <button @click="tab = 'online'" :class="tab === 'online'
                ? 'bg-white text-black shadow-md'
                : 'bg-black text-white hover:bg-gray-800'" class="px-6 py-3 text-base font-semibold tracking-wide transition-all duration-200">
                🌐 ऑनलाइन फॉर्म
            </button>
        </div>
    </div>




    <!-- 📝 Offline Tab -->
    <!-- 📝 Offline Tab -->
    <div x-show="tab === 'offline'" x-transition x-cloak>
        <div class="space-y-4">
            @forelse($offlineForms as $category => $forms)
            @php $count = $forms->count(); @endphp

            <div x-data="{ open: true }" class="bg-white border border-gray-200 rounded-lg shadow-sm">
                <!-- Header -->
                <button @click="open = !open" class="w-full flex items-center justify-between gap-3 px-4 py-3 text-left">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-yellow-100 text-yellow-700">📁</span>
                        <h4 class="font-semibold text-gray-800">{{ $category }}</h4>
                        <span class="ml-2 inline-flex items-center rounded-full bg-gray-100 text-gray-700 text-xs px-2 py-0.5">
                            {{ $count }}
                        </span>
                    </div>
                    <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 text-gray-500 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 01.94 1.17l-4.2 3.33a.75.75 0 01-.94 0l-4.2-3.33a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- List -->
                <div x-show="open" x-collapse class="border-t border-gray-100">
                    @foreach($forms as $form)
                    <div class="flex flex-wrap items-center justify-between gap-3 px-4 py-2 hover:bg-gray-50">
                        <div class="flex items-center gap-2 min-w-0">
                            <span class="text-gray-500">📄</span>
                            
                                {{ $form['name'] }}
                            
                            <span class="ml-2 text-[10px] uppercase tracking-wide bg-red-100 text-red-700 px-2 py-0.5 rounded">PDF</span>
                        </div>

                        <div class="flex items-center gap-2">

                            <a href="{{ $form['download_url'] }}" download target="_blank" class="text-xs px-3 py-1 rounded bg-gray-900 text-white hover:bg-gray-800">Download</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @empty
            <div class="bg-white border border-gray-200 rounded-lg p-6 text-center text-gray-500">
                अभी कोई ऑफलाइन फॉर्म उपलब्ध नहीं है।
            </div>
            @endforelse
        </div>
    </div>



    <!-- 🌐 Online Tab -->
    <!-- 🌐 Online Tab -->
    <div x-show="tab === 'online'" x-transition x-cloak>
        <div class="space-y-4">
            @php
            // सिर्फ non-empty categories के लिए filter करें
            $nonEmptyOnlineForms = collect($onlineForms)->filter(fn($forms) => $forms->count() > 0);
            @endphp

            @forelse($nonEmptyOnlineForms as $category => $forms)
            @php $count = $forms->count(); @endphp

            <div x-data="{ open: true }" class="bg-white border border-gray-200 rounded-lg shadow-sm">
                <!-- Header -->
                <button @click="open = !open" class="w-full flex items-center justify-between gap-3 px-4 py-3 text-left">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-blue-100 text-blue-700">🗂️</span>
                        <h4 class="font-semibold text-gray-800">{{ $category }}</h4>
                        <span class="ml-2 inline-flex items-center rounded-full bg-gray-100 text-gray-700 text-xs px-2 py-0.5">
                            {{ $count }}
                        </span>
                    </div>
                    <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 text-gray-500 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 01.94 1.17l-4.2 3.33a.75.75 0 01-.94 0l-4.2-3.33a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- List -->
                <div x-show="open" x-collapse class="border-t border-gray-100">
                    @foreach($forms as $form)
                    <div class="flex flex-wrap items-center justify-between gap-3 px-4 py-2 hover:bg-gray-50">
                        <div class="flex items-center gap-2 min-w-0">
                            <span class="text-gray-500">🌐</span>
                            <a href="{{ $form['url'] }}" target="_blank" class="truncate text-blue-600 hover:underline font-medium">
                                {{ $form['name'] }}
                            </a>
                            <span class="ml-2 text-[10px] uppercase tracking-wide bg-blue-100 text-blue-700 px-2 py-0.5 rounded">Online</span>
                        </div>

                        <div class="flex items-center gap-2">
                            <a href="{{ $form['url'] }}" target="_blank" class="text-xs px-3 py-1 rounded bg-gray-900 text-white hover:bg-gray-800">Open</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @empty
            <div class="bg-white border border-gray-200 rounded-lg p-6 text-center text-gray-500">
                अभी कोई ऑनलाइन फॉर्म उपलब्ध नहीं है।
            </div>
            @endforelse
        </div>
    </div>






</div>
@endsection
