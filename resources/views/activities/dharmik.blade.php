@extends('layouts.app')

@section('title', 'धार्मिक प्रवृत्तियाँ| SABSJS')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">



    <div class="relative text-center my-8">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            धार्मिक प्रवृत्तियाँ
        </h2>
    </div>
   <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Panel 1 -->
    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-6 text-center">
        <div class="text-3xl mb-4 text-yellow-700">
            📿
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">समता संस्कार पाठशाला</h3>
        <p class="text-gray-600 text-sm">
            आत्मिक विकास हेतु नियमित ध्यान और साधना की विधियाँ।
        </p>
    </div>

    <!-- Panel 2 -->
    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-6 text-center">
        <div class="text-3xl mb-4 text-yellow-700">
            📖
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">श्री समता प्रचार संघ</h3>
        <p class="text-gray-600 text-sm">
            इस प्रवृत्ति का उद्भव समता विभूति परम श्रद्धेय स्व. आचार्य श्री नानालाल जी म.सा. की सद्प्रेरणा से उदयपुर में सन् 1978 में हुआ। प्रवृत्ति का उद्देश्य समता सिद्धांत को जन-जन तक पहुंचाने का है। पर्युषण पर्व पर जहां चारित्र आत्माएं नहीं पहुंच पाती है; वहां स्वाध्यायी जाकर आठ दिन सेवा देते है। स्वाध्यायियों को तैयार करने के लिए समय-समय पर स्वाध्यायी प्रशिक्षण शिविरों का आयोजन करना, पयुर्षण पर्वाराधना के पावन प्रसंग पर अधिकाधिक क्षेत्रों में धर्माराधना करवाना, इस प्रवृत्ति का मुख्य उद्देश्य है।
            समता प्रचार संघ के माध्यम से प्रतिवर्ष लगभग 550 स्वाध्यायी 174 से अधिक स्थलों पर स्वाध्यायी सेवा देते है। वर्ष 2024 में होली चातुर्मास के उपलक्ष्य में पहली बार ‘फाल्गुनी पर्व’ आराधना के रुप में पूरे देशभर में 11,111 संवर/पौषध/दया करने का लक्ष्य रखा गया, जिसमें सभी श्रावक-श्राविकाओं की सक्रिय सहभागिता रही।
        </p>
    </div>

    <!-- Panel 3 -->
    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-6 text-center">
        <div class="text-3xl mb-4 text-yellow-700">
            🛕
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">समता संस्कार शिविर</h3>
        <p class="text-gray-600 text-sm">
            संघ द्वारा बालक-बालिकाओं के चारित्र निर्माण हेतु प्रतिवर्ष सम्पूर्ण देश में क्षेत्रीय एवं स्थानीय समता संस्कार शिविरों का आयोजन किया जाता है। इन शिविरों के माध्यम से बालक-बालिकाओं को जैन धर्म का प्रारम्भिक ज्ञान कराया जाता है। साथ ही उन्हें व्यसनमुक्त एवं संस्कारयुक्त जीवन जीने की विशेष प्रेरणा दी जाती है। प्रतिवर्ष लगभग 3 से 4 हजार बालक-बालिकाएँ समता संस्कार शिविरों में भाग लेते हैं।

            समय-समय पर आयोजित संस्कार शिविरों में संघ की  Know & Grow  परियोजना के अनुसार, प्रतिभागियों को विभिन्न जीवन मूल्यों का ज्ञान दिया जाता है। शिविर में आयोजित प्रतियोगिताओं में विजेता प्रतिभागियों को पुरस्कार देकर अर्जित ज्ञान को व्यवहार में अपनाने हेतु प्रेरित किया जाता है।
        </p>
    </div>
</div>



</div>
@endsection
