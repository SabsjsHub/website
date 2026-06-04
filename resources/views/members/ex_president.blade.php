@extends('layouts.app')

@section('title', 'पूर्व अध्यक्षगण | SABSJS')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <!-- 🌟 Decorative Heading -->
    <div class="relative text-center my-8">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
             class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

            <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center
           text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl
           font-bold text-yellow-800 tracking-wide leading-tight">
  पूर्व अध्यक्षगण
</h2>
    </div>

    <!-- 🔲 Grid of Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($presidents as $president)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition duration-300 ease-in-out overflow-hidden">
                <div class="flex justify-center items-center h-[180px] bg-gray-50">
                    <img
                        src="https://website.sadhumargi.in/storage/{{ $president['photo'] }}"
                        alt="{{ $president['name'] }}"
                        class="h-full object-contain"
                    />
                </div>

                <div class="px-4 py-4 text-center">
                    <h3 class="text-base font-semibold text-gray-900">{{ $president['name'] }}</h3>
                    <p class="text-sm text-gray-600">{{ $president['place'] }}</p>
                    <p class="text-xs text-gray-500 mt-1">कार्यकाल: {{ $president['karaykal'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
