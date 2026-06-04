@extends('layouts.spfApp')

@section('title', 'Event Details | SABSJS')

@section('content')
    <div class="max-w-5xl mx-auto px-4 py-8">
        <!-- Loading State -->
        <div id="loading-state" class="text-center py-16">
            <div class="inline-block animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-indigo-600"></div>
            <p class="mt-4 text-gray-600 text-lg">Loading event details...</p>
        </div>

        <!-- Event Details Container -->
        <div id="event-details" class="hidden">
            <!-- Back Button -->
            <a href="/events-spf"
                class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-semibold mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Events
            </a>

            <!-- Event Card -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                <!-- Event Image -->
                <div
                    class="relative h-96 bg-gradient-to-br from-gray-100 to-gray-200 overflow-hidden flex items-center justify-center">
                    <img id="event-image" src="" alt="" class="w-full h-full object-contain cursor-pointer"
                        onclick="openImagePreview(this.src)" />
                    <div id="event-status-badge" class="absolute top-4 left-4"></div>
                </div>

                <!-- Event Content -->
                <div class="p-8">
                    <!-- Title and Status -->
                    <div class="flex flex-wrap items-center gap-3 mb-6">
                        <h1 id="event-title" class="text-4xl font-bold text-indigo-700 flex-1 min-w-0"></h1>
                    </div>

                    <!-- Event Details Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div
                            class="flex items-start space-x-3 bg-gradient-to-br from-purple-50 to-indigo-50 p-5 rounded-xl">
                            <svg class="w-7 h-7 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold uppercase mb-1">Event Date</p>
                                <p id="event-date" class="font-bold text-gray-800 text-xl"></p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3 bg-gradient-to-br from-blue-50 to-purple-50 p-5 rounded-xl">
                            <svg class="w-7 h-7 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold uppercase mb-1">Time</p>
                                <p id="event-time" class="font-bold text-gray-800 text-xl"></p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3 bg-gradient-to-br from-green-50 to-teal-50 p-5 rounded-xl">
                            <svg class="w-7 h-7 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold uppercase mb-1">Location</p>
                                <p id="event-location" class="font-bold text-gray-800 text-xl"></p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-3 bg-gradient-to-br from-orange-50 to-yellow-50 p-5 rounded-xl">
                            <svg class="w-7 h-7 text-orange-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                </path>
                            </svg>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold uppercase mb-1">Project</p>
                                <p id="event-project" class="font-bold text-gray-800 text-xl"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Registration Dates -->
                    <div id="registration-section" class="hidden mb-8">
                        <div
                            class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-green-700 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                    </path>
                                </svg>
                                Registration Period
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600 font-semibold uppercase mb-1">Registration Starts</p>
                                    <p id="event-reg-start" class="text-gray-800 font-bold text-lg"></p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600 font-semibold uppercase mb-1">Registration Ends</p>
                                    <p id="event-reg-end" class="text-gray-800 font-bold text-lg"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Description -->
                    <div class="border-t pt-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <svg class="w-7 h-7 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7"></path>
                            </svg>
                            Description
                        </h2>
                        <div id="event-description" class="text-gray-700 text-lg leading-relaxed whitespace-pre-line">
                        </div>
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
            document.getElementById("event-image").alt = event.title;
            document.getElementById("event-status-badge").innerHTML = statusBadgeHtml;
            document.getElementById("event-title").innerText = event.title;
            document.getElementById("event-date").innerText = eventDate;
            document.getElementById("event-time").innerText = event.time;
            document.getElementById("event-location").innerText = event.location;
            document.getElementById("event-project").innerText = event.project.title;
            document.getElementById("event-description").innerText = event.description;

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

            // Show event details, hide loading
            document.getElementById("loading-state").classList.add("hidden");
            document.getElementById("event-details").classList.remove("hidden");
        }

        function showError() {
            document.getElementById("loading-state").classList.add("hidden");
            document.getElementById("error-state").classList.remove("hidden");
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