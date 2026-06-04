@extends('layouts.app')

@section('title', 'वीर सेवा समिति | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
             class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            वीर सेवा समिति
        </h2>
    </div>

    <!-- 📦 Two Panel Section -->
    <div class="flex flex-col md:flex-row gap-8">
        
        <!-- 📝 Left Panel -->
        <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl sm:text-2xl font-bold text-yellow-800 mb-4">परिचय</h3>
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ मानव कल्याण, समाजोत्थान, आध्यात्मिक विकास, संस्कार जागरण, जैन दर्शन प्रचार-प्रसार एवं जीव दया जैसे उदात्त उद्देश्यों एवं आदर्शों से उत्प्रेरित अनेक सेवा प्रकल्पों का संचालन करता आ रहा है। इसी शृंखला में एक विशिष्ट उपक्रम है- वीर सेवा समिति। वीर सेवा समिति योजना का शुभारम्भ वर्ष 2014 में बेंगलुरु में हुआ। वीर परिवार संघ की आधारशिला है। धन्य हैं वे वीर परिवार जहां ‘वीर’ जन्म लेते हैं और जीवनपर्यन्त सर्वप्रकार की हिंसा से विरत रहते हुए अपनी तप एवं अध्यात्म साधना से चतुर्विध संघ को ऊर्ध्वगामी बनाते हैं।
            </p>
        </div>

        <!-- 📋 Right Panel -->
        <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl sm:text-2xl font-bold text-yellow-800 mb-4">समिति का लक्ष्य</h3>
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                इस योजना का मुख्य लक्ष्य है वीर परिवार की सेवा, सुरक्षा, सुश्रूषा में संघ अपने दायित्व का निर्वहन करे। वीर परिवार से सम्पर्क कर उनके सामाजिक एवं व्यावहारिक समस्याओं का गंभीरतापूर्वक विचार कर समाधान करे। साधुमार्गी संघ के वात्सल्य से अभिभूत होकर वीर परिवार को गौरव की अनुभूति हो इस दिशा में प्रयासरत रहना इस समिति का प्रमुख दायित्व है। वीर सेवा समिति द्वारा वीर परिवार के सामाजिक व आर्थिक विकास हेतु बिना ब्याज के ऋण सुविधा दी जाती है।
            </p>
        </div>

    </div>
</div>
@endsection
