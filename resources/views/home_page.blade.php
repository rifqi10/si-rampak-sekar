<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="./css/homepage_page.css">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="text-black bg-gray-100">

    <!-- Header Section -->

    <!-- Main Content Section -->
    <main class="container p-4 mx-auto mt-8 bg-white shadow-lg">
        <div class="mt-12 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src= "./img/gambar_slider1.png" alt="Slide 1" />
                    <div class="carousel-caption">
                        <h3>Slide 1</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./img/gambar_slider2.png" alt="Slide 2" />
                    <div class="carousel-caption">
                        <h3>Slide 2</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./img/gambar_slider3.png" alt="Slide 3" />
                    <div class="carousel-caption">
                        <h3>Slide 3</h3>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    <!-- Footer Section -->

    <!-- Including JavaScript file -->
    <script src="./js/homepage_page.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
