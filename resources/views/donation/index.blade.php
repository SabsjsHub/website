@extends('layouts.app')

@section('title', 'अर्थ सहयोग | SABSJS')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- Heading -->
    <div class="relative text-center mt-1 mb-6">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />
        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-xl sm:text-3xl md:text-3xl font-bold text-yellow-800 tracking-wide">
            अर्थ सहयोग
        </h2>
    </div>

    <!-- Description -->
    <div class="text-center max-w-3xl mx-auto text-gray-700 leading-relaxed mb-10">
        यदि आप श्री संघ एवं संघ की सहयोगी संस्थाओं द्वारा संचालित विभिन्न प्रवृत्तियों हेतु आर्थिक सहयोग करना चाहते हैं
        तो आप ऑनलाइन बैंक द्वारा भी हस्तांतरण कर सकते हैं अथवा संघ कार्यालय में संपर्क कर सकते हैं। संघ को दिया गया
        अर्थ सहयोग भारतीय आयकर अधिनियम की धारा 80 G के अंतर्गत कर मुक्त है। कृपया राशि भेजने के पश्चात केंद्रीय
        कार्यालय को अवश्य सूचित करें।
    </div>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: For Online Transfer -->
        <div class="bg-white border shadow p-6 rounded-lg text-center">
            <h3 class="text-lg font-bold text-red-600 mb-3">For Online Transfer:-</h3>
            <p class="mb-3">ऑनलाइन डोनेशन करने के लिए यहां क्लिक करें</p>

            <div class="flex flex-col gap-3">
                <p class="text-sm text-gray-600">2000 रुपये से अधिक के दान के लिए नीचे दिए गए बटन पर क्लिक करें</p>
                <a href="https://donorportal.sadhumargi.com/" target="_blank" class="bg-green-600 text-white font-semibold py-2 rounded hover:bg-green-700 transition">
                    सदस्य दान करें
                </a>


                <p class="text-sm text-gray-600">2000 रुपये या कम के दान के लिए नीचे दिए गए बटन पर क्लिक करें</p>
                <form class="razorpaybtn mt-3">
                    <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JoX6ZBeBRmwAfA" async>
                    </script>
                </form>

            </div>
        </div>

        <!-- Card 2: QR Code -->
        <div class="bg-white border shadow-lg p-6 rounded-xl text-center hover:shadow-2xl transition-shadow duration-300">
    <!-- 🔹 Heading -->
    

    <!-- 🖼 QR Code Image -->
    <div class="flex justify-center items-center mb-4">
        <img src="{{ asset('img/qr_donation.jpg') }}" 
             alt="QR Code" 
             class="max-w-[250px] w-full h-auto object-contain rounded-lg border border-gray-200 shadow-md hover:scale-105 transition-transform duration-300" />
    </div>

    <!-- 📖 Text -->
    <p class="text-base text-gray-800 font-semibold">📲 Scan To Donate</p>
    <p class="text-sm text-gray-600 mt-1">ऑनलाइन डोनेशन करने के लिए यहां स्कैन करें</p>

    
</div>



        <!-- Card 3: Bank Details -->
        <div class="bg-white border shadow p-6 rounded-lg">
            <h3 class="text-lg font-bold text-red-600 mb-4">Bank Details:-</h3>
            <ul class="text-gray-800 text-sm space-y-1">
                 <li><strong>Account Name:</strong> Shri Akhil Bharatvarshiya Sadhumargi Jain Sangh</li>
                  <li><strong>Account Number:</strong> 31264126861</li>
                   <li><strong>IFSC CODE:</strong> SBIN0003401</li>
                <li><strong>Bank Name:</strong> State Bank Of India (S.B.I)</li>
                <li><strong>Branch Name:</strong> Gangasahar Road, Bikaner.</li>
            </ul>
        </div>
    </div>
</div>
@endsection
