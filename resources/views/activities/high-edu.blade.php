@extends('layouts.app')

@section('title', 'उच्च शिक्षा योजना | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            पूज्य आचार्य श्रीलाल उच्च शिक्षा योजना
        </h2>
    </div>


    <!-- 💡 Full Width Panel with Introduction -->
   <div class="bg-yellow-50 border border-yellow-200 rounded-lg shadow-sm p-6 text-gray-800 leading-relaxed">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="{{ asset('img/high_edu/ucch_siksha_yojna_logo.jpg') }}"
                 alt="Acharya Shri Uchch Shiksha Yojna Logo"
                 class="w-40 h-auto md:w-48 rounded" />
        </div>

        <!-- Description Text -->
        <p class="text-base sm:text-lg text-justify">
            आचार्य श्री की पावन प्रेरणा से परिकल्पित एवं आपश्री की स्मृति को समर्पित यह उच्च शिक्षा योजना स्वधर्मी मेधावी व महत्वाकांक्षी विद्यार्थियों हेतु वरदान स्वरूप है। विशेषकर जो धनाभाव के कारण उच्च शैक्षणिक सुविधाओं व अवसरों से वंचित रह जाते हैं। इस योजना के अंतर्गत स्नातक/ स्नातकोत्तर पाठ्‌यक्रमों के लिए प्रतिभावान विद्यार्थियों को ब्याज-मुक्त अर्थ सहयोग उपलब्ध कराया जाता है। स्वदेश एवं विदेश के मान्यता प्राप्त शिक्षण केन्द्रों में प्रवेश-प्राप्ति के पश्चात्‌ यथोचित अर्थ सहयोग प्रदत्त होता है। योजना के कार्यान्वयन व संचालन हेतु एक प्रबंधन समिति गठित हुई है ।
        </p>
    </div>
</div>


    <div class="mt-10 grid grid-cols-10 gap-6">
        <!-- Left Panel: 60% (3/5 columns) -->
        <div class="col-span-10 md:col-span-7 space-y-4">
            <div class="bg-white border border-gray-300 rounded-md p-4 flex flex-col sm:flex-row sm:justify-between sm:items-center text-center sm:text-left font-bold gap-2">
    <div>
        पूज्य आचार्य श्री श्रीलाल उच्च शिक्षा योजना आवेदन-पत्र
    </div>
    
    <a href="{{ asset('img/high_edu/Acharya-Shri-Shrilal-Uchh-Siksha-yojna-1.pdf') }}" 
       download 
       class="text-blue-600 font-medium text-sm hover:underline flex items-center gap-1">
        📥 Download PDF
    </a>
</div>

           

            <!-- Bottom Row: Book Sections -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-white border border-gray-300 rounded-md text-sm overflow-hidden">
    <h3 class="font-semibold bg-yellow-100 text-yellow-800 px-4 py-2">
        Social Media
    </h3>
    <div class="p-4">
        <!-- Responsive YouTube Embed -->
        <div class="aspect-w-16 aspect-h-9 w-full">
            <iframe
                src="https://www.youtube.com/embed/ZpU-NjDYojg"
                title="YouTube video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                class="rounded-md w-full h-full">
            </iframe>
        </div>
    </div>
</div>

              <div x-data="{ showModal: false }" class="bg-white border border-gray-300 rounded-md text-sm overflow-hidden">
    <h3 class="font-semibold bg-yellow-100 text-yellow-800 px-4 py-2">
        Recent Updates
    </h3>

    <div class="p-4">
        <!-- Clickable Image -->
        <div @click="showModal = true"
             class="cursor-pointer border border-gray-200 rounded overflow-hidden">
            <img src="{{ asset('img/high_edu/high-edu-dtp.png') }}"
                 alt="Recent Update"
                 class="w-full h-auto rounded-md shadow-md object-contain" />
        </div>

        <!-- Modal -->
        <div x-show="showModal"
             x-transition
             @click.self="showModal = false"
             class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 px-4">
            <div class="relative max-w-4xl w-full">
                <!-- Close Button -->
                <button @click="showModal = false"
                        class="absolute top-2 right-2 text-white text-2xl font-bold z-50">
                    &times;
                </button>

                <!-- Full Image -->
                <img src="{{ asset('img/high_edu/high-edu-dtp.png') }}"
                     alt="Expanded Image"
                     class="w-full max-h-[90vh] object-contain rounded-lg shadow-xl mx-auto" />
            </div>
        </div>
    </div>
</div>


            </div>
        </div>

        <!-- Right Panel: 40% (2/5 columns) -->
        <!-- DTP Section -->
        <div x-data="{ showModal: false }" class="col-span-10 md:col-span-3 space-y-4">
            <!-- Header -->
            <div class="bg-white border border-gray-300 rounded-md p-4 text-center font-bold">
                अग्रणी बैंक SBI के साथ उच्च शिक्षा योजना हेतु MOU
            </div>

            <!-- Clickable Image Preview -->
            <div @click="showModal = true" class="bg-gray-100 border border-gray-300 rounded-md h-72 overflow-hidden cursor-pointer flex items-center justify-center">
                <img src="{{ asset('img/high_edu/mou-with-sbi-in-uccha-shiksha.jpg') }}" alt="Preview" class="max-h-full max-w-full object-contain" />
            </div>

            <!-- Modal with Full Image -->
            <div x-show="showModal" x-transition @click.self="showModal = false" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 px-4">

                <div class="relative w-full max-w-4xl">
                    <!-- Close button -->
                    <button @click="showModal = false" class="absolute top-2 right-2 text-white text-3xl font-bold z-50">&times;</button>

                    <!-- Image -->
                    <img src="{{ asset('img/high_edu/mou-with-sbi-in-uccha-shiksha.jpg') }}" alt="Full View" class="mx-auto max-h-[90vh] w-auto rounded-lg shadow-2xl object-contain" />
                </div>
            </div>
        </div>


    </div>



</div>


@endsection
