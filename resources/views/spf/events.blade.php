@extends('layouts.spfApp')

@section('title', 'SPF Events | SABSJS')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-4 md:py-8">
        <!-- Page Header -->
        <div class="mb-4 md:mb-8">
            <div class="flex items-center mb-4">
                <div
                    class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mr-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-indigo-700">SPF Events</h1>
                    <p class="text-gray-600 mt-1">Explore all upcoming and past events</p>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="mb-4 md:mb-8 bg-white rounded-xl shadow-md p-6">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex-1 w-full md:w-auto">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Filter by Project</label>
                    <select id="project-filter"
                        class="w-full px-4 py-3 border-2 border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        <option value="all">All Projects</option>
                    </select>
                </div>
                <div class="flex-1 w-full md:w-auto">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Sort by</label>
                    <select id="sort-filter"
                        class="w-full px-4 py-3 border-2 border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        <option value="date-desc">Latest First</option>
                        <option value="date-asc">Oldest First</option>
                        <option value="title-asc">Title (A-Z)</option>
                        <option value="title-desc">Title (Z-A)</option>
                    </select>
                </div>
                <div class="flex-1 w-full md:w-auto">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Search</label>
                    <input type="text" id="search-input" placeholder="Search events..."
                        class="w-full px-4 py-3 border-2 border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                </div>
            </div>
        </div>

        <!-- Loading State -->
        <div id="loading-state" class="text-center py-16">
            <div class="inline-block animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-indigo-600"></div>
            <p class="mt-4 text-gray-600 text-lg">Loading events...</p>
        </div>

        <!-- Events Grid -->
        <div id="events-grid" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Events will be dynamically inserted here -->
        </div>

        <!-- No Events State -->
        <div id="no-events-state" class="hidden text-center py-16">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-gray-500 text-xl">No events found</p>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div id="event-modal" class="fixed inset-0 z-50 hidden bg-black/60 flex items-center justify-center p-4"
        onclick="closeEventModal()">
        <div class="bg-white rounded-2xl max-w-4xl w-full p-8 relative shadow-2xl max-h-[90vh] overflow-y-auto"
            onclick="event.stopPropagation()">
            <button onclick="closeEventModal()"
                class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-3xl leading-none transition-colors z-10">&times;</button>

            <!-- Event Image -->
            <div class="w-full h-80 flex items-center justify-center mb-6 bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl overflow-hidden cursor-pointer"
                onclick="openImagePreview(document.getElementById('event-modal-image').src)">
                <img id="event-modal-image" src="" alt="" class="max-h-full max-w-full object-contain" />
            </div>

            <!-- Event Title -->
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <h2 id="event-modal-title" class="text-3xl font-bold text-indigo-700 flex-1 min-w-0"></h2>
                <div id="event-modal-status-badge" class="flex-shrink-0"></div>
            </div>

            <!-- Event Details Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="flex items-start space-x-3 bg-gradient-to-br from-purple-50 to-indigo-50 p-4 rounded-lg">
                    <svg class="w-6 h-6 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500 font-semibold uppercase">Event Date</p>
                        <p id="event-modal-date" class="font-bold text-gray-800 text-lg"></p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 bg-gradient-to-br from-blue-50 to-purple-50 p-4 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500 font-semibold uppercase">Time</p>
                        <p id="event-modal-time" class="font-bold text-gray-800 text-lg"></p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 bg-gradient-to-br from-green-50 to-teal-50 p-4 rounded-lg">
                    <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500 font-semibold uppercase">Location</p>
                        <p id="event-modal-location" class="font-bold text-gray-800 text-lg"></p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 bg-gradient-to-br from-orange-50 to-yellow-50 p-4 rounded-lg">
                    <svg class="w-6 h-6 text-orange-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                        </path>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-500 font-semibold uppercase">Project</p>
                        <p id="event-modal-project" class="font-bold text-gray-800 text-lg"></p>
                    </div>
                </div>
            </div>

            <!-- Registration Dates -->
            <div id="registration-section" class="hidden mb-6">
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 p-4 rounded-lg">
                    <h3 class="text-lg font-bold text-green-700 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                            </path>
                        </svg>
                        Registration Period
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-xs text-gray-600 font-semibold uppercase mb-1">Registration Starts</p>
                            <p id="event-modal-reg-start" class="text-gray-800 font-bold"></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-600 font-semibold uppercase mb-1">Registration Ends</p>
                            <p id="event-modal-reg-end" class="text-gray-800 font-bold"></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Description -->
            <div class="border-t pt-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7">
                        </path>
                    </svg>
                    Description
                </h3>
                <p id="event-modal-desc" class="text-gray-700 leading-relaxed whitespace-pre-line"></p>
            </div>
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
        let allEvents = [];
        let filteredEvents = [];

        document.addEventListener("DOMContentLoaded", function () {
            fetchEvents();
            setupFilters();
        });

        function fetchEvents() {
            axios.get('https://website.sadhumargi.in/api/spf-events')
                .then(function (response) {
                    allEvents = response.data.data;
                    filteredEvents = [...allEvents];

                    // Populate project filter
                    populateProjectFilter();

                    // Display events
                    displayEvents();

                    // Hide loading, show grid
                    document.getElementById('loading-state').classList.add('hidden');
                    document.getElementById('events-grid').classList.remove('hidden');
                })
                .catch(function (error) {
                    console.log("Events API error:", error);
                    document.getElementById('loading-state').classList.add('hidden');
                    document.getElementById('no-events-state').classList.remove('hidden');
                });
        }

        function populateProjectFilter() {
            const projectFilter = document.getElementById('project-filter');
            const projects = [...new Set(allEvents.map(event => event.project.title))];

            projects.forEach(project => {
                const option = document.createElement('option');
                option.value = project;
                option.textContent = project;
                projectFilter.appendChild(option);
            });
        }

        function setupFilters() {
            document.getElementById('project-filter').addEventListener('change', applyFilters);
            document.getElementById('sort-filter').addEventListener('change', applyFilters);
            document.getElementById('search-input').addEventListener('input', applyFilters);
        }

        function applyFilters() {
            const projectFilter = document.getElementById('project-filter').value;
            const sortFilter = document.getElementById('sort-filter').value;
            const searchQuery = document.getElementById('search-input').value.toLowerCase();

            // Filter by project
            filteredEvents = allEvents.filter(event => {
                const matchesProject = projectFilter === 'all' || event.project.title === projectFilter;
                const matchesSearch = event.title.toLowerCase().includes(searchQuery) ||
                    event.description.toLowerCase().includes(searchQuery) ||
                    event.location.toLowerCase().includes(searchQuery);

                return matchesProject && matchesSearch;
            });

            // Sort events
            switch (sortFilter) {
                case 'date-desc':
                    filteredEvents.sort((a, b) => new Date(b.date) - new Date(a.date));
                    break;
                case 'date-asc':
                    filteredEvents.sort((a, b) => new Date(a.date) - new Date(b.date));
                    break;
                case 'title-asc':
                    filteredEvents.sort((a, b) => a.title.localeCompare(b.title));
                    break;
                case 'title-desc':
                    filteredEvents.sort((a, b) => b.title.localeCompare(a.title));
                    break;
            }

            displayEvents();
        }

        function displayEvents() {
            const eventsGrid = document.getElementById('events-grid');
            const noEventsState = document.getElementById('no-events-state');

            if (filteredEvents.length === 0) {
                eventsGrid.classList.add('hidden');
                noEventsState.classList.remove('hidden');
                return;
            }

            eventsGrid.classList.remove('hidden');
            noEventsState.classList.add('hidden');
            eventsGrid.innerHTML = '';

            filteredEvents.forEach(event => {
                const eventCard = createEventCard(event);
                eventsGrid.appendChild(eventCard);
            });
        }

        function createEventCard(event) {
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

            const statusBadge = isCompleted
                ? '<div class="absolute top-3 left-3 bg-gradient-to-r from-gray-600 to-gray-800 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg flex items-center"><svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Completed</div>'
                : '<div class="absolute top-3 left-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg flex items-center"><svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Upcoming</div>';

            // Format registration dates if available
            let regDatesHtml = '';
            if (event.event_reg_start && event.event_reg_close) {
                const regStart = new Date(event.event_reg_start).toLocaleDateString('en-IN', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });
                const regEnd = new Date(event.event_reg_close).toLocaleDateString('en-IN', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });
                regDatesHtml = `
                                                                                                    <div class="flex items-start text-sm text-gray-600">
                                                                                                        <svg class="w-4 h-4 mr-2 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                                                                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                                                                                        </svg>
                                                                                                        <div>
                                                                                                            <span class="font-semibold text-green-700">Registration:</span>
                                                                                                            <span class="block">${regStart} - ${regEnd}</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                `;
            }

            const card = document.createElement('div');
            card.className =
                'bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-[1.02] transition-all duration-300 hover:shadow-2xl border-2 border-transparent hover:border-indigo-200 flex flex-col';

            card.innerHTML = `
                                                                                    <div class="relative h-56 bg-gradient-to-br from-gray-100 to-gray-200 overflow-hidden cursor-pointer flex items-center justify-center" 
                                                                                         onclick="openImagePreview('${eventImage}')">
                                                                                        <img src="${eventImage}" alt="${event.title}" 
                                                                                             class="w-full h-full object-contain transition-transform duration-300 hover:scale-105" />
                                                                                        ${statusBadge}
                                                                                    </div>

                                                                                    <div class="p-6 flex flex-col flex-1">
                                                                                        <h3 class="text-xl font-bold text-indigo-700 mb-4 line-clamp-2 min-h-[3.5rem]">${event.title}</h3>

                                                                                        <div class="space-y-2.5 mb-4">
                                                                                            <div class="flex items-center text-sm text-gray-600">
                                                                                                <svg class="w-4 h-4 mr-2 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                                                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                                                </svg>
                                                                                                <span class="font-semibold">${eventDate}</span>
                                                                                            </div>

                                                                                            <div class="flex items-center text-sm text-gray-600">
                                                                                                <svg class="w-4 h-4 mr-2 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                                                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                                </svg>
                                                                                                <span>${event.time}</span>
                                                                                            </div>

                                                                                            <div class="flex items-center text-sm text-gray-600">
                                                                                                <svg class="w-4 h-4 mr-2 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                                                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                                                                </svg>
                                                                                                <span class="line-clamp-1">${event.location}</span>
                                                                                            </div>

                                                                                            <div class="flex items-center text-sm text-gray-600">
                                                                                                <svg class="w-4 h-4 mr-2 text-indigo-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                                                                          d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                                                                                </svg>
                                                                                                <span class="font-semibold text-indigo-700">${event.project.title}</span>
                                                                                            </div>

                                                                                            ${regDatesHtml}
                                                                                        </div>

                                                                                        <a href="/event-spf/${event.id}" 
                                                                                           class="mt-auto block w-full px-4 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-lg hover:from-indigo-600 hover:to-purple-700 transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105 text-center">
                                                                                            View More
                                                                                        </a>
                                                                                    </div>
                                                                                `;

            return card;
        }

        function openEventModal(event) {
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

            document.getElementById("event-modal-image").src = eventImage;
            document.getElementById("event-modal-title").innerText = event.title;
            document.getElementById("event-modal-status-badge").innerHTML = statusBadgeHtml;
            document.getElementById("event-modal-date").innerText = eventDate;
            document.getElementById("event-modal-time").innerText = event.time;
            document.getElementById("event-modal-location").innerText = event.location;
            document.getElementById("event-modal-project").innerText = event.project.title;
            document.getElementById("event-modal-desc").innerText = event.description;

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

                document.getElementById("event-modal-reg-start").innerText = regStart;
                document.getElementById("event-modal-reg-end").innerText = regEnd;
                registrationSection.classList.remove("hidden");
            } else {
                registrationSection.classList.add("hidden");
            }

            document.getElementById("event-modal").classList.remove("hidden");
        }

        function closeEventModal() {
            document.getElementById("event-modal").classList.add("hidden");
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