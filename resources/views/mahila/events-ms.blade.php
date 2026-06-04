@extends('layouts.mahilaApp')

@section('title', 'गतिविधियाँ | SABSJS-MS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10" x-data="eventData()" x-init="fetchEvents()">
    <!-- 🔰 Heading Section -->
    <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
            class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2
            class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            गतिविधियाँ
        </h2>
    </div>

    <!-- 🔄 Loader -->
    <div x-show="loading" class="text-center text-orange-700 py-10">
        ⏳ कृपया प्रतीक्षा करें, गतिविधियाँ लोड हो रही हैं...
    </div>

    <!-- 📦 Events -->
    <div x-show="!loading && events.length > 0" class="space-y-10">
        <template x-for="(event, index) in events" :key="index">
            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col md:flex-row gap-4 p-4">
                <!-- Left Image -->
                <div class="md:w-1/3 flex justify-center items-center">
                    <a :href="'https://website.sadhumargi.in/storage/' + event.photo" class="glightbox"
                       :data-gallery="'event-gallery-' + index"
                       :data-title="event.title">
                        <img :src="'https://website.sadhumargi.in/storage/' + event.photo"
                             alt="Event Image"
                             class="rounded-lg object-cover w-full h-64 hover:scale-105 transition duration-300" />
                    </a>
                </div>

                <!-- Right Content -->
                <div class="md:w-2/3">
                    <h3 class="text-xl font-bold text-orange-700 mb-2" x-text="event.title"></h3>
                    <div class="text-gray-700 text-sm leading-relaxed" x-html="event.content"></div>
                </div>
            </div>
        </template>
    </div>

    <!-- ❌ No Data -->
    <div x-show="!loading && events.length === 0" class="text-center text-gray-500 py-10">
        कोई गतिविधियाँ उपलब्ध नहीं हैं।
    </div>
</div>

<!-- Axios + Alpine + Glightbox -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
    function eventData() {
        return {
            events: [],
            loading: true,

            fetchEvents() {
                axios.get('https://website.sadhumargi.in/api/mahila-events')
                    .then(response => {
                        this.events = response.data;
                        this.$nextTick(() => {
                            GLightbox({ selector: '.glightbox' });
                        });
                    })
                    .catch(error => {
                        console.error("Error fetching events:", error);
                    })
                    .finally(() => {
                        this.loading = false;
                    });
            }
        }
    }
</script>
@endsection
