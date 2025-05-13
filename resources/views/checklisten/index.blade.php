<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<style>
    /* Media query for printing */
    @media print {
        .checklisten-section3-btn {
            display: none;
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
        <button class="checklisten-section2-top-btn1 checklisten-top-btn active-btn" id="checklisten-top-btn1">
            <a href="{{ route('checklisten') }}"></a>
            MEDIKAMENTENMANAGEMENT
        </button>
        <button class="checklisten-section2-top-btn2 checklisten-top-btn" id="checklisten-top-btn2">
            <a href="{{ route('checklist.1') }}"></a>
            TERMINPLANUNG UND ARZTBESUCHE
        </button>
        <button class="checklisten-section2-top-btn3 checklisten-top-btn" id="checklisten-top-btn3">
            <a href="{{ route('checklist.2') }}"></a>
            HÄUSLICHE PFLEGE UND UNTERSTÜTZUNG
        </button>
        <button class="checklisten-section2-top-btn4 checklisten-top-btn" id="checklisten-top-btn4">
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

    <div class="checklisten-section2-bottom-btn-container" id="checklisten-bottom-container1">
        <button class="checklisten-section2-bottom-btn11 check-bottom-btns check-active-btn"
            id="checklisten-bottom-btn11">
            Medikamentenliste und Dosierungen
        </button>
        <button class="checklisten-section2-bottom-btn12 check-bottom-btns" id="checklisten-bottom-btn12">
            Medikamentenaufbewahrung
        </button>
        <button class="checklisten-section2-bottom-btn13 check-bottom-btns" id="checklisten-bottom-btn13">
            Einnahmezeiten und -methoden
        </button>
        <button class="checklisten-section2-bottom-btn14 check-bottom-btns" id="checklisten-bottom-btn14">
            Verschreibungserneuerungen und Apothekenkontakte
        </button>
    </div>

    <!-- ######################## CHECKLISTEN PAGE SECTION 3 ########################   -->

    <!-- #################### Medikamentenliste und Dosierungen form ###################   -->

    <form action="" class="check-listen-forms" id="medi-form1">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Medikamentenliste und Dosierungen
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Erstellung und Pflege der Medikamentenliste
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle aktuellen Medikamente auflisten, inklusive:
                            <ul class="mt-3">
                                <li>Name des Medikaments</li>
                                <li>Dosierung (Menge und Häufigkeit)</li>
                                <li>Einnahmezeitpunkte (z.B. morgens, mittags, abends)</li>
                                <li>Zweck/Grund der Einnahme</li>
                            </ul>
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verschreibende Ärzte für jedes Medikament notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Apotheke und Kontaktinformationen notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßig aktualisieren und Änderungen dokumentieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Organisation der Medikamente
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente in der Originalverpackung aufbewahren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verwendung eines wöchentlichen Pillenorganizers erwägen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Lagerungshinweise beachten (z.B. Temperatur, Lichtschutz)
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Einnahme und Verwaltung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Erinnerungen für die Einnahme der Medikamente einrichten
                            (Wecker, Apps)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überprüfen, ob die Medikamente vor oder nach dem Essen
                            eingenommen werden müssen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sicherstellen, dass genügend Wasser zur Einnahme zur Verfügung
                            steht
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Dokumentation der Einnahme (z.B. in einem Medikamententagebuch)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Besondere Anweisungen und Vorsichtsmaßnahmen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nebenwirkungen und mögliche Wechselwirkungen notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überprüfen, ob bestimmte Lebensmittel oder Aktivitäten vermieden
                            werden müssen
                        </div>
                    </div>

                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hinweise zur Einnahme (z.B. nicht zerkauen, nicht zerbrechen)
                            beachten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Allergien oder Unverträglichkeiten dokumentieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Notfälle und Vergessene Dosen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Plan für vergessene Dosen erstellen (z.B. sofort nachholen oder
                            überspringen?)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallkontakte und -informationen bereithalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anzeichen einer Überdosierung kennen und Notfallmaßnahmen planen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Kommunikation und Rücksprache mit Ärzten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Arzttermine zur Überprüfung der Medikation
                            vereinbaren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen oder Bedenken bezüglich der Medikation mit dem Arzt
                            besprechen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Über neue Symptome oder Nebenwirkungen informieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Dokumentation und Aufbewahrung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kopien der Medikamentenliste an zentralen Orten aufbewahren
                            (z.B. Kühlschrank, Pflegemappe)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallkarte mit wichtigen Medikamenteninformationen mitführen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung und Aktualisierung der Dokumentation
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, die Medikamenteneinnahme sicher und
                organisiert zu gestalten, um die Gesundheit und das Wohlbefinden des
                Pflegebedürftigen zu gewährleisten.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('medi-form1')"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Medikamentenaufbewahrung form ###################   -->

    <form action="" class="check-listen-forms" id="medi-form2">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1" style="word-break: break-all">
                Checkliste Medikamentenaufbewahrung
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Allgemeine Aufbewahrung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente in der Originalverpackung aufbewahren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Lagerungshinweise auf dem Etikett beachten (z.B. Kühl, trocken,
                            lichtgeschützt)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente außer Reichweite von Kindern und Haustieren
                            aufbewahren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Spezifische Lagerungsanforderungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Temperaturanforderungen überprüfen:
                            <ul class="mt-3">
                                <li>Raumtemperatur (15-25°C)</li>
                                <li>Kühlschranktemperatur (2-8°C)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anweisungen zu Lichtschutz beachten (Medikamente in dunklen
                            Behältern oder Schränken aufbewahren)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verwendung eines wöchentlichen Pillenorganizers erwägen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Feuchtigkeitsschutz gewährleisten (Medikamente nicht im
                            Badezimmer aufbewahren)
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Organisation und Übersichtlichkeit
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente in einem speziellen Schrank oder einer Schublade
                            aufbewahren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ähnliche Medikamente zusammen lagern (z.B. nach
                            Einnahmezeitpunkt oder Zweck sortieren)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verfallsdaten regelmäßig überprüfen und abgelaufene Medikamente
                            entsorgen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamentenliste und Dosierungsanweisungen an einem sichtbaren
                            Ort aufbewahren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Sicherheit und Notfallvorsorge
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente in abschließbaren Schränken oder Boxen aufbewahren,
                            wenn Kinder oder unbefugte Personen im Haushalt sind
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallmedikamente separat und leicht zugänglich lagern
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Telefonnummern für Giftnotrufzentralen griffbereit halten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Reise und Transport
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente in einer speziellen Reisetasche oder Box
                            transportieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Flugreisen Medikamente im Handgepäck mitführen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Für Reisen in heiße oder kalte Klimazonen geeignete
                            Aufbewahrungsmöglichkeiten nutzen (z.B. Kühlpacks,
                            Thermotaschen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verschreibungen oder ärztliche Bescheinigungen mitführen,
                            insbesondere bei internationalen Reisen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Spezieller Umgang mit bestimmten Medikamenten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hinweise zur Lagerung von Flüssigmedikamenten und Suspensionen
                            beachten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Besondere Vorsicht bei der Aufbewahrung von Betäubungsmitteln
                            und kontrollierten Substanzen walten lassen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Inhalationsgeräte, Insulinpens und andere spezielle
                            Applikationsformen sachgerecht aufbewahren und reinigen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Entsorgung von Medikamenten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Abgelaufene oder nicht mehr benötigte Medikamente sachgerecht
                            entsorgen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rückgabemöglichkeiten bei Apotheken nutzen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente nicht über den Hausmüll oder die Toilette entsorgen
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-bottom">
                Diese Checkliste sorgt für eine sichere und ordnungsgemäße
                Aufbewahrung von Medikamenten, um die Wirksamkeit zu erhalten und
                gesundheitliche Risiken zu minimieren.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('medi-form2')"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Einnahmezeiten und methoden form ###################   -->

    <form action="" class="check-listen-forms" id="medi-form3">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Einnahmezeit und -methoden
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Erstellung eines Einnahmeplans
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamentenliste mit Einnahmezeiten erstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Unterschiedliche Medikamente und ihre jeweiligen Einnahmezeiten
                            notieren (morgens, mittags, abends, vor dem Schlafengehen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Einnahmehäufigkeit für jedes Medikament festlegen (täglich,
                            wöchentlich, monatlich)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Plan an einem gut sichtbaren Ort aufbewahren (z.B. Kühlschrank,
                            Medikamentenschrank)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Methoden zur Einnahmeerinnerung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wecker oder Alarme auf dem Handy oder einer Uhr einstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verwendung von Medikamenten-Apps oder digitalen Pillenboxen zur
                            Erinnerung
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Angehörige oder Pflegekräfte in den Einnahmeplan einbeziehen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Visuelle Hilfsmittel wie Kalender oder Checklisten verwenden
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Einnahmearten und -techniken
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Tabletten/Kapseln:
                            <div class="checklisten-checkbox-container mt-3 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Mit ausreichend Wasser einnehmen
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-2 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Hinweise beachten, ob sie gekaut, geschluckt oder aufgelöst
                                    werden müssen
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Flüssigmedikamente:
                            <div class="checklisten-checkbox-container mt-3 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Mit beiliegendem Messbecher oder Löffel dosieren
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-2 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Vor Gebrauch schütteln, falls erforderlich
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Inhalatoren:
                            <div class="checklisten-checkbox-container mt-3 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Richtige Inhalationstechnik anwenden (z.B. Tief einatmen,
                                    Gerät auslösen, Atem anhalten)
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-2 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Regelmäßig reinigen und kontrollieren
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflaster:
                            <div class="checklisten-checkbox-container mt-3 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Auf saubere, trockene Haut aufkleben
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-2 ms-1">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Stelle regelmäßig wechseln, um Hautreizungen zu vermeiden
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Einnahmezeiten und Essgewohnheiten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamente, die vor, während oder nach dem Essen eingenommen
                            werden müssen, kennzeichnen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ernährungshinweise beachten (z.B. keine Milchprodukte, Alkohol
                            vermeiden)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kompatibilität mit Mahlzeiten planen (z.B. morgens nach dem
                            Frühstück)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Besondere Anweisungen und Vorsichtsmaßnahmen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anweisungen des Arztes oder Apothekers genau befolgen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hinweise auf Nebenwirkungen und Wechselwirkungen mit anderen
                            Medikamenten beachten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßig Überprüfen, ob es Änderungen in der Medikation gibt
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Dokumentation der Einnahme
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Einnahme in einem Medikamententagebuch festhalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Datum, Uhrzeit und eventuelle Bemerkungen notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei vergessenen Dosen den Arzt kontaktieren und Anweisungen
                            befolgen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Kommunikation und Rücksprache
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen oder Unsicherheiten bezüglich der Einnahmezeiten oder
                            -methoden mit dem Arzt oder Apotheker klären
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Änderungen oder neue Symptome sofort melden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung und Anpassung des Einnahmeplans in
                            Absprache mit dem Arzt
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, die Medikamenteneinnahme strukturiert
                und sicher zu gestalten, um die Wirksamkeit der Therapie zu
                gewährleisten und gesundheitliche Risiken zu minimieren.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('medi-form3')"><button>Drucken</button></div>
        </div>
    </form>
    <!-- ####################  Verschreibungserneuerungen und Apothekenkontakte form ###################   -->

    <form action="" class="check-listen-forms" id="medi-form4">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Verschreibungserneuerung und Apothekenkontakte
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Überblick über Verschreibungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Liste aller aktuellen Verschreibungen erstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verschreibungsdetails notieren (Name des Medikaments, Dosierung,
                            Häufigkeit)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verschreibungsdatum und Ablaufdatum festhalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Name und Kontaktinformationen des verschreibenden Arztes
                            notieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Verschreibungserneuerungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Erinnerung für die Erneuerung von Verschreibungen einrichten
                            (Kalender, App)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Benötigte Dokumente und Informationen für die Erneuerung
                            vorbereiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verschreibung rechtzeitig beim Arzt oder online erneuern
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Prüfung auf mögliche Veränderungen in der Dosierung oder
                            Medikation durch den Arzt
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Apothekenkontakte
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Liste der bevorzugten Apotheken mit Kontaktinformationen
                            erstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Öffnungszeiten und spezielle Dienstleistungen der Apotheken
                            notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Online-Apotheken und deren Lieferzeiten sowie Versandkosten
                            überprüfen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallkontakte für 24-Stunden-Apotheken bereithalten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Kommunikation mit Apotheken
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung und Aktualisierung der
                            Medikamentenvorräte
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Mit der Apotheke über mögliche Generika oder alternative
                            Medikamente sprechen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Apotheker über alle eingenommenen Medikamente informieren, um
                            Wechselwirkungen zu vermeiden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen zur Einnahme, Lagerung und Nebenwirkungen der Medikamente
                            mit dem Apotheker klären
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Abholung und Lieferung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamentenabholung planen oder eine Vertrauensperson dafür
                            bestimmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nutzung von Lieferdiensten für Medikamente prüfen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sicherstellen, dass jemand zu Hause ist, um die Lieferung
                            entgegenzunehmen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Dokumentation und Verwaltung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kopien aller Verschreibungen und Bestellbestätigungen
                            aufbewahren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Einnahmeplan und Medikamentenliste regelmäßig aktualisieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verfallsdaten der Medikamente überprüfen und abgelaufene
                            Medikamente sicher entsorgen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Versicherungs- und Zahlungsangelegenheiten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überprüfung der Versicherungsdeckung für Medikamente
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klärung der Zahlungsmodalitäten mit der Apotheke (Barzahlung,
                            Kreditkarte, Rechnung)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Belege und Rechnungen für Rückerstattungen oder Steuerzwecke
                            aufbewahren
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
                            Notfallvorrat an wichtigen Medikamenten sicherstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Liste von Notfallapotheken und deren Kontaktdaten bereithalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung und Auffüllung des Notfallvorrats
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, den Prozess der
                Verschreibungserneuerungen und den Kontakt zu Apotheken strukturiert
                und effizient zu gestalten, um die kontinuierliche Versorgung mit
                notwendigen Medikamenten sicherzustellen.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('medi-form4')"><button>Drucken</button></div>
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
            // checkboxes.forEach(function(checkboxContainer) {
            //     // Find the checkbox within the container
            //     const checkbox = checkboxContainer.querySelector('input[type="checkbox"]');

            //     // Find the heading ('.checklisten-section3-wrapper-heading') for this container's section
            //     const heading = checkboxContainer.closest('.checklisten-section3-wrapper').querySelector(
            //         '.checklisten-section3-wrapper-heading');

            //     // If the checkbox is not checked, hide its container and its heading
            //     if (heading && !checkbox.checked) {
            //         heading.style.display = 'none'; // Hide the heading
            //         checkboxContainer.style.display = 'none'; // Hide the checkbox container
            //     } else {
            //         // Ensure visible checkboxes remain visible (restore visibility)
            //         if (heading) heading.style.display = ''; // Ensure heading is visible
            //         checkboxContainer.style.display = ''; // Ensure checkbox container is visible
            //     }
            // });
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

        // Print button event listener
        // document.querySelector('.checklisten-section3-btn button').addEventListener('click', function() {
        //     // prepareForPrint();

        //     var printContents = document.getElementById('medi-form1').innerHTML;
        //     var originalContents = document.body.innerHTML;
        //     document.body.innerHTML = printContents;
        //     window.print();
        //     document.body.innerHTML = originalContents;
        //     location.reload();


        //     // Open the print dialog
        //     // window.print();

        //     // // Reset visibility after printing
        //     // window.onafterprint = resetPrint;
        // });
    </script>

</body>

</html>
