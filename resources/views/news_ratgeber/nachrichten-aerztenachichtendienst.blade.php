<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="
        background-image: url('{{ asset('assets/Images/Newundrateger_header_bg.svg') }}') !important;
      ">
        @include('components.header.header')
        <div class="service-header-content">
            <span>Aktuelle Nachrichten vom Ärztenachrichtendienst</span>
            <div>News und Ratgeber</div>
        </div>
    </div>

    <!-- ########################### NEWS UND RATGEBER SECTION 1 ########################### -->

    <div class="newsund-ratgeber-section1">
        <div class="newsund-ratgeber-btn-top">
            <div class="newsund-btn1 newsund-btn">
                <button><a href="./newsundratgeber.html">News</a></button>
            </div>
            <div class="newsund-btn2 newsund-btn">
                <button>
                    <a style="color: #b22222" href="{{route('ratgeber')}}">Ratgeber</a>
                </button>
            </div>
        </div>

        <div class="newsund-ratgeber-btn-bottom">
            <div style="display: flex; gap: 0.7rem">
                <div class="newsund-btn3 newsund-btn">
                    <a href="{{ route('achrichten') }}">
                        <button id="news-bottom-btn1 " class="news-und-btns ">
                            Ärztezeitung
                        </button>
                    </a>
                </div>
                <div class="newsund-btn4 newsund-btn">
                    <a href="{{ route('nachrichten') }}">
                        <button class="news-und-btns news-active-btn" id="news-bottom-btn2">
                            Ärztenachrichtendienst
                        </button>
                    </a>
                </div>
            </div>
            <div class="newsund-btn5 newsund-btn text-center">
                <a href="{{ route('nachrichten.bundesministerium') }}">
                    <button class="news-und-btns" id="news-bottom-btn3">
                        Bundesministerium für Gesundheit (BMG)
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- ########################### NEWS UND RATGEBER SECTION 2 ########################### -->
    <div class="newsund-section2">
        <!-- ######################## Ärztezeitung CONTENT ######################## -->
        <div class="newund-section2-row row" id="newsund-section2-content1">
            <div class="col-12">
                <div class="row">
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
                                        <a href="'https://www.aend.de/"
                                            target="_blank">www.aend.de</a>
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
        </div>

        <!-- ######################## Ärztenachrichtendienst CONTENT ######################## -->
        <div class="newund-section2-row row" id="newsund-section2-content2">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Optimierte Therapie für Kreuzbandverletzungen
                            </div>
                            <div class="newsund-section2-card-content">
                                Derzeit beruht die Therapieplanung von Knieverletzungen auf
                                statischen Bildgebungen wie MRT, CT oder Röntgen. Eine im
                                Projekt Plank entwickelte Simulation ermöglicht es nun, die
                                optimale Position zur Fixierung des Kreuzbandes auf Basis
                                dynamischer Modellierungen zu finden – dadurch würden
                                Folgeschäden verhindert.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 29.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Kontinuierliches Glukosemanagement auch bei Diabetes Typ 2!
                                wieder ab
                            </div>
                            <div class="newsund-section2-card-content">
                                Technische Lösungen wie das kontinuierliche Glukosemanagement
                                (CGM) sollten auch bei Menschen mit Diabetes Typ 2 verstärkt
                                eingesetzt werden. Dafür setzte sich der Hamburger Diabetologe
                                Dr. Jens Kröger auf einer Online-Pressekonferenz der Deutschen
                                Diabetes Hilfe ein.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 29.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Wie männliches Geschlecht das kardiovaskuläre Risiko
                                beeinflusst
                            </div>
                            <div class="newsund-section2-card-content">
                                Soziokulturelle Normen und daraus entstehender Druck kann
                                individuelles Verhalten, Vorlieben und Vorstellungen
                                beeinflussen – so die These. Diese haben Forschende
                                untersucht, indem sie den Zusammenhang zwischen dem Ausdruck
                                männlicher Geschlechtsidentität und dem Umgang mit
                                kardiovaskulärer Erkrankungen analysierten.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 29.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Neue Daten stützen Immuntherapie nach Zystektomie
                            </div>
                            <div class="newsund-section2-card-content">
                                Patienten mit muskelinvasivem Harnblasenkarzinom (MIUC), die
                                trotz radikaler Zystektomie ein hohes Rückfallrisiko haben,
                                können von einer Immuntherapie mit dem PD1-Blocker Nivolumab
                                profitieren. Das bestätigen neue Ergebnisse der “CheckMate
                                274”-Phase 3-Studie.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 29.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Unbewusste Augenbewegungen optimieren das Sehen
                            </div>
                            <div class="newsund-section2-card-content">
                                Bonner Forschende haben untersucht, wie das scharfe Sehen mit
                                diesen winzigen Augenbewegungen und der Anordnung der Zapfen
                                zusammenhängt. Mit Hilfe hochauflösender Bildgebung und
                                Mikro-Psychophysik konnten sie zeigen, wie scharfes Sehen und
                                Bewegung der Augen zusammenhängen.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 29.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Myopathie und Ptosis bei kleinem Mädchen
                            </div>
                            <div class="newsund-section2-card-content">
                                Myopathien können zahlreiche Ursachen haben und in einem
                                Artikel stellt ein Team aus Polen den Fall eines kleinen
                                Mädchens vor, das ohne Vorerkrankungen mit knapp drei Jahren
                                unspezifische okuläre Symptome sowie eine proximale Myopathie
                                entwickelte – eine interdisziplinäre Herausforderung.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 28.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Kombi-Impfung auch mit adjuvantiertem Influenza-Impfstoff bei
                                Älteren sicher
                            </div>
                            <div class="newsund-section2-card-content">
                                Der kombinierte Schutz vor Grippe und Gürtelrose für Menschen
                                ab 65 Jahren ist auch mit Impfstoffen sicher möglich, die
                                neuere Adjuvanzien ohne Aluminium enthalten. Zu diesem Schluss
                                kommt eine aktuelle US-Studie.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 28.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Obacht vor Verlust der Muskelmasse
                            </div>
                            <div class="newsund-section2-card-content">
                                In einem aktuellen Leitartikel in The Lancet hat ein Team von
                                Kliniken und Forscherinnen ein Thema in den Fokus gerückt, das
                                ihnen zufolge im Rahmen der zunehmenden Verschreibung von
                                GLP-1-Agonisten zu wenig adressiert werde, und zwar der
                                Verlust an Muskelmasse.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 28.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newsund-section2-card">
                            <div class="newsund-section2-card-heading">
                                Wer jung schlecht schläft, altert womöglich schneller
                            </div>
                            <div class="newsund-section2-card-content">
                                Zwischen Schlaf und neurodegenerativen Erkrankungen besteht
                                ein enger Zusammenhang. Ergebnisse einer aktuellen
                                Beobachtungs- und Bildgebungsstudie weisen darauf hin, dass
                                schlechter Schlaf schon in jüngerem Alter Alterungsprozesse im
                                Gehirn beschleunigt.
                            </div>
                            <div class="newsund-section2-card-bottom">
                                <div class="newsund-section2-card-date">
                                    Datum: 28.10.2024 <br />
                                    Quelle:
                                    <a href="https://bundesgesundheitsministerium.de"
                                        target="_blank">www.aerztezeitung.de</a>
                                </div>
                                <div>
                                    <button>
                                        <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                            target="_blank"></a>Weiterlesen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Newundrateger_bottom.svg') }}" alt="" />
    </div>
    @include('components.footer.footer_second')

</body>

</html>
