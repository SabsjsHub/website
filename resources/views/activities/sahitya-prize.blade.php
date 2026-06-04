@extends('layouts.app')

@section('title', 'साहित्य पुरस्कार | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            साहित्य पुरस्कार
        </h2>
    </div>
</div>

<!-- 🌟 Full Width Panel -->
<div class="w-full bg-yellow-100 py-10 px-6 sm:px-10 lg:px-20">
    <div class="max-w-6xl mx-auto">
        <h3 class="text-2xl sm:text-3xl font-bold text-yellow-800 mb-4">परिचय</h3>
        <p class="text-base sm:text-lg text-gray-800 leading-relaxed">
           त्साहित्य प्रकाशन को प्रोत्साहित करने हेतु संघ द्वारा दो विशिष्ट पुरस्कार स्व. प्रदीप कुमार रामुपरिया स्मृति साहित्य पुरस्कार एवं स्व. चम्पालाल सांड स्मृति साहित्य पुरस्कार स्थापित किये गये हैं। यह दोनों पुरस्कार संघ अधिवेशन अथवा विशेष अवसरों पर प्रदान किये जाते है। प्रत्येक में प्रशस्ति पत्र सहित 51,000/- की राशि प्रदान की जाती है।<br>

            
        </p>
    </div>
     <!-- 🔘 नीचे एक बटन -->
    <div class="text-center mt-8">
        <a href="#" class="inline-block px-4 py-2 border border-red-500 text-red-600 hover:bg-red-50 rounded transition">
            विविध सूचना
        </a>
    </div>
</div>

<!-- 🌟 Acharya Nanesh Award Layout -->
<div class="max-w-6xl mx-auto px-4 py-10">
    <h3 class="text-center text-xl sm:text-2xl font-bold text-red-700 mb-6 border-t-2 border-red-600 w-fit mx-auto pt-4">
        स्व. प्रदीप कुमार रामुपरिया स्मृति साहित्य पुरस्कार 2023
    </h3>

    <div class="flex flex-col md:flex-row gap-8 items-start justify-between">
        <!-- 📸 Left: Image -->
        <div class="w-full md:w-1/2 border-2 border-red-600 rounded-md overflow-hidden">
            <img 
                src="{{ asset('img/prize/sahitya_prize1.jpg') }}" 
                alt="Acharya Nanesh Award Image"
                class="w-full h-[400px] object-contain"
            />
        </div>

        <!-- 📑 Right: Two stacked panels -->
        <div class="w-full md:w-1/2 flex flex-col gap-6">
            <!-- Panel 1 -->
            <div class="bg-white shadow-md rounded-lg p-5">
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                  श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ द्वारा विशिष्ट आगमिक साहित्य लेखन एवं विद्वत्तापूर्ण साधना हेतु प्रदान किए जाने वाले <b>‘स्व. प्रदीप कुमार रामुपरिया स्मृति साहित्य पुरस्कार’</b> के लिये चयन समिति ने <b> श्रीमती कंचन जी कांकरिया </b>का चयन किया है। उन्हें यह प्रतिष्ठित सम्मान <b>15 अक्टूबर 2023 को नीमच</b> में आयोजित संघ के वार्षिक अधिवेशन के पावन अवसर पर प्रदान किया गया। श्रीमती कंचन कांकरिया जी ने श्रीमद्भगवतीसूत्र प्रश्नमाला जैसे वृहद् एवं गहन ग्रंथों की प्रस्तुति द्वारा जैन आगमिक विरासत को समकालीन समाज तक पहुँचाने में अद्वितीय योगदान दिया है। उनके द्वारा की गई व्याख्या-परंपरा, चिंतनशील शोध तथा शिक्षण-सेवा ने हजारों साधकों को सही ज्ञान, सही दर्शन और सही आचरण के पथ पर प्रेरित किया है। साधुमार्गी परंपरा के आध्यात्मिक मूल्यों के संरक्षण एवं प्रसार के प्रति उनका समर्पण उन्हें इस विशिष्ट सम्मान के योग्य बनाता है। सम्पूर्ण साधुमार्गी परिवार की ओर से श्रीमती कंचन कांकरिया जी एवं उनके परिवार को हृदयपूर्वक बधाई एवं अभिनंदन।
                </p>
            </div>

           
        </div>
    </div>

   
</div>



@endsection
