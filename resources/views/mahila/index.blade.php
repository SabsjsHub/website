@extends('layouts.mahilaApp')

@section('title', 'परिचय | SABSJS-MS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- 🌼 Heading Section -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            परिचय
        </h2>
    </div>

    <!-- 🔄 Flex Layout for Slider and Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
        <!-- 🖼️ Left Side - Swiper Slider -->
<div>
    <div class="swiper mySwiper rounded-lg overflow-hidden">
        <div class="swiper-wrapper" id="mahila-swiper-wrapper">
            <!-- Dynamic slides will be injected here -->
        </div>
        <!-- Swiper Pagination & Navigation (Optional) -->
        <div class="swiper-pagination mt-2"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>


        <!-- 📖 Right Side - Intro Content -->
        <div class="bg-white shadow-md p-6 rounded-lg text-justify leading-relaxed text-gray-800 text-[15px]" x-data="{ expanded: false }">
            <h3 class="text-lg md:text-xl font-semibold text-orange-600 mb-4 border-b border-orange-300 pb-1">
                परिचय
            </h3>
            <p>
                परम पूज्य आचार्य प्रवर 1008 श्री रामलालजी म.सा. के अलौकिक अतिशय, उपाध्याय प्रवर श्री राजेशमुनिजी म.सा. के दूरदृष्टि से परिपूर्ण मार्गदर्शन एवं समस्त चारित्र आत्माओं की साधना के बल से फलीभूत इस महान संघ को जिनशासन की अद्भुत प्रभावना करने का सुअवसर श्री अखिल भारतवर्षीय साधुमार्गी जैन महिला समिति को प्राप्त हुआ है।
            </p>
            <p class="mt-2">
                नारी वर्ग ममता, करुणा, वात्सल्य का प्रतिबिंब है, और यदि नारी सुसंस्कारित एवं शिक्षित होगी तो वह समाज किसी भी दृष्टि से पीछे नहीं रह सकता।
इसी उद्देश्य को लेकर महिलाओं के संगठन की स्थापना श्री अखिल भारतवर्षीय साधुमार्गी जैन महिला समिति के रूप में की गई।

महिला समिति की स्थापना जैन पंचांग के अनुसार आसोज सुदी 3 तदनुसार दिनांक 18 अक्टूबर 1967 को छत्तीसगढ़ में श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ की अंतर्गत संस्था के रूप में हुई।
            </p>
            
            <!-- Collapsed Content -->
            <div x-show="!expanded" class="relative">
                <p class="mt-2 line-clamp-3">
                    श्री अ.भा.सा. जैन महिला समिति नारी विकास एवं उत्थान हेतु पिछले कई वर्षों से महत्वपूर्ण भूमिका निभा रही है। भारतवर्ष के लगभग 323 मंडल, 253 स्थानों पर सक्रिय सदस्य एवं 29,000 से अधिक सदस्याओं के साथ महिला समिति की शाखाओं द्वारा धार्मिक एवं सामाजिक अनेक प्रकल्पों का संचालन किया जा रहा है।
                </p>
                <div class="absolute bottom-0 right-0 w-24 h-12 bg-gradient-to-l from-white to-transparent"></div>
            </div>

            <!-- Expanded Content -->
            <div x-show="expanded" x-transition class="space-y-2 mt-2">
                <p>
                    श्री अ.भा.सा. जैन महिला समिति नारी विकास एवं उत्थान हेतु पिछले कई वर्षों से महत्वपूर्ण भूमिका निभा रही है। भारतवर्ष के लगभग 323 मंडल, 253 स्थानों पर सक्रिय सदस्य एवं 29,000 से अधिक सदस्याओं के साथ महिला समिति की शाखाओं द्वारा धार्मिक एवं सामाजिक अनेक प्रकल्पों का संचालन किया जा रहा है।
निश्चित रूप से महिला समिति द्वारा किए जा रहे कार्य नारी विकास का एक महत्वपूर्ण केंद्र हैं। समिति का प्रमुख उद्देश्य चतुर्विध संघ में सम्यक् ज्ञान–दर्शन–चारित्र की अभिवृद्धि करना है।<br>

महिला समिति ने वर्ष 2017 में अपना स्वर्ण जयंती वर्ष मनाया, जो अत्यंत गौरवशाली रहा। समिति के गठन से अब तक इन 58 वर्षों में 21 अध्यक्षा संघ सेवा का गुरुत्तर दायित्व निभा चुकी हैं, जिनके अनुकरणीय सहयोग एवं पुरुषार्थ को कभी विस्मृत नहीं किया जा सकता।<br>

सभी पूर्वाध्यक्षाओं ने अपना बहुमूल्य समय देकर संगठन को विशालकाय एवं समृद्धिशाली स्वरूप प्रदान किया है। आपकी निःस्वार्थ सेवा एवं अमूल्य योगदान ने महिला समिति को सशक्त और सुदृढ़ बनाया है।
भविष्य को और अधिक सुनहरा व गौरवमयी बनाने के लिए आपके सहयोग व मार्गदर्शन की अपेक्षा महिला समिति को सदैव रहेगी।<br>

आपके निष्कलंक स्नेह और सहयोग के लिए महिला समिति सदैव आपकी आभारी रहेगी।
वर्तमान में महिला समिति अपनी सभी प्रवृत्तियों के साथ आध्यात्मिक उन्नति हेतु महत्वपूर्ण कार्य कर विकास के परचम लहरा रही है।<br>

(संगठन, पंचसहस्त्री श्रद्धाभिषिक्त परिवारांजलि, केसरिया कार्यशाला, युवती शक्ति, विमेंस मोटिवेशनल कॉर्नर, सर्वधर्म सहयोग, छात्रवृत्ति योजना, सेवा सोसाइटी, गोल्डन स्टेप्स, धार्मिक शिक्षण शिविर, भ्रूणहत्या त्याग संकल्प पत्र भरवाना, प्रतिक्रण कंठस्थ करवाना, रिपोर्टिंग सिस्टम आदि)<br>
                </p>
            </div>

            <!-- Read More / Read Less Button -->
            <button @click="expanded = !expanded" 
                    class="mt-4 text-orange-600 hover:text-orange-700 font-semibold transition-colors duration-200 flex items-center gap-1">
                <span x-text="expanded ? 'Read Less ↑' : 'Read More ↓'"></span>
            </button>
        </div>

    </div>

    <!-- 👥 पदाधिकारीगण Section -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
           वर्तमान कार्यकारिणी - राष्ट्रीय पदाधिकारी
        </h2>
    </div>
    <div class="mt-16">
        
        <div id="post-holder-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- JavaScript से Fill होगा -->
        </div>
    </div>


    <!-- 🔸 निवर्तमान अध्यक्षा -->
<div class="relative text-center mt-20 mb-6">
    <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
    <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
        निवर्तमान अध्यक्षा
    </h2>
</div>

<div id="latest-ex-president" class="flex justify-center mt-6">

    <!-- JS will inject latest ex-president card here -->
</div>

</div>

<!-- Axios CDN (you can install via npm also) -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        axios.get('https://website.sadhumargi.in/api/mahila-pst')
            .then(function(response) {
                const data = response.data;
                const container = document.getElementById('post-holder-container');

                data.forEach(member => {
    const card = document.createElement('div');
    card.className = `
        bg-white rounded-lg shadow p-4 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl
    `;

    card.innerHTML = `
        <img src="https://website.sadhumargi.in${member.photo}" 
             alt="${member.name}" 
            class="w-full h-52 object-contain mb-4 rounded-md border border-gray-200 shadow-sm bg-white"
 />

        <h4 class="font-semibold text-orange-700 text-[16px] leading-tight">${member.name}</h4>
        <p class="text-gray-600 text-sm mt-1">${member.post}</p>
    `;

    container.appendChild(card);
});

            })
            .catch(function(error) {
                console.error('Error fetching mahila-pst data:', error);
                const container = document.getElementById('post-holder-container');
                container.innerHTML = '<p class="text-red-500">डेटा लोड नहीं हो पाया।</p>';
            });


            // Fetch Latest Ex-President
axios.get('https://website.sadhumargi.in/api/mahila-ex-prsident/latest')
    .then(function(response) {
        const data = response.data;
        const container = document.getElementById('latest-ex-president');

        const card = document.createElement('div');
        card.className = `
            bg-white rounded-lg shadow p-4 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl
        `;

        card.innerHTML = `
            <img src="https://website.sadhumargi.in${data.photo}" 
                 alt="${data.name}" 
                 class="w-full h-52 object-contain object-top mb-4 rounded-md border border-gray-200 shadow-sm bg-white" />

            <h4 class="font-semibold text-orange-700 text-[16px] leading-tight">${data.name}</h4>
            <p class="text-gray-600 text-sm mt-1">${data.place}</p>
        `;

        container.appendChild(card);
    })
    .catch(function(error) {
        console.error('Error fetching latest ex-president:', error);
        const container = document.getElementById('latest-ex-president');
        container.innerHTML = '<p class="text-red-500">डेटा लोड नहीं हो पाया।</p>';
    });

    // Mahila Slider API
axios.get('https://website.sadhumargi.in/api/mahila-slider')
    .then(function(response) {
        const data = response.data;
        const wrapper = document.getElementById('mahila-swiper-wrapper');

        if (data.length === 0) {
            wrapper.innerHTML = '<div class="text-red-500 p-4">कोई स्लाइडर इमेज उपलब्ध नहीं है।</div>';
            return;
        }

        data.forEach(slide => {
            const div = document.createElement('div');
            div.className = 'swiper-slide';
            div.innerHTML = `
                <img src="https://website.sadhumargi.in${slide.photo}" alt="Slide"
                     class="w-full h-auto object-cover rounded" />
            `;
            wrapper.appendChild(div);
        });

        // Initialize Swiper after content is injected
        new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    })
    .catch(function(error) {
        console.error('Error loading slider images:', error);
        document.getElementById('mahila-swiper-wrapper').innerHTML = '<div class="text-red-500 p-4">स्लाइडर लोड नहीं हो पाया।</div>';
    });


    });

</script>
</div>
@endsection
