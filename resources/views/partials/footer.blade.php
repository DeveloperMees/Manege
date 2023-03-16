<footer>
    <div class="container-fluid">
        <div class="top">
            <div class="row">
                <div class="col-12 col-lg-5 logo">
                    <a href="{{ route('/') }}" class="logo">
                        <img src="/img/logo.jpg" alt="Logo">
                        <span>Stal Nieuwland</span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-md-block contact">
                    <h4>CONTACT</h4>
                    <address>Waterweg 3<br>
                        3237 Kl Vierpolders
                    </address>
                    <a href="tel:31610271172" class="phone">31 - 610271172</a>
                    <a href="mailto:info@stalnieuwland.nl" class="mail">info@stalnieuwland.nl</a>
                </div>

                <div class="col-12 col-lg-2 links">
                    <h4>LINKS</h4>
                    <ul>
                        <li><a href="{{ route('signup') }}">Inschrijven</a></li>
                        <li><a href="{{ route('facilities') }}">Faciliteiten</a></li>
                        <li><a href="{{ route('news') }}">Nieuws</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-6 left">
                    <span>© 2022 – Stal Nieuwland</span>
                </div>
                <div class="col-12 col-lg-8 col-xl-6 right">
                    <ul>
                        <li>Website door <a href="https://www.spacewebs.nl/" target="_blank">Spacewebs</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</footer>
