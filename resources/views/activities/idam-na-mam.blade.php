@extends('layouts.app')

@section('title', 'इदं न मम | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            इदं न मम (यह मेरा नहीं हैं)
        </h2>
    </div>
</div>

<!-- 🌟 Full Width Panel -->
<div x-data="{ showModal: false }" class="w-full bg-yellow-100 py-10 px-6 sm:px-10 lg:px-20">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start gap-10">

        <!-- 📄 Text Block -->
        <div class="md:w-2/3">
            <h3 class="text-2xl sm:text-3xl font-bold text-yellow-800 mb-4">इदं न मम से जुड़ें</h3>
            <p class="text-base sm:text-lg text-gray-800 leading-relaxed">
                श्री अ.भ.सा. जैन संघ की विभिन्न प्रवृत्तियों के सुचारु सञ्चालन हेतु एक अभिनव प्रतिबद्धता की मिसाल एवं अर्थ सौजन्य का माध्यम प्रस्तावित हुआ है। दानदाताओं ने अपनी आय का निर्धारित भाग आजीवन नियमित रूप से संघ को समर्पित करने का संकल्प लिया है । इस समर्पण भाव की अभिव्यक्ति को ‘इदं न मम’ (यह मेरा नहीं हैं) के रूप में साकार किया गया है। यह उपक्रम अक्टूबर 2015 को संघ समर्पणा महोत्सव के शुभ दिन प्रारम्भ किया गया।
            </p>
        </div>

        <!-- 🖼️ Image Block -->
        <div class="md:w-1/3 flex justify-center">
    <img
        src="{{ asset('img/idam/idam_logo.jpeg') }}"
        alt="संघ समर्पण"
        @click="showModal = true"
        class="w-[200px] h-[200px] object-cover cursor-pointer rounded-lg shadow-lg hover:scale-105 transition-transform duration-300"
    />
</div>


        <!-- 🔍 Image Modal -->
        <div x-show="showModal" x-transition x-cloak class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">
    <div class="relative w-[80%] max-w-md p-4 bg-transparent">
        <img
            src="{{ asset('img/idam/idam_logo.jpeg') }}"
            alt="संघ समर्पण"
            class="w-full h-auto rounded-lg shadow-2xl"
        />
        <button
            @click="showModal = false"
            class="absolute top-3 -right-5 bg-yellow-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-lg hover:bg-yellow-600 transition"
            aria-label="Close modal"
        >
            &times;
        </button>
    </div>
</div>

    </div>
</div>

@endsection
