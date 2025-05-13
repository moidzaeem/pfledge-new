<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="background-image: url('{{ asset('assets/Images/Academy_page_header_bg.svg') }}') !important">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Online-Kurse für Pflegebedürftige und pflegende Angehörige</span>
            <div>Academy</div>
        </div>
    </div>

    <!-- ######################## ACADEMY PAGE SECTION 1 ######################## -->
    <div class="academy-page-section1-container">
        <div class="row">
            <div class="col-md-6 academy-page-section1-top mb-3 mb-md-0 pe-md-4">
                Die PflegePur-Academy ist Ihr kompetenter Partner in der Weiterbildung
                rund um das Thema Pflege. Unser Angebot richtet sich an
                pflegebedürftige Personen, pflegende Angehörige und professionelle
                Pflegekräfte. In unseren Online-Kursen vermitteln wir praxisnahes
                Wissen, das Sie in Ihrem Alltag unterstützt, um bestmögliche Pflege zu
                gewährleisten. Wir bieten Ihnen eine Vielzahl an Themen, von der
                grundsätzlichen Pflege bis hin zu spezialisierten Bereichen wie der
                Pflege von Menschen mit Demenz, der Palliativpflege und der Pflege von
                Menschen mit speziellen Krankheitsbildern.
            </div>
            <div class="col-md-6 academy-page-section1-top ps-md-4">
                Unsere Kurse sind flexibel und lassen sich bequem in Ihren Alltag
                integrieren. Sie lernen in Ihrem eigenen Tempo und haben jederzeit
                Zugriff auf umfassendes Lehrmaterial, das von erfahrenen
                Pflegefachkräften und Experten erstellt wurde. So stellen wir sicher,
                dass Sie stets auf dem neuesten Stand der pflegerischen Entwicklungen
                bleiben. <br /><br />Mit der PflegePur-Academy möchten wir nicht nur
                Wissen vermitteln, sondern auch eine starke Gemeinschaft schaffen.
                Denn der Austausch unter Gleichgesinnten und die Möglichkeit, Fragen
                an Experten zu stellen, machen den Lernprozess noch effektiver und
                unterstützen Sie dabei, Pflege mit Herz und Verstand auszuüben.
            </div>
            <div class="col-12 academy-page-section1-bottom">
                Entdecken Sie unser vielfältiges Kursangebot und profitieren Sie von
                fundiertem Fachwissen und praktischen Tipps für Ihren Pflegealltag!
            </div>
        </div>
    </div>

    <!-- ######################## ACADEMY SLIDER FOR LARGE SCREENS ######################## -->

    <div class="academy-slider">
        <div class="academy-cards">
            <a style="text-decoration: none"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-demenz-verstehen-unterstuetzung-und-pflege-d1b95913"
                target="_blank">
                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider2.svg') }}" alt="Image 2" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Herzlich Willkommen zum Online-Kurs "Pflegende Angehörige -
                            Selbstfürsorge und Stressbewältigung"!
                        </div>
                        <div class="swiper-content-data">
                            Selbstfürsorge ist ein entscheidender Aspekt für pflegende
                            Angehörige, der oft vernachlässigt wird. In diesem Abschnitt
                            möchten wir Ihnen die Gründe aufzeigen, warum Selbstfürsorge nicht
                            nur für Ihre eigene Gesundheit und Ihr Wohlbefinden wichtig ist,
                            sondern auch für die Qualität der Pflege, die Sie Ihrem
                            Angehörigen bieten können.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>
            <a style="text-decoration: none" target="_blank"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/pflege-zu-hause-grundlagen-und-tipps-736e9710">

                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider1.svg') }}" alt="Image 1" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Herzlich Willkommen zum Online-Kurs "Pflege zu Hause: Grundlagen
                            und Tipps"!
                        </div>
                        <div class="swiper-content-data">
                            Häusliche Pflege umfasst die Unterstützung und Betreuung von
                            pflegebedürftigen Personen in ihrem eigenen Zuhause. Dies kann
                            sowohl durch Angehörige als auch durch professionelle Pflegekräfte
                            erfolgen.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>
            <a style="text-decoration: none" target="_blank"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-pflege-zu-hause-grundlagen-und-tipps-13bbb0bb">
                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider3.svg') }}" alt="Image 3" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Herzlich Willkommen zum Online-Kurs "Demenz verstehen:
                            Unterstützung und Pflege"!
                        </div>
                        <div class="swiper-content-data">
                            Demenz ist kein spezifisches Krankheitsbild, sondern ein
                            allgemeiner Begriff, der eine Vielzahl von Symptomen beschreibt,
                            die mit einem Verlust der kognitiven Funktionen – denken, erinnern
                            und schließen – einhergehen, welche stark genug sind, um den
                            Alltag einer Person zu beeinträchtigen. Es ist eine
                            fortschreitende Erkrankung, was bedeutet, dass die Symptome sich
                            mit der Zeit verschlechtern.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="pagination">
            <span class="academy-dot active" data-index="0"></span>
            <span class="academy-dot" data-index="1"></span>
            <span class="academy-dot" data-index="2"></span>
        </div>
    </div>

    <!-- ######################## ACADEMY PAGE SLIDER FOR SMALL SCREEN ########################  -->

    <div class="academy-section-2-sm">
        <a style="text-decoration: none"
            href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-demenz-verstehen-unterstuetzung-und-pflege-d1b95913"
            target="_blank">
            <div class="academy-page-card">
                <img src="{{ asset('assets/Images/Academy_page_slider_1_sm.svg') }}" alt="" />
                <div class="swiper-content">
                    <div class="swiper-content-top1">PflegePur - Academy</div>
                    <div class="swiper-content-heading">
                        Herzlich Willkommen zum Online-Kurs "Pflegende Angehörige -
                        Selbstfürsorge und Stressbewältigung"!
                    </div>
                    <div class="swiper-content-data">
                        Selbstfürsorge ist ein entscheidender Aspekt für pflegende
                            Angehörige, der oft vernachlässigt wird. In diesem Abschnitt
                            möchten wir Ihnen die Gründe aufzeigen, warum Selbstfürsorge nicht
                            nur für Ihre eigene Gesundheit und Ihr Wohlbefinden wichtig ist,
                            sondern auch für die Qualität der Pflege, die Sie Ihrem
                            Angehörigen bieten können.
                    </div>
                    <div class="swiper-content-btn"><button>Kostenlos</button></div>
                </div>
            </div>
        </a>
        <a style="text-decoration: none" target="_blank"
            href="https://pflegepur.my-ablefy.com/s/pflegepur/pflege-zu-hause-grundlagen-und-tipps-736e9710">

            <div class="academy-page-card">
                <img src="{{ asset('assets/Images/Academy_page_slider_2_sm.svg') }}" alt="" />
                <div class="swiper-content">
                    <div class="swiper-content-top1">PflegePur - Academy</div>
                    <div class="swiper-content-heading"> Herzlich Willkommen zum Online-Kurs "Demenz verstehen:
                        Unterstützung und Pflege"!</div>
                    <div class="swiper-content-data">
                        Häusliche Pflege umfasst die Unterstützung und Betreuung von
                        pflegebedürftigen Personen in ihrem eigenen Zuhause. Dies kann
                        sowohl durch Angehörige als auch durch professionelle Pflegekräfte
                        erfolgen.
                    </div>
                    <div class="swiper-content-btn"><button>Kostenlos</button></div>
                </div>
            </div>
        </a>
        <a style="text-decoration: none" target="_blank"
            href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-pflege-zu-hause-grundlagen-und-tipps-13bbb0bb">
            <div class="academy-page-card">
                <img src="{{ asset('assets/Images/Academy_page_slider_3_sm.svg') }}" alt="" />
                <div class="swiper-content">
                    <div class="swiper-content-top1">PflegePur - Academy</div>
                    <div class="swiper-content-heading">Unterstützung und Pflege</div>
                    <div class="swiper-content-data">
                        Demenz ist kein spezifisches Krankheitsbild, sondern ein allgemeiner
                        Begriff, der eine Vielzahl von Symptomen beschreibt, die mit einem
                        Verlust der kognitiven Funktionen – denken, erinnern und schließen –
                        einhergehen, welche stark genug sind, um den Alltag einer Person zu
                        beeinträchtigen. Es ist eine fortschreitende Erkrankung, was
                        bedeutet, dass die Symptome sich mit der Zeit verschlechtern.
                    </div>
                    <div class="swiper-content-btn"><button>Kostenlos</button></div>
                </div>
            </div>
        </a>
    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Academy_page_bottom_img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>

</html>
