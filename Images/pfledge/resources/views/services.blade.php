<!DOCTYPE html>
<html lang="en">

@include('components.header.head')


<body>
    <div class="header-container service-header-bg"
        style="
    background-image: url('{{ asset('assets/Images/Uber_uns_header_bg.svg') }}') !important;">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Unterstützung für Ihren Pflegealltag</span>
            <div>Services</div>
        </div>
    </div>

    <div class="service-section1-container">
        Bei PflegePur möchten wir Sie in allen Bereichen des Pflegealltags
        unterstützen. In unserem Servicebereich finden Sie eine Vielzahl
        hilfreicher Werkzeuge, die Ihnen den Umgang mit bürokratischen und
        organisatorischen Herausforderungen erleichtern. <br /><br />Nutzen Sie
        unsere Checklisten, um den Überblick zu bewahren, greifen Sie auf unsere
        Online-Rechner zu, um finanzielle Aspekte der Pflege einfach zu berechnen,
        und verwenden Sie unsere Musteranschreiben, um wichtige Anträge und
        Dokumente schnell und korrekt zu erstellen. <br /><br />
        <span style="color: #b22222; font-weight: 600">Alles, was Sie brauchen – kompakt und kostenlos an einem
            Ort!</span>
    </div>


    <!-- ###################### FOR DEKSTOP ################### -->
    <div class="service-product-container d-none d-sm-flex">
        <div class="service-product">
            <a href="{{route('checklisten')}}"><img src="{{ asset('assets/Images/Service_img1.svg') }}" alt="Product 1" /></a>
        </div>
        <div class="service-product">
            <a href="{{ route('online.rechner.index') }}"><img src="{{ asset('assets/Images/Service_img2.svg') }}"
                    alt="Product 3" /></a>
        </div>
        <div class="service-product">
            <a href="{{ route('musteranschreiben') }}"><img src="{{ asset('assets/Images/Service_img3.svg') }}"
                    alt="Product 3" /></a>
        </div>
    </div>
    <!-- ###################### FOR MOBILE ################### -->
    <div class="service-product-container1 d-flex d-sm-none">
        <div class="service-product1">
            <a href="{{route('checklisten')}}"><img src="{{ asset('assets/Images/Service_img1.svg') }}" alt="Product 1" /></a>
        </div>
        <div class="service-product1">
            <a href="{{ route('online.rechner.index') }}"><img src="{{ asset('assets/Images/Service_img2.svg') }}"
                    alt="Product 3" /></a>
        </div>
        <div class="service-product1">
            <a href="{{route('musteranschreiben')}}"><img src="{{ asset('assets/Images/Service_img3.svg') }}"
                    alt="Product 3" /></a>
        </div>
    </div>
    <!-- ###################### SERVICE SECTION 3 #######################  -->

    <div class="academy-container"
        style="
          background-color: #b222221a;
          padding-top: 2rem;
          padding-bottom: 4rem;
          margin-top: 5rem;
        ">
        <div class="container-fluid section1-container" style="width: 85%">
            <div class="row" style="height: 100%">
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 20px; width: 100%; object-fit: cover"
                        src="{{ asset('assets/Images/Service_section3.svg') }}" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Ihre praktischen Checklisten</span>
                    <div class="section1-top2 text-start">
                        Effiziente Unterstützung im Pflegealltag
                    </div>
                    <div class="section1-top4">
                        Willkommen bei unseren umfassenden Checklisten für
                        Pflegebedürftige und pflegende Angehörige. In der Pflege zählt
                        jeder Handgriff, und eine gut organisierte Planung erleichtert den
                        Alltag erheblich.Unsere Checklisten bieten Ihnen strukturierte
                        und leicht umsetzbare Anleitungen für alle wichtigen Pflegethemen
                        – von der täglichen Pflegeplanung bis hin zur Organisation von
                        Arztbesuchen. <br />Nutzen Sie unsere Checklisten, um den
                        Pflegealltag zu optimieren und die bestmögliche Betreuung zu
                        gewährleisten.
                    </div>
                    <div>
                        <button style="position: relative">
                            <a href="{{route('checklisten')}}"
                                style="
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                      border-radius: 10px;
                    "></a>Zu
                            den Checklisten
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ###################### SERVICE SECTION 4 #######################  -->

    <div class="container-fluid section1-container" style="width: 85%; margin-bottom: 2.5rem">
        <div class="row service-section4-row" style="height: 100%">
            <div class="section1-left col-md-7">
                <div class="text-start text-md-end">
                    <span class="section1-top1">Online-Rechner für Pflegegrad und mehr</span>
                </div>
                <div class="section1-top2 text-md-start text-md-end text-start">
                    Schnell, einfach und präzise
                </div>
                <div class="section1-top4 text-md-end text-start">
                    Bei uns finden Sie eine Vielzahl an Online-Rechnern, die Ihnen dabei
                    helfen, schnell und unkompliziert wichtige Informationen zu Ihren
                    individuellen Pflegesituationen zu erhalten. Ob es um die Einstufung
                    in einen Pflegegrad, die Berechnung von Pflegeleistungen oder die
                    Kostenübersicht für stationäre und ambulante Pflege geht – unsere
                    Tools unterstützen Sie dabei, den Überblick zu behalten und
                    fundierte Entscheidungen zu treffen. <br /><br />PflegePur steht für
                    einfache Handhabung, präzise Ergebnisse und zuverlässige
                    Informationen. Nutzen Sie unsere Online-Rechner, um Ihre
                    Pflegefragen zu klären und die bestmögliche Unterstützung zu finden.
                    Wir sind hier, um Ihnen den Weg durch das komplexe Pflegesystem zu
                    erleichtern. <br /><br />Starten Sie jetzt und entdecken Sie, wie
                    PflegePur Ihnen helfen kann!
                </div>
                <div>
                    <div class="text-center text-md-end">
                        <button style="position: relative">
                            <a style="
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                      border-radius: 10px;
                    "
                                href="{{ route('online.rechner.index') }}"></a>Zu den Online-Rechnern
                        </button>
                    </div>
                </div>
            </div>

            <div class="section1-right col-md-5 mb-4 mb-md-0 mt-4 mt-md-0">
                <img style="border-radius: 20px; width: 100%; object-fit: cover"
                    src="{{ asset('assets/Images/Academy_img.svg') }}" alt="" />
            </div>
        </div>
    </div>

    <!-- ###################### SERVICE SECTION 5 #######################  -->

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
                        src="{{ asset('assets/Images/Service_section5.svg') }}" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Ihre zuverlässige Vorlage für formelle Schreiben</span>
                    <div class="section1-top2 text-start">
                        Musteranschreiben für Pflegeanliegen
                    </div>
                    <div class="section1-top4">
                        Hier finden Sie praktische Musteranschreiben, die
                        Pflegebedürftigen und pflegenden Angehörigen als wertvolle
                        Hilfestellung dienen. <br /><br />
                        Ob Sie ein Schreiben an die Pflegekasse, den Arbeitgeber oder
                        andere wichtige Stellen verfassen müssen – unsere Vorlagen bieten
                        Ihnen eine solide Grundlage. <br /><br />Sie sind so gestaltet,
                        dass Sie sie einfach an Ihre individuellen Bedürfnisse anpassen
                        können, um Ihre Anliegen klar und professionell zu kommunizieren.
                        <br /><br />Sparen Sie Zeit und Nerven mit unseren bewährten
                        Musteranschreiben.
                    </div>
                    <div>
                        <button style="position: relative">
                            <a href="{{ route('musteranschreiben') }}"
                                style="
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                      border-radius: 10px;
                    "></a>Zu
                            den Musteranschreiben
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/services-bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')
</body>

</html>
