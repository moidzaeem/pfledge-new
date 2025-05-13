<!DOCTYPE html>
<html lang="en">

@include('components.header.head')


<body>
    <div class="header-container service-header-bg"
        style="
    background-image: url('{{ asset('assets/Images/Uber_uns_header_bg.svg') }}') !important;">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Mit Herz und Kompetenz an Ihrer Seite – Ihr Partner für Pflege und
                Betreuung</span>
            <div>Über uns</div>
        </div>
    </div>

    <div class="uberuns-container">
        <div class="uberuns-row row">
            <div class="col-md-6 uberuns-left d-none d-md-block">
                <img src="{{ asset('assets/Images/Uber_uns_top_img.svg') }}" alt="" />
            </div>
            <div class="col-md-6 uberuns-left d-block d-md-none">
                <img src="{{ asset('assets/Images/Uber_uns_top_img-sm.svg') }}" alt="" />
            </div>
            <div class="col-md-6 uberuns-right">
                <div class="col-12 uberuns-section1-content">
                    Herzlich willkommen bei PflegePur, Ihrer vertrauensvollen
                    Anlaufstelle rund um die Themen Pflege und Betreuung. Unser Ziel ist
                    es, pflegebedürftigen Menschen sowie deren Angehörigen wertvolle
                    Unterstützung zu bieten und Ihnen mit Rat und Tat zur Seite zu
                    stehen. Bei uns steht der Mensch im Mittelpunkt. <br /><br />
                    PflegePur wurde ins Leben gerufen, um die Herausforderungen der
                    Pflege zu erleichtern und nachhaltige Lösungen für pflegende
                    Angehörige sowie Betroffene zu entwickeln. Unser Team besteht aus
                    erfahrenen Fachkräften, die sich mit Leidenschaft und Engagement für
                    die Verbesserung der Lebensqualität in der Pflege einsetzen.
                </div>

                <div class="col-12 uberuns-section1-flex-cont">
                    <div class="uberuns-section1-flex-img-div">
                        <img src="{{ asset('assets/Images/Uber_uns_star-tag.svg') }}" alt="" />
                    </div>
                    <div class="uberuns-section1-flex2">
                        <span class="uberuns-section1-flex2-span">Was wir tun</span>
                        <br />unterstützen Sie in allen Bereichen der Pflege – sei es
                        durch praktische Informationen, wertvolle Tipps, Checklisten oder
                        individuelle Beratung. Mit unserer Plattform möchten wir einen
                        einfachen Zugang zu relevanten Ressourcen schaffen, um den
                        Pflegealltag bestmöglich zu gestalten.
                    </div>
                </div>

                <div class="col-12 uberuns-section1-flex-cont mb-0">
                    <div class="uberuns-section1-flex-img-div">
                        <img src="{{ asset('assets/Images/Uber_uns_target_tag.svg') }}" alt="" />
                    </div>
                    <div class="uberuns-section1-flex2">
                        <span class="uberuns-section1-flex2-span">Unsere Mission</span>
                        <br />Unsere Mission ist es, pflegebedürftigen Menschen und deren
                        Angehörigen ein Stück Leichtigkeit im herausfordernden
                        Pflegealltag zu ermöglichen. Dabei legen wir großen Wert auf
                        Prävention, Beratung und individuelle Lösungen, die auf die
                        jeweiligen Bedürfnisse abgestimmt sind.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ############################# UBERUNS SECTION 2 ########################### -->

    <div class="partner-section2-container uberuns-section2-container"
        style="background-color: #b222221a; padding: 1rem 0">
        <div class="blog-container">
            <div class="blog-heading text-center w-100"
                style="font-size: 30px; line-height: 35.55px; margin-bottom: 1.8rem">
                Warum PflegePur?
            </div>
            <div class="partner-cards-container">
                <div class="partner-card">
                    <div class="partner-card-heading">Warum PflegePur?</div>
                    <div class="partner-card-data">
                        Unser Team verfügt über umfassende Expertise in der Pflegeberatung
                        und Betreuung.
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-card-heading">Individuelle Beratung</div>
                    <div class="partner-card-data">
                        Jede Pflegesituation ist einzigartig. Wir bieten maßgeschneiderte
                        Lösungen für Ihre Bedürfnisse.
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-heading">Zuverlässigkeit</div>
                    <div class="partner-card-data">
                        Auf uns können Sie zählen. Wir sind stets für Sie da, wenn Sie
                        Unterstützung benötigen.
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-card-heading">Prävention und Aufklärung</div>
                    <div class="partner-card-data">
                        Neben der aktiven Pflege legen wir großen Wert auf vorbeugende
                        Maßnahmen, um Pflegebedürftigkeit zu vermeiden oder zu verzögern.
                    </div>
                </div>
                <div class="blog-sub-heading text-center" style="margin: auto; margin-top: 1rem">
                    Gemeinsam schaffen wir ein unterstützendes Umfeld, das Menschen in
                    der Pflege bestmöglich begleitet. PflegePur ist mehr als eine
                    Plattform – es ist eine Gemeinschaft, die füreinander da ist und
                    sich gegenseitig stärkt.
                </div>
            </div>
        </div>
    </div>


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Uber_uns-bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')
</body>

</html>
