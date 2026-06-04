@extends('layouts.app')

@section('title', 'नानेशवाणी साहित्य | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
  <div class="relative text-center mt-1 mb-6">
    <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
    <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
      आचार्य श्री नानालाल जी म.सा. का प्रवचन साहित्य
    </h2>
  </div>

  {{-- 5 columns on large screens --}}
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 mt-8">
    @forelse ($naneshvani as $item)
      @php
        $name     = $item['name'] ?? 'अनाम प्रकाशन';
        $coverUrl = 'https://website.sadhumargi.in' . ($item['cover_photo'] ?? '');
        $isDrive  = ($item['file_type'] ?? '') === 'drive' && !empty($item['drive_link']);
        $pdfUrl   = !empty($item['pdf']) ? 'https://website.sadhumargi.in' . $item['pdf'] : null;
        $viewUrl  = $isDrive ? $item['drive_link'] : $pdfUrl;   // priority: drive -> pdf
        $label    = $isDrive ? 'Drive देखें/डाउनलोड' : 'PDF देखें/डाउनलोड';
      @endphp

      <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
        <!-- Image box: no crop, centered -->
        <div class="h-64 bg-white p-4 flex items-center justify-center">
          <img src="{{ $coverUrl }}" alt="{{ $name }}" class="max-h-full max-w-full object-contain" />
        </div>

        <div class="p-4 flex flex-col items-center gap-3">
          <h3 class="text-sm font-semibold text-gray-800 text-center">{{ $name }}</h3>

          @if($viewUrl)
            <a href="{{ $viewUrl }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-700 text-white rounded hover:bg-yellow-800 transition text-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 14a4 4 0 004 4h6a4 4 0 004-4V9a2 2 0 00-2-2h-1V6a3 3 0 10-6 0v1H7a2 2 0 00-2 2v5zm5-8a1 1 0 112 0v1H8V6z"/>
              </svg>
              {{ $label }}
            </a>
          @else
            <span class="text-xs text-gray-500">लिंक उपलब्ध नहीं है</span>
          @endif
        </div>
      </div>
    @empty
      <div class="col-span-2 sm:col-span-3 md:col-span-4 lg:col-span-5 text-center text-gray-500">
        कोई साहित्य उपलब्ध नहीं है।
      </div>
    @endforelse
  </div>
</div>
@endsection
