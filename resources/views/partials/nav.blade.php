<!-- 🌈 Top Gradient Nav -->
<nav class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white">
    <div class="max-w-7xl mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="img/logo/sangh_loo.png" alt="Logo" class="h-12 w-auto" />
            <span class="text-lg md:text-xl font-bold leading-tight">श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ</span>
        </div>

        <div class="md:hidden">
            <button id="hamburger-toggle" class="text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Top Nav Desktop -->
        <!-- Top Nav Desktop -->
        <div class="hidden md:flex items-center space-x-6 text-[15px] font-medium">


            <!-- 🔹 Helpline Block -->
            <div class="flex items-center space-x-2 pl-4 border-l border-white">
                <img src="img/social/whatsapp.svg" alt="WhatsApp" class="w-5 h-5" />
                <span class="text-sm font-semibold whitespace-nowrap">
                    Helpline (WhatsApp): <a href="https://wa.me/918535858853" target="_blank"
                        class="underline hover:text-yellow-300">+91-8535858853</a>
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
            <a href="\" class="text-orange-600 font-bold">मुखपृष्ठ</a>

            <!-- Dropdowns (Improved with z-10 & top-full) -->
            <div class="relative z-50 group">
                <!-- Button trigger -->

                <a href="\acharyajan" class="hover:text-orange-500">आचार्यजन </a>


            </div>

            <div class="relative z-50 group">
                <!-- Button trigger -->
                <button class="flex items-center gap-1 hover:text-orange-500">
                    संघ <span class="text-xs">▼</span>
                </button>

                <!-- Dropdown menu -->
                <div
                    class="absolute top-full left-0 mt-2 w-44 bg-white rounded shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="/uploads/Prospectus-2021-23.pdf" class="block px-4 py-2 hover:bg-gray-100"
                        target="_blank">विवरणिका</a>
                    <a href="/ex-president" class="block px-4 py-2 hover:bg-gray-100">पूर्व अध्यक्षगण</a>
                    <a href="/current-comm" class="block px-4 py-2 hover:bg-gray-100">वर्तमान कार्यकारिणी</a>
                    <a href="/ksm" class="block px-4 py-2 hover:bg-gray-100">कार्यसमिति सदस्य</a>
                    <a href="/workshop" class="block px-4 py-2 hover:bg-gray-100">पदाधिकारी प्रशिक्षण कार्यशाला</a>
                </div>
            </div>
            <a href="/pics" class="hover:text-orange-500">फोटो गैलरी</a>
            <div class="relative group z-50">
                <!-- 🔹 Parent Button -->
                <button class="flex items-center gap-1 hover:text-orange-500">
                    संघ प्रवृत्तियाँ <span class="text-xs">▼</span>
                </button>

                <!-- 🔸 First-level dropdown -->
                <!-- ✨ Full Updated Dropdown Menu with Hover Effects and Visual Hierarchy -->
                <div
                    class="absolute top-full left-0 mt-2 w-64 bg-white rounded shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <!-- 🔸 धर्मिक प्रवृत्तियाँ -->
                    <div class="relative group/item">
                        <a href="/dharmik-activity"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            धार्मिक प्रवृत्तियाँ
                            {{-- <span class="ml-2 text-xs">▶</span> --}}
                        </a>
                        {{-- <div
                            class="absolute top-0 left-full ml-1 mt-0 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">
                            <a href="#" class="block px-4 py-2 hover:bg-orange-50">समता संस्कार पाठशाला</a>
                            <a href="#" class="block px-4 py-2 hover:bg-orange-50">श्री समता प्रचार संघ</a>
                            <a href="#" class="block px-4 py-2 hover:bg-orange-50">समता संस्कार शिविर</a>
                        </div> --}}
                    </div>

                    <div class="relative group/item">
                        <a href="/samta-sarv-mangal"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            समता सर्व मंगल
                            {{-- <span class="ml-2 text-xs">▶</span> --}}
                        </a>
                        {{-- <div
                            class="absolute top-0 left-full ml-1 mt-0 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">
                            <a href="#" class="block px-4 py-2 hover:bg-orange-50">समता संस्कार पाठशाला</a>
                            <a href="#" class="block px-4 py-2 hover:bg-orange-50">श्री समता प्रचार संघ</a>
                            <a href="#" class="block px-4 py-2 hover:bg-orange-50">समता संस्कार शिविर</a>
                        </div> --}}
                    </div>

                    <!-- 🔸 शैक्षणिक प्रवृत्तियाँ -->
                    <div class="relative group/item">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            शैक्षणिक प्रवृत्तियाँ
                            <span class="ml-2 text-xs">▶</span>
                        </a>
                        <div
                            class="absolute top-0 left-full ml-1 mt-0 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">
                            <a href="/jsp" class="block px-4 py-2 hover:bg-orange-50">जैन संस्कार पाठ्यक्रम</a>
                            <a href="/high-edu" class="block px-4 py-2 hover:bg-orange-50">पूज्य आचार्य श्रीलाल उच्च
                                शिक्षा योजना</a>

                        </div>
                    </div>

                    <!-- 🔸 साहित्यिक प्रवृत्तियां (with child submenu) -->
                    <div class="relative group/item">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            साहित्यिक प्रवृत्तियां
                            <span class="ml-2 text-xs">▶</span>
                        </a>
                        <div
                            class="absolute top-0 left-full ml-1 w-64 bg-white rounded shadow-lg border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">
                            <a href="/shramnopasak" class="block px-4 py-2 hover:bg-orange-50">श्रमणोपासक</a>

                            <div class="relative group/subitem">
                                <a href="#"
                                    class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                                    साधुमार्गी पब्लिकेशन साहित्य
                                    <span class="ml-2 text-xs">▶</span>
                                </a>
                                <div
                                    class="absolute top-0 left-full ml-1 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/subitem:opacity-100 group-hover/subitem:visible transition-all duration-200 z-50">
                                    <a href="/nanesh_vani" class="block px-4 py-2 hover:bg-orange-100">नानेशवाणी
                                        साहित्य</a>
                                    <a href="/ram_uvach" class="block px-4 py-2 hover:bg-orange-100">श्री राम उवाच
                                        साहित्य</a>
                                    <a href="/ram-dhwani" class="block px-4 py-2 hover:bg-orange-100">श्री राम ध्वनि</a>
                                    <a href="/ram-darshan" class="block px-4 py-2 hover:bg-orange-100">राम दर्शन</a>
                                    <a href="/samta-katha-mala" class="block px-4 py-2 hover:bg-orange-100">समता कथा
                                        माला</a>
                                    <a href="/other_sahitya" class="block px-4 py-2 hover:bg-orange-100">अन्य प्रकाशित
                                        साहित्य</a>
                                    <a href="/aagam-ahimsa" class="block px-4 py-2 hover:bg-orange-50">आगम, अहिंसा-समता
                                        एवं प्राकृत संस्थान</a>
                                </div>
                            </div>

                            <a href="/stutiyan" class="block px-4 py-2 hover:bg-orange-50">स्तवन एवं स्तुतियाँ</a>
                        </div>
                    </div>

                    <!-- 🔸 सामाजिक प्रवृत्तियाँ -->
                    <div class="relative group/item">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            सामाजिक / चिकित्सा एवं आरोग्य प्रवृतियाँ
                            <span class="ml-2 text-xs">▶</span>
                        </a>
                        <div
                            class="absolute top-0 left-full ml-1 mt-0 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">

                            <a href="/samta_jankalyan_pranyas" class="block px-4 py-2 hover:bg-orange-50">समता जनकल्याण
                                प्रन्यास</a>
                            <a href="/samta_hospital" class="block px-4 py-2 hover:bg-orange-50">भगवान महावीर समता
                                चिकित्सालय</a>
                            <a href="/nanesh-chikitsalya-ratlaam" class="block px-4 py-2 hover:bg-orange-50">नानेश
                                चिकित्सालय</a>
                            <a href="/utkranti" class="block px-4 py-2 hover:bg-orange-50">उत्क्रान्ति अभियान</a>
                        </div>
                        <a href="/samta-bhawan-aachar-sahita" class="block px-4 py-2 hover:bg-orange-50">समता भवन आचार
                            संहिता</a>
                    </div>

                    <!-- 🔸 संघ समृद्धि योजना -->
                    <div class="relative group/item">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            संघ समृद्धि योजना
                            <span class="ml-2 text-xs">▶</span>
                        </a>
                        <div
                            class="absolute top-0 left-full ml-1 mt-0 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">
                            <a href="/daanpeti_yojna" class="block px-4 py-2 hover:bg-orange-50">दानपेटी योजना</a>
                            <a href="/shramnopasak_vikas_sahyogi_yojna" class="block px-4 py-2 hover:bg-orange-50">संघ
                                सदस्यता अभियान</a>
                            <a href="/idam-na-mam" class="block px-4 py-2 hover:bg-orange-50">इदं न मम</a>
                            <a href="/samta-mitti-ptra" class="block px-4 py-2 hover:bg-orange-50">समता मिति योजना</a>
                        </div>
                    </div>

                    <!-- 🔸 Flat Item -->
                    <a href="/aadinath-pashu-raksha-santhan" class="block px-4 py-2 hover:bg-orange-50">श्री आदिनाथ पशु
                        रक्षा संस्थान</a>
                    <a href="/chaturmas-lists" class="block px-4 py-2 hover:bg-orange-50">चातुर्मास सूचियां</a>

                    <!-- 🔸 विशिष्ट प्रवृत्तियाँ -->
                    <div class="relative group/item">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            विशिष्ट प्रवृतियाँ
                            <span class="ml-2 text-xs">▶</span>
                        </a>
                        <div
                            class="absolute top-0 left-full ml-1 mt-0 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">
                            <a href="/veer-sewa-samiti" class="block px-4 py-2 hover:bg-orange-50">वीर सेवा समिति</a>
                            <a href="/vihaarcharya" class="block px-4 py-2 hover:bg-orange-50">विहारचर्या</a>
                            <a href="/samta-bhawan-construction" class="block px-4 py-2 hover:bg-orange-50">समता भवन
                                निर्माण</a>
                        </div>
                    </div>

                    <!-- 🔸 विविध पुरस्कार -->
                    <div class="relative group/item">
                        <a href="#"
                            class="flex justify-between items-center px-4 py-2 hover:bg-orange-50 transition-colors duration-150">
                            विविध पुरस्कार
                            <span class="ml-2 text-xs">▶</span>
                        </a>
                        <div
                            class="absolute top-0 left-full ml-1 mt-0 w-64 bg-white rounded shadow-md border-l-4 border-orange-200 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-200 z-50">
                            <a href="/nanesh_samta_prize" class="block px-4 py-2 hover:bg-orange-50">आचार्य श्री नानेश
                                समता पुरस्कार</a>
                            <a href="/nanesh_janaseva-prize" class="block px-4 py-2 hover:bg-orange-50">आचार्य श्री
                                नानेश जनसेवा पुरस्कार</a>
                            <a href="/sahitya-prize" class="block px-4 py-2 hover:bg-orange-50">साहित्य पुरस्कार</a>
                            <a href="/higher_admin_services_prize" class="block px-4 py-2 hover:bg-orange-50">उच्च
                                प्रशासनिक सेवा पुरस्कार</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/application-form" class="hover:text-orange-500">आवेदन प्रपत्र </a>
            <a href="/mahila" class="hover:text-orange-500">महिला समिति </a>
            <a href="/yuva" class="hover:text-orange-500">युवा संघ </a>
            <a href="/spf" class="hover:text-orange-500">साधुमार्गी प्रोफेशनल फोरम (SPF)</a>
            <a href="/donation" class="hover:text-orange-500">अर्थ सहयोग</a>
            <a href="/contactus" class="hover:text-orange-500">संपर्क</a>
        </div>
    </div>


    <!-- 🔹 Mobile Combined Menu with Dropdown Toggle -->
    <!-- 🔹 Mobile Combined Menu with Dropdown Toggle -->
    <div id="mobile-nav" class="md:hidden hidden px-4 pb-4 space-y-2 text-[15px] text-gray-800 font-medium">

        <!-- Simple Links -->
        <a href="/" class="block text-orange-600 font-bold">मुखपृष्ठ</a>
        <a href="/acharyajan" class="block hover:text-orange-500">आचार्यजन</a>
        <a href="/photo-gallery" class="block hover:text-orange-500">फोटो गैलरी</a>
        <a href="/application-form" class="block hover:text-orange-500">आवेदन प्रपत्र</a>
        <a href="/mahila" class="block hover:text-orange-500">महिला समिति</a>
        <a href="/yuva" class="block hover:text-orange-500">युवा संघ</a>
        <a href="/spf" class="block hover:text-orange-500">साधुमार्गी प्रोफेशनल फोरम</a>
        <a href="/donation" class="block hover:text-orange-500">अर्थ सहयोग</a>
        <a href="/contactus" class="block hover:text-orange-500">संपर्क</a>

        <!-- संघ (Simple List) -->
        <details class="group">
            <summary class="py-2 cursor-pointer hover:text-orange-500 flex justify-between items-center">
                संघ <span class="text-xs">▼</span>
            </summary>
            <div class="pl-4 space-y-1">
                <a href="/uploads/Prospectus-2021-23.pdf" class="block hover:text-orange-500">विवरणिका</a>
                <a href="/ex-president" class="block hover:text-orange-500">पूर्व अध्यक्षगण</a>
                <a href="/current-comm" class="block hover:text-orange-500">वर्तमान कार्यकारिणी</a>
                <a href="/ksm" class="block hover:text-orange-500">कार्यसमिति सदस्य</a>
                <a href="/workshop" class="block hover:text-orange-500">पदाधिकारी प्रशिक्षण कार्यशाला</a>
            </div>
        </details>

        <!-- संघ प्रवृत्तियाँ -->
        <details class="group">
            <summary class="py-2 cursor-pointer hover:text-orange-500 flex justify-between items-center">
                संघ प्रवृत्तियाँ <span class="text-xs">▼</span>
            </summary>
            <div class="pl-4 space-y-1">

                <!-- धार्मिक प्रवृत्तियाँ -->
                <a href="/dharmik-activity" class="block hover:text-orange-500">धार्मिक प्रवृत्तियाँ</a>

                <!-- शैक्षणिक प्रवृत्तियाँ -->
                <details>
                    <summary class="py-2 cursor-pointer hover:text-orange-500">शैक्षणिक प्रवृत्तियाँ</summary>
                    <div class="pl-4">
                        <a href="/jsp" class="block hover:text-orange-500">जैन संस्कार पाठ्यक्रम</a>
                        <a href="/high-edu" class="block hover:text-orange-500">आचार्य श्रीलाल उच्च शिक्षा योजना</a>
                    </div>
                </details>

                <!-- साहित्यिक प्रवृत्तियाँ -->
                <details>
                    <summary class="py-2 cursor-pointer hover:text-orange-500">साहित्यिक प्रवृत्तियाँ</summary>
                    <div class="pl-4 space-y-1">
                        <a href="/shramnopasak" class="block hover:text-orange-500">श्रमणोपासक</a>
                        <details>
                            <summary class="py-2 cursor-pointer hover:text-orange-500">साधुमार्गी पब्लिकेशन</summary>
                            <div class="pl-4">
                                <a href="/nanesh_vani" class="block hover:text-orange-500">नानेशवाणी साहित्य</a>
                                <a href="/ram_uvach" class="block hover:text-orange-500">श्री राम उवाच साहित्य</a>
                                <a href="/ram-dhwani" class="block hover:text-orange-500">श्री राम ध्वनि</a>
                                <a href="/ram-darshan" class="block hover:text-orange-500">राम दर्शन</a>
                                <a href="/samta-katha-mala" class="block hover:text-orange-500">समता कथा माला</a>
                                <a href="/other_sahitya" class="block hover:text-orange-500">अन्य साहित्य</a>
                                <a href="/aagam-ahimsa" class="block hover:text-orange-500">आगम, अहिंसा एवं प्राकृत</a>
                            </div>
                        </details>
                        <a href="/stutiyan" class="block hover:text-orange-500">स्तवन एवं स्तुतियाँ</a>
                    </div>
                </details>

                <!-- सामाजिक प्रवृत्तियाँ -->
                <details>
                    <summary class="py-2 cursor-pointer hover:text-orange-500">सामाजिक / चिकित्सा</summary>
                    <div class="pl-4 space-y-1">
                        <a href="/samta_jankalyan_pranyas" class="block hover:text-orange-500">जनकल्याण प्रन्यास</a>
                        <a href="/samta_hospital" class="block hover:text-orange-500">समता चिकित्सालय</a>
                        <a href="/nanesh-chikitsalya-ratlaam" class="block hover:text-orange-500">नानेश चिकित्सालय</a>
                        <a href="/utkranti" class="block hover:text-orange-500">उत्क्रान्ति अभियान</a>
                    </div>
                </details>
                <a href="/samta-bhawan-aachar-sahita" class="block hover:text-orange-500">समता भवन आचार संहिता</a>

                <!-- संघ समृद्धि योजना -->
                <details>
                    <summary class="py-2 cursor-pointer hover:text-orange-500">संघ समृद्धि योजना</summary>
                    <div class="pl-4 space-y-1">
                        <a href="/daanpeti_yojna" class="block hover:text-orange-500">दानपेटी योजना</a>
                        <a href="/shramnopasak_vikas_sahyogi_yojna" class="block hover:text-orange-500">संघ सदस्यता</a>
                        <a href="/idam-na-mam" class="block hover:text-orange-500">इदं न मम</a>
                        <a href="/samta-mitti-ptra" class="block hover:text-orange-500">समता मिति योजना</a>
                    </div>
                </details>

                <!-- Static Links -->
                <a href="/aadinath-pashu-raksha-santhan" class="block hover:text-orange-500">आदिनाथ पशु रक्षा
                    संस्थान</a>
                <a href="/chaturmas-lists" class="block hover:text-orange-500">चातुर्मास सूचियां</a>

                <!-- विशिष्ट प्रवृत्तियाँ -->
                <details>
                    <summary class="py-2 cursor-pointer hover:text-orange-500">विशिष्ट प्रवृत्तियाँ</summary>
                    <div class="pl-4 space-y-1">
                        <a href="/veer-sewa-samiti" class="block hover:text-orange-500">वीर सेवा समिति</a>
                        <a href="/vihaarcharya" class="block hover:text-orange-500">विहारचर्या</a>
                        <a href="/samta-bhawan-construction" class="block hover:text-orange-500">समता भवन निर्माण</a>
                    </div>
                </details>

                <!-- विविध पुरस्कार -->
                <details>
                    <summary class="py-2 cursor-pointer hover:text-orange-500">विविध पुरस्कार</summary>
                    <div class="pl-4 space-y-1">
                        <a href="/nanesh_samta_prize" class="block hover:text-orange-500">नानेश समता पुरस्कार</a>
                        <a href="/nanesh_janaseva-prize" class="block hover:text-orange-500">जनसेवा पुरस्कार</a>
                        <a href="/sahitya-prize" class="block hover:text-orange-500">साहित्य पुरस्कार</a>
                        <a href="/higher_admin_services_prize" class="block hover:text-orange-500">प्रशासनिक सेवा
                            पुरस्कार</a>
                    </div>
                </details>
            </div>
        </details>
    </div>


    </div>
</nav>