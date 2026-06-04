@extends('layouts.app')

@section('title', 'राम-दर्शन | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
  <div class="relative text-center mt-1 mb-6">
    <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
    <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
      समता कथा माला
    </h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
    <!-- Left Panel: Image -->
    <div>
      <img src="{{ asset('img/high_edu/banner-13.jpg') }}" alt="समता कथा माला"
           class="w-full h-auto rounded-md shadow-md object-contain" />
    </div>

    <!-- Right Panel: Text -->
    <div class="bg-yellow-50 border border-yellow-200 rounded-md p-6 text-gray-800 leading-relaxed text-justify">
      <h3 class="text-xl font-semibold mb-4 text-yellow-800">समता कथा माला परिचय</h3>
      <p class="text-base sm:text-lg">
        महिमा मंडित स्व. आचार्य श्री नानेश के तत्वावधान मे जैन सिद्धांत विश्वकोष के लेखन का कार्य संपन्न हुआ था। इसमें कथानक के माध्यम से सुंदर उदाहरण प्रस्तुत किए गए थे जो अतयंत ही रोचक थे एवं बच्चों के लिए पठनीय व प्रेरणीय थे। विश्वकोष में से उन कथानकों को विभक्त कर अलग से कथाओं / कहानियों का संकलन किया गया जिसे समता कथा माला के नाम से अलंकृत किया गया। इस कथा माला में अब तक 1 से 15 तक की श्रृंखला प्रकाशित हो चुकी है।
      </p>
    </div>
  </div>

  {{-- 🔹 Cards: Drive vs PDF + 5 columns on large screens --}}
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 mt-8">
    @forelse ($naneshvani as $item)
      @php
        $name     = $item['name'] ?? 'अनाम प्रकाशन';
        $coverUrl = 'https://website.sadhumargi.in' . ($item['cover_photo'] ?? '');
        $isDrive  = ($item['file_type'] ?? '') === 'drive' && !empty($item['drive_link']);
        $pdfUrl   = !empty($item['pdf']) ? 'https://website.sadhumargi.in' . $item['pdf'] : null;
        $viewUrl  = $isDrive ? $item['drive_link'] : $pdfUrl;  // priority: drive → pdf
        $label    = $isDrive ? 'Drive देखें/डाउनलोड' : 'PDF देखें/डाउनलोड';
      @endphp

      <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
        <!-- Image: no-crop, centered -->
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
