@extends('layouts.app')

@section('title', 'जैन संस्कार पाठ्यक्रम| SABSJS')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="relative text-center mt-1 mb-6">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

            <h2
                class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
                जैन संस्कार पाठ्यक्रम
            </h2>
        </div>


        <!-- 💡 Full Width Panel with Introduction -->
        <div
            class="bg-yellow-50 border border-yellow-200 rounded-lg shadow-sm p-6 text-gray-800 text-justify leading-relaxed">
            <p class="text-base sm:text-lg">
                @if($jsp && !empty($jsp['content']))
                    {!! nl2br(e($jsp['content'])) !!}
                @else
                    श्री अ.भा. साधुमार्गी जैन संघ द्वारा समाज में ज्ञान वृद्धि एवं सुसंस्कारों के विकास हेतु श्री जैन संस्कार
                    पाठ्यक्रम परीक्षाओं का आयोजन किया जाता है। इससे संघ में जागृति आयी है। पिछले कई वर्षो में हजारों भाई-बहिनों,
                    युवक-युवतियों, बालक-बालिकाओं ने परीक्षा में भाग लेकर ज्ञान की अभिवृद्धि की है।<br>

                    संघ द्वारा संस्कार पाठ्यक्रम के प्रचार-प्रसार हेतु निःशुल्क पुस्तकों का वितरण किया जाता है।<br>

                    गत वर्ष की भांति इस वर्ष हमने जैन संस्कार पाठ्यक्रम की समय-सारिणी पूर्व में ही निर्धारित कर दी है। जिसके
                    अनुसार एक ही दिन दि. 14-09-2025 को सम्पूर्ण भागों की परीक्षाएँ सम्पन्न हुई。
                @endif
            </p>
        </div>

        <!-- 🎯 Result Checker Button -->
        <div class="mt-8" x-data="{
            openResultModal: false,
            showResult: false,
            async checkResultVisibility() {
                try {
                    const response = await fetch('https://website.sadhumargi.in/api/jsp-result/visibility');
                    const data = await response.json();
                    this.showResult = !!data.visible;
                } catch (e) {
                    console.error('Error fetching result visibility:', e);
                    this.showResult = false;
                }
            }
        }" x-init="checkResultVisibility()" x-show="showResult" x-cloak>
            <div @click="openResultModal = true"
                class="bg-white hover:bg-gray-50 rounded-xl shadow-2xl p-6 md:p-8 cursor-pointer transform transition-all duration-300 hover:scale-[1.02] hover:shadow-3xl border-2 border-gray-200">
                <div class="flex items-center justify-center gap-4 flex-wrap">
                    <div class="bg-white rounded-full p-1 md:p-2 shadow-lg">
                        <img src="/img/gif.png" alt="Result Left GIF"
                            class="w-16 h-16 md:w-20 md:h-20 object-contain blink-animation" />
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-2xl md:text-3xl font-bold mb-1 font-[Amita] text-red-600">परीक्षा परिणाम देखें</h3>
                        <p class="text-red-500 text-sm md:text-base">अपना परीक्षा परिणाम यहाँ क्लिक करके देखें</p>
                        <p class="text-green-700 text-base md:text-lg mt-1 font-semibold">हेल्पलाइन: 7231933008 JSP Central
                            Office</p>
                    </div>
                    <div class="bg-white rounded-full p-1 md:p-2 shadow-lg">
                        <img src="/img/gif.png" alt="Result Right GIF"
                            class="w-16 h-16 md:w-20 md:h-20 object-contain blink-animation" />
                    </div>
                    <!-- Gradient blink animation style moved to head or global, not inline here -->
                    <style>
                        @keyframes blink {

                            0%,
                            100% {
                                opacity: 1;
                            }

                            50% {
                                opacity: 0.2;
                            }
                        }

                        .blink-animation {
                            animation: blink 1.2s infinite;
                        }
                    </style>
                </div>
            </div>

            <!-- Result Modal with Form and Result Display -->
            <div x-show="openResultModal" x-cloak x-data="{
                    selectedClass: '',
                    mobile: '',
                    result: null,
                    loading: false,
                    error: '',

                    async fetchResult() {
                        if (!this.selectedClass || !this.mobile) {
                            this.error = 'कृपया क्लास और मोबाइल नंबर दोनों भरें';
                            return;
                        }

                        if (this.mobile.length !== 10) {
                            this.error = 'कृपया 10 अंकों का मोबाइल नंबर डालें';
                            return;
                        }

                        this.loading = true;
                        this.error = '';

                        try {
                            const response = await fetch('https://website.sadhumargi.in/api/get-result', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Accept': 'application/json'
                                },
                                body: JSON.stringify({
                                    class: this.selectedClass,
                                    mobile: this.mobile
                                })
                            });

                            const data = await response.json();

                            if (response.ok && data.result) {
                                this.result = data.result;
                            } else {
                                this.error = data.message || 'परिणाम नहीं मिला। कृपया विवरण जांचें।';
                            }
                        } catch (err) {
                            this.error = 'कुछ गड़बड़ी हुई। कृपया फिर से प्रयास करें।';
                        } finally {
                            this.loading = false;
                        }
                    },

                    resetForm() {
                        this.selectedClass = '';
                        this.mobile = '';
                        this.result = null;
                        this.error = '';
                    },

                    async downloadResultPNG() {
                        try {
                            // Ensure html2canvas is loaded
                            if (typeof html2canvas === 'undefined') {
                                alert('html2canvas library is not loaded. कृपया सुनिश्चित करें कि यह शामिल है।');
                                return;
                            }

                            const resultCard = document.getElementById('result-card-content');
                            if (!resultCard) {
                                alert('Result card content not found. कृपया सुनिश्चित करें कि परिणाम कार्ड मौजूद है।');
                                return;
                            }

                            const canvas = await html2canvas(resultCard, {
                                scale: 2,
                                backgroundColor: '#ffffff',
                                logging: false,
                                useCORS: true
                            });

                            const link = document.createElement('a');
                            link.download = `Result_${this.result.Student_Name}_${this.result.Class}.png`;
                            link.href = canvas.toDataURL('image/png');
                            link.click();
                        } catch (error) {
                            console.error('Error during download:', error);
                            alert('Download करने में समस्या आई। कृपया फिर से प्रयास करें।');
                        }
                    }
                 }" @keydown.escape.window="openResultModal = false" class="fixed inset-0 z-50 overflow-y-auto">

                <!-- Backdrop -->
                <div x-show="openResultModal" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" @click="openResultModal = false; resetForm()"
                    class="fixed inset-0 bg-black bg-opacity-70"></div>

                <!-- Modal Container -->
                <div class="flex items-center justify-center min-h-screen px-4 py-8">
                    <div x-show="openResultModal" x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        @click.away="openResultModal = false; resetForm()"
                        class="relative bg-white rounded-2xl shadow-2xl w-full max-w-4xl z-10">

                        <!-- Close Button -->
                        <button @click="openResultModal = false; resetForm()"
                            class="absolute top-4 right-4 bg-red-500 hover:bg-red-600 text-white rounded-full w-10 h-10 flex items-center justify-center text-2xl font-bold shadow-lg transition-all hover:scale-110 z-20">
                            ×
                        </button>

                        <!-- Modal Content -->
                        <div class="p-6 md:p-8">

                            <!-- Form Section (shown when result is null) -->
                            <div x-show="!result" class="space-y-6">
                                <div class="text-center mb-6">
                                    <h2 class="text-2xl md:text-3xl font-bold text-yellow-800 font-[Amita]">
                                        परीक्षा परिणाम जांचें
                                    </h2>
                                    <p class="text-gray-600 mt-2">कृपया अपनी जानकारी भरें</p>
                                </div>

                                <!-- Class Selection -->
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2 text-sm">
                                        <span class="text-red-500">*</span> कक्षा चुनें
                                    </label>
                                    <select x-model="selectedClass"
                                        class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all bg-white text-base">
                                        <option value="" disabled selected>कक्षा चुनें</option>
                                        <template x-for="c in [1,2,3,4,5,6,7,8,9,10]" :key="c">
                                            <option :value="c" x-text="'Class ' + c"></option>
                                        </template>
                                        <option value="11 Aagam">11 Aagam</option>
                                        <option value="11 Tatwa">11 Tatwa</option>
                                        <option value="12 Aagam">12 Aagam</option>
                                        <option value="12 Tatwa">12 Tatwa</option>
                                    </select>
                                </div>

                                <!-- Mobile Number -->
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2 text-sm">
                                        <span class="text-red-500">*</span> मोबाइल नंबर
                                    </label>
                                    <input type="tel" x-model="mobile" maxlength="10"
                                        placeholder="10 अंकों का मोबाइल नंबर डालें"
                                        class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all text-base"
                                        @keypress="if(!/[0-9]/.test($event.key)) $event.preventDefault()"
                                        @keydown.enter="fetchResult()">
                                </div>

                                <!-- Error Message -->
                                <div x-show="error" x-transition
                                    class="bg-red-50 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xl">⚠️</span>
                                        <span x-text="error" class="font-medium"></span>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button @click="fetchResult()" :disabled="loading"
                                    class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 disabled:from-gray-400 disabled:to-gray-500 text-white font-bold py-4 px-6 rounded-lg transition-all duration-200 transform hover:scale-105 disabled:scale-100 disabled:cursor-not-allowed shadow-lg text-lg">
                                    <span x-show="!loading" class="flex items-center justify-center gap-2"
                                        style="color: goldenrod;">
                                        <span>परिणाम देखें</span>
                                        <span class="text-2xl">🔍</span>
                                    </span>
                                    <span x-show="loading" class="flex items-center justify-center gap-2">
                                        <svg class="animate-spin h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                                stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                        <span>कृपया प्रतीक्षा करें...</span>
                                    </span>
                                </button>
                            </div>

                            <!-- Result Card Section (shown when result exists) -->
                            <div x-show="result" x-transition class="space-y-6">

                                <!-- Result Card for Display and Download -->
                                <div id="result-card-content" class="bg-white p-6 rounded-lg">

                                    <!-- Header with Logo on Left -->
                                    <div class="flex items-start gap-6 border-b-2 border-gray-300 pb-6 mb-6">
                                        <!-- Logo on Left -->
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('img/logo/sangh_loo.png') }}" alt="Logo"
                                                class="w-24 h-24 md:w-32 md:h-32 object-contain">
                                        </div>

                                        <!-- Text on Right -->
                                        <div class="flex-grow text-center md:text-left">
                                            <h1 class="text-2xl md:text-3xl font-bold text-blue-800 mb-2 font-[Amita]">
                                                जैन संस्कार पाठ्यक्रम
                                            </h1>
                                            <h2 class="text-lg md:text-xl font-semibold text-gray-700 font-[Amita]">
                                                (अंतर्गत:श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ)
                                            </h2>
                                            <div
                                                class="mt-3 inline-block bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-sm font-semibold">
                                                Result Card
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Student Details in Grid -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <!-- Left Column -->
                                        <div class="space-y-3">
                                            <div class="flex">
                                                <span class="font-bold text-gray-700 w-32">Student:</span>
                                                <span x-text="result.Student_Name" class="text-gray-900"></span>
                                            </div>
                                            <div class="flex">
                                                <span class="font-bold text-gray-700 w-32">Mobile:</span>
                                                <span x-text="result.Mobile" class="text-gray-900"></span>
                                            </div>
                                            <div class="flex">
                                                <span class="font-bold text-gray-700 w-32">State:</span>
                                                <span x-text="result.State" class="text-gray-900"></span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="font-bold text-gray-700 w-32">Marks:</span>
                                                <span x-text="result.Marks"
                                                    class="text-green-600 font-bold text-3xl"></span>
                                            </div>
                                            <div class="flex">
                                                <span class="font-bold text-gray-700 w-32">Remarks:</span>
                                                <span x-text="result.Remarks || 'na'" class="text-gray-900"></span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="space-y-3">
                                            <div class="flex">
                                                <span class="font-bold text-gray-700 w-32">Guardian:</span>
                                                <span x-text="result.Guardian_Name" class="text-gray-900"></span>
                                            </div>
                                            <div class="flex">
                                                <span class="font-bold text-gray-700 w-32">City:</span>
                                                <span x-text="result.City" class="text-gray-900"></span>
                                            </div>
                                            <div class="flex">
                                                <span class="font-bold text-gray-700 w-32">Class:</span>
                                                <span x-text="'Class ' + result.Class" class="text-gray-900"></span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="font-bold text-gray-700 w-32">Division:</span>
                                                <span x-text="result.Rank" class="text-blue-600 font-bold text-3xl"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Footer -->
                                    <div class="border-t-2 border-gray-300 pt-4 text-center text-gray-600 text-sm">
                                        <p>This is a system generated result and does not require a signature.</p>
                                        <p class="font-bold text-gray-800 mt-1">— SABSJS JSP Team —</p>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <button @click="result = null; error = ''"
                                        class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all transform hover:scale-105 shadow-lg flex items-center justify-center gap-2">
                                        <span>🔄</span>
                                        <span>नया परिणाम जांचें</span>
                                    </button>
                                    <button @click="downloadResultPNG()"
                                        class="w-full bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 text-white font-semibold py-3 px-6 rounded-lg transition-all transform hover:scale-105 shadow-lg flex items-center justify-center gap-2">
                                        <span>📥</span>
                                        <span style="color: goldenrod;">Download PNG</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-10 gap-6">
            <!-- Left Panel: 60% (3/5 columns) -->
            <div class="col-span-10 md:col-span-7 space-y-4">
                <div class="bg-white border border-gray-300 rounded-md p-4 text-center font-bold">
                    परीक्षा नियम
                </div>
                <!-- Top Row: Exam Sections -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- श्री जैन संस्कार पाठ्यक्रम परीक्षा -->
                    <div class="bg-white border border-gray-300 rounded-md text-sm overflow-hidden">
                        <h3 class="font-semibold bg-yellow-100 text-yellow-800 px-4 py-2">
                            श्री जैन संस्कार पाठ्यक्रम परीक्षा
                        </h3>
                        <div class="p-4">
                            <ul class="space-y-1">
                                @forelse ($examFiles as $item)
                                    <li class="flex items-center gap-2 px-2 py-2 rounded hover:bg-gray-100 transition">
                                        <span class="flex-grow text-sm">{{ $loop->iteration }}. {{ $item['name'] }}</span>
                                        <a href="https://website.sadhumargi.in/storage/{{ $item['pdf'] }}" target="_blank"
                                            class="text-blue-600 text-sm hover:underline whitespace-nowrap flex items-center gap-1">
                                            📥 Download
                                        </a>
                                    </li>
                                @empty
                                    <li class="text-sm text-gray-500">कोई फ़ाइल उपलब्ध नहीं है।</li>
                                @endforelse
                            </ul>
                        </div>

                    </div>




                    <!-- श्री साधुमार्गी जैन धार्मिक परीक्षा बोर्ड -->
                    <div class="bg-white border border-gray-300 rounded-md text-sm overflow-hidden">
                        <h3 class="font-semibold bg-yellow-100 text-yellow-800 px-4 py-2">
                            श्री साधुमार्गी जैन धार्मिक परीक्षा बोर्ड (बड़ी परीक्षाएँ)
                        </h3>
                        <div class="p-4">
                            <ul class="space-y-1">
                                @forelse ($bigExamFiles as $item)
                                    <li class="flex items-center gap-2 px-2 py-2 rounded hover:bg-gray-100 transition">
                                        <span class="flex-grow text-sm">{{ $loop->iteration }}. {{ $item['name'] }}</span>
                                        <a href="https://website.sadhumargi.in/storage/{{ $item['pdf'] }}" target="_blank"
                                            class="text-blue-600 text-sm hover:underline whitespace-nowrap flex items-center gap-1">
                                            📥 Download
                                        </a>
                                    </li>
                                @empty
                                    <li class="text-sm text-gray-500">कोई फ़ाइल उपलब्ध नहीं है।</li>
                                @endforelse
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Bottom Row: Book Sections -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white border border-gray-300 rounded-md text-sm overflow-hidden">
                        <h3 class="font-semibold bg-yellow-100 text-yellow-800 px-4 py-2">
                            जैन संस्कार पाठ्यक्रम हिन्दी पुस्तकें
                        </h3>
                        <div class="p-4">
                            <ul class="space-y-1">
                                @forelse ($hindiBooks as $item)
                                    <li
                                        class="flex justify-between items-center px-2 py-2 rounded hover:bg-gray-100 transition">
                                        <span>{{ $loop->iteration }}. {{ $item['name'] }}</span>
                                        <a href="https://website.sadhumargi.in/storage/{{ $item['pdf'] }}" target="_blank"
                                            class="text-blue-600 text-sm hover:underline">📥 Download</a>
                                    </li>
                                @empty
                                    <li class="text-sm text-gray-500">कोई पुस्तक उपलब्ध नहीं है।</li>
                                @endforelse
                            </ul>
                        </div>

                    </div>
                    <div class="bg-white border border-gray-300 rounded-md text-sm overflow-hidden">
                        <h3 class="font-semibold bg-yellow-100 text-yellow-800 px-4 py-2">
                            जैन संस्कार पाठ्यक्रम गुजराती पुस्तकें
                        </h3>
                        <div class="p-4">
                            <ul class="space-y-1">
                                @forelse ($gujaratiBooks as $item)
                                    <li
                                        class="flex justify-between items-center px-2 py-2 rounded hover:bg-gray-100 transition">
                                        <span>{{ $loop->iteration }}. {{ $item['name'] }}</span>
                                        <a href="https://website.sadhumargi.in/storage/{{ $item['pdf'] }}" target="_blank"
                                            class="text-blue-600 text-sm hover:underline">📥 Download</a>
                                    </li>
                                @empty
                                    <li class="text-sm text-gray-500">कोई गुजराती पुस्तक उपलब्ध नहीं है।</li>
                                @endforelse
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right Panel: 40% (2/5 columns) -->
            <!-- DTP Section -->
            @if($jsp)
                <div x-data="{ showModal: false }" class="col-span-10 md:col-span-3 space-y-4">
                    <!-- Header -->
                    <div class="bg-white border border-gray-300 rounded-md p-4 text-center font-bold">
                        Latest Exam News
                    </div>

                    <!-- Clickable Image Preview -->
                    <div @click="showModal = true"
                        class="bg-gray-100 border border-gray-300 rounded-md h-72 overflow-hidden cursor-pointer flex items-center justify-center">
                        <img src="https://website.sadhumargi.in/storage/{{ $jsp['dtp'] }}" alt="Preview"
                            class="max-h-full max-w-full object-contain" />
                    </div>

                    <!-- Modal with Full Image -->
                    <div x-show="showModal" x-transition @click.self="showModal = false"
                        class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 px-4">
                        <div class="relative w-full max-w-4xl">
                            <!-- Close button -->
                            <button @click="showModal = false"
                                class="absolute top-2 right-2 text-white text-3xl font-bold z-50">&times;</button>

                            <!-- Full Image -->
                            <img src="https://website.sadhumargi.in/storage/{{ $jsp['dtp'] }}" alt="Full View"
                                class="mx-auto max-h-[90vh] w-auto rounded-lg shadow-2xl object-contain" />
                        </div>
                    </div>
                </div>
            @else
                <div class="text-gray-500 text-sm">डेटा उपलब्ध नहीं है।</div>
            @endif



        </div>

        {{-- ----------------------------OLD PAPERS SECTION---------------------------- --}}
        <div class="bg-white border border-gray-300 rounded-md text-sm overflow-hidden p-4 mt-6">
            <h3 class="font-semibold bg-yellow-100 text-yellow-800 px-4 py-2">
                पुराने पेपर (Class‑wise)
            </h3>

            <div x-data="{
            selectedClass: '',
            papers: {{ Js::from($oldPapersRaw) }}
        }" class="mt-4">

                <!-- Class Dropdown -->
                <select x-model="selectedClass" class="border py-2 px-3 rounded w-full max-w-xs mb-4">
                    <option value="" disabled selected>कृपया क्लास चुनें</option>
                    <template x-for="c in Object.keys(papers).sort((a, b) => a.localeCompare(b, undefined, {numeric: true}))" :key="c">
                        <option :value="c">Class <span x-text="c"></span></option>
                    </template>
                </select>

                <!-- List of PDFs -->
                <template x-if="selectedClass && papers[selectedClass]">
                    <ul class="space-y-2">
                        <template x-for="(item, idx) in papers[selectedClass].sort((a,b) => b.year - a.year)"
                            :key="item.id">
                            <li class="flex justify-between items-center px-2 py-2 rounded hover:bg-gray-100 transition">
                                <span x-text="(idx + 1) + '. ' + item.year"></span>
                                <a :href="`https://website.sadhumargi.in/storage/${item.pdf}`" target="_blank"
                                    class="text-blue-600 text-sm hover:underline">
                                    📥 Download
                                </a>
                            </li>
                        </template>
                    </ul>
                </template>

                <template x-if="selectedClass && !papers[selectedClass]">
                    <div class="text-sm text-gray-500">इस क्लास के लिए कोई डेटा उपलब्ध नहीं है।</div>
                </template>
            </div>
        </div>




    </div>


@endsection