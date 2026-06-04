@extends('layouts.spfApp')

@section('title', 'साधुमार्गी प्रोफेशनल फोरम | SABSJS')

@section('content')
    <style>
        /* Custom Swiper bullets and pagination */
        .swiper-pagination-bullet {
            background: #a5b4fc !important;
            opacity: 0.6;
            width: 8px;
            height: 8px;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background: #4f46e5 !important;
            opacity: 1;
            width: 20px;
            border-radius: 4px;
        }

        .newsSwiper .swiper-pagination-bullet-active {
            background: #8b5cf6 !important;
        }

        /* Custom scrollbar for modals */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Custom subtle grid background */
        .grid-bg {
            background-image: radial-gradient(rgba(99, 102, 241, 0.15) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
    <div class="max-w-7xl mx-auto px-4 py-6 space-y-10">

        <!-- 🎯 Hero Section -->
        <div
            class="relative bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-950 rounded-3xl shadow-2xl overflow-hidden py-16 px-6 sm:px-12 md:py-24 flex flex-col items-center justify-center text-center border border-slate-800">
            <!-- Decorative blur background elements -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-violet-600/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-indigo-600/20 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 2s;"></div>
            <div class="absolute inset-0 grid-bg opacity-30"></div>

            <div class="relative z-10 space-y-6 max-w-3xl mx-auto">
                <div
                    class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-300 border border-indigo-500/20 backdrop-blur-md mx-auto">
                    <span class="w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping"></span>
                    Professional Forum
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-[1.15]">
                    SADHUMARGI <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-violet-400 via-indigo-400 to-teal-400">PROFESSIONAL
                        FORUM</span>
                </h1>
                <p class="text-xs sm:text-sm font-mono tracking-widest text-indigo-400 uppercase">
                    Empowering Professionals • Enhancing Values • Elevating Society
                </p>
                <p class="text-sm sm:text-base md:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto">
                    Bridges the gap between ethical values and modern professional excellence. Connect, network, and
                    contribute to society.
                </p>
                <div class="flex flex-wrap gap-4 justify-center pt-2">
                    <a id="spf-hero-registration-link" href="javascript:void(0)"
                        class="px-8 py-3.5 bg-gradient-to-r from-violet-600 to-indigo-600 text-white font-bold rounded-xl hover:from-violet-500 hover:to-indigo-500 transition-all duration-300 shadow-[0_0_20px_rgba(99,102,241,0.3)] hover:shadow-[0_0_30px_rgba(99,102,241,0.5)] transform hover:-translate-y-0.5 text-sm sm:text-base hidden">
                        Register Now
                    </a>
                    <a href="#spf-about-section"
                        class="px-8 py-3.5 bg-white/5 backdrop-blur-md text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300 border border-white/10 hover:border-white/20 transform hover:-translate-y-0.5 text-sm sm:text-base">
                        Explore Forum
                    </a>
                </div>
            </div>
        </div>

        <!-- 🔝 Top Row: Slider + Introduction -->
        <div id="spf-about-section" class="flex flex-col md:flex-row gap-6">
            <!-- 🖼️ Slider (60%) - LEFT SIDE -->
            <div
                class="w-full md:w-[60%] bg-slate-900 rounded-3xl shadow-xl overflow-hidden border border-slate-800 p-1 flex flex-col justify-center">
                <div class="bg-slate-950 rounded-2xl overflow-hidden relative shadow-inner aspect-video">
                    <div class="swiper mySwiper w-full h-full bg-gradient-to-br from-slate-950 to-indigo-950">
                        <div class="swiper-wrapper" id="dynamic-swiper-wrapper"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <!-- 📖 SPF About (40%) - RIGHT SIDE -->
            <div
                class="w-full md:w-[40%] bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden relative group hover:shadow-2xl transition-all duration-300 flex flex-col">
                <!-- Highlight accent top bar -->
                <div class="h-1.5 w-full bg-gradient-to-r from-violet-500 via-indigo-500 to-teal-500"></div>
                <div class="p-6 sm:p-8 flex flex-col h-full flex-grow justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black text-slate-800 leading-none">About SPF</h3>
                                <span class="text-[10px] text-indigo-500 uppercase tracking-widest font-bold">SADHUMARGI
                                    PROFESSIONAL FORUM</span>
                            </div>
                        </div>
                        <div id="spf-about-content" class="text-slate-600 text-sm leading-relaxed text-justify space-y-4">
                            <div class="animate-pulse space-y-3 py-6">
                                <div class="h-4 bg-slate-200 rounded w-3/4"></div>
                                <div class="h-4 bg-slate-200 rounded"></div>
                                <div class="h-4 bg-slate-200 rounded w-5/6"></div>
                                <div class="h-4 bg-slate-200 rounded w-2/3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 🎯 Vision & Mission Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Vision -->
            <div
                class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100 hover:border-violet-200/80 transform hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden group">
                <div
                    class="absolute -top-12 -right-12 w-48 h-48 bg-gradient-to-br from-violet-500/10 to-indigo-500/0 rounded-full blur-2xl group-hover:from-violet-500/20 transition-all duration-500">
                </div>
                <div class="flex items-center mb-6">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-violet-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-500/20 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 ml-4">Our Vision</h3>
                </div>
                <div id="spf-vision-content" class="text-slate-600 leading-relaxed text-sm">
                    <div class="animate-pulse space-y-2 py-4">
                        <div class="h-3.5 bg-slate-200 rounded w-full"></div>
                        <div class="h-3.5 bg-slate-200 rounded w-5/6"></div>
                        <div class="h-3.5 bg-slate-200 rounded w-4/5"></div>
                    </div>
                </div>
            </div>

            <!-- Mission -->
            <div
                class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100 hover:border-teal-200/80 transform hover:-translate-y-1.5 transition-all duration-300 relative overflow-hidden group">
                <div
                    class="absolute -top-12 -right-12 w-48 h-48 bg-gradient-to-br from-indigo-500/10 to-teal-500/0 rounded-full blur-2xl group-hover:from-indigo-500/20 transition-all duration-500">
                </div>
                <div class="flex items-center mb-6">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-teal-500 rounded-2xl flex items-center justify-center shadow-lg shadow-teal-500/20 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 ml-4">Our Mission</h3>
                </div>
                <div class="text-slate-600 leading-relaxed text-sm">
                    <div id="spf-mission-preview" class="mb-3">
                        <div class="animate-pulse space-y-2 py-4">
                            <div class="h-3.5 bg-slate-200 rounded w-full"></div>
                            <div class="h-3.5 bg-slate-200 rounded w-5/6"></div>
                            <div class="h-3.5 bg-slate-200 rounded w-4/5"></div>
                        </div>
                    </div>
                    <div id="spf-mission-full" class="hidden mb-3"></div>
                    <button id="mission-toggle-btn"
                        class="hidden mt-4 px-5 py-2.5 bg-indigo-50 hover:bg-indigo-100 text-indigo-600 hover:text-indigo-700 font-bold rounded-xl transition-all duration-300 text-xs uppercase tracking-wider shadow-sm hover:shadow"
                        onclick="toggleMissionContent()">
                        View More
                    </button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-10 gap-6">
            <!-- 🧘 Current Team (60%) -->
            <div
                class="col-span-10 lg:col-span-6 bg-white rounded-3xl shadow-xl p-6 sm:p-8 border border-slate-100 flex flex-col justify-between">
                <div>
                    <div class="flex items-center mb-6 justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-500/20">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black text-slate-800 leading-none">SPF Core Committee</h3>
                                <span class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Leading SPF
                                    Towards Excellence</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-xs text-slate-500 mb-6 max-w-xl">
                        The leadership core of Sadhumargi Professional Forum, uniting dedicated professionals across cities
                        to drive ethical growth and community service.
                    </p>

                    <div id="team-grid" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Cards will be injected here -->
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <a href="/spf-committee"
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-50 hover:bg-indigo-100 text-indigo-600 hover:text-indigo-700 font-bold rounded-xl transition-all duration-300 text-xs uppercase tracking-wider">
                        <span>View Full Committee</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 📰 News & Events (40%) -->
            <div
                class="col-span-10 lg:col-span-4 bg-white rounded-3xl shadow-xl p-6 border border-slate-100 flex flex-col justify-between">
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-violet-500 to-pink-500 rounded-2xl flex items-center justify-center shadow-lg shadow-violet-500/20">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-slate-800 leading-none">SPF Events</h3>
                        <span class="text-[9px] text-slate-400 uppercase tracking-widest font-bold font-mono">Forum
                            Updates</span>
                    </div>
                </div>
                <div class="swiper newsSwiper flex-grow h-[280px] w-full">
                    <div class="swiper-wrapper" id="news-swiper-wrapper"></div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- 📞 Contact Us & Resources Section -->
    <div class="bg-slate-50/50 rounded-3xl p-6 sm:p-10 border border-slate-100 shadow-inner mt-10">
        <div class="flex items-center gap-3 mb-8">
            <div
                class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-500/20">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                    </path>
                </svg>
            </div>
            <div>
                <h3 class="text-3xl font-black text-slate-800 leading-none">Contact & Resources</h3>
                <span class="text-xs text-slate-400 font-medium">Quick access to helplines, registration, applications, and
                    documents</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <!-- Helpline Support -->
            <div
                class="bg-slate-900 border border-slate-800 rounded-3xl p-6 text-white shadow-xl flex flex-col justify-between transform hover:-translate-y-1.5 transition-all duration-300 hover:border-rose-500/30 hover:shadow-[0_20px_45px_rgba(244,63,94,0.08)] group">
                <div>
                    <div class="flex items-center mb-5">
                        <div
                            class="w-10 h-10 rounded-xl bg-rose-500/10 border border-rose-500/20 flex items-center justify-center text-rose-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold ml-3 text-slate-100">Helpline Support</h4>
                    </div>
                    <p class="text-[10px] text-rose-400 font-black tracking-widest uppercase mb-4">10:00 AM - 6:00 PM <span
                            class="text-slate-500 font-mono">(Mon - Sat)</span></p>
                </div>
                <div id="spf-helpline-container" class="space-y-3 pt-2">
                    <p class="text-xs text-slate-500 italic">Loading...</p>
                </div>
            </div>

            <!-- SPF Registration -->
            <div
                class="bg-slate-900 border border-slate-800 rounded-3xl p-6 text-white shadow-xl flex flex-col justify-between transform hover:-translate-y-1.5 transition-all duration-300 hover:border-indigo-500/30 hover:shadow-[0_20px_45px_rgba(99,102,241,0.08)] group">
                <div>
                    <div class="flex items-center mb-5">
                        <div
                            class="w-10 h-10 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold ml-3 text-slate-100">SPF Registration</h4>
                    </div>
                    <p class="text-xs text-slate-400 mb-6 leading-relaxed">Are You a Professional? Join SPF today to network
                        with peers and contribute to society.</p>
                </div>
                <a id="spf-registration-link" href="javascript:void(0)"
                    class="block w-full py-3 bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 text-white font-bold rounded-xl transition-all duration-300 text-center text-sm shadow-md hover:shadow-indigo-500/10 transform hover:-translate-y-0.5 hidden">
                    Register Now
                </a>
            </div>

            <!-- S2S Mobile App -->
            <div
                class="bg-slate-900 border border-slate-800 rounded-3xl p-6 text-white shadow-xl flex flex-col justify-between transform hover:-translate-y-1.5 transition-all duration-300 hover:border-emerald-500/30 hover:shadow-[0_20px_45px_rgba(16,185,129,0.08)] group">
                <div>
                    <div class="flex items-center mb-5">
                        <div
                            class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold ml-3 text-slate-100">S2S Mobile App</h4>
                    </div>
                    <p class="text-xs text-emerald-400 font-semibold mb-2">Official Mobile Application</p>
                    <p class="text-[11px] text-slate-400 mb-6 leading-relaxed">Connect and engage seamlessly with other
                        Sadhumargi and SPF members on the go.</p>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.agamlb.jca_client"
                    class="block w-full py-3 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold rounded-xl transition-all duration-300 text-center text-sm shadow-md hover:shadow-emerald-500/10 transform hover:-translate-y-0.5">
                    Download Now
                </a>
            </div>

            <!-- Downloads -->
            <div
                class="bg-slate-900 border border-slate-800 rounded-3xl p-6 text-white shadow-xl flex flex-col justify-between transform hover:-translate-y-1.5 transition-all duration-300 hover:border-purple-500/30 hover:shadow-[0_20px_45px_rgba(168,85,247,0.08)] group">
                <div>
                    <div class="flex items-center mb-5">
                        <div
                            class="w-10 h-10 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold ml-3 text-slate-100">Downloads</h4>
                    </div>
                    <p class="text-xs text-purple-300 mb-4 font-semibold">Important Documents & Assets</p>
                    <div id="downloads-list" class="space-y-2.5 mb-5">
                        <p class="text-xs text-slate-500 italic">Loading...</p>
                    </div>
                </div>
                <button id="show-more-downloads"
                    class="hidden w-full py-2 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl transition-all duration-300 text-xs font-bold uppercase tracking-wider"
                    onclick="openDownloadsModal()">
                    Show All
                </button>
            </div>
        </div>

        <!-- Social Media Links (Follow Us) -->
        <div
            class="mt-10 bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl flex flex-col md:flex-row items-center justify-between gap-6 hover:shadow-[0_20px_50px_rgba(99,102,241,0.05)] transition-all duration-300">
            <div class="text-center md:text-left">
                <h4 class="text-xl font-black text-white">Follow Us</h4>
                <p class="text-xs text-slate-400 mt-1">Stay updated with latest announcements on social media</p>
            </div>

            <div class="flex flex-wrap justify-center gap-3.5">
                <a id="spf-facebook-link" href="javascript:void(0)" target="_blank"
                    class="w-12 h-12 bg-white/5 border border-white/5 text-blue-400 hover:bg-blue-600 hover:text-white rounded-2xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/20 hidden"
                    title="Facebook">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </a>
                <a id="spf-youtube-link" href="javascript:void(0)" target="_blank"
                    class="w-12 h-12 bg-white/5 border border-white/5 text-red-400 hover:bg-red-600 hover:text-white rounded-2xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-red-500/20 hidden"
                    title="YouTube">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
                <a id="spf-instagram-link" href="javascript:void(0)" target="_blank"
                    class="w-12 h-12 bg-white/5 border border-white/5 text-pink-400 hover:bg-gradient-to-tr hover:from-yellow-500 hover:via-pink-500 hover:to-purple-600 hover:text-white rounded-2xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-pink-500/20 hidden"
                    title="Instagram">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
                <a id="spf-twitter-link" href="javascript:void(0)" target="_blank"
                    class="w-12 h-12 bg-white/5 border border-white/5 text-slate-300 hover:bg-black hover:text-white rounded-2xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-black/20 hidden"
                    title="X (Twitter)">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                </a>
                <a id="spf-whatsapp-link" href="javascript:void(0)" target="_blank"
                    class="w-12 h-12 bg-white/5 border border-white/5 text-emerald-400 hover:bg-emerald-600 hover:text-white rounded-2xl flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-emerald-500/20 hidden"
                    title="WhatsApp">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- 💡 Event Details Modal -->
    <div id="event-modal"
        class="fixed inset-0 z-50 hidden bg-slate-950/60 backdrop-blur-md flex items-center justify-center p-4 transition-all duration-300"
        onclick="closeEventModal()">
        <div class="bg-white rounded-[32px] max-w-2xl w-full p-6 sm:p-8 relative shadow-2xl border border-slate-100 max-h-[90vh] overflow-y-auto custom-scrollbar"
            onclick="event.stopPropagation()">
            <button onclick="closeEventModal()"
                class="absolute top-4 right-4 w-9 h-9 rounded-xl bg-slate-50 border border-slate-100 hover:bg-slate-100 text-slate-500 hover:text-slate-800 flex items-center justify-center transition-all duration-300 text-xl font-bold z-10"
                aria-label="Close modal">&times;</button>

            <!-- Event Image -->
            <div class="w-full h-72 flex items-center justify-center mb-6 bg-slate-50 rounded-2xl overflow-hidden cursor-pointer border border-slate-100 shadow-inner relative group"
                onclick="openImagePreview(document.getElementById('event-modal-image').src)">
                <img id="event-modal-image" src="" alt=""
                    class="max-h-full max-w-full object-contain transition-transform duration-300 hover:scale-102" />
                <div
                    class="absolute inset-0 bg-slate-950/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span
                        class="px-4 py-2 bg-black/60 text-white text-xs font-bold rounded-xl backdrop-blur-sm shadow-md">Click
                        to Expand</span>
                </div>
            </div>

            <!-- Event Title -->
            <h4 id="event-modal-title" class="text-2xl font-black text-slate-900 mb-5 leading-snug"></h4>

            <!-- Event Details Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6 border-y border-slate-100/80 py-5">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-slate-400 font-mono">Date</p>
                        <p id="event-modal-date" class="font-semibold text-slate-800 text-sm"></p>
                    </div>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-xl bg-purple-50 flex items-center justify-center text-purple-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-slate-400 font-mono">Time</p>
                        <p id="event-modal-time" class="font-semibold text-slate-800 text-sm"></p>
                    </div>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-xl bg-rose-50 flex items-center justify-center text-rose-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-slate-400 font-mono">Location</p>
                        <p id="event-modal-location" class="font-semibold text-slate-800 text-sm"></p>
                    </div>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-xl bg-violet-50 flex items-center justify-center text-violet-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-slate-400 font-mono">Project</p>
                        <p id="event-modal-project" class="font-semibold text-slate-800 text-sm"></p>
                    </div>
                </div>
            </div>

            <!-- Event Description -->
            <div>
                <h5 class="text-xs uppercase font-bold tracking-widest text-slate-400 font-mono mb-2.5">Description</h5>
                <p id="event-modal-desc" class="text-slate-600 text-justify text-sm leading-relaxed"></p>
            </div>
        </div>
    </div>

    <!-- 🖼️ Image Preview Modal -->
    <div id="image-preview-modal"
        class="fixed inset-0 z-[60] hidden bg-slate-950/80 backdrop-blur-lg flex items-center justify-center p-4 transition-all duration-300"
        onclick="closeImagePreview()">
        <button onclick="closeImagePreview()"
            class="absolute top-4 right-4 w-12 h-12 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/15 text-white flex items-center justify-center transition-all duration-300 text-2xl font-bold z-50">&times;</button>
        <img id="preview-image" src="" alt=""
            class="max-h-[85vh] max-w-[85vw] object-contain rounded-2xl shadow-2xl border border-white/5"
            onclick="event.stopPropagation()" />
    </div>

    <!-- 📥 Downloads Modal -->
    <div id="downloads-modal"
        class="fixed inset-0 z-50 hidden bg-slate-950/60 backdrop-blur-md flex items-center justify-center p-4 transition-all duration-300"
        onclick="closeDownloadsModal()">
        <div class="bg-white rounded-[32px] max-w-xl w-full p-6 sm:p-8 relative shadow-2xl border border-slate-100 max-h-[80vh] overflow-y-auto custom-scrollbar"
            onclick="event.stopPropagation()">
            <button onclick="closeDownloadsModal()"
                class="absolute top-4 right-4 w-9 h-9 rounded-xl bg-slate-50 border border-slate-100 hover:bg-slate-100 text-slate-500 hover:text-slate-800 flex items-center justify-center transition-all duration-300 text-xl font-bold z-10"
                aria-label="Close modal">&times;</button>

            <h3 class="text-2xl font-black text-slate-900 mb-6 leading-none flex items-center gap-2.5">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                    </path>
                </svg>
                <span>All Downloads</span>
            </h3>

            <div id="all-downloads-list" class="space-y-3.5">
                <!-- All downloads will be injected here -->
            </div>
        </div>
    </div>

    </div>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- 🔁 Slider Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-slider')
                .then(function (response) {
                    const wrapper = document.getElementById("dynamic-swiper-wrapper");
                    const data = response.data;

                    data.forEach(slide => {
                        const imageUrl = 'https://website.sadhumargi.in' + slide.image;
                        const slideDiv = document.createElement("div");
                        slideDiv.className = "swiper-slide flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200";
                        slideDiv.innerHTML = `
                                                                                                                                                                                       <img 
                                                                                                                                                                                        src="${imageUrl}" 
                                                                                                                                                                                        alt="SPF Slide ${slide.id}" 
                                                                                                                                                                                        class="w-full h-full object-contain rounded-md" 
                                                                                                                                                                                        loading="lazy" 
                                                                                                                                                                                        decoding="async"
                                                                                                                                                                                        />
                                                                                                                                                                                    `;
                        wrapper.appendChild(slideDiv);
                    });

                    new Swiper(".mySwiper", {
                        loop: true
                        , autoplay: {
                            delay: 3000
                            , disableOnInteraction: false
                        }
                        , pagination: {
                            el: ".swiper-pagination"
                            , clickable: true
                        }
                        , navigation: {
                            nextEl: ".swiper-button-next"
                            , prevEl: ".swiper-button-prev"
                        }
                    });
                })
                .catch(function (error) {
                    console.log("Slider API not available yet");
                });
        });

        // SPF Events API Integration
        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-events')
                .then(function (response) {
                    const eventsWrapper = document.getElementById("news-swiper-wrapper");
                    const eventsData = response.data.data;

                    // Filter events where home_page = 1
                    const homePageEvents = eventsData.filter(event => event.home_page === 1);

                    if (homePageEvents.length === 0) {
                        eventsWrapper.innerHTML = '<div class="p-4 text-center text-gray-500">No events available</div>';
                        return;
                    }

                    homePageEvents.forEach(event => {
                        const eventImage = "https://website.sadhumargi.in/storage/" + event.photo;
                        const eventDate = new Date(event.date).toLocaleDateString('en-IN', {
                            year: 'numeric',
                            month: 'short',
                            day: 'numeric'
                        });
                        const slide = document.createElement("div");
                        slide.className = "swiper-slide";
                        slide.innerHTML = `
                                                    <div class="bg-white hover:shadow-[0_20px_40px_rgba(0,0,0,0.04)] transition-all duration-300 p-5 rounded-[28px] h-full flex flex-row items-center gap-5 sm:gap-6 border border-slate-100 relative group overflow-hidden">
                                                        <!-- Left side: Event image container (scaled larger with perfect aspect ratio fit, borderless) -->
                                                        <div class="w-32 sm:w-44 flex-shrink-0 h-full rounded-2xl overflow-hidden relative cursor-pointer flex items-center justify-center transition-all duration-300" onclick="openImagePreview('${eventImage}')">
                                                            <img src="${eventImage}" alt="${event.title}" 
                                                                class="w-full h-full object-contain relative z-10 transition-transform duration-500 group-hover:scale-102" />
                                                            <div class="absolute inset-0 bg-slate-900/10 opacity-0 group-hover:opacity-100 transition-opacity z-20 flex items-center justify-center">
                                                                <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m4-3H6"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- Right side: Event information (fully aligned & vertically distributed) -->
                                                        <div class="flex-grow flex flex-col justify-center min-w-0 space-y-3.5 py-1">
                                                            <!-- Top: Project and Title -->
                                                            <div>
                                                                <span class="text-[11px] sm:text-xs font-bold text-indigo-600 tracking-wider uppercase mb-1 block">${event.project.title}</span>
                                                                <h4 class="text-base sm:text-lg font-black text-slate-800 line-clamp-1 hover:text-indigo-600 transition-colors cursor-pointer" onclick='openEventModal(${JSON.stringify(event).replace(/'/g, "&#39;")})' title="${event.title}">${event.title}</h4>
                                                            </div>

                                                            <!-- Middle: Metadata details (vertically centered) -->
                                                            <div class="space-y-2">
                                                                <!-- Date/Time info -->
                                                                <div class="flex items-center gap-2 text-slate-500 text-xs sm:text-sm">
                                                                    <svg class="w-4 h-4 text-indigo-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                    </svg>
                                                                    <span class="font-semibold text-slate-700 truncate">${eventDate} &bull; ${event.time}</span>
                                                                </div>

                                                                <!-- Location info -->
                                                                <div class="flex items-center gap-2 text-slate-500 text-xs sm:text-sm">
                                                                    <svg class="w-4 h-4 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                                    </svg>
                                                                    <span class="font-semibold text-slate-600 truncate" title="${event.location}">${event.location}</span>
                                                                </div>

                                                                <!-- Registration info -->
                                                                <div class="flex items-center gap-2 text-slate-500 text-xs sm:text-sm">
                                                                    <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2m-6 9l2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="font-semibold text-slate-600 truncate">Reg: ${new Date(event.event_reg_start).toLocaleDateString('en-IN', { month: 'short', day: 'numeric' })} - ${new Date(event.event_reg_close).toLocaleDateString('en-IN', { month: 'short', day: 'numeric' })}</span>
                                                                </div>
                                                            </div>

                                                            <!-- Bottom: Actions & Button -->
                                                            <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                                                                <span class="inline-flex items-center gap-1.5 text-[11px] font-bold text-emerald-600 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-100/30">
                                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                                                    <span>Open</span>
                                                                </span>

                                                                <button onclick='openEventModal(${JSON.stringify(event).replace(/'/g, "&#39;")})' 
                                                                    class="px-5 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs sm:text-sm font-bold rounded-xl transition-all duration-300 shadow-sm hover:shadow-indigo-500/10">
                                                                    Show Details
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                `;
                        eventsWrapper.appendChild(slide);
                    });

                    new Swiper(".newsSwiper", {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        loop: homePageEvents.length > 1,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true
                        }
                    });
                })
                .catch(function (error) {
                    console.log("Events API error:", error);
                    document.getElementById("news-swiper-wrapper").innerHTML =
                        '<div class="p-4 text-center text-gray-500">Events will be available soon</div>';
                });
        });

        function openEventModal(event) {
            const eventImage = "https://website.sadhumargi.in/storage/" + event.photo;
            const eventDate = new Date(event.date).toLocaleDateString('en-IN', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            document.getElementById("event-modal-image").src = eventImage;
            document.getElementById("event-modal-title").innerText = event.title;
            document.getElementById("event-modal-date").innerText = eventDate;
            document.getElementById("event-modal-time").innerText = event.time;
            document.getElementById("event-modal-location").innerText = event.location;
            document.getElementById("event-modal-project").innerText = event.project.title;
            document.getElementById("event-modal-desc").innerText = event.description;
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-committee/core-committee')
                .then(function (response) {
                    const data = response.data.data;
                    const container = document.getElementById("team-grid");

                    data.forEach(member => {
                        const photo = 'https://website.sadhumargi.in/storage/' + member.photo;

                        const card = document.createElement("div");
                        card.className = "bg-slate-50/50 hover:bg-white hover:shadow-[0_15px_30px_rgba(79,70,229,0.05)] border border-slate-100 hover:border-indigo-200 rounded-3xl p-4 transition-all duration-300 group flex items-center gap-4";

                        card.innerHTML = `
                                                    <div class="relative w-16 h-16 flex-shrink-0">
                                                        <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-indigo-500 via-purple-500 to-teal-400 p-0.5 shadow-sm group-hover:scale-105 transition-all duration-300">
                                                            <div class="w-full h-full rounded-full bg-white p-0.5 overflow-hidden">
                                                                <img src="${photo}" alt="${member.name}" class="w-full h-full object-cover rounded-full group-hover:scale-110 transition-transform duration-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="min-w-0 flex-grow">
                                                        <h4 class="text-slate-800 font-bold text-sm sm:text-base group-hover:text-indigo-600 transition-colors leading-snug truncate" title="${member.name}">${member.name}</h4>
                                                        <div class="mt-2 flex items-center gap-2 flex-wrap">
                                                            <span class="inline-block px-2.5 py-0.5 bg-indigo-50 text-indigo-600 text-[10px] font-bold rounded-full tracking-wider uppercase">${member.city}</span>
                                                            <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-500 text-[9px] font-semibold rounded font-mono uppercase">Core</span>
                                                        </div>
                                                    </div>
                                                `;

                        container.appendChild(card);
                    });
                })
                .catch(function (error) {
                    console.log("Core Committee API error:", error);
                    document.getElementById("team-grid").innerHTML =
                        `<p class="text-sm text-gray-500 col-span-full text-center">टीम की जानकारी जल्द ही उपलब्ध होगी।</p>`;
                });
        });

    </script>

    <!-- 📖 SPF About API Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-about')
                .then(function (response) {
                    const aboutData = response.data.data[0];
                    const container = document.getElementById("spf-about-content");

                    // Split content by paragraphs and create formatted HTML
                    const paragraphs = aboutData.content.split('\n').filter(p => p.trim() !== '');
                    container.innerHTML = paragraphs.map(p => `<p>${p.trim()}</p>`).join('');
                })
                .catch(function (error) {
                    console.log("About API error:", error);
                    document.getElementById("spf-about-content").innerHTML =
                        '<p class="text-gray-500">Content will be available soon.</p>';
                });
        });
    </script>

    <!-- 🎯 SPF Vision API Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-vision')
                .then(function (response) {
                    const visionData = response.data.data[0];
                    const container = document.getElementById("spf-vision-content");

                    // Split content by paragraphs and create formatted HTML
                    const paragraphs = visionData.content.split('\n').filter(p => p.trim() !== '');
                    container.innerHTML = paragraphs.map(p => `<p class="mb-3">${p.trim()}</p>`).join('');
                })
                .catch(function (error) {
                    console.log("Vision API error:", error);
                    document.getElementById("spf-vision-content").innerHTML =
                        '<p class="text-gray-500">Content will be available soon.</p>';
                });
        });
    </script>

    <!-- 🎯 SPF Mission API Script -->
    <script>
        let missionExpanded = false;

        function toggleMissionContent() {
            const previewDiv = document.getElementById('spf-mission-preview');
            const fullDiv = document.getElementById('spf-mission-full');
            const toggleBtn = document.getElementById('mission-toggle-btn');

            missionExpanded = !missionExpanded;

            if (missionExpanded) {
                previewDiv.classList.add('hidden');
                fullDiv.classList.remove('hidden');
                toggleBtn.textContent = 'View Less';
            } else {
                previewDiv.classList.remove('hidden');
                fullDiv.classList.add('hidden');
                toggleBtn.textContent = 'View More';
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-mission')
                .then(function (response) {
                    const missionData = response.data.data[0];
                    const previewContainer = document.getElementById("spf-mission-preview");
                    const fullContainer = document.getElementById("spf-mission-full");
                    const toggleBtn = document.getElementById("mission-toggle-btn");

                    // Split content by paragraphs
                    const paragraphs = missionData.content.split('\n').filter(p => p.trim() !== '');

                    // Show first 3 paragraphs in preview (more content visible initially)
                    const previewContent = paragraphs.slice(0, 3);
                    const remainingContent = paragraphs.slice(3);

                    // Set preview content
                    previewContainer.innerHTML = previewContent.map(p => `<p class="mb-3">${p.trim()}</p>`).join('');

                    // Set full content (all paragraphs)
                    fullContainer.innerHTML = paragraphs.map(p => `<p class="mb-3">${p.trim()}</p>`).join('');

                    // Show toggle button only if there's more content
                    if (remainingContent.length > 0) {
                        toggleBtn.classList.remove('hidden');
                    }
                })
                .catch(function (error) {
                    console.log("Mission API error:", error);
                    document.getElementById("spf-mission-preview").innerHTML =
                        '<p class="text-gray-500">Content will be available soon.</p>';
                });
        });
    </script>

    <!-- 📥 SPF Downloads API Script -->
    <script>
        let allDownloadsData = [];

        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-downloads')
                .then(function (response) {
                    allDownloadsData = response.data.data;
                    const downloadsList = document.getElementById("downloads-list");
                    const showMoreBtn = document.getElementById("show-more-downloads");

                    if (allDownloadsData.length === 0) {
                        downloadsList.innerHTML = '<p class="text-xs opacity-75">No downloads available</p>';
                        return;
                    }

                    // Show first 2 downloads
                    const firstTwo = allDownloadsData.slice(0, 2);
                    downloadsList.innerHTML = '';

                    firstTwo.forEach(download => {
                        const fileUrl = 'https://website.sadhumargi.in/storage/' + download.file;
                        const downloadItem = document.createElement('a');
                        downloadItem.href = fileUrl;
                        downloadItem.target = '_blank';
                        downloadItem.className = 'flex items-center justify-between px-4 py-2.5 bg-white/5 hover:bg-white/10 rounded-xl transition-all duration-300 border border-white/5 hover:border-white/10 group';
                        downloadItem.innerHTML = `
                                                    <div class="flex items-center">
                                                        <svg class="w-4 h-4 mr-2.5 text-purple-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                        </svg>
                                                        <span class="text-xs font-semibold text-slate-200 group-hover:text-white transition-colors">${download.title}</span>
                                                    </div>
                                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-white transform group-hover:translate-y-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                                    </svg>
                                                `;
                        downloadsList.appendChild(downloadItem);
                    });

                    // Show "Show More" button if more than 2 downloads
                    if (allDownloadsData.length > 2) {
                        showMoreBtn.classList.remove('hidden');
                    }
                })
                .catch(function (error) {
                    console.log("Downloads API error:", error);
                    document.getElementById("downloads-list").innerHTML =
                        '<p class="text-xs opacity-75">Unable to load downloads</p>';
                });
        });

        function openDownloadsModal() {
            const modal = document.getElementById("downloads-modal");
            const allDownloadsList = document.getElementById("all-downloads-list");

            // Populate modal with all downloads
            allDownloadsList.innerHTML = '';
            allDownloadsData.forEach(download => {
                const fileUrl = 'https://website.sadhumargi.in/storage/' + download.file;
                const downloadItem = document.createElement('a');
                downloadItem.href = fileUrl;
                downloadItem.target = '_blank';
                downloadItem.className = 'flex items-center justify-between px-5 py-3.5 bg-slate-50 hover:bg-indigo-50/50 rounded-2xl transition-all duration-300 border border-slate-100 hover:border-indigo-100 group';
                downloadItem.innerHTML = `
                                            <div class="flex items-center">
                                                <div class="w-9 h-9 rounded-xl bg-indigo-50 group-hover:bg-white flex items-center justify-center text-indigo-600 shadow-sm border border-indigo-100/50 group-hover:scale-105 transition-all">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <span class="text-sm font-bold text-slate-800 ml-3.5 group-hover:text-indigo-600 transition-colors">${download.title}</span>
                                            </div>
                                            <svg class="w-5 h-5 text-slate-400 group-hover:text-indigo-600 transform group-hover:translate-y-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                        `;
                allDownloadsList.appendChild(downloadItem);
            });

            modal.classList.remove("hidden");
        }

        function closeDownloadsModal() {
            document.getElementById("downloads-modal").classList.add("hidden");
        }
    </script>

    <!-- 📞 SPF Links API Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            axios.get('https://website.sadhumargi.in/api/spf-links')
                .then(function (response) {
                    if (response.data && response.data.success) {
                        const links = response.data.data;

                        // 1. Helpline Support (Phone Numbers & Email Addresses)
                        const helplineContainer = document.getElementById("spf-helpline-container");
                        if (helplineContainer) {
                            let helplineHtml = '';

                            // Render mobile numbers
                            if (links.mobile_number) {
                                const numbers = String(links.mobile_number).split(',').map(n => n.trim()).filter(n => n);
                                numbers.forEach(num => {
                                    const displayNum = num.startsWith('+') ? num : '+91 ' + num;
                                    helplineHtml += `
                                            <a href="tel:${num.replace(/\s+/g, '')}"
                                                class="flex items-center text-slate-300 hover:text-white transition-colors text-sm font-medium">
                                                <svg class="w-4 h-4 mr-2.5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                                    </path>
                                                </svg>
                                                <span>${displayNum}</span>
                                            </a>
                                        `;
                                });
                            }

                            // Render emails
                            if (links.email) {
                                const emails = String(links.email).split(',').map(e => e.trim()).filter(e => e);
                                emails.forEach(email => {
                                    helplineHtml += `
                                            <a href="mailto:${email}"
                                                class="flex items-center text-slate-300 hover:text-white transition-colors text-xs font-medium break-all">
                                                <svg class="w-4 h-4 mr-2.5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                                <span>${email}</span>
                                            </a>
                                        `;
                                });
                            }

                            if (helplineHtml) {
                                helplineContainer.innerHTML = helplineHtml;
                            } else {
                                helplineContainer.innerHTML = '<p class="text-xs text-slate-500 italic">No contact information available</p>';
                            }
                        }

                        // 2. Registration Link
                        const regLink = document.getElementById("spf-registration-link");
                        if (regLink && links.registration_link) {
                            regLink.href = links.registration_link;
                            regLink.classList.remove('hidden');
                        }

                        const heroRegLink = document.getElementById("spf-hero-registration-link");
                        if (heroRegLink && links.registration_link) {
                            heroRegLink.href = links.registration_link;
                            heroRegLink.classList.remove('hidden');
                        }

                        // 3. Social Media Links
                        const fbLink = document.getElementById("spf-facebook-link");
                        if (fbLink && links.facebook_link) {
                            fbLink.href = links.facebook_link;
                            fbLink.classList.remove('hidden');
                        }

                        const ytLink = document.getElementById("spf-youtube-link");
                        if (ytLink && links.youtube_link) {
                            ytLink.href = links.youtube_link;
                            ytLink.classList.remove('hidden');
                        }

                        const igLink = document.getElementById("spf-instagram-link");
                        if (igLink && links.instagram_link) {
                            igLink.href = links.instagram_link;
                            igLink.classList.remove('hidden');
                        }

                        const twitterLink = document.getElementById("spf-twitter-link");
                        if (twitterLink && links.twitter_link) {
                            twitterLink.href = links.twitter_link;
                            twitterLink.classList.remove('hidden');
                        }

                        const waLink = document.getElementById("spf-whatsapp-link");
                        if (waLink && links.whatsapp_number) {
                            const waNums = String(links.whatsapp_number).split(',').map(n => n.trim()).filter(n => n);
                            if (waNums.length > 0) {
                                const waNum = waNums[0];
                                const formattedWaNum = waNum.startsWith('91') || waNum.startsWith('+91') ? waNum.replace('+', '') : '91' + waNum.replace('+', '');
                                waLink.href = 'https://wa.me/' + formattedWaNum;
                                waLink.classList.remove('hidden');
                            }
                        }
                    }
                })
                .catch(function (error) {
                    console.log("SPF Links API error:", error);
                    const helplineContainer = document.getElementById("spf-helpline-container");
                    if (helplineContainer && helplineContainer.innerHTML.includes('Loading...')) {
                        helplineContainer.innerHTML = '<p class="text-xs text-rose-500 italic">Failed to load contact information</p>';
                    }
                });
        });
    </script>

@endsection