<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="background-image: url('{{ asset('assets/Images/Academy_page_header_bg.svg') }}') !important">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Online-Kurse für Pflegebedürftige und pflegende Angehörige</span>
            <div>Academy</div>
        </div>
    </div>

    <!-- ######################## ACADEMY PAGE SECTION 1 ######################## -->
    <div class="academy-page-section1-container">
        <div class="row">
            <div class="col-md-6 academy-page-section1-top mb-3 mb-md-0 pe-md-4">
                Die PflegePur-Academy ist Ihr kompetenter Partner in der Weiterbildung
                rund um das Thema Pflege. Unser Angebot richtet sich an
                pflegebedürftige Personen, pflegende Angehörige und professionelle
                Pflegekräfte. In unseren Online-Kursen vermitteln wir praxisnahes
                Wissen, das Sie in Ihrem Alltag unterstützt, um bestmögliche Pflege zu
                gewährleisten. Wir bieten Ihnen eine Vielzahl an Themen, von der
                grundsätzlichen Pflege bis hin zu spezialisierten Bereichen wie der
                Pflege von Menschen mit Demenz, der Palliativpflege und der Pflege von
                Menschen mit speziellen Krankheitsbildern.
            </div>
            <div class="col-md-6 academy-page-section1-top ps-md-4">
                Unsere Kurse sind flexibel und lassen sich bequem in Ihren Alltag
                integrieren. Sie lernen in Ihrem eigenen Tempo und haben jederzeit
                Zugriff auf umfassendes Lehrmaterial, das von erfahrenen
                Pflegefachkräften und Experten erstellt wurde. So stellen wir sicher,
                dass Sie stets auf dem neuesten Stand der pflegerischen Entwicklungen
                bleiben. <br /><br />Mit der PflegePur-Academy möchten wir nicht nur
                Wissen vermitteln, sondern auch eine starke Gemeinschaft schaffen.
                Denn der Austausch unter Gleichgesinnten und die Möglichkeit, Fragen
                an Experten zu stellen, machen den Lernprozess noch effektiver und
                unterstützen Sie dabei, Pflege mit Herz und Verstand auszuüben.
            </div>
            <div class="col-12 academy-page-section1-bottom">
                Entdecken Sie unser vielfältiges Kursangebot und profitieren Sie von
                fundiertem Fachwissen und praktischen Tipps für Ihren Pflegealltag!
            </div>
        </div>
    </div>


<!-- TEST BEGINN -->



    <div class="checklisten-section2-bottom-btn-container" id="checklisten-bottom-container1">
        <button class="checklisten-section2-bottom-btn11 check-bottom-btns check-active-btn"
            id="checklisten-bottom-btn11">
            curendo&#174; - Pflegekurse
        </button>
        <button class="checklisten-section2-bottom-btn12 check-bottom-btns" id="checklisten-bottom-btn12">
            Pflege ABC - Pflegekurse
        </button>        
<!--        <button class="checklisten-section2-bottom-btn13 check-bottom-btns" id="checklisten-bottom-btn13">
            PflegePur - Pflegekurse            
        </button>
-->        
    </div>


    <form action="" class="check-listen-forms" id="medi-form1">
    <div class="row bucher-card-container" style="width: 90% !important">
    
    
            <div class="row" style="height: 100%">
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 20px; width: 100%; object-fit: cover"
                        src="{{ asset('assets/Images/academy.webp') }}" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Gemeinsam stark</span>
                    <div class="section1-top2 text-start">
                        PflegePur und curendo® erleichtern den Pflegealltag
                    </div>
                    <div class="section1-top4">
In Deutschland leben rund. 5,6 Millionen pflegebedürftige Menschen. Davon werden mehr als zwei Drittel zu Hause versorgt.<br /><br />
Pflegende Angehörige und Ehrenamtliche können sich jetzt online auf die Pflege im häuslichen Umfeld vorbereiten:<br />
In den interaktiven Pflegekursen von curendo werden grundlegende Pflegekenntnisse online, sofort und leicht zugänglich zur Verfügung gestellt.<br /><br />
<strong>Vorteile:</strong>
<ul>
<li>freie Zeiteinteilung und Themenwahl</li>
<li>jederzeit abrufbar für 6 Monate</li>
<li>unbegrenzte Wiederholung möglich</li>
<li>Experten geben online persönliche Tipps rund um die Pflege</li>
<li>interaktive, spielerische Anwendungen und Übungsaufgaben</li>
<li>für PC, Tablet und Smartphone</li>
</ul> 
 
                    </div>
                    <div>
                                    <button class="blog-card-btn mb-5"><a href="https://pflege.curendo.de/partner/pflegepur" target="_blank" style="text-decoration: none;color:#ffffff;">Zur kostenlosen Teilnahme</a></button>                                                                            
                    </div>
                </div>
            </div>                

<!--    
             <div class="col-lg-12 mt-3">
                <div class="row" id="marketplace-items">
                        <div class="col-lg-4 marketplace-item">
                            <div class="blog-card" style="width: 94%;">
                                <a style="text-decoration: none" href="https://pflege.curendo.de/kurs-haeusliche-pflege" target="_blank">
                                    <div class="blog-card-img">
                                        <img src="{{ asset('https://pflege.curendo.de/core/img/drawing_carecourse_basic.svg') }}" alt="Image 4" style="height:500px;" />
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-card-heading">
                                            Grundlagen der häuslichen Pflege
                                        </div>
                                        <div class="blog-card-sub-heading">
Die wichtigsten Pflegethemen in einem Kurs: Finanzielle Unterstützung und Pflegeleistungen, Bewegungsabläufe in der Pflege, Essen und Trinken in der Pflege, Körper- und Mundpflege, Folgeerkrankungen erkennen und vorbeugen, Selbstsorge – Be- und Entlastung
                                        </div>
                                    </div>

                                    <button class="blog-card-btn mb-5" style="text-decoration: none"><a href="https://pflege.curendo.de/kurs-haeusliche-pflege" target="_blank" style="text-decoration: none;color:#ffffff;">Weiterlesen</a></button>
                                </a>
                            </div>
                        </div>
</div>
</div>
-->

</div>  
</form>

    <form action="" class="check-listen-forms" id="medi-form2">
    <div class="row bucher-card-container" style="width: 90% !important">
    
    
            <div class="row" style="height: 100%">
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 20px; width: 80%; object-fit: cover"
                        src="{{ asset('assets/Images/pflegeabc.png') }}" style="border:0px;" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Pflege ABC</span>
                    <div class="section1-top2 text-start">
                        Ihr Begleiter für die häusliche Pflege!
                    </div>
                    <div class="section1-top4">
Sie möchten Ihre Angehörigen zu Hause bestmöglich versorgen? Mit den jederzeit abrufbaren Videos vom <strong>Pflege ABC</strong> erlernen Sie praxisnahe Pflegetechniken und wertvolles Fachwissen – einfach, verständlich und flexibel von zu Hause aus.
<br /><br />
Unsere Kurse decken alle wichtigen Themen ab: von grundlegenden Pflegemaßnahmen über Demenzbetreuung bis hin zur sicheren Medikamentengabe, rechtlichen Grundlagen und Hilfen für die Pflegenden selbst. Erfahrene Experten aus Pflege, Medizin, Recht und Psychologie begleiten Sie mit leicht verständlichen Videos auf dem Weg zur Pflegeexpertin oder zum Pflegeexperten in den eigenen vier Wänden.
<br /><br />  
<strong>Das Beste daran: Die Kosten für gesetzlich Versicherte übernimmt die Pflegekasse – für Sie ist alles komplett kostenlos!</strong>
<br /><br />
Starten Sie jetzt und schenken Sie sich und Ihren Liebsten mehr Sicherheit und Vertrauen in der häuslichen Pflege!

 
                    </div>
                    

                    

                    
                    

                    <div>
                                    <button class="blog-card-btn mb-5" style="text-decoration: none"><a href="#pflegeabcformular" style="text-decoration: none;color:#ffffff;">Zur kostenlosen Teilnahme</a></button>                                        
                    </div>

                </div>
                
                

                
                
                
                <div class="section1-right col-md-5 mb-4 mb-md-0" style="margin-top:50px;text-align:center;">
<!--                     <img style="border-radius: 20px; width: 80%; object-fit: cover"
                        src="{{ asset('assets/Images/Johannes-Pflege-ABC.png') }}" style="border:0px;" alt="" /> -->                
<iframe width="350" height="196" src="https://www.youtube-nocookie.com/embed/f71AYWXEuDI?si=oaUIMqpLi_3oiWfX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        <div class="blog-card-sub-heading" style="text-align:center;"><strong>Ihr Pflege ABC</strong></div>
<iframe style="margin-top:50px;" width="350" height="196" src="https://www.youtube-nocookie.com/embed/zF2qNwGOwl0?si=56OBLJ8HxbhjLc8F" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        <div class="blog-card-sub-heading" style="text-align:center;"><strong>Trailer Basiswissen für pflegende Angehörige</strong></div>
<iframe style="margin-top:50px;" width="350" height="196" src="https://www.youtube-nocookie.com/embed/Ofsvzwb5380?si=W0pHknjcK16TZ25u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                                                                <div class="blog-card-sub-heading" style="text-align:center;"><strong>Einführung in das Thema Demenz</strong></div>
                </div>                
                <div class="section1-left col-md-7" id="pflegeabcformular">
<iframe
      id="JotFormIFrame-250293729711358"
      title="Registrierung PflegePur -> PflegeABC"
      onload="window.parent.scrollTo(0,0)"
      allowtransparency="true"
      allow="geolocation; microphone; camera; fullscreen"
      src="https://form.jotform.com/250293729711358"
      frameborder="0"
      style="min-width:100%;max-width:100%;height:539px;border:none;margin-bottom:150px;"
      scrolling="no"
    >
    </iframe>
        <script src='https://cdn.jotfor.ms/s/umd/latest/for-form-embed-handler.js'></script>
    <script>window.jotformEmbedHandler("iframe[id='JotFormIFrame-250293729711358']", "https://form.jotform.com/")</script>
                
                </div>                
            </div>
    
    
    
    
<!--    
            <div class="col-lg-12 mt-3">
                <div class="row" id="marketplace-items">
                        <div class="col-lg-4 marketplace-item">
                            <div class="blog-card" style="width: 94%;">
                                <a style="text-decoration: none" href="" target="_blank">
                                    <div class="blog-card-img">
                                        <img src="{{ asset('') }}" alt="Image 4" style="height:500px;" />
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-card-heading">
                                            Grundlagen der häuslichen Pflege
                                        </div>
                                        <div class="blog-card-sub-heading">
Die wichtigsten Pflegethemen in einem Kurs: Finanzielle Unterstützung und Pflegeleistungen, Bewegungsabläufe in der Pflege, Essen und Trinken in der Pflege, Körper- und Mundpflege, Folgeerkrankungen erkennen und vorbeugen, Selbstsorge – Be- und Entlastung
                                        </div>
                                    </div>

                                    <button class="blog-card-btn mb-5" style="text-decoration: none"><a href="https://pflege.curendo.de/kurs-haeusliche-pflege" target="_blank" style="text-decoration: none;color:#ffffff;">Weiterlesen</a></button>
                                </a>
                            </div>
                        </div>
</div>
</div>-->


</div>  
</form>

<!--
    <form action="" class="check-listen-forms" id="medi-form3">
    
    
    <div class="row bucher-card-container" style="width: 90% !important">
        <div class="academy-cards">    
            <div class="col-lg-12 mt-3">
                <div class="row" id="marketplace-items">
                        <div class="col-lg-4 marketplace-item">
                            <div class="blog-card" style="width: 94%;">
                                <a style="text-decoration: none" href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-demenz-verstehen-unterstuetzung-und-pflege-d1b95913" target="_blank">
                                    <div class="blog-card-img">
                                        <img src="{{ asset('assets/Images/Academy_page_slider2.svg') }}" alt="Image 2" style="height:500px;" />
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-card-heading">
                                            Pflegende Angehörige: Selbstfürsorge und Stressbewältigung
                                        </div>
                                        <div class="blog-card-sub-heading">
Selbstfürsorge ist ein entscheidender Aspekt für pflegende Angehörige, der oft vernachlässigt wird. In diesem Abschnitt möchten wir Ihnen die Gründe aufzeigen, warum Selbstfürsorge nicht nur für Ihre eigene Gesundheit und Ihr Wohlbefinden wichtig ist, sondern auch für die Qualität der Pflege, die Sie Ihrem Angehörigen bieten können.
                                        </div>
                                    </div>

                                    <button class="blog-card-btn mb-5"><a href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-demenz-verstehen-unterstuetzung-und-pflege-d1b95913" target="_blank" style="text-decoration: none;color:#ffffff;">Weiterlesen</a></button>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 marketplace-item">
                            <div class="blog-card" style="width: 94%;">
                                <a style="text-decoration: none" href="https://pflegepur.my-ablefy.com/s/pflegepur/pflege-zu-hause-grundlagen-und-tipps-736e9710" target="_blank">
                                    <div class="blog-card-img">
                                        <img src="{{ asset('assets/Images/Academy_page_slider1.svg') }}" alt="Image 1" style="height:500px;" />
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-card-heading">
                                            Pflege zu Hause: Grundlagen und Tipps
                                        </div>
                                        <div class="blog-card-sub-heading">
Die wichtigsten Pflegethemen in einem Kurs: Finanzielle Unterstützung und Pflegeleistungen, Bewegungsabläufe in der Pflege, Essen und Trinken in der Pflege, Körper- und Mundpflege, Folgeerkrankungen erkennen und vorbeugen, Selbstsorge – Be- und Entlastung
                                        </div>
                                    </div>

                                    <button class="blog-card-btn mb-5"><a href="https://pflegepur.my-ablefy.com/s/pflegepur/pflege-zu-hause-grundlagen-und-tipps-736e9710" target="_blank" style="text-decoration: none;color:#ffffff;">Weiterlesen</a></button>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 marketplace-item">
                            <div class="blog-card" style="width: 94%;">
                                <a style="text-decoration: none" href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-pflege-zu-hause-grundlagen-und-tipps-13bbb0bb" target="_blank">
                                    <div class="blog-card-img">
                                        <img src="{{ asset('assets/Images/Academy_page_slider3.svg') }}" alt="Image 3" style="height:500px;" />
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-card-heading">
                                            Demenz verstehen: Unterstützung und Pflege
                                        </div>
                                        <div class="blog-card-sub-heading">
                            Demenz ist kein spezifisches Krankheitsbild, sondern ein allgemeiner Begriff, der eine Vielzahl von Symptomen beschreibt, die mit einem Verlust der kognitiven Funktionen – denken, erinnern und schließen – einhergehen, welche stark genug sind, um den Alltag einer Person zu beeinträchtigen. Es ist eine fortschreitende Erkrankung, was bedeutet, dass die Symptome sich mit der Zeit verschlechtern.

                                        </div>
                                    </div>

                                    <button class="blog-card-btn mb-5"><a href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-pflege-zu-hause-grundlagen-und-tipps-13bbb0bb" target="_blank" style="text-decoration: none;color:#ffffff;">Weiterlesen</a></button>
                                </a>
                            </div>
                        </div>
</div>
</div>
</div>  
</div>




    
    </form>
-->
          
        
        
        

    
<!-- curendo - Pflegekurse BEGINN 
    <form action="" class="check-listen-forms" id="medi-form1">
    
    <div class="academy-slider">
        <div class="academy-cards">
       
    
    
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                curendo&#174; - Pflegekurse
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                
            <a style="text-decoration: none" target="_blank"
                href="https://pflege.curendo.de/kurs-haeusliche-pflege">

                <div class="academy-card">
                    <img src="{{ asset('https://pflege.curendo.de/core/img/drawing_carecourse_basic.svg') }}" alt="Image 4" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">curendo&#174; - Pflegekurse</div>
                        <div class="swiper-content-heading">
                            Grundlagen der häuslichen Pflege
                        </div>
                        <div class="swiper-content-data" style="left-align;">
                            Die wichtigsten Pflegethemen in einem Kurs: Finanzielle Unterstützung und Pflegeleistungen, Bewegungsabläufe in der Pflege, Essen und Trinken in der Pflege, Körper- und Mundpflege, Folgeerkrankungen erkennen und vorbeugen, Selbstsorge – Be- und Entlastung
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>                
                
                </div>
        <div class="pagination">
            <span class="academy-dot active" data-index="0"></span>
        </div>                
            </div>
</div>
<!-- 
</div>
        </div>       
    </form>
-->    
<!-- curendo - Pflegekurse ENDE -->    

    <!-- #################### Sonstige Kurse ###################   -->

<!--

    <form action="" class="check-listen-forms" id="medi-form2">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1" style="word-break: break-all">
                Sonstige Kurse
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">

    <div class="academy-slider">
        <div class="academy-cards">
                
            <a style="text-decoration: none"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-demenz-verstehen-unterstuetzung-und-pflege-d1b95913"
                target="_blank">
                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider2.svg') }}" alt="Image 2" style="width:400px;height:400px;"/>
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Pflegende Angehörige:
                            Selbstfürsorge und Stressbewältigung
                        </div>
                        <div class="swiper-content-data">
                            Selbstfürsorge ist ein entscheidender Aspekt für pflegende
                            Angehörige, der oft vernachlässigt wird. In diesem Abschnitt
                            möchten wir Ihnen die Gründe aufzeigen, warum Selbstfürsorge nicht
                            nur für Ihre eigene Gesundheit und Ihr Wohlbefinden wichtig ist,
                            sondern auch für die Qualität der Pflege, die Sie Ihrem
                            Angehörigen bieten können.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>

            
            <a style="text-decoration: none" target="_blank"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/pflege-zu-hause-grundlagen-und-tipps-736e9710">

                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider1.svg') }}" alt="Image 1" style="width:400px;height:400px;" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Pflege zu Hause: Grundlagen
                            und Tipps
                        </div>
                        <div class="swiper-content-data">
                            Häusliche Pflege umfasst die Unterstützung und Betreuung von
                            pflegebedürftigen Personen in ihrem eigenen Zuhause. Dies kann
                            sowohl durch Angehörige als auch durch professionelle Pflegekräfte
                            erfolgen.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>
            <a style="text-decoration: none" target="_blank"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-pflege-zu-hause-grundlagen-und-tipps-13bbb0bb">
                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider3.svg') }}" alt="Image 3" style="width:400px;height:400px;" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Demenz verstehen:
                            Unterstützung und Pflege
                        </div>
                        <div class="swiper-content-data">
                            Demenz ist kein spezifisches Krankheitsbild, sondern ein
                            allgemeiner Begriff, der eine Vielzahl von Symptomen beschreibt,
                            die mit einem Verlust der kognitiven Funktionen – denken, erinnern
                            und schließen – einhergehen, welche stark genug sind, um den
                            Alltag einer Person zu beeinträchtigen. Es ist eine
                            fortschreitende Erkrankung, was bedeutet, dass die Symptome sich
                            mit der Zeit verschlechtern.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>
                
                
                </div>
        <div class="pagination">
            <span class="academy-dot" data-index="1"></span>
            <span class="academy-dot" data-index="2"></span>
            <span class="academy-dot" data-index="3"></span>            
        </div>
                
            </div>
</div>
</div>



        </div>
    </form>

<!-- TEST ENDE -->






    <!-- ######################## ACADEMY SLIDER FOR LARGE SCREENS ######################## 

    <div class="academy-slider">
        <div class="academy-cards">
            <a style="text-decoration: none"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-demenz-verstehen-unterstuetzung-und-pflege-d1b95913"
                target="_blank">
                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider2.svg') }}" alt="Image 2" style="width:400px;height:400px;"/>
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Pflegende Angehörige:
                            Selbstfürsorge und Stressbewältigung
                        </div>
                        <div class="swiper-content-data">
                            Selbstfürsorge ist ein entscheidender Aspekt für pflegende
                            Angehörige, der oft vernachlässigt wird. In diesem Abschnitt
                            möchten wir Ihnen die Gründe aufzeigen, warum Selbstfürsorge nicht
                            nur für Ihre eigene Gesundheit und Ihr Wohlbefinden wichtig ist,
                            sondern auch für die Qualität der Pflege, die Sie Ihrem
                            Angehörigen bieten können.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>

            
            <a style="text-decoration: none" target="_blank"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/pflege-zu-hause-grundlagen-und-tipps-736e9710">

                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider1.svg') }}" alt="Image 1" style="width:400px;height:400px;" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Pflege zu Hause: Grundlagen
                            und Tipps
                        </div>
                        <div class="swiper-content-data">
                            Häusliche Pflege umfasst die Unterstützung und Betreuung von
                            pflegebedürftigen Personen in ihrem eigenen Zuhause. Dies kann
                            sowohl durch Angehörige als auch durch professionelle Pflegekräfte
                            erfolgen.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>
            <a style="text-decoration: none" target="_blank"
                href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-pflege-zu-hause-grundlagen-und-tipps-13bbb0bb">
                <div class="academy-card">
                    <img src="{{ asset('assets/Images/Academy_page_slider3.svg') }}" alt="Image 3" style="width:400px;height:400px;" />
                    <div class="swiper-content">
                        <div class="swiper-content-top1">PflegePur - Academy</div>
                        <div class="swiper-content-heading">
                            Demenz verstehen:
                            Unterstützung und Pflege
                        </div>
                        <div class="swiper-content-data">
                            Demenz ist kein spezifisches Krankheitsbild, sondern ein
                            allgemeiner Begriff, der eine Vielzahl von Symptomen beschreibt,
                            die mit einem Verlust der kognitiven Funktionen – denken, erinnern
                            und schließen – einhergehen, welche stark genug sind, um den
                            Alltag einer Person zu beeinträchtigen. Es ist eine
                            fortschreitende Erkrankung, was bedeutet, dass die Symptome sich
                            mit der Zeit verschlechtern.
                        </div>
                        <div class="swiper-content-btn"><button>Kostenlos</button></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="pagination">
            <span class="academy-dot active" data-index="0"></span>
            <span class="academy-dot" data-index="1"></span>
            <span class="academy-dot" data-index="2"></span>            
        </div>
    </div>
    -->

    <!-- ######################## ACADEMY PAGE SLIDER FOR SMALL SCREEN ########################  -->

<!--

    <div class="academy-section-2-sm">
    
    
        <a style="text-decoration: none"
            href="https://pflege.curendo.de/kurs-haeusliche-pflege"
            target="_blank">
            <div class="academy-page-card">
                <img src="{{ asset('https://pflege.curendo.de/core/img/drawing_carecourse_basic.svg') }}" alt="" />
                <div class="swiper-content">
                    <div class="swiper-content-top1">curendo&#174; - Pflegekurse</div>
                    <div class="swiper-content-heading">
                        Grundlagen der häuslichen Pflege
                    </div>
                    <div class="swiper-content-data">
                        Die wichtigsten Pflegethemen in einem Kurs: Finanzielle Unterstützung und Pflegeleistungen, Bewegungsabläufe in der Pflege, Essen und Trinken in der Pflege, Körper- und Mundpflege, Folgeerkrankungen erkennen und vorbeugen, Selbstsorge – Be- und Entlastung
                    </div>
                    <div class="swiper-content-btn"><button>Kostenlos</button></div>
                </div>
            </div>
        </a>
    
    
    
        <a style="text-decoration: none"
            href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-demenz-verstehen-unterstuetzung-und-pflege-d1b95913"
            target="_blank">
            <div class="academy-page-card">
                <img src="{{ asset('assets/Images/Academy_page_slider_1_sm.svg') }}" alt="" />
                <div class="swiper-content">
                    <div class="swiper-content-top1">PflegePur - Academy</div>
                    <div class="swiper-content-heading">
                        Pflegende Angehörige:
                        Selbstfürsorge und Stressbewältigung
                    </div>
                    <div class="swiper-content-data">
                        Selbstfürsorge ist ein entscheidender Aspekt für pflegende
                            Angehörige, der oft vernachlässigt wird. In diesem Abschnitt
                            möchten wir Ihnen die Gründe aufzeigen, warum Selbstfürsorge nicht
                            nur für Ihre eigene Gesundheit und Ihr Wohlbefinden wichtig ist,
                            sondern auch für die Qualität der Pflege, die Sie Ihrem
                            Angehörigen bieten können.
                    </div>
                    <div class="swiper-content-btn"><button>Kostenlos</button></div>
                </div>
            </div>
        </a>
        <a style="text-decoration: none" target="_blank"
            href="https://pflegepur.my-ablefy.com/s/pflegepur/pflege-zu-hause-grundlagen-und-tipps-736e9710">

            <div class="academy-page-card">
                <img src="{{ asset('assets/Images/Academy_page_slider_2_sm.svg') }}" alt="" />
                <div class="swiper-content">
                    <div class="swiper-content-top1">PflegePur - Academy</div>
                    <div class="swiper-content-heading"> Pflege zu Hause: Grundlagen
                            und Tipps</div>
                    <div class="swiper-content-data">
                        Häusliche Pflege umfasst die Unterstützung und Betreuung von
                        pflegebedürftigen Personen in ihrem eigenen Zuhause. Dies kann
                        sowohl durch Angehörige als auch durch professionelle Pflegekräfte
                        erfolgen.
                    </div>
                    <div class="swiper-content-btn"><button>Kostenlos</button></div>
                </div>
            </div>
        </a>
        <a style="text-decoration: none" target="_blank"
            href="https://pflegepur.my-ablefy.com/s/pflegepur/kopie-von-pflege-zu-hause-grundlagen-und-tipps-13bbb0bb">
            <div class="academy-page-card">
                <img src="{{ asset('assets/Images/Academy_page_slider_3_sm.svg') }}" alt="" />
                <div class="swiper-content">
                    <div class="swiper-content-top1">PflegePur - Academy</div>
                    <div class="swiper-content-heading">Demenz verstehen:
                            Unterstützung und Pflege</div>
                    <div class="swiper-content-data">
                        Demenz ist kein spezifisches Krankheitsbild, sondern ein allgemeiner
                        Begriff, der eine Vielzahl von Symptomen beschreibt, die mit einem
                        Verlust der kognitiven Funktionen – denken, erinnern und schließen –
                        einhergehen, welche stark genug sind, um den Alltag einer Person zu
                        beeinträchtigen. Es ist eine fortschreitende Erkrankung, was
                        bedeutet, dass die Symptome sich mit der Zeit verschlechtern.
                    </div>
                    <div class="swiper-content-btn"><button>Kostenlos</button></div>
                </div>
            </div>
        </a>
    </div>

-->

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Academy_page_bottom_img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>



</html>
