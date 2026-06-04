@extends('layouts.app')

@section('title', 'मुखपृष्ठ | SABSJS')

@section('content')

    <!-- 🔄 New Layout: Image Slider on Top, Two Panels Below -->
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <!-- 🖼️ Full Width Image Slider -->
        <div class="w-full">
            <div class="bg-white rounded-lg shadow-md h-[240px] sm:h-[320px] md:h-[400px] relative overflow-hidden">
                <div class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        @foreach($slides as $s)
                            <div class="swiper-slide flex items-center justify-center bg-gray-100">
                                <img src="{{ $s['url'] }}" alt="{{ $s['alt'] }}" class="max-h-full h-full w-auto object-contain"
                                    loading="lazy" decoding="async" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next !right-2 !text-gray-700 hover:!text-orange-600"></div>
                    <div class="swiper-button-prev !left-2 !text-gray-700 hover:!text-orange-600"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!-- 📺 YouTube + 🧾 संघ परिचय -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- 📺 YouTube Video Link Box -->
            <!-- 📺 Responsive YouTube Embed -->
            <div class="bg-white rounded-lg shadow-md border-l-4 border-blue-500 h-[400px] overflow-hidden relative">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/-mGswrM0lKE"
                    title="YouTube video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>



            <!-- 🧾 संघ परिचय Panel -->
            <div class="bg-white rounded-lg shadow-md border-l-4 border-orange-500 h-[400px] flex flex-col overflow-hidden">
                <div class="bg-gray-100 px-4 py-2 border-b font-bold text-orange-600 text-lg">
                    संघ परिचय
                </div>
                <div class="p-4 text-sm text-gray-800 overflow-y-auto">
                    <p class="text-justify leading-relaxed">
                        जैन धर्म के साधुमार्गी श्वेतांबर संप्रदाय की प्रतिनिधि संस्था है ‘श्री
                        अखिल भारतवर्षीय साधुमार्गी जैन संघ’। सन् 1962 में स्थापित इस संघ का
                        उद्देश्य है सम्यक ज्ञान, दर्शन और चारित्र के रास्ते राष्ट्र का
                        उत्थान।
                        <br /><br />
                        भगवान महावीर के अनुपम विरासत के अनुसार अध्यात्म, तत्त्व ज्ञान व
                        शास्त्र अध्ययन की पुनर्स्थापना के काम में लगे इस संघ के आधारभूत मूल
                        स्रोत भगवान महावीर के पाट परंपरा पर विराजमान आचार्य हैं। अभी इस पाट
                        पर आचार्य श्री रामलाल विराजमान हैं।
                        <br /><br />
                        यह संस्था भारत ही नहीं, विदेशों में रह रहे श्रावक-श्राविकाओं के
                        माध्यम से धर्म की गंगा को जन-जन तक पहुँचाने का कार्य कर रही है। भारत
                        के अलावा यह संस्था अमेरिका, इंग्लैंड, नेपाल और भूटान सहित कई और
                        देशों में सक्रिय है।
                        <br /><br />
                        पहले चरण में संघ का मूल मंत्र रहा है कि "धर्म की बुनियाद मजबूत हो और
                        अधिक-से-अधिक युवाओं को इससे जोड़ा जाए।" इस दिशा में धर्मशालाओं,
                        पाठशालाओं और लोकोपयोगी कार्यक्रमों द्वारा निरंतर कार्य किया जा रहा
                        है।
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- 🌟 SABSJS + Aaj Ka Vichar + विहार जानकारी Section -->
    <div class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- 🔹 Left: SABSJS with Cards -->
        <div class="md:col-span-1 bg-white rounded-lg shadow-md border p-4 flex flex-col self-start">
            <!-- 🔸 Heading -->
            <div class="text-center text-xl font-bold border-b pb-2 mb-4">
                श्री अ.भा.सा. जैन संघ की इकाईयां
            </div>

            <!-- 🔸 Cards Row / Stack -->
            <div class="flex flex-col gap-4">
                <!-- Card 1 -->
                <div
                    class="border border-gray-100 rounded-lg shadow-sm flex flex-col items-center justify-center p-4 bg-gradient-to-b from-blue-50 to-white hover:shadow-md transition-shadow duration-200">
                    <img src="img/logo/ms_logo.png" alt="Image 1" class="w-24 h-24 object-contain mb-3" />
                    <h3 class="font-bold text-gray-800 text-center text-[15px] mb-3 leading-snug">
                        श्री अ.भा.सा. जैन महिला समिति
                    </h3>
                    <a href='/mahila'
                        class="text-sm px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 w-full text-center mt-auto shadow-sm transition-colors duration-200">
                        और जानें
                    </a>
                </div>

                <!-- Card 2 -->
                <div
                    class="border border-gray-100 rounded-lg shadow-sm flex flex-col items-center justify-center p-4 bg-gradient-to-b from-orange-50 to-white hover:shadow-md transition-shadow duration-200">
                    <img src="img/logo/YS_Logo.png" alt="Image 3" class="w-24 h-24 object-contain mb-3" />
                    <h3 class="font-bold text-gray-800 text-center text-[15px] mb-3 leading-snug">
                        श्री अ.भा.सा. जैन समता युवा संघ
                    </h3>
                    <a href='/yuva'
                        class="text-sm px-6 py-2 bg-orange-600 text-white font-semibold rounded-md hover:bg-orange-700 w-full text-center mt-auto shadow-sm transition-colors duration-200">
                        और जानें
                    </a>
                </div>
            </div>
        </div>

        <!-- 🔹 Right Panel Column -->
        <div class="flex flex-col gap-4 h-full">
            <!-- 🧾 Aaj Ka Vichar -->
            <div class="bg-white rounded-lg shadow-md border p-4 flex flex-col">
                <div class="text-center text-lg font-semibold border-b pb-2 mb-2">
                    आज का विचार <br>
                    <span class="text-sm text-gray-500 font-normal">
                        {{ $thought ? \Carbon\Carbon::parse($thought['created_at'])->format('d-m-Y') : \Carbon\Carbon::now()->format('d-m-Y') }}
                    </span>
                </div>
                <div class="text-[15px] font-bold text-gray-900 mt-2 max-h-32 overflow-y-auto text-center leading-relaxed">
                    {{ $thought['thought'] ?? 'विचार उपलब्ध नहीं है' }}
                </div>
            </div>


            <!-- 🧾 विहार जानकारी -->

            <div class="bg-white rounded-lg shadow-md border-l-4 border-orange-500 p-4 flex flex-col flex-1">
                <div class="text-orange-600 text-lg font-bold mb-2 border-b pb-1">
                    विहार जानकारी
                </div>
                @if($vihar)
                    @php
                        $location = $vihar['location'];
                        preg_match('/https?:\/\/[^\s]+/', $location, $matches);
                        $mapLink = $matches[0] ?? null;
                        $locationText = preg_replace('/https?:\/\/[^\s]+/', '', $location);
                    @endphp
                    <div class="mt-3 text-[15px] font-medium text-gray-800">
                        <p class="text-justify leading-relaxed">
                            {!! nl2br(e($locationText)) !!}
                        </p>
                    </div>
                    @if($mapLink)
                        <a href="{{ $mapLink }}" target="_blank"
                            class="inline-block mt-3 text-blue-600 hover:text-blue-800 underline text-sm font-semibold">
                            📍 Location link
                        </a>
                    @endif
                    <div class="mt-2 text-xs text-gray-500">
                        📅 {{ $vihar['formatted_date'] ?? 'N/A' }}
                    </div>
                @else
                    <div class="mt-3 text-sm text-gray-500">
                        विहार जानकारी उपलब्ध नहीं है।
                    </div>
                @endif
                <div class="mt-4 mt-auto">
                    <a href="/vihaarcharya"
                        class="block bg-orange-600 hover:bg-orange-700 text-white text-center py-3 rounded text-base font-semibold transition-colors duration-200">
                        📍 विहारचर्या देखें
                    </a>
                </div>
            </div>
        </div>




        <!-- 🖼 News & Events Slider with Fixed Size + Modal -->
        <div x-data="newsSlider()" class="bg-white rounded-lg shadow-md border p-4 flex flex-col h-full">
            <!-- 🔹 Title -->
            <div class="text-center text-lg font-semibold border-b pb-2 mb-2">
                News & Events
            </div>

            <!-- 🔸 Image Box with Much Higher Fixed Height for readability -->
            <div class="relative w-full h-[320px] lg:h-[400px] bg-gray-50 overflow-hidden rounded-lg cursor-pointer border"
                @click="showModal = true">
                <template x-for="(item, index) in news" :key="index">
                    <div x-show="current === index" class="relative w-full h-full">
                        <!-- Image only (no overlay) -->
                        <template x-if="item.photo">
                            <img :src="'https://website.sadhumargi.in/storage/' + item.photo" :alt="item.title"
                                class="w-full h-full object-contain transition-all duration-300 ease-in-out"
                                x-transition:enter="transition-opacity ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition-opacity ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" />
                        </template>

                        <!-- Text Content (only if no image) -->
                        <template x-if="!item.photo">
                            <div class="absolute inset-0 bg-gray-50 flex flex-col items-center justify-center p-4 text-center transition-all duration-300 ease-in-out"
                                x-transition:enter="transition-opacity ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition-opacity ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <div class="space-y-3">
                                    <div class="font-bold text-gray-800 text-lg" x-text="item.title"></div>
                                    <div class="text-sm text-gray-600 line-clamp-4" x-text="item.description"></div>
                                </div>
                            </div>
                        </template>
                    </div>
                </template>

                <!-- 🔸 Arrows -->
                <button @click.stop="prev(); resetAutoplay();"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black/40 text-white px-2 py-1 text-sm rounded-l">
                    ‹
                </button>
                <button @click.stop="next(); resetAutoplay();"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black/40 text-white px-2 py-1 text-sm rounded-r">
                    ›
                </button>
            </div>

            <!-- 🔹 Caption -->
            <div class="text-sm text-center text-gray-700 mt-2" x-text="news[current]?.title"></div>

            <!-- 🔸 Modal (Image Left + Text Right) -->
            <div x-show="showModal" x-transition @click.outside="showModal = false" x-cloak
                class="fixed inset-0 z-50 bg-black/50 flex items-center justify-center p-4 overflow-y-auto">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl overflow-hidden relative my-auto">
                    <!-- ❌ Close Button -->
                    <button @click="showModal = false"
                        class="absolute top-4 right-4 bg-white border rounded-full p-1 text-black hover:bg-gray-200 shadow z-50">
                        ✖
                    </button>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                        <!-- 🖼 Image -->
                        <div class="h-[300px] sm:h-[400px] bg-gray-100 flex items-center justify-center">
                            <template x-if="news[current]?.photo">
                                <img :src="'https://website.sadhumargi.in/storage/' + news[current]?.photo" alt="modal"
                                    class="max-h-full max-w-full object-contain" />
                            </template>
                            <template x-if="!news[current]?.photo">
                                <div class="text-center px-6">
                                    <div class="text-lg font-semibold text-gray-800" x-text="news[current]?.title"></div>
                                    <div class="text-sm text-gray-600 mt-2" x-text="news[current]?.location"></div>
                                    <div class="text-sm text-gray-600 mt-2" x-text="news[current]?.description"></div>
                                </div>
                            </template>
                        </div>

                        <!-- 📝 Info Text -->
                        <div class="p-4 sm:p-6 space-y-3 text-gray-800 overflow-y-auto max-h-[300px] sm:max-h-[400px]">
                            <h2 class="text-lg sm:text-xl font-bold mb-2" x-text="news[current]?.title"></h2>
                            <p class="text-xs sm:text-sm leading-relaxed">
                                <template x-if="news[current]?.date">
                                    <span>📅 <strong>दिनांक:</strong> <span
                                            x-text="news[current]?.date"></span><br /></span>
                                </template>
                                <template x-if="news[current]?.time">
                                    <span>🕐 <strong>समय:</strong> <span x-text="news[current]?.time"></span><br /></span>
                                </template>
                                <span>📍 <strong>स्थान:</strong> <span x-text="news[current]?.location"></span><br /></span>
                                <span>📝 <strong>विवरण:</strong> <span x-text="news[current]?.description"></span></span>
                            </p>
                            <a href="#"
                                class="inline-block mt-2 px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600 transition text-sm">
                                और जानें →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 🧠 AlpineJS Component Script -->
        <script>
            function newsSlider() {
                return {
                    current: 0,
                    showModal: false,
                    news: @json($news),
                    interval: null,

                    init() {
                        if (this.news && this.news.length > 1) {
                            this.startAutoplay();
                        }

                        // Stop autoplay when user hovers over the slider, resume on leave
                        this.$watch('showModal', value => {
                            if (value) {
                                this.stopAutoplay();
                            } else {
                                this.startAutoplay();
                            }
                        });
                    },

                    startAutoplay() {
                        this.stopAutoplay(); // ensure no duplicates
                        this.interval = setInterval(() => {
                            if (!this.showModal) {
                                this.next();
                            }
                        }, 4000); // 4 Seconds
                    },

                    stopAutoplay() {
                        if (this.interval) clearInterval(this.interval);
                    },

                    next() {
                        if (this.news && this.news.length > 0) {
                            this.current = (this.current + 1) % this.news.length;
                        }
                    },

                    prev() {
                        if (this.news && this.news.length > 0) {
                            this.current = (this.current - 1 + this.news.length) % this.news.length;
                        }
                    },

                    resetAutoplay() {
                        this.stopAutoplay();
                        this.startAutoplay();
                    }
                }
            }

        </script>

    </div>

    <!-- 🌟 राष्ट्रीय पदाधिकारीगण + श्रवणोपासक Section -->
    <div class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-1 md:grid-cols-3 gap-4 items-start">
        <!-- 🔹 Left Panel: राष्ट्रीय पदाधिकारीगण -->
        <div class="md:col-span-2 bg-white rounded-lg shadow-md border p-4 flex flex-col">
            <!-- 🔸 Heading -->
            <div class="text-center text-xl font-bold border-b pb-2 mb-4">
                श्री अ.भा.सा. जैन संघ - राष्ट्रीय पदाधिकारीगण <span class="text-base font-normal">(सत्र 2025-27)</span>
            </div>

            <!-- 🔸 Members Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($pstMembers as $m)
                    <div class="bg-white border rounded-lg shadow-md p-4 flex flex-col items-center text-center">
                        <img src="{{ $m['photo'] }}" alt="{{ $m['name'] }}" class="w-28 h-28 object-cover shadow mb-3"
                            onerror="this.onerror=null;this.src='{{ asset('img/avatar-fallback.png') }}';" />

                        <h4 class="font-semibold text-base text-gray-800 leading-tight">
                            {{ $m['name'] }}
                        </h4>
                        <p class="text-sm text-gray-600">{{ $m['post'] }}</p>
                    </div>
                @empty
                    <div class="col-span-2 md:col-span-4 text-center text-gray-500 py-8">
                        कोई सदस्य डेटा उपलब्ध नहीं।
                    </div>
                @endforelse
            </div>

        </div>

        <!-- 🔹 Right Panel: श्रमणोपासक (Like विहार जानकारी) -->
        <!-- 🔸 Right Panel: Latest श्रमणोपासक / संघ साहित्य -->
        <div class="bg-white rounded-lg shadow text-sm p-5 border-l-4 border-orange-500 w-full md:max-w-md">

            <!-- 🔹 Panel Heading -->
            <div class="text-lg font-bold text-orange-600 border-b pb-2 mb-4">
                नवीनतम श्रमणोपासक / संघ साहित्य
            </div>

            <!-- 🔹 Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- 📘 Card 1 -->
                @if($shramnopasak)
                    <div class="flex flex-col items-center bg-gray-50 rounded-lg shadow p-4">
                        <!-- 📘 Image -->
                        <img src="https://website.sadhumargi.in/storage/{{ $shramnopasak['cover_photo'] }}" alt="Shramnopasak"
                            class="w-32 h-40 object-contain rounded shadow mb-3" />

                        <!-- 🗓️ Month / Year Text -->
                        <div class="text-sm text-gray-700 mb-1">
                            {{ $shramnopasak['month'] }} {{ $shramnopasak['year'] }}
                        </div>

                        <!-- 🔘 Button -->
                        @if($shramnopasak['file_type'] === 'drive' && $shramnopasak['drive_link'])
                            <a href="{{ $shramnopasak['drive_link'] }}" target="_blank"
                                class="mt-1 bg-blue-600 text-white text-sm px-4 py-1 rounded hover:bg-blue-700 transition">
                                डाउनलोड करें
                            </a>
                        @elseif($shramnopasak['file_type'] === 'pdf' && $shramnopasak['pdf'])
                            <a href="https://website.sadhumargi.in/storage/{{ $shramnopasak['pdf'] }}" target="_blank"
                                class="mt-1 bg-blue-600 text-white text-sm px-4 py-1 rounded hover:bg-blue-700 transition">
                                डाउनलोड करें
                            </a>
                        @else
                            <div class="text-gray-400 text-xs mt-2">कोई फ़ाइल लिंक उपलब्ध नहीं है।</div>
                        @endif
                    </div>
                @else
                    <div class="text-gray-500 text-sm">Shramnopasak डेटा उपलब्ध नहीं है।</div>
                @endif



                <!-- 📘 Card 2 -->
                @forelse ($homepageBooks as $book)
                    <div class="flex flex-col items-center bg-gray-50 rounded-lg shadow p-4">
                        <img src="https://website.sadhumargi.in{{ $book['cover_photo'] }}" alt="{{ $book['name'] }}"
                            class="w-32 h-40 object-contain rounded shadow mb-3" />

                        <div class="text-sm font-semibold text-gray-800 text-center mb-2">
                            {{ $book['name'] }}
                        </div>

                        <a href="https://website.sadhumargi.in{{ $book['pdf'] }}" target="_blank"
                            class="mt-2 bg-blue-600 text-white text-sm px-4 py-1 rounded hover:bg-blue-700 transition">
                            डाउनलोड करें
                        </a>
                    </div>
                @empty
                    <div class="text-gray-500 text-sm text-center">
                        कोई पुस्तक उपलब्ध नहीं है।
                    </div>
                @endforelse

            </div>
        </div>
    </div>



@endsection