<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Rampak Sekar</title>
    <link rel="stylesheet" href="{{ asset('css/home_page.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                        <img src="{{ asset('img/gambar_slider1.png') }}" alt="Slide 1"
                            class="h-auto max-w-full md:max-w-lg">
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
                        <img src="{{ asset('img/gambar_slider2.png') }}" alt="Slide 2"
                            class="h-auto max-w-full md:max-w-lg">
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
                        <img src="{{ asset('img/gambar_slider3.png') }}" alt="Slide 3"
                            class="h-auto max-w-full md:max-w-lg">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!--Card-->
    <p class="h-16 mt-2 overflow-hidden text-center text-gray-600 line-clamp-3">
        Menyatukan sistem perencanaan dan penganggaran, monitoring dan evaluasi, serta pengelolaan keuangan, baik di
        level provinsi maupun kabupaten/kota dalam satu portal.
    </p>
    <div class="flex flex-wrap py-8 bg-white">
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8 bg-white rounded-lg shadow-lg">
                <div class="flex-auto px-4 py-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white">
                        <img src="{{ asset('img/perencanaan.png') }}" alt="perencanaan"
                            class="h-auto max-w-full md:max-w-lg">
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
                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white">
                        <img src="{{ asset('img/regularitas.png') }}" alt="regularitas"
                            class="h-auto max-w-full md:max-w-lg">
                        <i class="fas fa-retweet"></i>
                    </div>
                    <h6 class="text-xl font-semibold">Regularitas Pengelolaan Keuangan</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                        Transparansi dan akuntabilitas dalam pengelolaan keuangan, membangun kepercayaan publik terhadap
                        pemerintah.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8 bg-white rounded-lg shadow-lg">
                <div class="flex-auto px-4 py-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white">
                        <img src="{{ asset('img/optimalisasi.png') }}" alt="optimalisasi"
                            class="h-auto max-w-full md:max-w-lg">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                    <h6 class="text-xl font-semibold">Optimalisasi Monitoring Evaluasi dan Pengendalian</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                        Efisiensi pemantauan kinerja program dan kegiatan, memastikan penggunaan anggaran yang tepat
                        sasaran.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Sections -->
    <div class="container px-4 py-8 mx-auto">
        <!-- Perencanaan dan Penganggaran Section -->
        <div class="flex flex-col items-center mb-8 md:flex-row">
            <div class="md:w-1/2">
                <img src="{{ asset('img/pnp.png') }}" alt="Perencanaan dan Penganggaran" class="w-full h-auto mb-4">
            </div>
            <div class="md:w-1/2 md:pl-8">
                <h2 class="mb-2 text-2xl font-bold">Perencanaan dan Penganggaran</h2>
                <div
                    class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px">
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 font-bold text-green-600 border-b-2 border-green-600 rounded-t-lg tab-link active dark:text-green-500 dark:border-green-500"
                                data-tab="sipd" aria-current="page">SIPD</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg tab-link hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                data-tab="sipd-ri">SIPD RI</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg tab-link hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                data-tab="penapisan">Penapisan</a>
                        </li>
                    </ul>
                </div>
                <div id="sipd" class="tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/SIPD.png') }}" alt="SIPD"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                Portal pengelolaan keuangan yang dirilis oleh Kementerian Dalam Negeri dan Pemerintah
                                Provinsi Jawa Barat untuk menghimpun proses perencanaan dan penganggaran sampai ke
                                pelaporan keuangan.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Akses Aplikasi
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="sipd-ri" class="hidden tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/SIPD RI.png') }}" alt="SIPD RI"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                Aplikasi nasional yang dikembangkan untuk membantu pemerintah daerah di Indonesia dalam
                                mengelola keuangan daerah, seperti pengelolaan anggaran, pencatatan penerimaan dan
                                pengeluaran keuangan, serta pelaporan keuangan.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Akses Aplikasi
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="penapisan" class="hidden tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/SIPD RI.png') }}" alt="SIPD RI"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                Portal pendukung keputusan yang memberikan pertimbangan kepada pembuat kebijakan
                                perencanaan dan anggaran untuk menentukan prioritas program, bantuan keuangan, dan pagu
                                belanja, berdasarkan data dan informasi yang tersedia.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Buka Portal
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengelolaan Keuangan Section -->
    <div class="container px-4 py-8 mx-auto">
        <div class="flex flex-col items-center mb-8 md:flex-row">
            <div class="order-last md:w-1/2 md:order-first md:pr-8">
                <h2 class="mb-2 text-2xl font-bold">Pengelolaan Keuangan</h2>
                <div
                    class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px">
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 font-bold text-green-600 border-b-2 border-green-600 rounded-t-lg tab-link active dark:text-green-500 dark:border-green-500"
                                data-tab="keuangan-sipd" aria-current="page">SIPD</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg tab-link hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                data-tab="keuangan-laporan">SIPD RI</a>
                        </li>
                    </ul>
                </div>
                <div id="keuangan-sipd" class="tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/SIPD.png') }}" alt="SIPD"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                SIPD (Sistem Informasi Pemerintahan Daerah) adalah aplikasi yang diinisiasi oleh
                                Kementerian Dalam Negeri dan Pemerintah Provinsi Jawa Barat untuk menghimpun proses
                                pengelolan keuangan perangkat daerah dimulai dari perencanaan dan penganggaran sampai ke
                                pelaporan keuangan.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Masuk platform
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="keuangan-laporan" class="hidden tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/SIPD.png') }}" alt="Laporan Keuangan"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                Aplikasi nasional yang dikembangkan untuk membantu pemerintah daerah di Indonesia dalam
                                mengelola keuangan daerah, seperti pengelolaan anggaran, pencatatan penerimaan dan
                                pengeluaran keuangan, serta pelaporan keuangan.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Akses Aplikasi
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('img/monitoring.png') }}" alt="Pengelolaan Keuangan" class="w-full h-auto mb-4">
            </div>
        </div>
    </div>

    <!-- Monitoring Evaluasi dan Pengendalian Section -->
    <div class="container px-4 py-8 mx-auto">
        <div class="flex flex-col items-center mb-8 md:flex-row">
            <div class="md:w-1/2">
                <img src="{{ asset('img/pengelolaan.png') }}" alt="Monitoring Evaluasi dan Pengendalian"
                    class="w-full h-auto mb-4">
            </div>
            <div class="md:w-1/2 md:pl-8">
                <h2 class="mb-2 text-2xl font-bold">Monitoring Evaluasi dan Pengendalian</h2>
                <div
                    class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px">
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 font-bold text-green-600 border-b-2 border-green-600 rounded-t-lg tab-link active dark:text-green-500 dark:border-green-500"
                                data-tab="monev-emonev" aria-current="page">E-Monev</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg tab-link hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                data-tab="monev-laporan">Bantuan Keuangan</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg tab-link hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                data-tab="monev-analisis">Hibah Bansos</a>
                        </li>
                    </ul>
                </div>
                <div id="monev-emonev" class="tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/e-monev.png') }}" alt="e-Monev"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                e-Monev adalah instrumen elektronik untuk mengendalikan dan mengevaluasi rencana
                                pembangunan Provinsi Jawa Barat secara real-time. Diterapkan di seluruh perangkat daerah
                                pemerintahan, e-Monev memfasilitasi monitoring yang efisien, pelaporan kinerja, dan
                                pengambilan keputusan strategis berdasarkan data yang terkumpul.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Mulai akses
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="monev-laporan" class="hidden tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/bantuan keuangan.png') }}" alt="Laporan Evaluasi"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                Solusi digital yang mempermudah proses permohonan, monitoring, dan pelaporan bantuan
                                keuangan dari Provinsi Jawa Barat ke Kabupatan/Kota se-Jawa Barat. Lewat aplikasi ini,
                                ajukan permohonan secara online, pantau status pencairan real-time, dan buat laporan
                                penggunaan dengan mudah dan akuntabel.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Akses Sekarang
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="monev-analisis" class="hidden tab-content">
                    <div class="flex flex-row items-center">
                        <div class="w-1/2">
                            <img src="{{ asset('img/sipd.png') }}" alt="Analisis Data"
                                class="h-auto max-w-full md:max-w-lg mb-4">
                        </div>
                        <div class="ml-8">
                            <p class="mb-4">
                                Platform yang membantu proses permohonan pencairan, monitoring, dan pelaporan bantuan
                                Hibah Bansos dari provinsi kepada desa di Jawa Barat. Aplikasi ini memudahkan pihak
                                terkait untuk mengelola dan memantau penggunaan dana bantuan secara transparan dan
                                efisien, tepat sasaran dan berdampak positif yang signifikan.
                            </p>
                            <a href="#"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Jelajah Aplikasi
                                <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Akses Layanan -->
<div class="container px-4 py-8 mx-auto">
    <h2 class="mb-8 text-3xl font-bold text-center">Akses Layanan</h2>
    <p class="text-center mb-12">Dapatkan kemudahan akses ke beberapa layanan SI RAMPAK SEKAR!</p>
    <div class="flex flex-wrap justify-center">
    </div>  
    <div class="flex flex-wrap py-8 bg-white">
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8">
                <div class="flex-auto px-4 py-5">
                    <img src="{{ asset('img/transparansi.png') }}" class="object-cover w-full h-full konten1">
                    <div class="absolute p-4 card top-1/2 left-1/2">
                        <p class="mt-2 mb-4 text-gray-600">
                            Transformasi Digital dalam Penyaluran Bantuan Keuangan, Memudahkan sampai Pelaporan dari Provinsi Jawa Barat ke Seluruh Kabupaten/Kota di Wilayahnya.
                        </p>
                        <span class="cursor-pointer text-custom-green read-more hover:text-green-700">
                            Read More
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8">
                <div class="flex-auto px-4 py-5">
                    <img src="{{ asset('img/maksimalkan.png') }}" class="object-cover w-full h-full konten1">
                    <div class="absolute p-4 card top-1/2 left-1/2">
                        <p class="mt-2 mb-4 text-gray-600">
                            Solusi Terintegrasi untuk Proses Permohonan Pencairan, Pemantauan, dan Pelaporan Bantuan Hibah Bansos Provinsi Jawa Barat
                        </p>
                        <span class="cursor-pointer text-custom-green read-more hover:text-green-700">
                            Read More
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
            <div class="relative flex flex-col w-full h-full mb-8">
                <div class="flex-auto px-4 py-5">
                    <img src="{{ asset('img/optimalkan.png') }}" class="object-cover w-full h-full konten1">
                    <div class="absolute p-4 card top-1/2 left-1/2">
                        <p class="mt-2 mb-4 text-gray-600">
                            Terobosan Revolusioner Efisiensi Monitoring, Evaluasi, dan Pengendalian untuk Pembangunan Jawa Barat
                        </p>
                        <span class="cursor-pointer text-custom-green read-more hover:text-green-700">
                            Read More
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-12">
        <h2 class="mb-4 text-2xl font-bold">Kolaborator</h2>
        <p class="mb-8">Gandeng Satuan Kerja Perangkat Daerah Jawa Barat, ciptakan layanan terpadu dan tepat guna
        </p>
        <div class="flex justify-center space-x-8">
            <img src="{{ asset('img/logo1.png') }}" alt="Logo Bappeda" class="logo">
            <img src="{{ asset('img/logo2.png') }}" alt="Logo BPKAD" class="logo">
            <img src="{{ asset('img/logo3.png') }}" alt="Logo Diskominfo" class="logo">
            <img src="{{ asset('img/logo4.png') }}" alt="Logo ba" class="logo">
            <img src="{{ asset('img/logo5.png') }}" alt="Logo Kesra Jabar" class="logo">
        </div>
    </div>
</div>


    <!-- Footer Section -->
    <footer class="py-12 text-white bg-green-800">
        <div class="container mx-auto text-center">
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/logo_footer.png') }}" alt="Logo_footer" class="h-12">
                <span class="text-lg font-semibold ml-4">SI RAMPAK SEKAR</span>
            </div>
            <div class="flex flex-col items-center mt-4">
                <p class="text-sm text-center">Jabar Command Center (Gedung Setda B Lt. II) Jalan Diponegoro Nomor 22
                    Bandung Jawa Barat 40115</p>
                <div class="flex mt-4 space-x-4">
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
            <p class="mt-8 text-sm">Copyright © Pemerintah Provinsi Jawa Barat. All rights reserved</p>
        </div>
    </footer>




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
    <script>
        // Tab functionality
        document.querySelectorAll('.tab-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const tab = this.dataset.tab;

                document.querySelectorAll('.tab-link').forEach(l => l.classList.remove('active', 'text-green-600', 'border-green-600', 'dark:text-green-500', 'dark:border-green-500'));
                this.classList.add('active', 'text-green-600', 'border-green-600', 'dark:text-green-500', 'dark:border-green-500');

                document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));
                document.getElementById(tab).classList.remove('hidden');
            });
        });
    </script>
</body>

</html>