<!DOCTYPE html>
<html lang="en">

@include('components.header.head')


<body>
    <div class="header-container service-header-bg partner-header-bg">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Seien Sie Teil von etwas Größerem!</span>
            <div>Partner und Mitmacher gesucht</div>
        </div>
    </div>

    <!-- ###################### PARTNER SECTION 1 #######################  -->

    <div style="margin-bottom: 5rem">
        <div class="container-fluid section1-container" style="width: 85%">
            <div class="row" style="height: 100%">
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 20px; width: 100%; object-fit: cover"
                        src="{{ asset('assets/Images/Section3_img.svg') }}" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Partner von PflegePur</span>
                    <div class="section1-top2 text-start">
                        Seien Sie Teil von etwas Größerem!
                    </div>
                    <div class="section1-top4">
                        Möchten Sie Partner oder Mitmacher von PflegePur werden?
                        <br />Gemeinsam können wir einen echten Unterschied im Leben
                        vieler Menschen machen. <br /><br />Bei PflegePur bieten wir Ihnen
                        vielfältige Möglichkeiten, sich zu engagieren, Ihr Know-how
                        einzubringen und gemeinsam mit uns die Pflege zukunftssicher zu
                        gestalten. <br /><br />
                        Ob als Partner in Projekten oder als tatkräftiger Mitmacher im
                        Alltag – Ihre Ideen und Ihr Einsatz sind bei uns herzlich
                        willkommen. <br />brLassen Sie uns zusammen neue Wege gehen und
                        Pflege neu denken! <br />Ihr PflegePur-Team
                    </div>
                    <div>
                        <button><a href="#contactFormTest" style="text-decoration: none;color:white">Kontaktieren Sie uns!</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ############################# PARTNER SECTION 2 ########################### -->

    <div class="partner-section2-container" style="background-color: #b222221a; padding: 1rem 0">
        <div class="blog-container">
            <div class="blog-heading" style="font-size: 30px; line-height: 35.55px; margin-bottom: 0.7rem">
                Seien Sie dabei und machen Sie mit!
            </div>
            <div class="blog-sub-heading">
                Beispielhaft nennen wir Ihnen mögliche Bereiche, in denen Sie bei uns
                mitmachen und uns unterstützen können, um PflegePur besser und
                bekannter zu machen.
            </div>
            <div class="partner-cards-container">
                <div class="partner-card">
                    <img src="./Images/Partner_section_star.svg" alt="" />
                    <div class="partner-card-heading">Feedback</div>
                    <div class="partner-card-data">
                        Auf Ihre Meinung und Ihr Feedback sind wir angewiesen. Nur mit
                        Ihrer Mithilfe werden wir PflegePur noch besser machen können.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./Images/Partner_section2_send.svg" alt="" />
                    <div class="partner-card-heading">Mundpropaganda</div>
                    <div class="partner-card-data">
                        Sprechen Sie in Ihrem Freundes- und Bekanntenkreis über das
                        Portal. Nutzen Sie das Teilen und Liken auf Facebook.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./Images/Partner_section2_document.svg" alt="" />
                    <div class="partner-card-heading">Flyer</div>
                    <div class="partner-card-data">
                        Zur weiteren Bekanntmachung des Portals stellen wir Ihnen gern
                        unsere Flyer zur Verfügung zur Verteilung z.B. in Apotheken,
                        Ärzten und Seniorenheimen.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./Images/Partner_sectionn2_users-group.svg" alt="" />
                    <div class="partner-card-heading">Redaktion</div>
                    <div class="partner-card-data">
                        Bei Interesse haben Sie die Möglichkeit, eigene Artikel für unsere
                        Themenwelt mit Ihnen als Autor*in zu verfassen.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="./Images/Partner_section2_lightbulb.svg" alt="" />
                    <div class="partner-card-heading">Ideengeber*in</div>
                    <div class="partner-card-data">
                        Teilen Sie uns gern Ihre Ideen für neue Bereiche oder neue
                        Online-Rechner mit.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ############################# PARTNER SECTION 3 ########################### -->
    <div class="partner-section3-container">
        <div class="partner-section3-top1">Partner bei PflegePur</div>
        <div class="partner-section3-top2">Unterstützen Sie uns als Partner!</div>
        <div class="partner-section3-top3">
            Für die Betreibung des Portals entstehen uns auch Kosten, unter anderem
            für den Server, die Domain, Datenbanken, die Erstellung von
            Marketingartikeln. Um das Portal zumindest kostendeckend betreiben zu
            können, freuen wir uns über Ihre finanzielle Unterstützung.
            <br /><br />Natürlich sollen auch Sie im Sinne einer Win-Win-Beziehung
            davon profitieren. Auch dafür stellen wir nachstehend Möglichkeiten zur
            Zusammenarbeit dar.
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="partner-section3-card">
                    <span>Banner</span>
                    <div>
                        Bewerben Sie Ihr Unternehmen (z.B. Pflegeeinrichtung, Apotheke,
                        sonstiger Produktanbieter und Dienstleister im Bereich Pflege und
                        Gesundheit) durch Banner-Werbung auf unserer Webseite und/ oder in
                        unserem Newsletter!
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="partner-section3-card">
                    <span>Flyer</span>
                    <div>
                        Gern platzieren wir Ihr Unternehmen mit Logo und Kurztext in
                        unserem Flyer.
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 mb-md-0">
                <div class="partner-section3-card">
                    <span>Partnerseite</span>
                    <div>
                        Wir positionieren Ihr Unternehmen im Portal an prominenter Stelle,
                        bspw. auf dieser Partnerseite oder sogar direkt auf der
                        Startseite.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner-section3-card">
                    <span>Regionalpartner</span>
                    <div>
                        Werden Sie exklusiver Regionalpartner mit einer individuellen
                        Webseite! Haben Sie Interesse an einer Partnerschaft oder kennen
                        Sie jemanden, der das Konzept umsetzen möchte?
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 d-sm-block d-none partner-section3-btn-div">
                <button>Zum Regionalportal Hameln-Pyrmont</button>
            </div> --}}
        </div>
    </div>

    @include('components.footer.footer_first')


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Parter_bottom_img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')
</body>

</html>
