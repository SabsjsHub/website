<!-- 🔻 Footer Start -->
<!-- 🌑 Premium Deep Slate Corporate Footer -->
<footer class="bg-slate-950 text-slate-400 border-t border-slate-900 pt-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 px-6 pb-12">

        <!-- 🪙 Donation - now wider (md:col-span-5) -->
        <div class="md:col-span-5">
            <h4 class="text-sm font-bold text-slate-200 uppercase tracking-widest mb-5 border-b border-slate-800 pb-2.5 font-mono">🙏 Donation</h4>
            <div class="flex items-start gap-4">
                <div class="border border-slate-800 rounded-xl p-1.5 bg-white shadow-sm flex-shrink-0">
                    <img src="{{ asset('img/DONOR PORTAL QR.png') }}" alt="QR Code"
                        class="w-32 h-32 object-contain rounded-lg" />
                </div>
                <div class="text-sm text-slate-400 leading-relaxed">
                    <p>
                        संघ में आपके सहयोग व सदस्यता की सम्पूर्ण जानकारी प्राप्त करने व
                        ऑनलाइन भुगतान हेतु नीचे दिए लिंक पर क्लिक करें।
                    </p>
                    <a href="https://donorportal.sadhumargi.com/login"
                        class="inline-block mt-2.5 text-indigo-400 hover:text-indigo-300 font-semibold hover:underline break-all text-[13px] transition-colors">
                        https://donorportal.sadhumargi.com/login
                    </a>
                </div>
            </div>
        </div>

        <!-- 🧾 Latest Downloads - now smaller (md:col-span-2) -->
        <div class="md:col-span-2">
            <h4 class="text-sm font-bold text-slate-200 uppercase tracking-widest mb-5 border-b border-slate-800 pb-2.5 font-mono">📥 Latest Downloads</h4>
            <div class="space-y-2.5">
                <a href="/shramnopasak"
                    class="block bg-slate-900 hover:bg-indigo-600 text-white text-center py-2.5 rounded-xl text-xs font-bold border border-slate-800 hover:border-indigo-500 transition-all duration-300 shadow-sm">📄
                    श्रमणोपासक </a>
                <a href="{{ route('pakhi.latest') }}" target="_blank" rel="noopener"
                    class="block bg-slate-900 hover:bg-indigo-600 text-white text-center py-2.5 rounded-xl text-xs font-bold border border-slate-800 hover:border-indigo-500 transition-all duration-300 shadow-sm">
                    📄 पक्खी का पाना
                </a>

                <a href="/chaturmas-lists"
                    class="block bg-slate-900 hover:bg-indigo-600 text-white text-center py-2.5 rounded-xl text-xs font-bold border border-slate-800 hover:border-indigo-500 transition-all duration-300 shadow-sm">📎
                    चातुर्मास सूची</a>
            </div>
        </div>

        <!-- 🧭 Quick Links - now smaller (md:col-span-2) -->
        <div class="md:col-span-2">
            <h4 class="text-sm font-bold text-slate-200 uppercase tracking-widest mb-5 border-b border-slate-800 pb-2.5 font-mono">🔗 Quick Links</h4>
            <ul class="space-y-2.5 text-slate-400 text-sm">
                <li><a href="/vihaarcharya" class="hover:text-indigo-400 transition-colors">📍 विहारचर्या</a></li>
                <li><a href="https://spf.sadhumargi.com" class="hover:text-indigo-400 transition-colors">👔 Sadhumargi Professional Forum</a></li>
                <li><a href="https://sadhumargi.in" class="hover:text-indigo-400 transition-colors">💳 Sadhumargi App </a></li>
                <li><a href="/contactus" class="hover:text-indigo-400 transition-colors">📞 Contact Us</a></li>
            </ul>
        </div>

        <!-- 🏢 Office Info (unchanged) -->
        <div class="md:col-span-3">
            <h4 class="text-sm font-bold text-slate-200 uppercase tracking-widest mb-5 border-b border-slate-800 pb-2.5 font-mono">🏢 Central Office</h4>
            <p class="text-sm text-slate-400 leading-relaxed">
                श्री अखिल भारतवर्षीय साधुमार्गी जैन संघ<br />
                संघ केन्द्रीय कार्यालय, समता भवन<br />
                बीकानेर, राजस्थान - 334401<br />
                📞 +91-9602026899<br />
                📧 ho@sadhumargi.com
            </p>
        </div>
    </div>

    <!-- ⚫ Bottom Strip -->
    <div class="border-t border-slate-900 py-6 text-center text-xs text-slate-500 px-4 bg-slate-950/50">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-3">
            <p>© 2025 SABSJS. All Rights Reserved.</p>
            <div class="flex items-center gap-2">
                <span>Follow Us:</span>
                <a href="#" target="_blank" class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('img/social/facebook.png') }}" alt="Facebook" class="w-5 h-5 filter grayscale invert" />
                </a>
            </div>
        </div>
    </div>
</footer>


<!-- 🔻 Footer End -->

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KJC1XT6FXE"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-KJC1XT6FXE');
</script>