@extends('layouts.app')

@section('title', 'आचार्य श्री नानेश समता पुरस्कार | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            आचार्य श्री नानेश जनसेवा पुरस्कार
        </h2>
    </div>
</div>

<!-- 🌟 Full Width Panel -->
<div class="w-full bg-yellow-100 py-10 px-6 sm:px-10 lg:px-20">
    <div class="max-w-6xl mx-auto">
        <h3 class="text-2xl sm:text-3xl font-bold text-yellow-800 mb-4">परिचय</h3>
        <p class="text-base sm:text-lg text-gray-800 leading-relaxed">
            संघ द्वारा आचार्य श्री नानेश की पुण्यस्मृति में आचार्य श्री नानेश समता पुरस्कार की स्थापना की गई है। प्रत्येक दूसरे वर्ष यह पुरस्कार एक ऐसे मनीषी को भेंट किया जाता है जिनके जीवन और आचरण में समता की स्पष्ट झलक मिलती है और समतामय जीवन के साथ समता समाज की रचना हेतु समर्पित है। इस पुरस्कार के लिए धर्म जाति का कोई बंधन नहीं है। पुरस्कार की पात्रता रखने वाले किसी भी धर्म-सम्प्रदाय के व्यक्ति को अत्यंत हर्षपूर्वक यह पुरस्कार प्रदान किया जाता है। इस पुरस्कार के अन्तर्गत 2 लाख रुपये की नगद राशि, अभिनन्दन पत्र भेंट कर उन्हें समता मनीषी की उपाधि से अलंकृत किया जाता है।<br>

            
        </p>
    </div>
</div>

<!-- 🌟 Acharya Nanesh Award Layout -->
<div class="max-w-6xl mx-auto px-4 py-10">
    <h3 class="text-center text-xl sm:text-2xl font-bold text-red-700 mb-6 border-t-2 border-red-600 w-fit mx-auto pt-4">
        आचार्य श्री नानेश जनसेवा पुरस्कार 2023
    </h3>

    <div class="flex flex-col md:flex-row gap-8 items-start justify-between">
        <!-- 📸 Left: Image -->
        <div class="w-full md:w-1/2 border-2 border-red-600 rounded-md overflow-hidden">
            <img 
                src="{{ asset('img/prize/pg_foils.jpg') }}" 
                alt="Acharya Nanesh Award Image"
                class="w-full h-[400px] object-contain"
            />
        </div>

        <!-- 📑 Right: Two stacked panels -->
        <div class="w-full md:w-1/2 flex flex-col gap-6">
            <!-- Panel 1 -->
            <div class="bg-white shadow-md rounded-lg p-5">
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                  श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ द्वारा यह प्रतिष्ठित सम्मान <b>पीजी फ़ॉइल्स लिमिटेड </b> को समाज सेवा, आध्यात्मिक संरक्षण और सामुदायिक upliftment के क्षेत्र में उनके उत्कृष्ट योगदान हेतु प्रदान किया गया है। कंपनी ने राजस्थान के पिपलिया कलां जैसे ग्रामीण क्षेत्र को उद्योग एवं विकास का केंद्र बनाकर सामाजिक परिवर्तन का अद्वितीय उदाहरण प्रस्तुत किया है। स्वास्थ्य सेवाओं के विस्तार, निःशुल्क चिकित्सा शिविरों, मोबाइल अस्पतालों और शिक्षा के क्षेत्र में निरंतर सहयोग ने हजारों लोगों के जीवन को स्पर्श किया है। धार्मिक एवं सांस्कृतिक संस्थाओं के प्रोत्साहन में उनका योगदान भारतीय आध्यात्मिक मूल्यों के संरक्षण का प्रतीक है। पीजी फ़ॉइल्स केवल व्यापारिक सफलता तक सीमित नहीं, बल्कि राष्ट्र‐निर्माण में सक्रिय भूमिका निभाने वाली एक संवेदनशील और जिम्मेदार कॉर्पोरेट संस्था के रूप में उभरती है। सीएसआर को अनुपालन नहीं, बल्कि नैतिक दायित्व मानकर कंपनी ने जनहित में निरंतर कार्य किया है। यही समर्पण, सेवा भावना और सामाजिक उत्तरदायित्व उन्हें इस विशिष्ट सम्मान का योग्य बनाता है।
                </p>
            </div>

           
        </div>
    </div>

    <!-- 🔘 नीचे एक बटन -->
    <div class="text-center mt-8">
        <a href="#" class="inline-block px-4 py-2 border border-red-500 text-red-600 hover:bg-red-50 rounded transition">
            विविध सूचना
        </a>
    </div>
</div>

@endsection
