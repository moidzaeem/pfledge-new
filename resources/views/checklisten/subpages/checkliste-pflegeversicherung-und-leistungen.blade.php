<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

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
        <button class="checklisten-section2-top-btn4 checklisten-top-btn " id="checklisten-top-btn4">
            <a href="{{ route('checklist.3') }}"></a>
            PSYCHISCHE UND SOZIALE UNTERSTÜTZUNG
        </button>
        <button class="checklisten-section2-top-btn5 checklisten-top-btn active-btn" id="checklisten-top-btn5 ">
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

    <div class="checklisten-section2-bottom-btn-container" id="checklisten-bottom-container5">
        <button class="checklisten-section2-bottom-btn51 check-bottom-btns check-active-btn"
            id="checklisten-bottom-btn51">
            Pflegeversicherung und Leistungen
        </button>
        <button class="checklisten-section2-bottom-btn52 check-bottom-btns" id="checklisten-bottom-btn52">
            Beantragung von Hilfsmitteln und Zuschüssen
        </button>
        <button class="checklisten-section2-bottom-btn53 check-bottom-btns" id="checklisten-bottom-btn53">
            Rechtsberatung (Vollmachten, Patientenverfügungen)
        </button>
    </div>

    <form action="" class="check-listen-forms" id="fina-form1">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Pflegeversicherung und Leistungen
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Grundlegendes Verständnis der Pflegeversicherung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Gesetzliche Pflegeversicherung: Informieren Sie sich über die
                            gesetzliche Pflegeversicherung in Deutschland, die für alle
                            gesetzlich Versicherten obligatorisch ist.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Private Pflegeversicherung: Verstehen Sie die Unterschiede und
                            Vorteile einer privaten Pflegeversicherung, die ergänzend zur
                            gesetzlichen Pflegeversicherung abgeschlossen werden kann.
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Einstufung des Pflegegrades
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Antragstellung: Stellen Sie einen Antrag auf Pflegegrad bei der
                            Pflegekasse Ihrer Krankenversicherung.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Begutachtung: Bereiten Sie sich auf den Besuch des Medizinischen
                            Dienstes (MD) vor, der den Pflegebedarf und den entsprechenden
                            Pflegegrad ermittelt.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegegrad-Einteilung: Kennen Sie die fünf Pflegegrade, die den
                            Umfang der benötigten Hilfe und die entsprechenden Leistungen
                            definieren.
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Leistungen der Pflegeversicherung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegegeld: Finanzielle Unterstützung für die häusliche Pflege
                            durch Angehörige oder ehrenamtliche Helfer.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegesachleistungen: Professionelle Pflege durch ambulante
                            Pflegedienste.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kombinationsleistungen: Kombination aus Pflegegeld und
                            Pflegesachleistungen.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kurzzeitpflege: Zeitlich begrenzte stationäre Pflege,
                            beispielsweise nach einem Krankenhausaufenthalt.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verhinderungspflege: Ersatzpflege, wenn die reguläre
                            Pflegeperson vorübergehend ausfällt.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Teilstationäre Pflege: Tages- oder Nachtpflege in einer
                            Pflegeeinrichtung.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vollstationäre Pflege: Pflege in einem Pflegeheim.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zusätzliche Betreuungs- und Entlastungsleistungen: Zusätzliche
                            finanzielle Mittel für Betreuungsangebote und
                            Entlastungsangebote für pflegende Angehörige.
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Zuschüsse und Hilfsmittel
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wohnumfeldverbessernde Maßnahmen: Zuschüsse für den
                            barrierefreien Umbau der Wohnung.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegehilfsmittel: Kostenübernahme für Hilfsmittel wie
                            Pflegebetten, Rollstühle oder Hausnotrufsysteme.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anträge und Nachweise: Sammeln und Einreichen der notwendigen
                            Anträge und Nachweise bei der Pflegekasse.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klären Sie weitere Schritte und ggf. erforderliche
                            Untersuchungen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Beratungsangebote nutzen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegeberatungsbesuche: Regelmäßige Beratungsbesuche durch einen
                            Pflegeberater, die bei Inanspruchnahme von Pflegegeld
                            verpflichtend sind.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegestützpunkte: Regionale Anlaufstellen für umfassende
                            Beratung rund um das Thema Pflege.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Online-Ressourcen: Nutzung von Informationsportalen wie
                            pflege.de oder der Webseite des Bundesministeriums für
                            Gesundheit.
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Pflegevertrag und Kostenübernahme
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegevertrag: Abschluss eines Pflegevertrages mit dem
                            Pflegedienst oder der Pflegeeinrichtung.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kostenübernahme: Klären Sie die Übernahme der Pflegekosten durch
                            die Pflegeversicherung und eventuelle Eigenanteile.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Eigenanteile: Berechnen Sie die Eigenanteile, die bei der
                            Inanspruchnahme von Pflegesachleistungen oder stationärer Pflege
                            anfallen können.
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Steuerliche Aspekte
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegekosten absetzen: Informieren Sie sich über die
                            Möglichkeiten, Pflegekosten steuerlich geltend zu machen.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anträge beim Finanzamt: Einreichen der entsprechenden Nachweise
                            und Anträge beim Finanzamt.
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Weiterbildung und Schulung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegekurse: Teilnahme an Pflegekursen für pflegende Angehörige,
                            die von den Pflegekassen angeboten werden.
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
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Rechtsansprüche und Widerspruchsverfahren
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rechtsansprüche kennen: Informieren Sie sich über Ihre Rechte
                            und Ansprüche als Pflegebedürftiger oder pflegender Angehöriger.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Widerspruch einlegen: Bei Unstimmigkeiten oder Ablehnungen
                            können Sie Widerspruch gegen die Entscheidung der Pflegekasse
                            einlegen.
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Krisenmanagement und Notfallpläne
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallkontakte: Halten Sie Notfallkontakte und wichtige
                            Telefonnummern bereit.
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Krisenpläne entwickeln: Erstellen Sie einen Plan für den Fall,
                            dass die reguläre Pflegeperson ausfällt oder eine akute
                            Verschlechterung des Gesundheitszustands eintritt.
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste soll Ihnen helfen, sich im Bereich der
                Pflegeversicherung und der damit verbundenen Leistungen
                zurechtzufinden und die bestmögliche Unterstützung zu erhalten. Nutzen
                Sie alle verfügbaren Ressourcen und Beratungsangebote, um eine
                optimale Pflege zu gewährleisten.
            </div>

            <div class="checklisten-section3-btn"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Beantragung von Hilfsmitteln und Zuschüssen form ###################   -->

    <form action="" class="check-listen-forms" id="fina-form2">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Beantragung von Hilfsmitteln und Zuschüssen
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
                            Feststellung des individuellen Bedarfs an Hilfsmitteln durch den
                            behandelnden Arzt oder Therapeuten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Dokumentation der medizinischen Notwendigkeit für das
                            Hilfsmittel
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überprüfung, ob das Hilfsmittel von der Krankenkasse oder
                            anderen Stellen bezuschusst wird
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Ärztliche Verordnung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Einholung einer ärztlichen Verordnung oder eines Rezepts für das
                            benötigte Hilfsmittel
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Genaue Bezeichnung und Spezifikationen des Hilfsmittels auf dem
                            Rezept sicherstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kopie der ärztlichen Verordnung für die eigenen Unterlagen
                            erstellen
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Kostenvoranschlag einholen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kontaktaufnahme mit verschiedenen Anbietern von Hilfsmitteln, um
                            Kostenvoranschläge einzuholen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vergleich der Angebote in Bezug auf Preis, Qualität und Service
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Auswahl des passenden Anbieters für das Hilfsmittel
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Antrag bei der Krankenkasse
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Antrag auf Kostenübernahme bei der Krankenkasse oder Pflegekasse
                            einreichen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ärztliche Verordnung, Kostenvoranschlag und gegebenenfalls
                            weitere medizinische Unterlagen beifügen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bestätigung des Eingangs des Antrags von der Krankenkasse
                            anfordern
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Prüfung durch die Krankenkasse
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bearbeitungsstatus des Antrags regelmäßig bei der Krankenkasse
                            nachfragen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Bedarf zusätzliche Informationen oder Unterlagen nachreichen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Entscheidung der Krankenkasse über die Kostenübernahme abwarten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Alternativen bei Ablehnung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Widerspruch gegen die Ablehnung des Antrags einlegen, wenn
                            notwendig
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Unterstützung durch den behandelnden Arzt oder eine
                            Beratungsstelle einholen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alternativen zur Finanzierung prüfen (z.B. Sozialhilfe,
                            Stiftungen, Spendenaktionen)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Beschaffung des Hilfsmittels
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nach Genehmigung durch die Krankenkasse das Hilfsmittel beim
                            ausgewählten Anbieter bestellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Termin für die Lieferung und Einweisung in die Nutzung des
                            Hilfsmittels vereinbaren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Prüfung des Hilfsmittels auf Vollständigkeit und Funktionalität
                            bei der Lieferung
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Nutzung und Wartung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anleitung zur Nutzung des Hilfsmittels gründlich durchlesen und
                            beachten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Wartung und Pflege des Hilfsmittels sicherstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Defekten oder Problemen den Anbieter oder die Krankenkasse
                            kontaktieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Dokumentation und Abrechnung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle Rechnungen, Zahlungsbelege und Korrespondenzen mit der
                            Krankenkasse aufbewahren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung der Abrechnung durch die Krankenkasse
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nachweis über die Eigenbeteiligung (falls erforderlich)
                            dokumentieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Zuschüsse und finanzielle Unterstützung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Weitere Zuschussmöglichkeiten prüfen (z.B. Pflegekasse,
                            Sozialamt, Stiftungen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anträge auf zusätzliche finanzielle Unterstützung rechtzeitig
                            stellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beratung durch Sozialarbeiter oder spezialisierte
                            Beratungsstellen in Anspruch nehmen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        11. Regelmäßige Überprüfung des Bedarfs
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überprüfung des Hilfsmittelbedarfs in regelmäßigen Abständen
                            oder bei Veränderungen des Gesundheitszustands
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassung oder Austausch des Hilfsmittels bei Bedarf beantragen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei langfristiger Nutzung des Hilfsmittels erneute Überprüfung
                            der Kostenübernahme durch die Krankenkasse
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste unterstützt dabei, den Prozess der Beantragung von
                Hilfsmitteln und Zuschüssen strukturiert und effizient zu gestalten,
                um sicherzustellen, dass die benötigte Unterstützung rechtzeitig und
                in vollem Umfang zur Verfügung steht.
            </div>

            <div class="checklisten-section3-btn"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Rechtsberatung (Vollmachten, Patientenverfügungen) form ###################   -->

    <form action="" class="check-listen-forms" id="fina-form3">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Rechtsberatung (Vollmachten, Patientenverfügungen)
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Grundlagen und Vorbereitung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Informationen über Vollmachten und Patientenverfügungen einholen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Unterschiede zwischen den verschiedenen Arten von Vollmachten
                            verstehen (z.B. Vorsorgevollmacht, Generalvollmacht)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zweck und Bedeutung einer Patientenverfügung klären
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Persönliche Wünsche und Vorstellungen bezüglich medizinischer
                            und rechtlicher Entscheidungen festhalten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Rechtsanwalt oder Notar konsultieren
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Einen Termin bei einem spezialisierten Rechtsanwalt oder Notar
                            vereinbaren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle notwendigen Unterlagen und persönlichen Notizen zum Termin
                            mitbringen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen zur Erstellung und Gültigkeit von Vollmachten und
                            Patientenverfügungen vorbereiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klärung der Kosten und Honorare für die rechtliche Beratung
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Erstellung von Vollmachten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Festlegen, welche Art von Vollmacht benötigt wird
                            (Vorsorgevollmacht, Generalvollmacht, Betreuungsverfügung)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vertrauenswürdige Person(en) als Bevollmächtigte auswählen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Besprechung der genauen Befugnisse und Grenzen der Vollmacht mit
                            dem Rechtsanwalt
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vollmacht schriftlich aufsetzen und notariell beglaubigen
                            lassen, wenn nötig
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Erstellung einer Patientenverfügung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Eigene Wünsche und Vorstellungen zur medizinischen Behandlung in
                            bestimmten Situationen festlegen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klärung von lebensverlängernden Maßnahmen, Schmerzbehandlung und
                            Organspende
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beratung durch einen Arzt oder medizinischen Fachmann zur
                            medizinischen Relevanz der Verfügung einholen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beratung durch einen Arzt oder medizinischen Fachmann zur
                            medizinischen Relevanz der Verfügung einholen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Aufbewahrung und Verteilung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Originale der Vollmachten und Patientenverfügungen sicher
                            aufbewahren (z.B. in einem Tresor oder bei einem Notar)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kopien der Dokumente an wichtige Personen verteilen
                            (Bevollmächtigte, Familienangehörige, Hausarzt)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Eine Liste der Dokumente und deren Aufbewahrungsort erstellen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Regelmäßige Überprüfung und Aktualisierung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Jährliche Überprüfung der Vollmachten und Patientenverfügungen
                            auf Aktualität und Relevanz
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Änderungen oder Anpassungen bei geänderten Lebensumständen
                            vornehmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rechtsanwalt oder Notar über alle Änderungen informieren und
                            neue Dokumente erstellen lassen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Kommunikation und Information
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bevollmächtigte und Familienangehörige über den Inhalt und die
                            Bedeutung der Dokumente informieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Besprechung der getroffenen Entscheidungen und Wünsche im
                            familiären Kreis
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sicherstellen, dass alle relevanten Personen wissen, wo die
                            Dokumente aufbewahrt werden
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Notfallvorsorge
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallkarte mit Hinweis auf Vollmachten und Patientenverfügung
                            erstellen und bei sich tragen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Arzt und Pflegepersonal über das Vorhandensein einer
                            Patientenverfügung informieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sicherstellen, dass Bevollmächtigte im Notfall schnell
                            erreichbar sind
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Dokumentation und Verwaltung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Eine Liste aller wichtigen rechtlichen Dokumente führen
                            (Testament, Vollmachten, Patientenverfügung)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle Änderungen und Aktualisierungen in einer übersichtlichen
                            Form dokumentieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Sicherungskopien der Dokumente erstellen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Zusätzliche Rechtsberatung bei Bedarf
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Unsicherheiten oder komplexen rechtlichen Fragen zusätzliche
                            Beratung einholen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beratung durch spezialisierte Stellen oder Selbsthilfegruppen
                            nutzen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Weiterbildung zu rechtlichen Themen, um auf dem
                            neuesten Stand zu bleiben
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, die notwendigen rechtlichen Schritte zur
                Erstellung von Vollmachten und Patientenverfügungen zu strukturieren
                und sicherzustellen, dass alle relevanten Aspekte berücksichtigt
                werden. Eine sorgfältige Planung und Dokumentation trägt dazu bei,
                dass persönliche Wünsche respektiert und rechtliche Angelegenheiten im
                Ernstfall reibungslos geregelt werden können.
            </div>

            <div class="checklisten-section3-btn"><button>Drucken</button></div>
        </div>
    </form>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Checklisten_bottom_img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>

</html>
