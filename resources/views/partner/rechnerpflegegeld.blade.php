<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PflegePur - Ihr Partner für umfassende Pflege und Gesundheit </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <script src="{{ asset('assets/index.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        
<meta name="google-adsense-account" content="ca-pub-8218213656808471">

    <!-- ########################### Online Rechner SECTION 2 ########################### -->

@if ($partnerid == 'l-und-m')
    @php 
        $bgcolor="#F8E9E9";
        $bgcolor2="#B22222";        
    @endphp
@elseif ($partnerid == 'hameln-pyrmont')
    @php 
        $bgcolor="#E0EDF5";
        $bgcolor2="#10498A";        
    @endphp
@else
    @php 
        $bgcolor="#F8E9E9";
        $bgcolor2="#B22222";        
    @endphp
@endif


<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="985f611d-8977-47e6-9427-b1f4e5d959f1" data-blockingmode="auto" type="text/javascript"></script>

<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://pflegepur.matomo.cloud/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src='//cdn.matomo.cloud/pflegepur.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


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

    <!-- ########################### Online Rechner SECTION 1 ########################### -->

    <!-- ########################### Online Rechner SECTION 3 ########################### -->
    <div class="online-rechner-section3-container" style="padding-top:0px;margin-top:0px;background-color:{{$bgcolor;}};">
    
            <div class="online-rechner-section3-heading" style="margin:0px;padding:0px;">        
                <a href="https://pflegepur.de" target="_blank"><img class="header-img" src="https://pflegepur.de/assets/Images/pflegepur_logo.png" alt="Header Image" style="width:30%;" /></a>
            </div>                
    
    
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegegeldrechner</div>
            <div class="online-rechner-section3-sub-heading">
                Pflegegeldansprüche einfach berechnen – unser Pflegegeldrechner
            </div>

            <div class="online-rechner-content">
                Mit unserem Pflegegeldrechner können Sie schnell und unkompliziert ermitteln, wie hoch Ihr
                Pflegegeldanspruch bei Kombipflege ausfällt. Wenn Sie beispielsweise einen ambulanten Pflegedienst in
                Anspruch nehmen und Ihren Anspruch nicht vollständig ausschöpfen, können Sie den verbleibenden Betrag
                als Pflegegeld erhalten. Der Rechner hilft Ihnen dabei, diese Kombination aus Sachleistungen und
                Pflegegeld optimal zu berechnen und das Maximum aus Ihren Ansprüchen herauszuholen. <br>
                <br>
                Nutzen Sie unseren Pflegegeldrechner, um sich einen klaren Überblick über Ihre finanziellen
                Möglichkeiten zu verschaffen und die für Ihre Pflegesituation beste Lösung zu finden.
            </div>
            <br />




            <!-- ######################## Online Rechner Section 3 Form ######################## -->

            <!-- ######################## MODULE 1 FORM ######################## -->
            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>
            <form action="{{ route('partner.rechnerpflegegeld.calculate') }}" method="GET" id="pflegegeldForm">
                @csrf
                <div class="online-rechner-section3-form" style="display: block" id="module1Form">
                    <div class="online-rechner-section3-form-heading">Wie hoch ist das Pflegegeld, was Ihnen monatlich
                        zusteht? </div>
                    <div class="online-rechner-section3-form-sub-heading mt-4 mb-4">Geben Sie hier Ihren Pflegegrad und
                        Ihre Nutzung eines ambulanten Pflegedienstes ein.</div>

                    <div class="online-rechner-page2-section3-input-div" style="margin-bottom: 1rem; display: flex;">
                        <label style="margin-right: 1rem;margin-top:10.5px"
                            class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">Pflegegrad</label>
                        <select name="pflegegrad" id="pflegegrad" style="width: 100px;">
                            <option value="1"  {{ old('pflegegrad') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2"  {{ old('pflegegrad') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3"  {{ old('pflegegrad') == '3' ? 'selected' : '' }}>3</option>
                            <option value="4"  {{ old('pflegegrad') == '4' ? 'selected' : '' }}>4</option>
                            <option value="5"  {{ old('pflegegrad') == '5' ? 'selected' : '' }}>5</option>
                        </select>
                    </div>

                    <label id="pflegegeldtext" class="online-rechner-page2-section3-heading" for="online-rechner-input1"
                        style="font-weight: normal!important"></label>

                    <div id="pflegegeldDescription" class="online-rechner-section3-form-sub-heading ">

                    </div>


                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                        <label style="margin-top: -0.67rem;"
                            class="online-rechner-page2-section3-heading input-margin-top" for="online-rechner-input1"
                            id="ambulantmaxtext">Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 131
                            EUR)</label>
                        <input type="number" onkeypress="return onlyNumberKey(event)" class="ambulants" id="ambulant2"
                            value="{{old('ambulant', 0)}}" style="width: 50%;" name="ambulant" />
                    </div>

            </form>
            <div style="display: flex; justify-content: center;"><button id="submit2"
                    class="online-rechner-page2-section3-btn"
                    style="background-color: {{$bgcolor2;}}">Pflegegeld berechnen</button></div>
        </div>


        <!-- ######################## Online Rechner Section 3 bottom ######################## -->
        <div class="online-rechner-section3-bottom">
            {{-- <div class="online-rechner-section3-bottom-heading">Ergebnis</div> --}}
            <div class="online-rechner-section3-heading-bottom">
                <div>Ergebnis</div>
            </div>

            <div
                class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2 online-rechner-section3-inner-bottom22" style="background-color:{{$bgcolor2;}};">

                <div style="padding-top: 0; color: white; font-weight: 600;">
                    <span class="span1" title="<?php echo $pflegegeldanspruchtext; ?>" rel="tooltip">Pflegegeldanspruch</span>
                    <span class="span2" title="<?php echo $teilstattext; ?>" rel="tooltip">Anspruch teilstationäre
                        Pflege</span>
                    <span class="span3" title="<?php echo $vollstattext; ?>" rel="tooltip">Anspruch vollstationäre
                        Pflege</span>
                </div>
                <div>
                    <span id="pflegegeldanspruchtext" class="span1">
                        {{ session('pflegegrad') ? number_format(session('pflegegrad'), 2, ',', '.') : '0,00' }} EUR
                    </span>

                    <span id="teilstattext" class="span2">
                        {{ session('teilstat') ? number_format(session('teilstat'), 2, ',', '.') : '0,00' }} EUR

                    </span>
                    <span id="vollstattext" class="span3">
                        {{ session('vollstat') ? number_format(session('vollstat'), 2, ',', '.') : '0,00' }} EUR

                    </span>
                </div>
            </div>
            {{-- <div style="display: flex; justify-content: center; margin-top: 1rem;"> <button
                    class="online-rechner-page2-section3-btn"
                    style="border: none;background-color: #000000; width: 200px;">Zurück</button></div> --}}
        </div>
    </div>
    </div>





    <script>
        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }

        var pflegegradoutput, pflegegradDescription, ambulantmaxtext;
        var pflegegrad = $('select#pflegegrad').val();
        if (pflegegrad == 1) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 1</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 131 EUR der Kosten durch die Pflegekasse ersetzt.<br />Denn für Pflegegrad 1 gewährt die Pflegekasse den Entlastungsbetrag gemäß § 45b in Höhe von monatlich 131 Euro ausnahmsweise auch für die Sachleistung durch den Pflegedienst (Grundpflege). Zudem stehen Pflege­bedürftigen mit Pflegegrad 1 zwei kostenlose Pflegeberatungsbesuche pro Jahr zu.";
            pflegegradDescription = '';
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 131 EUR)";
            document.getElementById('ambulant2').max = 131;
        } else if (pflegegrad == 2) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 2</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 796 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 347 EUR. Wird z.B die maximale Kassenleistung in Höhe von 796 EUR durch den Pflegedienst zu 60% (= 477,60 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 347 EUR (= 138,80 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 796 EUR)";
            document.getElementById('ambulant2').max = 796;
        } else if (pflegegrad == 3) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 3</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 1.497 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 599 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.497 EUR durch den Pflegedienst zu 60% (= 898,20 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 599 EUR (= 239,60 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.497 EUR)";
            document.getElementById('ambulant2').max = 1497;
        } else if (pflegegrad == 4) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 4</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 1.859 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 800 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.859 EUR durch den Pflegedienst zu 60% (= 1.115,40 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 800 EUR (= 320,00 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.859 EUR)";
            document.getElementById('ambulant2').max = 1859;
        } else if (pflegegrad == 5) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 5</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 2.299 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 990 EUR. Wird z.B die maximale Kassenleistung in Höhe von 2.299 EUR durch den Pflegedienst zu 60% (= 1.379,40 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 990 EUR (= 396,00 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 2.299 EUR)";
            document.getElementById('ambulant2').max = 2299;
        }
        $("#pflegegeldtext").html(pflegegradoutput);
        $("#ambulantmaxtext").html(ambulantmaxtext);

        $('body').on('change', '#pflegegrad', function() {
            var pflegegrad = $('select#pflegegrad').val();
            if (pflegegrad == 1) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 1</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 125 EUR der Kosten durch die Pflegekasse ersetzt.<br />Denn für Pflegegrad 1 gewährt die Pflegekasse den Entlastungsbetrag gemäß § 45b in Höhe von monatlich 131 Euro ausnahmsweise auch für die Sachleistung durch den Pflegedienst (Grundpflege). Zudem stehen Pflegebedürftigen mit Pflegegrad 1 zwei kostenlose Pflegeberatungsbesuche pro Jahr zu.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 131 EUR)";
                document.getElementById('ambulant2').max = 131;
            } else if (pflegegrad == 2) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 2</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 796 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 347 EUR. Wird z.B die maximale Kassenleistung in Höhe von 796 EUR durch den Pflegedienst zu 60% (= 477,60 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 347 EUR (= 138,80 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 796 EUR)";
                document.getElementById('ambulant2').max = 796;
            } else if (pflegegrad == 3) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 3</strong><br />Sie können einen häuslichen Pflege­dienst in Anspruch nehmen und bekommen monatlich bis zu 1.497 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 599 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.497 EUR durch den Pflegedienst zu 60% (= 898,20 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 599 EUR (= 239,60 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.497 EUR)";
                document.getElementById('ambulant2').max = 1497;
            } else if (pflegegrad == 4) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 4</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 1.859 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 800 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.859 EUR durch den Pflegedienst zu 60% (= 1.115,40 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 800 EUR (= 320,00 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.859 EUR)";
                document.getElementById('ambulant2').max = 1859;
            } else if (pflegegrad == 5) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 5</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 2.299 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 990 EUR. Wird z.B die maximale Kassenleistung in Höhe von 2.299 EUR durch den Pflegedienst zu 60% (= 1.379,40 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 990 EUR (= 396,00 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 2.299 EUR)";
                document.getElementById('ambulant2').max = 2299;
            }
            $("#pflegegeldtext").html(pflegegradoutput);
            $("#ambulantmaxtext").html(ambulantmaxtext);
        });
    </script>

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
