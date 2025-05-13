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
        <button class="checklisten-section2-top-btn2 checklisten-top-btn active-btn" id="checklisten-top-btn2">
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

    <div class="checklisten-section2-bottom-btn-container" id="checklisten-bottom-container2">
        <button class="checklisten-section2-bottom-btn21 check-bottom-btns check-active-btn"
            id="checklisten-bottom-btn21">
            ARZTTERMINE UND FACHARZTBESUCHE
        </button>
        <button class="checklisten-section2-bottom-btn22 check-bottom-btns" id="checklisten-bottom-btn22">
            VORBEREITUNG AUF ARZTBESUCHE (FRAGEN, SYMPTOME, BERICHTE)
        </button>
        <button class="checklisten-section2-bottom-btn23 check-bottom-btns" id="checklisten-bottom-btn23">
            TRANSPORT ZU TERMINEN
        </button>
    </div>

    <form action="" class="check-listen-forms" id="termi-form1">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste für Arzttermine und Facharztbesuche
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Vorbereitung auf den Arzttermin
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Liste der aktuellen Beschwerden und Symptome erstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle aktuellen Medikamente und Dosierungen notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Frühere Diagnosen und Behandlungen zusammenstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen und Anliegen für den Arztbesuch vorbereiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notwendige Dokumente bereitlegen (Versicherungskarte,
                            Überweisungsschein, Impfpass)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Planung und Organisation
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Termin rechtzeitig vereinbaren und im Kalender eintragen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bestätigung des Termins einholen (per Telefon oder E-Mail)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Adresse und Anfahrtsbeschreibung der Praxis notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fahrzeit und mögliche Verkehrsmittel planen (Auto, öffentlicher
                            Verkehr, Taxi)
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Am Tag des Termins
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Terminzeit und Praxisadresse nochmals überprüfen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ausreichend Zeit für die Anfahrt einplanen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle erforderlichen Dokumente und Unterlagen mitnehmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Eine Liste der aktuellen Beschwerden, Symptome und Fragen
                            mitführen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notizblock und Stift für wichtige Informationen und Anweisungen
                            bereithalten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Während des Arzttermins
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klare und vollständige Beschreibung der Symptome und Beschwerden
                            geben
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen stellen und um ausführliche Erklärungen bitten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Behandlungsmöglichkeiten und -alternativen besprechen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nächste Schritte und eventuell notwendige Untersuchungen klären
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nach erforderlichen Verschreibungen und Empfehlungen fragen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Nach dem Arzttermin
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notizen und Anweisungen des Arztes durchgehen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verschreibungen und Überweisungen einlösen bzw. organisieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geplante Untersuchungen oder Therapien rechtzeitig vereinbaren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergebnisse und neue Termine im Kalender eintragen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Unklarheiten oder neuen Fragen Kontakt zur Praxis aufnehmen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Facharztbesuche
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überweisungen und spezifische Fragestellungen vom Hausarzt
                            besorgen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vorherige Befunde und Untersuchungsergebnisse mitnehmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vorbereitung auf spezialisierte Untersuchungen (z.B.
                            Nüchternheit, spezielle Kleidung)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nach dem Termin Rücksprache mit dem Hausarzt halten und weitere
                            Schritte klären
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Notfall- und Akuttermine
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Telefonnummern und Kontaktdaten für Notfälle bereithalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallplan erstellen und zugänglich aufbewahren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wichtige medizinische Informationen (Allergien, Vorerkrankungen)
                            notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Schnell erreichbare Anlaufstellen für akute Beschwerden kennen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Langfristige Planung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Kontrolltermine im Voraus planen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Gesundheitsvorsorge und Präventivmaßnahmen im Kalender
                            berücksichtigen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Änderungen im Gesundheitszustand regelmäßig dokumentieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kommunikation mit allen beteiligten Fachärzten und Therapeuten
                            sicherstellen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, Arzttermine und Facharztbesuche gut
                vorbereitet und organisiert anzugehen, um eine optimale medizinische
                Versorgung sicherzustellen.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('termi-form1')"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### VORBEREITUNG AUF ARZTBESUCHE (FRAGEN, SYMPTOME, BERICHTE) FORM ###################   -->

    <form action="" class="check-listen-forms" id="termi-form2">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Vorbereitung auf Arztbesuche (Fragen, Symptome, Berichte)
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Vor dem Arztbesuch
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Terminbestätigung überprüfen (Datum, Uhrzeit, Ort)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notwendige Dokumente bereitlegen (Versicherungskarte,
                            Überweisungsschein, Impfpass)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Aktuelle Beschwerden und Symptome
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle aktuellen Beschwerden und Symptome notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Dauer und Häufigkeit der Symptome festhalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Intensität der Symptome bewerten (z.B. auf einer Skala von 1 bis
                            10)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Faktoren, die die Symptome verbessern oder verschlimmern,
                            notieren
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Medikamentenliste
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Liste aller aktuellen Medikamente erstellen (inkl. Dosierung und
                            Einnahmehäufigkeit)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Informationen zu kürzlich abgesetzten oder neu begonnenen
                            Medikamenten hinzufügen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergänzungsmittel und frei verkäufliche Medikamente ebenfalls
                            auflisten
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Fragen an den Arzt
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen zur Diagnose und Behandlungsmöglichkeiten vorbereiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen zu Nebenwirkungen und Wechselwirkungen von Medikamenten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen zur Notwendigkeit weiterer Untersuchungen oder Tests
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen zu Lebensstiländerungen oder Vorsorgemaßnahmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen zu Spezialistenüberweisungen oder Zweitmeinungen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Vorherige Diagnosen und Behandlungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Frühere Diagnosen und durchgeführte Behandlungen notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergebnisse früherer Untersuchungen oder Tests zusammenstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Berichte und Entlassungsbriefe von Krankenhausaufenthalten
                            mitnehmen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Familiäre Krankengeschichte
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Relevante Gesundheitsinformationen von Familienmitgliedern
                            notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Erbkrankheiten und häufig vorkommende Erkrankungen in der
                            Familie angeben
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Lebensstil und persönliche Gewohnheiten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Angaben zu Ernährung, Bewegung und Schlafgewohnheiten machen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Informationen zu Rauchen, Alkoholkonsum und anderen Substanzen
                            notieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Notfallkontakte
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallkontakte und deren Kontaktdaten bereithalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wichtige medizinische Informationen (Allergien, Vorerkrankungen)
                            notieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Während des Arztbesuchs
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klar und vollständig die Symptome und Beschwerden beschreiben
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle vorbereiteten Fragen stellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Arztanweisungen genau notieren (z.B. Dosierungen, Therapien,
                            weitere Schritte)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Unklarheiten sofort nachfragen
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Nach dem Arztbesuch
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Arztanweisungen und Empfehlungen überprüfen und gegebenenfalls
                            notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verschreibungen einlösen und notwendige Termine vereinbaren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergebnisse des Arztbesuchs in einer Gesundheitsakte
                            dokumentieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, gut vorbereitet zum Arztbesuch zu gehen
                und sicherzustellen, dass alle wichtigen Informationen und Fragen
                berücksichtigt werden, um die bestmögliche medizinische Betreuung zu
                erhalten.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('termi-form2')"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### TRANSPORT ZU TERMINEN FORM ###################   -->

    <form action="" class="check-listen-forms" id="termi-form3">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Transport zu Terminen
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Planung im Voraus
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Terminbestätigung überprüfen (Datum, Uhrzeit, Ort)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Adresse und Anfahrtsbeschreibung der Arztpraxis oder des
                            Krankenhauses notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Benötigte Zeit für die Anfahrt einschätzen und einplanen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Transportmöglichkeiten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Eigene Transportmittel:
                            <div class="checklisten-checkbox-container mt-3 ms-3">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Auto:
                                    <div class="checklisten-checkbox-container mt-3 ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Fahrtroute planen
                                        </div>
                                    </div>
                                    <div class="checklisten-checkbox-container ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Parkmöglichkeiten in der Nähe recherchieren
                                        </div>
                                    </div>
                                    <div class="checklisten-checkbox-container ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Tanken oder Ladezustand (bei Elektrofahrzeugen)
                                            überprüfen
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-3 ms-3">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Fahrrad oder E-Bike:
                                    <div class="checklisten-checkbox-container mt-3 ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Fahrradweg planen
                                        </div>
                                    </div>
                                    <div class="checklisten-checkbox-container ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Wetterbedingungen beachten
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-3 ms-3">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Öffentliche Verkehrsmittel:
                                    <div class="checklisten-checkbox-container mt-3 ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Fahrplan und Verbindungen recherchieren
                                        </div>
                                    </div>
                                    <div class="checklisten-checkbox-container ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Ticket kaufen oder gültigen Fahrschein haben
                                        </div>
                                    </div>
                                    <div class="checklisten-checkbox-container ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Alternativrouten für den Notfall vorbereiten
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-3 ms-3">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Taxis und Fahrdienste:
                                    <div class="checklisten-checkbox-container mt-3 ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Taxi oder Fahrdienst im Voraus buchen
                                        </div>
                                    </div>
                                    <div class="checklisten-checkbox-container ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Telefonnummer und Kontaktdaten bereithalten
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container mt-3 ms-3">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Spezielle Transportdienste für Personen mit eingeschränkter
                                    Mobilität:
                                    <div class="checklisten-checkbox-container mt-3 ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Behindertengerechte Fahrdienste im Voraus buchen
                                        </div>
                                    </div>
                                    <div class="checklisten-checkbox-container ms-3">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="custom-checkbox"></span>
                                        </label>
                                        <div class="checklisten-checkbox-data">
                                            Kontaktinformationen und Buchungsdetails bereithalten
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Vorbereitung für die Fahrt
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wichtige Dokumente und Unterlagen mitnehmen (Versicherungskarte,
                            Überweisungsschein, medizinische Berichte)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamentenliste und aktuelle Medikation einpacken
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wasserflasche und Snacks für unterwegs mitnehmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bequeme Kleidung und wettergerechte Ausrüstung anziehen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Begleitung und Unterstützung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Begleitperson organisieren, falls notwendig
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kontaktinformationen der Begleitperson notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klären, ob die Begleitperson beim Arztbesuch dabei sein kann
                            oder im Wartebereich warten muss
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Notfallvorsorge
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallkontakte und medizinische Informationen bereithalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Plan für alternative Transportmöglichkeiten im Notfall haben
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Handy vollständig aufladen und Ladekabel mitnehmen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Ankunft und Zeitmanagement
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ausreichend Zeit für die Anfahrt einplanen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vor Ort frühzeitig ankommen, um Stress zu vermeiden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Informationen zum genauen Standort der Arztpraxis oder des
                            Krankenhauses bereit halten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Nach dem Termin
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rückfahrt organisieren und sicherstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notwendige Nachbereitung und Besorgungen (Apotheke, weitere
                            Termine vereinbaren)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wichtige Informationen und Anweisungen des Arztes notieren und
                            zu Hause umsetzen
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, den Transport zu Terminen gut zu planen
                und sicherzustellen, dass alle notwendigen Vorbereitungen getroffen
                sind, um eine stressfreie An- und Abreise zu gewährleisten.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('termi-form3')"><button>Drucken</button></div>
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
    </script>
</body>

</html>
