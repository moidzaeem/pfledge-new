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

    @media (max-width: 767px) {
    .online-rechner-section3-inner-bottom {
        overflow-x: auto; /* Enables horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling for iOS */
        white-space: nowrap; /* Prevent line breaks in rows */
    }

    .online-rechner-section3-inner-bottom .row {
        display: flex; /* Ensure columns are aligned horizontally */
        flex-wrap: nowrap; /* Prevent wrapping */
    }

    .online-rechner-section3-inner-bottom .col-lg-8,
    .online-rechner-section3-inner-bottom .col-lg-2 {
        display: inline-block; /* Aligns the columns horizontally */
        white-space: normal; /* Ensure text inside columns can wrap normally */
    }

    .online-rechner-section3-inner-bottom .row > div {
        padding-left: 8px;
        padding-right: 8px;
    }

    .online-rechner-section3-inner-bottom .online-rechner-section3-bottom-heading2 {
        width: 100%; /* Ensures the footer text is properly centered */
        text-align: center;
        margin-top: 10px;
    }

    hr {
        border: 1px solid white;
        margin: 0;
    }
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

    <!-- ########################### Online Rechner SECTION 1 ########################### -->

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

        <button class="online-rechner-section2-btn1 online-rechner-section2-btn online-active-btn">
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
        <button class="online-rechner-section2-btn5 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.fifth') }}"></a>
            RECHNER PFLEGEKOSTEN FÜR AMBULANTE PFLEGE
        </button>
        <button class="online-rechner-section2-btn6 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.sixth') }}"></a>
            RECHNER ZUZAHLUNGEN
        </button>
    </div>

    <!-- ########################### Online Rechner SECTION 3 ########################### -->
    <div class="online-rechner-section3-container">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegegradrechner</div>
            <div class="online-rechner-section3-sub-heading">
                Ihr schneller Weg zur ersten Pflegegrad-Einschätzung – unser
                Pflegegradrechner
            </div>

            <div class="online-rechner-content">
                Mit unserem Pflegegradrechner können Sie eine erste Orientierung
                erhalten, ob und in welchem Umfang ein Pflegegrad beantragt werden
                kann. Dieser Rechner ist speziell für erwachsene Pflegebedürftige
                entwickelt worden und basiert auf den aktuellen Richtlinien des
                Begutachtungsinstruments gemäß dem Elften Buch des Sozialgesetzbuches.
                Nehmen Sie sich etwas Zeit und füllen Sie die einzelnen
                Bewertungskriterien sorgfältig aus. Je genauer die Angaben, desto
                realistischer ist das Ergebnis.
            </div>
            <br />
            <div class="online-rechner-section3-content-bottom">
                Bitte beachten Sie: Der Pflegegradrechner dient als Orientierungshilfe
                und ersetzt nicht den persönlichen Antrag bei den zuständigen Stellen.
                Die endgültige Entscheidung über den Pflegegrad trifft der
                Medizinische Dienst (MD). Verwenden Sie den Rechner, um sich
                bestmöglich auf den Antrag vorzubereiten und eine fundierte
                Einschätzung zu erhalten.
            </div>

            <!-- ######################## Online Rechner Section 3 Buttons ######################## -->
            <div class=" mb-3 online-rechner-section3-heading-bottom">Erfassung</div>

            <div class="online-rechner-section3-buttons">
                <button id="module1-btn" class="online-rechner-section3-btn1 online-rechner-section3-btn active-btn2">
                    Modul 1
                </button>
                <button class="online-rechner-section3-btn" id="module2-btn">
                    Modul 2
                </button>
                <button class="online-rechner-section3-btn" id="module3-btn">
                    Modul 3
                </button>
                <button class="online-rechner-section3-btn" id="module4-btn">
                    Modul 4
                </button>
                <button class="online-rechner-section3-btn" id="module5-btn">
                    Modul 5
                </button>
                <button class="online-rechner-section3-btn" id="module6-btn">
                    Modul 6
                </button>
            </div>

            <!-- ######################## Online Rechner Section 3 Form ######################## -->
            <form action="{{ route('online.rechner.calculate') }}" method="POST">
                @csrf
                <!-- ######################## MODULE 1 FORM ######################## -->
                <div class="online-rechner-section3-form" style="display: block" id="module1Form">
                    <div class="online-rechner-section3-form-heading">1. Mobilität</div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Die Gutachterin oder der Gutachter schaut sich die körperliche
                        Beweglichkeit an. Zum Beispiel: Kann die betroffene Person alleine
                        aufstehen und vom Bett ins Badezimmer gehen? Kann sie sich
                        selbstständig in den eigenen vier Wänden bewegen, ist Treppensteigen
                        möglich?
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input1"
                                title="Einnehmen von verschiedenen Positionen im Bett, Drehen um die Längsachse, Aufrichten aus dem Liegen<br /><strong>Selbständig:</strong> Selbständig ist auch eine Person, die ihre Position unter Nutzung von Hilfsmitteln (Aufrichthilfe, Bettseitenteil, Strickleiter, elektrisch verstellbares Bett) allein verändern kann.<br /><strong>Überwiegend selbständig:</strong> Die Person kann beispielsweise nach Anreichen eines Hilfsmittels oder Reichen der Hand ihre Lage im Bett verändern.<br /><strong>Überwiegend unselbständig:</strong> Die Person kann beim Positionswechsel nur wenig mithelfen, z. B. auf den Rücken rollen, am Bettgestell festhalten, Aufforderungen folgen wie z. B. Bitte die Arme vor der Brust verschränken und den Kopf auf die Brust legen.<br /><strong>Unselbständig:</strong> Die Person kann sich beim Positionswechsel nicht oder nur minimal beteiligen."
                                rel="tooltip">1.1 Positionswechsel im Bett</label>
                            <select name="modul1_1" id="online-rechner-input1">
                                <option value="0" {{ old('modul1_1') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('modul1_1') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('modul1_1') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('modul1_1') == '3' ? 'selected' : '' }}>Unselbstständig
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input2"
                                title="Sich auf einem Bett, Stuhl oder Sessel aufrecht halten.<br /><strong>Selbständig:</strong> Selbständig ist eine Person auch dann, wenn sie beim Sitzen gelegentlich ihre Sitzposition korrigieren muss.<br /><strong>Überwiegend selbständig:</strong> Die Person kann sich nur kurz, z. B. für die Dauer einer Mahlzeit oder eines Waschvorgangs selbständig in der Sitzposition halten, darüber hinaus benötigt sie aber personelle Unterstützung zur Positionskorrektur.<br /><strong>Überwiegend unselbständig:</strong> Die Person kann sich wegen eingeschränkter Rumpfkontrolle auch mit Rücken- und Seitenstütze nicht in aufrechter Position halten und benötigt auch während der Dauer einer Mahlzeit oder eines Waschvorgangs personelle Unterstützung zur Positionskorrektur.<br /><strong>Unselbständig:</strong> Die Person kann sich nicht in Sitzposition halten. Bei fehlender Rumpf- und Kopfkontrolle kann die Person nur im Bett oder Lagerungsstuhl liegend gelagert werden."
                                rel="tooltip">1.2 Halten einer stabilen Sitzposition</label>
                            <select name="modul1_2" id="online-rechner-input2">
                                <option value="0" {{ old('modul1_2') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('modul1_2') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('modul1_2') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('modul1_2') == '3' ? 'selected' : '' }}>Unselbstständig
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label
                                for="online-rechner-input3"title="Von einer erhöhten Sitzfläche, Bettkante, Stuhl, Sessel, Bank, Toilette etc., aufstehen und sich auf einen Rollstuhl, Toilettenstuhl, Sessel o.ä. umsetzen<br />
                            <strong>Selbständig:</strong> Selbständig ist jemand auch dann, wenn er keine Personenhilfe benötigt, aber ein Hilfsmittel oder einen anderen Gegenstand zum Festhalten oder Hochziehen (z. B. Griffstangen) benutzt oder sich auf Tisch, Armlehnen oder sonstigen Gegenständen abstützen muss, um aufzustehen. Als selbständig ist auch zu bewerten, wer zwar nicht stehen kann, aber sich mit Armkraft ohne personelle Hilfe umsetzen kann (z. B. Bett – Rollstuhl, Rollstuhl – Toilette).
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann aus eigener Kraft aufstehen oder sich umsetzen, wenn sie eine Hand oder einen Arm gereicht bekommt.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Pflegeperson muss beim Aufstehen, Umsetzen (erheblichen) Kraftaufwand aufbringen (hochziehen, halten, stützen, heben). Die beeinträchtigte Person hilft jedoch in geringem Maße mit, kann z. B. kurzzeitig stehen.
                            <br />
                            <strong>Unselbständig:</strong> Die Person muss gehoben oder getragen werden, Mithilfe ist nicht möglich."
                                rel="tooltip">1.3 Umsetzen</label>
                            <select name="modul1_3" id="online-rechner-input3">
                                <option value="0" {{ old('modul1_3') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('modul1_3') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('modul1_3') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('modul1_3') == '3' ? 'selected' : '' }}>Unselbstständig
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input4"
                                title="Sich innerhalb einer Wohnung oder im Wohnbereich einer Einrichtung zwischen den Zimmern sicher bewegen. Als Anhaltsgröße für übliche Gehstrecken innerhalb einer Wohnung werden mindestens acht Meter festgelegt. Die Fähigkeiten zur räumlichen Orientierung und zum Treppensteigen sind im Modul 2 Ziffer 2 bzw. Modul 1 Ziffer 5 zu berücksichtigen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann sich ohne Hilfe durch andere Personen fortbewegen. Dies kann ggf. unter Nutzung von Hilfsmitteln, z. B. Rollator, Rollstuhl oder sonstigen Gegenständen, z. B. Stock oder Möbelstück geschehen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität überwiegend selbständig durchführen. Personelle Hilfe ist beispielsweise erforderlich im Sinne von Bereitstellen von Hilfsmitteln (z. B. Rollator oder Gehstock), Beobachtung aus Sicherheitsgründen oder gelegentlichem Stützen, Unterhaken.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur wenige Schritte gehen oder sich mit dem Rollstuhl nur wenige Meter fortbewegen oder kann nur mit Stützung oder Festhalten einer Pflegeperson gehen. Die ausschließliche Fähigkeit der Fortbewegung durch Krabbeln oder Robben ist generell als „überwiegend unselbständig“ zu bewerten.
                            <br />
                            <strong>Unselbständig:</strong> Die Person muss getragen oder vollständig im Rollstuhl geschoben werden."
                                rel="tooltip">1.4 Fortwegen innerhalb des Wohnbereichs</label>
                            <select name="modul1_4" id="online-rechner-input4">
                                <option value="0" {{ old('modul1_4') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('modul1_4') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('modul1_4') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('modul1_4') == '3' ? 'selected' : '' }}>Unselbstständig
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input5"
                                title="Überwinden von Treppen zwischen zwei Etagen. Treppensteigen ist unabhängig von der individuellen Wohnsituation zu bewerten.
                                    <br />
                                    <strong>Selbständig:</strong> Die Person kann ohne Hilfe durch andere Personen in aufrechter Position eine Treppe steigen.
                                    <br />
                                    <strong>Überwiegend selbständig:</strong> Die Person kann eine Treppe alleine steigen, benötigt aber Begleitung wegen eines Sturzrisikos.
                                    <br />
                                    <strong>Überwiegend unselbständig:</strong> Treppensteigen ist nur mit Stützen oder Festhalten der Person möglich.
                                    <br />
                                    <strong>Unselbständig:</strong> Person muss getragen oder mit Hilfsmitteln transportiert werden, keine Eigenbeteiligung."
                                rel="tooltip">1.5 Treppensteigen</label>
                            <select name="modul1_5" id="online-rechner-input5">
                                <option value="0" {{ old('modul1_5') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('modul1_5') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('modul1_5') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('modul1_5') == '3' ? 'selected' : '' }}>Unselbstständig
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input6">1.6 Gebrauchsfähigkeit beider Arme und Beine</label>
                            <select name="modul1_6" id="online-rechner-input6">
                                <option value="0" {{ old('modul1_6') == '0' ? 'selected' : '' }}>Ja</option>
                                <option value="1" {{ old('modul1_6') == '1' ? 'selected' : '' }}>Nein</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>
                <!-- ######################## MODULE 2 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module2Form">
                    <div class="online-rechner-section3-form-heading">
                        2. Kognitive & kommunikative Fähigkeiten
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Dieser Bereich umfasst das Verstehen und Reden. Zum Beispiel: Kann
                        sich die betroffene Person zeitlich und räumlich orientieren?
                        Versteht sie Sachverhalte, erkennt sie Risiken und kann sie
                        Gespräche mit anderen Menschen führen?
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input21"
                                title="Fähigkeit, Personen aus dem näheren Umfeld wiederzuerkennen, d. h. Menschen, zu denen im Alltag regelmäßig ein direkter Kontakt besteht. Dazu gehören z. B. Familienmitglieder, Nachbarn aber auch Pflegekräfte eines ambulanten Dienstes oder einer stationären Pflegeeinrichtung.
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Die Person erkennt andere Personen aus ihrem näheren Umfeld unmittelbar.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person erkennt bekannte Personen beispielsweise erst nach einer längeren Zeit des Kontaktes in einem Gespräch oder sie hat Schwierigkeiten wenn auch nicht täglich, aber doch in regelmäßigen Abständen, vertraute Personen zu erkennen.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die aus dem näheren Umfeld stammenden Personen werden nur selten erkannt oder die Fähigkeit hängt ggf. von der Tagesform ab, d. h. die Fähigkeit unterliegt im Zeitverlauf erheblichen Schwankungen.
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Auch Familienmitglieder werden nicht oder nur ausnahmsweise erkannt."
                                rel="tooltip">2.1 Erkennen von Personen aus dem näheren
                                Umfeld</label>
                            <select name="module2_1" id="online-rechner-input21">
                                <option value="0" {{ old('module2_1') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_1') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_1') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_1') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input22"
                                title="Fähigkeit, sich in der räumlichen Umgebung zurechtzufinden, andere Orte gezielt anzusteuern und zu wissen, wo man sich befindet
                            <br />
                            <strong>Fähigkeit vorhanden:</strong> Die Person weiß in welcher Stadt, auf welchem Stockwerk und ggf. in welcher Einrichtung sie sich befindet. Sie kennt sich in den regelmäßig genutzten Räumlichkeiten aus. Ein Verirren in den Räumlichkeiten der eigenen Wohnung oder unmittelbar im Wohnbereich einer Einrichtung kommt nicht vor und die Person findet sich auch in der näheren außenhäuslichen Umgebung zurecht. Sie weiß beispielsweise, wie sie zu benachbarten Geschäften, zu einer Bushaltestelle oder zu einer anderen nahe gelegenen Örtlichkeit gelangt.
                            <br />
                            <strong>Fähigkeit größtenteils vorhanden:</strong> Es bestehen Schwierigkeiten, sich in der außenhäuslichen Umgebung zu orientieren, beispielsweise nach Verlassen des Hauses wieder den Weg zurück zu finden. In den eigenen Wohnräumen existieren solche Schwierigkeiten hingegen nicht.
                            <br />
                            <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person hat auch in einer gewohnten Wohnumgebung Schwierigkeiten sich zurechtzufinden. Regelmäßig genutzte Räumlichkeiten und Wege in der Wohnumgebung werden nicht immer erkannt.
                            <br />
                            <strong>Fähigkeit nicht vorhanden:</strong> Selbst in der eigenen Wohnumgebung ist die Person regelmäßig auf Unterstützung angewiesen, um sich zurechtzufinden."
                                rel="tooltip">2.2 Örtliche Orientierung</label>
                            <select name="module2_2" id="online-rechner-input22">
                                <option value="0" {{ old('module2_2') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_2') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_2') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_2') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input23"
                                title="Fähigkeit, zeitliche Strukturen zu erkennen. Dazu gehören Uhrzeit, Tagesabschnitte (Vormittag, Nachmittag, Abend etc.), Jahreszeiten und die zeitliche Abfolge des eigenen Lebens. Aufschluss über die Fähigkeit zur zeitlichen Orientierung geben Antworten auf die Frage nach der Jahreszeit, dem Jahr, dem Wochentag, dem Monat oder der Tageszeit.
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Die zeitliche Orientierung ist ohne nennenswerte Beeinträchtigungen vorhanden.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person ist die meiste Zeit über zeitlich orientiert, aber nicht durchgängig. Sie hat z. B. Schwierigkeiten, ohne äußere Orientierungshilfen (Uhr, Dunkelheit etc.) den Tagesabschnitt zu bestimmen.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die zeitliche Orientierung ist die meiste Zeit nur in Ansätzen vorhanden. Die Person ist auch unter Nutzung äußerer Orientierungshilfen zumeist nicht in der Lage, Tageszeiten zu erkennen, zu denen regelmäßig bestimmte Ereignisse stattfinden (z. B. Mittagessen).
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Das Verständnis für zeitliche Strukturen und Abläufe ist kaum oder nicht vorhanden."
                                rel="tooltip">2.3 Zeitliche Orientierung</label>
                            <select name="module2_3" id="online-rechner-input23">
                                <option value="0" {{ old('module2_3') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_3') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_3') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_3') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input24"
                                title="Fähigkeit, sich an kurz und auch länger zurückliegende Ereignisse oder Beobachtungen zu erinnern. Dazu gehört, dass die Person z. B. weiß, was sie zum Frühstück gegessen hat oder mit welchen Tätigkeiten sie den Vormittag verbracht hat. Im Hinblick auf das Langzeitgedächtnis geht es bei Erwachsenen z. B. um die Kenntnis des Geburtsjahres, des Geburtsorts oder wichtiger Bestandteile des Lebensverlaufs wie Eheschließung und Berufstätigkeit.
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Die Person kann über kurz zurückliegende Ereignisse Auskunft geben oder durch Handlungen und Gesten signalisieren, dass sie sich erinnert.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person hat Schwierigkeiten, sich an manche kurz zurückliegende Ereignisse zu erinnern oder muss hierzu länger nachdenken, sie hat aber keine nennenswerten Probleme, sich an Ereignisse aus der eigenen Lebensgeschichte zu erinnern.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person vergisst kurz zurückliegende Ereignisse häufig. Nicht alle, aber wichtige Ereignisse aus der eigenen Lebensgeschichte sind (noch) präsent.
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Die Person ist nicht (oder nur selten) in der Lage, sich an Ereignisse, Dinge oder Personen aus der eigenen Lebensgeschichte zu erinnern."
                                rel="tooltip">2.4 Erinnern an wesentliche Ereignisse oder
                                Beobachtungen</label>
                            <select name="module2_4" id="online-rechner-input24">
                                <option value="0" {{ old('module2_4') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_4') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_4') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_4') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input25"
                                title="Fähigkeit, zielgerichtete Handlungen des Lebensalltags, die eine Abfolge von Teilschritten umfassen, zu steuern. Die Betonung liegt in diesem Fall auf dem Begriff Alltagshandlungen. Gemeint sind zielgerichtete Handlungen, die diese Person täglich oder nahezu täglich im Lebensalltag durchführt oder durchgeführt hat, wie z. B. das komplette Ankleiden, Kaffeeköchen oder Tischdecken.
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Die Person ist in der Lage, die erforderlichen Handlungsschritte selbständig in der richtigen Reihenfolge auszuführen oder zu steuern, so dass das angestrebte Ergebnis der Handlung erreicht wird.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person verliert manchmal den Faden und vergisst, welcher Handlungsschritt der nächste ist. Erhält sie dabei eine Erinnerungshilfe, kann sie die Handlung aber selbständig fortsetzen.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person hat erhebliche Schwierigkeiten. Sie verwechselt regelmäßig die Reihenfolge der einzelnen Handlungsschritte oder vergisst einzelne, notwendige Handlungsschritte.
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Mehrschrittige Alltagshandlungen werden erst gar nicht begonnen oder nach den ersten Versuchen aufgegeben."
                                rel="tooltip">2.5 Steuern von mehrschrittigen
                                Alltagshandlungen</label>
                            <select name="module2_5" id="online-rechner-input25">
                                <option value="0" {{ old('module2_5') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_5') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_5') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_5') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input26"
                                title="Fähigkeit, folgerichtige und geeignete Entscheidungen im Alltagsleben zu treffen. Dazu gehört z. B. die dem Wetter angepasste Auswahl von Kleidung, die Entscheidung über die Durchführung von Aktivitäten wie Einkaufen, Familienangehörige oder Freunde anrufen, einer Freizeitbeschäftigung nachzugehen. Zu klären ist hier die Frage, ob die Entscheidungen folgerichtig sind, d. h. geeignet sind, das angestrebte Ziel zu erreichen oder ein gewisses Maß an Sicherheit und Wohlbefinden oder Bedürfnisbefriedigung zu gewährleisten, z. B. warme Kleidung.
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Die Person kann auch in unbekannten Situationen folgerichtige Entscheidungen treffen, beispielsweise beim Umgang mit unbekannten Personen, die an der Haustür klingeln.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Im Rahmen der Alltagsroutinen oder zuvor besprochenen Situationen können Entscheidungen getroffen werden, die Person hat aber Schwierigkeiten in unbekannten Situationen.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person trifft zwar Entscheidungen, diese Entscheidungen sind jedoch in der Regel nicht geeignet, ein bestimmtes Ziel zu erreichen. Dies ist beispielsweise der Fall, wenn die Person mit nur leichter Bekleidung bei winterlichen Temperaturen im Freien spazieren gehen will. Weiterhin liegt eine schwere Beeinträchtigung vor, wenn die Person nur mit Unterstützung in Form von Anleitung, Aufforderung, Aufzeigen von Handlungsalternativen in der Lage ist, Entscheidungen zu treffen.
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Die Person kann Entscheidungen auch mit Unterstützung nicht mehr oder nur selten treffen. Sie zeigt keine deutbare Reaktion auf das Angebot mehrerer Entscheidungsalternativen)."
                                rel="tooltip">2.6 Treffen von Entscheidungen im Alltagsleben</label>
                            <select name="module2_6" id="online-rechner-input26">
                                <option value="0" {{ old('module2_6') == '1' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_6') == '2' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_6') == '3' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_6') == '4' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input27"
                                title="Fähigkeit, Sachverhalte zu verstehen und Informationen inhaltlich einordnen zu können. Hier geht es um Ereignisse und Inhalte, die Bestandteil des Alltagslebens der meisten Menschen sind. Gemeint ist etwa die Fähigkeit, zu erkennen, dass man sich in einer bestimmten Situation befindet, z. B. gemeinschaftliche Aktivitäten mit anderen Menschen, Versorgung durch eine Pflegekraft, MD-Begutachtung sowie die Fähigkeit, Informationen zum Tagesgeschehen aus den Medien z. B. Fernsehgerät, Tageszeitung aufzunehmen und inhaltlich zu verstehen. Gleiches gilt für mündlich von anderen Personen übermittelte Informationen.
                            <br />
                            <strong>Fähigkeit vorhanden:</strong> Die Person kann Sachverhalte und Informationen aus dem Alltagsleben ohne nennenswerte Probleme verstehen.
                            <br />
                            <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person kann einfache Sachverhalte und Informationen nachvollziehen, hat bei komplizierteren jedoch Schwierigkeiten.
                            <br />
                            <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann auch einfache Informationen häufig nur nachvollziehen, wenn sie wiederholt erklärt werden. Eine schwere Beeinträchtigung liegt auch dann vor, wenn das Verständnis sehr stark von der Tagesform abhängt.
                            <br />
                            <strong>Fähigkeit nicht vorhanden:</strong> Die Person gibt weder verbal noch nonverbal zu erkennen, dass sie Situationen und übermittelte Informationen verstehen kann."
                                rel="tooltip">2.7 Verstehen von Sachverhalten und
                                Informationen</label>
                            <select name="module2_7" id="online-rechner-input27">
                                <option value="0" {{ old('module2_7') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_7') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_7') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_7') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input28"
                                title="Fähigkeit, Risiken und Gefahren zu erkennen. Dazu gehören Gefahren wie Strom- und Feuerquellen, Barrieren und Hindernisse auf dem Fußboden bzw. auf Fußwegen, eine problematische Beschaffenheit des Bodens (z. B. Glätte) oder Gefahrenzonen in der außerhäuslichen Umgebung (z. B. verkehrsreiche Straßen, Baustellen).
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Die Person kann solche Risiken und Gefahrenquellen im Alltagsleben ohne weiteres erkennen, auch wenn sie ihnen aus anderen Gründen (z. B. aufgrund von somatischen Beeinträchtigungen) nicht aus dem Weg gehen kann.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person erkennt meist nur solche Risiken und Gefahren, die sich in der vertrauten innenhäuslichen Wohnumgebung wiederfinden. Es bestehen aber beispielsweise Schwierigkeiten, Risiken im Straßenverkehr angemessen einzuschätzen oder Gefährdungen in ungewohnter Umgebung zu erkennen.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann auch Risiken und Gefahren, denen sie häufig auch in der Wohnumgebung begegnet, oft nicht als solche erkennen.
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Die Person kann Risiken und Gefahren so gut wie gar nicht erkennen."
                                rel="tooltip">2.8 Erkennen von Risiken und Gefahren</label>
                            <select name="module2_8" id="online-rechner-input28">
                                <option value="0" {{ old('module2_8') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_8') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_8') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_8') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input29"
                                title="Fähigkeit, elementare Bedürfnisse verbal oder nonverbal mitzuteilen. Das beinhaltet sich bei Hunger oder Durst, Schmerzen oder Frieren bemerkbar zu machen. Bei Sprachstörungen kann dies ggf. durch Laute, Mimik oder Gestik bzw. unter Nutzung von Hilfsmitteln erfolgen.
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Die Person kann Bedürfnisse äußern.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person kann auf Nachfrage elementare Bedürfnisse äußern. Die Person äußert Bedürfnisse aber nicht immer von sich aus.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Elementare Bedürfnisse sind nur aus nonverbalen Reaktionen (Mimik, Gestik, Lautäußerungen) ableitbar, ggf. nach oder durch entsprechende(r) Stimulation; oder die Person äußert von sich aus keine elementaren Bedürfnisse, muss dazu ständig angeleitet werden, kann aber Zustimmung oder Ablehnung deutlich machen.
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Die Person äußert nicht oder nur sehr selten Bedürfnisse, auch nicht in nonverbaler Form. Sie kann weder Zustimmung noch Ablehnung deutlich machen."
                                rel="tooltip">2.9 Mitteilen von elementaren Bedürfnissen</label>
                            <select name="module2_9" id="online-rechner-input29">
                                <option value="0" {{ old('module2_9') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_9') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_9') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_9') == '3' ? 'selected' : '' }}>Nicht vorhanden
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="online-rechner-input210"
                                title="Fähigkeit, Aufforderungen in Hinblick auf alltägliche Grundbedürfnisse zu verstehen. Zu den alltäglichen Grundbedürfnissen gehören z. B. Essen, Trinken, sich kleiden, sich beschäftigen.
                                <br />
                                <strong>Fähigkeit vorhanden:</strong> Aufforderungen und Bitten zu alltäglichen Grundbedürfnissen werden ohne weiteres verstanden.
                                <br />
                                <strong>Fähigkeit größtenteils vorhanden:</strong> Einfache Bitten und Aufforderungen, wie z. B. „Setz dich bitte an den Tisch!“, „Zieh dir die Jacke über!“, „Komm zum Essen!“, „Prosit!“ werden verstanden, Aufforderungen in nicht alltäglichen Situationen müssen erklärt werden. Ggf. sind besonders deutliche Ansprache, Wiederholungen, Zeichensprache, Gebärdensprache oder Schrift erforderlich, um Aufforderungen verständlich zu machen.
                                <br />
                                <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann Aufforderungen und Bitten meist nicht verstehen, wenn diese nicht wiederholt geäußert und erläutert werden. Das Verständnis ist sehr von der Tagesform abhängig. Sie zeigt aber Zustimmung oder Ablehnung gegenüber nonverbalen Aufforderungen, z. B. Berührungen oder Geleiten an den Esstisch.
                                <br />
                                <strong>Fähigkeit nicht vorhanden:</strong> Die Person kann Anleitung und Aufforderungen kaum oder nicht verstehen."
                                rel="tooltip">2.10 Verstehen von Aufforderungen</label>
                            <select name="module2_10" id="online-rechner-input210">
                                <option value="0" {{ old('module2_10') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_10') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_10') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_10') == '3' ? 'selected' : '' }}>Nicht
                                    vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="online-rechner-input211"
                                title="Fähigkeit, in einem Gespräch Gesprächsinhalte aufzunehmen, sinngerecht zu antworten und zur Weiterführung des Gesprächs Inhalte einzubringen
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person kommt sowohl in Einzel- als auch in Gesprächen kleiner Gruppen gut zurecht. Sie zeigt im Gespräch Eigeninitiative, Interesse und beteiligt sich, wenn vielleicht auch nur auf direkte Ansprache hin. Ihre Äußerungen passen zu den Inhalten des Gesprächs.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person kommt in Gesprächen mit einer Person gut zurecht, in Gruppen ist sie jedoch meist überfordert und verliert den Faden. Wortfindungsstörungen treten ggf. regelmäßig auf. Die Person ist häufig auf besonders deutliche Ansprache oder Wiederholung von Worten, Sätzen angewiesen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann auch einem Gespräch nur mit einer Person kaum folgen oder sie kann sich nur wenig oder mit einzelnen Worten beteiligen. Die Person zeigt nur wenig Eigeninitiative, reagiert aber auf Ansprache oder Fragen mit wenigen Worten, z. B. mit ja oder nein; Die Person beteiligt sich am Gespräch, weicht aber in aller Regel vom Gesprächsinhalt ab (führt mehr ein Selbstgespräch) oder es besteht leichte Ablenkbarkeit durch Umgebungseinflüsse.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Ein Gespräch mit der Person, das über einfache Mitteilungen hinausgeht, ist auch unter Einsatz bonverbaler Kommunikation kaum oder nicht möglich."
                                rel="tooltip">2.11 Beteiligen an einem Gespräch</label>
                            <select name="module2_11" id="online-rechner-input211">
                                <option value="0" {{ old('module2_11') == '0' ? 'selected' : '' }}>Vorhanden /
                                    unbeeinträchtigt</option>
                                <option value="1" {{ old('module2_11') == '1' ? 'selected' : '' }}>Größenteils
                                    vorhanden</option>
                                <option value="2" {{ old('module2_11') == '2' ? 'selected' : '' }}>In geringem
                                    Maße vorhanden</option>
                                <option value="3" {{ old('module2_11') == '3' ? 'selected' : '' }}>Nicht
                                    vorhanden</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## MODULE 3 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module3Form">
                    <div class="online-rechner-section3-form-heading">
                        3. Verhaltensweisen & psychische Problemlagen
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Hierunter fallen unter anderem Unruhe in der Nacht oder Ängste und
                        Aggressionen, die für die pflegebedürftige Person, aber auch für
                        ihre Angehörigen, belastend sind. Auch wenn Abwehrreaktionen bei
                        pflegerischen Maßnahmen bestehen, wird dies hier berücksichtigt.
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input31"
                                title="Dieses Kriterium fasst verschiedene Verhaltensweisen zusammen. Dazu gehören vor allem das (scheinbar) ziellose Umhergehen in der Wohnung oder der Einrichtung und der Versuch desorientierter Personen, ohne Begleitung die Wohnung, Einrichtung zu verlassen oder Orte aufzusuchen, die für diese Person unzugänglich sein sollten, z. B. Treppenhaus, Zimmer anderer Bewohner. Ebenso zu berücksichtigen ist allgemeine Rastlosigkeit in Form von ständigem Aufstehen und Hinsetzen oder Hin- und Herrutschen auf dem Sitzplatz oder im und aus dem Bett."
                                rel="tooltip">3.1 Motorisch geprägte
                                Verhaltensauffälligkeiten</label>
                            <select name="modul3_1" id="online-rechner-input31">
                                <option value="0" {{ old('modul3_1') == '0' ? 'selected' : '' }}>Motorisch
                                    geprägte Verhaltensauffälligkeiten (nie oder sehr selten)</option>
                                <option value="1" {{ old('modul3_1') == '1' ? 'selected' : '' }}>
                                    Selten (ein- bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_1') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_1') == '5' ? 'selected' : '' }}>Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input32"
                                title="Gemeint sind hier nächtliches Umherirren oder nächtliche Unruhephasen bis hin zur Umkehr des Tag-, Nachtrhythmus im Sinne von aktiv sein in der Nacht und schlafen während des Tages.
                            <br /><br />
                            Zu bewerten ist, wie häufig Anlass für personelle Unterstützung zur Steuerung des Schlaf-Wach-Rhythmus bestehen, z. B. wieder ins Bett bringen und beruhigen. Schlafstörungen wie Einschlafschwierigkeiten am Abend oder Wachphasen während der Nacht sind nicht zu werten. Andere nächtliche Hilfen, z. B. Aufstehen, zu Bett bringen bei Nykturie oder Lagerungen sind im Modul 6 Ziffer 2 zu werten."
                                rel="tooltip">3.2 Nächtliche Unruhe</label>
                            <select name="modul3_2" id="online-rechner-input32">
                                <option value="0" {{ old('modul3_2') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_2') == '1' ? 'selected' : '' }}>Selten (ein- bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_2') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_2') == '5' ? 'selected' : '' }}>Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input33"
                                title="Selbstschädigendes und autoaggressives Verhalten kann z. B. darin bestehen, sich selbst durch Gegenstände zu verletzen, ungenießbare Substanzen zu essen und zu trinken, sich selbst schlagen und sich selbst mit den Fingernägeln oder Zähnen verletzen."
                                rel="tooltip">3.3 Selbstschädigendes und autoaggressives
                                Verhalten</label>
                            <select name="modul3_3" id="online-rechner-input33">
                                <option value="0" {{ old('modul3_3') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_3') == '1' ? 'selected' : '' }}>Selten (ein- bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_3') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_3') == '5' ? 'selected' : '' }}>Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input34"
                                title="Gemeint sind hier aggressive, auf Gegenstände gerichtete Handlungen wie Gegenstände wegstoßen oder wegschieben, gegen Gegenstände schlagen, das Zerstören von Dingen sowie das Treten nach Gegenständen."
                                rel="tooltip">3.4 Beschädigen von Gegenständen</label>
                            <select name="modul3_4" id="online-rechner-input34">
                                <option value="0" {{ old('modul3_4') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_4') == '1' ? 'selected' : '' }}>Selten (ein- bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_4') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_4') == '5' ? 'selected' : '' }}>Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input35"
                                title="Physisch aggressives Verhalten gegenüber anderen Personen kann z. B. darin bestehen, nach Personen zu schlagen oder zu treten, andere mit Zähnen oder Fingernägeln zu verletzen, andere zu stoßen oder wegzudrängen oder in Verletzungsversuchen gegenüber anderen Personen mit Gegenständen."
                                rel="tooltip">3.5 Physisch aggressives Verhalten</label>
                            <select name="modul3_5" id="online-rechner-input35">
                                <option value="0" {{ old('modul3_5') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_5') == '1' ? 'selected' : '' }}>Selten (ein- bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_5') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_5') == '5' ? 'selected' : '' }}>Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input36"
                                title="Verbale Aggression kann sich z. B. in verbalen Beschimpfungen oder in der Bedrohung anderer Personen ausdrücken."
                                rel="tooltip">3.6 Verbale Aggression</label>
                            <select name="modul3_6" id="online-rechner-input36">
                                <option value="0" {{ old('modul3_6') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_6') == '1' ? 'selected' : '' }}>Selten (ein- bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_6') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_6') == '5' ? 'selected' : '' }}>Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input37"
                                title="Andere pflegerelevante vokale Auffälligkeiten können sein: Lautes Rufen, Schreien, Klagen ohne nachvollziehbaren Grund, vor sich hin schimpfen, fluchen, seltsame Laute von sich geben, ständiges Wiederholen von Sätzen und Fragen."
                                rel="tooltip">3.7 Andere pflegerelevante vokale
                                Auffälligkeiten</label>
                            <select name="modul3_7" id="online-rechner-input37">
                                <option value="0" {{ old('modul3_7') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_7') == '1' ? 'selected' : '' }}>Selten (ein-
                                    bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_7') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_7') == '5' ? 'selected' : '' }}>Täglich
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input38"
                                title="Hier ist die Abwehr von Unterstützung, z. B. bei der Körperpflege, die Verweigerung der Nahrungsaufnahme, der Medikamenteneinnahme oder anderer notwendiger Verrichtungen sowie die Manipulation an Vorrichtungen wie z. B. an Kathetern, Infusionen oder Sondenernährung gemeint. Dazu gehört nicht die willentliche (selbstbestimmte) Ablehnung bestimmter Maßnahmen."
                                rel="tooltip">3.8 Abwehr pflegerischer Maßnahmen</label>
                            <select name="modul3_8" id="online-rechner-input38">
                                <option value="0" {{ old('modul3_8') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_8') == '1' ? 'selected' : '' }}>Selten (ein-
                                    bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_8') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_8') == '5' ? 'selected' : '' }}>Täglich
                                </option>
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input39"
                                title="Wahnvorstellungen beziehen sich z. B. auf die Vorstellung, mit Verstorbenen oder imaginären Personen in Kontakt zu stehen oder auf die Vorstellung, verfolgt, bedroht oder bestohlen zu werden."
                                rel="tooltip">3.9 Wahnvorstellungen</label>
                            <select name="modul3_9" id="online-rechner-input39">
                                <option value="0" {{ old('modul3_9') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_i') == '1' ? 'selected' : '' }}>Selten (ein-
                                    bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_9') == '3' ? 'selected' : '' }}>Häufig (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_9') == '5' ? 'selected' : '' }}>Täglich
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input310"
                                title="Die Person hat starke Ängste oder Sorgen, sie erlebt Angstattacken unabhängig von der Ursache."
                                rel="tooltip">3.10 Ängste</label>
                            <select name="modul3_10" id="online-rechner-input310">
                                <option value="0" {{ old('modul3_10') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_10') == '1' ? 'selected' : '' }}>Selten (ein-
                                    bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_10') == '3' ? 'selected' : '' }}>Häufig
                                    (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_10') == '5' ? 'selected' : '' }}>Täglich
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input311"
                                title="Antriebslosigkeit bei depressiver Stimmungslage zeigt sich z. B. daran, dass die Person kaum Interesse an der Umgebung hat, kaum Eigeninitiative aufbringt und Motivierung durch andere benötigt, um etwas zu tun. Sie wirkt traurig oder apathisch, möchte am liebsten das Bett nicht verlassen. Hier ist nicht gemeint, dass Menschen mit rein kognitiven Beeinträchtigungen, z. B. bei Demenz Impulse benötigen, um eine Handlung zu beginnen oder fortzuführen."
                                rel="tooltip">3.11 Antriebslosigkeit</label>
                            <select name="modul3_11" id="online-rechner-input311">
                                <option value="0" {{ old('modul3_11') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_11') == '1' ? 'selected' : '' }}>Selten (ein-
                                    bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_11') == '3' ? 'selected' : '' }}>Häufig
                                    (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_11') == '5' ? 'selected' : '' }}>Täglich
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input312"
                                title="Sozial inadäquate Verhaltensweisen sind z. B. distanzloses Verhalten, auffälliges Einfordern von Aufmerksamkeit, sich vor anderen in unpassenden Situationen auskleiden, unangemessenes Greifen nach Personen oder unangemessene körperliche oder verbale sexuelle Annäherungsversuche."
                                rel="tooltip">3.12 Sozial inadäquate Verhaltensweisen</label>
                            <select name="modul3_12" id="online-rechner-input312">
                                <option value="0" {{ old('modul3_12') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_12') == '1' ? 'selected' : '' }}>Selten (ein-
                                    bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_12') == '3' ? 'selected' : '' }}>Häufig
                                    (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_12') == '5' ? 'selected' : '' }}>Täglich
                                </option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="online-rechner-input313"
                                title="Sonstige pflegerelevante inadäquate Handlungen sind z. B. Nesteln an der Kleidung, ständiges Wiederholen der gleichen Handlung (Stereotypien), planlose Aktivitäten, Verstecken oder Horten von Gegenständen, Kotschmieren, Urinieren in die Wohnung."
                                rel="tooltip">3.13 Sonstige inadäquate Handlungen</label>
                            <select name="modul3_13" id="online-rechner-input313">
                                <option value="0" {{ old('modul3_13') == '0' ? 'selected' : '' }}>Nie oder sehr
                                    selten</option>
                                <option value="1" {{ old('modul3_13') == '1' ? 'selected' : '' }}>Selten (ein-
                                    bis
                                    dreimal innerhalb von zwei Wochen)</option>
                                <option value="3" {{ old('modul3_13') == '3' ? 'selected' : '' }}>Häufig
                                    (zweimal
                                    bis mehrmals wöchentlich, aber nicht täglich)</option>
                                <option value="5" {{ old('modul3_13') == '5' ? 'selected' : '' }}>Täglich
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## MODULE 4 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module4Form">
                    <div class="online-rechner-section3-form-heading">
                        4. Selbstversorgung
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Kann sich die Antragstellerin oder der Antragsteller sich zum Beispiel waschen und anziehen,
                        kann
                        sie oder er selbstständig die Toilette aufsuchen sowie essen und trinken?
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label
                                for="module4_1"title="Sich die Hände, das Gesicht, den Hals, die Arme, die Achselhöhlen und den vorderen Brustbereich waschen und abtrocknen
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität selbständig durchführen, wenn benötigte Gegenstände, z. B. Seife, Waschlappen bereitgelegt werden oder sie Aufforderung bzw. punktuelle Teilhilfen, z. B. Waschen unter den Achseln oder der Brust erhält.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur geringe Anteile der Aktivität selbständig durchführen, sich z. B. nur Hände oder Gesicht waschen oder benötigt umfassende Anleitung.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich an der Aktivität nicht oder nur minimal beteiligen."
                                rel="tooltip">4.1 Waschen des vorderen Oberkörpers</label>
                            <select name="module4_1" id="module4_1" aria-label="Waschen des vorderen Oberkörpers">
                                <option value="0" {{ old('module4_1') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module4_1') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_1') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_1') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_2"
                                title="Kämmen, Zahnpflege, Prothesenreinigung, Rasieren
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebenen Aktivitäten ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivitäten selbständig durchführen, wenn benötigte Gegenstände bereitgelegt oder gerichtet werden, z. B. Aufdrehen der Zahnpastatube, Auftragen der Zahnpasta auf die Bürste, Aufbringen von Haftcreme auf die Prothese, Anreichen oder Säubern des Rasierapparates. Alternativ sind Aufforderungen oder punktuelle Teilhilfen erforderlich wie Korrekturen nach dem Kämmen oder nur das Kämmen des Hinterkopfes, das Reinigen der hinteren Backenzähne bei der Zahn-, Mundpflege bzw. die Nachrasur bei sonst selbständigem Rasieren.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur geringe Anteile der Aktivität selbständig leisten, so beginnt sie z. B. mit dem Zähneputzen oder der Rasur, ohne die Aktivität zu Ende zu führen.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich an den Aktivitäten nicht oder nur minimal beteiligen."
                                rel="tooltip">4.2 Körperpflege im Bereich des Kopfes</label>
                            <select name="module4_2" id="module4_2" aria-label="Körperpflege im Bereich des Kopfes">
                                <option value="0" {{ old('module4_2') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module4_2') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_2') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_2') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_3"
                                title="Den Intimbereich waschen und abtrocknen
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität selbständig durchführen, wenn benötigte Utensilien, z. B. Seife, Waschlappen bereitgelegt werden oder sie Aufforderung bzw. punktuelle Teilhilfen erhält.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur geringe Anteile der Aktivität selbständig durchführen, sich z. B. nur den vorderen Intimbereich waschen.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich an der Aktivität nicht oder nur minimal beteiligen."
                                rel="tooltip">4.3 Waschen des Intimbereichs</label>
                            <select name="module4_3" id="module4_3" aria-label="Waschen des Intimbereichs">
                                <option value="0" {{ old('module4_3') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module4_3') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_3') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_3') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_4"
                                title="Durchführung des Dusch- oder Wannenbades einschließlich des Waschens der Haare. Dabei sind neben der Fähigkeit, den Körper waschen zu können, auch Sicherheitsaspekte zu berücksichtigen. (Teil-) Hilfen beim Waschen in der Wanne, Dusche sind hier ebenso zu berücksichtigen wie die Hilfe beim Ein- und Aussteigen oder eine notwendige Überwachung während des Bades. Dazu gehört auch das Abtrocknen, Haare waschen und föhnen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität selbständig durchführen, wenn Utensilien vorbereitet bzw. bereitgestellt werden, einzelne Handreichungen geleistet werden, z. B. Stützen beim Ein-, Aussteigen, Bedienung eines Badewannenlifters, Hilfe beim Haare waschen oder Föhnen, beim Abtrocknen oder wenn während des (Dusch-) Bades aus nachvollziehbaren Sicherheitsgründen Anwesenheit erforderlich ist.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur einen begrenzten Teil der Aktivität selbständig durchführen, z. B. das Waschen des vorderen Oberkörpers.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich an der Aktivität nicht oder nur minimal beteiligen."
                                rel="tooltip">4.4 Duschen und Baden einschließlich Waschen der Haare</label>
                            <select name="module4_4" id="module4_4"
                                aria-label="Duschen und Baden einschließlich Waschen der Haare">
                                <option value="0" {{ old('module4_4') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module4_4') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_4') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_4') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_5"
                                title="Bereitliegende Kleidungsstücke, z. B. Unterhemd, T-Shirt, Hemd, Bluse, Pullover, Jacke, BH, Schlafanzugoberteil oder Nachthemd, an- und ausziehen. Die Beurteilung ist unabhängig davon vorzunehmen, ob solche Kleidungsstücke derzeit getragen werden. Die situationsgerechte Auswahl der Kleidung ist nicht hier sondern im Modul 2 unter Ziffer 6 zu berücksichtigen. Das An- und Ablegen von körpernahen Hilfsmitteln ist unter Punkt F 4.5.7 zu berücksichtigen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität beispielsweise selbständig durchführen, wenn Kleidungsstücke passend angereicht oder gehalten werden beim Anziehen eines Hemdes etc. Auch wenn Hilfe nur bei Verschlüssen erforderlich ist, trifft die Bewertung „überwiegend selbständig“ zu, ebenso wenn nur Kontrolle des Sitzes der Kleidung und Aufforderungen zur Vervollständigung der Handlung erforderlich sind.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur bei einem begrenzten Teil der Aktivität mithelfen, beispielsweise die Hände in die Ärmel eines bereitgehaltenen T-Shirts schieben.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich an der Aktivität nicht oder nur minimal beteiligen."
                                rel="tooltip">4.5 An- und Auskleiden des Oberkörpers</label>
                            <select name="module4_5" id="module4_5" aria-label="An- und Auskleiden des Oberkörpers">
                                <option value="0" {{ old('module4_5') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module4_5') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_5') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_5') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_6"
                                title="Bereitliegende Kleidungsstücke, z. B. Unterwäsche Hose, Rock, Strümpfe und Schuhe, an- und ausziehen. Die Beurteilung ist unabhängig davon vorzunehmen, ob solche Kleidungsstücke derzeit getragen werden. Die situationsgerechte Auswahl der Kleidung ist im Modul 2 Ziffer 6 zu berücksichtigen. Das An- und Ablegen von körpernahen Hilfsmitteln ist unter Ziffer 7 im Modul 5 zu berücksichtigen, z. B. Kompressionstrümpfe.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität beispielsweise selbständig durchführen, wenn Kleidungsstücke angereicht oder gehalten werden (Einstiegshilfe). Auch wenn Hilfe nur bei Verschlüssen, z. B. Schnürsenkel binden, Knöpfe schließen oder Kontrolle des Sitzes der Kleidung und Aufforderungen zur Vervollständigung der Handlung erforderlich sind, trifft die Bewertung überwiegend selbständig zu.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann die Aktivität zu einem geringen Teil selbständig durchführen. Beispielsweise gelingt das Hochziehen von Hose, Rock zur Taille selbständig, zuvor muss das Kleidungsstück jedoch von der Pflegeperson über die Füße gezogen werden.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich an der Aktivität nicht oder nur minimal beteiligen."
                                rel="tooltip">4.6 An- und Auskleiden des Unterkörpers</label>
                            <select name="module4_6" id="module4_6" aria-label="An- und Auskleiden des Unterkörpers">
                                <option value="0" {{ old('module4_6') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module4_6') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_6') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_6') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_7"
                                title="Zerteilen von Nahrung in mundgerechte Stücke und Eingießen von Getränken. Dazu gehört das Zerteilen von belegten Brotscheiben, Obst oder andere Speisen in mundgerechte Stücke, z. B. das Kleinschneiden von Fleisch, das Zerdrücken von Kartoffeln, Pürieren der Nahrung ,Verschlüsse von Getränkeflaschen öffnen, Getränke aus einer Flasche oder Kanne in ein Glas bzw. eine Tasse eingießen, ggf. unter Nutzung von Hilfsmitteln wie Anti-Rutschbrett oder sonstigem Gegenstand wie Spezialbesteck.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Es ist punktuelle Hilfe erforderlich, z. B. beim Öffnen einer Flasche oder beim Schneiden von harten Nahrungsmitteln.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann die Aktivität zu einem geringen Teil selbständig durchführen, beispielsweise schneidet sie zwar belegte Brotscheiben, schafft es aber nicht, mundgerechte Stücke herzustellen. Oder sie gießt aus einer Flasche Wasser ins Glas, verschüttet das Wasser dabei jedoch regelmäßig.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich an der Aktivität nicht oder nur minimal beteiligen."
                                rel="tooltip">4.7 Mundgerechtes Zubereiten der Nahrung und Eingießen von
                                Getränken</label>
                            <select name="module4_7" id="module4_7"
                                aria-label="Mundgerechtes Zubereiten der Nahrung und Eingießen von Getränken">
                                <option value="0" {{ old('module4_7') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module4_7') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_7') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_7') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_8"
                                title="Bereit gestellte, mundgerecht zubereitete Speisen essen. Dies beinhaltet das Aufnehmen, zum Mund Führen, ggf. Abbeißen, Kauen und Schlucken von mundgerecht zubereiteten Speisen, die üblicherweise mit den Fingern gegessen werden, z. B. Brot, Kekse, Obst oder das Essen mit Gabel oder Löffel, ggf. mit speziellen Hilfsmitteln wie adaptiertem Besteck. Zu berücksichtigen ist auch, inwieweit die Notwendigkeit der ausreichenden Nahrungsaufnahme (auch ohne Hungergefühl oder Appetit) erkannt und die empfohlene, gewohnte Menge tatsächlich gegessen wird. Das Einhalten von Diäten ist nicht hier sondern im Modul 5 unter Ziffer 16 zu bewerten. Die Beurteilung ist auch dann vorzunehmen, wenn die Nahrungsaufnahme über eine Sonde bzw. parenteral erfolgt.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann überwiegend selbständig essen, benötigt aber punktuelle Anleitung, muss beispielsweise aufgefordert werden, mit dem Essen zu beginnen oder weiter zu essen. Es sind punktuelle Hilfen erforderlich, z. B. Zurücklegen aus der Hand gerutschter Speisen oder Besteck in die Hand geben.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Es muss ständig zur Nahrungsaufnahme motiviert werden oder die Nahrung muss größtenteils gereicht werden oder es ist ständige und unmittelbare Eingreifbereitschaft der Pflegeperson erforderlich, aufgrund von Aspirationsgefahr.
                            <br />
                            <strong>Unselbständig:</strong> Die Nahrung muss (nahezu) komplett gereicht werden."
                                rel="tooltip">4.8 Essen</label>
                            <select name="module4_8" id="module4_8" aria-label="Essen">
                                <option value="0" {{ old('module4_8') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="3" {{ old('module4_8') == '3' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="6" {{ old('module4_8') == '6' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="9" {{ old('module4_8') == '9' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_9"
                                title="Bereitstehende Getränke aufnehmen, ggf. mit Gegenständen wie Strohhalm, Spezialbecher mit Trinkaufsatz. Zu berücksichtigen ist auch, inwieweit die Notwendigkeit der Flüssigkeitsaufnahme (auch ohne ausreichendes Durstgefühl) erkannt und die empfohlene oder gewohnte Menge tatsächlich getrunken wird. Die Beurteilung der Selbständigkeit ist auch dann vorzunehmen, wenn die Flüssigkeitsaufnahme über eine Sonde bzw. parenteral erfolgt.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann selbständig trinken, wenn ein Glas, eine Tasse unmittelbar in den Aktionsradius der Person positioniert oder sie ans Trinken erinnert wird.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Das Trinkgefäß muss beispielsweise in die Hand gegeben werden, das Trinken erfolgt jedoch selbständig oder die Person muss zu fast jedem Schluck motiviert werden oder es ist ständige und unmittelbare Eingreifbereitschaft der Pflegeperson erforderlich, aufgrund von Aspirationsgefahr.
                            <br />
                            <strong>Unselbständig:</strong> Getränke müssen (nahezu) komplett gereicht werden."
                                rel="tooltip">4.9 Trinken</label>
                            <select name="module4_9" id="module4_9" aria-label="Trinken">
                                <option value="0" {{ old('module4_9') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="2" {{ old('module4_9') == '2' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="4" {{ old('module4_9') == '4' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="6" {{ old('module4_9') == '6' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_10"
                                title="Gehen zur Toilette, Hinsetzen und Aufstehen, Sitzen während der Blasen-oder Darmentleerung, Intimhygiene und Richten der Kleidung. Die Beurteilung ist auch dann vorzunehmen, wenn anstelle der Toilettenbenutzung eine Versorgung mit Hilfsmitteln erfolgt, z. B. Inkontinenzmaterial, Katheter, Uristoma, Ileo- oder Solostoma.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität überwiegend selbständig durchführen. Personelle Hilfe kann sich beispielsweise beschränken auf einzelne Handlungsschritte wie:<br />
                            - nur Bereitstellen und Leeren des Toilettenstuhls (alternativ Urinflasche oder anderer Behälter),<br />
                            - nur Aufforderung oder Orientierungshinweise zum Auffinden der Toilette oder Begleitung auf dem Weg zur Toilette,<br />
                            - nur Anreichen von Toilettenpapier oder Waschlappen, Intimhygiene nur nach Stuhlgang,<br />
                            - nur Unterstützung beim Hinsetzen, Aufstehen von der Toilette,<br />
                            - nur punktuelle Hilfe beim Richten der Bekleidung
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur einzelne Handlungsschritte selbst ausführen, z. B. nur Richten der Bekleidung oder Intimhygiene nur nach Wasserlassen.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann sich nicht oder nur minimal an der Aktivität beteiligen"
                                rel="tooltip">4.10 Benutzen einer Toilette oder eines Toilettenstuhls</label>
                            <select name="module4_10" id="module4_10"
                                aria-label="Benutzen einer Toilette oder eines Toilettenstuhls">
                                <option value="0" {{ old('module4_10') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="2" {{ old('module4_10') == '2' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="4" {{ old('module4_10') == '4' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="6" {{ old('module4_10') == '6' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input411"
                                title="Inkontinenz- und Stomasysteme sachgerecht verwenden, nach Bedarf wechseln und entsorgen. Dazu gehört auch das Entleeren eines Urinbeutels bei Dauerkatheter, Uristoma oder die Anwendung eines Urinalkondoms. Die regelmäßige Einmalkatheterisierung ist nicht hier sondern im Modul 5 unter Ziffer 10 zu erfassen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann Hilfsmittel selbständig benutzen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität überwiegend selbständig durchführen, wenn Inkontinenzsysteme angereicht oder entsorgt werden oder die Person an den Wechsel erinnert wird.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann sich am Wechsel der Inkontinenzsysteme beteiligen, z. B. nur Vorlagen einlegen oder Inkontinenzhosen nur entfernen.
                            <br />
                            <strong>Unselbständig:</strong> Beteiligung ist nicht oder nur minimal möglich."
                                rel="tooltip">4.11 Bewältigen der Folgen einer Harninkontinenz und
                                Umgang mit
                                Dauerkatheter und Urostoma</label>
                            <select name="module4_11" id="">
                                <option value="0" {{ old('module4_11') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module4_11') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_11') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_11') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input412"
                                title="Inkontinenz- und Stomasysteme sachgerecht verwenden, nach Bedarf wechseln und entsorgen. Dazu gehört Inkontinenzsysteme, z. B. große Vorlagen mit Netzhose, Inkontinenzhose mit Klebestreifen oder Pants sachgerecht verwenden, nach Bedarf wechseln und entsorgen. Dazu gehört auch die Anwendung eines Analtampons oder das Entleeren oder Wechseln eines Stomabeutels bei Enterostoma. Die Pflege des Stomas und der Wechsel einer Basisplatte ist im Modul 5 unter Ziffer 9 zu berücksichtigen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann Hilfsmittel selbständig benutzen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität überwiegend selbständig durchführen, wenn Inkontinenzsysteme bereit gelegt und entsorgt werden oder die Person an den Wechsel erinnert wird.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann sich am Wechsel der Inkontinenzsysteme beteiligen, z. B. Mithilfe beim Wechsel eines Stomabeutels. Bei Vorliegen einer Stuhlinkontinenz sind Ressourcen beim Wechsel des Inkontinenzmaterials eher selten.
                            <br />
                            <strong>Unselbständig:</strong> Beteiligung ist nicht (oder nur minimal) möglich."
                                rel="tooltip">4.12 Bewältigen der Folgen einer Stuhlinkontinenz und
                                Umgang
                                mit Stoma</label>
                            <select name="module4_12" id="">
                                <option value="0" {{ old('module4_12') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module4_12') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module4_12') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module4_12') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="online-rechner-input413"
                                title="Ernährung über einen parenteralen Zugang (z. B. einen Port) oder über einen Zugang in den Magen oder Dünndarm (PEG/PEJ)
                            <br />
                            <strong>Selbständig:</strong> Die Person führt die Versorgung ohne Fremdhilfe durch.
                            <br />
                            Wenn die Versorgung mit Hilfe erfolgt, werden folgende Ausprägungen unterschieden:
                            <br />
                            <strong>Nicht täglich, nicht auf Dauer:</strong> Die Person erhält zusätzlich zur oralen Nahrungsaufnahme Nahrung oder Flüssigkeit parenteral oder über Sonde, aber nur gelegentlich oder vorübergehend.
                            <br />
                            <strong>Ausschließlich oder nahezu ausschließlich:</strong> Die Person erhält ausschließlich oder nahezu ausschließlich Nahrung und Flüssigkeit parenteral oder über Sonde. Eine orale Nahrungsaufnahme erfolgt nicht oder nur in geringem Maße zur Förderung der Sinneswahrnehmung.
                            <br />
                            <strong>Täglich, zusätzlich zu oraler Ernährung:</strong> Die Person erhält in der Regel täglich Nahrung oder Flüssigkeit parenteral oder über Sonde und täglich oral Nahrung. Sie wird zum Teil, aber nicht ausreichend über die orale Nahrungsaufnahme ernährt und benötigt zur Nahrungsergänzung bzw. zur Vermeidung von Mangelernährung täglich Sondenkost."
                                rel="tooltip">4.13 Versorgung mit Hilfe - Ernährung parenteral oder
                                über
                                Sonde</label>
                            <select name="module4_13" id="">
                                <option value="0" {{ old('module4_13') == '0' ? 'selected' : '' }}>
                                    Entfällt, selbstständig, Versorgung mit Hilfe (aber nicht
                                    täglich, nicht auf Dauer)
                                </option>
                                <option value="3" {{ old('module4_13') == '1' ? 'selected' : '' }}>
                                    Ausschließlich oder nahezu ausschließlich
                                </option>
                                <option value="6" {{ old('module4_13') == '2' ? 'selected' : '' }}>
                                    Täglich, zusätzlich zu oraler Ernährung
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## MODULE 5 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module5Form">
                    <div class="online-rechner-section3-form-heading">
                        5. Bewältigung von & selbstständiger Umgang mit krankheits-/therapiebedingten Anforderungen
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Die Gutachterin oder der Gutachter schaut, ob die betroffene Person zum Beispiel Medikamente
                        selbst
                        einnehmen, den Blutzucker eigenständig messen, mit Hilfsmitteln wie Prothesen oder Rollator
                        umgehen
                        und eine Ärztin beziehungsweise einen Arzt aufsuchen kann.
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="module5_1"
                                title="Orale Medikation, Augen- oder Ohrentropfen, Zäpfchen und Medikamentenpflaster. Das Ausmaß der Hilfestellung kann von einmal wöchentlichem Stellen der Medikamente im Wochendispenser bis zu mehrfach täglicher Einzelgabe differieren. Werden Medikamente verabreicht, ist das Stellen nicht gesondert zu berücksichtigen."
                                rel="tooltip">5.1 Medikation</label>
                            <select name="module5_1" id="module5_1">
                                <option value="0" {{ old('module5_1') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_1') == '1' ? 'selected' : '' }}>Täglich
                                    ergänzend</option>
                                <option value="0.03" {{ old('module5_1') == '0.03' ? 'selected' : '' }}>1 x pro
                                    Monat</option>
                                <option value="0.07" {{ old('module5_1') == '0.07' ? 'selected' : '' }}>2 x pro
                                    Monat</option>
                                <option value="0.1" {{ old('module5_1') == '0.1' ? 'selected' : '' }}>3 x pro
                                    Monat</option>
                                <option value="0.17" {{ old('module5_1') == '0.17' ? 'selected' : '' }}>4 x pro
                                    Monat
                                    (1 x pro Woche)</option>
                                <option value="0.29" {{ old('module5_1') == '0.29' ? 'selected' : '' }}>2 x pro
                                    Woche
                                </option>
                                <option value="0.43" {{ old('module5_1') == '0.43' ? 'selected' : '' }}>3 x pro
                                    Woche
                                </option>
                                <option value="0.57" {{ old('module5_1') == '0.57' ? 'selected' : '' }}>4 x pro
                                    Woche
                                </option>
                                <option value="0.71" {{ old('module5_1') == '0.71' ? 'selected' : '' }}>5 x pro
                                    Woche
                                </option>
                                <option value="0.86" {{ old('module5_1') == '0.86' ? 'selected' : '' }}>6 x pro
                                    Woche
                                </option>
                                <option value="1" {{ old('module5_1') == '1' ? 'selected' : '' }}>7 x pro Woche
                                    (1 x pro Tag)</option>
                                <option value="2" {{ old('module5_1') == '2' ? 'selected' : '' }}>2 x pro Tag
                                </option>
                                <option value="3" {{ old('module5_1') == '3' ? 'selected' : '' }}>3 x pro Tag
                                </option>
                                <option value="4" {{ old('module5_1') == '4' ? 'selected' : '' }}>4 x pro Tag
                                </option>
                                <option value="5" {{ old('module5_1') == '5' ? 'selected' : '' }}>5 x pro Tag
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_2"
                                title="Subkutane und intramuskuläre Injektionen und subkutane Infusionen. Dazu gehören z. B. Insulininjektionen oder auch die Versorgung mit Medikamentenpumpen über einen subkutanen Zugang."
                                rel="tooltip">5.2 Injektionen</label>
                            <select name="module5_2" id="module5_2">
                                <option value="0" {{ old('module5_2') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_2') == '1' ? 'selected' : '' }}>Täglich
                                    ergänzend</option>
                                <option value="0.03" {{ old('module5_2') == '0.03' ? 'selected' : '' }}>1 x pro
                                    Monat</option>
                                <option value="0.07" {{ old('module5_2') == '0.07' ? 'selected' : '' }}>2 x pro
                                    Monat</option>
                                <option value="0.1" {{ old('module5_2') == '0.1' ? 'selected' : '' }}>3 x pro
                                    Monat</option>
                                <option value="0.17" {{ old('module5_2') == '0.17' ? 'selected' : '' }}>4 x pro
                                    Monat (1 x pro Woche)</option>
                                <option value="0.29" {{ old('module5_2') == '0.29' ? 'selected' : '' }}>2 x pro
                                    Woche</option>
                                <option value="0.43" {{ old('module5_2') == '0.43' ? 'selected' : '' }}>3 x pro
                                    Woche</option>
                                <option value="0.57" {{ old('module5_2') == '0.57' ? 'selected' : '' }}>4 x pro
                                    Woche</option>
                                <option value="0.71" {{ old('module5_2') == '0.71' ? 'selected' : '' }}>5 x pro
                                    Woche</option>
                                <option value="0.86" {{ old('module5_2') == '0.86' ? 'selected' : '' }}>6 x pro
                                    Woche</option>
                                <option value="1" {{ old('module5_2') == '1' ? 'selected' : '' }}>7 x pro Woche
                                    (1 x pro Tag)</option>
                                <option value="2" {{ old('module5_2') == '2' ? 'selected' : '' }}>2 x pro Tag
                                </option>
                                <option value="3" {{ old('module5_2') == '3' ? 'selected' : '' }}>3 x pro Tag
                                </option>
                                <option value="4" {{ old('module5_2') == '4' ? 'selected' : '' }}>4 x pro Tag
                                </option>
                                <option value="5" {{ old('module5_2') == '5' ? 'selected' : '' }}>5 x pro Tag
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_3"
                                title="Hierunter fällt hauptsächlich die Port-Versorgung. Sie ist oft fachpflegerisch erforderlich. In Bezug auf den Umgang mit intravenösen Zugängen ist auch die Kontrolle<br />
                            zur Vermeidung von Komplikationen wie Verstopfung des Katheters zu berücksichtigen. Analog ist auch die Versorgung intrathekaler Zugänge hier zu erfassen. Das Anhängen von Nährlösungen zur parenteralen Ernährung ist nicht hier sondern im Modul 4 unter Ziffer 13 zu erfassen."
                                rel="tooltip">5.3 Versorgung intravenöser Zugänge (Port)</label>
                            <select name="module5_3" id="module5_3">
                                <option value="0" {{ old('module5_3') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_3') == '1' ? 'selected' : '' }}>Täglich
                                    ergänzend</option>
                                <option value="0.03" {{ old('module5_3') == '0.03' ? 'selected' : '' }}>1 x pro
                                    Monat</option>
                                <option value="0.07" {{ old('module5_3') == '0.07' ? 'selected' : '' }}>2 x pro
                                    Monat</option>
                                <option value="0.1" {{ old('module5_3') == '0.1' ? 'selected' : '' }}>3 x pro
                                    Monat</option>
                                <option value="0.17" {{ old('module5_3') == '0.17' ? 'selected' : '' }}>4 x pro
                                    Monat (1 x pro Woche)</option>
                                <option value="0.29" {{ old('module5_3') == '0.29' ? 'selected' : '' }}>2 x pro
                                    Woche</option>
                                <option value="0.43" {{ old('module5_3') == '0.43' ? 'selected' : '' }}>3 x pro
                                    Woche</option>
                                <option value="0.57" {{ old('module5_3') == '0.57' ? 'selected' : '' }}>4 x pro
                                    Woche</option>
                                <option value="0.71" {{ old('module5_3') == '0.71' ? 'selected' : '' }}>5 x pro
                                    Woche</option>
                                <option value="0.86" {{ old('module5_3') == '0.86' ? 'selected' : '' }}>6 x pro
                                    Woche</option>
                                <option value="1" {{ old('module5_3') == '1' ? 'selected' : '' }}>7 x pro Woche
                                    (1 x pro Tag)</option>
                                <option value="2" {{ old('module5_3') == '2' ? 'selected' : '' }}>2 x pro Tag
                                </option>
                                <option value="3" {{ old('module5_3') == '3' ? 'selected' : '' }}>3 x pro Tag
                                </option>
                                <option value="4" {{ old('module5_3') == '4' ? 'selected' : '' }}>4 x pro Tag
                                </option>
                                <option value="5" {{ old('module5_3') == '5' ? 'selected' : '' }}>5 x pro Tag
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_4"
                                title="Absaugen kann z. B. bei beatmeten oder tracheotomierten Patienten in sehr unterschiedlicher und wechselnder Häufigkeit notwendig sein. Es ist der durchschnittliche Bedarf anzugeben. Ebenso ist hier das An- und Ablegen von Sauerstoffbrillen oder analog auch von Atemmasken zur nächtlichen Druckbeatmung zu erfassen sowie das Bereitstellen eines Inhalationsgerätes (inkl. deren Reinigung). Jede Maßnahme ist auch einzeln zu berücksichtigen."
                                rel="tooltip">5.4 Absaugen und Sauerstoffgabe</label>
                            <select name="module5_4" id="module5_4">
                                <option value="0" {{ old('module5_4') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_4') == '1' ? 'selected' : '' }}>Täglich
                                    ergänzend</option>
                                <option value="0.03" {{ old('module5_4') == '0.03' ? 'selected' : '' }}>1 x pro
                                    Monat</option>
                                <option value="0.07" {{ old('module5_4') == '0.07' ? 'selected' : '' }}>2 x pro
                                    Monat</option>
                                <option value="0.1" {{ old('module5_4') == '0.1' ? 'selected' : '' }}>3 x pro
                                    Monat</option>
                                <option value="0.17" {{ old('module5_4') == '0.17' ? 'selected' : '' }}>4 x pro
                                    Monat (1 x pro Woche)</option>
                                <option value="0.29" {{ old('module5_4') == '0.29' ? 'selected' : '' }}>2 x pro
                                    Woche</option>
                                <option value="0.43" {{ old('module5_4') == '0.43' ? 'selected' : '' }}>3 x pro
                                    Woche</option>
                                <option value="0.57" {{ old('module5_4') == '0.57' ? 'selected' : '' }}>4 x pro
                                    Woche</option>
                                <option value="0.71" {{ old('module5_4') == '0.71' ? 'selected' : '' }}>5 x pro
                                    Woche</option>
                                <option value="0.86" {{ old('module5_4') == '0.86' ? 'selected' : '' }}>6 x pro
                                    Woche</option>
                                <option value="1" {{ old('module5_4') == '1' ? 'selected' : '' }}>7 x pro Woche
                                    (1 x pro Tag)</option>
                                <option value="2" {{ old('module5_4') == '2' ? 'selected' : '' }}>2 x pro Tag
                                </option>
                                <option value="3" {{ old('module5_4') == '3' ? 'selected' : '' }}>3 x pro Tag
                                </option>
                                <option value="4" {{ old('module5_4') == '4' ? 'selected' : '' }}>4 x pro Tag
                                </option>
                                <option value="5" {{ old('module5_4') == '5' ? 'selected' : '' }}>5 x pro Tag
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_5"
                                title="Hier sind alle externen Anwendungen mit ärztlich angeordneten Salben, Cremes, Emulsionen etc. abzubilden, außerdem Kälte- und Wärmeanwendungen, die z. B. bei rheumatischen Erkrankungen angeordnet werden. Jede Maßnahme ist auch einzeln zu berücksichtigen."
                                rel="tooltip">5.5 Einreibungen oder Kälte- und Wärmeanwendungen</label>
                            <select name="module5_5" id="module5_5">
                                <option value="0" {{ old('module5_5') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_5') == '1' ? 'selected' : '' }}>Täglich
                                    ergänzend</option>
                                <option value="0.03" {{ old('module5_5') == '0.03' ? 'selected' : '' }}>1 x pro
                                    Monat</option>
                                <option value="0.07" {{ old('module5_5') == '0.07' ? 'selected' : '' }}>2 x pro
                                    Monat</option>
                                <option value="0.1" {{ old('module5_5') == '0.1' ? 'selected' : '' }}>3 x pro
                                    Monat</option>
                                <option value="0.17" {{ old('module5_5') == '0.17' ? 'selected' : '' }}>4 x pro
                                    Monat (1 x pro Woche)</option>
                                <option value="0.29" {{ old('module5_5') == '0.29' ? 'selected' : '' }}>2 x pro
                                    Woche</option>
                                <option value="0.43" {{ old('module5_5') == '0.43' ? 'selected' : '' }}>3 x pro
                                    Woche</option>
                                <option value="0.57" {{ old('module5_5') == '0.57' ? 'selected' : '' }}>4 x pro
                                    Woche</option>
                                <option value="0.71" {{ old('module5_5') == '0.71' ? 'selected' : '' }}>5 x pro
                                    Woche</option>
                                <option value="0.86" {{ old('module5_5') == '0.86' ? 'selected' : '' }}>6 x pro
                                    Woche</option>
                                <option value="1" {{ old('module5_5') == '1' ? 'selected' : '' }}>7 x pro Woche
                                    (1 x pro Tag)</option>
                                <option value="2" {{ old('module5_5') == '2' ? 'selected' : '' }}>2 x pro Tag
                                </option>
                                <option value="3" {{ old('module5_5') == '3' ? 'selected' : '' }}>3 x pro Tag
                                </option>
                                <option value="4" {{ old('module5_5') == '4' ? 'selected' : '' }}>4 x pro Tag
                                </option>
                                <option value="5" {{ old('module5_5') == '5' ? 'selected' : '' }}>5 x pro Tag
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_6"
                                title="Die Aktivität umfasst Messungen wie z. B. Blutdruck, Puls, Blutzucker, Temperatur, Körpergewicht, Flüssigkeitshaushalt, soweit diese auf ärztliche Anordnung erfolgen. Dabei geht es nicht nur darum, die Messung durchzuführen, sondern auch notwendige Schlüsse zu ziehen, etwa zur Festlegung der erforderlichen Insulindosis oder zur Notwendigkeit anderer Maßnahmen, wie das Umstellen der Ernährung oder auch das Aufsuchen einer Ärztin oder eines Arztes. Dies gilt beispielsweise auch für Menschen mit erhöhtem Blutdruck, die zur Ergänzung der medikamentösen Therapie und einer Umstellung ihres Lebensstils regelmäßig Blutdruck und Puls kontrollieren."
                                rel="tooltip">5.6 Messung und Deutung von Körperzuständen</label>
                            <select name="module5_6" id="module5_6">
                                <option value="0" {{ old('module5_6') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_6') == '1' ? 'selected' : '' }}>Täglich
                                    ergänzend</option>
                                <option value="0.03" {{ old('module5_6') == '0.03' ? 'selected' : '' }}>1 x pro
                                    Monat</option>
                                <option value="0.07" {{ old('module5_6') == '0.07' ? 'selected' : '' }}>2 x pro
                                    Monat</option>
                                <option value="0.1" {{ old('module5_6') == '0.1' ? 'selected' : '' }}>3 x pro
                                    Monat</option>
                                <option value="0.17" {{ old('module5_6') == '0.17' ? 'selected' : '' }}>4 x pro
                                    Monat (1 x pro Woche)</option>
                                <option value="0.29" {{ old('module5_6') == '0.29' ? 'selected' : '' }}>2 x pro
                                    Woche</option>
                                <option value="0.43" {{ old('module5_6') == '0.43' ? 'selected' : '' }}>3 x pro
                                    Woche</option>
                                <option value="0.57" {{ old('module5_6') == '0.57' ? 'selected' : '' }}>4 x pro
                                    Woche</option>
                                <option value="0.71" {{ old('module5_6') == '0.71' ? 'selected' : '' }}>5 x pro
                                    Woche</option>
                                <option value="0.86" {{ old('module5_6') == '0.86' ? 'selected' : '' }}>6 x pro
                                    Woche</option>
                                <option value="1" {{ old('module5_6') == '1' ? 'selected' : '' }}>7 x pro Woche
                                    (1 x pro Tag)</option>
                                <option value="2" {{ old('module5_6') == '2' ? 'selected' : '' }}>2 x pro Tag
                                </option>
                                <option value="3" {{ old('module5_6') == '3' ? 'selected' : '' }}>3 x pro Tag
                                </option>
                                <option value="4" {{ old('module5_6') == '4' ? 'selected' : '' }}>4 x pro Tag
                                </option>
                                <option value="5" {{ old('module5_6') == '5' ? 'selected' : '' }}>5 x pro Tag
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_7"
                                title="Hierunter versteht man beispielsweise das An- und Ablegen von Prothesen, kieferorthopädische Apparaturen; Orthesen, Brille, Hörgerät oder Kompressionsstrümpfen (inkl. deren Reinigung). Der Umgang mit Zahnprothesen ist im Modul 4 unter Ziffer 2 zu erfassen."
                                rel="tooltip">5.7 Körpernahe Hilfsmittel</label>
                            <select name="module5_7" id="module5_7">
                                <option value="0" {{ old('module5_7') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_7') == '1' ? 'selected' : '' }}>Täglich
                                    ergänzend</option>
                                <option value="0.03" {{ old('module5_7') == '0.03' ? 'selected' : '' }}>1 x pro
                                    Monat</option>
                                <option value="0.07" {{ old('module5_7') == '0.07' ? 'selected' : '' }}>2 x pro
                                    Monat</option>
                                <option value="0.1" {{ old('module5_7') == '0.1' ? 'selected' : '' }}>3 x pro
                                    Monat</option>
                                <option value="0.17" {{ old('module5_7') == '0.17' ? 'selected' : '' }}>4 x pro
                                    Monat (1 x pro Woche)</option>
                                <option value="0.29" {{ old('module5_7') == '0.29' ? 'selected' : '' }}>2 x pro
                                    Woche</option>
                                <option value="0.43" {{ old('module5_7') == '0.43' ? 'selected' : '' }}>3 x pro
                                    Woche</option>
                                <option value="0.57" {{ old('module5_7') == '0.57' ? 'selected' : '' }}>4 x pro
                                    Woche</option>
                                <option value="0.71" {{ old('module5_7') == '0.71' ? 'selected' : '' }}>5 x pro
                                    Woche</option>
                                <option value="0.86" {{ old('module5_7') == '0.86' ? 'selected' : '' }}>6 x pro
                                    Woche</option>
                                <option value="1" {{ old('module5_7') == '1' ? 'selected' : '' }}>7 x pro Woche
                                    (1 x pro Tag)</option>
                                <option value="2" {{ old('module5_7') == '2' ? 'selected' : '' }}>2 x pro Tag
                                </option>
                                <option value="3" {{ old('module5_7') == '3' ? 'selected' : '' }}>3 x pro Tag
                                </option>
                                <option value="4" {{ old('module5_7') == '4' ? 'selected' : '' }}>4 x pro Tag
                                </option>
                                <option value="5" {{ old('module5_7') == '5' ? 'selected' : '' }}>5 x pro Tag
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_8"
                                title="Die Aktivität beinhaltet die Versorgung chronischer Wunden, wie z. B. Ulkus cruris oder Dekubitus."
                                rel="tooltip">5.8 Arztbesuche</label>
                            <select name="module5_8" id="module5_8">
                                <option value="0" {{ old('module5_8') == '0' ? 'selected' : '' }}>Nie oder
                                    seltener als einmal wöchentlich</option>
                                <option value="1" {{ old('module5_8') == '1' ? 'selected' : '' }}>ein- bis
                                    mehrmals wöchentlich</option>
                                <option value="2" {{ old('module5_8') == '2' ? 'selected' : '' }}>ein- bis
                                    zweimal täglich</option>
                                <option value="3" {{ old('module5_8') == '3' ? 'selected' : '' }}>mindestens
                                    dreimal täglich</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="online-rechner-input59"
                                title="Gemeint ist hier die Pflege künstlicher Körperöffnungen wie Tracheostoma, PEG, subrapubischer Blasenkatheter, Urostoma, Colo- oder Ileostoma. Hierbei ist auch das Reinigen des Katheters, die Desinfektion der Einstichstelle der PEG und falls notwendig auch der Verbandswechsel zu bewerten. Die Pflege eines Uristoma, Colo-oder Ileostoma ist in der Regel mit dem der Wechsel der Basisplatte oder dem Wechsel eines einteiligen Systems verbunden. Der einfache Wechsel oder das Entleeren eines Stoma- oder Katheterbeutels oder das Anhängen von Sondennahrung sind im Modul 4 unter Ziffer 11 ff zu werten."
                                rel="tooltip">5.9 Versorgung mit Stoma</label>
                            <select name="module5_9"id="">
                                <option value="0" {{ old('module5_9') == '0' ? 'selected' : '' }}>Nie oder
                                    seltener als einmal wöchentlich</option>
                                <option value="1" {{ old('module5_9') == '1' ? 'selected' : '' }}>ein- bis
                                    mehrmals wöchentlich</option>
                                <option value="2" {{ old('module5_9') == '2' ? 'selected' : '' }}>ein- bis
                                    zweimal täglich</option>
                                <option value="3" {{ old('module5_9') == '3' ? 'selected' : '' }}>mindestens
                                    dreimal täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input510"
                                title="Regelmäßige Einmalkatheterisierungen kommen insbesondere bei neuerogenen Blasenentleerungsstörungen vor. Mit Abführmethoden sind Anwendungen von Klistier, Einlauf, digitale Ausräumung gemeint."
                                rel="tooltip">5.10 Regelmäßige Einmalkatheterisierung und Nutzung
                                von
                                Abführmethoden</label>
                            <select name="module5_10" id="">
                                <option value="0" {{ old('module5_10') == '0' ? 'selected' : '' }}>Nie oder
                                    seltener als einmal wöchentlich</option>
                                <option value="1" {{ old('module5_10') == '1' ? 'selected' : '' }}>ein- bis
                                    mehrmals wöchentlich</option>
                                <option value="2" {{ old('module5_10') == '2' ? 'selected' : '' }}>ein- bis
                                    zweimal täglich</option>
                                <option value="3" {{ old('module5_10') == '3' ? 'selected' : '' }}>mindestens
                                    dreimal täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input511"
                                title="Bei vielen Erkrankungen werden aus einer Heilmitteltherapie heraus Anweisungen zu einem Eigenübungsprogramm gegeben, welches dauerhaft und regelmäßig durchgeführt werden soll, z. B. krankengymnastische Übungen, Atemübungen oder logopädische Übungen. Des Weiteren sind Maßnahmen zur Sekretelemination (ausgenommen Absaugen) zu nennen oder die Durchführung spezifischer Therapien nach Bobath oder Vojta oder die Durchführung ambulanter Peritonealdialyse (CAPD)."
                                rel="tooltip">5.11 Therapiemaßnahmen in häuslicher Umgebung</label>
                            <select name="module5_11" id="">
                                <option value="0" {{ old('module5_11') == '0' ? 'selected' : '' }}>Nie oder
                                    seltener als einmal wöchentlich</option>
                                <option value="1" {{ old('module5_11') == '1' ? 'selected' : '' }}>ein- bis
                                    mehrmals wöchentlich</option>
                                <option value="2" {{ old('module5_11') == '2' ? 'selected' : '' }}>ein- bis
                                    zweimal täglich</option>
                                <option value="3" {{ old('module5_11') == '3' ? 'selected' : '' }}>mindestens
                                    dreimal täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input512"
                                title="Gemeint sind hier spezielle Therapiemaßnahmen wie Hämodialyse oder Beatmung, die im häuslichen Umfeld durchgeführt werden können, wenn ständige Überwachung während der Maßnahme durch geschulte Pflegepersonen gewährleistet wird.
                            <br />
                            Spezielle Krankenbeobachtung (gemäß Pos. 24 HKP-Richtlinie) ist meist rund um die Uhr erforderlich, z. B. bei maschineller Beatmung, und ist mit einmal täglich einzutragen."
                                rel="tooltip">5.12 Zeit- und technikintensive Maßnahmen in
                                häuslicher
                                Umgebung</label>
                            <select name="module5_12" id="">
                                <option value="0" {{ old('module5_12') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_12') == '1' ? 'selected' : '' }}>Täglich
                                </option>
                                <option value="2  {{ old('module5_12') == '2' ? 'selected' : '' }}">1 x pro Monat
                                </option>
                                <option value="3" {{ old('module5_12') == '3' ? 'selected' : '' }}>2 x pro Monat
                                </option>
                                <option value="4" {{ old('module5_12') == '4' ? 'selected' : '' }}>3 x pro Monat
                                </option>
                                <option value="5" {{ old('module5_12') == '5' ? 'selected' : '' }}>4 x pro Monat
                                    (1 x pro Woche)</option>
                                <option value="6" {{ old('module5_12') == '6' ? 'selected' : '' }}>2 x pro Woche
                                </option>
                                <option value="7" {{ old('module5_12') == '7' ? 'selected' : '' }}>3 x pro Woche
                                </option>
                                <option value="8" {{ old('module5_12') == '8' ? 'selected' : '' }}>4 x pro Woche
                                </option>
                                <option value="9" {{ old('module5_12') == '9' ? 'selected' : '' }}>5 x pro Woche
                                </option>
                                <option value="10" {{ old('module5_12') == '10' ? 'selected' : '' }}>6 x pro
                                    Woche</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input513"
                                title="Hierunter fallen regelmäßige Besuche bei der niedergelassenen Hausärztin bzw. beim niedergelassenen Hausarzt oder Fachärztin bzw. Facharzt zu diagnostischen oder therapeutischen Zwecken. Wenn eine Unterstützung auf dem Weg zu oder bei Arztbesuchen erforderlich ist, ist diese in durchschnittlicher Häufigkeit zu erfassen."
                                rel="tooltip">5.13 Arztbesuche</label>
                            <select name="module5_13" id="">
                                <option value="0" {{ old('module5_13') == '0' ? 'selected' : '' }}>Entfällt
                                </option>
                                <option value="1" {{ old('module5_13') == '1' ? 'selected' : '' }}>1 x pro Monat
                                </option>
                                <option value="2" {{ old('module5_13') == '2' ? 'selected' : '' }}>2 x pro Monat
                                </option>
                                <option value="3" {{ old('module5_13') == '3' ? 'selected' : '' }}>3 x pro Monat
                                </option>
                                <option value="4" {{ old('module5_13') == '4' ? 'selected' : '' }}>4 x pro Monat
                                    (1 x pro Woche)</option>
                                <option value="5" {{ old('module5_13') == '5' ? 'selected' : '' }}>2 x pro Woche
                                </option>
                                <option value="6" {{ old('module5_13') == '6' ? 'selected' : '' }}>3 x pro Woche
                                </option>
                                <option value="7" {{ old('module5_13') == '7' ? 'selected' : '' }}>4 x pro Woche
                                </option>
                                <option value="8" {{ old('module5_13') == '8' ? 'selected' : '' }}>5 x pro Woche
                                </option>
                                <option value="9" {{ old('module5_13') == '9' ? 'selected' : '' }}>6 x pro Woche
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input514"
                                title="Hier ist das Aufsuchen anderer Therapeuten, z. B. Physiotherapeuten/Krankengymnasten, Ergotherapeuten, Logopäden, Psychotherapeuten, von Krankenhäusern zur ambulanten Behandlung oder Diagnostik oder anderer Einrichtungen des Gesundheitswesens zu berücksichtigen.
                            <br />
                            Sollte der Gesamtzeitaufwand bei der Nutzung dieser Einrichtungen einschließlich der Fahrtzeiten für die Pflegeperson mehr als drei Stunden umfassen, so ist dies unter Punkt 5.15 zu berücksichtigen."
                                rel="tooltip">5.14 Besuch anderer medizinischer oder thera
                                peutischer
                                Einrichtungen (bis zu 3 Std)</label>
                            <select name="module5_14" id="">
                                <option value="0" {{ old('module5_14') == '0' ? 'selected' : '' }}>Entfällt
                                </option>
                                <option value="1" {{ old('module5_14') == '1' ? 'selected' : '' }}>1 x pro Monat
                                </option>
                                <option value="2" {{ old('module5_14') == '2' ? 'selected' : '' }}>2 x pro Monat
                                </option>
                                <option value="3" {{ old('module5_14') == '3' ? 'selected' : '' }}>3 x pro Monat
                                </option>
                                <option value="4" {{ old('module5_14') == '4' ? 'selected' : '' }}>4 x pro Monat
                                    (1 x pro Woche)</option>
                                <option value="5" {{ old('module5_14') == '5' ? 'selected' : '' }}>2 x pro Woche
                                </option>
                                <option value="6" {{ old('module5_14') == '6' ? 'selected' : '' }}>3 x pro Woche
                                </option>
                                <option value="7" {{ old('module5_14') == '7' ? 'selected' : '' }}>4 x pro Woche
                                </option>
                                <option value="8" {{ old('module5_14') == '8' ? 'selected' : '' }}>5 x pro Woche
                                </option>
                                <option value="9" {{ old('module5_14') == '9' ? 'selected' : '' }}>6 x pro Woche
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input515"
                                title="Bei manchen Erkrankungen kann es notwendig sein, spezialisierte Einrichtungen aufzusuchen, wodurch erhebliche Fahrtzeiten anfallen können. Auch kann es erforderlich sein, sich zeitaufwändiger diagnostischer oder therapeutischer Maßnahmen zu unterziehen z. B. onkologische Behandlung oder Dialyse. Der dafür erforderliche Zeitaufwand für die Pflegeperson muss pro Termin mehr als drei Stunden betragen.
                            <br />
                            Sollte der Zeitaufwand bei der Nutzung dieser Einrichtungen (einschl. Fahrtzeiten) unter drei Stunden liegen, so ist dies unter Punkt 5.13 oder 5.14 zu berücksichtigen."
                                rel="tooltip">5.15 Zeitlich ausgedehnte Besuche anderer
                                medizinischer
                                oder
                                therapeutischer Einrichtungen (länger als 3 Std.)</label>
                            <select name="module5_15" id="">
                                <option value="0" {{ old('module5_15') == '0' ? 'selected' : '' }}>Entfällt
                                </option>
                                <option value="2" {{ old('module5_15') == '2' ? 'selected' : '' }}>1 x pro Monat
                                </option>
                                <option value="4" {{ old('module5_15') == '4' ? 'selected' : '' }}>2 x pro Monat
                                </option>
                                <option value="6" {{ old('module5_15') == '6' ? 'selected' : '' }}>3 x pro Monat
                                </option>
                                <option value="8.6" {{ old('module5_15') == '8.6' ? 'selected' : '' }}>4 x pro
                                    Monat
                                    (1 x pro Woche)</option>
                                <option value="17.2" {{ old('module5_15') == '17.2' ? 'selected' : '' }}>2 x pro
                                    Woche
                                </option>
                                <option value="25.8" {{ old('module5_15') == '25.8' ? 'selected' : '' }}>3 x pro
                                    Woche
                                </option>
                                <option value="34.4" {{ old('module5_15') == '34.4' ? 'selected' : '' }}>4 x pro
                                    Woche
                                </option>
                                <option value="43" {{ old('module5_15') == '43' ? 'selected' : '' }}>5 x pro
                                    Woche
                                </option>
                                <option value="51.6" {{ old('module5_15') == '51.6' ? 'selected' : '' }}>6 x pro
                                    Woche
                                </option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="online-rechner-input516"
                                title="Bei manchen Erkrankungen werden bestimmte Diäten oder Essvorschriften oder andere Verhaltensvorschriften von der Ärztin oder vom Arzt angeordnet. Dazu gehören auch die ärztlich angeordnete Nahrungs- und Flüssigkeitszufuhr, in der sowohl die Art und Menge der Lebensmittel wie auch die Art und der Zeitpunkt der Aufnahme aus therapeutischen Gründen geregelt sind, z. B. bei Stoffwechselstörungen, Nahrungsmittelallergien, bei Essstörungen wie Anorexie oder Prader-Willi-Syndrom. Andere Verhaltensvorschriften können sich auf vitale Funktionen beziehen, z. B. Sicherstellung einer Langzeit-Sauerstoff-Therapie bei unruhigen Personen.
                            <br />
                            Diese Vorschriften sind im Einzelnen zu benennen. Im Weiteren sind der Grad der Selbständigkeit bei der Einhaltung dieser Vorschriften und der daraus resultierende Bedarf an personeller Unterstützung zu beurteilen. Es geht hier um die Einsichtsfähigkeit der Person zur Einhaltung der Vorschriften und nicht um die Zubereitung einer Diät oder das An- und Ablegen einer Sauerstoffmaske. Nicht gemeint ist die selbstbestimmte Ablehnung von ärztlichen Vorschriften bei erhaltenen mentalen Funktionen. Liegen keine Vorschriften vor, ist das Feld „entfällt, nicht erforderlich“ anzukreuzen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die Vorschriften selbständig einhalten. Das Bereitstellen einer Diät reicht aus.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person benötigt Erinnerung, Anleitung. In der Regel reicht das Bereitstellen der Diät nicht aus. Darüber hinausgehendes Eingreifen ist maximal einmal täglich erforderlich.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person benötigt meistens Anleitung, Beaufsichtigung. Das Bereitstellen der Diät reicht nicht aus. Darüber hinausgehendes Eingreifen ist mehrmals täglich erforderlich
                            <br />
                            <strong>Unselbständig:</strong> Die Person benötigt immer Anleitung, Beaufsichtigung. Das Bereitstellen der Diät reicht nicht aus. Darüber hinausgehendes Eingreifen ist (fast) durchgehend erforderlich."
                                rel="tooltip">5.16 Einhaltung einer Diät und anderer krankheits-
                                oder
                                therapiebedingter Verhaltensvorschriften, und zwar:</label>
                            <select name="module5_16" id="">
                                <option value="0" {{ old('module5_16') == '0' ? 'selected' : '' }}>Entfällt oder
                                    selbstständig</option>
                                <option value="1" {{ old('module5_16') == '1' ? 'selected' : '' }}>
                                    Überwiegend selbstständig (Erinnerung/Anleitung ist mindestens
                                    einmal täglich notwendig)
                                </option>
                                <option value="2" {{ old('module5_16') == '2' ? 'selected' : '' }}>
                                    Überwiegend unselbstständig (benötigt meistens
                                    Anleitung/Beaufsichtigung mehrmals täglich)
                                </option>
                                <option value="3" {{ old('module5_16') == '3' ? 'selected' : '' }}>
                                    Unselbstständig (benötigt immer Anleitung/Beaufsichtigung)
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## MODULE 6 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module6Form">
                    <div class="online-rechner-section3-form-heading">
                        6. Gestaltung des Alltagslebens und sozialer Kontakte
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Kann die betroffene Person zum Beispiel ihren Tagesablauf
                        selbstständig gestalten? Kann sie mit anderen Menschen in direkten
                        Kontakt treten oder die Skatrunde ohne Hilfe besuchen?
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input61"
                                title="Den Tagesablauf nach individuellen Gewohnheiten und Vorlieben einteilen und bewusst gestalten und ggf. an äußere Veränderungen anpassen Dies erfordert planerische Fähigkeiten zur Umsetzung von Alltagsroutinen. Zu beurteilen ist, ob die Person von sich aus festlegen kann, ob und welche Aktivitäten sie im Laufe des Tages durchführen möchte, z. B. wann sie baden, essen oder zu Bett gehen oder ob und wann sie Fernsehen oder spazieren gehen möchte. Solche Festlegungen setzen voraus, dass die zeitliche Orientierung zumindest teilweise erhalten ist. Die Gutachterin bzw. der Gutachter kann dies prüfen, indem er sich z. B. den bisherigen oder künftigen Tagesablauf schildern lässt.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Routineabläufe können weitgehend selbständig gestaltet werden, bei ungewohnten Veränderungen ist Unterstützung notwendig. Es reichen z. B. Erinnerungshilfen an einzelne vereinbarte Termine. Überwiegend selbständig ist eine Person beispielsweise auch dann, wenn ihre Kommunikationsfähigkeit oder Sinneswahrnehmung stark beeinträchtigt ist und sie daher Hilfe benötigt, um den Tagesablauf mit anderen Menschen abzustimmen.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person benötigt Hilfe beim Planen des Routinetagesablaufs. Sie ist aber in der Lage, Zustimmung oder Ablehnung zu Strukturierungsangeboten zu signalisieren. Sie kann eigene Planungen häufig nicht einhalten, da diese wieder vergessen werden. Deshalb ist über den ganzen Tag hinweg eine Erinnerung bzw. Aufforderung erforderlich. Überwiegend unselbständig ist auch eine Person, die zwar selbst planen und entscheiden kann, aber für jegliche Umsetzung personelle Hilfe benötigt.
                            <br />
                            <strong>Unselbständig:</strong> Mitwirkung an der Tagesstrukturierung oder Orientierung an vorgegebenen Strukturen ist nicht oder nur minimal möglich."
                                rel="tooltip">6.1 Gestaltung des Alltagslebens und Anpassung an
                                Veränderungen</label>
                            <select name="module6_1" id="module6_1">
                                <option value="0" {{ old('module6_1') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module6_1') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module6_1') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module6_1') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input62"
                                title="Nach individuellen Gewohnheiten einen Tag-Nacht-Rhythmus einhalten und für ausreichende Ruhe- und Schlafphasen sorgen
                            <br />
                            Dazu gehört die Fähigkeit, die Notwendigkeit von Ruhephasen erkennen, sich ausruhen und mit Phasen der Schlaflosigkeit umgehen aber auch somatischen Funktionen, um ins Bett zu kommen und die Ruhephasen insbesondere nachts einhalten zu können.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person benötigt personelle Hilfe beim Aufstehen oder Zu-Bett-Gehen, z. B. Transferhilfen oder zeitliche Orientierungshilfen beim Wecken oder Aufforderung schlafen zu gehen oder einzelne Hilfen wie z. B. Abdunkeln des Schlafraumes. Die Nachtruhe ist meist ungestört, nur gelegentlich entsteht nachts ein Hilfebedarf.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Es treten regelmäßig Einschlafprobleme oder nächtliche Unruhe auf, die die Person größtenteils nicht allein bewältigen kann. Deshalb sind regelmäßige Einschlafrituale und beruhigende Ansprache in der Nacht erforderlich. Überwiegend unselbständig ist auch eine Person, die wegen hochgradiger motorischer Beeinträchtigung regelmäßig in der Nacht personeller Hilfe bedarf, um weiterschlafen zu können, z. B. bei Lagewechsel oder Toilettengängen in der Nacht.
                            <br />
                            <strong>Unselbständig:</strong> Die Person verfügt über keinen oder einen gestörten Schlaf-Wach-Rhythmus. Dies gilt u. a. für mobile gerontopsychiatrisch erkrankte Personen und auch für Menschen, die keinerlei Aktivitäten ausüben, z. B. im Wachkoma oder Personen, die regelmäßig mindestens dreimal in der Nacht personelle Unterstützung benötigen."
                                rel="tooltip">6.2 Ruhen und Schlafen</label>
                            <select name="module6_2" id="">
                                <option value="0" {{ old('module6_2') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module6_2') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module6_2') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module6_2') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input63"
                                title="Die verfügbare Zeit nutzen, um Aktivitäten durchzuführen, die den eigenen Vorlieben und Interessen entsprechen
                            <br />
                            „Verfügbare Zeit“ ist in diesem Zusammenhang definiert als Zeit, die nicht durch Notwendigkeiten wie Ruhen, Schlafen, Essen, Mahlzeitenzubereitung, Körperpflege, Arbeit etc. gebunden ist („freie“ Zeit).
                            <br />
                            Bei der Beurteilung geht es vorrangig um die Fähigkeit nach individuellen kognitiven, manuellen, visuellen oder auditiven Fähigkeiten und Bedürfnissen, geeignete Aktivitäten der Freizeitbeschäftigung auszuwählen und auch praktisch durchzuführen, z. B. Handarbeiten, Basteln, Bücher oder Zeitschriften lesen, Sendungen im Radio oder Fernsehen verfolgen, Computer nutzen. Dies gilt auch für Personen, die Angebote auswählen und steuern können, aber aufgrund somatischer Einschränkungen für die praktische Durchführung personelle Unterstützung benötigen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Es ist nur in geringem Maße Hilfe erforderlich, z. B. Zurechtlegen und Richten von Gegenständen, z. B.: Utensilien wie Bastelmaterial, Fernbedienung, Kopfhörer, o.ä. oder Erinnerung an gewohnte Aktivitäten, Motivation oder Unterstützung bei der Entscheidungsfindung (Vorschläge unterbreiten).
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann sich an Beschäftigungen beteiligen, aber nur mit (kontinuierlicher) Anleitung, Begleitung oder motorische Unterstützung.
                            <br />
                            <strong>Unselbständig:</strong> Die Person kann an der Entscheidung oder Durchführung nicht nennenswert mitwirken. Sie zeigt keine Eigeninitiative, kann Anleitung und Aufforderungen nicht kognitiv umsetzen, beteiligt sich nicht oder nur minimal an angebotenen Beschäftigungen."
                                rel="tooltip">6.3 Sich beschäftigen</label>
                            <select name="module6_3" id="">
                                <option value="0" {{ old('module6_3') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module6_3') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module6_3') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module6_3') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input64"
                                title="Längere Zeitabschnitte überschauend über den Tag hinaus planen
                            <br />
                            Dies kann beispielsweise anhand der Frage beurteilt werden, ob Vorstellungen oder Wünsche zu anstehenden Festlichkeiten wie Geburtstag oder Jahresfeste bestehen, ob die Zeitabläufe eingeschätzt werden können, z. B. vorgegebene Strukturen wie regelmäßige Termine nachvollzogen werden können oder ob die körperlichen Fähigkeiten vorhanden sind, um eigene Zukunftsplanungen mit anderen Menschen kommunizieren zu können. Es ist auch zu berücksichtigen, wenn stark ausgeprägte psychische Problemlagen (z. B. Ängste) es verhindern, sich mit Fragen des zukünftigen Handelns auseinanderzusetzen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person nimmt sich etwas vor, muss aber erinnert werden, dies auch durchzuführen. Oder sie benötigt infolge körperlicher Beeinträchtigungen regelmäßig Hilfe im Bereich der Kommunikation, um sich mit anderen Menschen verabreden zu können.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person plant von sich aus nicht, entscheidet aber mit Unterstützung durch andere Personen. Sie muss an die Umsetzung der eigenen Entscheidungen erinnert werden oder benötigt bei der Umsetzung emotionale oder körperliche Unterstützung. Überwiegend unselbständig ist daher auch eine Person, die zwar kognitiv in der Lage ist, selbständig zu planen und zu entscheiden, die aber so stark somatisch beeinträchtigt ist, dass sie für alle Umsetzungsschritte personelle Hilfe benötigt.
                            <br />
                            <strong>Unselbständig:</strong> Die Person verfügt nicht über Zeitvorstellungen für Planungen über den Tag hinaus, auch bei Vorgabe von Auswahloptionen wird weder Zustimmung noch Ablehnung signalisiert."
                                rel="tooltip">6.4 Vornehmen von in die Zukunft gerichteten
                                Planungen</label>
                            <select name="module6_4" id="">
                                <option value="0" {{ old('module6_4') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module6_4') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module6_4') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module6_4') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input65"
                                title="Im direkten Kontakt mit Angehörigen, Pflegepersonen, Mitbewohnern oder Besuchern umgehen, Kontakt aufnehmen, Personen ansprechen, auf Ansprache reagieren
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Umgang mit bekannten Personen erfolgt selbständig, zur Kontaktaufnahme mit Fremden ist Unterstützung erforderlich z. B. Anregung, zu einer neuen Mitbewohnerin oder einem neuen Mitbewohner Kontakt aufzunehmen oder punktuelle Unterstützung bei der Überwindung von Sprech-, Sprach- und Hörproblemen.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person ergreift von sich aus kaum Initiative. Sie muss angesprochen oder motiviert werden, reagiert aber verbal oder deutlich erkennbar durch andere Formen der Kommunikation (Blickkontakt, Mimik, Gestik). Überwiegend unselbständig ist auch eine Person, die auf weitgehende Unterstützung bei der Überwindung von Sprech-, Sprach oder Hörproblemen angewiesen ist.
                            <br />
                            <strong>Unselbständig:</strong> Die Person reagiert nicht auf Ansprache. Auch nonverbale Kontaktversuche, z. B. Berührungen führen zu keiner nennenswerten Reaktion."
                                rel="tooltip">6.5 Interaktion mit Personen im direkten
                                Kontakt</label>
                            <select name="module6_5" id="">
                                <option value="0" {{ old('module6_5') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module6_5') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module6_5') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module6_5') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input66"
                                title="Bestehende Kontakte zu Freunden, Bekannten, Nachbarn aufrechterhalten, beenden oder zeitweise ablehnen
                            <br />
                            Dazu gehört auch die Fähigkeit, mit technischen Kommunikationsmitteln wie Telefon umgehen zu können z. B. Besuche verabreden oder Telefon- oder Brief- oder Mail-Kontakte.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann die beschriebene Aktivität ohne personelle Hilfe durchführen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann planen, braucht aber Hilfe beim Umsetzen wie z.B. Erinnerungszettel bereitlegen oder Telefonnummern mit Namen oder mit Bild versehen, Erinnern und Nachfragen, ob Kontakt hergestellt wurde, oder Erinnern an Terminabsprachen. Pflegeperson wählt die Telefonnummer, die Person führt dann das Gespräch; oder die Person beauftragt die Pflegeperson, ein Treffen mit Freunden, Bekannten zu verabreden.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Kontaktgestaltung der Person ist eher reaktiv. Sie sucht von sich aus kaum Kontakt, wirkt aber mit, wenn beispielsweise die Pflegeperson die Initiative ergreift. Überwiegend unselbständig ist auch, wer aufgrund von somatischen Beeinträchtigungen während der Kontaktaufnahme personelle Unterstützung durch die Bezugsperson, z. B. bei der Nutzung von Kommunikationshilfen (Telefon halten) oder bei der Überwindung von Sprech-, Sprach- oder Hörproblemen benötigt.
                            <br />
                            <strong>Unselbständig:</strong> Die Person nimmt keinen Kontakt außerhalb des direkten Umfeldes auf und reagiert nicht auf Anregungen zur Kontaktaufnahme."
                                rel="tooltip">6.6 Kontaktpflege zu Personen außerhalb des direkten
                                Umfeldes</label>
                            <select name="module6_6" id="">
                                <option value="0" {{ old('module6_6') == '0' ? 'selected' : '' }}>Selbstständig
                                </option>
                                <option value="1" {{ old('module6_6') == '1' ? 'selected' : '' }}>Überwiegend
                                    selbstständig</option>
                                <option value="2" {{ old('module6_6') == '2' ? 'selected' : '' }}>Überwiegend
                                    unselbstständig</option>
                                <option value="3" {{ old('module6_6') == '3' ? 'selected' : '' }}>
                                    Unselbstständig</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

            </form>

            <div class="online-rechner-section3-bottom">
                {{-- <div class="online-rechner-section3-heading-bottom">Ergebnis</div> --}}
                {{-- <div class="online-rechner-section3-heading-bottom" style="background: white;color:black">
                    <div class="">Module</div>
                    <div class="">Summe Einzelpunkte</div>
                    <div class="">
                        Gewichtete Punkte
                    </div>
                </div> --}}
                <div class=" online-rechner-section3-heading-bottom" style="background: black;color:white">
                    <div class="col-lg-8">
                        <div style="padding-top: 0">Ergebnis</div>
                    </div>
                    {{-- <div class="col-lg-2">
                        <div class="pt-0">Summe Einzelpunkte</div>
                    </div>
                    <div class="col-lg-2">
                        <div style="padding-top: 0">Gewichtete Punkte</div>
                    </div> --}}
                </div>

                <div class="online-rechner-section3-inner-bottom">
                    <div class="row">
                        <div class="col-lg-8 ">
                            <div style="padding-top: 0;font-weight:bold">Module</div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-0" style="text-align: right;font-weight:bold">Summe Einzelpunkte</div>
                        </div>
                        <div class="col-lg-2 ">
                            <div style="text-align: right!important;padding-top: 0;font-weight:bold">Gewichtete Punkte
                            </div>
                        </div>
                    </div>
                    @if (session('Sonderfall') === true)
                        <div class="" style="color: white">
                            <strong style="color: white">Sonderfall:</strong>
                            <span style="color: white">
                                Wenn beide Arme und Beine gebrauchsunfähig sind (also wenn die pflegebedürftige Person
                                weder
                                in der Lage ist Arme noch Beine zu verwenden), ist eine vollständige Beantwortung aller
                                Fragen nicht erforderlich. Es ist Pflegegrad 5 zu bewilligen.</span>
                        </div>
                    @else
                        <br>
                        @foreach (session('modul1_punkte', []) as $moduleName => $moduleValues)
                            <div class="row" style="margin: 0">
                                <div class="col-lg-8 col-12">
                                    <div style="padding-top: 0">{{ $loop->iteration }} - {{ $moduleName }}</div>
                                </div>
                                <div class="col-lg-2 col-12" style="text-align: right">
                                    <div class="pt-0" style="text-align: right">
                                        {{ $moduleValues['punkte'] ?? '---' }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12" style="text-align: right">
                                    <div style="padding-top: 0;text-align: right">
                                        {{ $moduleValues['gewichtet'] ?? '---' }}
                                    </div>
                                </div>
                            </div>
                            <hr / style="border: 1px solid white;margin:0">
                        @endforeach

                        <div class="online-rechner-section3-bottom-heading2">
                            PFLEGEGRAD:&nbsp;{{ session('pflegegrad', '') }}
                        </div>
                    @endif
                </div>
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
