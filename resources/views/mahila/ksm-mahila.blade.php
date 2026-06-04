@extends('layouts.mahilaApp')

@section('title', 'कार्यसमिति सदस्य | SABSJS-MS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- Page Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            कार्यसमिति सदस्य
        </h2>
    </div>

    <!-- Section Content -->
    <div id="ksm-container" class="space-y-16"></div>
</div>

<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', async () => {
    const container = document.getElementById('ksm-container');
    const baseUrl = 'https://website.sadhumargi.in';

    try {
        const { data } = await axios.get(`${baseUrl}/api/mahila_ksm_members`);

        // Group by Aanchal
        const grouped = {};
        data.forEach(member => {
            const group = member.aanchal?.name ?? 'अन्य';
            const id = member.aanchal?.id ?? 0;

            if (!grouped[group]) {
                grouped[group] = {
                    id: id,
                    members: []
                };
            }

            grouped[group].members.push(member);
        });

        // Render each Aanchal section
        for (const [aanchalName, groupData] of Object.entries(grouped)) {
            const section = document.createElement('div');

            // 💠 Badge Style Aanchal Heading
            section.innerHTML = `
                <div class="text-center mb-6 flex items-center justify-center gap-2 flex-wrap">
                    <div class="flex items-center gap-2 bg-blue-100 rounded-full px-4 py-2 shadow-sm">
                        <div class="w-8 h-8 flex items-center justify-center bg-blue-500 text-white rounded-full font-bold text-sm">
                            ${groupData.id}
                        </div>
                        <div class="text-blue-700 font-semibold text-lg">
                            ${aanchalName}
                        </div>
                        <div class="text-gray-600 text-sm">(${groupData.members.length} सदस्य)</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    ${groupData.members.map(member => `
                        <div class="bg-white rounded-lg shadow p-4 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                            <img src="${baseUrl}${member.photo}" alt="${member.name}" 
                                 class="w-full h-52 object-contain object-top mb-4 rounded-md border border-gray-200 bg-white shadow-sm" />
                            <h4 class="font-semibold text-orange-700 text-[16px] leading-tight">${member.name}</h4>
                            <p class="text-gray-600 text-sm mt-1">${member.city ?? ''}</p>
                        </div>
                    `).join('')}
                </div>
            `;

            container.appendChild(section);
        }

    } catch (error) {
        console.error("Error fetching data:", error);
        container.innerHTML = `<p class="text-red-600 text-center">डेटा लोड नहीं हो पाया।</p>`;
    }
});
</script>
@endsection
