@extends('layouts.app')

@section('title', 'उत्क्रान्ति अभियान | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div x-data="textSlider()" x-init="start()" class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">

        <!-- Left Column -->
        <div class="relative text-center md:mt-6">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
            <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                उत्क्रान्ति अभियान
            </h2>
        </div>

        <!-- Right Column: Text Slider -->
        <div class="md:col-span-2 bg-yellow-50 border border-yellow-200 rounded-lg shadow-sm px-6 py-8 text-gray-800 relative min-h-[160px] flex items-center justify-center text-center overflow-hidden mt-6 md:mt-6">


            <!-- Slider Wrapper with Smooth Transition -->
            <div class="relative w-full h-full">
                <template x-for="(message, i) in messages" :key="i">
                    <div x-show="index === i" x-transition:enter="transition-opacity ease-in-out duration-700" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in-out duration-700" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 flex items-center justify-center px-4">
                        <p class="text-lg sm:text-xl font-semibold leading-relaxed" x-text="message"></p>
                    </div>
                </template>
            </div>

        </div>

    </div>
</div>
<div class="max-w-6xl mx-auto mt-10 px-4">
    <div class="flex flex-col md:flex-row gap-8">

        <!-- Left Column -->
        <div class="w-full md:w-[70%] bg-white shadow-md rounded-lg p-6 text-justify">
            <!-- Heading -->
            <h3 class="text-xl sm:text-2xl font-bold text-red-600 mb-4 leading-snug bg-yellow-100 px-4 py-2 rounded">
                परमपूज्य रत्नत्रय के महान आराधक परमगम रहस्यज्ञाता श्रीमद् जैनाचार्य 1008 श्री रामलाल जी म. सा. द्वारा प्रदत्त उत्क्रान्ति देशणा
            </h3>


            <!-- Paragraph -->
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                पूरी दुनिया का सुधार हो, पूरे जैन समाज का सुधार हो, यह चाहते हैं, पर यह हमारे बस की बात शायद न हो। हम स्वयं को तो सुधार ही सकते हैं। यह तो हमारे बस की बात है। इसलिए अगर सुधार लाना है तो पहले घर से शुरू करो। घर कौनसा है? हमारा घर साधुमार्गी जैन संघ है। वह संघ जिसमें हमने साँसें ली हैं, ले रहे हैं। इसी में पहली बार आँखें खोली, इसका हमारे ऊपर बहुत उपकार है। इन उपकारों का वर्णन करें तो हम कभी भी इसके ऋण से उऋण नहीं हो सकते। संघ का हर सदस्य कम से कम यह सोचे कि मेरे निमित्त से साधुमार्गी संघ पर कोई अंगुली नहीं उठावे या ऐसा निर्देश नहीं करे कि यह है साधुमार्गी। निर्देश तब नहीं होगा जब दुनिया की सारी अच्छाई हमारे में होगी। लोग कहें की संघ हो तो साधुमार्गी संघ जैसा। इस प्रकार का हम लक्ष्य बनायें और संघ को ऊंचाइयों पर ले जाएँ।
            </p>
        </div>

        <!-- Right Column -->
        <div class="w-full md:w-[30%] flex flex-col gap-4 items-center">
            <!-- Video Box -->
            <div class="relative w-full" style="padding-top: 56.25%;">
                <iframe class="absolute top-0 left-0 w-full h-full rounded-md" src="https://www.youtube.com/embed/oLgW3Y2EoUo?rel=0&modestbranding=1&autohide=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>




            <!-- Buttons -->
            <a href="{{asset('img/utkranti/Utkranti-Form-Ram-Guru-Chalisa-1-converted-compressed.pdf')}}" class="w-full text-center bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded shadow transition" download>
                📥 <span>उत्क्रांति आवेदन-पत्र</span>
            </a>
            <a href="{{asset('img/utkranti/utkrantibooknew2019.pdf')}}" class="w-full text-center bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded shadow transition">
                 📥<span>उत्क्रांति मार्गदर्शिका</span>
            </a>
        </div>
    </div>

</div>

@php
$sliderItems = [
['img' => asset('img/utkranti/10.jpg'), 'text' => 'कांकरोली (राजसमंद, मेवाड़) CA दीपेश का मंगल परिणय उत्सव...'],
['img' => asset('img/utkranti/11.jpg'), 'text' => 'बांसवाड़ा निवासी आयुषी के साथ 30 नवम्बर को सुसम्पन्न हुआ।'],
['img' => asset('img/utkranti/5.jpg'), 'text' => 'जयपुर में सम्पन्न हुआ एक और उत्क्रान्ति परिणय समारोह।'],
];
@endphp


<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="flex flex-col md:flex-row gap-6 items-start">

        <!-- 🖼️ LEFT SIDE: Slider -->
        <div x-data='{
            slides: @json($sliderItems),
            currentIndex: 0,
            start() {
                setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.slides.length;
                }, 5000);
            }
        }' x-init="start()" class="w-full md:w-3/4">
            <div class="relative w-full h-[260px] overflow-hidden rounded-lg shadow-lg bg-white">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="currentIndex === index" x-transition:enter="transition duration-700 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-500 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak class="absolute inset-0 w-full h-full flex flex-col md:flex-row items-center gap-6 p-4">

                        <!-- Image -->
                        <div class="w-[200px] h-[200px] sm:w-[240px] sm:h-[240px] shrink-0 flex items-center justify-center overflow-hidden rounded shadow">
                            <img :src="slide.img" alt="Slider Image" class="w-full h-full object-cover" loading="lazy" />
                        </div>

                        <!-- Text -->
                        <div class="text-left flex-1">
                            <p class="text-gray-800 text-base md:text-lg font-medium" x-text="slide.text"></p>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Dots -->
            <div class="flex justify-center mt-4 space-x-2">
                <template x-for="(slide, index) in slides" :key="'dot-'+index">
                    <button @click="currentIndex = index" :class="{
                        'bg-yellow-500 ring-2 ring-yellow-600 scale-110': currentIndex === index,
                        'bg-gray-300': currentIndex !== index
                    }" class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none" aria-label="Slider dot">
                    </button>
                </template>
            </div>
        </div>

        <!-- 📥 RIGHT SIDE: Download Buttons -->
        <div class="w-full md:w-1/4 flex flex-col gap-4 mt-6 md:mt-0">
            <a href="{{ asset('img/utkranti/Utkranti-Karyakrama-Form-New.pdf') }}" class="text-center bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow transition" download>
                📥 <span>उत्क्रांति कार्यक्रम फॉर्म</span>
            </a>
            <a href="{{asset('img/utkranti/Utkranti-gram-form.pdf')}}" class="text-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow transition" download>
                📥<span>उत्क्रांति ग्राम फॉर्म</span>
            </a>
            <a href="{{asset('img/utkranti/All-Utkranti-Gram-citywise-list.pdf')}}" class="text-center bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded shadow transition" download>
                   📥<span>उत्क्रांति ग्राम अंचलानुसार लिस्ट</span> 
            </a>
            <a href="{{ asset('img/utkranti/All-Utkranti-Gram-Till-Date.pdf') }}" class="flex items-center justify-center gap-2 bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded shadow transition" download>
                📥
                <span>उत्क्रांति ग्राम लिस्ट</span>
            </a>
        </div>

    </div>
</div>





@endsection

<script>
    function textSlider() {
        return {
            index: 0
            , messages: [
                'उत्क्रांति घर-घर आयेगी। कुरीतियाँ मिट जाएँगी।।'
                , 'जन-जन की है आवाज़। रूढ़ि-मुक्त बने समाज।।'
                , 'सस्ते हों सामूहिक भोज। दिन में हों सामूहिक भोज।।'
                , 'ना आडम्बर, ना ही प्रदर्शन। सादगीमय हो जीवन-दर्शन।।'
            ]
            , start() {
                setInterval(() => {
                    this.index = (this.index + 1) % this.messages.length;
                }, 5000);
            }
        }
    }

</script>
