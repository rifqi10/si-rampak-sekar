document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var tabLinks = document.querySelectorAll('.tab-link');
    var tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            tabLinks.forEach(function (link) {
                link.classList.remove('active', 'border-green-600', 'text-green-600', 'dark:text-green-500', 'dark:border-green-500');
            });

            tabContents.forEach(function (content) {
                content.classList.remove('active');
            });

            link.classList.add('active', 'border-green-600', 'text-green-600', 'dark:text-green-500', 'dark:border-green-500');
            document.getElementById(link.getAttribute('data-tab')).classList.add('active');
        });
    });
});

// read more
document.querySelectorAll('.read-more').forEach(button => {
    button.addEventListener('click', () => {
        alert('Read More clicked!');
    });
});

