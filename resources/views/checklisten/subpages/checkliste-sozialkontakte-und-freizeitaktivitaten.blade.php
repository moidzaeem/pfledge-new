<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<style>
    /* Media query for printing */
    @media print {
        .checklisten-section3-btn {
            display: none;
        }

        /* Hide the entire checkbox container if the checkbox is unchecked */
        .checklisten-checkbox-container input[type="checkbox"]:not(:checked) {
            display: none;
            /* Hide the checkbox */
        }

        /* Hide the title/heading (checklisten-section3-wrapper-heading) when the checkbox is unchecked */
        .checklisten-checkbox-container input[type="checkbox"]:not(:checked)~.checklisten-section3-wrapper-heading {
            display: none;
            /* Hide the corresponding title/heading */
        }
    }
</style>

<body>
    <div class="header-container service-header-bg"
        style="background-image: url('{{ asset('assets/Images/Checklisten_header_bg.svg') }}') !important">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Effiziente Unterstützung im Pflegealltag</span>
            <div>Checklisten</div>
        </div>
    </div>
    <!-- ######################## CHECKLISTEN PAGE SECTION 1 ######################## -->
    <div class="checklisten-section1">
        <div>
            Willkommen bei unseren umfassenden Checklisten für Pflegebedürftige und
            pflegende Angehörige. In der Pflege zählt jeder Handgriff, und eine gut
            organisierte Planung erleichtert den Alltag erheblich. Unsere
            Checklisten bieten Ihnen strukturierte und leicht umsetzbare Anleitungen
            für alle wichtigen Pflegethemen – von der täglichen Pflegeplanung bis
            hin zur Organisation von Arztbesuchen. Nutzen Sie unsere Checklisten, um
            den Pflegealltag zu optimieren und die bestmögliche Betreuung zu
            gewährleisten.
        </div>
    </div>

    <!-- ######################## CHECKLISTEN PAGE SECTION 2 ########################   -->

    <div class="checklisten-section2-top-btn-container">
        <button class="checklisten-section2-top-btn1 checklisten-top-btn " id="checklisten-top-btn1">
            <a href="{{ route('checklisten') }}"></a>
            MEDIKAMENTENMANAGEMENT
        </button>
        <button class="checklisten-section2-top-btn2 checklisten-top-btn " id="checklisten-top-btn2">
            <a href="{{ route('checklist.1') }}"></a>
            TERMINPLANUNG UND ARZTBESUCHE
        </button>
        <button class="checklisten-section2-top-btn3 checklisten-top-btn" id="checklisten-top-btn3">
            <a href="{{ route('checklist.2') }}"></a>
            HÄUSLICHE PFLEGE UND UNTERSTÜTZUNG
        </button>
        <button class="checklisten-section2-top-btn4 checklisten-top-btn active-btn" id="checklisten-top-btn4">
            <a href="{{ route('checklist.3') }}"></a>
            PSYCHISCHE UND SOZIALE UNTERSTÜTZUNG
        </button>
        <button class="checklisten-section2-top-btn5 checklisten-top-btn" id="checklisten-top-btn5">
            <a href="{{ route('checklist.4') }}"></a>
            FINANZIELLE UND RECHTLICHE ANGELEGENHEITEN
        </button>
        <button class="checklisten-section2-top-btn6 checklisten-top-btn" id="checklisten-top-btn6">
            <a href="{{ route('checklist.5') }}"></a>
            NOTFALLVORBEREITUNG
        </button>
        <button class="checklisten-section2-top-btn7 checklisten-top-btn" id="checklisten-top-btn7">
            <a href="{{ route('checklist.6') }}"></a>
            GESUNDHEITSÜBERWACHUNG
        </button>
    </div>

    <<div class="checklisten-section2-bottom-btn-container" id="checklisten-bottom-container4">
        <button class="checklisten-section2-bottom-btn41 check-bottom-btns check-active-btn"
            id="checklisten-bottom-btn41">
            Sozialkontakte und Freizeitaktivitäten
        </button>
        <button class="checklisten-section2-bottom-btn42 check-bottom-btns" id="checklisten-bottom-btn42">
            Psychologische Unterstützung und Beratung
        </button>
        <button class="checklisten-section2-bottom-btn43 check-bottom-btns" id="checklisten-bottom-btn43">
            Selbsthilfegruppen und Gemeinschaftsressourcen
        </button>
        </div>


        <!-- #################### Sozialkontakte und Freizeitaktivitäten form ###################   -->

        <form action="" class="check-listen-forms" id="psyc-form1">
            <div class="checklisten-section3-container">
                <div class="checklisten-section3-top1">
                    Checkliste Sozialkontakte und Freizeitaktivitäten
                </div>

                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            1. Ermittlung von Interessen und Vorlieben
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Liste der persönlichen Interessen und Hobbys erstellen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Neue Aktivitäten oder Interessen ausprobieren
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Vorlieben für Gruppen- oder Einzelaktivitäten notieren
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            2. Planung von regelmäßigen Aktivitäten
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Wöchentlicher oder monatlicher Kalender für Aktivitäten
                                erstellen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Feste Termine für soziale Treffen einplanen (z.B. Kaffeeklatsch,
                                Spieleabend)
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Teilnahme an regelmäßigen Kursen oder Gruppenaktivitäten (z.B.
                                Sportkurse, Handwerksgruppen)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            3. Pflege bestehender sozialer Kontakte
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Liste von Freunden und Familienmitgliedern führen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Regelmäßige Telefonanrufe oder Videochats einplanen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Besuche bei oder von Freunden und Familie organisieren
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Teilnahme an Familienfeiern und besonderen Anlässen
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            4. Teilnahme an Gemeinschaftsaktivitäten
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Mitgliedschaft in Vereinen oder Interessengruppen prüfen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Lokale Veranstaltungen und Feste besuchen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Freiwilligenarbeit oder ehrenamtliche Tätigkeiten in Erwägung
                                ziehen
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            5. Physische Aktivitäten einbinden
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Tägliche Spaziergänge oder leichte Sportübungen einplanen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Teilnahme an Sportgruppen oder Fitnesskursen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Tanzen oder andere bewegungsintensive Freizeitaktivitäten
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            6. Kulturelle und kreative Aktivitäten
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Museums- oder Ausstellungsbesuche planen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Teilnahme an Kunst- oder Musikworkshops
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Theater- oder Kinobesuche organisieren
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            7. Bildungsangebote nutzen
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Anmeldung zu Kursen oder Vorträgen an Volkshochschulen oder
                                Universitäten
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Online-Kurse und Webinare besuchen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Bibliotheksbesuche und Lesegruppen
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            8. Digitale Kommunikation und soziale Medien
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Nutzung von sozialen Medien zur Kontaktpflege (Facebook,
                                WhatsApp)
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Teilnahme an Online-Gruppen und Foren zu speziellen Interessen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Videotelefonie nutzen (Skype, Zoom) für virtuelle Treffen
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            9. Urlaub und Ausflüge planen
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Tagesausflüge oder Kurztrips organisieren
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Gemeinsame Urlaubsplanung mit Freunden oder Familie
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Teilnahme an organisierten Reisen oder Exkursionen
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            10. Selbstfürsorge und Entspannung
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Regelmäßige Zeiten für Entspannung und Erholung einplanen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Entspannungstechniken erlernen (Yoga, Meditation)
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Wellness- oder Spa-Besuche in den Alltag integrieren
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            11. Evaluierung und Anpassung
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Regelmäßige Überprüfung der Aktivitäten und Anpassung bei Bedarf
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Feedback von Freunden und Familie einholen
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Neue Aktivitäten ausprobieren und integrieren
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-bottom">
                    Diese Checkliste hilft dabei, ein abwechslungsreiches und erfülltes
                    Sozial- und Freizeitleben zu gestalten, das sowohl körperliche als
                    auch geistige Gesundheit fördert. Regelmäßige soziale Kontakte und
                    Freizeitaktivitäten tragen wesentlich zum Wohlbefinden und zur
                    Lebensqualität bei.
                </div>

                <div class="checklisten-section3-btn" onClick="printDiv('psyc-form1')"><button>Drucken</button></div>
            </div>
        </form>

        <!-- #################### Psychologische Unterstützung und Beratung form ###################   -->

        <form action="" class="check-listen-forms" id="psyc-form2">
            <div class="checklisten-section3-container">
                <div class="checklisten-section3-top1">
                    Checkliste Psychologische Unterstützung und Beratung
                </div>

                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            1. Erkennen des Bedarfs
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Selbstbeobachtung: Notieren Sie Ihre emotionalen und psychischen
                                Symptome wie anhaltende Traurigkeit, Angst, Stress oder
                                Schlaflosigkeit.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Veränderungen im Verhalten: Achten Sie auf Veränderungen in
                                Ihrem sozialen Verhalten, Essgewohnheiten oder Arbeitsleistung.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Rückmeldung von anderen: Hören Sie auf die Bedenken von Familie,
                                Freunden oder Kollegen bezüglich Ihrer mentalen Gesundheit.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            2. Art der Unterstützung festlegen
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Therapiearten: Informieren Sie sich über verschiedene
                                Therapieformen wie Verhaltenstherapie, Gesprächstherapie,
                                Paartherapie oder Familientherapie.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Selbsthilfegruppen: Überlegen Sie, ob der Austausch mit Menschen
                                in ähnlichen Situationen hilfreich sein könnte.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Beratungsdienste: Nutzen Sie Angebote wie telefonische Beratung,
                                Online-Beratung oder persönliche Beratungsgespräche.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            3. Professionelle Hilfe suchen
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Psychologen und Psychotherapeuten: Suchen Sie nach lizenzierten
                                Fachkräften in Ihrer Nähe oder online.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Hausärzte und Fachärzte: Konsultieren Sie Ihren Hausarzt, der
                                Sie gegebenenfalls an einen Spezialisten überweisen kann.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Kriseninterventionsdienste: Nutzen Sie Notrufnummern oder
                                Krisentelefone bei akuten psychischen Notlagen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            4. Informationsbeschaffung
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Recherche: Informieren Sie sich über psychische Erkrankungen und
                                Behandlungsoptionen durch vertrauenswürdige Quellen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Bibliotheken und Buchhandlungen: Lesen Sie Bücher und Artikel
                                zum Thema psychische Gesundheit.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Online-Ressourcen: Nutzen Sie Websites von
                                Gesundheitsorganisationen, Blogs und Foren.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            5. Vorbereitung auf das Beratungsgespräch
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Ziele definieren: Überlegen Sie, was Sie mit der Beratung oder
                                Therapie erreichen möchten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Fragen notieren: Schreiben Sie Fragen auf, die Sie Ihrem Berater
                                oder Therapeuten stellen möchten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Medizinische Unterlagen: Bringen Sie relevante medizinische
                                Unterlagen oder Medikamentenlisten mit.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            6. Erste Beratungstermine
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Terminvereinbarung: Machen Sie einen ersten Termin und achten
                                Sie auf Wartezeiten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Offenheit: Seien Sie ehrlich über Ihre Gefühle und Symptome.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Feedback geben: Geben Sie Rückmeldungen darüber, wie die
                                Beratung für Sie funktioniert und ob Sie sich wohlfühlen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            7. Regelmäßigkeit und Kontinuität
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Regelmäßige Sitzungen: Planen Sie regelmäßige Sitzungen und
                                halten Sie diese konsequent ein.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Fortschritte verfolgen: Notieren Sie Ihre Fortschritte und
                                besprechen Sie diese mit Ihrem Therapeuten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Geduld haben: Seien Sie geduldig mit dem Prozess, da
                                Veränderungen Zeit brauchen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            8. Zusätzliche Ressourcen nutzen
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Entspannungstechniken: Erlernen Sie Techniken wie Meditation,
                                Yoga oder Atemübungen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Sport und Bewegung: Integrieren Sie regelmäßige körperliche
                                Aktivität in Ihren Alltag.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Ernährung und Schlaf: Achten Sie auf eine ausgewogene Ernährung
                                und ausreichend Schlaf.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            9. Netzwerke und Unterstützungssysteme aufbauen
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Freunde und Familie: Bauen Sie ein starkes
                                Unterstützungsnetzwerk aus vertrauenswürdigen Personen auf.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Selbsthilfegruppen: Treten Sie lokalen oder
                                Online-Selbsthilfegruppen bei.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Gemeinschaftsressourcen: Nutzen Sie Angebote wie
                                Gemeinschaftszentren oder lokale Organisationen, die
                                Unterstützung anbieten.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            10. Krisenmanagement
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Notfallpläne: Erstellen Sie einen Plan für psychische Krisen,
                                einschließlich Notrufnummern und Anlaufstellen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Soforthilfe: Nutzen Sie sofort verfügbare Ressourcen bei akuten
                                Problemen, wie Notrufnummern und Online-Hilfeangebote.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-bottom">
                    Diese Checkliste soll Ihnen helfen, die richtigen Schritte zu
                    unternehmen, um psychologische Unterstützung und Beratung zu erhalten.
                    Denken Sie daran, dass es in Ordnung ist, Hilfe zu suchen, und dass
                    professionelle Unterstützung Ihnen helfen kann, Ihre psychische
                    Gesundheit zu verbessern.
                </div>

                <div class="checklisten-section3-btn" onClick="printDiv('psyc-form2')"><button>Drucken</button></div>
            </div>
        </form>

        <!-- #################### Selbsthilfegruppen und Gemeinschaftsressourcen form ###################   -->

        <form action="" class="check-listen-forms" id="psyc-form3">
            <div class="checklisten-section3-container">
                <div class="checklisten-section3-top1">
                    Checkliste Selbsthilfegruppen und Gemeinschaftsressourcen
                </div>

                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            1. Bedarfsermittlung
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Selbstreflexion: Überlegen Sie, welche Art von Unterstützung Sie
                                benötigen (emotionale Unterstützung, praktische Tipps, soziale
                                Kontakte).
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Ziele setzen: Definieren Sie Ihre Ziele für die Teilnahme an
                                einer Selbsthilfegruppe oder der Nutzung von
                                Gemeinschaftsressourcen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            2. Informationen sammeln
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Recherche: Nutzen Sie das Internet, um nach Selbsthilfegruppen
                                und Gemeinschaftsressourcen in Ihrer Nähe zu suchen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Empfehlungen einholen: Fragen Sie Ihren Arzt, Therapeuten oder
                                Sozialarbeiter nach Empfehlungen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Bibliotheken und Gemeindezentren: Besuchen Sie lokale
                                Bibliotheken und Gemeindezentren, die oft Informationen und
                                Broschüren über verfügbare Ressourcen haben.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            3. Selbsthilfegruppen finden
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Online-Verzeichnisse: Nutzen Sie Websites wie
                                selbsthilfegruppen.de oder die Seiten von
                                Gesundheitsorganisationen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Soziale Medien und Foren: Suchen Sie nach Gruppen auf
                                Plattformen wie Facebook, Reddit oder spezialisierten Foren.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Krankenhäuser und Kliniken: Erkundigen Sie sich bei örtlichen
                                Krankenhäusern und Kliniken, die oft Selbsthilfegruppen anbieten
                                oder Empfehlungen geben können.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            4. Gemeinschaftsressourcen identifizieren
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Gemeindezentren: Besuchen Sie lokale Gemeindezentren, die oft
                                verschiedene Programme und Aktivitäten anbieten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Wohlfahrtsverbände: Informieren Sie sich über Angebote von
                                Caritas, Diakonie oder anderen Wohlfahrtsorganisationen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Öffentliche Bibliotheken: Nutzen Sie Ressourcen und Programme
                                öffentlicher Bibliotheken.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            5. Kontaktaufnahme
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Erstkontakt herstellen: Kontaktieren Sie die Gruppenleiter oder
                                Ansprechpartner der gefundenen Gruppen und Ressourcen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Fragen stellen: Klären Sie, welche Voraussetzungen für die
                                Teilnahme bestehen und welche Erwartungen an die Mitglieder
                                gestellt werden.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Probetermine vereinbaren: Bitten Sie um die Möglichkeit, an
                                einem Probetreffen teilzunehmen, um die Gruppe kennenzulernen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            6. Teilnahme vorbereiten
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Ziele und Erwartungen: Bereiten Sie sich mental darauf vor, Ihre
                                Ziele und Erwartungen offen zu kommunizieren.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Fragen und Anliegen: Notieren Sie sich im Voraus Fragen oder
                                Anliegen, die Sie während des Treffens ansprechen möchten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Offenheit und Ehrlichkeit: Seien Sie bereit, offen und ehrlich
                                über Ihre Erfahrungen und Bedürfnisse zu sprechen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            7. Regelmäßige Teilnahme
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Kontinuität: Planen Sie regelmäßige Teilnahme an den Treffen, um
                                bestmögliche Unterstützung zu erhalten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Engagement: Beteiligen Sie sich aktiv an den Gruppendiskussionen
                                und Aktivitäten.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Feedback geben: Geben Sie der Gruppe Feedback, um zur
                                Verbesserung und Anpassung der Treffen beizutragen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            8. Zusätzliche Ressourcen nutzen
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Workshops und Seminare: Nutzen Sie angebotene Workshops und
                                Seminare, um zusätzliches Wissen und Fähigkeiten zu erwerben.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Online-Ressourcen: Ergänzen Sie Ihre Teilnahme durch
                                Online-Ressourcen wie Webinare, Artikel und Videos.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Fachliteratur: Lesen Sie Bücher und Artikel, die Ihnen helfen
                                können, Ihre Situation besser zu verstehen und zu bewältigen.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            9. Soziales Netzwerk erweitern
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Kontakte knüpfen: Nutzen Sie die Gruppe, um neue Kontakte zu
                                knüpfen und Ihr soziales Netzwerk zu erweitern.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Unterstützung anbieten: Bieten Sie anderen Gruppenmitgliedern
                                Ihre Unterstützung an, um eine gegenseitige Hilfsbereitschaft zu
                                fördern.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Gemeinsame Aktivitäten: Planen Sie gemeinsame Aktivitäten
                                außerhalb der regulären Treffen, um die Bindung zu stärken.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-sub-container">
                    <div class="checklisten-section3-wrapper">
                        <div class="checklisten-section3-wrapper-heading">
                            10. Krisenmanagement
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Notfallkontakte: Halten Sie Notfallkontakte bereit, falls Sie
                                außerhalb der Treffen dringende Unterstützung benötigen.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Krisenpläne: Entwickeln Sie einen persönlichen Krisenplan mit
                                Hilfe der Gruppe oder eines Beraters.
                            </div>
                        </div>
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Selbstfürsorge: Achten Sie auf Ihre eigene Selbstfürsorge und
                                nehmen Sie sich Zeit für Entspannung und Erholung.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checklisten-section3-bottom">
                    Diese Checkliste soll Ihnen helfen, die richtigen Schritte zu
                    unternehmen, um Selbsthilfegruppen und Gemeinschaftsressourcen zu
                    finden und effektiv zu nutzen. Denken Sie daran, dass der Austausch
                    und die Unterstützung durch andere Menschen in ähnlichen Situationen
                    eine wertvolle Ressource sein können.
                </div>

                <div class="checklisten-section3-btn" onClick="printDiv('psyc-form3')"><button>Drucken</button></div>
            </div>
        </form>


        <div style="width: 100%">
            <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
                src="{{ asset('assets/Images/Checklisten_bottom_img.svg') }}" alt="" />
        </div>

        @include('components.footer.footer_second')
        <script>
            // Function to hide unchecked checkboxes and their labels
            function prepareForPrint() {
            // Get all checkbox containers
            const checkboxes = document.querySelectorAll('.checklisten-checkbox-container');

            // Loop through each checkbox container
            checkboxes.forEach(function(checkboxContainer) {
                // Find the checkbox within the container
                // const checkbox = checkboxContainer.querySelector('input[type="checkbox"]');

                // // Find the heading ('.checklisten-section3-wrapper-heading') for this container's section
                // const heading = checkboxContainer.closest('.checklisten-section3-wrapper').querySelector(
                //     '.checklisten-section3-wrapper-heading');

                // // If the checkbox is not checked, hide its container and its heading
                // if (heading && !checkbox.checked) {
                //     heading.style.display = 'none'; // Hide the heading
                //     checkboxContainer.style.display = 'none'; // Hide the checkbox container
                // } else {
                //     // Ensure visible checkboxes remain visible (restore visibility)
                //     if (heading) heading.style.display = ''; // Ensure heading is visible
                //     checkboxContainer.style.display = ''; // Ensure checkbox container is visible
                // }
            });
        }



            // Function to reset visibility after printing (if you print multiple times in a session)
            function resetPrint() {
                const checkboxes = document.querySelectorAll('.checklisten-checkbox-container');
                checkboxes.forEach(function(checkboxContainer) {
                    checkboxContainer.style.display = ''; // Reset to original state
                });
            }

            function printDiv(divId) {
                prepareForPrint();
                var printContents = document.getElementById(divId).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                location.reload();
            }
        </script>
</body>

</html>
