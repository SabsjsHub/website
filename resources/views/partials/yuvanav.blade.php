 <!-- 🌈 Top Gradient Nav -->
 <nav class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white">
     <div class="max-w-7xl mx-auto px-4 py-2 flex justify-between items-center">
         <div class="flex items-center space-x-3">
             <img src="img/logo/YS_Logo.png" alt="Logo" class="h-12 w-auto" />
             <span class="text-lg md:text-xl font-bold leading-tight">श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ-समता युवा संघ</span>
         </div>

         <div class="md:hidden">
             <button id="hamburger-toggle" class="text-white focus:outline-none">
                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                 </svg>
             </button>
         </div>

         
         <!-- Top Nav Desktop -->
         <div class="hidden md:flex items-center space-x-6 text-[15px] font-medium">


             <!-- 🔹 Helpline Block -->
             <div class="flex items-center space-x-2 pl-4 border-l border-white">
                 <img src="img/social/whatsapp.svg" alt="WhatsApp" class="w-5 h-5" />
                 <span class="text-sm font-semibold whitespace-nowrap">
                     Helpline (WhatsApp): <a href="https://wa.me/918535858853" target="_blank" class="underline hover:text-yellow-300">+91-8535858853</a>
                 </span>
             </div>
         </div>

     </div>
 </nav>


 <!-- 🔻 Secondary Nav -->
 <nav class="bg-white border-b shadow-sm relative z-50">
     <div class="max-w-7xl mx-auto px-4 py-2 flex justify-center items-center">
         <!-- Desktop Dropdown -->
         <div class="hidden md:flex space-x-6 text-gray-800 text-[15px] font-medium">
             <a href="\" class="text-orange-600 font-bold">श्री संघ</a>

             <!-- Dropdowns (Improved with z-10 & top-full) -->
             <div class="relative z-50 group">
                 <!-- Button trigger -->
                
                 <a href="\yuva" class="hover:text-orange-500">परिचय </a>


             </div>

             {{-- <div class="relative z-50 group">
                 <!-- Button trigger -->
                 <button class="flex items-center gap-1 hover:text-orange-500">
                     संघ <span class="text-xs">▼</span>
                 </button>

                 <!-- Dropdown menu -->
                 <div class="absolute top-full left-0 mt-2 w-44 bg-white rounded shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                     
                     <a href="/ex-president-mahila" class="block px-4 py-2 hover:bg-gray-100">पूर्व गौरवमयी अध्यक्षाएँ</a>
                     <a href="/current-mahila" class="block px-4 py-2 hover:bg-gray-100">वर्तमान कार्यकारिणी</a>
                     <a href="/ksm-mahila" class="block px-4 py-2 hover:bg-gray-100">कार्यसमिति सदस्य</a>
                    
                 </div>
             </div> --}}

             <a href="/pics-yuva" class="hover:text-orange-500">फोटो गैलरी</a>
              <a href="/activities-yuva" class="hover:text-orange-500">प्रवृत्तियाँ</a>
             {{-- <a href="/application-form-ms" class="hover:text-orange-500">आवेदन प्रपत्र </a>
             <a href="/prativedan" class="hover:text-orange-500">प्रतिवेदन </a>
             <a href="/events-ms" class="hover:text-orange-500">गतिविधियाँ </a> --}}
             <a href="/donation" class="hover:text-orange-500">अर्थ सहयोग</a>
             <a href="/contactus" class="hover:text-orange-500">संपर्क</a>
         </div>
     </div>


     
     <!-- 🔹 Mobile Combined Menu with Dropdown Toggle -->
     <!-- 🔹 Mobile Combined Menu with Dropdown Toggle -->
<div id="mobile-nav" class="md:hidden hidden px-4 pb-4 space-y-2 text-[15px] text-gray-800 font-medium">

    <!-- Simple Links -->
    <a href="/" class="block text-orange-600 font-bold">श्री संघ</a>
    <a href="/yuva" class="block hover:text-orange-500">परिचय</a>
    <a href="/pics-yuva" class="block hover:text-orange-500">फोटो गैलरी</a>
    <a href="/activities-yuva" class="block hover:text-orange-500">प्रवृत्तियाँ</a>
    {{-- <a href="/application-form-ms" class="block hover:text-orange-500">आवेदन प्रपत्र</a>
    <a href="/prativedan" class="block hover:text-orange-500">प्रतिवेदन</a>
    <a href="/events-ms" class="block hover:text-orange-500">गतिविधियाँ</a> --}}
    <a href="/donation" class="block hover:text-orange-500">अर्थ सहयोग</a>
    <a href="/contactus" class="block hover:text-orange-500">संपर्क</a>

    <!-- संघ Dropdown -->
    {{-- <details class="group">
        <summary class="py-2 cursor-pointer hover:text-orange-500 flex justify-between items-center">
            संघ <span class="text-xs">▼</span>
        </summary>
        <div class="pl-4 space-y-1">
            <a href="/ex-president-mahila" class="block hover:text-orange-500">पूर्व गौरवमयी अध्यक्षाएँ</a>
            <a href="/current-mahila" class="block hover:text-orange-500">वर्तमान कार्यकारिणी</a>
            <a href="/ksm-mahila" class="block hover:text-orange-500">कार्यसमिति सदस्य</a>
        </div>
    </details> --}}
</div>



     </div>
 </nav>
