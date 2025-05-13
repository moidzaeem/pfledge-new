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
        <button class="checklisten-section2-top-btn7 checklisten-top-btn active-btn" id="checklisten-top-btn7">
            <a href="{{ route('checklist.6') }}"></a>
            GESUNDHEITSÜBERWACHUNG
        </button>
    </div>
    <div class="checklisten-section2-bottom-btn-container" id="checklisten-bottom-container7">
        <button class="checklisten-section2-bottom-btn71 check-bottom-btns check-active-btn"
            id="checklisten-bottom-btn71">
            Regelmäßige Gesundheitschecks und Monitoring (Blutdruck, Blutzucker)
        </button>
        <button class="checklisten-section2-bottom-btn72 check-bottom-btns" id="checklisten-bottom-btn72">
            Symptomtagebuch und Gesundheitsprotokolle
        </button>
        <button class="checklisten-section2-bottom-btn73 check-bottom-btns" id="checklisten-bottom-btn73">
            Impfungen und Vorsorgeuntersuchungen
        </button>
    </div>


    <form action="" class="check-listen-forms" id="gesu-form1">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Regelmäßige Gesundheitschecks und Monitoring (Blutdruck,
                Blutzucker)
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Vorbereitung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geeignete Messgeräte beschaffen (Blutdruckmessgerät,
                            Blutzuckermessgerät)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Messgeräte regelmäßig kalibrieren und auf Funktionalität
                            überprüfen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notwendige Zubehörteile (Teststreifen, Lanzetten) bereithalten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anweisungen zur korrekten Handhabung der Geräte durchlesen und
                            verstehen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Blutdruckmessung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Blutdruckmessung (z.B. morgens und abends) einplanen
                            Erstellen Sie eine Liste aktueller Beschwerden und Symptome.
                            Vereinbaren Sie rechtzeitig einen Termin und tragen Sie diesen
                            Ihren Kalender ein
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Blutdruckmessung im Sitzen nach einer Ruhephase von mindestens 5
                            Minuten durchführen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Arm auf Herzhöhe positionieren und Manschette korrekt anlegen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zwei Messungen mit einem Abstand von 1-2 Minuten durchführen und
                            den Durchschnittswert notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Messwerte in einem Blutdrucktagebuch festhalten (Datum, Uhrzeit,
                            Messwert)
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Blutzuckermessung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Blutzuckermessung je nach Bedarf und ärztlicher Empfehlung
                            durchführen (nüchtern, vor/nach den Mahlzeiten)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hände gründlich waschen, bevor die Messung durchgeführt wird
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Blutstropfen seitlich an der Fingerkuppe entnehmen (weniger
                            schmerzhaft)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Teststreifen korrekt in das Blutzuckermessgerät einlegen und den
                            Messwert ablesen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Messwerte in einem Blutzuckertagebuch festhalten (Datum,
                            Uhrzeit, Messwert, evtl. Mahlzeiten)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Weitere Gesundheitschecks
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Gewichtskontrolle und Dokumentation (z.B.
                            wöchentlich)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kontrolle des Pulses (Ruhepuls und bei körperlicher Aktivität)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überwachung der Atmung (Atemfrequenz, Atemnot)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Temperaturmessung bei Anzeichen von Krankheit
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Dokumentation und Auswertung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle Messwerte in einem Gesundheitsprotokoll festhalten (manuell
                            oder digital)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Veränderungen und Auffälligkeiten dokumentieren (z.B. stark
                            schwankende Werte)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Auswertung der Werte (z.B. wöchentlich oder
                            monatlich)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergebnisse bei Arztterminen vorlegen und besprechen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Ernährung und Lebensstil berücksichtigen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zusammenhang zwischen Ernährung und Blutzuckerwerten beachten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Einfluss von Bewegung und Stress auf den Blutdruck dokumentieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassungen in der Ernährung und im Lebensstil in Absprache mit
                            dem Arzt vornehmen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Medikamentenüberwachung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wirkung von blutdruck- und blutzuckersenkenden Medikamenten
                            überwachen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nebenwirkungen oder Unregelmäßigkeiten im Gesundheitsprotokoll
                            vermerken
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rücksprache mit dem Arzt bei auffälligen Werten oder
                            unerwünschten Nebenwirkungen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Kommunikation mit dem Arzt
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Kontrolltermine beim Arzt vereinbaren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fragen und Anliegen zur Gesundheitsüberwachung im Vorfeld
                            notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergebnisse der Gesundheitschecks und Monitoring-Daten mit dem
                            Arzt besprechen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassungen der Medikation oder des Gesundheitsplans in
                            Absprache mit dem Arzt vornehmen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Notfallvorsorge
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alarmzeichen für akute Probleme (z.B. Bluthochdruckkrise,
                            Unterzuckerung) kennen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallplan für akute Situationen erstellen (z.B. bei extremen
                            Werten)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notfallmedikamente griffbereit halten (z.B. Glukose bei
                            Unterzuckerung)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Langfristige Überwachung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung der Langzeitwerte (z.B. HbA1c-Wert bei
                            Diabetes)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rückblick auf langfristige Entwicklungen und Trends in den
                            Gesundheitswerten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassung der Gesundheitschecks bei Veränderungen des
                            Gesundheitszustands
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, regelmäßige Gesundheitschecks
                strukturiert durchzuführen und sicherzustellen, dass Blutdruck,
                Blutzucker und andere wichtige Werte stets im Blick behalten werden.
                Eine sorgfältige Dokumentation und die enge Zusammenarbeit mit dem
                Arzt tragen dazu bei, gesundheitliche Risiken zu minimieren und eine
                optimale Betreuung zu gewährleisten.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('gesu-form1')"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Symptomtagebuch und Gesundheitsprotokolle form ###################   -->

    <form action="" class="check-listen-forms" id="gesu-form2">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Symptomtagebuch und Gesundheitsprotokolle
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Vorbereitung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geeignete Materialien bereithalten (Notizbuch, App oder digitale
                            Vorlage)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Klare Struktur für das Tagebuch oder Protokoll festlegen (z.B.
                            Datum, Uhrzeit, Symptombeschreibung)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bestimmung der Symptome, die regelmäßig überwacht werden sollen
                            (z.B. Schmerzen, Müdigkeit, Schwindel)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Tägliche Dokumentation
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Tägliche Aufzeichnung von Symptomen und Beschwerden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beschreibung der Intensität der Symptome (z.B. auf einer Skala
                            von 1 bis 10)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Dauer und Häufigkeit der Symptome notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Auslöser oder Erleichterungen der Symptome dokumentieren (z.B.
                            Essen, Bewegung, Ruhe)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Weitere relevante Informationen festhalten (z.B.
                            Umgebungseinflüsse, Stressfaktoren)
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Gesundheitsprotokolle
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Vitalparameter messen und aufzeichnen (z.B.
                            Blutdruck, Blutzucker, Puls)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Gewichtskontrolle und Dokumentation (z.B. wöchentlich)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Überwachung des Schlafverhaltens und der Schlafqualität
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Aufzeichnung der Flüssigkeitszufuhr und Essgewohnheiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Medikamenteneinnahme und eventuelle Nebenwirkungen dokumentieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Zusätzliche Gesundheitsfaktoren
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Stimmung und emotionales Befinden festhalten (z.B. Stresslevel,
                            Angst, Depression)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notierung von körperlicher Aktivität und Bewegung (z.B. Art und
                            Dauer der Übungen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beschreibung der täglichen Energielevels und Erschöpfung
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Wöchentliche Zusammenfassungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wöchentliche Zusammenfassung der aufgezeichneten Symptome und
                            Gesundheitsdaten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Trends und Veränderungen im Gesundheitszustand erkennen und
                            notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bewertung der Wirksamkeit von Behandlungen oder Änderungen im
                            Lebensstil
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Arztbesuche und Kommunikation
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Relevante Informationen für den nächsten Arztbesuch hervorheben
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Symptomtagebuch und Gesundheitsprotokolle beim Arzttermin
                            mitbringen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Besprechung der Daten mit dem Arzt, um Entscheidungen über
                            Behandlungen oder Anpassungen zu treffen
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
                            Alle Einträge in einem zentralen Dokument oder einer App
                            zusammenführen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Sicherung der digitalen Daten (z.B. Cloud-Speicher,
                            externe Festplatte)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sicherstellen, dass die Protokolle leicht zugänglich sind für
                            den Notfall
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Regelmäßige Überprüfung und Anpassung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Monatliche Überprüfung der gesammelten Daten und Anpassung des
                            Protokolls bei Bedarf
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Feedback von medizinischem Fachpersonal einholen, um die
                            Dokumentation zu verbessern
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassung des Protokolls an veränderte Gesundheitszustände oder
                            neue Symptome
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Selbstbeobachtung und Achtsamkeit
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßig auf den eigenen Körper hören und neue Symptome sofort
                            notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Achtsamkeit für körperliche und emotionale Signale entwickeln
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Präventive Maßnahmen ergreifen, wenn sich negative Trends
                            abzeichnen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Langfristige Überwachung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Langfristige Trends und Veränderungen dokumentieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Jahresberichte erstellen und mit dem Arzt besprechen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassung von Lebensstil, Ernährung und Bewegung auf Basis der
                            langfristigen Daten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, ein umfassendes Symptomtagebuch und
                Gesundheitsprotokoll zu führen, um Veränderungen im Gesundheitszustand
                zu dokumentieren und die Zusammenarbeit mit dem medizinischen
                Fachpersonal zu optimieren. Regelmäßige Überwachung und Dokumentation
                können dazu beitragen, gesundheitliche Probleme frühzeitig zu erkennen
                und entsprechend zu handeln.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('gesu-form2')" ><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Impfungen und Vorsorgeuntersuchungen form ###################   -->

    <form action="" class="check-listen-forms" id="gesu-form3">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Impfungen und Vorsorgeuntersuchungen
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Bestandsaufnahme und Planung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Aktuellen Impfstatus überprüfen (Impfpass durchsehen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Übersicht über empfohlene Impfungen nach Alter, Geschlecht und
                            Gesundheitszustand erstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notwendige Auffrischungsimpfungen notieren (z.B. Tetanus,
                            Diphtherie)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geplante Vorsorgeuntersuchungen (z.B. jährlicher Check-up,
                            Krebsvorsorge) eintragen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Termine für Impfungen und Vorsorgeuntersuchungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Termine für alle anstehenden Impfungen bei Arzt oder
                            Gesundheitsamt vereinbaren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vorsorgetermine (z.B. beim Hausarzt, Gynäkologen, Urologen)
                            frühzeitig planen und eintragen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Erinnerungshilfen nutzen (Kalender, Apps) für anstehende Termine
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Reiseimpfungen rechtzeitig vor Urlaubsbeginn planen und
                            durchführen lassen
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Dokumentation
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alle durchgeführten Impfungen im Impfpass eintragen lassen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergebnisse von Vorsorgeuntersuchungen in einer Gesundheitsakte
                            dokumentieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kopien von wichtigen Untersuchungsergebnissen aufbewahren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Aktualisierung der Dokumentation bei neuen Impfungen
                            oder Untersuchungen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Information und Beratung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beratung durch den Arzt über notwendige Impfungen und
                            Vorsorgemaßnahmen einholen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Informationen über empfohlene Impfungen und Vorsorgeprogramme
                            für spezielle Risikogruppen (z.B. ältere Menschen, Schwangere)
                            einholen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Informationen zu möglichen Nebenwirkungen und Kontraindikationen
                            von Impfungen einholen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">5. Impfungen</div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Standardimpfungen überprüfen und ggf. auffrischen (z.B. Masern,
                            Mumps, Röteln, Grippe)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Spezielle Impfungen für Risikogruppen planen (z.B. Pneumokokken,
                            Gürtelrose)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Berufsspezifische Impfungen prüfen (z.B. Hepatitis für
                            Gesundheitsberufe)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Impfungen gegen saisonale Erkrankungen wie Grippe rechtzeitig
                            vor Beginn der Saison durchführen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Vorsorgeuntersuchungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Allgemeiner Gesundheitscheck (z.B. Blutdruck, Cholesterin,
                            Blutzucker) regelmäßig durchführen lassen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Krebsvorsorgeuntersuchungen (z.B. Mammografie, Darmspiegelung,
                            Hautkrebs-Screening) wahrnehmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zahnarztbesuche zur Kontrolle und Prophylaxe einplanen
                            (mindestens 1-2 Mal jährlich)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Augen- und Hörtests regelmäßig durchführen lassen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Spezielle Vorsorgeuntersuchungen für bestimmte Altersgruppen
                            (z.B. Osteoporose-Screening, Prostatakrebsvorsorge) beachten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Nachsorge und Monitoring
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ergebnisse von Vorsorgeuntersuchungen mit dem Arzt besprechen
                            und mögliche Maßnahmen einleiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Auffälligkeiten in den Untersuchungsergebnissen
                            weiterführende Diagnostik und Behandlungen planen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Impfreaktionen beobachten und ggf. mit dem Arzt besprechen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung der Gesundheit und Anpassung der
                            Vorsorgemaßnahmen bei Veränderungen des Gesundheitszustands
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Präventive Maßnahmen im Alltag
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Gesunde Ernährung und ausreichende Bewegung in den Alltag
                            integrieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Stressbewältigungstechniken und Entspannung regelmäßig
                            praktizieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Auf ausreichenden Schlaf und Erholung achten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vermeidung von Risikofaktoren (z.B. Rauchen, übermäßiger
                            Alkoholkonsum)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Familienplanung und spezielle Lebensphasen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Impfungen und Vorsorgeuntersuchungen bei Kinderwunsch,
                            Schwangerschaft und Stillzeit berücksichtigen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Impfungen und Vorsorge für Kinder und Jugendliche planen (z.B.
                            U-Untersuchungen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Spezielle Vorsorgeuntersuchungen für ältere Menschen einplanen
                            (z.B. Demenztests)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Regelmäßige Überprüfung und Anpassung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Impfplan und Vorsorgeuntersuchungen jährlich überprüfen und
                            anpassen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Änderungen im Gesundheitszustand oder neue Risikofaktoren
                            berücksichtigen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rücksprache mit dem Arzt halten, um den Vorsorgeplan aktuell zu
                            halten
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, den Überblick über Impfungen und
                Vorsorgeuntersuchungen zu behalten und sicherzustellen, dass alle
                wichtigen gesundheitlichen Maßnahmen rechtzeitig durchgeführt werden.
                Eine regelmäßige Überprüfung und Anpassung des Vorsorgeplans trägt zur
                langfristigen Gesundheit und Prävention von Krankheiten bei.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('gesu-form3')"><button>Drucken</button></div>
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
            //     const checkbox = checkboxContainer.querySelector('input[type="checkbox"]');

            //     // If the checkbox is not checked, hide its container
            //     if (!checkbox.checked) {
            //         checkboxContainer.style.display = 'none';
            //     } else {
            //         // Ensure visible checkboxes remain visible
            //         checkboxContainer.style.display = '';
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
