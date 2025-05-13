<!DOCTYPE html>
<html lang="en">

@include('components.header.head')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
        <button class="online-rechner-section2-btn4 online-rechner-section2-btn online-active-btn">
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
            <div class="online-rechner-section3-heading">Pflegekostenrechner für die Pflege im Pflegeheim<div>
                    <div class="online-rechner-section3-sub-heading">
                        Pflegeheimkosten einfach berechnen – Ihr Pflegekostenrechner für stationäre Pflege
                    </div>

                    <div class="online-rechner-content">
                        Mit unserem Pflegekostenrechner können Sie schnell und unkompliziert herausfinden, wie hoch die
                        monatlichen Kosten für einen Pflegeheimplatz sein werden und ob eine finanzielle Lücke entsteht.
                        Dieser Rechner berücksichtigt die gesetzlich festgelegten Eigenanteile sowie die Zuschüsse der
                        Pflegeversicherung, die abhängig von der Verweildauer im Pflegeheim sind. Neben den
                        pflegebedingten Aufwendungen werden auch die Kosten für Unterkunft, Verpflegung und
                        Investitionen in die Berechnung einbezogen. <br>
                        <br>
                        Nutzen Sie den Pflegekostenrechner, um Ihre finanzielle Situation realistisch einzuschätzen und
                        frühzeitig Vorsorge zu treffen. So können Sie sicherstellen, dass Sie oder Ihre Angehörigen im
                        Pflegefall bestens versorgt sind, ohne von unerwarteten Kosten überrascht zu werden.
                    </div>
                    <br />




                    <!-- ######################## Online Rechner Section 3 Form ######################## -->

                    <!-- ######################## MODULE 1 FORM ######################## -->
                    <div class="online-rechner-section3-heading-bottom">
                        <div>Erfassung</div>
                    </div>
                    <form action="" id="pflegekosten_im">
                        <div class="online-rechner-section3-form" style="display: block" id="module1Form">
                            <div class="online-rechner-section3-form-heading">Pflegekosten im Pflegeheim</div>
                            <div class="online-rechner-section3-form-sub-heading mt-4 mb-4">Erfassen Sie das Bundesland
                                und die Dauer der Pflege</div>

                            <div class="online-rechner-page2-section3-input-div"
                                style="margin-bottom: 1rem; display: flex;justify-content: space-between; align-items: center;">
                                <label style="margin-right: 1rem; margin-top: -0.67rem;"
                                    class="online-rechner-page2-section3-heading "
                                    for="online-rechner-input1">Bundesland</label>
                                <select name="" id="bundesland" style="width: 50%">
                                    <option value="1">Baden-Württemberg</option>
                                    <option value="2">Bayern</option>
                                    <option value="3">Berlin</option>
                                    <option value="4">Brandenburg</option>
                                    <option value="5">Bremen</option>
                                    <option value="6">Hamburg</option>
                                    <option value="7">Hessen</option>
                                    <option value="8">Mecklenburg-Vorpommern</option>
                                    <option value="9" selected>Niedersachsen</option>
                                    <option value="10">Nordrhein-Westfalen</option>
                                    <option value="11">Rheinland-Pfalz</option>
                                    <option value="12">Saarland</option>
                                    <option value="13">Sachsen</option>
                                    <option value="14">Sachsen-Anhalt</option>
                                    <option value="15">Schleswig-Holstein</option>
                                    <option value="16">Thüringen</option>

                                </select>
                            </div>
                            <div class="online-rechner-page2-section3-input-div"
                                style="display: flex;justify-content: space-between; align-items: center;">
                                <label style="margin-right: 1rem; margin-top: -0.67rem;"
                                    class="online-rechner-page2-section3-heading "
                                    for="online-rechner-input1">Verweildauer</label>
                                <select name="" id="pflegeart" style="width: 50%">
                                    <option value="1">0 bis 12 Monate (Zuschlag für EEE 15%)</option>
                                    <option value="2">13 bis 24 Monate (Zuschlag für EEE 30%)</option>
                                    <option value="3">25 bis 36 Monate (Zuschlag für EEE 50%)</option>
                                    <option value="4">mehr als 36 Monate (Zuschlag für EEE 75%)</option>

                                </select>
                            </div>

                    </form>
                    <div style="display: flex; justify-content: center;"><button id="pflegekosten_im-btn"
                            class="online-rechner-page2-section3-btn"
                            style="border: none; text-transform: uppercase;">Pflegekosten berechnen</button></div>
                </div>


                <!-- ######################## Online Rechner Section 3 bottom ######################## -->
                <div class="online-rechner-section3-bottom">
                    {{-- <div class="online-rechner-section3-bottom-heading">Ergebnis</div> --}}
                    <div class="online-rechner-section3-heading-bottom">
                        <div>Ergebnis</div>
                    </div>

                    <div
                        class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2 online-rechner-section3-inner-bottom23 ">

                        <div style="padding-top: 0; color: white; font-weight: 600;">
                            <span class="span1" style="text-align: right">Pflegebedingte Kosten</span>
                            <span class="span2" style="text-align: right">Pflegebedingte Kosten nach Zuschlag</span>
                            <span class="span3" style="text-align: right">Investitionskosten</span>
                            <span class="span4" style="text-align: right">Verpflegung & Unterkunft</span>
                            <span class="span5" style="text-align: right">Ihr monatlicher Eigenanteil</span>

                        </div>
                        <div>
                            <span id="pflegebedingtekosten" class="span1" style="text-align: right">1.098,00 EUR</span>
                            <span id="pflegebedingtekostennachzuschlag" class="span2" style="text-align: right">933,30 EUR</span>
                            <span id="investitionskosten" class="span3" style="text-align: right">509,00 EUR</span>
                            <span id="verpflegungundunterkunftkosten" class="span4" style="text-align: right">754,00 EUR</span>
                            <span id="eigenanteil" class="span5" style="text-align: right">2.196,30 EUR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Online_rechner_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')



</body>

</html>
