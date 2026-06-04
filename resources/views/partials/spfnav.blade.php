<!-- 🌈 Premium Slate-900 Nav -->
<nav class="bg-slate-900 text-white border-b border-slate-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-2.5 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="img/logo/spf.jpg" alt="SPF Logo" class="h-12 w-auto rounded-lg shadow-sm" />
            <span class="text-lg md:text-xl font-extrabold tracking-tight leading-tight bg-gradient-to-r from-white via-slate-100 to-indigo-200 bg-clip-text text-transparent">साधुमार्गी प्रोफेशनल फोरम (SPF)</span>
        </div>

        <div class="md:hidden">
            <button id="hamburger-toggle" class="text-white hover:text-indigo-400 focus:outline-none transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>


        <!-- Top Nav Desktop -->
        <div class="hidden md:flex items-center space-x-6 text-[15px] font-medium">


            <!-- 🔹 Helpline Block -->
            <div class="flex items-center space-x-2 pl-4 border-l border-slate-700">
                <img src="img/social/whatsapp.svg" alt="WhatsApp" class="w-5 h-5" />
                <span class="text-sm font-semibold whitespace-nowrap text-slate-300">
                    Helpline (WhatsApp): <a href="https://wa.me/917877643898" target="_blank"
                        class="text-indigo-400 hover:text-indigo-300 hover:underline">+91-7877643898</a>
                </span>
            </div>
        </div>
    </div>
</nav>


<!-- 🔻 Secondary Nav -->
<nav class="bg-white border-b shadow-sm relative z-50">
    <div class="max-w-7xl mx-auto px-4 py-2 flex justify-center items-center">
        <!-- Desktop Dropdown -->
        <div class="hidden md:flex space-x-8 text-slate-600 text-[15px] font-medium py-1">

            <a href="/"
                class="transition-colors duration-300 pb-1 {{ request()->is('/') && !request()->is('spf*') ? 'text-indigo-600 font-bold border-b-2 border-indigo-600' : 'hover:text-indigo-600' }}">श्री
                संघ</a>

            <a href="/spf"
                class="transition-colors duration-300 pb-1 {{ request()->is('spf') || request()->is('spf/') ? 'text-indigo-600 font-bold border-b-2 border-indigo-600' : 'hover:text-indigo-600' }}">Home-SPF</a>




            <!-- Dropdowns (Improved with z-10 & top-full) -->

            <a href="/spf-committee"
                class="transition-colors duration-300 pb-1 {{ request()->is('spf-committee') ? 'text-indigo-600 font-bold border-b-2 border-indigo-600' : 'hover:text-indigo-600' }}">Committee</a>
            <a href="/spf-projects"
                class="transition-colors duration-300 pb-1 {{ request()->is('spf-projects') ? 'text-indigo-600 font-bold border-b-2 border-indigo-600' : 'hover:text-indigo-600' }}">SPF
                Projects</a>

            <a href="/events-spf"
                class="transition-colors duration-300 pb-1 {{ request()->is('events-spf') || request()->is('event-spf*') ? 'text-indigo-600 font-bold border-b-2 border-indigo-600' : 'hover:text-indigo-600' }}">Events</a>
            <a href="/spf-gallery"
                class="transition-colors duration-300 pb-1 {{ request()->is('spf-gallery') ? 'text-indigo-600 font-bold border-b-2 border-indigo-600' : 'hover:text-indigo-600' }}">Photo
                Gallery</a>

        </div>




        <div id="mobile-nav" class="md:hidden hidden px-4 pb-4 space-y-2.5 text-[15px] text-slate-600 font-medium w-full">

            <!-- Simple Links -->


            <a href="/"
                class="block transition-colors duration-300 {{ request()->is('/') && !request()->is('spf*') ? 'text-indigo-600 font-bold' : 'hover:text-indigo-600' }}">श्री
                संघ</a>
            <a href="/spf"
                class="block transition-colors duration-300 {{ request()->is('spf') || request()->is('spf/') ? 'text-indigo-600 font-bold' : 'hover:text-indigo-600' }}">Home-SPF</a>
            <a href="/spf-committee"
                class="block transition-colors duration-300 {{ request()->is('spf-committee') ? 'text-indigo-600 font-bold' : 'hover:text-indigo-600' }}">Committee</a>
            <a href="/spf-projects"
                class="block transition-colors duration-300 {{ request()->is('spf-projects') ? 'text-indigo-600 font-bold' : 'hover:text-indigo-600' }}">SPF
                Projects</a>

            <a href="/events-spf"
                class="block transition-colors duration-300 {{ request()->is('events-spf') || request()->is('event-spf*') ? 'text-indigo-600 font-bold' : 'hover:text-indigo-600' }}">Events</a>
            <a href="/spf-gallery"
                class="block transition-colors duration-300 {{ request()->is('spf-gallery') ? 'text-indigo-600 font-bold' : 'hover:text-indigo-600' }}">Photo
                Gallery</a>

        </div>



    </div>
</nav>