@extends('layouts.spfApp')

@section('title', 'SPF Committee | SABSJS')

@section('content')
    <!-- Google Fonts for Montserrat & Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }
        .font-inter {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 py-8 font-inter">
        <!-- Page Header -->
        <div class="relative overflow-hidden rounded-3xl bg-slate-900 border border-slate-800 p-8 sm:p-12 mb-12 shadow-2xl">
            <!-- Decorative radial gradient glow -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <!-- Grid pattern overlay -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-30 pointer-events-none"></div>
            
            <div class="relative z-10 text-center sm:text-left">
                <span class="text-xs font-bold text-indigo-400 uppercase tracking-widest block mb-3 font-mono">Sadhumargi Professional Forum</span>
                <h1 class="text-4xl sm:text-5xl font-black text-white tracking-tight mb-3 font-montserrat">SPF Committee</h1>
                <p class="text-slate-400 text-base sm:text-lg max-w-2xl font-light">The Leadership & Coordination Team driving ethical leadership, professional growth, and community impact.</p>
            </div>
        </div>

        <!-- Advisory Board Section -->
        <div class="mb-16">
            <div class="relative py-4 mb-8 border-b border-slate-200/60 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center shadow-sm border border-indigo-100/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-black text-slate-800 tracking-tight font-montserrat">Advisory Board</h2>
                        <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider font-mono mt-0.5">Strategic Direction & Guidance</p>
                    </div>
                </div>
            </div>

            <div id="advisory-board-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
                <!-- Loading State -->
                <div class="col-span-full flex justify-center items-center py-12">
                    <div class="text-center">
                        <svg class="animate-spin h-10 w-10 text-indigo-600 mx-auto mb-3" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        <p class="text-gray-500 font-medium text-sm">Loading Advisory Board...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Committee Section -->
        <div class="mb-16 border-t border-slate-100 pt-12">
            <div class="relative py-4 mb-8 border-b border-slate-200/60 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shadow-sm border border-blue-100/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-black text-slate-800 tracking-tight font-montserrat">Core Committee</h2>
                        <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider font-mono mt-0.5">Executive Management & Operations</p>
                    </div>
                </div>
            </div>

            <div id="core-committee-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
                <!-- Loading State -->
                <div class="col-span-full flex justify-center items-center py-12">
                    <div class="text-center">
                        <svg class="animate-spin h-10 w-10 text-blue-600 mx-auto mb-3" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        <p class="text-gray-500 font-medium text-sm">Loading Core Committee...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Anchal Coordinators Section -->
        <div class="mb-16 border-t border-slate-100 pt-12">
            <div class="relative py-4 mb-8 border-b border-slate-200/60 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shadow-sm border border-emerald-100/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-black text-slate-800 tracking-tight font-montserrat">Anchal Coordinators</h2>
                        <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider font-mono mt-0.5">Regional Chapters & Networks</p>
                    </div>
                </div>
            </div>

            <div id="anchal-coordinators-container"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
                <!-- Loading State -->
                <div class="col-span-full flex justify-center items-center py-12">
                    <div class="text-center">
                        <svg class="animate-spin h-10 w-10 text-green-600 mx-auto mb-3" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        <p class="text-gray-500 font-medium text-sm">Loading Anchal Coordinators...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 🧘 Member Bio Modal -->
    <div id="member-bio-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-950/40 backdrop-blur-md" onclick="closeMemberBioModal()"></div>
        <div class="bg-white rounded-[32px] max-w-md w-full p-7 relative z-10 shadow-2xl border border-slate-100 transform scale-95 transition-all duration-300" id="member-bio-modal-card">
            <button onclick="closeMemberBioModal()" class="absolute top-5 right-5 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="flex flex-col items-center text-center">
                <div class="w-24 h-24 rounded-full overflow-hidden shadow-md border-2 border-indigo-100 p-0.5 mb-4">
                    <img id="member-modal-photo" src="" alt="" class="w-full h-full object-cover rounded-full">
                </div>
                <h3 id="member-modal-name" class="text-xl font-extrabold text-slate-800 mb-1 font-montserrat"></h3>
                <p id="member-modal-meta" class="text-xs text-indigo-600 font-bold tracking-wide uppercase mb-4 font-mono"></p>
                <div class="w-full h-[1px] bg-slate-100 mb-4"></div>
                <p id="member-modal-bio" class="text-sm text-slate-600 leading-relaxed mb-6 font-light"></p>
                <div class="flex items-center gap-3">
                    <a href="https://linkedin.com" target="_blank" class="px-5 py-2.5 bg-indigo-50 hover:bg-indigo-100 text-indigo-600 text-xs font-bold rounded-xl flex items-center gap-2 transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        LinkedIn Profile
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        // Modal functions
        function openMemberBio(member) {
            const photoUrl = member.photo
                ? `https://website.sadhumargi.in/storage/${member.photo}`
                : 'https://website.sadhumargi.in/img/dummy-profile.png';
            
            document.getElementById('member-modal-photo').src = photoUrl;
            document.getElementById('member-modal-name').innerText = member.name;
            document.getElementById('member-modal-meta').innerText = `${member.city} • Term: ${member.session}`;
            
            // Mock bio text based on location and role to look highly professional
            document.getElementById('member-modal-bio').innerText = `Dedicated member of Sadhumargi Professional Forum leading local initiatives in ${member.city}. Committed to integrating spiritual/ethical values with corporate excellence and driving community empowerment programs during the ${member.session} session.`;
            
            const modal = document.getElementById('member-bio-modal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('member-bio-modal-card').classList.remove('scale-95');
                document.getElementById('member-bio-modal-card').classList.add('scale-100');
            }, 50);
        }

        function closeMemberBioModal() {
            const modal = document.getElementById('member-bio-modal');
            document.getElementById('member-bio-modal-card').classList.remove('scale-100');
            document.getElementById('member-bio-modal-card').classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 150);
        }

        // Function to create member card
        function createMemberCard(member, gradientClass) {
            // Use a professional dummy image if photo is not available
            const photoUrl = member.photo
                ? `https://website.sadhumargi.in/storage/${member.photo}`
                : 'https://website.sadhumargi.in/img/dummy-profile.png';

            const card = document.createElement('div');
            card.className = 'group bg-white border border-slate-100 hover:border-indigo-100 rounded-3xl p-6 transition-all duration-300 flex flex-col items-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(79,70,229,0.06)] hover:-translate-y-1.5 relative overflow-hidden';

            card.innerHTML = `
                <div class="relative w-32 h-40 mb-5 flex-shrink-0">
                    <div class="w-full h-full rounded-2xl overflow-hidden shadow-sm group-hover:shadow-md transition-all duration-500 bg-slate-50">
                        <img 
                            src="${photoUrl}" 
                            alt="${member.name}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.src='https://website.sadhumargi.in/img/dummy-profile.png'"
                        >
                    </div>
                </div>

                <h3 class="text-base font-extrabold text-slate-800 text-center mb-1 line-clamp-1 group-hover:text-indigo-600 transition-colors w-full font-montserrat" title="${member.name}">${member.name}</h3>

                <div class="text-xs text-slate-500 font-semibold text-center mb-2 flex items-center justify-center gap-1.5">
                    <span>${member.city}</span>
                    <span class="text-slate-300 font-light">&bull;</span>
                    <span>Term: ${member.session}</span>
                </div>

                <!-- Hover Actions Fade-in -->
                <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 mt-2 flex items-center justify-center gap-3.5">
                    <a href="https://linkedin.com" target="_blank" class="w-8 h-8 rounded-full bg-slate-50 hover:bg-indigo-50 hover:text-indigo-600 text-slate-400 flex items-center justify-center transition-colors shadow-sm border border-slate-100" title="LinkedIn Profile">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <span class="text-[11px] font-bold text-indigo-600 hover:text-indigo-700 cursor-pointer flex items-center gap-0.5" onclick='openMemberBio(${JSON.stringify(member).replace(/'/g, "&#39;")})'>
                        View Bio
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </span>
                </div>
            `;

            return card;
        }

        // Fetch Advisory Board
        document.addEventListener('DOMContentLoaded', function () {
            axios.get('https://website.sadhumargi.in/api/spf-committee/advisory-board')
                .then(function (response) {
                    const container = document.getElementById('advisory-board-container');
                    const members = response.data.data;

                    if (!members || members.length === 0) {
                        container.innerHTML = `
                                    <div class="col-span-full text-center py-12">
                                        <p class="text-gray-500 font-medium">No advisory board members available</p>
                                    </div>
                                `;
                        return;
                    }

                    container.innerHTML = '';
                    members.forEach(member => {
                        const card = createMemberCard(member, 'from-purple-500 to-indigo-600');
                        container.appendChild(card);
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching advisory board:', error);
                    document.getElementById('advisory-board-container').innerHTML = `
                                <div class="col-span-full text-center py-12">
                                    <p class="text-red-500 font-medium">Unable to load advisory board members</p>
                                </div>
                            `;
                });
        });

        // Fetch Core Committee
        document.addEventListener('DOMContentLoaded', function () {
            axios.get('https://website.sadhumargi.in/api/spf-committee/core-committee')
                .then(function (response) {
                    const container = document.getElementById('core-committee-container');
                    const members = response.data.data;

                    if (!members || members.length === 0) {
                        container.innerHTML = `
                                    <div class="col-span-full text-center py-12">
                                        <p class="text-gray-500 font-medium">No core committee members available</p>
                                    </div>
                                `;
                        return;
                    }

                    container.innerHTML = '';
                    members.forEach(member => {
                        const card = createMemberCard(member, 'from-blue-500 to-cyan-600');
                        container.appendChild(card);
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching core committee:', error);
                    document.getElementById('core-committee-container').innerHTML = `
                                <div class="col-span-full text-center py-12">
                                    <p class="text-red-500 font-medium">Unable to load core committee members</p>
                                </div>
                            `;
                });
        });

        // Fetch Anchal Coordinators
        document.addEventListener('DOMContentLoaded', function () {
            axios.get('https://website.sadhumargi.in/api/spf-committee/anchal-coordinators')
                .then(function (response) {
                    const container = document.getElementById('anchal-coordinators-container');
                    const members = response.data.data;

                    if (!members || members.length === 0) {
                        container.innerHTML = `
                                    <div class="col-span-full max-w-lg mx-auto bg-slate-50 border border-dashed border-slate-200 rounded-[32px] p-8 sm:p-10 text-center shadow-[0_4px_20px_rgba(0,0,0,0.01)] mt-4">
                                        <div class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-sm border border-indigo-100/30">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-slate-800 mb-2 font-montserrat">Regional Positions Opening Soon</h3>
                                        <p class="text-sm text-slate-500 mb-6 leading-relaxed max-w-md mx-auto font-light">We are expanding our network of Anchal Coordinators across regions. Join the core leadership team and lead professional community growth.</p>
                                        <div class="flex items-center justify-center gap-3">
                                            <a href="mailto:spf@sadhumargi.in" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold rounded-xl transition-all duration-300 shadow-sm hover:shadow-indigo-500/10">
                                                Contact Secretariat
                                            </a>
                                            <a href="https://spf.sadhumargi.org/" target="_blank" class="px-5 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-bold rounded-xl transition-all duration-300">
                                                Join Us
                                            </a>
                                        </div>
                                    </div>
                                `;
                        return;
                    }

                    container.innerHTML = '';
                    members.forEach(member => {
                        const card = createMemberCard(member, 'from-green-500 to-teal-600');
                        container.appendChild(card);
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching anchal coordinators:', error);
                    document.getElementById('anchal-coordinators-container').innerHTML = `
                                <div class="col-span-full text-center py-12">
                                    <p class="text-red-500 font-medium">Unable to load anchal coordinators</p>
                                </div>
                            `;
                });
        });
    </script>
@endsection