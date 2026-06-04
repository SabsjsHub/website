@extends('layouts.app')

@section('title', 'अन्य प्रकाशित साहित्य | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
  <div class="relative text-center mt-1 mb-6">
    <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
         class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

    <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
      अन्य प्रकाशित साहित्य
    </h2>
  </div>

  {{-- 2→3→4→5→6 columns responsively --}}
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-5 place-items-center">
    @forelse ($naneshvani as $item)
      @php
        $name      = $item['name'] ?? '';
        $coverPath = $item['cover_photo'] ?? '';
        $pdfPath   = $item['pdf'] ?? null;

        $cover = 'https://website.sadhumargi.in' . $coverPath;
        $isDrive = ($item['file_type'] ?? '') === 'drive' && !empty($item['drive_link']);
        $pdfUrl  = $pdfPath ? ('https://website.sadhumargi.in' . $pdfPath) : null;
        $viewUrl = $isDrive ? $item['drive_link'] : $pdfUrl;           // priority: drive → pdf
        $label   = $isDrive ? 'डाउनलोड' : 'डाउनलोड';
      @endphp

      <!-- w-fit => कार्ड की चौड़ाई इमेज के बराबर -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden text-center w-fit">
        <div class="bg-white p-4">
          <!-- h-64 + w-auto + object-contain => no crop, width auto -->
          <img src="{{ $cover }}" alt="{{ $name }}"
               class="h-64 w-auto max-w-full object-contain mx-auto" />
        </div>

        <div class="px-4 pb-4">
          <h3 class="text-md font-semibold text-gray-800 mb-3">{{ $name }}</h3>

          @if ($viewUrl)
            <a href="{{ $viewUrl }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-700 text-white rounded hover:bg-yellow-800 transition text-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 14a4 4 0 004 4h6a4 4 0 004-4V9a2 2 0 00-2-2h-1V6a3 3 0 10-6 0v1H7a2 2 0 00-2 2v5zm5-8a1 1 0 112 0v1H8V6z"/>
              </svg>
              {{ $label }}
            </a>
          @else
            <span class="text-sm text-gray-500">लिंक उपलब्ध नहीं है</span>
          @endif
        </div>
      </div>
    @empty
      <div class="col-span-2 sm:col-span-3 md:col-span-4 lg:col-span-5 xl:col-span-6 text-center text-gray-500">
        कोई साहित्य उपलब्ध नहीं है।
      </div>
    @endforelse
  </div>
</div>
@endsection
