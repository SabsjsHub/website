@extends('layouts.spfApp')

@section('title', 'SPF Projects | SABSJS')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-4 md:py-8">
        <!-- Page Header -->
        <div class="mb-4 md:mb-8">
            <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 rounded-2xl shadow-2xl p-8 text-white">
                <h1 class="text-4xl font-bold mb-2">SPF Projects</h1>
                <p class="text-indigo-100 text-lg">Empowering Communities Through Strategic Initiatives</p>
            </div>
        </div>

        <!-- Projects Grid -->
        <div id="projects-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Loading State -->
            <div class="col-span-full flex justify-center items-center py-20">
                <div class="text-center">
                    <svg class="animate-spin h-12 w-12 text-indigo-600 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <p class="text-gray-600 text-lg">Loading projects...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Detail Modal -->
    <div id="project-modal" class="fixed inset-0 z-50 hidden bg-black/60 flex items-center justify-center p-4"
        onclick="closeProjectModal()">
        <div class="bg-white rounded-2xl max-w-3xl w-full p-8 relative shadow-2xl max-h-[90vh] overflow-y-auto"
            onclick="event.stopPropagation()">
            <button onclick="closeProjectModal()"
                class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-3xl leading-none transition-colors">&times;</button>

            <!-- Project Icon -->
            <div
                class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg id="modal-icon" class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>

            <!-- Project Title -->
            <h3 id="modal-title" class="text-3xl font-bold text-indigo-700 mb-6 text-center"></h3>

            <!-- Project Description -->
            <div class="border-t pt-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Project Details
                </h4>
                <div id="modal-description" class="text-gray-700 leading-relaxed space-y-3"></div>
            </div>
        </div>
    </div>

    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        // Project icons mapping
        const projectIcons = {
            'manthan': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>`,
            'gyansetu': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>`,
            'udaan': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>`,
            'arogya': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>`,
            'disha': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>`,
            'voyage': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>`,
            'harmony': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>`,
            'ecocare': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"></path>`,
            'bandhan': `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>`
        };

        // Gradient colors for cards
        const gradientColors = [
            'from-purple-500 to-indigo-600',
            'from-blue-500 to-cyan-600',
            'from-green-500 to-teal-600',
            'from-yellow-500 to-orange-600',
            'from-red-500 to-pink-600',
            'from-indigo-500 to-purple-600',
            'from-pink-500 to-rose-600',
            'from-teal-500 to-green-600',
            'from-orange-500 to-red-600'
        ];

        // Function to get icon based on project title
        function getProjectIcon(title) {
            const lowerTitle = title.toLowerCase();
            if (lowerTitle.includes('manthan')) return projectIcons.manthan;
            if (lowerTitle.includes('gyansetu')) return projectIcons.gyansetu;
            if (lowerTitle.includes('udaan')) return projectIcons.udaan;
            if (lowerTitle.includes('arogya')) return projectIcons.arogya;
            if (lowerTitle.includes('disha')) return projectIcons.disha;
            if (lowerTitle.includes('voyage')) return projectIcons.voyage;
            if (lowerTitle.includes('harmony')) return projectIcons.harmony;
            if (lowerTitle.includes('ecocare')) return projectIcons.ecocare;
            if (lowerTitle.includes('bandhan')) return projectIcons.bandhan;
            // Default icon
            return `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>`;
        }

        // Fetch and display projects
        document.addEventListener('DOMContentLoaded', function () {
            axios.get('https://website.sadhumargi.in/api/spf-projects')
                .then(function (response) {
                    const container = document.getElementById('projects-container');
                    const projects = response.data.data;

                    if (!projects || projects.length === 0) {
                        container.innerHTML = `
                                        <div class="col-span-full text-center py-20">
                                            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                            </svg>
                                            <p class="text-gray-600 text-lg">No projects available at the moment</p>
                                        </div>
                                    `;
                        return;
                    }

                    container.innerHTML = '';

                    projects.forEach((project, index) => {
                        const gradient = gradientColors[index % gradientColors.length];
                        const icon = getProjectIcon(project.title);

                        // Parse description to extract bullet points
                        const descriptionLines = project.description.split('\n').filter(line => line.trim());
                        const previewText = descriptionLines[0] || project.description.substring(0, 100);

                        const card = document.createElement('div');
                        card.className = 'group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden border-2 border-transparent hover:border-indigo-200';

                        card.innerHTML = `
                                        <div class="bg-gradient-to-br ${gradient} p-6 text-white relative overflow-hidden">
                                            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                                            <div class="relative z-10">
                                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        ${icon}
                                                    </svg>
                                                </div>
                                                <h3 class="text-xl font-bold mb-2 line-clamp-2">${project.title}</h3>
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <div class="text-gray-700 text-sm leading-relaxed mb-4 line-clamp-3">
                                                ${previewText.replace(/^•\s*/, '').replace(/^‣\s*/, '')}
                                            </div>

                                            <button 
                                                onclick='openProjectModal(${JSON.stringify(project).replace(/'/g, "&#39;")})' 
                                                class="w-full px-4 py-2 bg-gradient-to-r ${gradient} text-white font-semibold rounded-lg hover:shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center"
                                            >
                                                <span>View Details</span>
                                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    `;

                        container.appendChild(card);
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching projects:', error);
                    const container = document.getElementById('projects-container');
                    container.innerHTML = `
                                    <div class="col-span-full text-center py-20">
                                        <svg class="w-16 h-16 text-red-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-gray-600 text-lg mb-2">Unable to load projects</p>
                                        <p class="text-gray-500 text-sm">Please try again later</p>
                                    </div>
                                `;
                });
        });

        // Open project modal
        function openProjectModal(project) {
            const modal = document.getElementById('project-modal');
            const modalTitle = document.getElementById('modal-title');
            const modalDescription = document.getElementById('modal-description');
            const modalIcon = document.getElementById('modal-icon');

            modalTitle.textContent = project.title;

            // Parse and format description
            const descriptionLines = project.description.split('\n').filter(line => line.trim());
            let formattedDescription = '';

            descriptionLines.forEach(line => {
                const cleanLine = line.trim().replace(/^[•‣]\s*/, '');
                if (cleanLine) {
                    formattedDescription += `
                                    <div class="flex items-start mb-2">
                                        <svg class="w-5 h-5 text-purple-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>${cleanLine}</span>
                                    </div>
                                `;
                }
            });

            modalDescription.innerHTML = formattedDescription;
            modalIcon.innerHTML = getProjectIcon(project.title);

            modal.classList.remove('hidden');
        }

        // Close project modal
        function closeProjectModal() {
            document.getElementById('project-modal').classList.add('hidden');
        }

        // Close modal on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeProjectModal();
            }
        });
    </script>
@endsection