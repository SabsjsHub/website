@extends('layouts.app')

@section('title', 'संघ सदस्यता अभियान | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            संघ सदस्यता अभियान
        </h2>
    </div>
</div>

<!-- 🌟 Full Width Panel -->
<div class="w-full bg-yellow-100 py-10 px-6 sm:px-10 lg:px-20">
    <div class="max-w-6xl mx-auto">
        <h3 class="text-2xl sm:text-3xl font-bold text-yellow-800 mb-4">संघ सदस्यता से जुड़ें</h3>
        <p class="text-base sm:text-lg text-gray-800 leading-relaxed">
            संघ प्रभावक एवं शिखर सदस्यता अभियान के साथ ही संघ के आजीवन सदस्य, साहित्य सदस्य एवं श्रमणोपासक सदस्य आदि में उत्तरोत्तर अभिवृद्धि हो रही है ।
        </p>
    </div>
</div>
@endsection
