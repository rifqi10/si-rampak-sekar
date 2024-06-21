<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('css/home_page.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="text-black bg-black">

    <!-- Header Section -->

    <!-- Main Content Section -->
    <div class="swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('img/gambar_slider1.png') }}" alt="Slide 1" />
                <div class="slider-container"></div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/gambar_slider2.png') }}" alt="Slide 2" />
                <div class="slider-container"></div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('img/gambar_slider1.png') }}" alt="Slide 3" />
                <div class="slider-container"></div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Footer Section -->

    <!-- Including JavaScript file -->
    <script src="{{ asset('js/home_page.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
