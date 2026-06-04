@extends('layouts.app')

@section('title', 'आचार्य श्री नानेश समता पुरस्कार | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            आचार्य श्री नानेश समता पुरस्कार
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
        आचार्य श्री नानेश समता पुरस्कार 2055
    </h3>

    <div class="flex flex-col md:flex-row gap-8 items-start justify-between">
        <!-- 📸 Left: Image -->
        <div class="w-full md:w-1/2 border-2 border-red-600 rounded-md overflow-hidden">
            <img 
                src="{{ asset('img/prize/fatehlalji.jpeg') }}" 
                alt="Acharya Nanesh Award Image"
                class="w-full h-[400px] object-contain"
            />
        </div>

        <!-- 📑 Right: Two stacked panels -->
        <div class="w-full md:w-1/2 flex flex-col gap-6">
            <!-- Panel 1 -->
            <div class="bg-white shadow-md rounded-lg p-5">
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ द्वारा जिनके जीवन और आचरण में समता की स्पष्ट झलक मिलती है ‘आचार्य श्री नानेश समता पुरस्कार‘ हेतु चयन समिति ने समता मनीषी श्री ओम प्रकाश जी माथुर (सांसद, उपाध्यक्ष बी. जे. पी. ) का चयन किया है। इन्हें यह पुरस्कार 24 जनवरी 2018 को इंदौर में आयोजित पुरस्कार समारोह में प्रदान किया गया । सम्पूर्ण साधुमार्गी परिवार की ओर से सांसद श्री ओम प्रकाश जी माथुर को हार्दिक बधाई एवं अभिनंदन।
                </p>
            </div>

            <!-- Panel 2 -->
            <div class="bg-white shadow-md rounded-lg p-5">
                <h4 class="font-bold text-sm sm:text-base text-red-700 mb-2">
                    अभी तक निम्न महानुभावों को आचार्य श्री नानेश समता पुरस्कार प्रदान किया जा चुका है:-
                </h4>
                <ul class="list-disc list-inside text-sm sm:text-base text-gray-800 leading-relaxed">
                    <li>2000 - श्री गुलाबचंद जी माली (संपूर्ण)</li>
                    <li>2001 - श्री प्रमोदभाई के. ठक्कर (संपूर्ण)</li>
                    <li>2004 - श्री प्रकाश चंद्र बोरा (संपूर्ण)</li>
                    <li>2006 - श्री विजय बेदी (संपूर्ण)</li>
                    <li>2008 - श्री भेरूलालजी जैन (संपूर्ण)</li>
                    <li>2010 - श्री संदीप जोशी (संपूर्ण)</li>
                    <li>2012 - श्री हर्षदभाई संघवी (संपूर्ण)</li>
                    <li>2015 - श्री रमेशजी जैन (संपूर्ण)</li>
                    <li>2017 - श्री ओमप्रकाश जी माहेश्वरी</li>
                    <li>2021 - श्री प्रकाश जैन (रायपुर)</li>
                    <li>2023 - डॉक्टर सोहनलाल जी आर्य (कोटा)</li>
                    <li>2025 - श्रीमान फतहलाल जी सा. कावड़िया (गुड़लीवाले), उदयपुर</li>
                </ul>
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
