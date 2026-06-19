@extends('layouts.spfApp')

@section('title', 'SPF Events | SABSJS')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-4 md:py-8">
        <!-- Page Header -->
        <div class="mb-6 border-b border-gray-200 pb-4 flex justify-between items-end">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">SPF Events</h1>
                <p class="text-sm text-gray-500 mt-1">Explore all upcoming and past events</p>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="mb-6 bg-white rounded-lg border border-gray-200 p-4 shadow-sm">
            <div class="flex flex-col md:flex-row gap-4 items-end justify-between">
                <div class="flex-1 w-full md:w-auto">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Filter by Project</label>
                    <select id="project-filter"
                        class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="all">All Projects</option>
                    </select>
                </div>
                <div class="flex-1 w-full md:w-auto">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Sort by</label>
                    <select id="sort-filter"
                        class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="date-desc">Latest First</option>
                        <option value="date-asc">Oldest First</option>
                        <option value="title-asc">Title (A-Z)</option>
                        <option value="title-desc">Title (Z-A)</option>
                    </select>
                </div>
                <div class="flex-1 w-full md:w-auto">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Search</label>
                    <input type="text" id="search-input" placeholder="Search events..."
                        class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>
        </div>

        <!-- Loading State -->
        <div id="loading-state" class="text-center py-16">
            <div class="inline-block animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-indigo-600"></div>
            <p class="mt-4 text-gray-600 text-lg">Loading events...</p>
        </div>

        <!-- Events Grid -->
        <div id="events-grid" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
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
                month: 'short',
                day: 'numeric'
            });

            // Check if event is completed or upcoming
            const currentDate = new Date();
            const eventDateObj = new Date(event.date);
            const isCompleted = eventDateObj < currentDate;

            const statusBadge = isCompleted
                ? '<div class="absolute top-2 left-2 bg-gray-800/90 text-white px-2 py-1 rounded text-[10px] font-semibold uppercase tracking-wider">Completed</div>'
                : '<div class="absolute top-2 left-2 bg-emerald-600/90 text-white px-2 py-1 rounded text-[10px] font-semibold uppercase tracking-wider">Upcoming</div>';

            // Format registration dates if available
            let regDatesHtml = '';
            if (event.event_reg_start && event.event_reg_close) {
                const regStart = new Date(event.event_reg_start).toLocaleDateString('en-IN', {
                    month: 'short',
                    day: 'numeric',
                });
                const regEnd = new Date(event.event_reg_close).toLocaleDateString('en-IN', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });
                regDatesHtml = `
                    <div class="mt-3 pt-3 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                        <span class="font-medium text-gray-700">Reg:</span>
                        <span>${regStart} - ${regEnd}</span>
                    </div>
                `;
            }

            const card = document.createElement('div');
            card.className =
                'bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-md transition-shadow duration-200 flex flex-col group';

            card.innerHTML = `
                <div class="relative h-40 bg-gray-100 overflow-hidden cursor-pointer flex items-center justify-center border-b border-gray-100" 
                     onclick="openImagePreview('${eventImage}')">
                    <img src="${eventImage}" alt="${event.title}" 
                         class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" />
                    ${statusBadge}
                </div>

                <div class="p-4 flex flex-col flex-1">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-semibold text-indigo-600 uppercase tracking-wider">${event.project.title}</span>
                        <span class="bg-indigo-50 text-indigo-700 border border-indigo-100 text-[10px] font-bold px-2 py-0.5 rounded shadow-sm">${eventDate}</span>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-2 line-clamp-2 leading-snug">${event.title}</h3>

                    <div class="space-y-1.5 mb-2 mt-auto">
                        <div class="flex items-center text-xs text-gray-600">
                            <svg class="w-3.5 h-3.5 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>${event.time}</span>
                        </div>
                        <div class="flex items-center text-xs text-gray-600">
                            <svg class="w-3.5 h-3.5 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            <span class="line-clamp-1">${event.location}</span>
                        </div>
                    </div>

                    ${regDatesHtml}

                    <a href="/event-spf/${event.id}" 
                       class="mt-3 block w-full px-3 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded hover:bg-gray-50 transition-colors text-center focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                        View Details
                    </a>
                </div>
            `;

            return card;
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