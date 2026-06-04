@extends('layouts.app')

@section('title', 'समता भवन आचार संहिता | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
           समता भवन आचार संहिता
        </h2>
    </div>

    <!-- 📜 आचार संहिता इमेज -->
<div class="w-full px-4 sm:px-8 md:px-20 mt-8">
    <div class="rounded-lg overflow-hidden shadow-lg border border-yellow-200">
        <img 
            src="{{ asset('img/samta-bhawan/samata_achar_sanhita.jpg') }}" 
            alt="समता भवन आचार संहिता" 
            class="w-full h-auto object-contain"
        />
    </div>
</div>



    
</div>
@endsection
