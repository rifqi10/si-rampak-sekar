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

<body class="bg-white">
    
    <!-- Header Section -->
    <header class="flex items-center justify-between p-4 bg-[#F5F7FA] shadow-md">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/logo.png') }}" class="h-6">
            <span class="text-lg font-semibold">SI RAMPAK SEKAR</span>
        </div>
        <nav class="flex space-x-8">
            <a href="#" class="text-gray-600 hover:text-gray-900">Perencanaan dan Penganggaran</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Pengelolaan Keuangan</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Monitoring Evaluasi dan Pengendalian</a>
        </nav>
    </header>

    <!-- Main Content Section -->

    <!-- swiper-slide -->
    <div class="my-8 swiper-container bg-[#F5F7FA]">
        <div class="swiper-wrapper">
            <div class="flex items-center justify-center swiper-slide">
                <div class="flex flex-col items-center max-w-6xl p-4 mx-auto md:flex-row">
                    <div class="p-4 text-left md:w-1/2">
                        <h1 class="mb-4 text-5xl font-bold">Melangkah Maju Menuju Jawa Barat Terpadu</h1>
                        <p class="text-gray-700 text-l">SI RAMPAK SEKAR, Sistem Perencanaan dan Penganggaran Pemerintah
                            Daerah Provinsi Jawa Barat, hadir sebagai solusi digital untuk mewujudkan pembangunan Jawa
                            Barat yang terencana, terukur, dan akuntabel.</p>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <img src="{{ asset('img/gambar_slider1.png') }}" alt="Slide 1" class="h-auto max-w-full md:max-w-lg">
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center swiper-slide">
                <div class="flex flex-col items-center max-w-6xl p-4 mx-auto md:flex-row">
                    <div class="p-4 text-left md:w-1/2">
                        <h1 class="mb-4 text-5xl font-bold">Representasi semangat kolaborasi dan harmonisasi</h1>
                        <p class="text-gray-700 text-l">SI RAMPAK SEKAR, Sistem Perencanaan dan Penganggaran Pemerintah
                            Daerah Provinsi Jawa Barat, hadir sebagai solusi digital untuk mewujudkan pembangunan Jawa
                            Barat yang terencana, terukur, dan akuntabel.</p>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <img src="{{ asset('img/gambar_slider2.png') }}" alt="Slide 2" class="h-auto max-w-full md:max-w-lg">
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center swiper-slide">
                <div class="flex flex-col items-center max-w-6xl p-4 mx-auto md:flex-row">
                    <div class="p-4 text-left md:w-1/2">
                        <h1 class="mb-4 text-5xl font-bold">Melangkah Maju Menuju Jawa Barat Terpadu</h1>
                        <p class="text-gray-700 text-l">SI RAMPAK SEKAR, Sistem Perencanaan dan Penganggaran Pemerintah
                            Daerah Provinsi Jawa Barat, hadir sebagai solusi digital untuk mewujudkan pembangunan Jawa
                            Barat yang terencana, terukur, dan akuntabel.</p>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <img src="{{ asset('img/gambar_slider3.png') }}" alt="Slide 3" class="h-auto max-w-full md:max-w-lg">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- New Section -->
    <p class="h-16 mt-2 overflow-hidden text-center text-gray-600 line-clamp-3">
        Menyatukan sistem perencanaan dan penganggaran, monitoring dan evaluasi, serta pengelolaan keuangan, baik di level provinsi maupun kabupaten/kota dalam satu portal.
    </p>
    <div class="flex flex-wrap py-8 bg-white">
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8 bg-white rounded-lg shadow-lg">
                <div class="flex-auto px-4 py-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-red-400 rounded-full shadow-lg">
                        <i class="fas fa-award"></i>
                    </div>
                    <h6 class="text-xl font-semibold">Perencanaan dan Penganggaran Komprehensif</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                        Kolaborasi yang efektif dan penyusunan kebijakan yang selaras dengan kebutuhan daerah.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8 bg-white rounded-lg shadow-lg">
                <div class="flex-auto px-4 py-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-blue-400 rounded-full shadow-lg">
                        <i class="fas fa-retweet"></i>
                    </div>
                    <h6 class="text-xl font-semibold">Regularitas Pengelolaan Keuangan</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                        Transparansi dan akuntabilitas dalam pengelolaan keuangan, membangun kepercayaan publik terhadap pemerintah.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8 bg-white rounded-lg shadow-lg">
                <div class="flex-auto px-4 py-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-green-400 rounded-full shadow-lg">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                    <h6 class="text-xl font-semibold">Optimalisasi Monitoring Evaluasi dan Pengendalian</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                        Efisiensi pemantauan kinerja program dan kegiatan, memastikan penggunaan anggaran yang tepat sasaran.
                    </p>
                </div>
            </div>
        </div>
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