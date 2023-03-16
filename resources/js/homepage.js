import Swiper, {Autoplay, Navigation, Pagination} from 'swiper';

export default class Homepage {

    constructor() {
        this.headerSlider();
        this.smoothScroll();
        this.facilitySlider();
    }

    smoothScroll() {
        const buttons = document.querySelectorAll('.smooth-scroll');

        buttons.forEach(function (el, i) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                let item = document.querySelector(el.getAttribute('href'));
                let offset = item.offsetTop - document.querySelector('header').offsetHeight;

                if (document.querySelector('#property')) {
                    offset -= document.querySelector('#property nav').offsetHeight;
                }
                console.log(offset)
                window.scrollTo({
                    'behavior': 'smooth',
                    'left': 0,
                    'top': offset
                });
            });
        });
    }

    headerSlider() {
        const swiper = new Swiper('#homepage #hero .swiper', {
            modules: [Pagination, Autoplay],

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
        });
    }

    facilitySlider() {
        if (document.querySelector('#homepage #restoration')) {
            const swiper = new Swiper('#homepage #restoration .swiper', {
                modules: [Autoplay, Navigation],
                spaceBetween: 20,
                autoplay: {
                    delay: 6500,
                    disableOnInteraction: true,
                },

                navigation: {
                    nextEl: '#homepage #restoration .next',
                    prevEl: '#homepage #restoration .prev',
                },

                breakpoints: {
                    670: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },

                    980: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },

                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                }
            });
        }
    }
}
