@extends('layouts.app')

@section('title', 'कार्यसमिति सदस्य | SABSJS')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="relative text-center mt-1 mb-6">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

            <h2
                class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
                कार्यसमिति सदस्य
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
            @php
                // ✅ Sort by aanchal ID then group by aanchal name
                $groupedMembers = collect($ksmMembers)
                    ->sortBy(fn($item) => $item['aanchal']['id'] ?? 9999)
                    ->groupBy(fn($item) => $item['aanchal']['name'] ?? 'अन्य');
            @endphp

            @foreach($groupedMembers as $regionName => $members)
                @php
                    $aanchal = $members->first()['aanchal'] ?? null;
                    $aanchalId = $aanchal['id'] ?? '-';
                @endphp

                {{-- 🔷 Region Header Card (Circle + Rounded Banner) --}}
                <section class="flex flex-col flex-wrap pt-6 mb-6">
                    <div class="flex flex-row flex-wrap justify-center">
                        <div class="flex items-center justify-center text-center m-2 w-auto">

                            {{-- 🔵 Circle with ID --}}
                            <div
                                class="w-16 h-16 flex items-center justify-center rounded-full bg-white border-2 border-blue-500 z-10">
                                <span class="text-blue-600 font-bold text-sm">{{ $aanchalId }}</span>
                            </div>

                            {{-- 🟦 Rounded Blue Panel --}}
                            <div
                                class="-ml-4 bg-blue-500 text-white text-center px-4 py-2 rounded-r-full flex flex-col justify-center w-75">
                                <h2 class="text-xl font-bold leading-tight">
                                    {{ $regionName }}
                                </h2>
                                <p class="text-xs leading-tight opacity-90">
                                    {{ $members->count() }} सदस्य
                                </p>
                            </div>

                        </div>
                    </div>
                </section>

                {{-- 👤 Member Cards Grid --}}
                <div class="flex flex-wrap justify-center gap-6 mb-16">
                    @foreach($members as $member)
                        <div
                            class="max-w-[230px] bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">

                            {{-- Member Image --}}
                            <img src="https://website.sadhumargi.in/storage/{{ $member['photo'] }}" alt="{{ $member['name'] }}"
                                class="w-full h-[180px] object-cover" />

                            {{-- Member Info --}}
                            <div class="px-4 py-3">
                                <div class="font-bold text-lg text-gray-800 mb-1">{{ $member['name'] }}</div>
                                <p class="text-sm text-gray-600 leading-snug">
                                    {{ $member['city'] }}<br>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <!-- Session Content 2023-25 (Hidden by default) -->
        <div id="content-2023-25" class="session-content hidden">
            <!-- कार्यसमिति सदस्य Section for 2023-25 -->
            <div class="relative text-center my-8">
                <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
                    class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
                <h2
                    class="font-[Amita] absolute inset-0 flex items-center justify-center text-2xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                    कार्यसमिति सदस्य (2023-25)
                </h2>
            </div>

            <div id="ksm-loading" class="text-center py-8">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-600"></div>
                <p class="mt-2 text-gray-600">डाटा लोड हो रहा है...</p>
            </div>

            <div id="ksm-pdfs" class="hidden">
                <!-- KSM PDFs will be loaded here via JavaScript -->
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
                    if (!document.getElementById('ksm-pdfs').hasAttribute('data-loaded')) {
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
                document.getElementById('ksm-pdfs').setAttribute('data-loaded', 'true');

                // Load KSM PDF data
                fetch('https://website.sadhumargi.in/api/ksm-members-pdf')
                    .then(response => response.json())
                    .then(data => {
                        displayPDFs(data, 'ksm-pdfs', 'ksm-loading');
                    })
                    .catch(error => {
                        console.error('Error loading KSM PDF data:', error);
                        document.getElementById('ksm-loading').innerHTML = '<p class="text-red-600">डाटा लोड करने में समस्या हुई</p>';
                    });
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