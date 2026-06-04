@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">

    <!-- ===== Compact centered heading (complete) ===== -->
    <div class="text-center mb-6 relative compact-heading">

      <!-- Decorative image (centered) -->
      <div class="compact-deco" aria-hidden="true">
        <img src="{{ asset('img/heading.png') }}" alt="decor" class="compact-deco-img">
      </div>

      <!-- Foreground text -->
      <div class="compact-text">
        <h1 class="compact-title">समता सर्व मंगल</h1>
      </div>
    </div>
    <!-- ===== end heading ===== -->

    <!-- ===== Book short description (placed under heading, above cards) ===== -->
    <div class="book-info-top mx-auto max-w-3xl text-center mb-8 p-4 rounded-lg">
        <p class="book-info-text">
            समता सर्व मंगल का संक्षिप्त प्रारूप उपलब्ध है, जिसमें विभाग (I) से (V) तक की आराधना दी गई है। हम सभी प्रतिदिन कार्य आरंभ से पहले अधिकतम 10 मिनट में सामूहिक रूप से यह आराधना करें।<br><br>
            अपने कार्यालय, फैक्ट्री, प्रतिष्ठान या संस्थान में एक निर्धारित स्थान पर इस पुस्तक को सुरक्षित रखें और संभव हो तो नियोक्ता/मालिक सहित सभी कर्मचारी प्रतिदिन मिलकर आराधना करें। नियोक्ता अपने सभी सहयोगियों को इस दैनिक आराधना के लिए प्रेरित करें।
        </p>
    </div>
    <!-- ===== end book info ===== -->

    <!-- ====== Cards grid ====== -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        {{-- Hindi Card --}}
        <div class="pdf-card bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
            <div class="relative h-64 bg-gray-50 pdf-preview-section overflow-hidden">
                <iframe 
                    src="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Final_Edit_New (Curve).pdf') }}#page=1&view=Fit&toolbar=0"
                    class="w-full h-full border-0 pointer-events-none pdf-preview-iframe"></iframe>

                <div class="absolute inset-0 cursor-pointer pdf-preview-overlay"
                     data-pdf="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Final_Edit_New (Curve).pdf') }}"></div>

                <div class="absolute top-2 right-2 bg-orange-600 text-white px-2 py-1 rounded text-xs">PDF</div>
            </div>

            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">हिंदी</h3>
                <p class="text-gray-600 text-sm">समता सर्व मंगल</p>
                <p class="text-orange-600 text-xs font-medium mt-1">यह पुस्तक हिंदी में है</p>

                <div class="flex flex-col space-y-3 mt-4">
                    <a href="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Final_Edit_New (Curve).pdf') }}" 
                       target="_blank" download
                       class="btn-orange">
                       <i class="fas fa-download mr-2"></i>डाउनलोड करें
                    </a>

                    <a href="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Final_Edit_New (Curve).pdf') }}" 
                       target="_blank"
                       class="btn-orange-outline">
                       <i class="fas fa-eye mr-2"></i>पढ़ें
                    </a>
                </div>
            </div>
        </div>

        {{-- Assamese Card --}}
        <div class="pdf-card bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
            <div class="relative h-64 bg-gray-50 pdf-preview-section overflow-hidden">
                <iframe 
                    src="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Assamese Curved.pdf') }}#page=1&view=Fit&toolbar=0"
                    class="w-full h-full border-0 pointer-events-none pdf-preview-iframe"></iframe>

                <div class="absolute inset-0 cursor-pointer pdf-preview-overlay"
                     data-pdf="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Assamese Curved.pdf') }}"></div>

                <div class="absolute top-2 right-2 bg-green-600 text-white px-2 py-1 rounded text-xs">PDF</div>
            </div>

            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">অসমীয়া</h3>
                <p class="text-gray-600 text-sm">সমতা সৰ্ব মঙ্গল</p>
                <p class="text-green-600 text-xs font-medium mt-1">यह पुस्तक असमिया में है</p>

                <div class="flex flex-col space-y-3 mt-4">
                    <a href="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Assamese Curved.pdf') }}" 
                       target="_blank" download
                       class="btn-green">
                       <i class="fas fa-download mr-2"></i>ডাউনল'ড কৰক
                    </a>

                    <a href="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_Assamese Curved.pdf') }}" 
                       target="_blank"
                       class="btn-green-outline">
                       <i class="fas fa-eye mr-2"></i>পঢ়ক
                    </a>
                </div>
            </div>
        </div>

        {{-- Bengali Card --}}
        <div class="pdf-card bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
            <div class="relative h-64 bg-gray-50 pdf-preview-section overflow-hidden">
                <iframe 
                    src="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_BENGALI_VER _18.pdf') }}#page=1&view=Fit&toolbar=0"
                    class="w-full h-full border-0 pointer-events-none pdf-preview-iframe"></iframe>

                <div class="absolute inset-0 cursor-pointer pdf-preview-overlay"
                     data-pdf="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_BENGALI_VER _18.pdf') }}"></div>

                <div class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 rounded text-xs">PDF</div>
            </div>

            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">বাংলা</h3>
                <p class="text-gray-600 text-sm">সমতা সর্ব মঙ্গল</p>
                <p class="text-blue-600 text-xs font-medium mt-1">यह पुस्तक बंगाली में है</p>

                <div class="flex flex-col space-y-3 mt-4">
                    <a href="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_BENGALI_VER _18.pdf') }}" 
                       target="_blank" download
                       class="btn-blue">
                       <i class="fas fa-download mr-2"></i>ডাউনলোড করুন
                    </a>

                    <a href="{{ asset('img/samta_sarv_mangal/Samta Sarv Mangal_BENGALI_VER _18.pdf') }}" 
                       target="_blank"
                       class="btn-blue-outline">
                       <i class="fas fa-eye mr-2"></i>পড়ুন
                    </a>
                </div>
            </div>
        </div>

        {{-- Punjabi Card --}}
        <div class="pdf-card bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
            <div class="relative h-64 bg-gray-50 pdf-preview-section overflow-hidden">
                <iframe 
                    src="{{ asset('img/samta_sarv_mangal/SSM Punjabi .pdf') }}#page=1&view=Fit&toolbar=0"
                    class="w-full h-full border-0 pointer-events-none pdf-preview-iframe"></iframe>

                <div class="absolute inset-0 cursor-pointer pdf-preview-overlay"
                     data-pdf="{{ asset('img/samta_sarv_mangal/SSM Punjabi .pdf') }}"></div>

                <div class="absolute top-2 right-2 bg-purple-600 text-white px-2 py-1 rounded text-xs">PDF</div>
            </div>

            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">ਪੰਜਾਬੀ</h3>
                <p class="text-gray-600 text-sm">ਸਮਤਾ ਸਰਵ ਮੰਗਲ</p>
                <p class="text-purple-600 text-xs font-medium mt-1">यह पुस्तक पंजाबी में है</p>

                <div class="flex flex-col space-y-3 mt-4">
                    <a href="{{ asset('img/samta_sarv_mangal/SSM Punjabi .pdf') }}"
                       target="_blank" download
                       class="btn-purple">
                       <i class="fas fa-download mr-2"></i>ਡਾਊਨਲੋਡ ਕਰੋ
                    </a>

                    <a href="{{ asset('img/samta_sarv_mangal/SSM Punjabi .pdf') }}"
                       target="_blank"
                       class="btn-blue-outline">
                       <i class="fas fa-eye mr-2"></i>ਪੜ੍ਹੋ
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- (Removed duplicate bottom info — description already shown above) -->

</div>

{{-- ---------------------------- CSS (compact heading + book-info + rest) ---------------------------- --}}
<style>
/* Import Amita font only for heading */
@import url('https://fonts.googleapis.com/css2?family=Amita:wght@400;700&display=swap');

/* Container background */
.container {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
}

/* ===== Compact Heading ===== */
.compact-heading {
  position: relative;
  padding-top: 56px;   /* reduced so heading is higher */
  padding-bottom: 8px;
  overflow: visible;
}

.compact-deco {
  position: absolute;
  left: 0;
  right: 0;
  top: -6px; /* bring deco slightly up */
  display: flex;
  justify-content: center;
  pointer-events: none;
  z-index: 5;
}

.compact-deco-img {
  max-width: 340px;
  width: 36%;
  height: auto;
  opacity: 0.96;
  display: block;
  margin: 0 auto;
}

.compact-text { position: relative; z-index: 10; text-align: center; }

.compact-title {
  font-family: 'Amita', serif;
  font-size: 1.9rem;
  color: #C89A2C;
  margin: 0;
  font-weight: 700;
  line-height: 1.05;
  text-shadow: 0 2px 4px rgba(0,0,0,0.06);
}

/* ===== Book info block placed above cards ===== */
.book-info-top {
    border: 1px solid rgba(200,154,44,0.18);
    background: linear-gradient(180deg, rgba(255,250,240,0.6), rgba(255,250,240,0.35));
    box-shadow: 0 6px 18px rgba(0,0,0,0.03);
}

.book-info-text {
    color: #8b6b20;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
}

/* Responsive heading & book-info */
@media (max-width: 768px) {
  .compact-heading { padding-top: 48px; }
  .compact-deco-img { max-width: 260px; width: 65%; }
  .compact-title { font-size: 1.4rem; }
  .book-info-top { padding: 12px; }
  .book-info-text { font-size: 0.95rem; }
}

/* ===== Cards & Buttons ===== */
.pdf-card { transition: all .3s ease; }
.pdf-card:hover { transform: translateY(-8px); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.08); }

.pdf-card a {
    min-height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    border-radius: 8px;
    transition: .25s;
}

/* ORANGE */
.btn-orange { background:#ea580c; color:white; }
.btn-orange:hover { background:#c2410c; }
.btn-orange-outline { background:white; border:2px solid #ea580c; color:#ea580c; }
.btn-orange-outline:hover { background:#fff7ed; }

/* GREEN */
.btn-green { background:#16a34a; color:white; }
.btn-green:hover { background:#15803d; }
.btn-green-outline { background:white; border:2px solid #16a34a; color:#16a34a; }
.btn-green-outline:hover { background:#f0fdf4; }

/* BLUE */
.btn-blue { background:#2563eb; color:white; }
.btn-blue:hover { background:#1d4ed8; }
.btn-blue-outline { background:white; border:2px solid #2563eb; color:#2563eb; }
.btn-blue-outline:hover { background:#eff6ff; }

/* PURPLE (Punjabi) */
.btn-purple { background:#9333ea; color:white; }
.btn-purple:hover { background:#7e22ce; }

/* iframe preview tweaks */
.pdf-preview-iframe { pointer-events: none; border: none; background: white; opacity: .95; }
.pdf-preview-section { height: 256px; }

@media (max-width: 768px) {
    .pdf-preview-section { height: 200px; }
}
</style>

{{-- ---------------------------- Script ---------------------------- --}}
<script>
document.querySelectorAll(".pdf-preview-overlay").forEach(overlay => {
    overlay.addEventListener("click", () => {
        window.open(overlay.dataset.pdf, "_blank");
    });
});
</script>

@endsection
