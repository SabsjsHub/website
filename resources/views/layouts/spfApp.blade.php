<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'SABSJS-SPF')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- External Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <style>
        .group:hover .submenu {
            display: block;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 overflow-x-hidden">

    {{-- 🔹 Top Nav --}}
    @include('partials.spfnav')

    {{-- 🔹 Page Content --}}
    @yield('content')

    <!-- 🌿 WhatsApp Floating Button -->
    <a href="https://wa.me/918535858853" target="_blank"
        class="fixed bottom-5 right-5 z-50 bg-green-500 hover:bg-green-600 p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110"
        aria-label="WhatsApp Chat">
        <img src="{{ asset('img/social/whatsapp.svg') }}" alt="WhatsApp" class="w-6 h-6" />
    </a>


    {{-- 🔹 Footer --}}
    @include('partials.footer')


    {{-- JS --}}
    <script>
        // Toggle full mobile menu
        document.getElementById('hamburger-toggle').addEventListener('click', function () {
            document.getElementById('mobile-nav').classList.toggle('hidden');
        });

        // Handle mobile dropdown toggles
        document.querySelectorAll('.dropdown-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const menu = button.nextElementSibling;
                menu.classList.toggle('hidden');
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        new Swiper(".mySwiper", {
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true
        });
    </script>


</body>

</html>