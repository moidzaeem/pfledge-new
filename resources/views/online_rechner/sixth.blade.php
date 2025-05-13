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
        <button class="online-rechner-section2-btn5 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.fifth') }}"></a>
            RECHNER PFLEGEKOSTEN FÜR AMBULANTE PFLEGE
        </button>
        <button class="online-rechner-section2-btn6 online-rechner-section2-btn online-active-btn">
            <a href="{{ route('online.rechner.sixth') }}"></a>
            RECHNER ZUZAHLUNGEN
        </button>
    </div>
    <div class="online-rechner-section3-container">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Zuzahlungsrechner</div>

            <div class="online-rechner-content mt-3 mb-5">
                Im Rahmen der gesetzlichen Krankenversicherung gelten verschiedene Zuzahlungsregelungen für Leistungen
                wie Arznei-, Heil- und Hilfsmittel sowie Krankenhausaufenthalte, Vorsorge- und Rehabilitationsmaßnahmen,
                häusliche Krankenpflege, Haushaltshilfe und Fahrkosten. Mit unserem Zuzahlungsrechner können Sie schnell
                und einfach ermitteln, bis zu welchem Betrag Sie von Zuzahlungen befreit werden können und welchen
                Höchstbetrag Sie maximal selbst tragen müssen. Geben Sie einfach das Berechnungsjahr und einige
                grundlegende Angaben ein, um Ihre individuelle Zuzahlungsgrenze zu berechnen.

            </div>

            <!-- ######################## MODULE 1 FORM ######################## -->
            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>
            <form action="{{ route('online.rechner.sixth.calculate') }}" id="zuzahlungen" method="POST">
                @csrf
                <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">Berechnung für</label>
                        <select name="jahr" id="jahr" style="width: 50%;">
                            <option value="2023" {{ old('jahr') == '2023' ? 'selected' : '' }}>2023</option>
                            <option value="2022" {{ old('jahr') == '2022' ? 'selected' : '' }}>2022</option>

                        </select>
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1"
                            title="Geben Sie bitte an, ob für Sie als Versicherter einer der folgenden Punkte zutrifft:<br />
                            - Sie sind Empfänger von ALG II (Hartz IV), Sie beziehen Hilfe zum Lebensunterhalt.<br />
                            - Sie erhalten Grundsicherung im Alter und bei Erwerbsminderung.<br />
                            - Für Sie werden die Kosten der Unterbringung in einem Heim oder einer ähnlichen Einrichtung von einem Träger der Sozialhilfe oder der Kriegsopferfürsorge getragen.<br />
                            - Sie sind Sozialhilfeempfänger, für den die Gesundheitsversorgung durch die gesetzliche Krankenversicherung übernommen wird.<br />
                            - Sie sind Empfänger von laufenden Leistungen nach § 2 des Asylbewerber-Leistungsgesetzes.<br /><br />
                            Trifft einer der Punkte für den Versicherten zu, wird als Familien-Bruttoeinkommen zur Ermittlung der Belastungsgrenze lediglich der Regelsatz des Haushaltsvorstandes nach der Regelsatzverordnung festgelegt. 2023 beträgt der Regelsatz 502 EUR monatlich bzw. 6.024 Euro je Kalenderjahr, im Vorjahr 449 EUR monatlich bzw. 5.388 EUR jährlich.<br /><br />
                            Der Regelsatz ist der jährlich festgelegte Satz für den Lebensunterhalt, der zur Gewährleistung des Existenzminimums in Deutschland notwendig ist."
                            rel="tooltip">ALG II- oder Sozialhilfeempfänger</label>
                        <select name="alg" id="alg" style="width: 50%;">
                            <option value="0" {{ old('alg') == '0' ? 'selected' : '' }}>Nein</option>
                            <option value="1" {{ old('alg') == '1' ? 'selected' : '' }}>Ja</option>>
                        </select>
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1"
                            title="Bitte geben Sie an, ob Sie oder ein anderes gesetzlich versichertes Familienmitglied schwerwiegend chronisch krank im Sinne der folgenden per Gesetz festgelegten Kriterien sind. Dabei ist es für die Berechnung der Zuzahlung unerheblich, ob eine oder mehrere Versicherte chronisch krank sind. Eine Krankheit gilt als schwerwiegend chronisch, wenn sie wenigstens ein Jahr lang mindestens einmal pro Quartal ärztlich behandelt wurde und einer der folgenden Punkte zutrifft:<br />
                            - Es liegt eine Pflegebedürftigkeit mit Pflegegrad 3 oder höher vor.<br />
                            - Es liegt ein Grad der Behinderung nach Schwerbehindertenrecht bzw. Versorgungsrecht von mindestens 60 % vor oder eine Minderung der Erwerbsfähigkeit nach Unfallversicherungsrecht von mindestens 60 %.<br />
                            - Es ist eine kontinuierliche medizinische Versorgung (ärztliche oder psychotherapeutische Behandlung, Arzneimitteltherapie, Behandlungspflege, Versorgung mit Heil- und Hilfsmitteln) erforderlich, ohne die nach ärztlicher Einschätzung eine lebensbedrohliche Verschlimmerung der Erkrankung, eine Verminderung der Lebenserwartung oder eine dauerhafte Beeinträchtigung der Lebensqualität durch die verursachte Gesundheitsstörung zu erwarten ist.<br />
                            - Die Krankenkasse trifft die Entscheidung, ob Sie gemäß dieser Richtlinien schwerwiegend chronisch krank sind.<br />
                            - Versicherte mit chronischer Krankheit haben eine geringere Belastungsgrenze von nur 1 % (statt 2 %) der jährlichen Bruttoeinnahmen zum Lebensunterhalt (abzüglich etwaiger Freibeträge für Gatte und Kinder). Sobald die Belastungsgrenze erreicht ist, kann sich die Familie für den Rest des Jahres von weiteren Zuzahlungen durch die Krankenkasse befreien lassen. Die Befreiung gilt für die gesamte im gemeinsamen Haushalt lebende Familie.
                            "
                            rel="tooltip">Chronisch krank oder Pflegegrad 3 bis 5</label>
                        <select name="chronisch" id="chronisch" style="width: 50%;">
                            <option value="1" {{ old('chronisch') == '1' ? 'selected' : '' }}>Nein</option>
                            <option value="2" {{ old('chronisch') == '2' ? 'selected' : '' }}>Ja</option>
                        </select>
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1"
                            title="Geben Sie bitte an, ob Sie mit Ihrem Ehepartner bzw. mit Ihrem eingetragenen Lebenspartner in einem Haushalt leben. Dabei ist unerheblich, ob dieser selbst versichert, familienversichert oder nicht in der gesetzlichen Krankenversicherung versichert ist. Zur Bestimmung der Belastungsgrenze für Zuzahlungen wird das Familien-Bruttoeinkommen abzüglich bestimmter Freibeträge für jedes im Haushalt lebende Familienmitglied herangezogen.<br />
                            - Der Freibetrag für den Ehepartner bzw. eingetragenen Lebenspartner beträgt 2023 15 % der jährlichen Bezugsgröße 2023 und macht somit jährlich 6.111,00 EUR aus, falls dieser Punkt mit 'ja' beantwortet wurde (Im Vorjahr 2022 waren es 15 % der vorjährlichen Bezugsgröße und machte somit jährlich 5.922,00 EUR aus.).<br />
                            - Die jährliche Bezugsgröße ist definiert als das Durchschnittsentgelt der gesetzlichen Rentenversicherung im vorvergangenen Kalenderjahr. In der gesetzlichen Kranken- und Pflegeversicherung gilt dabei die Bezugsgröße West bundeseinheitlich.
                            "
                            rel="tooltip">Verheiratet oder eingetragene Lebenspartnerschaft</label>
                        <select name="verheiratet" id="verheiratet" style="width: 50%;">
                            <option value="0" {{ old('verheiratet') == '0' ? 'selected' : '' }}>Nein</option>
                            <option value="1" {{ old('verheiratet') == '1' ? 'selected' : '' }}>Ja</option>
                        </select>
                    </div>



                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                        <label style="margin-top: -0.67rem;"
                            class="online-rechner-page2-section3-heading input-margin-top" for="online-rechner-input1"
                            title="Geben Sie bitte an, wie viele Ihrer Kinder in Ihrem Haushalt leben. Dazu zählen alle familienversicherte Kinder. Nicht familienversicherte Kinder zählen bis zum Ende des Kalenderjahres dazu, in dem sie das 18. Lebensjahr vollenden. Kinder von getrennt lebenden oder geschiedenen Ehepartnern werden bei dem Elternteil berücksichtigt, bei dem sie wohnen, unabhängig davon, bei wem die Familienversicherung durchgeführt wird.<br />
                            Zur Bestimmung der Belastungsgrenze für Zuzahlungen wird das Familien-Bruttoeinkommen abzüglich bestimmter Freibeträge für jedes im Haushalt lebende Familienmitglied herangezogen. 2023 beträgt der Freibetrag je Kind 8.952 EUR. Im Vorjahr, also 2022 betrug er 8.388 EUR.
                            "
                            rel="tooltip">Anzahl der Kinder</label>
                        <input id="kinder" name="kinder" type="number" min="0" class="ambulants2"
                            value="{{ old('kinder') }}" style="width: 50%;">
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                        <label style="margin-top: -0.67rem;"
                            class="online-rechner-page2-section3-heading input-margin-top" for="online-rechner-input1"
                            title="Geben Sie bitte das jährliche Familien-Bruttoeinkommen an.<br />
                            - Das Familieneinkommen setzt sich zusammen aus den gesamten Bruttoeinnahmen zum Lebensunterhalt des Versicherten und seiner Familienangehörigen im gemeinsamen Haushalt.<br />
                            - Hierzu zählen wiederkehrende Bezüge wie Arbeitsentgelt, Renten- und Versorgungsbezüge, Arbeitseinkommen sowie Einkünfte, die ein Unternehmer aus seinem Geschäftsbetrieb zur Bestreitung des Lebensunterhalts für sich und seine Familie erzielt oder entnimmt.<br />
                            - Dazu kommen noch Einnahmen aus Kapitalvermögen, Einnahmen aus Vermietung und Verpachtung, sowie Hilfen zum Lebensunterhalt nach dem Bundessozialhilfegesetz.<br />
                            - Genauso wie bei den Krankenversicherungs­beiträgen werden also auch für die Ermittlung der Belastungsgrenze die Bruttoeinkünfte als Berechnungsgrundlage herangezogen.<br />
                            - Anzugeben sind die geschätzten Einkünfte für das aktuelle Kalenderjahr, denn gemäß der 'Verfahrensgrundsätze zur Vorschrift über die Erstattung bzw. Befreiung von gesetzlichen Zuzahlungen' heißt es unter 3.2 (3): 'Die Feststellung der Belastungsgrenze erfolgt auf der Basis der zum Zeitpunkt der Prüfung bestehenden aktuellen Verhältnisse durch eine Schätzung der kalenderjährlichen Bruttoeinnahmen zum Lebensunterhalt unter Einbeziehung der voraussichtlich im weiteren Verlauf des Kalenderjahres zu erwartenden Einnahmen (z. B. Urlaubs- und Weihnachtsgeld) und Einkommenssteigerungen. Bei stark schwankenden Einkünften kann eine vergleichende Berücksichtigung der Gesamtbruttoeinnahmen des Vorjahres erfolgen.'
                            "
                            rel="tooltip">Familien-Bruttoeinkommen</label>
                        <input id="brutto" type="number" min="0" name="brutto" class="ambulants3"
                            value="{{ old('brutto') }}" style="width: 50%;">
                    </div>

                    <div style="display: flex; justify-content: center;"><button id="zuzahlungen-btn" type="submit"
                            class="online-rechner-page2-section3-btn"
                            style="border: none; text-transform: uppercase;">Berechnen</button></div>
            </form>

        </div>


        <!-- ######################## Online Rechner Section 3 bottom ######################## -->
        <div class="online-rechner-section3-bottom">
            <div class="online-rechner-section3-heading-bottom">
                <div>Ergebnis</div>
            </div>

            @if (session('regelsatz') && session('regelsatz') === 1)
                <div class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2">
                    <div style="padding-top: 0">
                        <span class="span1">Regelsatz</span>
                        <span
                            class="span2">{{ number_format(session('berechnungsgrundlage1'), 2, ',', '.') . ' EUR' }}</span>
                        <div>
                        </div>
                    @else
                        <div class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2">
                            <div style="padding-top: 0"><span class="span1">Familieneinkommen</span> <span
                                    class="span2">{{ number_format(session('brutto'), 2, ',', '.') . ' EUR' }}
                                </span> </div>
                            <div> <span class="span1">- Freibetrag Partner</span> <span
                                    class="span2">{{ number_format(session('verheiratetfreibetrag'), 2, ',', '.') . ' EUR' }}</span>
                            </div>
                            <div> <span class="span1">- Freibetrag Kinder</span> <span class="span2">
                                    {{ number_format(session('kinderfreibetrag'), 2, ',', '.') . ' EUR' }}
                                </span>
                            </div>

                            <div> <span class="span1">= Berechnungsgrundlage</span> <span class="span2">
                                    {{ number_format(session('berechnungsgrundlage1'), 2, ',', '.') . ' EUR' }}
                                </span>
                            </div>
                            <div> <span class="span1">Belastungsgrenze</span> <span
                                    class="span2">{{ session('chronisch') . '% davon' }}</span>
                            </div>

                            <div style="border-bottom: none; color: #ffffffbd;">{{ session('maxzuzahlungtext') }}
                            </div>

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
