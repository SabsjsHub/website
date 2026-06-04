@extends('layouts.mahilaApp')

@section('title', 'आवेदन पत्र | SABSJS-MS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- Heading -->
    <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            आवेदन पत्र
        </h2>
    </div>

    <!-- Toggle Buttons -->
    <div class="flex justify-center mb-8 space-x-2">
        <button id="offlineBtn" class="px-4 py-2 bg-white text-black border rounded-full flex items-center gap-2 shadow active" onclick="toggleForms('offline')">
            📝 ऑफलाइन फॉर्म
        </button>
        <button id="onlineBtn" class="px-4 py-2 bg-black text-white rounded-full flex items-center gap-2 shadow" onclick="toggleForms('online')">
            🌐 ऑनलाइन फॉर्म
        </button>
    </div>

    <!-- Forms Container -->
    <div id="forms-container" class="space-y-4">
        <!-- JS will inject form lists here -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const base = "https://website.sadhumargi.in";
    const formsContainer = document.getElementById("forms-container");

    let offlineForms = [];
    let onlineForms = [];

    function toggleForms(type) {
        document.getElementById('offlineBtn').classList.toggle('bg-black', type === 'offline');
        document.getElementById('offlineBtn').classList.toggle('text-white', type === 'offline');
        document.getElementById('offlineBtn').classList.toggle('bg-white', type !== 'offline');
        document.getElementById('offlineBtn').classList.toggle('text-black', type !== 'offline');

        document.getElementById('onlineBtn').classList.toggle('bg-black', type === 'online');
        document.getElementById('onlineBtn').classList.toggle('text-white', type === 'online');
        document.getElementById('onlineBtn').classList.toggle('bg-white', type !== 'online');
        document.getElementById('onlineBtn').classList.toggle('text-black', type !== 'online');

        renderForms(type === 'offline' ? offlineForms : onlineForms, type);
    }

    function renderForms(forms, type) {
        formsContainer.innerHTML = '';

        if (forms.length === 0) {
            formsContainer.innerHTML = '<p class="text-center text-gray-600">कोई फॉर्म उपलब्ध नहीं है।</p>';
            return;
        }

        forms.forEach(form => {
            const card = document.createElement('div');
            card.className = "bg-white shadow rounded-lg p-4 flex justify-between items-center";

            const left = document.createElement('div');
            left.innerHTML = `
                <p class="font-medium text-gray-800">${form.name}</p>
                <span class="inline-block bg-red-100 text-red-600 text-xs px-2 py-0.5 rounded-full mt-1">PDF</span>
            `;

            const btn = document.createElement('a');
            btn.className = "bg-black text-white px-4 py-1 rounded hover:bg-gray-800 transition";
            btn.textContent = type === 'offline' ? "Download" : "Open";

            if (type === 'offline') {
                btn.href = `${base}/storage/${form.pdf}`;
                btn.download = true;
                btn.target = "_blank";
            } else {
                btn.href = form.google_form_link;
                btn.target = "_blank";
            }

            card.appendChild(left);
            card.appendChild(btn);
            formsContainer.appendChild(card);
        });
    }

    async function fetchForms() {
        try {
            const [offlineRes, onlineRes] = await Promise.all([
                axios.get(`${base}/api/mahila-aavedan-patra/offline`),
                axios.get(`${base}/api/mahila-aavedan-patra/online`)
            ]);

            offlineForms = offlineRes.data;
            onlineForms = onlineRes.data;

            toggleForms('offline'); // default view
        } catch (err) {
            console.error("Error loading forms:", err);
            formsContainer.innerHTML = '<p class="text-red-600 text-center">डेटा लोड नहीं हो पाया।</p>';
        }
    }

    document.addEventListener('DOMContentLoaded', fetchForms);
</script>
@endsection
