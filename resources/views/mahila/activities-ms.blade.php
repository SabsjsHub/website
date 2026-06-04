@extends('layouts.mahilaApp')

@section('title', 'प्रवृत्तियाँ | SABSJS-MS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10" x-data="{ activeModal: null }">
    <!-- 🔰 Heading Section -->
    <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            प्रवृत्तियाँ
        </h2>
    </div>

    <!-- 🧾 Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($cards as $index => $card)
        <div class="bg-white shadow-md rounded-lg p-6 text-center flex flex-col items-center hover:shadow-lg transition">
            <!-- Logo Center -->
            <img src="{{ asset($card['logo']) }}" alt="{{ $card['title'] }}" class="w-24 h-24 object-contain mb-3" />

            <!-- Title -->
            <h3 class="text-orange-800 font-bold text-lg mb-1">{{ $card['title'] }}</h3>

            <!-- Summary -->
            <p class="text-sm text-gray-600 line-clamp-3 mb-4">{{ $card['summary'] }}</p>

            <!-- Button -->
            <button @click="activeModal = {{ $index }}" class="text-white bg-orange-600 px-4 py-1 rounded hover:bg-orange-700 text-sm">
                और पढ़ें
            </button>
        </div>
        @endforeach
    </div>

    <!-- 🔲 Modal (Reusable) -->
    <div x-show="activeModal !== null" x-transition x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60 p-4">
        <div class="bg-white max-w-3xl w-full max-h-[90vh] overflow-y-auto rounded-lg relative p-6">
            <!-- Close -->
            <button @click="activeModal = null" class="absolute top-2 right-3 text-gray-600 hover:text-red-600 text-2xl font-bold">
                &times;
            </button>

            <!-- Title -->
            <h2 class="text-xl font-bold text-orange-700 mb-4" x-text="$store.cards[activeModal]?.title"></h2>

            <!-- Content -->
            <div class="text-[15px] text-gray-800 leading-relaxed" x-html="$store.cards[activeModal]?.content">
            </div>
        </div>
    </div>


     <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            अन्य प्रवृत्तियाँ
        </h2>
    </div>

    {{-- //------------------Other Activities Section------------------ --}}
    <!-- अन्य प्रवृत्तियाँ Section -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10">
    <!-- एक-एक कार्ड नीचे की तरह -->
    <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition text-center">
        <div class="text-4xl mb-2 text-orange-600"><i class="fas fa-book-open"></i></div>
        <h3 class="text-orange-800 font-bold text-lg mb-2">✤ सज्झायम्मि रओ सया ✤</h3>
        <p class="text-sm text-gray-700 leading-relaxed text-justify">
            <span class="text-center">(सदा स्वाध्याय में रत रहो)</span> <br>आचार्य भगवन् एवं उपाध्याय प्रवर ने सकल जैन समाज को 32 आगमों में से श्रावकों के वाचन योग्य 26 आगमों का प्रतिदिन (आजीवन) स्वाध्याय करने की प्रेरणा दी है।
            <br>
            महापुरुषों की इस दिव्य वाणी को आत्मसात करते हुए “सज्झायम्मि रओ सया”—इस अद्भुत प्रकल्प को शीघ्रातिशीघ्र सकल जैन समाज के समक्ष प्रस्तुत किया जा रहा है।
            <br>
            आज ही इस पावन प्रकल्प से जुड़ने के लिए नीचे दिए गए Google Form के माध्यम से स्वयं, अपने परिवार के सदस्यों एवं अन्य श्रावक-श्राविकाओं का रजिस्ट्रेशन करें—
और जिनशासन एवं अपनी आत्मा के लिए अनुपम योगदान देने का यह स्वर्णिम अवसर न गंवाएं।<br>
            “सज्झायम्मि रओ सया”—इस अद्भुत प्रकल्प से जुड़ने के लिए <a href="https://forms.gle/1ffmcWNnKHTAApVL6" target="_blank" class="text-blue-600 underline">Google Form</a> भरें।
        </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition text-center">
    <!-- Icon -->
    <div class="text-4xl mb-2 text-orange-600">
        <i class="fas fa-sync-alt"></i>
    </div>

    <!-- Title -->
    <h3 class="text-orange-800 font-bold text-lg mb-2">✤ प्रतिक्रमण ✤</h3>

    <!-- Content -->
    <p class="text-sm text-gray-700 leading-relaxed text-justify space-y-1">
        “अशुभ योग का त्याग कर शुभ योग में लौटना ही प्रतिक्रमण है।”<br>
        यह आत्मा की शुद्धि और निर्जरा का महान साधन है।<br>
        मोक्ष मार्ग की प्रथम सीढ़ी — प्रतिक्रमण।
        <br><br>
        🔸 प्रतिक्रमण साधक को आत्मावलोकन और आत्मोत्कर्ष की ओर प्रेरित करता है।<br>
        🔸 इसीलिए, श्री अ.भा.सा. जैन महिला समिति का ध्येय है—<br>
        <strong>“हर महिला सदस्य प्रतिक्रमण युक्त बने।”</strong><br>
        🔸 सभी बहनों को प्रतिक्रमण कंठस्थ करना / करवाना अत्यंत आवश्यक है।
        <br><br>
        📌 <strong>नोट:</strong> रजिस्ट्रेशन चालू है।<br>
        आप नीचे दिए गए लिंक पर क्लिक करके अपना पंजीकरण करवा सकती हैं।
        <br>
        <a href="https://forms.gle/zpmPQAPDP7PmPJne8" target="_blank" class="text-blue-600 underline">👉 रजिस्ट्रेशन करें</a>
    </p>
</div>

<div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition text-center">
    <!-- Icon -->
    <div class="text-4xl mb-2 text-orange-600">
        <i class="fas fa-chalkboard-teacher"></i>
    </div>

    <!-- Title -->
    <h3 class="text-orange-800 font-bold text-lg mb-4">✤ धार्मिक शिक्षण | स्वाध्याय | परीक्षा | श्रमणोपासक ✤</h3>

    <!-- Content -->
    <div class="text-sm text-gray-700 leading-relaxed text-justify space-y-4">
        
        <div>
            <strong class="text-orange-700">✤ धार्मिक शिक्षण शिविर ✤</strong><br>
            मीटिंग के दौरान स्थानीय स्तर पर अधिक से अधिक धार्मिक शिविर आयोजित करने की प्रेरणा दी जाए, 
            जिससे संघ की विचारधारा को जन-जन तक पहुँचाया जा सके।
        </div>

        <div>
            <strong class="text-orange-700">✤ महिला स्वाध्यायी ✤</strong><br>
            स्वाध्याय सेवा एक श्रेष्ठ सेवा है। अतः अधिक से अधिक बहनों को स्वाध्याय सेवा से जुड़ने के लिए प्रेरित किया जाए।
        </div>

        <div>
            <strong class="text-orange-700">✤ धार्मिक परीक्षा ✤</strong><br>
            अंचल के क्षेत्रों की बहनों को “धार्मिक परीक्षाओं” में भाग लेने हेतु प्रेरित किया जाए, जैसे—<br>
            🔹 जैन संस्कार पाठ्यक्रम<br>
            🔹 कर्म प्रज्ञप्ति<br>
            🔹 महत्तम महोत्सव के अंतर्गत आयोजित परीक्षाएं<br>
            <em>स्वयं भी जुड़े और दूसरों को जोड़ें, यही लक्ष्य हो।</em>
        </div>

        <div>
            <strong class="text-orange-700">✤ श्रमणोपासक ✤</strong><br>
            स्थानीय स्तर पर होने वाली सभी धार्मिक गतिविधियों की रिपोर्ट “श्रमणोपासक” पत्रिका में समय पर भेजी जाए, 
            इसके लिए संयोजिकाओं को सतत प्रेरित किया जाए।
        </div>
        
    </div>
</div>

<div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition text-center">
    <!-- Icon -->
    <div class="text-4xl mb-2 text-orange-600">
        <i class="fas fa-file-alt"></i>
    </div>

    <!-- Title -->
    <h3 class="text-orange-800 font-bold text-lg mb-4">✤ रिपोर्टिंग | उच्च शिक्षा | आरूग्गबोहिलाभं | पाठशाला ✤</h3>

    <!-- Content -->
    <div class="text-sm text-gray-700 leading-relaxed text-justify space-y-4">
        
        <div>
            <strong class="text-orange-700">✤ रिपोर्टिंग सिस्टम ✤</strong><br>
            🔸 स्थानीय, आंचलिक एवं राष्ट्रीय संयोजिकाएं अपने स्तर पर हुई गतिविधियों का प्रत्येक माह 
            <strong>गूगल फॉर्म</strong> के माध्यम से रिपोर्ट प्रस्तुत करें।<br>
            🔸 यह रिपोर्टिंग कार्य <strong>पारदर्शिता</strong> और <strong>संगठन की मजबूती</strong> का प्रतीक है।
        </div>

        <div>
            <strong class="text-orange-700">✤ उच्च शिक्षा योजना ✤</strong><br>
            “<strong>आचार्य श्री श्रीलाल जी म.सा. उच्च शिक्षा योजना</strong>” के अंतर्गत:<br>
            🔹 समाज के अधिक से अधिक छात्र-छात्राओं को<br>
            🔹 श्रीसंघ द्वारा <strong>ब्याज मुक्त ऋण</strong> प्रदान कर<br>
            🔹 उच्च शिक्षा हेतु लाभान्वित किया जाए।<br>
            इसके लिए निरंतर <strong>प्रभावना</strong> और <strong>जानकारी</strong> देना आवश्यक है।
        </div>

        <div>
            <strong class="text-orange-700">✤ आरूग्गबोहिलाभं ✤</strong><br>
            <em>I Jain My Jain</em> के द्वारा आयोजित शिविर से जुड़ने की प्रेरणा देना।
        </div>

        <div>
            <strong class="text-orange-700">✤ पाठशाला ✤</strong><br>
            अधिक से अधिक बच्चों को <strong>पाठशाला</strong> में जाने के लिए प्रेरित करना।
        </div>

    </div>
</div>



    <!-- और सभी अन्य कार्ड्स जैसे "धार्मिक शिविर", "महिला स्वाध्यायी", "रिपोर्टिंग सिस्टम", "उच्च शिक्षा योजना", "पाठशाला" इत्यादि इसी पैटर्न पर add करें -->
</div>

</div>

<!-- Alpine Store for Modal Content -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('cards', @json($cards));
    });

</script>
@endsection
