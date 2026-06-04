@extends('layouts.mahilaApp')

@section('title', 'गौरवमयी अध्यक्षाएँ | SABSJS-MS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            गौरवमयी अध्यक्षाएँ
        </h2>
    </div>

    <!-- Card Container -->
    <div id="ex-president-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
        <!-- JS will inject cards here -->
    </div>
</div>

<!-- Axios CDN -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    axios.get('https://website.sadhumargi.in/api/mahila-ex-prsident')
        .then(function (response) {
            const data = response.data;
            const container = document.getElementById('ex-president-container');

            data.forEach(member => {
                const card = document.createElement('div');
                card.className = `
                    bg-white rounded-lg shadow p-4 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl
                `;

                const image = `https://website.sadhumargi.in${member.photo}`;
                const name = member.name || 'नाम उपलब्ध नहीं';
                const place = member.place || 'स्थान उपलब्ध नहीं';
                const karyakal = member.karyakal && member.karyakal !== "null" ? member.karyakal : '';

                card.innerHTML = `
                    <img src="${image}" alt="${name}" class="w-full h-52 object-contain object-top mb-4 rounded-md border border-gray-200 bg-white shadow-sm">
                    <h4 class="font-semibold text-orange-700 text-[16px] leading-tight">${name}</h4>
                    <p class="text-gray-600 text-sm mt-1">${place}</p>
                    ${karyakal ? `<p class="text-gray-500 text-xs mt-1">(${karyakal})</p>` : ''}
                `;

                container.appendChild(card);
            });
        })
        .catch(function (error) {
            console.error('Error fetching ex-president data:', error);
            const container = document.getElementById('ex-president-container');
            container.innerHTML = '<p class="text-red-500">डेटा लोड नहीं हो पाया।</p>';
        });
});
</script>
@endsection
