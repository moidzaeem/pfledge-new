<!DOCTYPE html>
<html lang="en">

@include('components.header.head')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    strong {
        color: #b22222;
        font-weight: 800;
    }

    #tooltip {
        text-align: left;
        color: #fff;
        background: #111;
        position: absolute;
        z-index: 100;
        padding: 15px;
        font-size: 1.0rem;
    }

    #tooltip:after

    /* triangle decoration */
        {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #111;
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        margin-left: -10px;
    }

    #tooltip.top:after {
        border-top-color: transparent;
        border-bottom: 10px solid #111;
        top: -20px;
        bottom: auto;
    }

    #tooltip.left:after {
        left: 10px;
        margin: 0;
    }

    #tooltip.right:after {
        right: 10px;
        left: auto;
        margin: 0;
    }
</style>


<body>
    <div class="header-container service-header-bg"
        style="
    background-image: url('{{ asset('assets/Images/Online-rechner_header_bg.svg') }}') !important;">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Für Pflegegrad, Pflegekosten und mehr - schnell, einfach,
                präzise</span>
            <div>Online-Rechner</div>
        </div>
    </div>

<!--
    <div class="uberuns-container">
        <div class="uberuns-row row">
            <div class="col-md-6 uberuns-left d-none d-md-block">
                <img src="{{ asset('assets/Images/Online_rechner_section1_img.svg') }}" alt="" />
            </div>
            <div class="col-md-6 uberuns-left d-block d-md-none">
                <img src="{{ asset('assets/Images/Online_rechner_section1_img_sm.svg') }}" alt="" />
            </div>
            <div class="col-md-6 uberuns-right">
                <div class="col-12 uberuns-section1-content">
                    Bei uns finden Sie eine Vielzahl an Online-Rechnern, die Ihnen dabei
                    helfen, schnell und unkompliziert wichtige Informationen zu Ihren
                    individuellen Pflegesituationen zu erhalten. Ob es um die Einstufung
                    in einen Pflegegrad, die Berechnung von Pflegeleistungen oder die
                    Kostenübersicht für stationäre und ambulante Pflege geht – unsere
                    Tools unterstützen Sie dabei, den Überblick zu behalten und
                    fundierte Entscheidungen zu treffen. <br />
                    <div class="mt-2 mb-2">Unsere verfügbaren Rechner:</div>
                    <ul class="mb-4">
                        <li>
                            Rechner Pflegegrad: Ermitteln Sie Ihren oder den Pflegegrad
                            Ihrer Angehörigen einfach und schnell.
                        </li>
                        <li>
                            Rechner Pflegeleistungen: Finden Sie heraus, welche
                            Pflegeleistungen Ihnen zustehen und wie viel Unterstützung Sie
                            erwarten können.
                        </li>
                        <li>
                            Rechner Pflegegeld: Berechnen Sie die Höhe des Pflegegeldes, das
                            Sie in Anspruch nehmen können.
                        </li>
                        <li>
                            Rechner Pflegekosten im Pflegeheim: Verschaffen Sie sich
                            Klarheit über die anfallenden Kosten bei der stationären Pflege.
                        </li>
                        <li>
                            Rechner Pflegekosten für ambulante Pflege: Kalkulieren Sie die
                            Kosten für pflegerische Unterstützung zu Hause.
                        </li>
                        <li>
                            Rechner Zuzahlungen: Ermitteln Sie, welche Zuzahlungen Sie für
                            verschiedene Pflegeleistungen leisten müssen.
                        </li>
                    </ul>
                    PflegePur steht für einfache Handhabung, präzise Ergebnisse und
                    zuverlässige Informationen. Nutzen Sie unsere Online-Rechner, um
                    Ihre Pflegefragen zu klären und die bestmögliche Unterstützung zu
                    finden. Wir sind hier, um Ihnen den Weg durch das komplexe
                    Pflegesystem zu erleichtern.
                    <br />
                    <div class="mt-1">
                        Starten Sie jetzt und entdecken Sie, wie PflegePur Ihnen helfen
                        kann!
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

    <!-- ########################### Online Rechner SECTION 2 ########################### -->

    <div class="online-rechner-section2" style="margin-top:50px;">
        <button class="online-rechner-section2-btn1 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.index') }}"></a> RECHNER PFLEGEGRAD
        </button>
        <button class="online-rechner-section2-btn2 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.second') }}"></a> RECHNER PFLEGELEISTUNGEN
        </button>
        <button class="online-rechner-section2-btn3 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.third') }}"></a> RECHNER PFLEGEGELD
        </button>
        <button class="online-rechner-section2-btn4 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.fourth') }}"></a> RECHNER PFLEGEKOSTEN IM PFLEGEHEIM
        </button>
        <button class="online-rechner-section2-btn5 online-rechner-section2-btn online-active-btn">
            <a href="{{ route('online.rechner.fifth') }}"></a>
            RECHNER PFLEGEKOSTEN FÜR AMBULANTE PFLEGE
        </button>
        <button class="online-rechner-section2-btn6 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.sixth') }}"></a>
            RECHNER ZUZAHLUNGEN
        </button>
    </div>


    <div class="online-rechner-section3-container rechner-calculators" id="calculator0">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />


            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn0">PG</button>
                    <button type="button" class="calculator-btns " id="calculator-btn1"
                        title="Leistungskomplex 1: Erstbesuch" rel="tooltip">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2" title="Leistungskomplex 2: Folgebesuch"
                        rel="tooltip">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3"
                        title="Leistungskomplex 3: Kleine Pflege - Grundpflege" rel="tooltip">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4"
                        title="Leistungskomplex 4: Große Pflege I - Grundpflege" rel="tooltip">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5"
                        title="Leistungskomplex 5: Große Pflege II - Grundpflege" rel="tooltip">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6"
                        title="Leistungskomplex 6: Kämmen und Rasieren - Grundpflege" rel="tooltip">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7" title="Leistungskomplex 7: unbesetzt"
                        rel="tooltip">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8"
                        title="Leistungskomplex 8: Hilfen bei Aufsuchen und Verlassen des Bettes im Zusammenhang mit der Körperpflege - Grundpflege"
                        rel="tooltip">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9"
                        title="Leistungskomplex 9: Hilfen beim Aufsuchen und Verlassen des Bettes - Grundpflege"
                        rel="tooltip">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10"
                        title="Leistungskomplex 10: Spezielle Lagerung bei Immobilität im Zusammenhang mit der Körperpflege - Grundpflege"
                        rel="tooltip">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11"
                        title="Leistungskomplex 11: Spezielle Lagerung bei Immobilität - Grundpflege"
                        rel="tooltip">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12"
                        title="Leistungskomplex 12: Einfache Hilfe bei der Nahrungsaufnahme - Grundpflege"
                        rel="tooltip">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13"
                        title="Leistungskomplex 13: Umfangreiche Hilfe bei der Nahrungsaufnahme - Grundpflege"
                        rel="tooltip">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14"
                        title="Leistungskomplex 14: Nahrungszufuhr durch Verabreichung von Sondenkost - Grundpflege"
                        rel="tooltip">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15"
                        title="Leistungskomplex 15: Ergänzende Hilfe bei Ausscheidungen im Zusammenhang mit der Körperpflege - Grundpflege"
                        rel="tooltip">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16"
                        title="Leistungskomplex 16: Umfangreiche Hilfe bei Ausscheidungen - Grundpflege"
                        rel="tooltip">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17"
                        title="Leistungskomplex 17: Hilfestellung beim Verlassen oder Wiederaufsuchen der Wohnung - Grundpflege"
                        rel="tooltip">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18"
                        title="Leistungskomplex 18: Begleitung bei Aktivitäten - Grundpflege"
                        rel="tooltip">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19"
                        title="Leistungskomplex 19: Hauswirtschaftliche Versorgung" rel="tooltip">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20"
                        title="Leistungskomplex 20: Beratungsbesuch gem. § 37 Abs. 3 SGB XI"
                        rel="tooltip">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21" title="Leistungskomplex 21: Wegepauschalen"
                        rel="tooltip">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22" title="Grundpflege - nach Zeit"
                        rel="tooltip">GP</button>
                    <button class="calculator-btns" id="calculator-btn23" title="Betreuungsleistungen - nach Zeit"
                        rel="tooltip"> BL</button>
                </div>
                <form action="{{ route('online.rechner.fifth.calculate') }}" method="POST">
                    @csrf

                    <div class="online-rechner-section3-form-heading mb-4">1. Stammdaten</div>

                    <div class="online-rechner-section3-form-sub-heading mb-4 ">
                        Geben Sie hier den Pflegegrad ein.
                    </div>

                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">Pflegegrad</label>

                        <select name="pflegegrad" id="online-rechner-input1" style="width: 50%;">
                            <option value="0" {{ old('pflegegrad') == '0' ? 'selected' : '' }}>Kein Pflegegrad
                            </option>
                            <option value="1" {{ old('pflegegrad') == '1' ? 'selected' : '' }}>Pflegegrad 1
                            </option>
                            <option value="2" {{ old('pflegegrad') == '2' ? 'selected' : '' }}>Pflegegrad 2
                            </option>
                            <option value="3" {{ old('pflegegrad') == '3' ? 'selected' : '' }}>Pflegegrad 3
                            </option>
                            <option value="4" {{ old('pflegegrad') == '4' ? 'selected' : '' }}>Pflegegrad 4
                            </option>
                            <option value="5" {{ old('pflegegrad') == '5' ? 'selected' : '' }}>Pflegegrad 5
                            </option>
                        </select>
                    </div>

                    <div style="display: flex; justify-content: center;"><button
                            class="online-rechner-page2-section3-btn"
                            style="border: none; text-transform: uppercase;">berechnen</button>
                    </div>



            </div>


        </div>
    </div>

    <!-- ########################### Online Rechner CALCULATOR1 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator1">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem können Sie schnell und einfach eine Übersicht über die möglichen Kosten der ambulanten
                Pflege
                erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen ersten informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR2 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns " id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>

                <div class="online-rechner-section3-form-heading">Leistungskomplex 1: Erstbesuch</div>




                <div class="online-rechner-page2-section3-heading mt-4">Anamnese zur Erhebung des Pflegebedarfs</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">Die Anamnese erfolgt hier im Sinne
                    eines
                    Aufnahmestatus und dient der Ermittlung des Pflegebedarfs unter Berücksichtigung familiärer,
                    sozialer,
                    biographischer, pflegerischer und medizinischer Aspekte sowie Besonderheiten wie z. B.
                    Betreuungsgesetz.
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Beratung bei der Auswahl der Leistungskomplexe
                    und der
                    sich daraus ergebenden Kosten</div>
                <div class="online-rechner-page2-section3-heading mt-4">Information über weitere Hilfen/
                    Pflegehilfsmittel</div>
                <div class="online-rechner-page2-section3-heading mt-4">Beratung über den Inhalt des Pflegevertrages/
                    Abschluss
                    des Pflegevertrages</div>


                <div class="online-rechner-page2-section3-heading mt-4">Pflegeplanung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">Die Pflegeplanung erstreckt sich auf
                    die mit dem
                    Pflegebedürftigen vereinbarten Maßnahmen. Sie umfasst: <br>
                    - das Erkennen von Problemen und Ressourcen <br>
                    - das Festlegen der Pflegeziele <br>
                    - das Planen der Maßnahmen <br>
                    - das Anlegen der Dokumentation
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 1.155</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 57,75 EUR</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">Der Erstbesuch ist abrechenbar, wenn
                    der
                    Pflegedienst erstmalig mit der Pflege nach § 36 SGB XI beauftragt wird; die Vergütung ist als
                    Pauschale für
                    die mit der erstmaligen Pflegeplanung zusammenhängenden Leistungen zu betrachten. Der Aufwand für
                    die
                    fortlaufende Planung des Pflegeprozesses ist in der Vergütung der einzelnen Leistungskomplexe
                    berücksichtigt.
                    <br><br>
                    Als Ergebnis des Erstbesuchs sind die vom Pflegebedürftigen ausgewählten Leistungen mit dem
                    Pflegedienst
                    schriftlich zu vereinbaren. <br>
                    <br>
                    Der Pflegedienst ist verpflichtet, eine Übersicht über die monatlichen Kosten der ausgewählten
                    Leistungen zu
                    erstellen. <br>
                    <br>
                    Der Erstbesuch ist durch eine examinierte Pflegefachkraft durchzuführen.
                </div>

                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk1') }}" name="tagelk1" style="width: 50%;">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>


        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR2 ########################### -->

    <div class="online-rechner-section3-container rechner-calculators" id="calculator2">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />


            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 2: Folgebesuch</div>

                <div class="online-rechner-page2-section3-heading mt-4">Erhebung des geänderten Pflegebedarfs</div>
                <div class="online-rechner-page2-section3-heading mt-4">Information über weitere Hilfen/
                    Pflegehilfsmittel</div>
                <div class="online-rechner-page2-section3-heading mt-4">Information über weitere Hilfen/
                    Pflegehilfsmittel</div>
                <div class="online-rechner-page2-section3-heading mt-4">Beratung über den Inhalt des Pflegevertrages/
                    Abschluss
                    des Pflegevertrages</div>


                <div class="online-rechner-page2-section3-heading mt-4">Pflegeplanung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">Die Pflegeplanung erstreckt sich auf
                    die mit dem
                    Pflegebedürftigen vereinbarten Maßnahmen. Sie umfasst: <br>
                    - das Erkennen von Problemen und Ressourcen <br>
                    - das Festlegen der Pflegeziele <br>
                    - das Planen der Maßnahmen <br>
                    - das Anlegen der Dokumentation
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 630</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 31,50 EUR</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">Der Folgebesuch ist abrechenbar bei
                    einer
                    wesentlichen Änderung des Pflegebedarfs, z.B.: Nach einer Eingruppierung in eine andere Pflegestufe.
                    <br>
                    Bei einem dauerhaften Ausfall der Pflegeperson. <br>
                    <br>
                    Sofern sich im Verlauf des Pflegeprozesses nur geringfügige Änderungen bei den ausgewählten
                    Leistungen
                    ergeben, ist ein Folgebesuch nicht notwendig. Es ist lediglich die Kostenübersicht zu aktualisieren.
                    <br>
                    <br>
                    Der Folgebesuch ist durch eine examinierte Pflegefachkraft durchzuführen.
                </div>

                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk2') }}" style="width: 50%;" name="tagelk2">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>

        </div>
    </div>

    <!-- ########################### Online Rechner CALCULATOR3 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator3">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading"> Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kon
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns" id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>




                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 3: Kleine Pflege - Grundpflege
                </div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">An-/ Auskleiden</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- die Auswahl der Kleidung <br>
                    - das An- und Auskleiden <br>
                    - das An- und Ablegen von Körperersatzstücken
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Teilwaschen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- das Waschen und die anschließende
                    Hautpflege
                    von Teilbereichen des Körpers, z. B. Gesicht, Oberkörper oder Genitalbereich/ Gesäß, <br>
                    - ggf. einfaches Schneiden und Feilen der Finger- und Fußnägel <br>
                    - der Gang zur Toilette und ggf. die Begleitung zur Waschgelegenheit <br>
                    - ggf. Unterstützung bei der physiologischen Blasen- und Darmentleerung
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Mund-/ Zahnpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- die Lippenpflege <br>
                    - Zahnprothesenversorgung <br>
                    - die Mundhygiene
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 231</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 11,55 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Der Leistungskomplex 3 kann bei einem
                    Einsatz
                    nicht in Verbindung mit den Leistungskomplexen 4 und 5 sowie 16 gewählt werden. <br>
                    <br>
                    Der Leistungskomplex kann grundsätzlich 2 x täglich durch den Pflegebedürftigen gewählt werden.
                    <br>Pflegebedürftige, die zum Aufsuchen und Verlassen des Bettes Hilfe in Anspruch nehmen möchten,
                    können
                    dafür den Leistungskomplex 8 wählen. <br>
                    <br>
                    Die Fingernägel und Fußnägel werden beim Teilwaschen ggf. gereinigt, geschnitten oder gefeilt. Alle
                    weiteren
                    Tätigkeiten im Zusammenhang mit der Nagelpflege sind dem Bereich der Maniküre bzw. Pediküre
                    zuzuordnen. <br>
                    <br>
                    Das Schneiden der Fußnägel im Rahmen der medizinischen Fußpflege bei Diabetes ist keine Leistung der
                    Grundpflege.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk3') }}" style="width: 50%;" name="tagelk3">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>


        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR4 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator4">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 4: Große Pflege I - Grundpflege
                </div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">An-/ Auskleiden</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- die Auswahl der Kleidung <br>
                    - das An- und Auskleiden <br>
                    - das An- und Ablegen von Körperersatzstücken
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Waschen (Ganzkörperwaschung)/ Duschen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- das Waschen bzw. das Duschen und die
                    anschließende Hautpflege des ganzen Körpers, d. h. Gesicht, Oberkörper, Rücken oder Genitalbereich/
                    Gesäß,
                    Beine und Füße <br>
                    - ggf. Waschen und Trocknen der Haare <br>
                    - ggf. einfaches Schneiden der Finger- und Fußnägel <br>
                    - der Gang zur Toilette und die Begleitung zur Waschgelegenheit <br>
                    - ggf. Unterstützung bei der physiologischen Blasen- und Darmentleerung.
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Mund-/ Zahnpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- die Lippenpflege <br>
                    - Zahnprothesenversorgung <br>
                    - die Mundhygiene
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 378</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 18,90 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Der Leistungskomplex 4 kann bei einem
                    Einsatz
                    nicht in Verbindung mit den Leistungskomplexen 3 und 5 sowie 16 gewählt werden. <br>
                    <br>
                    Der Leistungskomplex kann grundsätzlich 2 x täglich durch den Pflegebedürftigen gewählt werden.
                    <br>Pflegebedürftige, die zum Aufsuchen und Verlassen des Bettes Hilfe in Anspruch nehmen möchten,
                    können
                    dafür den Leistungskomplex 8 wählen. <br>
                    <br>
                    Die Fingernägel und Fußnägel werden beim Teilwaschen ggf. gereinigt, geschnitten oder gefeilt. Alle
                    weiteren
                    Tätigkeiten im Zusammenhang mit der Nagelpflege sind dem Bereich der Maniküre bzw. Pediküre
                    zuzuordnen. <br>
                    <br>
                    Das Schneiden der Fußnägel im Rahmen der medizinischen Fußpflege bei Diabetes ist keine Leistung der
                    Grundpflege.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk4') }}" style="width: 50%;" name="tagelk4">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR5 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator5">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 5: Große Pflege II -
                    Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">An-/ Auskleiden</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- die Auswahl der Kleidung <br>
                    - das An- und Auskleiden <br>
                    - das An- und Ablegen von Körperersatzstücken
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Ganzkörperwaschung im Vollbad</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- das Waschen im Vollbad und die
                    anschließende
                    Hautpflege des ganzen Körpers, d. h. Gesicht, Oberkörper, Rücken oder Genitalbereich/ Gesäß, Beine
                    und Füße
                    <br>
                    - ggf. Waschen und Trocknen der Haare <br>
                    - ggf. einfaches Schneiden der Finger- und Fußnägel <br>
                    - der Gang zur Toilette und die Begleitung zur Waschgelegenheit <br>
                    - ggf. Unterstützung bei der physiologischen Blasen- und Darmentleerung.

                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Mund-/ Zahnpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- die Lippenpflege <br>
                    - Zahnprothesenversorgung <br>
                    - die Mundhygiene
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 473</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 23,65 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Der Leistungskomplex 5 kann bei einem
                    Einsatz
                    nicht in Verbindung mit den Leistungskomplexen 3 und 4 sowie 16 gewählt werden. <br>
                    <br>
                    Der Leistungskomplex kann grundsätzlich 2 x täglich durch den Pflegebedürftigen gewählt werden.
                    <br>Pflegebedürftige, die zum Aufsuchen und Verlassen des Bettes Hilfe in Anspruch nehmen möchten,
                    können
                    dafür den Leistungskomplex 8 wählen. <br>
                    <br>
                    Die Fingernägel und Fußnägel werden beim Teilwaschen ggf. gereinigt, geschnitten oder gefeilt. Alle
                    weiteren
                    Tätigkeiten im Zusammenhang mit der Nagelpflege sind dem Bereich der Maniküre bzw. Pediküre
                    zuzuordnen. <br>
                    <br>
                    Das Schneiden der Fußnägel im Rahmen der medizinischen Fußpflege bei Diabetes ist keine Leistung der
                    Grundpflege.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk5') }}" style="width: 50%; " name="tagelk5">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>


        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR6 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator6">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 6: Kämmen und Rasieren -
                    Grundpflege
                </div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>
                <div class="online-rechner-page2-section3-heading mt-4">Kämmen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">einschließlich des Herrichtens der
                    Tagesfrisur
                    (z. B. Flechtfrisur)
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Rasieren</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">Nass- oder Trockenrasur einschließlich
                    der damit
                    verbundenen Hautpflege</div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 74</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 3,70 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Das Kämmen ist entsprechend dem
                    individuellen
                    Bedarf des Pflegebedürftigen durchzuführen. Das Einlegen einer Dauerwelle, das Schneiden oder Färben
                    der Haare
                    ist nicht Bestandteil dieser Verrichtung. Sie gehören in den Eigenverantwortungsbereich des
                    Pflegebedürftigen.
                    Vom Pflegedienst ist allerdings bei Bedarf im Rahmen dieses Leistungskomplexes der Kontakt zum
                    Friseur
                    herzustellen. <br>
                    <br>
                    Der pflegerische Aufwand für die Rasur und das Kämmen bei Männern wird gleichgesetzt mit dem
                    Herrichten der
                    Tagesfrisur bei Frauen. <br>
                    <br>
                    Dieser Leistungskomplex ist nur mit den Leistungskomplexen 3 - 5 wählbar.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk6') }}" style="width: 50%;" name="tagelk6">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR7 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator7">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>

                <div class="online-rechner-section3-form-heading">Leistungskomplex 7: unbesetzt</div>

            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR8 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator8">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 8: Hilfen bei Aufsuchen und
                    Verlassen
                    des Bettes im Zusammenhang mit der Körperpflege - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- Hilfe beim Aufsuchen bzw. Verlassen
                    des
                    Bettes/ des Rollstuhles o. ä. <br>
                    - Machen und Richten des Bettes <br>
                    - ggf. Teilwechseln der Bettwäsche <br>
                    - Maßnahmen zum körper- und situationsgerechten Liegen und Sitzen
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 53</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 2,65 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Dieser Leistungskomplex ist nur mit den
                    Leistungskomplexen 3 - 5 wählbar. <br>
                    <br>
                    Bei den Maßnahmen zum körper- und situationsgerechten Liegen und Sitzen steht hauptsächlich die
                    Bequemlichkeit
                    bzw. Entlastung und Linderung von Beschwerden des Pflegebedürftigen im Vordergrund.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk8') }}" style="width: 50%;" name="tagelk8">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR9 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator9">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 9: Hilfen beim Aufsuchen und
                    Verlassen
                    des Bettes - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- Hilfe beim Aufsuchen bzw. Verlassen
                    des
                    Bettes/ des Rollstuhles o. ä. <br>
                    - Machen und Richten des Bettes <br>
                    - ggf. Teilwechseln der Bettwäsche <br>
                    - Maßnahmen zum körper- und situationsgerechten Liegen und Sitzen
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 105</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 5,25 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Der Leistungskomplex 9 kann allein oder
                    in
                    Zusammenhang mit den Leistungskomplexen 12 - 16 und 19 gewählt werden. <br>
                    <br>
                    Der Leistungskomplex 9 kann nicht im Zusammenhang mit den Leistungskomplexen 3 - 6 sowie 8, 10 und
                    11 gewählt
                    werden. <br>
                    <br>
                    Bei den Maßnahmen zum körper- und situationsgerechten Liegen und Sitzen steht hauptsächlich die
                    Bequemlichkeit
                    bzw. Entlastung und Linderung von Beschwerden des Pflegebedürftigen im Vordergrund.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk9') }}" style="width: 50%;" name="tagelk9">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>


        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR10 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator10">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 10: Spezielle Lagerung bei
                    Immobilität
                    im Zusammenhang mit der Körperpflege - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- Spezielle Lagerungsmaßnahmen zur
                    körper- und/
                    oder situationsgerechten Lagerung in und außerhalb des Bettes zur Vorbeugung von
                    Sekundärerkrankungen und
                    Linderung von Beschwerden unter Verwendung von Lagerungshilfsmitteln <br>
                    - ggf. mit Hilfe beim Verlassen und Aufsuchen des Bettes <br>
                    - ggf. Teilwechsel der Wäsche und Bett machen/ richten

                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 105</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 5,25 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Dieser Leistungskomplex ist nur mit
                    den
                    Leistungskomplexen 3 - 5 wählbar. <br>
                    <br>
                    Liegt keine Immobilität vor, sind Maßnahmen zum körper- und situationsgerechten Liegen und Sitzen im
                    Sinne der
                    aktivierenden Pflege im Rahmen der einzelnen Verrichtungen zu erbringen und damit nicht gesondert
                    wählbar.

                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk10') }}" style="width: 50%;" name="tagelk10">
                </div>

                <div style="display: flex; justify-content: center;"><button class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR11 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator11">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 11: Spezielle Lagerung bei
                    Immobilität -
                    Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- Spezielle Lagerungsmaßnahmen zur
                    körper- und/
                    oder situationsgerechten Lagerung in und außerhalb des Bettes zur Vorbeugung von
                    Sekundärerkrankungen und
                    Linderung von Beschwerden unter Verwendung von Lagerungshilfsmitteln <br>
                    - ggf. mit Hilfe beim Verlassen und Aufsuchen des Bettes <br>
                    - ggf. Teilwechsel der Wäsche und Bett machen/ richten

                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 210</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 10,50 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Der Leistungskomplex 11 kann allein
                    oder in
                    Zusammenhang mit den Leistungskomplexen 12 – 16 und 19 gewählt werden. <br>
                    <br>
                    Liegt keine Immobilität vor, sind Maßnahmen zum körper- und situationsgerechten Liegen und Sitzen im
                    Sinne der
                    aktivierenden Pflege im Rahmen der einzelnen Verrichtungen zu erbringen und damit nicht gesondert
                    wählbar.

                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk11') }}" style="width: 50%;" name="tagelk11">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR12 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator12">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 12: Einfache Hilfe bei der
                    Nahrungsaufnahme - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">Mundgerechtes Zubereiten der Nahrung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    Alle Tätigkeiten, die der unmittelbaren Vorbereitung dienen und die Nahrungsaufnahme ermöglichen.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfen beim Essen und Trinken/ sonstige
                    Mahlzeit</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    Einschließlich der Begleitung zum Ort der Nahrungsaufnahme und zurück, oder Aufrichten im Bett,
                    Darreichung
                    der Nahrung sowie ausreichende Flüssigkeitszufuhr. Unter sonstiger Mahlzeit sind kleine
                    Zwischenmahlzeiten zu
                    verstehen, wie z.B. das Essen eines Apfels, eines Brotes oder Joghurts.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hygiene im Zusammenhang mit der
                    Nahrungsaufnahme</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    Hände waschen, Mundpflege, ggf. Säubern/ Wechseln von verschmutzten Kleidungsstücken.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 105</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 5,25 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Der Leistungskomplex 12 kann in einem
                    Einsatz
                    nicht neben dem Leistungskomplex 13 vom Pflegebedürftigen gewählt werden. <br>
                    <br>
                    Der Leistungskomplex 12 ist nicht gesondert wählbar, wenn im Zusammenhang mit der Zubereitung einer
                    Zwischenmahlzeit (LK 19: Hauswirtschaftliche Versorgung) das Portionieren bzw. Kleinschneiden der
                    Nahrung
                    erforderlich wird und der Pflegebedürftige keine Hilfe bei der Nahrungsaufnahme benötigt.

                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk12') }}" style="width: 50%;" name="tagelk12">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR13 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator13">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 13: Umfangreiche Hilfe bei der
                    Nahrungsaufnahme - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">Mundgerechtes Zubereiten der Nahrung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    Alle Tätigkeiten, die der unmittelbaren Vorbereitung dienen und die Nahrungsaufnahme ermöglichen.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfen beim Essen und Trinken/ sonstige
                    Mahlzeit</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    Einschließlich der Begleitung zum Ort der Nahrungsaufnahme und zurück, oder Aufrichten im Bett,
                    Darreichung
                    der Nahrung sowie ausreichende Flüssigkeitszufuhr, Beratung bei Essens- und Getränkeauswahl, der
                    Zubereitung
                    und Darreichung sowie bei Problemen der Nahrungsaufnahme.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hygiene im Zusammenhang mit der
                    Nahrungsaufnahme</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    Hände waschen, Mundpflege, ggf. Säubern/ Wechseln von verschmutzten Kleidungsstücken.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 315</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 15,75 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Der Leistungskomplex 13 kann in einem
                    Einsatz
                    nicht neben dem Leistungskomplex 12 vom Pflegebedürftigen gewählt werden. <br>
                    <br>
                    Der Leistungskomplex 13 kann nur gewählt werden, wenn der Pflegebedürftige seine Nahrung und
                    Flüssigkeit nicht
                    ohne Hilfe zu sich nehmen kann. <br>
                    <br>
                    Der Leistungskomplex 13 ist nicht gesondert wählbar, wenn im Zusammenhang mit der Zubereitung einer
                    Mahlzeit
                    (LK 19: Hauswirtschaftliche Versorgung) ausschließlich das mundgerechte Zubereiten der Nahrung (z.B.
                    Fleisch
                    klein schneiden) erforderlich wird und der Pflegebedürftige ansonsten keine Hilfe bei der
                    Nahrungsaufnahme
                    benötigt. <br>
                    <br>
                    Der Leistungskomplex 13 kann grundsätzlich bis zu 3 x täglich vom Pflegebedürftigen gewählt werden.

                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk13') }}" style="width: 50%;" name="tagelk13">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>

        </div>
    </div>


    <!-- ########################### Online Rechner CALCULATOR14 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator14">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 14: Nahrungszufuhr durch
                    Verabreichung
                    von Sondenkost - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">Verabreichung der Sondennahrung über</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - Magensonde <br>
                    - Katheter - Jejunostomie (z.B. Witzel - Fistel) <br>
                    - PEG mittels Schwerkraft oder Pumpe
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Sondennahrung auf Körpertemperatur erwärmen
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Pflegebedürftigen ggf. in halbsitzende
                    Position bringen
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Überprüfung der Lage der Sonde</div>
                <div class="online-rechner-page2-section3-heading mt-4">Spülen der Sonde nach Applikation</div>
                <div class="online-rechner-page2-section3-heading mt-4">ggf. Reinigung des verwendeten Mehrfachsystems
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 105</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 5,25 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">Die Entscheidung für das Legen einer
                    Sonde und
                    die Art der Sondenernährung liegt beim Arzt. Die Durchführungsverantwortung der Pflegekraft liegt in
                    der
                    sorgfältigen Verabreichung der Sondenkost. Die Verabreichung von Sondenkost ist keine Medikation,
                    sondern
                    Ernährung. Bei der Verabreichung von Sondennahrung handelt es sich um eine grundpflegerische
                    Leistung. <br>
                    <br>
                    Eine künstliche Ernährung über einen längeren Zeitraum erfolgt häufig über eine
                    Perkutane-endoskopische-Gastrostomie-Sonde (PEG-Sonde), wenn der Pflegebedürftige nicht essen kann
                    aufgrund
                    von Störungen im Kau- und Schlucktrakt, z. B. nach Schlaganfall oder bei Bewusstseinsstörungen.

                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk14') }}" style="width: 50%;" name="tagelk14">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>

        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR15 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator15">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 15: Ergänzende Hilfe bei
                    Ausscheidungen
                    im Zusammenhang mit der Körperpflege - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfen/Unterstützung bei Ausscheidungen, die
                    über das
                    Maß der physiologischen Blasen- und Darmentleerung hinausgehen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - Reinigung des Harnröhrenkatheters (Reinigung des Katheters und der Harnröhrenöffnung, ggf.
                    Abklemmen in
                    zeitlich festgelegten Intervallen) <br>
                    - Wechseln des Katheter-, Urostoma- und Anus praeter-Beutels <br>
                    - Inkontinenzversorgung
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Kontinenztraining</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- der Blase <br>
                    - des Darms</div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 84</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 4,20 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">
                    Diese Leistung ist nur neben den Leistungskomplexen 3 – 5 wählbar.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk15') }}" style="width: 50%;" name="tagelk15">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>

        </div>
    </div>

    <!-- ########################### Online Rechner CALCULATOR16 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator16">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 16: Umfangreiche Hilfe bei
                    Ausscheidungen - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">An- und Auskleiden, ggf. An- und Ablegen von
                    Körperersatzstücken</div>

                <div class="online-rechner-page2-section3-heading mt-4">Begleitung zu und von der Toilette</div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfen/Unterstützung bei Ausscheidungen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - Unterstützung bei der physiologischen Darm- und Blasenentleerung
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfen/Unterstützung bei Ausscheidungen, die
                    über das
                    Maß der physiologischen Blasen- und Darmentleerung hinausgehen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- Reinigung des Harnröhrenkatheters
                    (Reinigung
                    des Katheters und Harnröhrenöffnung, ggf. Abklemmen in zeitlich festgelegten Intervallen)
                    - Wechseln des Katheter-, Urostoma- und Anus praeter-Beutels
                    - Inkontinenzversorgung<br>

                    <div class="online-rechner-page2-section3-heading mt-4">Kontinenztraining</div>
                    <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- der Blase <br>
                        - des Darms</div>

                    <div class="online-rechner-page2-section3-heading mt-4">Hilfe bei Erbrechen</div>

                    <div class="online-rechner-page2-section3-heading mt-4">Entsorgung von Ausscheidungen</div>

                    <div class="online-rechner-page2-section3-heading mt-4">Teilwaschen</div>

                    <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 210</div>
                    <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 10,50 EUR</div>

                    <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">
                        Der Leistungskomplex 16 kann bei einem Einsatz nicht in Verbindung mit den Leistungskomplexen 3
                        – 5 sowie 15
                        gewählt werden. <br>
                        <br>
                        Benötigt der Pflegebedürftige Hilfen bei Ausscheidungen, die nicht im Zusammenhang mit der
                        Körperpflege
                        (Leistungskomplexen 3 – 5) erbracht werden, wählt er diesen Leistungskomplex.
                    </div>


                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                        <label style="margin-top: -0.67rem;"
                            class="online-rechner-page2-section3-heading input-margin-top"
                            for="online-rechner-input1">Anzahl Tage im Monat</label>
                        <input type="number" value="{{ old('tagelk16') }}" style="width: 50%;"
                            name="tagelk16">
                    </div>

                    <div style="display: flex; justify-content: center;"><button
                            class="online-rechner-page2-section3-btn"
                            style="border: none; text-transform: uppercase;">berechnen</button></div>
                </div>
            </div>

        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR17 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator17">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn11">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 17: Hilfestellung beim
                    Verlassen oder
                    Wiederaufsuchen der Wohnung - Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">An- und Auskleiden</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">im Zusammenhang mit dem Verlassen oder
                    Wiederaufsuchen der Wohnung <br>
                    - Auswahl der Kleidung <br>
                    - ggf. An- und Ablegen von Körperersatzstücken</div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfestellung beim Verlassen und
                    Wiederaufsuchen der
                    Wohnung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    ggf. Treppensteigen
                </div>


                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 84</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 4,20 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">
                    Der Leistungskomplex 17 kann bei einem Einsatz nicht in Verbindung mit Leistungskomplex 18 gewählt
                    werden.
                    <br>
                    <br>
                    Der Leistungskomplex 17 ist z.B. vor dem Transfer der/ des Pflegebedürftigen zu/ von einem
                    stationären
                    Aufenthalt oder im Zusammenhang mit dem Besuch einer Tagespflege wählbar.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk17') }}" style="width: 50%;" name="tagelk17">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>


        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR18 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator18">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 18: Begleitung bei Aktivitäten
                    -
                    Grundpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">An- und Auskleiden</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">im Zusammenhang mit dem Verlassen oder
                    Wiederaufsuchen der Wohnung <br>
                    - Auswahl der Kleidung <br>
                    - ggf. An- und Ablegen von Körperersatzstücken</div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfestellung beim Verlassen und
                    Wiederaufsuchen der
                    Wohnung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    ggf. Treppensteigen
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Begleitung bei Aktivitäten</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    bei denen das persönliche Erscheinen erforderlich und ein Hausbesuch nicht möglich ist (keine
                    Spaziergänge und
                    kulturellen Veranstaltungen)
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 630</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 31,50 EUR</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">
                    Dieser Leistungskomplex kann bei einem Einsatz nicht in Verbindung mit Leistungskomplex 17 gewählt
                    werden.
                    <br>
                    <br>
                    Es ist zu gewährleisten, dass der Pflegebedürftige unter ständiger Betreuung der Begleitperson
                    steht. Dies
                    gilt auch für evtl. Wartezeiten in Arztpraxen oder Behörden. Reine Fahrdienste können nicht gewählt
                    werden.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk18') }}" style="width: 50%;" name="tagelk18">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>


        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR19 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator19">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 19: Hauswirtschaftliche
                    Versorgung
                </div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">Aufräumen und Reinigung der Wohnung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">- Trennen und Entsorgung des Abfalls
                    - Spülen <br>
                    - Aufräumen <br>
                    - Reinigung des Bades/ der Toilette/ der Küche/ des Wohn- und Schlafbereichs <br>
                    - Staubsaugen/ Nassreinigung <br>
                    - Staubwischen</div>

                <div class="online-rechner-page2-section3-heading mt-4">Vor- und Zubereitung von Mahlzeiten</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - kalte Mahlzeiten <br>
                    - warme Mahlzeiten (warme Mahlzeiten kochen, Erwärmen einer vorbereiteten Mahlzeit) <br>
                    - Zwischenmahlzeit vorbereiten bzw. bereitstellen <br>
                    - Mundgerechte Zubereitung <br>
                    - Anrichten <br>
                    - Tisch decken <br>
                    - Aufräumen <br>
                    - Spülen, Trocknen und Einräumen <br>
                    - Reinigung des Arbeitsbereiches </div>

                <div class="online-rechner-page2-section3-heading mt-4">Einkaufen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - Erstellen eines Einkaufs-/ Speiseplanes <br>
                    - Das Einkaufen von Lebensmitteln und sonstigen notwendigen Bedarfsgegenständen der Hygiene und
                    hauswirtschaftlichen Versorgung <br>
                    - Unterbringung der eingekauften Gegenstände in der Wohnung/ Vorratsschrank <br>
                    - Besorgungen in der Nähe der Wohnung des Pflegebedürftigen (Apotheke, Post, Reinigung)
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Pflege der Wäsche und Kleidung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - Wechseln der Wäsche <br>
                    - Vollständiges Ab- und Beziehen des Bettes <br>
                    - Waschen der Wäsche <br>
                    - Aufhängen der Wäsche <br>
                    - ggf. Ausbessern <br>
                    - Bügeln <br>
                    - Einräumen
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Beheizen der Wohnung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - Beschaffung des Heizmaterials und Entsorgung der Verbrennungsrückstände <br>
                    - Heizen der installierten Öfen mit Holz, Kohle und Öl (nicht Zentralheizung)
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 84 je angefangene 10 Minuten</div>
                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 4,20 EUR je angefangene 10 Minuten
                </div>


                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">
                    Der Zeitumfang für die Inanspruchnahme des Leistungskomplexes wird durch den Pflegebedürftigen
                    bestimmt.
                    <br> <br>
                    Bei den hauswirtschaftlichen Verrichtungen handelt es sich um Leistungen, die den unmittelbaren
                    Lebensbereich
                    des Pflegebedürftigen betreffen. Nicht wählbar sind daher z.B. Gartenpflege, Pflege der
                    Balkonpflanzen,
                    Treppenhausreinigung, Haustierversorgung, Entsorgung von Sperrmüll.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Summe Minuten im Monat</label>
                    <input type="number" value="{{ old('tagelk19') }}" style="width: 50%;" name="tagelk19">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>



        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR20 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator20">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 20: Beratungsbesuch gem. § 37
                    Abs. 3 SGB
                    XI
                </div>
                <div class="online-rechner-page2-section3-heading mt-4">Beratung</div>
                <div class="online-rechner-page2-section3-heading mt-4">Hilfestellung und praktische pflegefachliche
                    Unterstützung</div>
                <div class="online-rechner-page2-section3-heading mt-4">Mitteilung an die Pflegekasse (Formular nach §
                    37 Abs. 4
                    Satz 2 SGB XI)</div>
                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 1103</div>

                <div class="online-rechner-page2-section3-heading mt-4">Vergütung: 55,15 EUR</div>


                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">
                    Die Beratungsbesuche dienen der regelmäßigen Hilfestellung und praktischen pflegefachlichen
                    Unterstützung der
                    Pflegebedürftigen und häuslich Pflegenden sowie der Sicherung der Qualität der häuslichen Pflege.
                    <br>
                    <br>
                    Darüber hinaus soll über zusätzliche Hilfen, die sowohl der Pflegebedürftige als auch die häuslich
                    Pflegenden
                    in Anspruch nehmen können, informiert werden. Die Beratung bezieht sich in der Regel auf: <br>
                    <br>
                    - die Einschätzung der individuellen Pflegesituation <br>
                    <br>
                    - die Beratung sowohl des Pflegebedürftigen als auch ggf. der häuslich Pflegenden <br>
                    <br>
                    - die Hilfestellung und praktische pflegefachliche Unterstützung; je nach individueller Bedarfslage
                    die
                    Durchführung einer Kurzintervention <br>
                    <br>
                    - das Aufgreifen der Beratungsbedarfe des Pflegebedürftigen und ggf. der häuslich Pflegenden
                    <br> <br>
                    - die Weitergabe von Informationen und Hinweisen zu und bei Bedarf eine Weitervermittlung von
                    vorhandenen
                    Auskunfts-, Beratungs- und Unterstützungsangeboten für Pflegebedürftige und häuslich Pflegende (zum
                    Beispiel):
                    <br>
                    x Pflegekurse/individuelle häusliche Schulungen nach § 45 SGB XI <br>
                    x Sachleistungen zur häuslichen Pflege, Kombinationsleistung, Leistungen der Tages- oder
                    <br>Nachtpflege,
                    Kurzzeitpflege, Verhinderungspflege, Angebote zur Unterstützung im Alltag <br>
                    x Hilfs-/Pflegehilfsmittel und technische Hilfen <br>
                    x Anpassung des Wohnraumes <br>
                    x Hinweis auf Freistellungsmöglichkeiten nach dem Pflegezeit- und Familienpflegezeitgesetz <br>
                    x Hinweise auf Rehabilitationsmaßnahmen <br>
                    x Hinweis auf Auskunfts-, Beratungs- und Unterstützungsangebote der Pflegestützpunkte und der
                    Pflegekassen
                    bzw. der privaten Versicherungsunternehmen, auf die Pflegeberatung nach § 7a SGB XI sowie auf
                    Selbsthilfegruppen <br>
                    x weitere Anregungen können sich beziehen auf die Hinzuziehung des behandelnden Arztes bzw. der
                    behandelnden
                    Ärztin, die Angebote anderer Leistungsträger <br>
                    <br>
                    - Empfehlungen zur Verbesserung der Pflegesituation (Überprüfung des Pflegegrades, Verbesserung der
                    Pflegetechnik, Vermeidung von Überlastung, Gestaltung des Pflegemixes) <br>
                    <br>
                    - Ggf. Information über das Vorgehen bei nicht sichergestellter Pflege <br>
                    <br>
                    Der Pflegedienst übermittelt der Pflegekasse mit Einverständnis des Pflegebedürftigen die bei dem
                    Beratungsbesuch gewonnenen Erkenntnisse und verwendet hierzu das von den Spitzenverbänden der
                    Pflegekassen zur
                    Verfügung gestellte einheitliche Mitteilungsformular. <br>
                    <br>
                    Abweichend davon ist das Mitteilungsformular bei Gefahr im Verzug inklusive der Angaben zur nicht
                    sichergestellten Pflege auch ohne Einwilligung des Pflegebedürftigen an die Pflegekasse
                    weiterzuleiten. <br>
                    <br>
                    Der Beratungsbesuch ist durch eine examinierte Pflegefachkraft durchzuführen.
                </div>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Anzahl Tage im Monat</label>
                    <input type="number" value="{{ old('tagelk20') }}" style="width: 50%;" name="tagelk20">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>


        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR21 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator21">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Leistungskomplex 21: Wegepauschalen</div>

                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">beinhaltet i. d. R. <br> <br>
                    - Fahrt und Wegezeit bis zur Wohnung des Pflegebedürftigen bzw. Rückfahrt und Wegezeit von der
                    Wohnung des
                    Pflegebedürftigen sowie Leistungserbringung zu ungünstigen Zeiten. <br>
                    <br>
                    - Werden Leistungen der Häuslichen Krankenpflege nach SGB V und der Häuslichen Pflege nach SGB XI
                    zusammen
                    innerhalb eines Einsatzes erbracht, wird die Wegepauschale den <br>Sozialversicherungsträgern
                    hälftig
                    berechnet. Folgende Wegepauschalen können abgerechnet werden.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">1a) Wegepauschale - Besuche zwischen 6.01 Uhr
                    und 20.00
                    Uhr</div>
                <div class="online-rechner-page2-section3-heading mt-4">1b) erhöhte (verdoppelte) Wegepauschale -
                    Besuch
                    zwischen 20.01 Uhr und 6.00 Uhr sowie an Samstagen, Sonn- und gesetzlichen Feiertagen</div>
                <div class="online-rechner-page2-section3-heading mt-4">1c) halbe Wegepauschale - Besuch zwischen 6.01
                    Uhr und
                    20.00 Uhr bei gleichzeitiger Erbringung von Leistungen nach SGB V</div>
                <div class="online-rechner-page2-section3-heading mt-4">1d) halbe erhöhte Wegepauschale zwischen 20.01
                    Uhr und
                    6.00 Uhr sowie an Samstagen, Sonn- und gesetzlichen Feiertagen bei gleichzeitiger Erbringung von
                    Leistungen
                    nach SGB V</div>


                <div class="online-rechner-section3-form-sub-heading mt-4 mb-3">
                    Werden mehrere Pflegebedürftige in einem gemeinsamen Haushalt durch denselben Pflegedienst in einem
                    Einsatz
                    gepflegt, wird die entsprechende Wegepauschale für jeden Pflegebedürftigen hälftig berechnet. <br>
                    <br>
                    In Wohnanlagen für Senioren (z.B. Seniorenresidenzen, Wohnstifte, Seniorenwohngemeinschaften) werden
                    pflegebedürftige Bewohner häufig durch Pflegedienste betreut, deren Sitz der Wohneinrichtung
                    räumlich
                    unmittelbar zugeordnet ist. Soweit diese Pflegedienste Leistungen in der Wohneinrichtung erbringen,
                    kann
                    anstelle der Wegepauschale für jeden Pflegebedürftigen nur das vereinbarte Wegegeld abgerechnet
                    werden. <br>
                    <br>
                    Von externen Pflegediensten, die zeitlich zusammenhängend mehr als zwei Pflegebedürftige
                    nacheinander in den
                    genannten Einrichtungen pflegen, kann für jeden Pflegebedürftigen nur das vereinbarte Wegegeld
                    abgerechnet
                    werden.
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Vergütung 21a: 4,65 EUR</div>
                <div class="online-rechner-page2-section3-heading mt-1">Vergütung 21b: 7,90 EUR</div>
                <div class="online-rechner-page2-section3-heading mt-1">Vergütung 21c: 2,33 EUR</div>
                <div class="online-rechner-page2-section3-heading mt-1">Vergütung 21d: 3,95 EUR</div>
                <div class="online-rechner-page2-section3-heading mt-1">Vergütung 21 (Interner Dienst): 1,27 EUR</div>
                <div class="online-rechner-page2-section3-heading mt-1">Vergütung 21 (Externer Dienst, mehr als zwei
                    Pflegebedürftige): 1,88 EUR</div>
                <div class="online-rechner-page2-section3-heading mt-1">Vergütung 21 (Pflegeleistungen, Minutenwert):
                    0,75 EUR
                </div>
                <div class="online-rechner-page2-section3-heading mt-1">Vergütung 21 (Betreuungsleistungen,
                    Minutenwert): 0,50
                    EUR</div>
                <br><br><br>


                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Summe Minuten im Monat</label>
                    <input type="number" value="{{ old('tagelk21') }}" style="width: 50%;" name="tagelk21">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>
            </div>

        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR22 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator22">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn22">GP</button>
                    <button class="calculator-btns" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Grundpflege - nach Zeit</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">An- und Auskleiden</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - die Auswahl der Kleidung <br>
                    - das An- und Auskleiden <br>
                    - das An- und Ablegen von Körperersatzstücken
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Körperpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - das Ganz- oder Teilwaschen bzw. das Duschen sowie das Waschen im Vollbad <br>
                    - die anschließende Hautpflege <br>
                    - ggf. Waschen und Trocknen der Haare <br>
                    - ggf. einfaches Schneiden der Finger- und Fußnägel
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Mund-/ Zahnpflege</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - die Lippenpflege <br>
                    - Zahnprothesenversorgung <br>
                    - die Mundhygiene

                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Kämmen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    einschließlich des Herrichtens der Tagesfrisur (z. B. Flechtfrisur)
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Rasieren</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    Nass- oder Trockenrasur einschließlich der damit verbundenen Hautpflege
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfe beim Aufsuchen bzw. Verlassen des
                    Bettes/ des
                    Rollstuhles/ der Sitzgelegenheit o. ä.</div>
                <div class="online-rechner-page2-section3-heading mt-4">Maßnahmen zum körper- und situationsgerechten
                    Liegen und
                    Sitzen</div>
                <div class="online-rechner-page2-section3-heading mt-4">Spezielle Lagerungsmaßnahmen zur körper- und/
                    oder
                    situationsgerechten Lagerung in und außerhalb des Bettes zur Vorbeugung von Sekundärerkrankungen und
                    Linderung
                    von Beschwerden unter Verwendung von Lagerungshilfsmitteln</div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfen/ Unterstützung bei Ausscheidungen</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - der Gang zur Toilette und die Begleitung zur Waschgelegenheit <br>
                    - Unterstützung bei der physiologischen Darm- und Blasenentleerung <br>
                    - Reinigung des Harnröhrenkatheters (Reinigung des Katheters und Harnröhrenöffnung, ggf. Abklemmen
                    in zeitlich
                    festgelegten Intervallen) <br>
                    - Wechseln des Katheter-, Urostoma- und Anus praeter-Beutels <br>
                    - Inkontinenzversorgung
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Kontinenztraining</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - der Blase <br>
                    - des Darms
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfe bei Erbrechen</div>
                <div class="online-rechner-page2-section3-heading mt-4 mb-4">Entsorgung von Ausscheidungen</div>

                <div class="online-rechner-page2-section3-heading " style="display: inline;">Machen und Richten des
                    Bettes</div>
                <div class="online-rechner-section3-form-sub-heading " style="display: inline;">
                    (im Zusammenhang mit der Körperpflege) <br>
                    - ggf. Teilwechseln der Bettwäsche
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfe bei der Nahrungsaufnahme</div>
                <div class="online-rechner-section3-form-sub-heading mb-3">
                    - Mundgerechtes Zubereiten der vorbereiteten Nahrung <br>
                    - Hilfen beim Essen und Trinken <br>
                    - Darreichung der Nahrung sowie ausreichende Flüssigkeitszufuhr <br>
                    - Beratung bei der Essens- und Getränkeauswahl, der Zubereitung und Darreichung sowie bei Problemen
                    der
                    Nahrungsaufnahme <br>
                    - Hygiene im Zusammenhang mit der Nahrungsaufnahme
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Verabreichung der Sondennahrung über</div>
                <div class="online-rechner-section3-form-sub-heading mb-3">
                    - Magensonde/ Katheter – Jejunostomie (z.B. Witzel – Fistel)/ PEG mittels Schwerkraft oder Pumpe
                    <br>
                    - Sondennahrung auf Körpertemperatur erwärmen <br>
                    - Überprüfung der Lage der Sonde <br>
                    - Spülen der Sonde nach Applikation <br>
                    - ggf. Reinigung des verwendeten Mehrfachsystems
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfe bei der Mobilität
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Hilfestellung beim Verlassen und
                    Wiederaufsuchen der
                    Wohnung</div>
                <div class="online-rechner-section3-form-sub-heading mb-3">ggf. Treppensteigen</div>

                <div class="online-rechner-page2-section3-heading mt-4">Begleitung bei Aktivitäten</div>

                <div class="online-rechner-section3-form-sub-heading mb-3">bei denen das persönliche Erscheinen
                    erforderlich und
                    ein Hausbesuch nicht möglich ist (keine Spaziergänge und kulturellen Veranstaltungen)</div>

                <div class="online-rechner-page2-section3-heading mt-4">Einsatzmindestdauer: 15 Minuten</div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 15 Punkte je Minute</div>

                <div class="online-rechner-section3-form-sub-heading mb-3">Der Einsatz beginnt mit dem Betreten und
                    endet mit
                    dem Verlassen der Wohnung/ des Hauses. Für Leistungen, die mit einer begleitenden Tätigkeit
                    außerhalb der
                    Häuslichkeit einhergehen, beginnt bzw. endet der Einsatz an dem vereinbarten Leistungsort. <br>
                    <br>
                    Die Dokumentationszeit der SGB XI-Leistung ist am Leistungsort abrechenbare Zeit. <br>
                    <br>
                    Der Zeitumfang für die Inanspruchnahme dieser Leistung wird zwischen dem Pflegedienst und dem
                    Pflegebedürftigen im Pflegevertrag vereinbart. <br>
                    <br>
                    Die Wegepauschalen und -gelder sind auf Grundlage des LK 21 der Anlage 1 des niedersächsischen
                    Rahmenvertrages
                    gemäß § 75 Abs. 1 SGB XI zur ambulanten pflegerischen Versorgung abrechenbar. <br>
                    <br>
                    Rechte und Pflichten, die sich aus den „Hinweisen zum Vergütungssystem“ der Anlage 1 des
                    niedersächsischen
                    Rahmenvertrages gemäß § 75 Abs. 1 SGB XI zur ambulanten pflegerischen Versorgung ergeben, sind
                    sowohl für die
                    Kostenträger als auch den einzelnen Leistungserbringer entsprechend bindend.
                </div>



                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Summe Minuten im Monat</label>
                    <input type="number" value="{{ old('tagelk22') }}" style="width: 50%;" name="tagelk22">
                </div>

                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn"
                        style="border: none; text-transform: uppercase;">berechnen</button></div>

            </div>

        </div>
    </div>
    <!-- ########################### Online Rechner CALCULATOR23 ########################### -->
    <div class="online-rechner-section3-container rechner-calculators" id="calculator23">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die ambulante Pflege</div>

            <div class="online-rechner-content mt-4">
                Mit unserem Pflegekostenrechner können Sie schnell und einfach eine Übersicht über die möglichen Kosten
                der
                ambulanten Pflege erhalten. Die angezeigten Werte dienen als Orientierungshilfe und geben Ihnen einen
                ersten
                Eindruck der finanziellen Aufwendungen. Da die tatsächlichen Kosten je nach Pflegedienst und Region
                variieren
                können, empfehlen wir, sich zusätzlich bei örtlichen Anbietern über genaue Preise zu informieren.
            </div>
            <br />



            <!-- ######################## CALCULATOR1 FORM ######################## -->

            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                <div class="calculator-btn-container">
                    <button class="calculator-btns" id="calculator-btn0">PG</button>
                    <button class="calculator-btns  " id="calculator-btn1">LK 1</button>
                    <button class="calculator-btns" id="calculator-btn2">LK 2</button>
                    <button class="calculator-btns" id="calculator-btn3">LK 3</button>
                    <button class="calculator-btns" id="calculator-btn4">LK 4</button>
                    <button class="calculator-btns" id="calculator-btn5">LK 5</button>
                    <button class="calculator-btns" id="calculator-btn6">LK 6</button>
                    <button class="calculator-btns" id="calculator-btn7">LK 7</button>
                    <button class="calculator-btns" id="calculator-btn8">LK 8</button>
                    <button class="calculator-btns" id="calculator-btn9">LK 9</button>
                    <button class="calculator-btns" id="calculator-btn10">LK10</button>
                    <button class="calculator-btns" id="calculator-btn11">LK11</button>
                    <button class="calculator-btns" id="calculator-btn12">LK12</button>
                    <button class="calculator-btns" id="calculator-btn13">LK13</button>
                    <button class="calculator-btns" id="calculator-btn14">LK14</button>
                    <button class="calculator-btns" id="calculator-btn15">LK15</button>
                    <button class="calculator-btns" id="calculator-btn16">LK16</button>
                    <button class="calculator-btns" id="calculator-btn17">LK17</button>
                    <button class="calculator-btns" id="calculator-btn18">LK18</button>
                    <button class="calculator-btns" id="calculator-btn19">LK19</button>
                    <button class="calculator-btns" id="calculator-btn20">LK20</button>
                    <button class="calculator-btns" id="calculator-btn21">LK21</button>
                    <button class="calculator-btns" id="calculator-btn22">GP</button>
                    <button class="calculator-btns calculator-btn-active" id="calculator-btn23">BL</button>
                </div>


                <div class="online-rechner-section3-form-heading mb-4">Betreuungsleistungen - nach Zeit</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">beinhaltet i. d. R.</div>

                <div class="online-rechner-page2-section3-heading mt-4">Allgemeine Begleitung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - beim Spaziergang <br>
                    - beim Einkauf <br>
                    - bei Sportveranstaltungen und kulturellen Veranstaltungen <br>
                    - bei Veranstaltungen der Gemeinde, Kirchgang
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Beschäftigung und Beaufsichtigung</div>
                <div class="online-rechner-section3-form-sub-heading mt-1 mb-3">
                    - Vorlesen <br>
                    - Spielen <br>
                    - Unterhaltungen <br>
                    - Biografiearbeit (Erinnerungsarbeit)
                </div>

                <div class="online-rechner-page2-section3-heading mt-4">Einsatzmindestdauer: 15 Minuten</div>

                <div class="online-rechner-page2-section3-heading mt-4">Punktzahl: 10 Punkte je Minute</div>
                <div class="online-rechner-section3-form-sub-heading mb-3">Betreuungsleistungen umfassen Unterstützung
                    und
                    sonstige Hilfen im häuslichen Umfeld und schließen insbesondere mit ein <br>
                    <br>
                    - die Unterstützung von Aktivitäten im häuslichen Umfeld, die dem Zweck der Kommunikation und der
                    Aufrechterhaltung sozialer Kontakte dienen <br>
                    - die Unterstützung bei der Gestaltung des häuslichen Alltags, insbesondere Hilfen zur Entwicklung
                    und
                    Aufrechterhaltung einer Tagesstruktur, zur Durchführung bedürfnisgerechter Beschäftigungen und zur
                    Einhaltung
                    eines bedürfnisgerechten Tag-/ Nachtrhythmus <br>
                    <br>
                    Die Betreuungsleistungen beinhalten nicht die Anleitung, Unterstützung, Hilfestellung bzw.
                    vollständige
                    Übernahme der Verrichtungen aus den Bereichen Körperpflege, Ernährung und Mobilität sowie der
                    Hauswirtschaft.
                    <br>
                    <br>
                    Der Anspruch auf häusliche Betreuung setzt voraus, dass die Grundpflege und die hauswirtschaftliche
                    Versorgung
                    im Einzelfall sichergestellt sind. <br>
                    <br>
                    Die Inanspruchnahme dieser Leistung schmälert einen ggf. bestehenden Anspruch auf zusätzliche
                    Betreuungsleistungen nach § 45 b SGB XI nicht. <br>
                    <br>
                    Der Einsatz beginnt mit dem Betreten und endet mit dem Verlassen der Wohnung/ des Hauses. Für
                    Leistungen
                    außerhalb der Häuslichkeit beginnt bzw. endet der Einsatz an dem vereinbarten Leistungsort. <br>
                    <br>
                    Die Dokumentationszeit der SGB XI-Leistung ist am Leistungsort abrechenbare Zeit. <br>
                    <br>
                    Der Zeitumfang für die Inanspruchnahme dieser Leistung wird zwischen dem Pflegedienst und dem
                    Pflegebedürftigen im Pflegevertrag vereinbart. <br>
                    <br>
                    Die Wegepauschalen und -gelder sind auf Grundlage des LK 21 der Anlage 1 des niedersächsischen
                    Rahmenvertrages
                    gemäß § 75 Abs. 1 SGB XI zur ambulanten pflegerischen Versorgung abrechenbar. <br>
                    <br>
                    Rechte und Pflichten, die sich aus den „Hinweisen zum Vergütungssystem“ der Anlage 1 des
                    niedersächsischen
                    Rahmenvertrages gemäß § 75 Abs. 1 SGB XI zur ambulanten pflegerischen Versorgung ergeben, sind
                    sowohl für die
                    Kostenträger als auch den einzelnen Leistungserbringer entsprechend bindend.
                </div>



                <div class="online-rechner-page2-section3-input-div"
                    style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                    <label style="margin-top: -0.67rem;"
                        class="online-rechner-page2-section3-heading input-margin-top"
                        for="online-rechner-input1">Summe Minuten im Monat</label>
                    <input type="number" value="{{ old('tagelk23') }}" style="width: 50%;" name="tagelk23">
                </div>


                <div style="display: flex; justify-content: center;"><button
                        class="online-rechner-page2-section3-btn" style="border: none; text-transform: uppercase;"
                        type="submit">berechnen</button></div>
            </div>
            </form>


        </div>

    </div>




    <div class="container mb-5">
        <div class="online-rechner-section3-bottom">
            <div class="online-rechner-section3-heading-bottom">
                <div>Ergebnis</div>
            </div>

            @if (old('tagelk1') > 0 ||
                    old('tagelk2') > 0 ||
                    old('tagelk3') > 0 ||
                    old('tagelk4') > 0 ||
                    old('tagelk5') > 0 ||
                    old('tagelk6') > 0 ||
                    old('tagelk7') > 0 ||
                    old('tagelk8') > 0 ||
                    old('tagelk9') > 0 ||
                    old('tagelk10') > 0 ||
                    old('tagelk11') > 0 ||
                    old('tagelk12') > 0 ||
                    old('tagelk13') > 0 ||
                    old('tagelk14') > 0 ||
                    old('tagelk15') > 0 ||
                    old('tagelk16') > 0 ||
                    old('tagelk17') > 0 ||
                    old('tagelk18') > 0 || 
                    old('tagelk20') > 0
                    )
                    
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align:left;">Leistungskatalog</th>
                                <th scope="col" style="text-align:right;">Angesetzte Tage je Monat</th>
                                <th scope="col" style="text-align:right;">Kosten je Monat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 18; $i++)
                                @if (old('tagelk' . $i) > 0)
                                    <tr>
                                        <td style="text-align:left;">{{ session('leistung' . $i) }}</td>
                                        <td style="text-align:right;">{{ number_format(old('tagelk' . $i), 0, ',', '.') }}</td>
                                        <td style="text-align:right;">{{ number_format(session('monatlk' . $i), 2, ',', '.') }} EUR</td>
                                    </tr>
                                @endif
                            @endfor
                            @if (old('tagelk20') > 0)
                            <tr>
                                <td style="text-align:left;">{{ session('leistung20') }}</td>
                                <td style="text-align:right;">{{ number_format(old('tagelk20'), 0, ',', '.') }}</td>
                                <td style="text-align:right;">{{ number_format(session('monatlk20'), 2, ',', '.') }} EUR</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                
            @endif

            @if (old('tagelk19') > 0 || old('tagelk21') > 0 || old('tagelk22') > 0 || old('tagelk23') > 0)

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:left;">Leistungskatalog</th>
                                    <th scope="col" style="text-align:right;">Angesetzte Minuten je Monat</th>
                                    <th scope="col" style="text-align:right;">Kosten je Monat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (old('tagelk19') > 0)
                                    <tr>
                                        <td style="text-align:left;">{{ session('leistung19') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(old('tagelk19'), 0, ',', '.') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(session('monatlk19'), 2, ',', '.') }} EUR</td>
                                    </tr>
                                @endif
                                @if (old('tagelk21') > 0)
                                    <tr>
                                        <td style="text-align:left;">{{ session('leistung21') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(old('tagelk21'), 0, ',', '.') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(session('monatlk21'), 2, ',', '.') }} EUR</td>
                                    </tr>
                                @endif
                                @if (old('tagelk22') > 0)
                                    <tr>
                                        <td style="text-align:left;">{{ session('leistung22') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(old('tagelk22'), 0, ',', '.') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(session('monatlk22'), 2, ',', '.') }} EUR</td>
                                    </tr>
                                @endif
                                @if (old('tagelk23') > 0)
                                    <tr>
                                        <td style="text-align:left;">{{ session('leistung23') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(old('tagelk23'), 0, ',', '.') }}</td>
                                        <td style="text-align:right;">
                                            {{ number_format(session('monatlk23'), 2, ',', '.') }} EUR</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
            @endif

            <div class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2">
                <div style="padding-top: 0"><span class="span1">Gesamtsumme</span> <span class="span2">
                        {{ session('gesamtsumme') ? number_format(session('gesamtsumme'), 2, ',', '.') . ' EUR' : '' }}</span>
                </div>
                <div> <span class="span1">Erstattungsbetrag ({{old('pflegegrad')}})</span> <span class="span2">
                        {{ session('erstattungssatz') ? number_format(session('erstattungssatz'), 2, ',', '.') . ' EUR' : '' }}</span>
                </div>
                <div> <span class="span1">Differenz</span> <span class="span2">
                        {{ session('differenz') ? number_format(session('differenz'), 2, ',', '.') . ' EUR' : '' }}
                    </span> </div>

            </div>

        </div>
    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Online_rechner_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

    <script>
        $(function() {
            var targets = $('[rel~=tooltip]'),
                target = false,
                tooltip = false,
                title = false;

            targets.bind('mouseenter', function() {
                console.log('waow');
                target = $(this);
                tip = target.attr('title');
                tooltip = $('<div id="tooltip"></div>');

                if (!tip || tip == '')
                    return false;

                target.removeAttr('title');
                tooltip.css('opacity', 0)
                    .html(tip)
                    .appendTo('body');

                var init_tooltip = function() {
                    if ($(window).width() < tooltip.outerWidth() * 1.5)
                        tooltip.css('max-width', $(window).width() / 2);
                    else
                        tooltip.css('max-width', 340);

                    var pos_left = target.offset().left + (target.outerWidth() / 2) - (tooltip
                            .outerWidth() / 2),
                        pos_top = target.offset().top - tooltip.outerHeight() - 20;

                    if (pos_left < 0) {
                        pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                        tooltip.addClass('left');
                    } else
                        tooltip.removeClass('left');

                    if (pos_left + tooltip.outerWidth() > $(window).width()) {
                        pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() /
                            2 + 20;
                        tooltip.addClass('right');
                    } else
                        tooltip.removeClass('right');

                    if (pos_top < 0) {
                        var pos_top = target.offset().top + target.outerHeight();
                        tooltip.addClass('top');
                    } else
                        tooltip.removeClass('top');

                    tooltip.css({
                            left: pos_left,
                            top: pos_top
                        })
                        .animate({
                            top: '+=10',
                            opacity: 1
                        }, 50);
                };

                init_tooltip();
                $(window).resize(init_tooltip);

                var remove_tooltip = function() {
                    tooltip.animate({
                        top: '-=10',
                        opacity: 0
                    }, 50, function() {
                        $(this).remove();
                    });

                    target.attr('title', tip);
                };

                target.bind('mouseleave', remove_tooltip);
                tooltip.bind('click', remove_tooltip);
            });
        });
    </script>

</body>

</html>
