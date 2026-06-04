@extends('layouts.app')

@section('title', 'दानपेटी योजना | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl font-bold text-yellow-800 tracking-wide">
            दानपेटी योजना
        </h2>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4">
    <div class="flex flex-col md:flex-row gap-8 items-start">

        <!-- 📝 Left Panel -->
        <div class="w-full md:w-1/2 bg-white shadow-md rounded-lg p-6">
            <h3 class="text-xl sm:text-2xl font-bold text-yellow-800 mb-4"> “नियमित दान, बने स्वभाव”</h3>
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ की समस्त प्रवृत्तियों में समाज जन की सहभागिता सुलभ हो इस हेतु राष्ट्रीय संघ द्वारा दान पेटी योजना संचालित है | संघ के सभी परिवार प्रतिदिन अपना अंशदान देकर संघ द्वारा संचालित सेवा परोपकार जैसी प्रवृत्तियां हेतु अपना सहयोग प्रदान करते हैं | दान पेटी योजना पुण्यशालियों को प्रतिदिन सहज दान का अवसर प्रदान करती है |दान करने से दाता के मन में हर्ष व आत्मा में संतोष प्राप्त होता है
                इस योजना का मुख्य उद्देश्य नियमित दान अर्पण करना है , परिवार में मनाया जाने वाले प्रत्येक विशेष दिवस की शुरुआत दान से होना चाहिए ताकि परिवार में विशेषकर बच्चों में दान की भावना का विकास हो एवं सभी का केंद्रीय संघ के प्रति समर्पित भाव बढ़े | दान के उच्च भाव मोक्ष मार्ग में सहयोगी है|
            </p>
        </div>

        <!-- 🖼️ Right Panel: Alpine Slider -->
       <!-- 🖼️ Right Panel: Alpine Slider -->
<div class="w-full md:w-1/2" x-data="imageSliderComponent()" x-init="start()">
    <!-- ✅ Updated Image Container -->
    <div class="relative w-full h-[360px] rounded-lg overflow-hidden shadow-md bg-gray-100 flex items-center justify-center">
        <template x-for="(image, index) in images" :key="index">
            <img
                x-show="currentIndex === index"
                x-transition:enter="transition duration-1000 ease-in-out"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition duration-800 ease-in-out"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                :src="image"
                alt="दानपेटी स्लाइड"
                class="w-full h-full object-contain rounded-lg"
                x-cloak
            />
        </template>
    </div>

    <!-- Navigation Dots (unchanged) -->
    <div class="flex justify-center mt-3 space-x-2">
        <template x-for="(image, index) in images" :key="'dot-'+index">
            <button
                @click="currentIndex = index"
                :class="{
                    'bg-yellow-500 ring-2 ring-yellow-600 scale-110': currentIndex === index,
                    'bg-gray-300': currentIndex !== index
                }"
                class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                aria-label="Slider dot"
            ></button>
        </template>
    </div>
</div>




    </div>

    <!-- 🌟 Full Width Panel After Left-Right Panels -->
<div class="max-w-6xl mx-auto px-4 mt-10 mb-5">
    <div class="bg-yellow-100 border-l-4 border-yellow-600 p-6 rounded-lg shadow-md">
        <h3 class="text-xl sm:text-2xl font-bold text-yellow-800 mb-3">दानपेटी योजना से जुड़ें</h3>
        <p class="text-base sm:text-lg text-gray-800 leading-relaxed">
            इस हेतु प्रत्येक संघ में दान पेटी खरीद कर लगाई गई है एवं अध्यक्ष मंत्री व दान पेटी योजना प्रभारी के निर्देशन में साल में एक बार दान पेटी से राशि को इकट्ठा कर प्राप्त राशि का 60% केंद्रीय कार्यालय एवं 40% प्रतिशत स्थानीय संघ में उपयोग में लिया जाता है|<br>
            कई संघ पूरी राशि भी केंद्र में जमा करवा कर अपनी सहभागिता निभाते हैं जो की सम्माननीय है दान पेटी की सहयोग राशि जमा करवाते समय अपने विवरण के साथ मोबाइल नंबर देना होता हैं और रसीद प्राप्त की जाती है दान पेटी योजना का बैनर प्रत्येक स्थानक भवन प्रवचन स्थल आदि में लगाया जाता है एवं सार्वजनिक कार्यक्रमों में दान पेटी के मूल उद्देश्यों को समझाते हुए प्रभावना की जाती है देश भर के अधिकांश संघों में दान पेटी योजना संचालित है संघ के तीनों इकाई के कोई भी जिम्मेदार व्यक्ति इस कार्य में अपना सहयोग प्रदान कर सकते हैं|<br>
            सर्वश्रेष्ठ अंचल कोएवं सर्वाधिक राशि जमा करने वाले प्रथम द्वितीय और तृतीय संघ को अधिवेशन में सम्मानित किया जाता हैl
        </p>
    </div>
</div>

</div>
@endsection


<script>
    function imageSliderComponent() {
        return {
            images: [
                "{{ asset('img/daanPeti/daan_peti_1.jpg') }}"
                , "{{ asset('img/daanPeti/daanpeti-logo.jpg') }}"
                , "{{ asset('img/daanPeti/daan_peti_2.jpg') }}"
            ]
            , currentIndex: 0
            , start() {
                setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.images.length;
                }, 4000);
            }
        }
    }

</script>
