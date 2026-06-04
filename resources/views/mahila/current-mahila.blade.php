@extends('layouts.mahilaApp')

@section('title', 'पदाधिकारी | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10 space-y-16">

    {{-- CATEGORY 1: वर्तमान कार्यकारिणी --}}
    <div>
        <div class="relative text-center mb-6">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
            <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                वर्तमान कार्यकारिणी - राष्ट्रीय पदाधिकारी
            </h2>
        </div>
        <div id="mahila-pst" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"></div>
    </div>

    {{-- CATEGORY 2: उपाध्यक्ष और मंत्री --}}
    <div>
        <div class="relative text-center mb-6">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
            <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                राष्ट्रीय उपाध्यक्ष और मंत्री
            </h2>
        </div>
        <div id="mahila-vp-sec" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"></div>
    </div>

    {{-- CATEGORY 3: संयोजिका --}}
    <div>
        <div class="relative text-center mb-6">
            <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
            <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
                प्रवृत्ति संयोजिका
            </h2>
        </div>
        <div id="mahila-pravarti" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"></div>
    </div>

</div>

{{-- AXIOS --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', async () => {
    const base = "https://website.sadhumargi.in";

    try {
        const [pstRes, vpSecRes, pravartiRes] = await Promise.all([
            axios.get(`${base}/api/mahila-pst`),
            axios.get(`${base}/api/mahila_vp_sec`),
            axios.get(`${base}/api/mahila_pravarti_sanyojika`)
        ]);

        renderCards(pstRes.data, 'mahila-pst', item => ({
            name: item.name,
            post: item.post,
            image: `${base}${item.photo}`
        }));

        renderCards(vpSecRes.data, 'mahila-vp-sec', item => ({
            name: item.name,
            post: `${item.post} (${item.aanchal?.name ?? ''})`,
            image: `${base}${item.photo}`,
        }));

        renderCards(pravartiRes.data, 'mahila-pravarti', item => ({
            name: item.name,
            post: `${item.post} - ${item.pravarti}`,
            image: `${base}${item.photo}`,
        }));

    } catch (err) {
        console.error("API fetch failed", err);
        ['mahila-pst', 'mahila-vp-sec', 'mahila-pravarti'].forEach(id => {
            document.getElementById(id).innerHTML = '<p class="text-red-500">डेटा लोड नहीं हो पाया।</p>';
        });
    }

    function renderCards(data, containerId, mapper) {
        const container = document.getElementById(containerId);
        data.forEach(member => {
            const mapped = mapper(member);
            const card = document.createElement('div');
            card.className = `
                bg-white rounded-lg shadow p-4 text-center 
                transition-all duration-300 transform hover:scale-105 hover:shadow-xl
            `;

            card.innerHTML = `
                <img src="${mapped.image}" alt="${mapped.name}" 
                     class="w-full h-52 object-contain object-top mb-4 rounded-md border border-gray-200 shadow-sm bg-white" />
                <h4 class="font-semibold text-orange-700 text-[16px] leading-tight">${mapped.name}</h4>
                <p class="text-gray-600 text-sm mt-1">${mapped.post}</p>
            `;

            container.appendChild(card);
        });
    }
});
</script>
@endsection
