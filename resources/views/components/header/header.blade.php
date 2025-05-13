<nav class="navbar navbar-expand-lg">
    <div class="container-fluid navbar-container justify-content-between">
        <a href="{{ url('/') }}"><img src="{{ asset('assets/Images/pflegepur_logo.svg') }}"
                alt="PflegePur Logo" /></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Startseite</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">Informationen</a>
                    <ul class="dropdown-menu" style="background-color: #000000;">
                        <li
                            style="margin-top: 0.35rem; margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('ratgeber') }}">Pflegeleistungen</a>
                        </li>
                        <li
                            style="margin-top: 0.35rem; margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;" href="{{ route('achrichten') }}">News</a>
                        </li>
                        <li
                            style="margin-top: 0.35rem; margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;" href="{{ route('blogs.index') }}">Blog</a>
                        </li>
                        <li
                            style="margin-top: 0.35rem; margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="https://open.spotify.com/show/6JACh2eflNeIcxU8U2ltyL" target="_blank">Podcast</a>
                        </li>
                        <li style="margin-top: 0.5rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('innovationen.index') }}">Innovationen</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">Services</a>
                    <ul class="dropdown-menu" style="background-color: #000000;">
                        <li
                            style="margin-top: 0.35rem; margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('checklisten') }}">Checklisten</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('online.rechner.index') }}">Online-Rechner</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('musteranschreiben') }}">Musteranschreiben</a></li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('pflegetelefon') }}">Pflegetelefon</a></li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('academy') }}">Online-Pflegekurse</a>
                        </li>
                        <li style="margin-bottom: 0.5rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('24h-betreuung') }}">24h-Betreuung</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">Shop</a>
                    <ul class="dropdown-menu" style="background-color: #000000;">
                        <li
                            style="margin-top: 0.35rem; margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('marketplace.index') }}">Marktplatz</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="https://www.sanicare.de/rezept-einloesen?sPartner=adcell&utm_source=adcell&bid=337905-111699-&adcref=pflegepur.de%2F"
                                target="_blank">Apotheke</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="https://t.adcell.com/p/click?promoId=278495&slotId=111699"
                                target="_blank">Pflegehilfsmittel</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="https://pflegehase.de/hausnotruf-bestellung/?bid=307274-111699-&adcref=pflegepur.de%2F"
                                target="_blank">Hausnotruf</a>
                        </li>
                        <li style="margin-bottom: 0.5rem;"><a style="border: none; text-decoration: none;"
                                href="{{ route('essen-auf-raedern') }}">Landhausküche</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('academy') }}">Academy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}#contact">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('aboutus') }}">Über uns</a>
                </li>

                <!--
                
                
                
                
                
                
                <li class="nav-item dropdown">
                    <a href="{{ route('services') }}" class="nav-link">Services</a>
                    <ul class="dropdown-menu" style="background-color: #000000;">
                        <li
                            style="margin-top: 0.35rem; margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('checklisten') }}">Checklisten</a>
                        </li>
                        <li
                            style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('online.rechner.index') }}">Online-Rechner</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;"><a style="border: none; text-decoration: none;"
                                href="{{ route('musteranschreiben') }}">Musteranschreiben</a></li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;"><a style="border: none; text-decoration: none;"
                                href="{{ route('pflegetelefon') }}">Pflegetelefon</a></li>
                        <li
                            style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="https://www.sanicare.de/rezept-einloesen?sPartner=adcell&utm_source=adcell&bid=337905-111699-&adcref=pflegepur.de%2F" target="_blank" >Versand-Apotheke</a>
                        </li>
                        </li>
                        <li
                            style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;"
                                href="{{ route('academy') }}">Online-Pflegekurse</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;" href="https://t.adcell.com/p/click?promoId=278495&slotId=111699" target="_blank" >Pflegehilfsmittel</a>
                        </li>
                        <li style="margin-bottom: 0.7rem; border-bottom: 1px solid #ffffffbd; padding-bottom: 0.8rem;">
                            <a style="border: none; text-decoration: none;" href="https://pflegehase.de/hausnotruf-bestellung/?bid=307274-111699-&adcref=pflegepur.de%2F" target="_blank" >Hausnotruf</a>
                        </li>
                        <li style="margin-bottom: 0.5rem;"><a style="border: none; text-decoration: none;"
                                href="{{ route('essen-auf-raedern') }}">Essen auf Rädern</a></li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('blogs.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('achrichten') }}">News und Ratgeber</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('marketplace.index') }}">Marktplatz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('academy') }}" >Academy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('innovationen.index') }}">Innovation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('buecher') }}">Bücher</a>
                </li>
-->
                {{-- <li class="nav-item nav-btn">
                    <button class="nav-link" aria-current="page" style="position: relative;">
                        <a href="{{ route('partner') }}"
                            style="position: absolute; top: 0;left: 0;height: 100%;border-radius: 10px;width: 100%;"></a>
                        Partner werden!
                    </button>
                </li> --}}<li class="nav-item nav-btn">
                    <button class="nav-link" aria-current="page" style="position: relative;">
                        <a href="{{ route('mein-pflegePur') }}"
                            style="position: absolute; top: 0;left: 0;height: 100%;border-radius: 10px;width: 100%;"></a>
                        Mein PflegePur
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
