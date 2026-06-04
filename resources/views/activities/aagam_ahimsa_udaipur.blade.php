@extends('layouts.app')

@section('title', 'उच्च शिक्षा योजना | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
  <div class="relative text-center mt-1 mb-6">
    <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
    <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
      आगम, अहिंसा-समता एवं प्राकृत संस्थान
    </h2>
  </div>

  <!-- 💡 Full Width Panel with Introduction -->
  <div class="bg-yellow-50 border border-yellow-200 rounded-lg shadow-sm p-6 text-gray-800 leading-relaxed">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <img src="{{ asset('img/high_edu/aagam_ahinsa_img.jpg') }}"
             alt="Acharya Shri Uchch Shiksha Yojna Logo"
             class="w-40 h-auto md:w-48 rounded" />
      </div>

      <!-- Description Text -->
      <p class="text-base sm:text-lg text-justify">
        समता विभूति आचार्यश्री नानेश ने अपने 1981 उदयपुर के वर्षावास में सम्यक् ज्ञान की अभिवृद्धि हेतु प्रभावशाली उद्बोधन दिया जिसका श्रोताओं पर व्यापक प्रभाव पड़ा। फलतः विश्वविद्यालयों के विद्वानों तथा उदयपुर श्रीसंघ ने जैन विद्या के अध्ययन के विकास हेतु एक योजना तैयार की। जिसके फलश्रुति के रूप में आगम, अहिंसा-समता एवं प्राकृत संस्थान की स्थापना हुई। संस्थान की प्रमुख प्रवृत्तियों में प्राकृत एवं जैन विद्या विषयक संगोष्ठियों का आयोजन एवं संगोष्ठियों में पठित शोद्यालेखों का प्रकाशन, प्राकृत एवं जैन विद्या विषयक व्याख्यानों का आयोजन, महत्वपूर्ण ग्रंथों का अनुवाद, संपादन एवं प्रकाशन, प्राचीन हस्तलिखित पाण्डुलिपियों का संग्रहण एवं संरक्षण, प्राचीन एवं आधुनतन ग्रंथों के समृद्ध पुस्तकालय का संचालन, चयनित शोद्य प्रबंधों का प्रकाशन हो रहा है। संस्था द्वारा अभी तक 32 पुस्तकों का प्रकाशन किया जा चुका है जिसे विद्वत जगत् ने मुक्त कंठ से सराहा है। संस्थान के समृद्ध पुस्तकालय में जैन, बौद्ध एवं वैदिक संस्कृति संबधित प्राचीन एवं आधुनिक लगभग 5,000 पुस्तकों का संग्रह है। संस्थान के संग्रह कोष में 1500 प्राचीन हस्तलिखित पाण्डुलिपियां जो कि विक्रम संवत् 1600 से 1900 के मध्य की हैं, व्यवस्थित रूप से संग्रहित हैं।
      </p>
    </div>
  </div>

  {{-- 🔹 Cards: Drive vs PDF + 5 columns on large screens --}}
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 mt-8">
    @forelse ($naneshvani as $item)
      @php
        $name     = $item['name'] ?? '';
        $coverUrl = 'https://website.sadhumargi.in' . ($item['cover_photo'] ?? '');
        $isDrive  = ($item['file_type'] ?? '') === 'drive' && !empty($item['drive_link']);
        $pdfUrl   = !empty($item['pdf']) ? 'https://website.sadhumargi.in' . $item['pdf'] : null;
        $viewUrl  = $isDrive ? $item['drive_link'] : $pdfUrl;  // priority: drive → pdf
        $label    = $isDrive ? 'डाउनलोड' : 'डाउनलोड';
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
