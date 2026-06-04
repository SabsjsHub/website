@extends('layouts.app')

@section('title', 'Contact-Us | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10" x-data="{ activeModal: null }">
    <!-- Heading -->
    <div class="relative text-center mt-1 mb-10">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
            Contact Us
        </h2>
    </div>

    <!-- 2-Panel Layout -->
    <!-- 2-Panel Layout -->
<div class="max-w-7xl xl:max-w-[90rem] mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-[35%_65%] gap-8">


        <!-- Left Panel - Map and Address -->
        <div>
            <div class="rounded-lg overflow-hidden shadow-lg mb-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1761.6207314710703!2d73.306918!3d27.986508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fe79401b55f4f%3A0xd8dcc83ecd602c70!2sAkhil%20Bhartiya%20Sadhumargi%20Jain%20Sang%2C%20Samta%20Bhwan!5e0!3m2!1sen!2sin!4v1754548978584!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="text-sm text-gray-800 space-y-2 leading-relaxed">
                <p><span class="font-bold text-red-600">पता:</span> समता भवन, आचार्य श्री नानेश मार्ग, नोखा रोड, गंगाशहर, बीकानेर – 334401, राजस्थान, भारत</p>
                <p><span class="font-bold text-red-600">फोन:</span> +91 151 2270261</p>
                <p><span class="font-bold text-red-600">ईमेल:</span> ho@sadhumargi.com</p>
            </div>
        </div>


        <!-- Right Panel -->
        <!-- Right Panel -->
        <div class="bg-white shadow-lg p-6 rounded-lg border border-gray-100 w-full">
            <h3 class="text-lg font-semibold mb-4 text-gray-700">संपर्क सूत्र</h3>

            <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 text-sm text-gray-800">
                @php
                $contacts = [
                ['label' => 'श्रमणोपासक', 'phone' => '9799061990', 'email' => 'news@sadhumargi.com'],
                ['label' => 'श्रमणोपासक समाचार', 'phone' => '8955682153', 'email' => 'news@sadhumargi.com'],
                ['label' => 'साहित्य', 'phone' => '8209090748', 'email' => 'sahitya@sadhumargi.com'],
                ['label' => 'महिला समिति', 'phone' => '6375633109', 'email' => 'ms@sadhumargi.com'],
                ['label' => 'समता युवा संघ', 'phone' => '7073238777', 'email' => 'yuva@sadhumargi.com'],
                ['label' => 'धार्मिक परीक्षा', 'phone' => '7231933008', 'email' => 'examboard@sadhumargi.com'],
                ['label' => 'कर्म सिद्धांत', 'phone' => '7976519363'],
                ['label' => 'परिवारांजलि', 'phone' => '7231033008', 'email' => 'anjali@sadhumargi.com'],
                ['label' => 'विहार', 'phone' => '8505053113', 'email' => 'vihar@sadhumargi.com'],
                ['label' => 'पाठशाला', 'phone' => '9982990507', 'email' => 'pathshala@sadhumargi.com'],
                ['label' => 'शिविर', 'phone' => '7231833008', 'email' => 'udaipur@sadhumargi.com'],
                ['label' => 'ग्लोबल कार्ड अपडेट्स', 'phone' => '6265311663', 'email' => 'globalcard@sadhumargi.com'],
                ['label' => 'अन्य प्रवृत्तियाँ', 'phone' => '9602026899'],
                ['label' => 'साहित्य संबंधित प्रवृत्तियाँ', 'phone' => '7231933008'],
                ['label' => 'संघ हेल्पलाइन (WhatsApp only)', 'phone' => '8535858853'],
                ];
                @endphp

                @foreach($contacts as $item)
                <div class="sm:col-span-4 flex flex-col space-y-1">
                    <span class="font-medium text-gray-900">{{ $item['label'] }}:</span>
                    @isset($item['phone'])
         @php
  $isWhatsappOnly = isset($item['label']) && str_contains($item['label'], 'WhatsApp');
@endphp

@if($isWhatsappOnly)
  <a href="https://wa.me/{{ $item['phone'] }}"
     target="_blank"
     class="inline-flex items-center gap-2 text-green-600 hover:underline">
     <i class="fab fa-whatsapp text-green-600 text-lg"></i>
     {{ $item['phone'] }}
  </a>
@else
  <a href="tel:{{ $item['phone'] }}" class="text-blue-600 hover:underline">
     📞 {{ $item['phone'] }}
  </a>
@endif


                    @endisset

                    @isset($item['email'])
                    <a href="mailto:{{ $item['email'] }}" class="text-blue-600 hover:underline">
                        ✉️ {{ $item['email'] }}
                    </a>
                    @endisset
                </div>
                @endforeach
            </div>
        </div>



    </div>

    <!-- 🔽 Button Section Heading -->
    <div class="mt-12 text-center">
        <h3 class="text-xl font-bold text-red-600 mb-6">
            श्री अ. भा. साधुमार्गी जैन संघ द्वारा संचालित विभिन्न प्रवृत्तियों के पते व फ़ोन नं. जानने के लिए नीचे दिए बटन पर क्लिक करें
        </h3>

        <!-- 🔳 Responsive Button Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
            @foreach([
            ['title' => 'समता प्रचारक संघ – आचार्य श्री नानेश ध्यान केंद्र', 'content' => '📍 राणाप्रताप नगर, पद्मिनी मार्ग, सुन्दरवास
            पो. उदयपुर ( राज. )<br>📞 फोन. 0294-2490717 ( ऑ./फैक्स )<br>E- Mail : asndkudaipur@gmail.com'],
            ['title' => 'श्री गणेश जैन छात्रावास', 'content' => '📍 श्री गंगाशहर, बीकानेर<br>📞 0151-YYYYYYY'],
            ['title' => 'श्री गणेश जैन ज्ञान भंडार', 'content' => '📍 पुस्तकालय रोड, बीकानेर<br>📞 0151-ZZZZZZZ'],
            ['title' => 'जैन छात्रावास नानेश निकेतन', 'content' => '📍 शिक्षा मार्ग, बीकानेर<br>📞 0151-AAAAAAA'],
            ['title' => 'भगवान महावीर समता चिकित्सालय', 'content' => '📍 समता हॉस्पिटल, बीकानेर<br>📞 0151-BBBBBBB'],
            ['title' => 'आचार्य श्री नानेश ध्यान केंद्र', 'content' => '📍 ध्यान केंद्र, बीकानेर<br>📞 0151-CCCCCCC'],
            ['title' => 'श्री आदिनाथ पशु रक्षा संस्थान', 'content' => '📍 गोधाम मार्ग, बीकानेर<br>📞 0151-DDDDDDD'],
            ['title' => 'समता महिला सेवा केंद्र', 'content' => '📍 महिला केंद्र रोड, बीकानेर<br>📞 0151-EEEEEEE'],
            ] as $index => $item)
            <div>
                <button @click="activeModal = {{ $index }}" class="w-full text-sm font-semibold text-red-800 px-4 py-2 rounded-full border border-red-500 hover:bg-red-100 transition">
                    {!! $item['title'] !!}
                </button>
            </div>
            @endforeach
        </div>
    </div>

    <!-- 🔲 Modals -->
    <!-- 🔲 Modals -->
    @foreach([
    ['title' => 'समता प्रचार संघ द्वारा – आचार्य श्री नानेश ध्यान केंद्र', 'content' => '📍 राणाप्रताप नगर, पद्मिनी मार्ग, सुन्दरवास पो. उदयपुर ( राज. )<br>📞 फोन: 0294-2490717 (ऑ./फैक्स)<br>✉️ E-Mail: asndkudaipur@gmail.com'],
    ['title' => 'श्री गणेश जैन छात्रावास', 'content' => '📍 राणाप्रताप नगर, पद्मिनी मार्ग, सुन्दरवास पो. उदयपुर ( राज. )<br>📞 फोन: 0294-2494375 (ऑ./फैक्स)'],
    ['title' => 'श्री गणेश जैन ज्ञान भंडार', 'content' => '📍 समता भवन, नौलाईपुरा पो. रतलाम – 457001 (म.प्र.)<br>📞 फोन: 07412-244443 (ऑ.)<br>✉️ E-Mail: rmgorecha@gmail.com'],
    ['title' => 'श्री प्रेमराज गणपतराज बोहरा धर्मपाल जैन छात्रावास', 'content' => '📍 नानेश निकेतन, दिलीपनगर पो. रतलाम – (म.प्र.)<br>📞 फोन: 07412-267212 (ऑ.)<br>✉️ E-Mail: naneshniketanrtm@gmail.com'],
    ['title' => 'भगवान महावीर समता चिकित्सालय', 'content' => '📍 पो. डोंडीलोहारा, जि. दुर्ग – 491771 (छ.ग.)<br>📞 फोन: 07749-264054 (ऑ.)<br>✉️ E-Mail: asndkudaipur@gmail.com'],
    ['title' => 'आगम, अहिंसा-समता एवं प्राकृत संस्थान द्वारा – आचार्य श्री नानेश ध्यान केंद्र', 'content' => '📍 राणाप्रताप नगर, पद्मिनी मार्ग, पो. उदयपुर (राज.)<br>📞 फोन: 0294-2490717 (ऑ.)<br>✉️ E-Mail: asndkudaipur@gmail.com'],
    ['title' => 'श्री आदिनाथ पशु रक्षा संस्थान', 'content' => '📍 पो. कानोड़, जि. उदयपुर – 313604 (राज.)<br>📞 मो: 9460726890'],
    ['title' => 'समता महिला सेवा केंद्र', 'content' => '📍 पो. रतलाम (म.प्र.)<br>📞 फोन: 07412-238696'],
    ] as $idx => $modal)
    <div x-show="activeModal === {{ $idx }}" x-cloak class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 w-full max-w-md relative">
            <!-- Close Button -->
            <button @click="activeModal = null" class="absolute top-2 right-3 text-gray-600 hover:text-red-500 text-xl">&times;</button>

            <!-- Heading -->
            <h3 class="text-lg font-bold text-red-600 mb-3">{{ $modal['title'] }}</h3>

            <!-- Content -->
            <div class="text-gray-800 leading-relaxed text-sm" x-html="`{!! $modal['content'] !!}`"></div>
        </div>
    </div>
    @endforeach

</div>
@endsection
