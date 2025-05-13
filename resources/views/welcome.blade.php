<!DOCTYPE html>
<html lang="en">

@include('components.header.head')
<style>
    .blog-card-img {
        width: 100%;
        /* Ensure image fills the width of the container */
        /* Use flexbox to center the image */
        justify-content: center;
        /* Center the image horizontally */
        align-items: center;
        /* Center the image vertically */
        /* You can adjust the height of the image container */
    }

    .blog-card-img img {
        max-width: 100%;
        /* Ensure the image doesn't overflow */
        height: auto;
        /* Maintain aspect ratio */
    }
</style>

<body>
    <div class="header-container">
        @include('components.header.header')
        <div class="header-sub-container">
            <img class="header-img" src="{{ asset('assets/Images/header_img.svg') }}" alt="Header Image" />
            <div class="header-heading">PflegePur</div>
            <div class="header-sub-heading">
                Ihr Partner für umfassende Pflege und Gesundheit
            </div>
            <div class="header-light-heading">
                Tauchen Sie ein in eine Welt voller wertvoller Informationen,
                praktischer Hilfen und inspirierender Inhalte rund um Pflege und
                Gesundheit.
            </div>
            <button style="position: relative;"> <a
                    style=" width: 100%; position: absolute;top: 0;left: 0;
        border-radius: 10px;height: 100%;"
                    href="{{ route('aboutus') }}"></a>Mehr erfahren</button>
        </div>
    </div>

    <!-- ###################### SECTION 1 #######################  -->

    <div class="container-fluid section1-container">
        <div class="row" style="height: 100%">
            <div class="section1-right col-lg-5 d-block d-lg-none mb-4">
                <img src="{{ asset('assets/Images/Section1_img.svg') }}" alt="" />
            </div>


            <!-- Display success message -->
            @if (session('success'))
                <div>
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                </div>
            @endif


            <div class="section1-left col-lg-7">

                <span class="section1-top1">Willkommen bei PflegePur!</span>
                <div class="section1-top2">Willkommen bei PflegePur!</div>
                <div class="section1-top3">
                    Ihr Partner für umfassende Pflege und Gesundheit
                </div>
                <div class="section1-top4">
                    Wir bieten Ihnen eine Fülle an wertvollen <strong>Informationen</strong>, vielfältigen
                    <strong>Services</strong> und einen <strong>Shop</strong>, um Sie bestmöglich zu
                    unterstützen.<br /><br />
                    <strong>Informationen:</strong> Bleiben Sie stets informiert mit unseren aktuellen <a
                        href="{{ route('achrichten') }}" style="color:#b22222;text-decoration:none;">News</a>,
                    tiefgehenden <a href="{{ route('blogs.index') }}"
                        style="color:#b22222;text-decoration:none;">Blogbeiträgen</a> und spannenden <a
                        href="https://open.spotify.com/show/6JACh2eflNeIcxU8U2ltyL" target="_blank"
                        style="color:#b22222;text-decoration:none;">Podcasts</a>. Entdecken Sie zudem innovative
                    Entwicklungen im Pflegebereich, die Ihnen und Ihren Angehörigen zugutekommen.<br /><br />
                    <strong>Services:</strong> Unser Servicebereich hält praktische Hilfsmittel für Sie bereit, darunter
                    übersichtliche <a href="{{ route('checklisten') }}"
                        style="color:#b22222;text-decoration:none;">Checklisten</a>, benutzerfreundliche <a
                        href="{{ route('online.rechner.index') }}"
                        style="color:#b22222;text-decoration:none;">Online-Rechner</a> und vorformulierte <a
                        href="{{ route('musteranschreiben') }}"
                        style="color:#b22222;text-decoration:none;">Musteranschreiben</a>. Zudem bieten wir
                    maßgeschneiderte <a href="{{ route('academy') }}"
                        style="color:#b22222;text-decoration:none;">Online-Pflegekurse</a> zur Unterstützung im
                    Pflegealltag.<br /><br />
                    <strong>Shop:</strong> In unserem <a href="{{ route('marketplace.index') }}"
                        style="color:#b22222;text-decoration:none;">Shop</a> finden Sie eine sorgfältig ausgewählte
                    Palette an Produkten und Dienstleistungen rund um Pflege und Gesundheit. Von einer zuverlässigen <a
                        href="https://www.sanicare.de/rezept-einloesen?sPartner=adcell&utm_source=adcell&bid=337905-111699-&adcref=pflegepur.de%2F"
                        target="_blank" style="color:#b22222;text-decoration:none;">Versandapotheke</a> über hochwertige
                    <a href="https://t.adcell.com/p/click?promoId=278495&slotId=111699" target="_blank"
                        style="color:#b22222;text-decoration:none;">Pflegehilfsmittel</a> bis hin zu <a
                        href="https://pflegehase.de/hausnotruf-bestellung/?bid=307274-111699-&adcref=pflegepur.de%2F"
                        target="_blank" style="color:#b22222;text-decoration:none;">Hausnotrufsystemen</a> – alles, um
                    Ihren Alltag zu erleichtern.<br /><br />
                    Bei PflegePur stehen Sie im Mittelpunkt. Wir begleiten Sie auf Ihrem Weg - kompetent, zuverlässig
                    und persönlich.
                    <!--
                
                
                
                
                
                
                    Ob Sie nach aktuellen Blogbeiträgen, fundierten Büchern, hilfreichen
                    Online-Rechnern oder praktischen Checklisten suchen – bei PflegePur
                    finden Sie alles, was Sie brauchen. <br /><br />
                    Entdecken Sie unsere Academy, hören Sie in unseren Podcast rein, und
                    bleiben Sie immer auf dem Laufenden mit unserem kostenlosen
                    Newsletter und der PflegePur-App. <br /><br />
                    Wir begleiten Sie auf Ihrem Weg – kompetent, zuverlässig und
                    persönlich.-->
                </div>
                <div>
                    <button style="position: relative;"><a
                            style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                            href="{{ route('newsletter') }}" target="_blank"></a>Abonnieren Sie unseren
                        Newsletter</button>
                </div>
            </div>
            <div class="section1-right col-lg-5 d-none d-lg-block">
                <img src="{{ asset('assets/Images/Section1_img.svg') }}" alt="" />
            </div>
        </div>
    </div>

    @guest
        <div class="index2-login-container ">
            <div class="index2-login-um section1-container"> Um Zugang zu Ihrem persönlichen Bereich „Mein PflegePur“ zu
                erhalten, loggen Sie sich bitte ein oder erstellen Sie kostenlos ein neues Benutzerkonto.</div>

            <div class="index2-login-cont ">
                <div class="index2-login-heading">Login </div>

                <div class="index2-input-container">
                    <div class="index2-eamil-input"><input type="email" placeholder="Ihre E-Mail"></div>
                    <div class="index2-password-container">
                        <input type="password" id="index2PasswordInput" placeholder="Ihr Passwort">
                        <span id="index2TogglePassword" class="index2-eye-icon">
                            <i class="fa fa-eye-slash"></i>
                        </span>
                    </div>

                </div>

                <div class="index2-login-middle-cont " style="margin-top: 0.7rem;">
                    <div class="index2-login-middle-left">
                        <div class="index2-radio-group">
                            <label class="index2-custom-radio">
                                <input type="radio" name="option" value="3">
                                <span class="index2-radio-mark"></span>Angemeldet bleiben
                            </label>
                        </div>
                    </div>
                    <div class="index2-login-middle-right">Passwort vergessen?</div>
                </div>

                <div class="index2-login-btn"><button>Login</button></div>

                <div class="index2-login-oder">
                    <div class="index2-login-oder-heading">Oder Login mit</div>
                </div>
                <div class="index2-social-btn-cont">
                    <div class="index2-google-btn"><button><img src="{{ asset('assets/Images/google.svg') }}"
                                alt="">Google</button></div>
                    <div class="index2-apple-btn"><button><img src="{{ asset('assets/Images/apple.svg') }}"
                                alt="">Apple</button></div>
                </div>

                <div class="index2-input-sie">Sie haben noch kein Benutzerkonto?</div>
                <div class="index2-input-registration">Registrieren Sie sich kostenlos hier!</div>

            </div>

            <div class="index2-input-neu">Neu bei PflegePur?</div>
            <div class="index2-input-erstellen section1-container mt-2">Erstellen Sie jetzt ein kostenloses Konto, um alle
                Vorteile von Mein PflegePur zu nutzen, einschließlich persönlicher Pflegeprofile, Simulationen, Checklisten
                und mehr.
            </div>
            @auth
                <div class="index2-input-mein-btn text-center mt-3"><button>Mein PflegePur</button></div>
            @endauth

            @guest
                <div class="index2-input-mein-btn text-center mt-3"><button> <a href="{{ route('mein-pflegePur') }}" style="text-decoration: none;color:white"> Zur
                            Registrierung</button></a></div>
            @endguest
        </div>
    @endguest

    <!-- ####################### SECTION INFORMATIONEN ###################### -->

    <div class="partner-section2-container" style="background-color: #b222221a; padding: 1rem 0;margin-top:50px;">
        <div class="blog-container">
            <div class="blog-heading"
                style="font-size: 30px; line-height: 35.55px; margin-bottom: 0.7rem;text-align:center;">
                Informationen
            </div>
            <div class="blog-sub-heading">
                Im Bereich Informationen von PflegePur bieten wir Ihnen eine umfassende Sammlung an Ressourcen, die Sie
                dabei unterstützen, sich im komplexen Feld der Pflege zurechtzufinden.<br />
                Unsere Inhalte sind darauf ausgerichtet, sowohl pflegebedürftigen Personen als auch pflegenden
                Angehörigen fundiertes Wissen und aktuelle Entwicklungen zur Verfügung zu stellen.
            </div>
            <div class="partner-cards-container">
                <div class="partner-card">
                    <img src="./assets/icons/icon-pflegeleistungen.svg" alt="" />
                    <div class="partner-card-heading">Pflegeleistungen</div>
                    <div class="partner-card-data">
                        Erhalten Sie detaillierte Informationen über die verschiedenen Pflegeleistungen und erfahren
                        Sie, wie Sie diese in Anspruch nehmen können.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('ratgeber') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-news.svg" alt="" />
                    <div class="partner-card-heading">News</div>
                    <div class="partner-card-data">
                        Informieren Sie sich über aktuelle Nachrichten und Entwicklungen im Pflegebereich.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('achrichten') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-blog.svg" alt="" />
                    <div class="partner-card-heading">Blog</div>
                    <div class="partner-card-data">
                        Lesen Sie aktuelle Beiträge zu Pflegethemen, erhalten Sie wertvolle Tipps und profitieren Sie
                        von Erfahrungsberichten.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('blogs.index') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-podcast.svg" alt="" />
                    <div class="partner-card-heading">Podcast</div>
                    <div class="partner-card-data">
                        Hören Sie unseren PflegePur-Podcast mit spannenden Themen rund um die Pflege.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="https://open.spotify.com/show/6JACh2eflNeIcxU8U2ltyL" target="_blank"></a>Mehr
                            erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-innovationen.svg" alt="" />
                    <div class="partner-card-heading">Innovationen</div>
                    <div class="partner-card-data">
                        Bleiben Sie auf dem Laufenden über die neuesten Entwicklungen und Technologien im Pflegebereich.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('innovationen.index') }}"></a>Mehr erfahren</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ####################### SECTION SERVICES ###################### -->

    <div class="partner-section2-container" style="background-color: #ffffff; padding: 1rem 0;">
        <div class="blog-container">
            <div class="blog-heading"
                style="font-size: 30px; line-height: 35.55px; margin-bottom: 0.7rem;text-align:center;">
                Services
            </div>
            <div class="blog-sub-heading">
                Im Bereich Services von PflegePur stellen wir Ihnen eine Vielzahl an praktischen Hilfsmitteln und
                Unterstützungsangeboten zur Verfügung, die Ihren Pflegealltag erleichtern sollen.
            </div>
            <div class="partner-cards-container">
                <div class="partner-card" style="background-color:#b222221a;">
                    <img src="./assets/icons/icon-checklisten.svg" alt="" />
                    <div class="partner-card-heading">Checklisten</div>
                    <div class="partner-card-data">
                        Unsere übersichtlichen Checklisten helfen Ihnen dabei, wichtige Aufgaben und Termine im Blick zu
                        behalten und nichts zu vergessen.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('checklisten') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card" style="background-color:#b222221a;">
                    <img src="./assets/icons/icon-online-rechner.svg" alt="" />
                    <div class="partner-card-heading">Online-Rechner</div>
                    <div class="partner-card-data">
                        Mit unseren benutzerfreundlichen Online-Rechnern können Sie schnell und einfach Pflegegrade,
                        Kosten und Ansprüche ermitteln, um eine bessere Planung und Übersicht zu gewährleisten.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('online.rechner.index') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card" style="background-color:#b222221a;">
                    <img src="./assets/icons/icon-musteranschreiben.svg" alt="" />
                    <div class="partner-card-heading">Musteranschreiben</div>
                    <div class="partner-card-data">
                        Profitieren Sie von unseren vorformulierten Anschreiben für verschiedene Anliegen, wie z. B.
                        Anträge bei Behörden oder Kommunikation mit Pflegeeinrichtungen, die Ihnen den Schriftverkehr
                        erleichtern.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('musteranschreiben') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card" style="background-color:#b222221a;">
                    <img src="./assets/icons/icon-pflegetelefon.svg" alt="" />
                    <div class="partner-card-heading">Pflegetelefon</div>
                    <div class="partner-card-data">
                        Das kompetente Beratungsteam vom Bundesministeriums für Familie, Senioren, Frauen und Jugend
                        steht Ihnen telefonisch zur Verfügung, um Ihre Fragen zu beantworten und Sie in Ihrer
                        individuellen Pflegesituation zu unterstützen.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('pflegetelefon') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card" style="background-color:#b222221a;">
                    <img src="./assets/icons/icon-pflegekurse.svg" alt="" />
                    <div class="partner-card-heading">Online-Pflegekurse</div>
                    <div class="partner-card-data">
                        Unsere speziell konzipierten Kurse bieten Ihnen wertvolles Wissen und praktische Fähigkeiten, um
                        die Pflege Ihrer Angehörigen bestmöglich zu gestalten und sich selbst zu entlasten.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('academy') }}"></a>Mehr erfahren</button>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- ####################### SECTION SHOP ###################### -->

    <div class="partner-section2-container" style="background-color: #b222221a; padding: 1rem 0;margin-top:50px;">
        <div class="blog-container">
            <div class="blog-heading"
                style="font-size: 30px; line-height: 35.55px; margin-bottom: 0.7rem;text-align:center;">
                Shop
            </div>
            <div class="blog-sub-heading">
                Im Shop von PflegePur bieten wir Ihnen eine sorgfältig ausgewählte Vielfalt an Produkten und
                Dienstleistungen rund um die Themen Pflege, Gesundheit und Wohlbefinden.<br />
                Unser Ziel ist es, Ihnen hochwertige Lösungen anzubieten, die Ihren Alltag erleichtern und die
                bestmögliche Versorgung Ihrer Liebsten unterstützen.
            </div>
            <div class="partner-cards-container">
                <div class="partner-card">
                    <img src="./assets/icons/icon-marktplatz.svg" alt="" />
                    <div class="partner-card-heading">Marktplatz</div>
                    <div class="partner-card-data">
                        Finden und inserieren Sie Angebote rund um die Pflege.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('marketplace.index') }}"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-apotheke.svg" alt="" />
                    <div class="partner-card-heading">Apotheke</div>
                    <div class="partner-card-data">
                        Bestellen Sie Medikamente und Gesundheitsprodukte bequem online und lassen Sie sich diese direkt
                        nach Hause liefern.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="https://www.sanicare.de/rezept-einloesen?sPartner=adcell&utm_source=adcell&bid=337905-111699-&adcref=pflegepur.de%2F"
                                target="_blank"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-pflegehilfsmittel.svg" alt="" />
                    <div class="partner-card-heading">Pflegehilfsmittel</div>
                    <div class="partner-card-data">
                        Entdecken Sie eine breite Palette an Hilfsmitteln, die den Pflegealltag erleichtern und die
                        Selbstständigkeit fördern.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="https://t.adcell.com/p/click?promoId=278495&slotId=111699"
                                target="_blank"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-hausnotruf.svg" alt="" />
                    <div class="partner-card-heading">Hausnotruf</div>
                    <div class="partner-card-data">
                        Informieren Sie sich über unsere zuverlässigen Hausnotrufsysteme, die im Notfall schnelle Hilfe
                        gewährleisten und Sicherheit im Alltag bieten.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="https://pflegehase.de/hausnotruf-bestellung/?bid=307274-111699-&adcref=pflegepur.de%2F"
                                target="_blank"></a>Mehr erfahren</button>
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./assets/icons/icon-essen-auf-rädern.svg" alt="" />
                    <div class="partner-card-heading">Landhausküche</div>
                    <div class="partner-card-data">
                        Lassen Sie sich täglich mit frisch zubereiteten Mahlzeiten beliefern.
                    </div>
                    <div>
                        <button style="position: relative;"><a
                                style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('essen-auf-raedern') }}"></a>Mehr erfahren</button>
                    </div>
                </div>

            </div>
        </div>
    </div>






    <!-- ####################### SERVICE SECTION ###################### -->
    <!--
    <div class="service-section-container">
        <div class="service-content">
            <div class="service-heading">Services</div>
            <div class="service-sub-heading">
                Bei PflegePur möchten wir Sie in allen Bereichen des Pflegealltags
                unterstützen. In unserem Servicebereich finden Sie eine Vielzahl
                hilfreicher Werkzeuge, die Ihnen den Umgang mit bürokratischen und
                organisatorischen Herausforderungen erleichtern. <br /><br />Nutzen
                Sie unsere <span style="font-weight: 700">Checklisten</span> , um den
                Überblick zu bewahren, greifen Sie auf unsere
                <span style="font-weight: 700">Online-Rechner zu</span>, um
                finanzielle Aspekte der Pflege einfach zu berechnen, und verwenden Sie
                unsere <span style="font-weight: 700">Musteranschreiben</span>, um
                wichtige Anträge und Dokumente schnell und korrekt zu erstellen.
                <br /><br />
                Alles, was Sie brauchen – kompakt und kostenlos an einem Ort!
            </div>
        </div>
        -->
    <!-- Desktop view: Flexbox layout for products -->
    <!--
        <div class="service-product-container d-none d-sm-flex">
            <div class="service-product">
                <a href="{{ route('checklisten') }}"><img src="{{ asset('assets/Images/Service_img1.svg') }}"
                        alt="Product 1" /></a>
            </div>
            <div class="service-product">
                <a href="{{ route('online.rechner.index') }}"><img src="{{ asset('assets/Images/Service_img2.svg') }}"
                        alt="Product 2" /></a>
            </div>
            <div class="service-product">
                <a href="{{ route('musteranschreiben') }}"><img src="{{ asset('assets/Images/Service_img3.svg') }}"
                        alt="Product 3" /></a>
            </div>
            <div class="section1-black-bg d-none d-sm-block"></div>
        </div>
        -->
    <!-- #################### FOR MOBILE ################### -->
    <!--
        <div class="service-product-slider d-block d-sm-none">
            <div class="slider-container">
                <div class="service-slide" style="margin-left: 2rem">
                    <a href="{{ route('checklisten') }}"><img src="{{ asset('assets/Images/Service_img1.svg') }}"
                            alt="Product 1" /></a>
                </div>
                <div class="service-slide">
                    <a href="{{ route('online.rechner.index') }}"><img
                            src="{{ asset('assets/Images/Service_img2.svg') }}" alt="Product 2" /></a>
                </div>
                <div class="service-slide" style="margin-right: 2rem">
                    <a href="{{ route('musteranschreiben') }}"><img
                            src="{{ asset('assets/Images/Service_img3.svg') }}" alt="Product 3" /></a>
                </div>
            </div>
            <div class="section1-black-bg d-block d-sm-none"></div>
        </div>

        <button style="position: relative;"><a
                style="position: absolute;font-weight:bold; display: block;width: 100%; height: 100%; top: 0; left: 0; border-radius: 10px;"
                href="{{ route('services') }}"></a><span style="font-weight: bold"> Zu unseren Services</span></button>
    </div>
-->

    <!-- ########################### SECTION 2 BUTTONS ########################### -->

    <div class="newsund-ratgeber-section1"
        style="margin-bottom: 4rem;background-color:#000000;padding-top:50px;padding-bottom:50px;">
        <div class="newsund-ratgeber-btn-top">
            <div class="newsund-btn1 newsund-btn">
                <button style="color: #ffffff"> <a style="color: #ffffff"
                        href="{{ route('achrichten') }}">News</a></button>
            </div>
            <div class="newsund-btn2 newsund-btn">
                <button>
                    <a style="color: #b22222" href="{{ route('ratgeber') }}">Ratgeber</a>
                </button>
            </div>
        </div>
        <div class="newsund-ratgeber-btn-bottom">
            <div style="display: flex; gap: 0.7rem">
                <div class="newsund-btn3 newsund-btn">
                    <button class="index-news-top-btn index-news-active-btn" id="index-new-top-btn1">
                        Ärztezeitung
                    </button>
                </div>
                <div class="newsund-btn4 newsund-btn">
                    <button class="index-news-top-btn" id="index-new-top-btn2">
                        Ärztenachrichtendienst
                    </button>
                </div>
            </div>
            <div class="newsund-btn5 newsund-btn text-center">
                <button class="index-news-top-btn" id="index-new-top-btn3">
                    Bundesministerium für Gesundheit (BMG)
                </button>
            </div>
        </div>
    </div>

    <!-- ########################### SECTION 2 CARDS ########################### -->

    <div class="newund-section2-row">
        <div class="col-12">
            <div class="row index-news-bottom" id="index-news-bottom1">
                @foreach ($news as $new)
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                {{ $new['title'] }}
                            </div>
                            <div class="newsund-section2-card-content">
                                {{ $new['description'] }}
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Quelle:
                                    www.aerztezeitung.de
                                </div>
                                <div>
                                    <button>
                                        <a href="{{ $new['link'] }}" target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row index-news-bottom" id="index-news-bottom2">
                @foreach ($secondNews as $new)
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                {{ $new['title'] }}
                            </div>
                            <div class="newsund-section2-card-content">
                                {{ $new['description'] }}
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    {{-- Datum: 29.10.2024 <br /> --}}
                                    Quelle:
                                    www.aend.de
                                </div>
                                <div>
                                    <button>
                                        <a href="{{ $new['link'] }}" target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="row index-news-bottom" id="index-news-bottom3">

                @foreach ($thirdNews as $new)
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                {{ $new['title'] }}
                            </div>
                            <div class="newsund-section2-card-content">
                                {{ $new['description'] }}
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    {{-- Datum: 29.10.2024 <br /> --}}
                                    Quelle:
                                    www.bundesgesundheitsministerium.de
                                </div>
                                <div>
                                    <button>
                                        <a href="{{ $new['link'] }}" target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button class="Weitere-btn">
            <a href="{{ route('achrichten') }}"></a><span style="font-weight: bold"> Weitere Nachrichten und
                Ratgeber</span>
        </button>
    </div>

    <!-- ################### BLOG SECTION ################### -->

    <div class="blog-container container">
        <div class="blog-heading">Blog</div>
        <div class="blog-sub-heading">
            Unser <strong>Blog</strong> bietet Ihnen wertvolle Einblicke, praxisnahe Informationen
            und inspirierende Geschichten aus dem Alltag der Pflege.
            <br />Gemeinsam möchten wir die Pflege menschlicher, einfacher und
            verständlicher gestalten. <br /><br /><strong>Begleiten Sie uns auf diesem Weg!</strong>
        </div>


        <div class="row">

            <div class="col-lg-4 col-12">
                <a style="text-decoration: none"
                    href="https://pflegepur.de/blog/pflegenotstand-in-deutschland-ursachen-auswirkungen-und-lsungsanstze">
                    <!-- Blog Card Container -->
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="storage/blog_images/R1b5cQiXhgpe1eSxGVLcY7hd3SNoiCT0D5F6PejT.webp"
                                alt="" class="img-fluid" />
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-kate">Datum: 01.03.2025
                            </div>
                            <div class="blog-card-heading">
                                Pflegenotstand in Deutschland: Ursachen, Auswirkungen und Lösungsansätze
                            </div>
                            <div class="blog-card-sub-heading">
                                Der Pflegenotstand in Deutschland ist eine der größten gesellschaftlichen
                                Herausforderungen unserer Zeit. Der demografische Wandel führt dazu, dass immer mehr
                                Menschen pflegebedürftig werden, während gleichzeitig ein gravierender Mangel an
                                Pflegekräften herrscht. Pflegeheime und ambulante Dienste kämpfen mit Personalmangel,
                                hohen Arbeitsbelastungen und unzureichender Finanzierung, was nicht nur die
                                Pflegekräfte, sondern auch die Pflegebedürftigen und ihre Angehörigen stark belastet.
                            </div>
                        </div>
                        <button class="blog-card-btn mb-3">Weiterlesen</button>
                    </div>
                </a>
            </div>


            <div class="col-lg-4 col-12">
                <a style="text-decoration: none"
                    href="https://pflegepur.de/blog/technische-hilfsmittel-in-der-pflege-moderne-untersttzung-fr-pflegebedrftige-und-angehrige">
                    <!-- Blog Card Container -->
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="storage/blog_images/bUA0clm2pr4AH328XE8m9FAHAdIFDEMw2j43C7D6.webp"
                                alt="" class="img-fluid" />
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-kate">Datum: 27.02.2025
                            </div>
                            <div class="blog-card-heading">
                                Technische Hilfsmittel in der Pflege: Moderne Unterstützung für Pflegebedürftige und
                                Angehörige
                            </div>
                            <div class="blog-card-sub-heading">
                                Die Pflege eines Angehörigen oder eines Pflegebedürftigen stellt oft eine große
                                Herausforderung dar. Körperliche Anstrengung, zeitliche Belastung und emotionale
                                Verantwortung können pflegende Angehörige und Fachkräfte an ihre Grenzen bringen. Hier
                                kommen technische Hilfsmittel ins Spiel: Sie erleichtern den Pflegealltag, erhöhen die
                                Sicherheit und verbessern die Lebensqualität sowohl für Pflegebedürftige als auch für
                                Pflegende.
                            </div>
                        </div>
                        <button class="blog-card-btn mb-3">Weiterlesen</button>
                    </div>
                </a>
            </div>


            <div class="col-lg-4 col-12">
                <a style="text-decoration: none"
                    href="https://pflegepur.de/blog/untersttzungsangebote-fr-pflegende-angehrige-entlastung-beratung-und-finanzielle-hilfe">
                    <!-- Blog Card Container -->
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="storage/blog_images/1UV22KcZ8fp5FeGjv6Em5ps7Dt9tB3FbvNcZXj8F.webp"
                                alt="" class="img-fluid" />
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-kate">Datum: 24.02.2025
                            </div>
                            <div class="blog-card-heading">
                                Unterstützungsangebote für pflegende Angehörige: Entlastung, Beratung und finanzielle
                                Hilfe
                            </div>
                            <div class="blog-card-sub-heading">
                                Pflegende Angehörige übernehmen eine enorme Verantwortung. Ob sie sich um ihre Eltern,
                                Partner oder andere Familienmitglieder kümmern – die Pflege eines geliebten Menschen ist
                                körperlich und emotional anspruchsvoll. Viele Angehörige geraten dabei an ihre Grenzen,
                                weil sie die Herausforderungen der Pflege oft alleine bewältigen müssen.
                            </div>
                        </div>
                        <button class="blog-card-btn mb-3">Weiterlesen</button>
                    </div>
                </a>
            </div>











        </div>

        <!--
        <div class="row">
            @foreach ($blogs as $blog)
<div class="col-lg-4 col-12">
                    <a style="text-decoration: none" href="{{ route('blogs.show', $blog->slug) }}">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="{{ Storage::url($blog->image) }}" alt="" class="img-fluid" />
                            </div>
                            <div class="blog-card-body">
                                    <div class="blog-kate">Kategorie:
                                        @php
                                            $categories = [
                                                trim($blog->category1_name),
                                                trim($blog->category2_name),
                                                trim($blog->category3_name),
                                                trim($blog->category4_name),
                                            ];
                                            // Remove any empty categories
                                            $categories = array_filter($categories);
                                        @endphp
                                    
                                        @foreach ($categories as $key => $category)
<span class="blog-kate">{{ $category }}@if ($key < count($categories) - 1)
,
@endif
</span>
@endforeach
                                    </div>
                                    
                                <div class="blog-card-heading">
                                    {{ $blog->title }}
                                </div>
                                <div class="blog-card-sub-heading">
                                    {{ Str::limit($blog->description, 150) }}
                                </div>
                            </div>
                            <button class="blog-card-btn mb-3">Weiterlesen</button>
                        </div>
                    </a>
                </div>
@endforeach
        </div>
-->
        <button style="position: relative;">
            <a style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;border-radius: 10px;"
                href="{{ route('blogs.index') }}"></a><span style="font-weight: bold"> Zu unserem
                Blog</span></button>
    </div>





    <!-- ###################### ACADEMY SECTION #######################  -->

    <div class="academy-container"
        style="
        background-color: #b222221a;
        padding-top: 2rem;
        padding-bottom: 4rem;
      ">
        <div class="container-fluid section1-container" style="width: 85%">
            <div class="row" style="height: 100%">
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 20px; width: 100%; object-fit: cover"
                        src="{{ asset('assets/Images/Academy_img.svg') }}" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Online-Kurse für Pflegebedürftige und pflegende Angehörige</span>
                    <div class="section1-top2 text-md-start text-center">Academy</div>
                    <div class="section1-top4">
                        Die PflegePur-Academy ist Ihr kompetenter Partner in der
                        Weiterbildung rund um das Thema Pflege. Unser Angebot richtet sich
                        an pflegebedürftige Personen, pflegende Angehörige und
                        professionelle Pflegekräfte. In unseren Online-Kursen vermitteln
                        wir praxisnahes Wissen, das Sie in Ihrem Alltag unterstützt, um
                        bestmögliche Pflege zu gewährleisten. Wir bieten Ihnen eine
                        Vielzahl an Themen, von der grundsätzlichen Pflege bis hin zu
                        spezialisierten Bereichen wie der Pflege von Menschen mit Demenz,
                        der Palliativpflege und der Pflege von Menschen mit speziellen
                        Krankheitsbildern.
                    </div>
                    <div>
                        <button style="position: relative;"><a style="position: relative;"><a
                                    style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                                    href="{{ route('academy') }}"></a>Zu unserer Academy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ################### PODCAST SECTION ################### -->
    <div class="blog-container container">
        <div class="blog-heading">Podcast</div>
        <div class="blog-sub-heading">
            Willkommen beim <strong>PflegePur Podcast</strong> – deinem Ohr für alle Themen rund um die Pflege!<br />
            Egal, ob du pflegender Angehöriger bist, in der Pflege arbeitest oder einfach mehr über dieses wichtige
            Thema erfahren möchtest, hier bist du genau richtig.<br /><br />
            Tauche ein in die Welt der Pflege und lass dich inspirieren. Höre uns zu, während du auf dem Weg zur Arbeit
            bist, zuhause entspannst oder dich über neue Themen informieren möchtest.<br /><br />
            Der <strong>PflegePur Podcast</strong> bringt Pflege direkt in deinen Alltag!
        </div>
        <div class="row">


            <div class="col-lg-4 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="storage/blog_images/R1b5cQiXhgpe1eSxGVLcY7hd3SNoiCT0D5F6PejT.webp" alt=""
                            class="img-fluid" style="width:516px;height:295px;" />
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-kate">Datum: 02.03.2025
                        </div>
                        <div class="blog-card-heading">
                            Pflegenotstand in Deutschland: Ursachen, Auswirkungen und Lösungsansätze
                        </div>
                        <div class="blog-card-sub-heading">
                            <div class="audio-player">
                                <audio controls>
                                    <source
                                        src="assets/podcast/17-2025-03-01-Pflegenotstand-in-Deutschland-Ursachen-Auswirkungen-und-Lösungsansätze.wav"
                                        type="audio/wav">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom:25px;">
                </div>
            </div>




            <div class="col-lg-4 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="storage/blog_images/Fzc4PvBcobDG6aZK6yNCCYdAEqD1hGCH6jkn3RD7.webp" alt=""
                            class="img-fluid" style="width:516px;height:295px;" />
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-kate">Datum: 14.02.2025
                        </div>
                        <div class="blog-card-heading">
                            Palliativpflege: Würdevoller Umgang mit dem Lebensende
                        </div>
                        <div class="blog-card-sub-heading">
                            <div class="audio-player">
                                <audio controls>
                                    <source
                                        src="assets/podcast/15-2025-02-14-Wertschätzung-in-der-Pflege-Anerkennung-und-Verbesserung.wav"
                                        type="audio/wav">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom:25px;">
                </div>
            </div>





            <div class="col-lg-4 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="storage/blog_images/ddUHNNEJxjMV1BNV35w1QyGq8MdFOriDWwIYLLnz.webp" alt=""
                            class="img-fluid" style="width:516px;height:295px;" />
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-kate">Datum: 12.02.2025
                        </div>
                        <div class="blog-card-heading">
                            Pflegegrad beantragen: Schritt-für-Schritt-Anleitung und Tipps
                        </div>
                        <div class="blog-card-sub-heading">
                            <div class="audio-player">
                                <audio controls>
                                    <source
                                        src="assets/podcast/14-2025-02-12-Pflegegrad beantragen-Der-komplette-Leitfaden.wav"
                                        type="audio/wav">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom:25px;">
                </div>
            </div>






























            <button class="Weitere-btn" style="text-align:center;">
                <a href="https://open.spotify.com/show/6JACh2eflNeIcxU8U2ltyL" target="_blank"></a><span
                    style="font-weight: bold;"> Jetzt reinhören und abonnieren</span>
            </button>

        </div>
    </div>



    <!-- ################### Marktplatz SECTION ################### -->

    <div class="marktplatz-container" style="background-color: #b222221a; padding: 1rem 0">
        <div class="blog-container container">
            <div class="blog-heading">Marktplatz</div>
            <div class="blog-sub-heading">
                Unser Marktplatz bietet Ihnen eine sorgfältig ausgewählte Vielfalt an
                Produkten und Dienstleistungen rund um die Themen Pflege, Gesundheit
                und Wohlbefinden. <br /><br />Wir arbeiten mit vertrauenswürdigen
                Partnern zusammen, um Ihnen hochwertige Lösungen anzubieten, die Ihren
                Alltag erleichtern und die bestmögliche Versorgung Ihrer Liebsten
                unterstützen.
            </div>

            <!-- ###################### For Desktop ################### -->
            <div class="row">
                @foreach ($marketplaces as $marketplace)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <a href="{{ $marketplace->link }}"
                            target="{{ $marketplace->external_link === 'ja' ? '_blank' : '' }}"
                            style="text-decoration: none">
                            <!-- Blog Card Container -->
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    @if (strpos($marketplace->image, 'https') === 0)
                                        <!-- Check if the image is an external URL -->
                                        <img src="{{ $marketplace->image }}" alt="" class="img-fluid" />
                                    @else
                                        <img src="{{ asset('storage/' . $marketplace->image) }}" alt=""
                                            class="img-fluid" />
                                    @endif
                                </div>
                                <div class="blog-card-body">

                                    <div class="blog-kate">Kategorie:
                                        @php
                                            $categories = [
                                                trim($marketplace->category1_name),
                                                trim($marketplace->category2_name),
                                                trim($marketplace->category3_name),
                                                trim($marketplace->category4_name),
                                            ];
                                            // Remove any empty categories
                                            $categories = array_filter($categories);
                                        @endphp

                                        @foreach ($categories as $key => $category)
                                            <span class="blog-kate">{{ $category }}@if ($key < count($categories) - 1)
                                                    ,
                                                @endif
                                            </span>
                                        @endforeach


                                    </div>
                                    <div class="blog-card-heading">
                                        {{ $marketplace->name }} <!-- Dynamically display marketplace name -->
                                    </div>
                                    <div class="blog-card-sub-heading">
                                        {{ Str::limit($marketplace->content_text, 150) }}
                                        <!-- Limit the content text for a preview -->
                                    </div>
                                </div>

                                <button class="blog-card-btn">Weiterlesen</button>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>



            <button style="position: relative;"><a style="position: relative;"><a
                        style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                        href="{{ route('marketplace.index') }}"></a><span style="font-weight: bold"> Zum Marktplatz
                    </span></button>
        </div>
    </div>

    <!-- ################### BUCHER SECTION ################### -->

    <div class="blog-container container">
        <div class="blog-heading">Bücher</div>
        <div class="blog-sub-heading">
            Die Seite "Bücher" befindet sich noch im Aufbau. Hier werden wir Ihnen
            Bücher zum Thema Pflege und Gesundheit präsentieren.
        </div>


        <!-- ###################### For Desktop ################### -->
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="blog-card">
                    <a style="text-decoration: none" href="https://amzn.to/46e0eKE" target="_blank">

                        <div class="blog-card-img">
                            <img src="{{ asset('assets/Images/Bucher_img1.svg') }}" alt="" />
                        </div>
                        <div class="blog-card-body">
                            <div class="bucher-card-heading">
                                Wenn das Leben um Hilfe ruft: Angehörige zwischen Hingabe,
                                Pflichtgefühl und Verzweiflung
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-12 mt-5">
                <div class="blog-card">
                    <a style="text-decoration: none" href="https://amzn.to/3W4UAG4" target="_blank">
                        <div class="blog-card-img">
                            <img src="{{ asset('assets/Images/Bucher_img2.svg') }}" alt="" />
                        </div>
                        <div class="blog-card-body">
                            <div class="bucher-card-heading">
                                Pflege organisieren und finanzieren: Eine Orientierungshilfe für
                                Angehörige
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-12 mt-5">
                <div class="blog-card">
                    <a style="text-decoration: none" href="https://amzn.to/4cFjZ05" target="_blank">
                        <div class="blog-card-img">
                            <img src="{{ asset('assets/Images/Bucher_img3.svg') }}" alt="" />
                        </div>
                        <div class="blog-card-body">
                            <div class="bucher-card-heading">
                                Pflege zu Hause: Was Angehörige wissen müssen
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <button style="position: relative;"><a style="position: relative;"><a
                    style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                    href="{{ route('buecher') }}"></a><span style="font-weight: bold"> Zu den Büchern
                </span></button>
    </div>


    <!-- ###################### SECTION 3 #######################  -->

    <div class="marktplatz-container" style="background-color: #b222221a; padding: 1rem 0">
        <div class="blog-container container">
            <div class="row" style="height: 100%">
                <div class="section1-left col-md-7">
                    <div class="text-start text-md-end">
                        <span class="section1-top1">Partner von PflegePur</span>
                    </div>
                    <div class="section1-top2 text-md-start text-md-end text-center">
                        Seien Sie Teil von etwas Größerem!
                    </div>
                    <div class="section1-top4 text-md-end text-start">
                        Möchten Sie Partner oder Mitmacher von PflegePur werden? <br />
                        Gemeinsam können wir einen echten Unterschied im Leben vieler
                        Menschen machen. <br /><br />Bei PflegePur bieten wir Ihnen
                        vielfältige Möglichkeiten, sich zu engagieren, Ihr Know-how
                        einzubringen und gemeinsam mit uns die Pflege zukunftssicher zu
                        gestalten. <br /><br />
                        Ob als Partner in Projekten oder als tatkräftiger Mitmacher im
                        Alltag – Ihre Ideen und Ihr Einsatz sind bei uns herzlich
                        willkommen. <br />Lassen Sie uns zusammen neue Wege gehen und Pflege
                        neu denken! <br />
                        Ihr PflegePur-Team
                    </div>
                    <div class="text-center text-md-end">
                        <button style="position: relative;" class="blog-card-btn mb-3"><a
                                style="position: relative;"><a
                                    style="position: absolute;top: 0; width: 100%; height: 100%;border-radius: 10px;"
                                    href="{{ route('partner') }}"></a>Erfahren Sie hier mehr!</button>

                    </div>
                </div>

                <div class="section1-right col-md-5 mb-4 mb-md-0 mt-4 mt-md-0">
                    <img style="border-radius: 20px; width: 80%; object-fit: cover"
                        src="{{ asset('assets/Images/Section3_img.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="container-fluid section1-container" style="width: 85%; margin-bottom: 2.5rem">
        <div class="row" style="height: 100%">
            <div class="section1-left col-md-4">
                
    <div class="blog-card-img">
        <a href="/blogs"><img style="border-radius: 20px; width: 400px; height:250px;" src="https://pflegepur.de/public/assets/Images/BLOG.png" alt="" class="img-fluid" /></a>
    </div>
            </div>
        </div>
    </div>
-->



    @include('components.footer.footer_first')

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/index-bottom-img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>

</html>
