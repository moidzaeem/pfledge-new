<!DOCTYPE html>
<html lang="en">

@include('components.header.head')

<style>

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
        <button class="online-rechner-section2-btn1 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.index') }}"></a> RECHNER PFLEGEGRAD
        </button>
        <button class="online-rechner-section2-btn2 online-rechner-section2-btn online-active-btn">
            <a href="{{ route('online.rechner.second') }}"></a> RECHNER PFLEGELEISTUNGEN
        </button>
        <button class="online-rechner-section2-btn3 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.third') }}"></a> RECHNER PFLEGEGELD
        </button>
        <button class="online-rechner-section2-btn4 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.fourth') }}"></a> RECHNER
            PFLEGEKOSTEN IM PFLEGEHEIM
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
            <div class="online-rechner-section3-heading">
                Pflegeleistungsrechner
            </div>
            <div class="online-rechner-section3-sub-heading">
                Ermitteln Sie Ihre Pflegeleistungen schnell und einfach – unser
                Pflegeleistungsrechner
            </div>

            <div class="online-rechner-content">
                Mit unserem Pflegeleistungsrechner können Sie schnell und
                unkompliziert herausfinden, welche finanziellen Leistungen Ihnen bei
                einem bestimmten Pflegegrad zustehen. Basierend auf den aktuellen
                gesetzlichen Vorgaben, ermöglicht Ihnen der Rechner eine erste
                Einschätzung der möglichen Pflegegelder, Sachleistungen und weiteren
                Unterstützungsangebote. Geben Sie einfach den ermittelten oder
                vermuteten Pflegegrad ein, und erhalten Sie sofort einen Überblick
                über die Ihnen zustehenden Leistungen.
            </div>
            <br />
            <div class="online-rechner-section3-content-bottom">
                Bitte beachten Sie: Dieser Rechner dient als Orientierungshilfe und
                ersetzt nicht die formelle Antragsstellung bei den zuständigen
                Stellen. Nutzen Sie den Pflegeleistungsrechner, um sich optimal auf
                die Beantragung der Pflegeleistungen vorzubereiten und die passenden
                Optionen für Ihre individuelle Pflegesituation zu finden.
            </div>
            <div style="display: flex; justify-content: center">
                <a href="{{ route('online.rechner.index') }}" class="online-rechner-page2-section3-btn">Nutzen Sie
                    unseren
                    Pflegegradrechner</a>
            </div>

            <!-- ######################## Online Rechner Section 3 Form ######################## -->

            <!-- ######################## MODULE 1 FORM ######################## -->
            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>

            <div class="online-rechner-section3-form" style="display: block" id="module1Form">
                <form action="" id="pflegeForm">
                    <div class="online-rechner-page2-section3-input-div"
                        style="
                  margin-bottom: 1rem;
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
                ">
                        <label style="margin-top: -0.67rem" class="online-rechner-page2-section3-heading"
                            for="online-rechner-input1">Pflegegrad:</label>
                        <select name="" id="pflegegrad1" style="width: 50%">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
                    </div>

                    <label class="online-rechner-page2-section3-heading" for="online-rechner-input1"
                        id="div1">Ausgewählter Pflegegrad: 1</label>

                    <div class="online-rechner-section3-form-sub-heading" id="div2">
                        Sie können einen häuslichen Pflegedienst in Anspruch nehmen und
                        bekommen monatlich bis zu 131 EUR der Kosten durch die Pflegekasse
                        ersetzt. <br />
                        Denn für Pflegegrad 1 gewährt die Pflegekasse den
                        Entlastungsbetrag gemäß § 45b in Höhe von monatlich 131 Euro
                        ausnahmsweise auch für die Sachleistung durch den Pflegedienst
                        (Grundpflege). Zudem stehen Pflege­bedürftigen mit Pflegegrad 1
                        zwei kostenlose Pflegeberatungsbesuche pro Jahr zu.
                    </div>

                    <div class="online-rechner-page2-section3-input-div"
                        style="
                  margin-bottom: 1rem;
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
                  margin-top: 1rem;
                ">
                        <label style="margin-top: -0.67rem"
                            class="online-rechner-page2-section3-heading input-margin-top" for="online-rechner-input1"
                            id="div3">Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 131
                            EUR)</label>
                        <input type="number" value="0" class="ambulants" style="width: 50%" id="pflegedienst" name="pflegedienst" />
                    </div>

                    <div style="display: flex; justify-content: center">
                        <button id="submit1" class="online-rechner-page2-section3-btn" type="submit"
                            style="border: none; text-transform: uppercase">
                            Pflegeleistungen berechnen
                        </button>
                    </div>
                </form>
            </div>

            <!-- ######################## Online Rechner Section 3 bottom ######################## -->
            <div class="online-rechner-section3-bottom">
                {{-- <div class="online-rechner-section3-bottom-heading">Ergebnis</div> --}}
                <div class="online-rechner-section3-heading-bottom">
                    <div>Ergebnis</div>
                </div>

                <div class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2">
                    <div style="padding-top: 0">
                        <span class="span1">Sachleistung § 36 SGB XI (monatlich)</span>
                        <span id="sachleistung" class="span2">0,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Restwert Sachleistungshöchstwert in %</span>
                        <span id="sachleistungrestwert" class="span2">0,00 %</span>
                    </div>
                    <div>
                        <span class="span1">Pflegegeld § 37 SGB XI (monatlich)</span>
                        <span id="pflegegeld" class="span2">0,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Pflegegeld Höchstbetrag</span>
                        <span id="pflegegeldmax" class="span2">0,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Tages-/Nachtpflege § 41 SGB XI (monatlich)</span>
                        <span id="tagesnachtpflege" class="span2">0,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Vollstationäre Pflege § 43 SGB XI (monatlich)</span>
                        <span id="pflegevollstationaer" class="span2">125,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Verhinderungspflege § 39 SGB XI (kalenderjährlich)</span>
                        <span id="verhinderungspflege" class="span2">0,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Kurzzeitpflege § 42 SGB XI (kalenderjährlich)</span>
                        <span id="kurzzeitpflege" class="span2">0,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Zusätzliche Betreuungsangebote nach § 45b SGB XI
                            (monatlich)</span>
                        <span id="betreuungszusatz" class="span2">125,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Zuschlag für ambulante Wohngruppen § 38 a SGB XI
                            (monatlich)</span>
                        <span id="wohngruppen" class="span2">214,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Zum Verbrauch bestimmte Hilfsmittel § 40 SGB XI
                            (monatlich)</span>
                        <span id="hilfsmittel" class="span2">40,00 EUR</span>
                    </div>
                    <div>
                        <span class="span1">Wohnumfeldverbesserungen nach § 40 SGB XI (je Maßnahme)</span>
                        <span id="wohnumfeldverbesserung" class="span2">4.000,00 EUR</span>
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
