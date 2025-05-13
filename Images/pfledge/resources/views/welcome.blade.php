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

            <div class="section1-left col-lg-7">
                <span class="section1-top1">Willkommen bei PflegePur!</span>
                <div class="section1-top2">Willkommen bei PflegePur!</div>
                <div class="section1-top3">
                    Ihr Partner für umfassende Pflege und Gesundheit
                </div>
                <div class="section1-top4">
                    Ob Sie nach aktuellen Blogbeiträgen, fundierten Büchern, hilfreichen
                    Online-Rechnern oder praktischen Checklisten suchen – bei PflegePur
                    finden Sie alles, was Sie brauchen. <br /><br />
                    Entdecken Sie unsere Academy, hören Sie in unseren Podcast rein, und
                    bleiben Sie immer auf dem Laufenden mit unserem kostenlosen
                    Newsletter und der PflegePur-App. <br /><br />
                    Wir begleiten Sie auf Ihrem Weg – kompetent, zuverlässig und
                    persönlich.
                </div>
                <div>
                    <button style="position: relative;"><a
                            style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                            href="https://pflegepur.de/newsletter.php" target="_blank"></a>Abonnieren Sie unseren
                        Newsletter</button>
                </div>
            </div>
            <div class="section1-right col-lg-5 d-none d-lg-block">
                <img src="{{ asset('assets/Images/Section1_img.svg') }}" alt="" />
            </div>
        </div>
    </div>

    <!-- ####################### SERVICE SECTION ###################### -->
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
        <!-- Desktop view: Flexbox layout for products -->
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
        <!-- #################### FOR MOBILE ################### -->
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

    <!-- ########################### SECTION 2 BUTTONS ########################### -->

    <div class="newsund-ratgeber-section1" style="margin-bottom: 4rem">
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
            Unser Blog bietet Ihnen wertvolle Einblicke, praxisnahe Informationen
            und inspirierende Geschichten aus dem Alltag der Pflege.
            <br /><br />Gemeinsam möchten wir die Pflege menschlicher, einfacher und
            verständlicher gestalten. <br /><br />Begleiten Sie uns auf diesem Weg!
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-12">
                    <a style="text-decoration: none" href="{{ route('blogs.show', $blog->slug) }}">
                        <!-- Blog Card Container -->
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="{{ Storage::url($blog->image) }}" alt="" class="img-fluid" />
                            </div>
                            <div class="blog-card-body">
                                <span
                                    class="blog-date">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d.m.Y') }}</span>
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
                                            <span class="blog-kate">{{ $category }}@if($key < count($categories) - 1), @endif</span>
                                        @endforeach
                                    </div>
                                    
                                <div class="blog-card-heading">
                                    {{ $blog->title }} <!-- Dynamically display marketplace name -->
                                </div>
                                <div class="blog-card-sub-heading">
                                    {{ Str::limit($blog->description, 150) }}
                                    <!-- Limit the content text for a preview -->
                                </div>
                            </div>
                            <button class="blog-card-btn mb-3">Weiterlesen</button>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <button style="position: relative;">
            <a style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;border-radius: 10px;"
                href="{{ route('blogs.index') }}"></a><span style="font-weight: bold"> Zu unserem
                Blog</span></button>
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
                                        <span class="blog-kate">{{ $category }}@if($key < count($categories) - 1), @endif</span>
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

    <!-- ###################### SECTION 3 #######################  -->

    <div class="container-fluid section1-container" style="width: 85%; margin-bottom: 2.5rem">
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
                <div>
                    <div class="text-center text-md-end">
                        <button style="position: relative;"><a style="position: relative;"><a
                                    style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                                    href="{{ route('partner') }}"></a>Erfahren Sie hier mehr!</button>
                    </div>
                </div>
            </div>

            <div class="section1-right col-md-5 mb-4 mb-md-0 mt-4 mt-md-0">
                <img style="border-radius: 20px; width: 100%; object-fit: cover"
                    src="{{ asset('assets/Images/Section3_img.svg') }}" alt="" />
            </div>
        </div>
    </div>

    @include('components.footer.footer_first')

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/index-bottom-img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>

</html>
