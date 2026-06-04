@extends('layouts.yuvaApp')

@section('title', 'परिचय | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10 space-y-10">

    <!-- 🔝 Top Row: Slider + Introduction -->
    <div class="grid grid-cols-1 md:grid-cols-10 gap-6">
        <!-- 🖼️ Slider (70%) -->
        <div class="col-span-10 md:col-span-7 bg-white rounded-lg shadow-md relative overflow-hidden">
            <div class="swiper mySwiper aspect-video bg-white">
                <div class="swiper-wrapper" id="dynamic-swiper-wrapper"></div>
                <div class="swiper-button-next !right-2 !text-gray-700 hover:!text-orange-600"></div>
                <div class="swiper-button-prev !left-2 !text-gray-700 hover:!text-orange-600"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- 📖 Introduction (30%) -->
        <div class="col-span-10 md:col-span-3 bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-xl font-bold text-orange-700 mb-4">Introduction</h3>
            <p class="text-gray-700 text-sm leading-relaxed text-justify">
                सन 1979 - अजमेर (राज.) :- समता की प्रतिमूर्ति समीक्षण ध्यान योगी परम पूज्य आचार्य प्रवर 1008 श्री नानालाल जी म. सा. के चातुर्मास में "समता - स्वाध्याय- सेवा" इन मूल मन्त्रों को लेकर साधुमार्गी युवाओं के संघठन की स्थापना की गई जिसे नाम दिया गया

                <strong>"श्री अखिल भारतवर्षीय साधुमार्गी जैन समता युवा संघ"</strong>

                पुरे राष्ट्र एवं विदेशों में फैलें साधुमार्गी परिवारों के युवाओं को अपने साथ संजोते हुए यह संघठन धीरे-धीरे विशाल रूप लेता गया पूज्य गुरु भगवंतों की असीम कृपा एवं समय-समय पर युवा नेतृत्वकर्ताओं ने, कार्यकर्ताओं ने अपने पुरुषार्थ से इसे संवारा आगे बढाया ।

                समता युवा संघ श्री अ.भा.सा. जैन संघ की एक शाखा के रूप में है।
            </p>
        </div>
    </div>

    <!-- 🔽 Second Row: Current PST + News -->
    <div class="grid grid-cols-1 md:grid-cols-10 gap-6">
        <!-- 🧘 Current PST (70%) -->
        <div class="col-span-10 md:col-span-7 bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-xl font-bold text-orange-700 mb-6">Current PST</h3>

            <div id="pst-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Cards will be injected here -->
            </div>
        </div>




        <!-- 📰 News & Events (30%) -->
        <div class="col-span-10 md:col-span-3 bg-white rounded-lg shadow-sm p-4">
            <h3 class="text-xl font-bold text-orange-700 mb-3">News & Events</h3>
            <div class="swiper newsSwiper h-[260px]">
                <div class="swiper-wrapper" id="news-swiper-wrapper"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination mt-2"></div>
            </div>
        </div>
    </div>

    
    <!-- 💡 Modal -->
<div id="news-modal" class="fixed inset-0 z-50 hidden bg-black/60 flex items-center justify-center p-4" onclick="closeModal()">
    <div class="bg-white rounded-lg max-w-2xl w-full p-6 relative" onclick="event.stopPropagation()">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl leading-none">&times;</button>
        <div class="w-full h-64 flex items-center justify-center mb-4">
            <img id="modal-image" src="" alt="" class="max-h-full max-w-full object-contain rounded" />
        </div>
        <h4 id="modal-title" class="text-xl font-bold text-orange-700 mb-2"></h4>
        <p id="modal-desc" class="text-gray-700 text-justify text-sm"></p>
    </div>
</div>

</div>

<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- 🔁 Slider Scripts -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        axios.get('https://website.sadhumargi.in/api/yuva-slider')
            .then(function(response) {
                const wrapper = document.getElementById("dynamic-swiper-wrapper");
                const data = response.data;

                data.forEach(slide => {
                    const imageUrl = 'https://website.sadhumargi.in' + slide.image;
                    const slideDiv = document.createElement("div");
                    slideDiv.className = "swiper-slide flex items-center justify-center bg-gray-100";
                    slideDiv.innerHTML = `
                       <img 
                        src="${imageUrl}" 
                        alt="Yuva Slide ${slide.id}" 
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
            });
    });

    document.addEventListener("DOMContentLoaded", function() {
        axios.get('https://website.sadhumargi.in/api/yuva-news')
            .then(function(response) {
                const newsWrapper = document.getElementById("news-swiper-wrapper");
                const newsData = response.data;

                newsData.forEach(item => {
    const fullImage = "https://website.sadhumargi.in" + item.photo;

    const slide = document.createElement("div");
    slide.className = "swiper-slide cursor-pointer";
    slide.innerHTML = `
        <div onclick="openModal('${fullImage}', '${item.title.replace(/'/g, "\\'")}', \`${item.description.replace(/`/g, "\\`")}\`)" 
            class="bg-gray-50 hover:bg-gray-100 transition p-3 rounded shadow-sm h-full flex flex-col justify-between">
            <img src="${fullImage}" alt="${item.title}" 
                class="w-full h-48 object-contain mb-2 rounded" />
            <h4 class="text-sm font-semibold text-orange-800 truncate">${item.title}</h4>
            <p class="text-xs text-gray-600 line-clamp-2">${item.description}</p>
        </div>
    `;
    newsWrapper.appendChild(slide);
});


                new Swiper(".newsSwiper", {
                    slidesPerView: 1
                    , spaceBetween: 20
                    , loop: true
                    , pagination: {
                        el: ".swiper-pagination"
                        , clickable: true
                    , }
                    , navigation: {
                        nextEl: ".swiper-button-next"
                        , prevEl: ".swiper-button-prev"
                    }
                });
            });
    });

    function openModal(image, title, desc) {
        document.getElementById("modal-image").src = image;
        document.getElementById("modal-title").innerText = title;
        document.getElementById("modal-desc").innerText = desc;
        document.getElementById("news-modal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("news-modal").classList.add("hidden");
    }

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        axios.get('https://website.sadhumargi.in/api/yuva-pst')
            .then(function(response) {
                const data = response.data;
                const container = document.getElementById("pst-grid");

                data.forEach(pst => {
                    const photo = 'https://website.sadhumargi.in' + pst.photo;

                    const card = document.createElement("div");
                    card.className =
                        "bg-white rounded-lg border hover:shadow-lg transition-shadow duration-300 overflow-hidden";

                    card.innerHTML = `
                    <div class="p-4 flex flex-col items-center">
                        <img 
                            src="${photo}" 
                            alt="${pst.name}" 
                            class="w-32 h-40 object-cover rounded shadow-sm mb-3 transition-transform duration-300 hover:scale-105"
                        >
                        <h4 class="text-orange-700 font-bold text-md text-center">${pst.name}</h4>
                        <p class="text-sm text-gray-600 text-center">${pst.post}</p>
                    </div>
                `;

                    container.appendChild(card);
                });
            })
            .catch(function(error) {
                console.error("Failed to load PST data:", error);
                document.getElementById("pst-grid").innerHTML =
                    `<p class="text-sm text-gray-500">Unable to load data.</p>`;
            });
    });

</script>



@endsection
