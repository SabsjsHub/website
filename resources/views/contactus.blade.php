@extends('layouts.app')

@section('title', 'Contact-Us | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10" x-data="contactPageData()">
    <!-- Heading -->
    <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
            Contact Us
        </h2>
    </div>

    <!-- 2-Panel Layout -->
    <!-- 2-Panel Layout -->
<div class="max-w-7xl xl:max-w-[90rem] mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-[35%_65%] gap-8">


        <!-- Left Panel - Map and Address -->
        <div>
            <div class="rounded-lg overflow-hidden shadow-lg mb-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1761.6207314710703!2d73.306918!3d27.986508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fe79401b55f4f%3A0xd8dcc83ecd602c70!2sAkhil%20Bhartiya%20Sadhumargi%20Jain%20Sang%2C%20Samta%20Bhwan!5e0!3m2!1sen!2sin!4v1754548978584!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="text-sm text-gray-800 space-y-2 leading-relaxed">
                <p><span class="font-bold text-red-600">पता:</span> समता भवन, आचार्य श्री नानेश मार्ग, नोखा रोड, गंगाशहर, बीकानेर – 334401, राजस्थान, भारत</p>
                <p><span class="font-bold text-red-600">फोन:</span> +91 151 2270261</p>
                <p><span class="font-bold text-red-600">ईमेल:</span> ho@sadhumargi.com</p>
            </div>
        </div>


        <!-- Right Panel -->
        <!-- Right Panel -->
        <div class="bg-white shadow-lg p-6 rounded-lg border border-gray-100 w-full">
            <h3 class="text-lg font-semibold mb-4 text-gray-700">संपर्क सूत्र</h3>

            <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 text-sm text-gray-800">
                <template x-for="item in helplines" :key="item.id">
                    <div class="sm:col-span-4 flex flex-col space-y-1">
                        <span class="font-medium text-gray-900" x-text="item.dept_name + ':'"></span>
                        
                        <template x-if="item.mobile_number && item.mobile_number.length > 0 && !item.is_only_whatsapp">
                            <template x-for="phone in item.mobile_number" :key="phone">
                                <a :href="'tel:' + phone" class="text-blue-600 hover:underline">
                                    📞 <span x-text="phone"></span>
                                </a>
                            </template>
                        </template>

                        <template x-if="item.whatsapp_number || (item.is_only_whatsapp && item.mobile_number && item.mobile_number.length > 0)">
                            <a :href="'https://wa.me/91' + (item.whatsapp_number ? String(item.whatsapp_number).replace(/[^0-9]/g, '') : String(item.mobile_number[0]).replace(/[^0-9]/g, ''))" 
                               target="_blank" 
                               class="inline-flex items-center gap-2 text-green-600 hover:underline">
                                <i class="fab fa-whatsapp text-green-600 text-lg"></i>
                                <span x-text="item.whatsapp_number || item.mobile_number[0]"></span>
                            </a>
                        </template>

                        <template x-if="item.email && item.email.length > 0">
                            <template x-for="email in item.email" :key="email">
                                <a :href="'mailto:' + email" class="text-blue-600 hover:underline">
                                    ✉️ <span x-text="email"></span>
                                </a>
                            </template>
                        </template>
                    </div>
                </template>
            </div>
        </div>



    </div>

    <!-- 🔽 Button Section Heading -->
    <div class="mt-12 text-center">
        <h3 class="text-xl font-bold text-red-600 mb-6">
            श्री अ. भा. साधुमार्गी जैन संघ द्वारा संचालित विभिन्न प्रवृत्तियों के पते व फ़ोन नं. जानने के लिए नीचे दिए बटन पर क्लिक करें
        </h3>

        <!-- 🔳 Responsive Button Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
            <template x-for="office in offices" :key="office.id">
                <div>
                    <button @click="activeModal = office.id" class="w-full text-sm font-semibold text-red-800 px-4 py-2 rounded-full border border-red-500 hover:bg-red-100 transition">
                        <span x-text="office.name"></span>
                    </button>
                </div>
            </template>
        </div>
    </div>

    <!-- 🔲 Modals -->
    <!-- 🔲 Modals -->
    <template x-for="office in offices" :key="office.id">
        <div x-show="activeModal === office.id" x-cloak class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white rounded-lg p-6 w-full max-w-md relative" @click.away="activeModal = null">
                <!-- Close Button -->
                <button @click="activeModal = null" class="absolute top-2 right-3 text-gray-600 hover:text-red-500 text-xl">&times;</button>

                <!-- Heading -->
                <h3 class="text-lg font-bold text-red-600 mb-3" x-text="office.name"></h3>

                <!-- Content -->
                <div class="text-gray-800 leading-relaxed text-sm">
                    <div class="mb-2" x-html="office.address.replace(/\n/g, '<br>')"></div>
                    
                    <template x-if="office.phone_numbers && office.phone_numbers.length > 0">
                        <div class="mb-2">📞 फोन: <span x-text="office.phone_numbers.join(', ')"></span></div>
                    </template>
                    
                    <template x-if="office.emails && office.emails.length > 0">
                        <div class="mb-2">✉️ E-Mail: <span x-text="office.emails.join(', ')"></span></div>
                    </template>

                    <template x-if="office.google_link">
                        <div class="mt-4">
                            <a :href="office.google_link" target="_blank" class="inline-flex items-center gap-2 bg-red-600 text-white px-4 py-2 rounded-full shadow hover:bg-red-700 transition text-sm font-semibold">
                                📍 View on Google Maps
                            </a>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </template>

</div>

<script>
function contactPageData() {
    return {
        activeModal: null,
        helplines: [],
        offices: [],
        async init() {
            try {
                let res1 = await fetch('https://website.sadhumargi.in/api/sangh-helplines');
                if (res1.ok) {
                    let data1 = await res1.json();
                    this.helplines = data1.sort((a, b) => a.sequence - b.sequence);
                }
            } catch (err) {
                console.error('Error fetching helplines:', err);
            }

            try {
                let res2 = await fetch('https://website.sadhumargi.in/api/sangh-offices');
                if (res2.ok) {
                    let data2 = await res2.json();
                    this.offices = data2.sort((a, b) => a.sequence - b.sequence);
                }
            } catch (err) {
                console.error('Error fetching offices:', err);
            }
        }
    };
}

document.addEventListener('alpine:init', () => {
    Alpine.data('contactPageData', contactPageData);
});
</script>

@endsection
