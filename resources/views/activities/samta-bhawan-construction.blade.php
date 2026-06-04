@extends('layouts.app')

@section('title', 'समता भवन निर्माण | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🔝 Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading"
             class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            समता भवन निर्माण
        </h2>
    </div>

    <!-- 📦 Two Panel Section -->
    <div class="flex flex-col md:flex-row gap-8">
        
        <!-- 📝 Left Panel -->
        <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl sm:text-2xl font-bold text-yellow-800 mb-4">परिचय</h3>
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                धर्म-ध्यान-आराधना का पावन स्थल ‘समता भवन’। एक स्थान जो पवित्रता, धर्म आराधना के साथ-साथ संगठन का परिचायक भी है, जहाँ प्रतिदिन आध्यात्मिक कार्यक्रम, सामायिक, प्रतिक्रमण, स्वाध्याय, ध्यान, जाप, पाठशाला, समीक्षण ध्यान आदि धार्मिक क्रियाएँ सुव्यवस्थित रूप से संपादित होती हैं। समता भवन उपयोग के लिए एक पूर्व निर्धारित आचार संहिता है। संघ कार्यक्रमों, जैसे आध्यात्मिक, धार्मिक एवं सामाजिक गतिविधियों, संस्कार निर्माण एवं संघ की उद्देश्य पूर्ति के लिए तथा समता भवन निर्माण एवं निर्माण उपरांत रख-रखाव/ प्रोपर्टी टैक्स/ मरम्मत आदि के दायित्व निर्धारण के लिए स्थानीय संघ व केन्द्रीय संघ के साथ एमओयू संपादित किया जाता है, जिसके अनुसार निर्धारित कार्य एवं दायित्वों की अनुपालना दोनों पक्षों के लिए अनिवार्य है।
            </p>
        </div>

        <!-- 📋 Right Panel -->
        <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl sm:text-2xl font-bold text-yellow-800 mb-4">निर्माण में ध्यान रखने योग्य बिन्दु :</h3>
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                समता भवन का निर्माण कई महत्वपूर्ण बिन्दुओं एवं मापदण्डों को ध्यान में रखकर किया जाता है।<br>

1. आवश्यक स्थान (पौषधशाला, प्रतिक्रमण कक्ष, पुस्तकालय आदि)।<br>

2. मूलभूत आवश्यकताएं।<br>

3. संभावित निर्माण क्षेत्रफल।<br>

4. लघुशंका परठने का निरवद्य उपाय।<br>

5. परठने का स्थल बनाने की विधि।<br>

6. अन्य नियम।<br>

15 सितम्बर 2022 तक देशभर में कुल 62 आबद्धित(Affiliated) समता भवन निर्मित हो चुके हैं। समता भवन निर्माण, आचार संहिता, नियमावली, एम ओ यू, दिशा-निर्देश आदि प्रपत्र आवश्यकतानुसार केन्द्रीय कार्यालय (मो. 7073311108) द्वारा उपलब्ध करवाया जाता है।
            </p>
        </div>

    </div>
</div>
@endsection
