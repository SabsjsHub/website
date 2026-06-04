@extends('layouts.spfApp')

@section('title', 'SPF Gallery | SABSJS')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 rounded-2xl shadow-2xl p-8 text-white">
                <h1 class="text-4xl font-bold mb-2">SPF Photo Gallery</h1>
                <p class="text-indigo-100 text-lg">Capturing Moments, Creating Memories</p>
            </div>
        </div>

        <!-- Gallery Container -->
        <div id="gallery-container" class="space-y-12">
            <!-- Loading State -->
            <div class="flex justify-center items-center py-20">
                <div class="text-center">
                    <svg class="animate-spin h-12 w-12 text-indigo-600 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <p class="text-gray-600 text-lg">Loading gallery...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Preview Modal -->
    <div id="image-modal" class="fixed inset-0 z-50 hidden bg-black/90 flex flex-col" onclick="closeImageModal()">
        <!-- Header with Event Name -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 flex-shrink-0">
            <h3 id="modal-event-name" class="text-lg font-bold text-center"></h3>
        </div>

        <button onclick="closeImageModal()"
            class="absolute top-3 right-4 text-white hover:text-red-500 text-4xl leading-none transition-colors z-10">&times;</button>

        <!-- Navigation Buttons -->
        <button onclick="previousImage(event)"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-3 rounded-full transition-all z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button onclick="nextImage(event)"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-3 rounded-full transition-all z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Image Container -->
        <div class="flex-1 flex items-center justify-center p-4 overflow-hidden" onclick="event.stopPropagation()">
            <img id="modal-image" src="" alt="" class="max-w-full max-h-full w-auto h-auto object-contain">
        </div>

        <!-- Footer with Event Name and Counter -->
        <div
            class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 flex items-center justify-between flex-shrink-0">
            <span id="modal-event-name-footer" class="text-sm font-medium"></span>
            <span id="image-counter" class="text-sm font-medium">1 / 1</span>
        </div>
    </div>

    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        let currentEventImages = [];
        let currentImageIndex = 0;
        let currentEventName = '';

        // Fetch and display gallery
        document.addEventListener('DOMContentLoaded', function () {
            axios.get('https://website.sadhumargi.in/api/photo-gallery/fetch/spf')
                .then(function (response) {
                    const container = document.getElementById('gallery-container');
                    const events = response.data;

                    if (!events || events.length === 0) {
                        container.innerHTML = `
                                                <div class="text-center py-20">
                                                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                    <p class="text-gray-600 text-lg">No photos available at the moment</p>
                                                </div>
                                            `;
                        return;
                    }

                    container.innerHTML = '';

                    events.forEach((event, eventIndex) => {
                        const eventSection = document.createElement('div');
                        eventSection.className = 'mb-12';

                        // Event Header
                        const header = document.createElement('div');
                        header.className = 'mb-6';

                        let driveButton = '';
                        if (event.drive_link) {
                            driveButton = `
                                                <a href="${event.drive_link}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M12.545 10.239v3.821h5.445c-.712 2.315-2.647 3.972-5.445 3.972a6.033 6.033 0 110-12.064c1.498 0 2.866.549 3.921 1.453l2.814-2.814A9.969 9.969 0 0012.545 2C7.021 2 2.543 6.477 2.543 12s4.478 10 10.002 10c8.396 0 10.249-7.85 9.426-11.748l-9.426-.013z"/>
                                                    </svg>
                                                    View on Google Drive
                                                </a>
                                            `;
                        }

                        header.innerHTML = `
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mr-3">
                                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <h2 class="text-2xl font-bold text-indigo-700">${event.event_name}</h2>
                                                </div>
                                                ${driveButton}
                                            </div>
                                        `;
                        eventSection.appendChild(header);

                        // Photos Grid
                        const grid = document.createElement('div');
                        grid.className = 'grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4';

                        // Show first 4 photos normally
                        const photosToShow = event.photos.slice(0, 4);
                        const remainingCount = event.photos.length - 4;

                        photosToShow.forEach((photo, photoIndex) => {
                            const photoCard = document.createElement('div');
                            photoCard.className = 'group relative aspect-square overflow-hidden rounded-lg shadow-md hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:scale-105';
                            photoCard.onclick = () => openImageModal(event.photos, photoIndex, event.event_name);

                            photoCard.innerHTML = `
                                                <img 
                                                    src="${photo.url}" 
                                                    alt="${event.event_name}" 
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                                    loading="lazy"
                                                >
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-3">
                                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                                    </svg>
                                                </div>
                                            `;

                            grid.appendChild(photoCard);
                        });

                        // Add 5th photo with "+" overlay if there are more photos
                        if (event.photos.length >= 5) {
                            const fifthPhoto = event.photos[4];
                            const plusCard = document.createElement('div');
                            plusCard.className = 'group relative aspect-square overflow-hidden rounded-lg shadow-md hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:scale-105';
                            plusCard.onclick = () => openImageModal(event.photos, 4, event.event_name);

                            plusCard.innerHTML = `
                                                <img 
                                                    src="${fifthPhoto.url}" 
                                                    alt="${event.event_name}" 
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                                    loading="lazy"
                                                >
                                                <div class="absolute inset-0 bg-black/70 flex items-center justify-center">
                                                    <div class="text-center text-white">
                                                        <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                                                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-3xl font-bold">+${remainingCount}</p>
                                                        <p class="text-sm mt-1">More Photos</p>
                                                    </div>
                                                </div>
                                            `;

                            grid.appendChild(plusCard);
                        }

                        eventSection.appendChild(grid);
                        container.appendChild(eventSection);
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching gallery:', error);
                    document.getElementById('gallery-container').innerHTML = `
                                            <div class="text-center py-20">
                                                <svg class="w-16 h-16 text-red-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <p class="text-gray-600 text-lg mb-2">Unable to load gallery</p>
                                                <p class="text-gray-500 text-sm">Please try again later</p>
                                            </div>
                                        `;
                });
        });

        // Open image modal
        function openImageModal(images, index, eventName) {
            currentEventImages = images;
            currentImageIndex = index;
            currentEventName = eventName;
            showCurrentImage();
            document.getElementById('image-modal').classList.remove('hidden');
        }

        // Close image modal
        function closeImageModal() {
            document.getElementById('image-modal').classList.add('hidden');
        }

        // Show current image
        function showCurrentImage() {
            const modalImage = document.getElementById('modal-image');
            const counter = document.getElementById('image-counter');
            const eventNameHeader = document.getElementById('modal-event-name');
            const eventNameFooter = document.getElementById('modal-event-name-footer');

            modalImage.src = currentEventImages[currentImageIndex].url;
            counter.textContent = `${currentImageIndex + 1} / ${currentEventImages.length}`;
            eventNameHeader.textContent = currentEventName;
            eventNameFooter.textContent = currentEventName;
        }

        // Previous image
        function previousImage(event) {
            event.stopPropagation();
            currentImageIndex = (currentImageIndex - 1 + currentEventImages.length) % currentEventImages.length;
            showCurrentImage();
        }

        // Next image
        function nextImage(event) {
            event.stopPropagation();
            currentImageIndex = (currentImageIndex + 1) % currentEventImages.length;
            showCurrentImage();
        }

        // Keyboard navigation
        document.addEventListener('keydown', function (e) {
            const modal = document.getElementById('image-modal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeImageModal();
                } else if (e.key === 'ArrowLeft') {
                    previousImage(e);
                } else if (e.key === 'ArrowRight') {
                    nextImage(e);
                }
            }
        });
    </script>
@endsection