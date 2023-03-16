export default class Navigation {

    constructor() {
        this.nav();
    }

    nav() {
        const header = document.querySelector('header');
        const html = document.querySelector('html');
        const body = document.querySelector('body');

        if (window.innerWidth < 980) {
            // Toggle navigation with nav button
            const nav = document.querySelector('header nav');
            const btn = document.querySelector('header .nav-toggle');

            btn.addEventListener('click', function () {
                btn.classList.toggle('active');
                nav.classList.toggle('active');

                if (nav.classList.contains('active')) {
                    html.style.overflow = 'hidden';
                } else {
                    html.style.overflow = 'initial';
                }
            });

            // Toggle navigation with subnavigation
            const listItems = document.querySelectorAll('header nav ul li.has-children');

            listItems.forEach(function (el, i) {
                let subNav;
                var clicked = false;
                subNav = el.querySelector('ul');
                subNav.setAttribute('data-height', subNav.clientHeight);
                subNav.style.height = 0;

                el.querySelector('a').addEventListener('click', function (e) {
                    if (!clicked) {
                        e.preventDefault();
                        el.classList.toggle('active');

                        if (el.classList.contains('active')) {
                            subNav.style.height = subNav.getAttribute('data-height') + 'px';
                        } else {
                            subNav.style.height = 0;
                        }
                    }
                    clicked = !clicked;
                });
            });
        }
    }
}
