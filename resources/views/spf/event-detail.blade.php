@extends('layouts.spfApp')

@section('title', 'Event Details | SABSJS')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8 relative">
        <!-- Background Pattern (optional subtle addition to match mockup vibe) -->
        <div class="absolute inset-0 z-[-1] opacity-5 pointer-events-none" style="background-image: radial-gradient(#4f46e5 1px, transparent 1px); background-size: 32px 32px;"></div>

        <!-- Loading State -->
        <div id="loading-state" class="text-center py-16">
            <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-4 border-b-4 border-gray-800"></div>
            <p class="mt-4 text-gray-600 text-lg">Loading event details...</p>
        </div>

        <!-- Event Details Container -->
        <div id="event-details" class="hidden">
            <!-- Back Button -->
            <a href="/events-spf" class="inline-flex items-center text-gray-600 hover:text-gray-900 font-medium mb-6 transition-colors text-sm">
                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to Events
            </a>

            <div class="flex flex-col lg:flex-row gap-8 items-start">
                
                <!-- Left Column -->
                <div class="w-full lg:w-1/3 flex flex-col gap-6">
                    <!-- Event Image Card -->
                    <div class="relative w-full aspect-[4/5] max-h-[500px] rounded-2xl shadow-sm border border-gray-100 overflow-hidden bg-gray-900 group">
                        <!-- Blurred Background Image -->
                        <img id="event-image-blur" src="" alt="" class="absolute inset-0 w-full h-full object-cover opacity-60 blur-2xl scale-110" />
                        
                        <!-- Actual Contained Image -->
                        <img id="event-image" src="" alt="" class="absolute inset-0 w-full h-full object-contain cursor-pointer transition-transform group-hover:scale-105 duration-500 z-10" onclick="openImagePreview(this.src)" />
                        
                        <!-- Badge -->
                        <div id="event-status-badge" class="absolute top-3 left-3 shadow-sm z-20"></div>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="w-full lg:w-2/3 flex flex-col">
                    <!-- Title -->
                    <h1 id="event-title" class="text-xl md:text-2xl font-bold text-gray-900 mb-3 leading-tight"></h1>

                    <!-- Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 mb-3">
                        <!-- Date -->
                        <div class="flex items-start bg-white border border-gray-100 shadow-sm p-2.5 rounded-2xl">
                            <div class="bg-gray-50 p-1.5 rounded-xl mr-2.5 flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-500 font-semibold mb-0.5 uppercase tracking-wide">Event Date</p>
                                <p id="event-date" class="font-bold text-gray-900 text-[12px]"></p>
                            </div>
                        </div>

                        <!-- Time -->
                        <div class="flex items-start bg-white border border-gray-100 shadow-sm p-2.5 rounded-2xl">
                            <div class="bg-gray-50 p-1.5 rounded-xl mr-2.5 flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-500 font-semibold mb-0.5 uppercase tracking-wide">Time</p>
                                <p id="event-time" class="font-bold text-gray-900 text-[12px]"></p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start bg-white border border-gray-100 shadow-sm p-2.5 rounded-2xl col-span-1">
                            <div class="bg-gray-50 p-1.5 rounded-xl mr-2.5 flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start gap-2">
                                    <div class="flex flex-col">
                                        <p class="text-[10px] text-gray-500 font-semibold mb-0.5 uppercase tracking-wide">Location</p>
                                        <p id="event-location" class="font-bold text-gray-900 text-[12px]"></p>
                                        <a href="#" class="text-indigo-600 text-[9px] font-semibold mt-1 inline-flex items-center hover:underline">
                                            <svg class="w-2.5 h-2.5 mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            Join Zoom Meeting
                                        </a>
                                    </div>
                                    <a href="#" class="text-indigo-600 text-[9px] font-semibold inline-flex items-center hover:underline flex-shrink-0">
                                        <svg class="w-2.5 h-2.5 mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        View in Calendar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Project -->
                        <div class="flex items-start bg-white border border-gray-100 shadow-sm p-2.5 rounded-2xl">
                            <div class="bg-gray-50 p-1.5 rounded-xl mr-2.5 flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-500 font-semibold mb-0.5 uppercase tracking-wide">Project</p>
                                <p id="event-project" class="font-bold text-gray-900 text-[12px]"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Registration Period Card -->
                    <div id="registration-section" class="hidden mb-3 bg-white rounded-2xl shadow-sm border border-gray-100 p-3.5">
                        <h3 class="text-[13px] font-bold text-gray-900 mb-3.5 flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1.5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Registration Period
                        </h3>
                        
                        <!-- Timeline -->
                        <div class="relative px-1 mt-2">
                            <div class="absolute left-1 right-1 h-[2px] bg-gray-200 top-1/2 transform -translate-y-1/2"></div>
                            <div class="absolute left-1 w-1/2 h-[2px] bg-indigo-600 top-1/2 transform -translate-y-1/2"></div>
                            
                            <div class="flex justify-between items-center relative z-10">
                                <div class="w-3.5 h-3.5 rounded-full bg-indigo-600 border-2 border-white shadow-sm flex-shrink-0"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-white border-[1.5px] border-gray-300 flex-shrink-0"></div>
                            </div>
                        </div>
                        
                        <!-- Dates -->
                        <div class="flex justify-between items-center mt-2.5 text-[11.5px] font-semibold text-gray-800">
                            <span id="event-reg-start"></span>
                            <span class="text-gray-400 text-[9px] uppercase tracking-wider font-bold">to</span>
                            <span id="event-reg-end"></span>
                        </div>
                    </div>

                    <!-- Description with See More -->
                    <div class="mb-3 bg-white border border-gray-100 shadow-sm p-3.5 rounded-2xl">
                        <h2 class="text-[13px] font-bold text-gray-900 mb-1.5 flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1.5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                            Description
                        </h2>
                        <div class="relative">
                            <div id="event-description-container" class="max-h-20 overflow-hidden relative transition-all duration-300">
                                <div id="event-description" class="text-gray-700 text-[12.5px] leading-relaxed whitespace-pre-line pb-1"></div>
                                <!-- Gradient Overlay -->
                                <div id="description-gradient" class="absolute bottom-0 left-0 right-0 h-10 bg-gradient-to-t from-white to-transparent transition-opacity duration-300"></div>
                            </div>
                            <button id="see-more-btn" onclick="toggleDescription()" class="text-indigo-600 hover:text-indigo-800 text-[11px] font-bold mt-1 inline-flex items-center transition-colors">
                                <span id="see-more-text">See More</span>
                                <svg id="see-more-icon" class="w-3 h-3 ml-1 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Registration Action Button -->
                    <div id="registration-action-section" class="hidden mt-1">
                        <a id="registration-link-btn" href="#" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center px-6 py-2.5 text-[13px] font-bold text-white bg-gray-900 rounded-xl shadow-sm hover:bg-gray-800 transition-colors w-full sm:w-auto">
                            Register Now
                            <svg class="w-3.5 h-3.5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Error State -->
        <div id="error-state" class="hidden text-center py-16">
            <svg class="w-24 h-24 mx-auto text-red-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-gray-500 text-xl mb-4">Event not found</p>
            <a href="/events-spf"
                class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                Back to Events
            </a>
        </div>
    </div>

    <!-- Image Preview Modal -->
    <div id="image-preview-modal" class="fixed inset-0 z-[60] hidden bg-black/90 flex items-center justify-center p-4"
        onclick="closeImagePreview()">
        <button onclick="closeImagePreview()"
            class="absolute top-4 right-4 text-white hover:text-red-500 text-4xl leading-none transition-colors z-10">&times;</button>
        <img id="preview-image" src="" alt="" class="max-h-[90vh] max-w-[90vw] object-contain"
            onclick="event.stopPropagation()" />
    </div>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        const eventId = {{ $eventId }};

        document.addEventListener("DOMContentLoaded", function () {
            fetchEventDetails();
        });

        function fetchEventDetails() {
            axios.get('https://website.sadhumargi.in/api/spf-events')
                .then(function (response) {
                    const events = response.data.data;
                    const event = events.find(e => e.id === eventId);

                    if (!event) {
                        showError();
                        return;
                    }

                    displayEventDetails(event);
                })
                .catch(function (error) {
                    console.log("Events API error:", error);
                    showError();
                });
        }

        function displayEventDetails(event) {
            const eventImage = "https://website.sadhumargi.in/storage/" + event.photo;
            const eventDate = new Date(event.date).toLocaleDateString('en-IN', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            // Check if event is completed or upcoming
            const currentDate = new Date();
            const eventDateObj = new Date(event.date);
            const isCompleted = eventDateObj < currentDate;

            const statusBadgeHtml = isCompleted
                ? '<div class="bg-gradient-to-r from-gray-600 to-gray-800 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center"><svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Completed</div>'
                : '<div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center"><svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Upcoming</div>';

            // Set event details
            document.getElementById("event-image").src = eventImage;
            document.getElementById("event-image-blur").src = eventImage;
            document.getElementById("event-image").alt = event.title;
            document.getElementById("event-status-badge").innerHTML = statusBadgeHtml;
            document.getElementById("event-title").innerText = event.title;
            document.getElementById("event-date").innerText = eventDate;
            document.getElementById("event-time").innerText = event.time;
            document.getElementById("event-location").innerText = event.location;
            document.getElementById("event-project").innerText = event.project.title;
            document.getElementById("event-description").innerHTML = event.description;

            // Show/hide registration section
            const registrationSection = document.getElementById("registration-section");
            if (event.event_reg_start && event.event_reg_close) {
                const regStart = new Date(event.event_reg_start).toLocaleDateString('en-IN', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                const regEnd = new Date(event.event_reg_close).toLocaleDateString('en-IN', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });

                document.getElementById("event-reg-start").innerText = regStart;
                document.getElementById("event-reg-end").innerText = regEnd;
                registrationSection.classList.remove("hidden");
            }

            // Show/hide registration link button
            const registrationActionSection = document.getElementById("registration-action-section");
            const registrationLinkBtn = document.getElementById("registration-link-btn");
            
            let isRegistrationOpen = true;
            if (event.event_reg_close) {
                const regCloseDate = new Date(event.event_reg_close);
                regCloseDate.setHours(23, 59, 59, 999); // Allow registration until the end of the close date
                if (new Date() > regCloseDate) {
                    isRegistrationOpen = false;
                }
            }

            if (event.registration_link && isRegistrationOpen) {
                registrationLinkBtn.href = event.registration_link;
                registrationActionSection.classList.remove("hidden");
            } else {
                registrationActionSection.classList.add("hidden");
            }

            // Check if we need 'See More' button
            setTimeout(() => {
                const descContainer = document.getElementById("event-description-container");
                const seeMoreBtn = document.getElementById("see-more-btn");
                if (descContainer.scrollHeight <= descContainer.clientHeight) {
                    seeMoreBtn.classList.add("hidden");
                    document.getElementById("description-gradient").classList.add("hidden");
                }
            }, 100);

            // Show event details, hide loading
            document.getElementById("loading-state").classList.add("hidden");
            document.getElementById("event-details").classList.remove("hidden");
        }

        function showError() {
            document.getElementById("loading-state").classList.add("hidden");
            document.getElementById("error-state").classList.remove("hidden");
        }

        let isDescriptionExpanded = false;
        function toggleDescription() {
            const container = document.getElementById('event-description-container');
            const gradient = document.getElementById('description-gradient');
            const text = document.getElementById('see-more-text');
            const icon = document.getElementById('see-more-icon');

            if (isDescriptionExpanded) {
                container.classList.add('max-h-20');
                gradient.classList.remove('opacity-0');
                text.innerText = 'See More';
                icon.classList.remove('rotate-180');
            } else {
                container.classList.remove('max-h-20');
                gradient.classList.add('opacity-0');
                text.innerText = 'See Less';
                icon.classList.add('rotate-180');
            }
            isDescriptionExpanded = !isDescriptionExpanded;
        }

        function openImagePreview(imageSrc) {
            document.getElementById("preview-image").src = imageSrc;
            document.getElementById("image-preview-modal").classList.remove("hidden");
        }

        function closeImagePreview() {
            document.getElementById("image-preview-modal").classList.add("hidden");
        }
    </script>
@endsection