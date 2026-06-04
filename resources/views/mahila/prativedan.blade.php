@extends('layouts.mahilaApp')

@section('title', 'प्रतिवेदन | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- Heading Section -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            प्रतिवेदन
        </h2>
    </div>

    <!-- Content Container -->
    <div id="report-container" class="space-y-4 mt-6">
        <!-- JS will inject cards here -->
    </div>
</div>

<!-- Axios CDN -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    const container = document.getElementById("report-container");

    document.addEventListener('DOMContentLoaded', async function () {
        try {
            const res = await axios.get('https://website.sadhumargi.in/api/mahila_prativedan');
            const reports = res.data;

            if (reports.length === 0) {
                container.innerHTML = `<p class="text-center text-gray-600">कोई प्रतिवेदन उपलब्ध नहीं है।</p>`;
                return;
            }

            reports.forEach(report => {
                const card = document.createElement('div');
                card.className = "bg-white shadow rounded-lg p-4 flex justify-between items-center";

                const left = document.createElement('div');
                left.innerHTML = `<p class="font-medium text-gray-800">${report.name}</p>`;

                const btn = document.createElement('a');
                btn.href = report.google_drive_link;
                btn.target = "_blank";
                btn.className = "bg-black text-white px-4 py-1 rounded hover:bg-gray-800 transition";
                btn.textContent = "Open";

                card.appendChild(left);
                card.appendChild(btn);
                container.appendChild(card);
            });
        } catch (err) {
            console.error("Error fetching reports:", err);
            container.innerHTML = `<p class="text-red-600 text-center">डेटा लोड नहीं हो पाया।</p>`;
        }
    });
</script>
@endsection
