@extends('layouts.yuvaApp')

@section('title', 'प्रवृत्तियाँ | SABSJS-Yuva')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔱 Page Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
            प्रवृत्तियाँ
        </h2>
    </div>

    <!-- 📋 Pravartiya Grid -->
    <div id="pravartiya-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Cards will be injected here -->
    </div>
</div>

<!-- 📦 Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- 🚀 Fetch Data -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        axios.get("https://website.sadhumargi.in/api/yuva-pravartiya")
            .then(function (response) {
                const container = document.getElementById("pravartiya-container");
                const data = response.data;

                data.forEach(item => {
                    const card = document.createElement("div");
                    card.className = "bg-white rounded-lg shadow hover:shadow-lg transition-all duration-300 p-5 text-center flex flex-col items-center";

                    let imageHTML = '';
                    if (item.photo) {
                        const imageUrl = "https://website.sadhumargi.in" + item.photo;
                        imageHTML = `
                            <img src="${imageUrl}" alt="${item.heading}" class="w-16 h-16 object-contain mb-4" />
                        `;
                    }

                    card.innerHTML = `
                        ${imageHTML}
                        <h3 class="text-orange-700 text-lg font-semibold mb-2">${item.heading}</h3>
                        <p class="text-gray-700 text-sm text-justify leading-relaxed whitespace-pre-line">${item.content}</p>
                    `;

                    container.appendChild(card);
                });
            })
            .catch(function (error) {
                document.getElementById("pravartiya-container").innerHTML = `
                    <p class="text-red-600 text-sm col-span-3">डाटा लोड करने में त्रुटि हुई। कृपया बाद में प्रयास करें।</p>
                `;
                console.error("Pravartiya fetch error:", error);
            });
    });
</script>
@endsection
