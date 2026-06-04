@extends('layouts.app')

@section('title', 'पदाधिकारी प्रशिक्षण कार्यशाला | SABSJS')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">



    <div class="relative text-center my-8">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            पदाधिकारी प्रशिक्षण कार्यशाला
        </h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($workshop as $item)
        <div class="bg-white border border-gray-200 shadow-md rounded-xl p-5 flex flex-col justify-between transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">


            {{-- Title --}}
            <h3 class="text-lg text-center font-semibold text-gray-800 mb-4">
                {{ $item['name'] }}
            </h3>

            {{-- Download Button --}}
            <div class="mt-auto flex justify-center">
                <a href="https://website.sadhumargi.in/storage/{{ $item['pdf'] }}" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-md transition">
                    Download PDF
                </a>
            </div>
        </div>
        @endforeach
    </div>


</div>
@endsection
