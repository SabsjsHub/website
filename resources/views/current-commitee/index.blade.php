@extends('layouts.app')

@section('title', 'वर्तमान कार्यकारिणी | SABSJS')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-10">
        <!-- 🌟 Decorative Heading -->
        <div class="relative text-center my-8">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

            <h2
                class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                वर्तमान कार्यकारिणी
            </h2>
        </div>

        <!-- Session Tabs -->
        <div class="flex justify-center mb-8">
            <div class="inline-flex rounded-lg border border-gray-200 bg-white p-1 shadow-sm">
                <button id="tab-2025-27"
                    class="session-tab px-6 py-3 text-sm font-semibold rounded-md transition-all duration-200 bg-yellow-600 text-white">
                    सत्र 2025-27
                </button>
                <button id="tab-2023-25"
                    class="session-tab px-6 py-3 text-sm font-semibold rounded-md transition-all duration-200 hover:bg-gray-100 text-gray-700">
                    सत्र 2023-25
                </button>
            </div>
        </div>

        <!-- Session Content 2025-27 (Default) -->
        <div id="content-2025-27" class="session-content">
            <!-- पदाधिकारी Section -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    पदाधिकारी
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($presidents as $member)
                    @if(!isset($member['session']) || $member['session'] === '2025-27')
                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition duration-300 ease-in-out overflow-hidden">
                            <div class="flex justify-center items-center h-[180px] bg-gray-50">
                                <img src="https://website.sadhumargi.in/storage/{{ $member['photo'] }}" alt="{{ $member['name'] }}"
                                    class="h-full object-contain" />
                            </div>
                            <div class="px-4 py-4 text-center">
                                <h3 class="text-base font-semibold text-gray-800">{{ $member['name'] }}</h3>
                                <p class="text-sm text-gray-600 mt-1">{{ $member['post'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- राष्ट्रीय उपाध्यक्ष और मंत्री Section -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    राष्ट्रीय उपाध्यक्ष और मंत्री
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($vicePresidents as $vp)
                    @if(!isset($vp['session']) || $vp['session'] === '2025-27')
                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                            <div class="h-[180px] flex items-center justify-center bg-gray-50">
                                <img src="https://website.sadhumargi.in/storage/{{ $vp['photo'] }}" alt="{{ $vp['name'] }}"
                                    class="h-full object-contain" />
                            </div>
                            <div class="text-center p-4">
                                <h3 class="text-base font-semibold text-gray-800">{{ $vp['name'] }}</h3>
                                <p class="text-gray-600 text-sm">{{ $vp['post'] }}</p>
                                <p class="text-gray-500 text-sm">{{ $vp['city'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- राष्ट्रीय प्रवृति संयोजक और सह-संयोजक Section -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    राष्ट्रीय प्रवृति संयोजक और सह-संयोजक
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-10">
                @foreach($pravartiSanyojaks as $pravartiType => $sanyojaks)
                    @php
                        $sessionSanyojaks = collect($sanyojaks)->filter(function ($person) {
                            return !isset($person['session']) || $person['session'] === '2025-27';
                        });
                    @endphp

                    @if($sessionSanyojaks->count() > 0)
                        <div>
                            <div
                                class="bg-blue-100 border border-blue-300 text-blue-800 text-lg font-semibold px-4 py-3 rounded text-center mb-6">
                                {{ $pravartiType }}
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                @foreach($sanyojaks as $person)
                                    @if(!isset($person['session']) || $person['session'] === '2025-27')
                                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                                            <div class="h-[180px] flex items-center justify-center bg-gray-50">
                                                <img src="https://website.sadhumargi.in/storage/{{ $person['photo'] }}"
                                                    alt="{{ $person['name'] }}" class="h-full object-contain" />
                                            </div>
                                            <div class="text-center p-4">
                                                <h3 class="text-base font-semibold text-gray-800">{{ $person['name'] }}</h3>
                                                <p class="text-gray-600 text-sm">{{ $person['post'] }}</p>
                                                <p class="text-gray-500 text-sm">{{ $person['city'] }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- स्थायी संपति संवर्द्धन समिति Section -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    स्थायी संपति संवर्द्धन समिति
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($sthayiSampatiMembers as $member)
                    @if(!isset($member['session']) || $member['session'] === '2025-27')
                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                            <div class="h-[180px] flex items-center justify-center bg-gray-50">
                                <img src="{{ $member['photo'] }}" alt="{{ $member['name'] }}"
                                    class="h-full w-auto object-contain" />
                            </div>
                            <div class="text-center p-4">
                                <h3 class="text-base font-semibold text-gray-800">{{ $member['name'] }}</h3>
                                <p class="text-gray-500 text-sm">{{ $member['city'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- आईटी सेल Section -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    आईटी सेल
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($itCellMembers as $member)
                    @if(!isset($member['session']) || $member['session'] === '2025-27')
                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                            <div class="h-[180px] flex items-center justify-center bg-gray-50">
                                <img src="https://website.sadhumargi.in/storage/{{ $member['photo'] }}" alt="{{ $member['name'] }}"
                                    class="h-full object-contain" />
                            </div>
                            <div class="text-center p-4">
                                <h3 class="text-base font-semibold text-gray-800">{{ $member['name'] }}</h3>
                                <p class="text-gray-600 text-sm">{{ $member['post'] }}</p>
                                <p class="text-gray-500 text-sm">{{ $member['city'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- संयोजन मंडल सदस्य – अन्तर्राष्ट्रीय सदस्यता Section -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    संयोजन मंडल सदस्य – अन्तर्राष्ट्रीय सदस्यता
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($antrastriyaMembers as $member)
                    @if(!isset($member['session']) || $member['session'] === '2025-27')
                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                            <div class="h-[180px] flex items-center justify-center bg-gray-50">
                                <img src="https://website.sadhumargi.in/storage/{{ $member['photo'] }}" alt="{{ $member['name'] }}"
                                    class="h-full object-contain" />
                            </div>
                            <div class="text-center p-4">
                                <h3 class="text-base font-semibold text-gray-800">{{ $member['name'] }}</h3>
                                <p class="text-gray-500 text-sm">{{ $member['city'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- समता जनकल्याण प्रन्यास Section -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    समता जनकल्याण प्रन्यास
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($samtaJanKalyanMembers as $member)
                    @if(!isset($member['session']) || $member['session'] === '2025-27')
                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                            <div class="h-[180px] flex items-center justify-center bg-gray-50">
                                <img src="https://website.sadhumargi.in/storage/{{ $member['photo'] }}" alt="{{ $member['name'] }}"
                                    class="h-full object-contain" />
                            </div>
                            <div class="text-center p-4">
                                <h3 class="text-base font-semibold text-gray-800">{{ $member['name'] }}</h3>
                                <p class="text-gray-500 text-sm">{{ $member['city'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Session Content 2023-25 (Hidden by default) -->
        <div id="content-2023-25" class="session-content hidden">
            <!-- पदाधिकारी Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    पदाधिकारी (2023-25)
                </h2>
            </div>

            <div id="pst-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="pst-members" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 hidden">
                <!-- PST Members will be loaded here via JavaScript -->
            </div>

            <!-- राष्ट्रीय उपाध्यक्ष और मंत्री Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    राष्ट्रीय उपाध्यक्ष और मंत्री (2023-25)
                </h2>
            </div>

            <div id="vp-sec-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="vp-sec-pdfs" class="hidden">
                <!-- VP-SEC PDFs will be loaded here -->
            </div>

            <!-- राष्ट्रीय प्रवृति संयोजक और सह-संयोजक Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    राष्ट्रीय प्रवृति संयोजक और सह-संयोजक (2023-25)
                </h2>
            </div>

            <div id="pravarti-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="pravarti-pdfs" class="hidden">
                <!-- Pravarti PDFs will be loaded here -->
            </div>

            <!-- आईटी सेल Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    आईटी सेल (2023-25)
                </h2>
            </div>

            <div id="it-cell-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="it-cell-pdfs" class="hidden">
                <!-- IT Cell PDFs will be loaded here -->
            </div>

            <!-- स्थायी संपति संवर्द्धन समिति Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    स्थायी संपति संवर्द्धन समिति (2023-25)
                </h2>
            </div>

            <div id="sthayi-sampati-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="sthayi-sampati-pdfs" class="hidden">
                <!-- Sthayi Sampati PDFs will be loaded here -->
            </div>

            <!-- संयोजन मंडल सदस्य – अन्तर्राष्ट्रीय सदस्यता Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    संयोजन मंडल सदस्य – अन्तर्राष्ट्रीय सदस्यता (2023-25)
                </h2>
            </div>

            <div id="sanyojan-mandal-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="sanyojan-mandal-pdfs" class="hidden">
                <!-- Sanyojan Mandal PDFs will be loaded here -->
            </div>

            <!-- समता जनकल्याण प्रन्यास Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    समता जनकल्याण प्रन्यास (2023-25)
                </h2>
            </div>

            <div id="samta-jan-kalyan-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="samta-jan-kalyan-pdfs" class="hidden">
                <!-- Samta Jan Kalyan PDFs will be loaded here -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tab switching functionality
            const tab2025 = document.getElementById('tab-2025-27');
            const tab2023 = document.getElementById('tab-2023-25');
            const content2025 = document.getElementById('content-2025-27');
            const content2023 = document.getElementById('content-2023-25');

            // Default active tab styling
            let activeTab = '2025-27';

            function switchTab(targetTab) {
                if (targetTab === '2025-27') {
                    // Show 2025-27 content
                    content2025.classList.remove('hidden');
                    content2023.classList.add('hidden');

                    // Update tab styling
                    tab2025.classList.remove('hover:bg-gray-100', 'text-gray-700');
                    tab2025.classList.add('bg-yellow-600', 'text-white');

                    tab2023.classList.remove('bg-yellow-600', 'text-white');
                    tab2023.classList.add('hover:bg-gray-100', 'text-gray-700');

                    activeTab = '2025-27';
                } else if (targetTab === '2023-25') {
                    // Show 2023-25 content
                    content2023.classList.remove('hidden');
                    content2025.classList.add('hidden');

                    // Update tab styling
                    tab2023.classList.remove('hover:bg-gray-100', 'text-gray-700');
                    tab2023.classList.add('bg-yellow-600', 'text-white');

                    tab2025.classList.remove('bg-yellow-600', 'text-white');
                    tab2025.classList.add('hover:bg-gray-100', 'text-gray-700');

                    activeTab = '2023-25';

                    // Load 2023-25 data if not already loaded
                    if (!document.getElementById('pst-members').hasAttribute('data-loaded')) {
                        load2023Data();
                    }
                }
            }

            // Tab click handlers
            tab2025.addEventListener('click', () => switchTab('2025-27'));
            tab2023.addEventListener('click', () => switchTab('2023-25'));

            // Function to load 2023-25 session data
            function load2023Data() {
                // Mark as loading started
                document.getElementById('pst-members').setAttribute('data-loaded', 'true');

                // Load PST data
                fetch('https://website.sadhumargi.in/api/pst')
                    .then(response => response.json())
                    .then(data => {
                        displayPSTMembers(data);
                    })
                    .catch(error => {
                        console.error('Error loading PST data:', error);
                        document.getElementById('pst-loading').innerHTML = '<p class="text-red-600">डाटा लोड करने में समस्या हुई</p>';
                    });

                // Load all PDF data
                const pdfApis = [
                    { api: 'https://website.sadhumargi.in/api/vp-sec-pdf', container: 'vp-sec-pdfs', loading: 'vp-sec-loading' },
                    { api: 'https://website.sadhumargi.in/api/pravarti-sanyojak-pdf', container: 'pravarti-pdfs', loading: 'pravarti-loading' },
                    { api: 'https://website.sadhumargi.in/api/it-cell-pdf', container: 'it-cell-pdfs', loading: 'it-cell-loading' },
                    { api: 'https://website.sadhumargi.in/api/sthayi-sampati-pdf', container: 'sthayi-sampati-pdfs', loading: 'sthayi-sampati-loading' },
                    { api: 'https://website.sadhumargi.in/api/sanyojan-mandal-pdf', container: 'sanyojan-mandal-pdfs', loading: 'sanyojan-mandal-loading' },
                    { api: 'https://website.sadhumargi.in/api/samta-jan-kalyan-pdf', container: 'samta-jan-kalyan-pdfs', loading: 'samta-jan-kalyan-loading' }
                ];

                pdfApis.forEach(item => {
                    fetch(item.api)
                        .then(response => response.json())
                        .then(data => {
                            displayPDFs(data, item.container, item.loading);
                        })
                        .catch(error => {
                            console.error(`Error loading ${item.api}:`, error);
                            document.getElementById(item.loading).innerHTML = '<p class="text-red-600">डाटा लोड करने में समस्या हुई</p>';
                        });
                });
            }

            function displayPSTMembers(members) {
                const container = document.getElementById('pst-members');
                const loading = document.getElementById('pst-loading');

                if (members && members.length > 0) {
                    let html = '';
                    members.forEach(member => {
                        if (member.session === '2023-25') {
                            html += `
                                                <div class="bg-white rounded-xl shadow hover:shadow-lg transition duration-300 ease-in-out overflow-hidden">
                                                    <div class="flex justify-center items-center h-[180px] bg-gray-50">
                                                        <img src="https://website.sadhumargi.in/storage/${member.photo || 'placeholder.jpg'}" 
                                                             alt="${member.name}" class="h-full object-contain" />
                                                    </div>
                                                    <div class="px-4 py-4 text-center">
                                                        <h3 class="text-base font-semibold text-gray-800">${member.name}</h3>
                                                        <p class="text-sm text-gray-600 mt-1">${member.post || ''}</p>
                                                    </div>
                                                </div>
                                            `;
                        }
                    });
                    container.innerHTML = html;
                    container.classList.remove('hidden');
                    loading.classList.add('hidden');
                } else {
                    loading.innerHTML = '<p class="text-gray-600">कोई डाटा उपलब्ध नहीं है</p>';
                }
            }

            function displayPDFs(pdfs, containerId, loadingId) {
                const container = document.getElementById(containerId);
                const loading = document.getElementById(loadingId);

                if (pdfs && pdfs.length > 0) {
                    let html = '';
                    pdfs.forEach((pdf, index) => {
                        if (pdf.session === '2023-25') {
                            const pdfUrl = `https://website.sadhumargi.in/storage/${pdf.pdf}`;
                            const modalId = `modal-${containerId}-${index}`;
                            html += `
                                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition duration-300 ease-in-out overflow-hidden w-full max-w-3xl">
                                            <div class="flex flex-col md:flex-row">
                                                <!-- PDF Preview Section -->
                                                <div class="md:w-1/2 bg-white border-r border-gray-200">
                                                    <div class="p-4">
                                                        <div class="mb-3 text-center">
                                                            <svg class="mx-auto h-12 w-12 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-300" style="height: 280px;">
                                                            <iframe src="${pdfUrl}#view=FitH&toolbar=0&navpanes=0&scrollbar=0" 
                                                                    class="w-full h-full border-0" 
                                                                    style="background: white;"
                                                                    title="PDF Preview">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Content Section -->
                                                <div class="md:w-1/2 p-6 flex flex-col justify-between">
                                                    <div>
                                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">${pdf.name}</h3>
                                                        <p class="text-sm text-gray-600 mb-4">सत्र: ${pdf.session}</p>
                                                        <p class="text-sm text-gray-500 mb-6">इस PDF को देखने या डाउनलोड करने के लिए नीचे दिए गए बटन का उपयोग करें।</p>
                                                    </div>

                                                    <!-- Action Buttons -->
                                                    <div class="flex flex-col gap-3">
                                                        <button onclick="openPDFModal('${pdfUrl}', '${pdf.name}', '${modalId}')" 
                                                                class="w-full inline-flex items-center justify-center px-4 py-3 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition duration-200">
                                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                            </svg>
                                                            पूर्ण स्क्रीन में देखें
                                                        </button>
                                                        <a href="${pdfUrl}" 
                                                           target="_blank" 
                                                           class="w-full inline-flex items-center justify-center px-4 py-3 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition duration-200">
                                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                            </svg>
                                                            डाउनलोड करें
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                        }
                    });
                    if (html) {
                        // Create perfectly centered layout for PDFs
                        container.innerHTML = `
                                    <div class="flex justify-center mb-8">
                                        <div class="flex flex-wrap justify-center gap-6 max-w-4xl">
                                            ${html}
                                        </div>
                                    </div>
                                `;
                        container.classList.remove('hidden');
                        loading.classList.add('hidden');
                    } else {
                        loading.innerHTML = '<p class="text-gray-600">इस सत्र के लिए कोई डाटा उपलब्ध नहीं है</p>';
                    }
                } else {
                    loading.innerHTML = '<p class="text-gray-600">कोई डाटा उपलब्ध नहीं है</p>';
                }
            }

            // PDF Modal functions
            window.openPDFModal = function (pdfUrl, title, modalId) {
                // Remove existing modal if any
                const existingModal = document.getElementById('pdf-modal');
                if (existingModal) {
                    existingModal.remove();
                }

                // Create modal
                const modal = document.createElement('div');
                modal.id = 'pdf-modal';
                modal.className = 'fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4';
                modal.innerHTML = `
                                    <div class="bg-white rounded-lg w-full max-w-6xl h-full max-h-[90vh] flex flex-col">
                                        <div class="flex items-center justify-between p-4 border-b">
                                            <h3 class="text-lg font-semibold text-gray-900">${title}</h3>
                                            <button onclick="closePDFModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex-1 p-4">
                                            <iframe src="${pdfUrl}#view=FitH" class="w-full h-full border border-gray-200 rounded" title="PDF Viewer"></iframe>
                                        </div>
                                        <div class="p-4 border-t bg-gray-50 flex justify-end gap-2">
                                            <button onclick="closePDFModal()" class="px-4 py-2 text-gray-600 hover:text-gray-800 transition-colors">
                                                बंद करें
                                            </button>
                                            <a href="${pdfUrl}" target="_blank" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                                नई विंडो में खोलें
                                            </a>
                                        </div>
                                    </div>
                                `;

                document.body.appendChild(modal);

                // Close on backdrop click
                modal.addEventListener('click', function (e) {
                    if (e.target === modal) {
                        closePDFModal();
                    }
                });
            }

            window.closePDFModal = function () {
                const modal = document.getElementById('pdf-modal');
                if (modal) {
                    modal.remove();
                }
            }

            // Close modal on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closePDFModal();
                }
            });
        });
    </script>
@endsection