@extends('layouts.app')

@section('title', 'नानेश चिकित्सालय | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
           नानेश चिकित्सालय, रतलाम
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
        <!-- Left Panel: Image -->
        <div>
            <img src="{{ asset('img/high_edu/nanesh-chiktsalay-1024x683-1.jpg') }}" alt="समता कथा माला" class="w-full h-auto rounded-md shadow-md object-contain" />
        </div>

        <!-- Right Panel: Text -->
        <div class="bg-yellow-50 border border-yellow-200 rounded-md p-6 text-gray-800 leading-relaxed text-justify">
            <h3 class="text-xl font-semibold mb-4 text-yellow-800">नानेश चिकित्सालय परिचय</h3>
            <p class="text-base sm:text-lg">
                नानेश चिकित्सलाय, रतलाम : संघ के चिकित्सा एवं आरोग्य प्रवृत्तियों की शृंखला में नानेश चिकित्सालय, रतलाम एक अभिनव कड़ी है। धर्मपाल बंधुओं एवं अन्य जनों के सेवार्थ तथा उपचारार्थ नानेश निकेतन परिसर रतलाम में नानेश चिकित्सालय का शुभारंभ 10 जनवरी 2016 को किया गया। यह सेवा प्रकल्प तात्कालिक सफलता व जनप्रियता हासिल कर चुका है। उपचार के साथ साथ निःशुल्क औषध की भी सेवा मरीजों का उपलब्ध कराई जाती है।
            </p>
        </div>
    </div>




</div>
@endsection
