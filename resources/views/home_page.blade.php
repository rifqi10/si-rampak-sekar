<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Rampak Sekar</title>
    <link rel="stylesheet" href="{{ asset('css/home_page.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body class="bg-gray-50">

    <!-- Header Section -->
    <header class="flex items-center justify-between p-4 bg-white shadow-md">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/logo.png') }}" class="h-6">
            <span class="font-semibold text-lg">SI RAMPAK SEKAR</span>
        </div>
        <nav class="flex space-x-8">
            <a href="#" class="text-gray-600 hover:text-gray-900">Perencanaan dan Penganggaran</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Pengelolaan Keuangan</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Monitoring Evaluasi dan Pengendalian</a>
        </nav>
    </header>
    <!-- Main Content Section -->
    <div class="swiper-container my-8">
        <div class="swiper-wrapper">
            <div class="swiper-slide flex items-center justify-center">
                <div class="flex flex-col md:flex-row items-center max-w-4xl mx-auto p-4">
                    <div class="text-left md:w-1/2 p-4">
                        <h1 class="text-4xl font-bold mb-4">Melangkah Maju Menuju Jawa Barat Terpadu</h1>
                        <p class="text-lg text-gray-700">SI RAMPAK SEKAR, Sistem Perencanaan dan Penganggaran Pemerintah
                            Daerah Provinsi Jawa Barat, hadir sebagai solusi digital untuk mewujudkan pembangunan Jawa
                            Barat yang terencana, terukur, dan akuntabel.</p>
                    </div>
                    <div class="md:w-1/2 p-4">
                        <img src="{{ asset('img/gambar_slider1.png') }}" alt="Slide 1" class="max-w-full h-auto">
                    </div>
                </div>
            </div>
            <div class="swiper-slide flex items-center justify-center">
                <div class="flex flex-col md:flex-row items-center max-w-4xl mx-auto p-4">
                    <div class="text-left md:w-1/2 p-4">
                        <h1 class="text-4xl font-bold mb-4">Representasi semangat kolaborasi dan harmonisasi</h1>
                        <p class="text-lg text-gray-700">SI RAMPAK SEKAR, Sistem Perencanaan dan Penganggaran Pemerintah
                            Daerah Provinsi Jawa Barat, hadir sebagai solusi digital untuk mewujudkan pembangunan Jawa
                            Barat yang terencana, terukur, dan akuntabel.</p>
                    </div>
                    <div class="md:w-1/2 p-4">
                        <img src="{{ asset('img/gambar_slider2.png') }}" alt="Slide 2" class="max-w-full h-auto">
                    </div>
                </div>
            </div>
            <div class="swiper-slide flex items-center justify-center">
                <div class="flex flex-col md:flex-row items-center max-w-4xl mx-auto p-4">
                    <div class="text-left md:w-1/2 p-4">
                        <h1 class="text-4xl font-bold mb-4">Melangkah Maju Menuju Jawa Barat Terpadu</h1>
                        <p class="text-lg text-gray-700">SI RAMPAK SEKAR, Sistem Perencanaan dan Penganggaran Pemerintah
                            Daerah Provinsi Jawa Barat, hadir sebagai solusi digital untuk mewujudkan pembangunan Jawa
                            Barat yang terencana, terukur, dan akuntabel.</p>
                    </div>
                    <div class="md:w-1/2 p-4">
                        <img src="{{ asset('img/gambar_slider3.png') }}" alt="Slide 3" class="max-w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Footer Section -->
    
    <!-- Including JavaScript file -->
    <script src="{{ asset('js/home_page.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>