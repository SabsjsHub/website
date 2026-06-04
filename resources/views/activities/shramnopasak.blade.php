@extends('layouts.app')

@section('title', 'श्रमणोपासक | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
  <div class="relative text-center mt-1 mb-6">
    <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
    <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
      श्रमणोपासक
    </h2>
  </div>

  {{-- 2→3→4→5 columns --}}
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
    @forelse($data as $item)
      @php
        // Safe values
        $month = $item['month'] ?? '';
        $year  = $item['year'] ?? '';
        $name  = trim($month.' '.$year) ?: 'श्रमणोपासक';

        // Cover URL (handles both `/storage/...` and relative paths)
        $coverPath = $item['cover_photo'] ?? '';
        $coverIsStorage = \Illuminate\Support\Str::startsWith($coverPath, ['/storage', 'storage']);
        $coverUrl = \Illuminate\Support\Str::startsWith($coverPath, ['http://','https://'])
          ? $coverPath
          : 'https://website.sadhumargi.in' . ($coverIsStorage ? '' : '/storage/') . ltrim($coverPath, '/');

        // Drive vs PDF
        $isDrive = ($item['file_type'] ?? '') === 'drive' && !empty($item['drive_link']);
        $pdfPath = $item['pdf'] ?? null;
        $pdfIsStorage = $pdfPath ? \Illuminate\Support\Str::startsWith($pdfPath, ['/storage', 'storage']) : false;
        $pdfUrl  = $pdfPath
          ? (\Illuminate\Support\Str::startsWith($pdfPath, ['http://','https://'])
              ? $pdfPath
              : 'https://website.sadhumargi.in' . ($pdfIsStorage ? '' : '/storage/') . ltrim($pdfPath, '/'))
          : null;

        $viewUrl = $isDrive ? ($item['drive_link'] ?? null) : $pdfUrl;  // priority: Drive → PDF
        $label   = $isDrive ? 'Drive देखें/डाउनलोड' : 'PDF देखें/डाउनलोड';
      @endphp

      <div class="bg-white rounded-xl shadow-md overflow-hidden w-full flex flex-col">
        <!-- Image -->
        <div class="h-64 bg-white p-3 flex items-center justify-center">
          <img src="{{ $coverUrl }}" alt="{{ $name }}" class="max-h-full max-w-full object-contain" />
        </div>

        <!-- Text + Button -->
        <div class="p-4 text-center flex flex-col items-center gap-3">
          <h3 class="text-sm font-semibold text-gray-800">{{ $name }}</h3>

          @if($viewUrl)
            <a href="{{ $viewUrl }}" target="_blank" rel="noopener"
               class="inline-block px-5 py-2 bg-yellow-800 text-white rounded hover:bg-yellow-900 transition text-sm">
              {{ $label }}
            </a>
          @else
            <span class="text-xs text-gray-500">लिंक उपलब्ध नहीं है</span>
          @endif
        </div>
      </div>
    @empty
      <div class="col-span-2 sm:col-span-3 md:col-span-4 lg:col-span-5 text-center text-gray-500">
        कोई डेटा उपलब्ध नहीं है।
      </div>
    @endforelse
  </div>
</div>
@endsection
