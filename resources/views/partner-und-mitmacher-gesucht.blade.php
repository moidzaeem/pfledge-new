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

           <!-- Display success message -->
           @if (session('success'))
            <div>           
               <div class="alert alert-success mt-3">
                   {{ session('success') }}
               </div>
            </div>   
           @endif


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
                        willkommen. <br /><br />Lassen Sie uns zusammen neue Wege gehen und
                        Pflege neu denken! <br /><br />Ihr PflegePur-Team
                    </div>
                    <div>
                        <button><a href="#contactForm" style="text-decoration: none;color:white">Kontaktieren Sie uns!</a></button>
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
                    <img src="assets/Images/Partner_section_star.svg" alt="" />
                    <div class="partner-card-heading">Feedback</div>
                    <div class="partner-card-data">
                        Auf Ihre Meinung und Ihr Feedback sind wir angewiesen. Nur mit
                        Ihrer Mithilfe werden wir PflegePur noch besser machen können.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="assets/Images/Partner_section2_send.svg" alt="" />
                    <div class="partner-card-heading">Mundpropaganda</div>
                    <div class="partner-card-data">
                        Sprechen Sie in Ihrem Freundes- und Bekanntenkreis über das
                        Portal. Nutzen Sie das Teilen und Liken auf Facebook.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="assets/Images/Partner_section2_document.svg" alt="" />
                    <div class="partner-card-heading">Flyer</div>
                    <div class="partner-card-data">
                        Zur weiteren Bekanntmachung des Portals stellen wir Ihnen gern
                        unsere Flyer zur Verfügung zur Verteilung z.B. in Apotheken,
                        Ärzten und Seniorenheimen.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="assets/Images/Partner_sectionn2_users-group.svg" alt="" />
                    <div class="partner-card-heading">Redaktion</div>
                    <div class="partner-card-data">
                        Bei Interesse haben Sie die Möglichkeit, eigene Artikel für unsere
                        Themenwelt mit Ihnen als Autor*in zu verfassen.
                    </div>
                </div>
                <div class="partner-card">
                    <img src="assets/Images/Partner_section2_lightbulb.svg" alt="" />
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
        <div class="partner-section3-top2">Ihre Möglichkeiten als Partner!</div>
        <div class="partner-section3-top3">
        PflegePur ist eine digitale Plattform, die pflegende Angehörige, Pflegebedürftige und Fachkräfte mit wertvollen Informationen, praktischen Tools und innovativen Dienstleistungen unterstützt. Möchten Sie mit uns zusammenarbeiten und Teil unseres Netzwerks werden?
        <br /><br />
            Wir bieten verschiedene Kooperationsmodelle, um gemeinsam Mehrwert für unsere Nutzer zu schaffen:
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="partner-section3-card">
                    <span>PflegePur-Inhalte auf Ihrer Webseite integrieren</span>
                    <div style="padding-top:10px;">
                        Sie betreiben eine Webseite im Bereich Pflege, Gesundheit oder Sozialwesen? Nutzen Sie unsere hochwertigen Inhalte und Tools, um Ihren Besuchern noch mehr Nutzen zu bieten:
<ul style="padding-top:10px;">
<li><strong>Blog-Artikel:</strong> Binden Sie unsere informativen Blog-Artikel zu relevanten Pflegethemen ein.</li>
<li style="padding-top:10px;"><strong>Pflegegrad-Rechner:</strong> Ermöglichen Sie Ihren Nutzern die einfache Berechnung eines möglichen Pflegegrads direkt auf Ihrer Webseite.</li>
<li style="padding-top:10px;"><strong>Checklisten & Vorlagen:</strong> Stellen Sie Ihren Kunden unsere praktischen Hilfsmittel zur Verfügung.</li>
</ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="partner-section3-card">
                    <span>Ihr Unternehmen auf PflegePur präsentieren</span>
                    <div style="padding-top:10px;">
Sie bieten Dienstleistungen oder Produkte im Bereich Pflege, Betreuung oder Gesundheitsförderung an? Werden Sie Teil unseres Netzwerks und präsentieren Sie Ihr Unternehmen in einem relevanten Umfeld:
<ul style="padding-top:10px;">
<li><strong>Kostenloser Basiseintrag im Marktplatz:</strong> Ihr Unternehmen wird in unserer Marktplatz-Kategorie gelistet.
<li style="padding-top:10px;"><strong>Erweiterte Präsenz durch Premium-Partnerschaften:</strong> Profitieren Sie von einer prominenteren Platzierung, Detailseiten und direkter Kontaktmöglichkeit.
</ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 mb-md-0">
                <div class="partner-section3-card">
                    <span>Gemeinsame Projekte & Kooperationen</span>
                    <div style="padding-top:10px;">
                        Sie haben innovative Ideen oder digitale Lösungen, die zur Pflegebranche passen? Lassen Sie uns zusammenarbeiten!
<ul style="padding-top:10px;">
<li><strong>Innovationspartnerschaften:</strong> Entwickeln Sie mit uns neue digitale oder analoge Lösungen für die Pflege.</li>
<li style="padding-top:10px;"><strong>Akademie & Schulungen:</strong> Bieten Sie Ihr Fachwissen in unserer PflegePur-Akademie an.</li>
</ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner-section3-card">
                    <span>Regionalpartner</span>
                    <div style="padding-top:10px;">
                        Werden Sie exklusiver Regionalpartner mit einer individuellen Webseite! Als Regionalpartner vertreten Sie PflegePur in Ihrer Region und profitieren von einer starken Marke und einem professionellen Netzwerk. Ihre Vorteile:
<ul style="padding-top:10px;">
<li><strong>Eigene, maßgeschneiderte Webseite:</strong> Eine auf Ihre Region zugeschnittene Plattform mit PflegePur-Branding.</li>
<li style="padding-top:10px;"><strong>Exklusive Gebietsrechte:</strong> Sie sind der einzige Regionalpartner in Ihrem Gebiet.</li>
<li style="padding-top:10px;"><strong>Unterstützung durch PflegePur:</strong> Profitieren Sie von unserer Erfahrung, digitalen Lösungen und Werbemaßnahmen.</li>
<li style="padding-top:10px;"><strong>Direkter Zugang zu Kunden & Partnern:</strong> Erhalten Sie Anfragen und Kontakte aus Ihrer Region.</li>
</ul>
                    <div class="section1-left col-md-7">
                        So könnte Ihre Webseite aussehen:<br />
                        <button class="blog-card-btn mb-3"><a href="https://pflegeportal-hameln.de" target="_blank" style="text-decoration:none;color:#ffffff;">Zum Pflegeportal Kreis Hameln-Pyrmont</a></button>
                    </div>

                    </div>
                </div>
            </div>
            {{-- <div class="col-12 d-sm-block d-none partner-section3-btn-div">
                <button>Zum Regionalportal Hameln-Pyrmont</button>
            </div> --}}
        </div>
        
        <div class="partner-section3-top2" style="margin-top:40px;">Ihre Vorteile als PflegePur-Partner!</div>
        <div>
<ul style="padding-top:10px;">
<li><strong>Mehr Reichweite:</strong> Erreichen Sie eine gezielte, pflegerelevante Zielgruppe.
<li style="padding-top:10px;"><strong>Hochwertige Inhalte & Tools:</strong> Nutzen Sie unser Fachwissen und unsere digitalen Lösungen.
<li style="padding-top:10px;"><strong>Innovative Zusammenarbeit:</strong> Profitieren Sie von unserem Engagement für neue digitale Pflegeansätze.
</ul>
Interesse? Kontaktieren Sie uns!
<br /><br />
Lassen Sie uns über eine Kooperation sprechen. Schreiben Sie uns eine E-Mail an partner@pflegepur.de oder nutzen Sie unser folgendes Kontaktformular.
        </div>        
        
    </div>

<div id="contactForm">
    @include('components.footer.footer_first')
</div>    


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Parter_bottom_img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')
</body>

</html>
