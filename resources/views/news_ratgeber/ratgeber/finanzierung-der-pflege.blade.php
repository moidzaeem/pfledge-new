<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="
        background-image: url('{{ asset('assets/Images/Newundrateger_header_bg.svg') }}') !important;
      ">
        @include('components.header.header')
        <div class="service-header-content">
            <span>Aktuelles und praktische Tipps rund um Pflege und Betreuung</span>
            <div>News und Ratgeber</div>
        </div>
    </div>

    <!-- ########################### NEWS UND RATGEBER 2 SECTION 1 ########################### -->

    <div class="newsund-ratgeber-section1">
        <div class="newsund-ratgeber-btn-top">
            <div class="newsund-btn2 newsund-btn">
                <button>
                    <a style="color: #b22222" href="{{ route('achrichten') }}">News</a>
                </button>
            </div>
            <div class="newsund-btn1 newsund-btn">
                <button><a href="{{ route('ratgeber') }}">Ratgeber</a></button>
            </div>
        </div>

        <div class="newsund-ratgeber-btn-bottom">
            <div style="display: flex; gap: 0.7rem">
                <div class="newsund-btn33 newsund-btn">
                    <button>Pflegeleistungen</button>
                </div>
                <div class="newsund-btn44 newsund-btn">
                    <button>
                        <a class="news-und-anchor-tag"
                            href="https://www.bundesgesundheitsministerium.de/themen/pflege/online-ratgeber-pflege.html"
                            target="_blank"></a>Online-Ratgeber Pflege
                    </button>
                </div>
            </div>
            <div class="newsund-btn55 newsund-btn text-center">
                <button>
                    <a class="news-und-anchor-tag"
                        href="https://www.bundesgesundheitsministerium.de/service/publikationen/pflege.html"
                        target="_blank"></a>Publikationen zur Pflege
                </button>
            </div>
        </div>
    </div>

    <!-- ########################### NEWS UND RATGEBER 2 SECTION 2 ########################### -->

    <div class="cover-letter-section1 news-letter-section2 row" style="width: 85%">
        <div class="col-md-6 p-0 d-none d-md-block">
            <img style="
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 20px;
          "
                src="{{ asset('assets/Images/News_und2_section2_img-sm.svg') }}" alt="" />
        </div>

        <div class="col-md-6 p-0 d-block d-md-none">
            <img style="
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 20px;
          "
                src="{{ asset('assets/Images/News_und2_section2_img-sm.svg') }}" alt="" />
        </div>

        <div class="col-md-6 cover-letter-section1-content ps-md-4 ps-0 mt-4 mt-md-0 d-flex align-items-center">
            <div>
                <div class="news-und-rate-section2-heading mb-3">
                    Leistungen der gesetzlichen Pflegeversicherung
                </div>
                Die Finanzierung der Pflege in Deutschland erfolgt in erster Linie
                durch die gesetzliche Pflegeversicherung. Die gesetzliche
                Krankenversicherung (GKV) und die gesetzliche Pflegeversicherung (GPV)
                sind zwar separate Versicherungszweige, aber die Beiträge zur
                Pflegeversicherung werden zusammen mit den Beiträgen zur
                Krankenversicherung erhoben. Hier sind die wichtigsten Leistungen der
                gesetzlichen Pflegeversicherung:
            </div>
        </div>
    </div>

    <!-- ############################# NEWS UND RATGEBER SECTION 3 ########################### -->

    <div class="news-und-section3-container">
        <div class="news-und-section3-cards-container row justify-content-center">

            <div class="col-12 col-md-6 partner-card partner-card1" style="">
                <div class="partner-card-heading">Pflegegeld</div>
                <div class="partner-card-data">
                    Pflegebedürftige, die zu Hause von Angehörigen oder anderen
                    Pflegepersonen gepflegt werden, haben Anspruch auf Pflegegeld. Die
                    Höhe des Pflegegeldes richtet sich nach dem Pflegegrad und der
                    Pflegestufe. Es dient dazu, die Pflegepersonen für ihre
                    Pflegeleistungen zu unterstützen.
                </div>
            </div>
            <div class="partner-card col-12 col-md-6 ">
                <div class="partner-card-heading">Sachleistungen</div>
                <div class="partner-card-data">
                    Pflegebedürftige können sich auch für Sachleistungen entscheiden,
                    anstelle von Pflegegeld. Sachleistungen umfassen Pflegeleistungen,
                    die von professionellen Pflegediensten erbracht werden, wie Hilfe
                    bei der Körperpflege, Unterstützung bei der Mobilität und
                    hauswirtschaftliche Versorgung.
                </div>
            </div>
            <div class="partner-card col-12 col-md-6 ">
                <div class="partner-card-heading">Zuverlässigkeit</div>
                <div class="partner-card-data">
                    Die Pflegeversicherung übernimmt die Kosten für Tages- und
                    Nachtpflegeeinrichtungen, die die pflegebedürftige Person tagsüber
                    oder nachts betreuen.
                </div>
            </div> 
            <div class="partner-card col-12 col-md-6 ">
                <div class="partner-card-heading">Kurzzeitpflege</div>
                <div class="partner-card-data">
                    Kurzzeitpflege bietet eine vorübergehende Unterbringung in
                    Pflegeeinrichtungen, um pflegebedürftige Personen zu entlasten und
                    ihre Angehörigen zu unterstützen. Die Kosten werden von der
                    Pflegeversicherung übernommen.
                </div>
            </div>
            <div class="partner-card partner-card-last col-12 col-md-6 ">
                <div class="partner-card-heading">Verhinderungspflege</div>
                <div class="partner-card-data">
                    Verhinderungspflege ermöglicht es, dass eine Ersatzpflegeperson
                    befristet einspringt, wenn die reguläre Pflegeperson ausfällt oder
                    Urlaub benötigt. Die Kosten werden von der Pflegeversicherung
                    getragen.
                </div>
            </div>
            <div class="partner-card partner-card-last col-12 col-md-6 ">
                <div class="partner-card-heading">Pflegehilfsmittel und -geräte:</div>
                <div class="partner-card-data">
                    Die Pflegeversicherung kann die Kosten für Pflegehilfsmittel und
                    -geräte, wie Rollstühle, Pflegebetten und Inkontinenzhilfsmittel,
                    übernehmen.
                </div>
            </div>
        </div>
        <div class="new-und-section3-bottom">
            Die genaue Höhe der Leistungen hängt von der Einstufung in einen
            Pflegegrad ab. Die Pflegegrade reichen von 1 (geringe Beeinträchtigung)
            bis 5 (schwerste Beeinträchtigung). Die Leistungen können durch
            zusätzliche Pflegeversicherungspolicen (Pflegezusatzversicherungen)
            ergänzt werden, um eventuelle Finanzierungslücken zu schließen.<br /><br />Es
            ist wichtig zu beachten, dass die Leistungen der gesetzlichen
            Pflegeversicherung in Deutschland in den letzten Jahren erweitert und
            angepasst wurden, um den steigenden Bedarf an Pflege und Betreuung zu
            decken. Die genauen Leistungen können sich daher ändern. Bei Fragen zur
            Pflege und Pflegefinanzierung ist es ratsam, sich an die zuständige
            Pflegekasse oder Pflegeberater zu wenden.
        </div>
    </div>

    <!-- ############################# NEWS UND RATGEBER SECTION 4 ########################### -->

    <div class="news-und-section4">
        <div class="news-und-section5-list" style="background-color: #000000; color: #ffffff; margin-bottom: 1rem">
            <div class="section5-list-left">Leistungen 2025</div>
            <div class="section5-list-right">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
            </div>
        </div>

        <div class="news-und-section5-list">
            <div class="section5-list-left">Pflegeberatung (§ 7a SGB XI)</div>

            <div class="section5-list-right">
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
        <div class="news-und-section5-list">
            <div class="section5-list-left">
                Beratung zu Hause (§ 37 Abs. 3 SGB XI)
            </div>

            <div class="section5-list-right">
                <div><i class="fa-solid fa-check"></i></div>
                <div>halbj.</div>
                <div>halbj.</div>
                <div>viertelj.</div>
                <div>viertelj.</div>
            </div>
        </div>
        <div class="news-und-section5-list">
            <div class="section5-list-left">Pflegekurse (§ 45 SGB XI)</div>
            <div class="section5-list-right">
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #f8fce2">
            <div class="section5-list-left">
                Pflegesachleistung (§ 36 SGB XI) mtl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img1"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img1"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## OVERLAY SHADOW  ######################## -->
            <div class="news-popup-overlay"></div>
            <!-- ######################## POPUP 1 ######################## -->
            <div class="news-info-popup news-info-popup1">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 2. Pflegesachleistung (§ 36) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Bei der Pflege zu Hause stehen Pflegebedürftigen ambulante
                    Pflegesachleistungen zu. Das bedeutet: Pflegebedürftige können die
                    Hilfe eines zugelassenen ambulanten Pflege- oder Betreuungsdienstes
                    oder auch von Einzelpflegekräften in Anspruch nehmen. Bei
                    Einzelpflegekräften handelt es sich um selbstständige Pflegekräfte
                    wie Altenpflegerinnen oder Altenpfleger. Die Pflege- und
                    Betreuungsdienste beziehungsweise Einzelpflegekräfte müssen einen
                    Vertrag mit der jeweiligen Pflegekasse abgeschlossen haben. Die
                    Kasse übernimmt die Kosten für ambulante Pflegesachleistungen bis zu
                    einem gesetzlich vorgeschriebenen Höchstbetrag. Welche Kosten sie
                    konkret übernimmt, hängt vom Pflegegrad ab. Mindestvoraussetzung ist
                    Pflegegrad 2.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div>796 €</div>
                <div>1.497 €</div>
                <div>1.859 €</div>
                <div>2.299 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Pflegegeld (§ 37 SGB XI) mtl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img2"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>

            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img2"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 2 ######################## -->
            <div class="news-info-popup news-info-popup2">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 3. Pflegegeld (§ 37) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Pflegebedürftige können sich auch entscheiden, auf die Leistungen
                    der Pflege- oder Betreuungsdienste zu verzichten, wenn Angehörige,
                    Freunde oder ehrenamtlich Tätige sie versorgen. Zu diesem Zweck
                    zahlt die Pflegeversicherung das sogenannte Pflegegeld. <br />
                    <br />
                    Ein Anspruch auf Pflegegeld besteht, wenn beispielsweise Angehörige
                    oder andere ehrenamtlich tätige Personen die häusliche Pflege selbst
                    sicherstellen und mindestens der Pflegegrad 2 vorliegt. Die
                    Pflegekasse überweist das Pflegegeld direkt an den
                    Pflegebedürftigen: Sie oder er kann dann frei darüber verfügen.
                    Häufig geben die Betroffenen das Pflegegeld als Anerkennung an
                    diejenigen weiter, die sie versorgen und betreuen. Das Pflegegeld
                    kann auch mit ambulanten Pflegesachleistungen kombiniert werden (sogenannte Kombinationsleistung aus Geld- und Sachleistung). Die
                    Höhe des Pflegegelds hängt wie die Pflegesachleistungen vom Grad der
                    Pflegebedürftigkeit (Pflegegrad) ab.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div>347 €</div>
                <div>599 €</div>
                <div>800 €</div>
                <div>990 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Tages- und Nachtpflege (§ 41 SGB XI) mtl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img3"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img3"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 3 ######################## -->
            <div class="news-info-popup news-info-popup3">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4a. Tages- und Nachtpflege (§ 41) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Als teilstationäre Versorgung wird die zeitweise Betreuung im
                    Tagesverlauf in einer Pflegeeinrichtung bezeichnet. Teilstationäre
                    Pflege kann als Tages- oder Nachtpflege konzipiert sein. <br />
                    <br />
                    Im Rahmen der Leistungshöchstbeträge übernimmt die Pflegekasse die
                    pflegebedingten Aufwendungen einschließlich der Aufwendungen für
                    Betreuung und die Aufwendungen für die in der Einrichtung
                    notwendigen Leistungen der medizinischen Behandlungspflege. Die
                    Kosten für Unterkunft und Verpflegung sowie gesondert berechenbare
                    Investitionskosten müssen dagegen grundsätzlich privat getragen
                    werden. Gewährt wird teilstationäre Pflege nur, wenn dies im
                    Einzelfall erforderlich ist – entweder weil häusliche Pflege nicht
                    in ausreichendem Umfang sichergestellt werden kann oder wenn dies
                    zur Ergänzung oder Stärkung der häuslichen Pflege erforderlich ist.
                    Die Tagespflege wird in der Regel von Pflegebedürftigen in Anspruch
                    genommen, deren Angehörige tagsüber berufstätig sind. Die
                    Pflegebedürftigen werden meist morgens abgeholt und nachmittags nach
                    Hause zurückgebracht. <br />
                    <br />
                    Die Höhe der Leistung hängt vom Pflegegrad ab. Der Anspruch gilt für
                    Versicherte der Pflegegrade 2 bis 5. Personen des Pflegegrades 1
                    können ihren Entlastungsbetrag einsetzen.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div>721 €</div>
                <div>1.357 €</div>
                <div>1.685 €</div>
                <div>2.085 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Entlastungsbetrag (§ 45b SGB XI) mtl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img4"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img4"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 4 ######################## -->
            <div class="news-info-popup news-info-popup4">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4b. Entlastungsbetrag (§ 45b) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Pflegebedürftige haben bei häuslicher Pflege Anspruch auf einen
                    Entlastungsbetrag in Höhe von bis zu 125 Euro monatlich. Das gilt
                    für Pflegebedürftige aller Pflegegrade, auch bei Pflegegrad 1. Der
                    Entlastungsbetrag ist zweckgebunden und kann verwendet werden zur
                    Entlastung pflegender Angehöriger und anderer nahestehender
                    Menschen, die zur Pflege beitragen, oder zur Förderung der
                    Selbstständigkeit und Selbstbestimmtheit der Pflegebedürftigen im
                    Alltag. <br />
                    <br />
                    Pflegebedürftige haben bei häuslicher Pflege Anspruch auf ein
                    Entlastungsbetrag. Das gilt für alle Pflegegrade. <br />
                    <br />
                    Wenn der Entlastungsbetrag in einem Kalendermonat nicht
                    (vollständig) ausschöpft wird, kann der verbliebene Betrag in die
                    folgenden Kalendermonate übertragen werden. Der Übertrag ist jeweils
                    bis Ende Juni des Folgejahres möglich. <br />
                    <br />
                    Pflegebedürftige können den Entlastungsbetrag für folgende
                    Leistungen verwenden: <br />
                    – Tages- oder Nachtpflege <br />
                    – Kurzzeitpflege <br />
                    – zugelassene Pflegedienste (in den Pflegegraden 2 bis 5 jedoch
                    nicht für Leistungen der Selbstversorgung) <br />
                    – nach Landesrecht anerkannte Angebote zur Unterstützung im Alltag
                    (zum Beispiel Betreuungsgruppen für Demenzerkrankte oder
                    haushaltsnahe Dienstleistungen).
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div>131 €</div>
                <div>131 €</div>
                <div>131 €</div>
                <div>131 €</div>
                <div>131 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                <span class="word-break">Verhinderungspflege (VHP)</span> (§ 39 SGB XI)
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img5"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img5"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 5 ######################## -->
            <div class="news-info-popup news-info-popup5">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4c. Verhinderungspflege (§ 39) jährl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Macht die private Pflegeperson Urlaub, ist sie krank oder kann sich
                    aus anderen Gründen vorübergehend nicht um die oder den
                    Pflegebedürftigen kümmern, greifen die Regelungen der sogenannten
                    Verhinderungspflege. Der Anspruch besteht, nachdem die Pflegeperson
                    den pflegebedürftigen Menschen mindestens sechs Monate in seiner
                    häuslichen Umgebung gepflegt hat. Ist die Pflegeperson nur
                    stundenweise verhindert, etwa aufgrund regelmäßiger Termine, kann
                    die Verhinderungspflege auch stundenweise in Anspruch genommen
                    werden. <br />
                    <br />
                    Für die Verhinderungspflege übernimmt die Pflegeversicherung bei den
                    Pflegegraden 2 bis 5 die Kosten einer notwendigen Ersatzpflege für
                    bis zu sechs Wochen in Höhe bis zu 1.685 Euro je Kalenderjahr.
                    <br /><br />
                    Das sogenannte Entlastungsbudget erleichtert die Finanzierung von
                    Verhinderungspflege und Kurzzeitpflege. Denn statt wie bisher aus
                    getrennten Töpfen, die sich teilweise übertragen lassen, werden
                    beide Pflegeleistungen aus dem gemeinsamen Entlastungsbudget
                    finanziert. <br />
                    Für die Pflegebedürftigen tritt das Entlastungsbudget 
                    zum 01.01.2025 in Kraft und beträgt 3.539 Euro.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div>1.685 €</div>                
                <div>1.685 €</div>
                <div>1.685 €</div>
                <div>1.685 €</div>                                                
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Kurzzeitpflege (§ 42 SGB XI) (KZP) jährl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img6"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img6"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 6 ######################## -->
            <div class="news-info-popup news-info-popup6">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4d. Kurzzeitpflege (§ 42) jährl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Für Pflegebedürftige, die für eine begrenzte Zeit auf vollstationäre
                    Pflege angewiesen sind, gibt es die Kurzzeitpflege. <br />
                    <br />
                    Viele Pflegebedürftige sind nur für eine begrenzte Zeit auf
                    vollstationäre Pflege angewiesen, insbesondere zur Bewältigung von
                    Krisensituationen bei der häuslichen Pflege oder übergangsweise im
                    Anschluss an einen Krankenhausaufenthalt. Für sie gibt es die
                    Kurzzeitpflege in entsprechenden zugelassenen vollstationären
                    Pflegeeinrichtungen. <br />
                    <br />
                    Als Leistung der Pflegeversicherung kann die Kurzzeitpflege ab dem
                    Pflegegrad 2 insbesondere dann in Anspruch genommen werden, wenn die
                    häusliche Pflege zeitweise nicht, noch nicht oder nicht im
                    erforderlichen Umfang erbracht werden kann. <br />
                    <br />
                    Außerdem kann die Kurzzeitpflege auch in stationären Vorsorge- oder
                    Rehabilitationseinrichtungen in Anspruch genommen werden, die keine
                    Zulassung zur pflegerischen Versorgung nach dem Elften Buch
                    Sozialgesetzbuch (SGB XI) haben, wenn die Pflegeperson in dieser
                    Einrichtung oder in der Nähe eine Vorsorge- oder
                    Rehabilitationsmaßnahme in Anspruch nimmt. Damit wird es pflegenden
                    Angehörigen erleichtert, an einer Vorsorge- oder
                    Rehabilitationsmaßnahme teilzunehmen. <br />
                    <br />
                    <br />
                    Das sogenannte Entlastungsbudget erleichtert die Finanzierung von
                    Verhinderungspflege und Kurzzeitpflege. Denn statt wie bisher aus
                    getrennten Töpfen, die sich teilweise übertragen lassen, werden
                    beide Pflegeleistungen aus dem gemeinsamen Entlastungsbudget
                    finanziert. <br />
                    Für die Pflegebedürftigen tritt das Entlastungsbudget 
                    zum 01.01.2025 in Kraft und beträgt 3.539 Euro.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div>1.854 €</div>
                <div>1.854 €</div>
                <div>1.854 €</div>
                <div>1.854 €</div>                                                
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Entlastungsbudget (§ 39 SGB XI) jährl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img7"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img7"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 7 ######################## -->
            <div class="news-info-popup news-info-popup7">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4c. Verhinderungspflege (§ 39) jährl.
                    inkl. Aufstockung Kurzzeitpflege
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Das sogenannte Entlastungsbudget erleichtert die Finanzierung von
                    Verhinderungspflege und Kurzzeitpflege. Denn statt wie bisher aus
                    getrennten Töpfen, die sich teilweise übertragen lassen, werden
                    beide Pflegeleistungen aus dem gemeinsamen Entlastungsbudget
                    finanziert. <br />
                    Für die Pflegebedürftigen tritt das Entlastungsbudget 
                    zum 01.01.2025 in Kraft und beträgt 3.539 Euro.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div>3.539 €</div>
                <div>3.539 €</div>
                <div>3.539 €</div>
                <div>3.539 €</div>                                                
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Zusätzliche Leistung in ambulant betreutet Wohngruppen (§ 38a SGB XI)
                mtl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img8"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img8"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 8 ######################## -->
            <div class="news-info-popup news-info-popup8">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4g. Zusätzliche Leistung in ambulant
                    betreutet Wohngruppen (§ 38a) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Wird der Pflegebedürftige in einer ambulant betreuten Wohngruppe wie
                    einer Senioren-WG versorgt, so zahlt die Pflegekasse für bis zu vier
                    Bewohner einen Einrichtungszuschuss von einmalig jeweils 2.500 Euro
                    (Höchstförderung pro WG: 10.000 Euro). <br />
                    <br />
                    Zusätzlich können ebenfalls höchstens vier Bewohner monatlich je 214
                    Euro Zuschuss zur Beschäftigung einer gemeinsamen Organisationskraft
                    sowie einmalig jeweils 4.000 Euro für den barrierefreien Umbau ihrer
                    Wohnung (Höchstförderung pro WG: 16.000 Euro) beanspruchen.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div>224 €</div>
                <div>224 €</div>
                <div>224 €</div>
                <div>224 €</div>
                <div>224 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Hausnotruf (§ 40 Abs. 1 SGB XI) mtl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img9"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img9"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 9 ######################## -->
            <div class="news-info-popup news-info-popup9">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4h. Pflegehilfsmittel (§ 40, Abs. 2) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Pflegebedürftige der Pflegegrade 1 bis 5, die zu Hause gepflegt
                    werden, haben auch Anspruch auf sogenannte Pflegehilfsmittel. Dabei
                    handelt es sich um Geräte und Sachmittel, die die häusliche Pflege
                    erleichtern, die Beschwerden der Pflegebedürftigen lindern oder
                    ihnen eine selbstständigere Lebensführung ermöglichen. <br />
                    <br />
                    Zuständig dafür ist die Pflegeversicherung, falls nicht andere
                    Leistungsträger wie zum Beispiel die Krankenversicherung die Kosten
                    tragen müssen. Dies kann beispielsweise der Fall sein, wenn eine
                    Krankheit oder Behinderung bestimmte Hilfsmittel erforderlich macht.
                    Dann ist die Pflegekasse nicht die richtige Anlaufstelle. <br />
                    <br />
                    Zum Verbrauch bestimmte Pflegehilfsmittel sind zum Beispiel
                    Einmalhandschuhe oder Betteinlagen. Hier erstattet die Pflegekasse
                    bis zu 40 Euro pro Monat.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div>25,50 €</div>
                <div>25,50 €</div>
                <div>25,50 €</div>
                <div>25,50 €</div>
                <div>25,50 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Pflegehilfsmittel zum Verbrauch (§ 40 SGB XI) mtl.
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img10"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img10"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 10 ######################## -->
            <div class="news-info-popup news-info-popup10">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4h. Pflegehilfsmittel (§ 40, Abs. 2) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Pflegebedürftige der Pflegegrade 1 bis 5, die zu Hause gepflegt
                    werden, haben auch Anspruch auf sogenannte Pflegehilfsmittel. Dabei
                    handelt es sich um Geräte und Sachmittel, die die häusliche Pflege
                    erleichtern, die Beschwerden der Pflegebedürftigen lindern oder
                    ihnen eine selbstständigere Lebensführung ermöglichen. <br />
                    <br />
                    Zuständig dafür ist die Pflegeversicherung, falls nicht andere
                    Leistungsträger wie zum Beispiel die Krankenversicherung die Kosten
                    tragen müssen. Dies kann beispielsweise der Fall sein, wenn eine
                    Krankheit oder Behinderung bestimmte Hilfsmittel erforderlich macht.
                    Dann ist die Pflegekasse nicht die richtige Anlaufstelle. <br />
                    <br />
                    Zum Verbrauch bestimmte Pflegehilfsmittel sind zum Beispiel
                    Einmalhandschuhe oder Betteinlagen. Hier erstattet die Pflegekasse
                    bis zu 40 Euro pro Monat
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div>42 €</div>
                <div>42 €</div>
                <div>42 €</div>
                <div>42 €</div>
                <div>42 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Digitale Pflegeanwendungen DiPA (§ 40a, § 40b, § 39a SGB XI) mtl.
            </div>
            <div class="section5-list-right">
                <div>53 €</div>
                <div>53 €</div>
                <div>53 €</div>
                <div>53 €</div>
                <div>53 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                Technische Pflegehilfsmittel (§ 40 Abs. 3 SGB XI)
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img11"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img11"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 11 ######################## -->
            <div class="news-info-popup news-info-popup11">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4j. Technische Pflegehilfsmittel
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Pflegebedürftige der Pflegegrade 1 bis 5, die zu Hause gepflegt
                    werden, haben auch Anspruch auf sogenannte Pflegehilfsmittel. Dabei
                    handelt es sich um Geräte und Sachmittel, die die häusliche Pflege
                    erleichtern, die Beschwerden der Pflegebedürftigen lindern oder
                    ihnen eine selbstständigere Lebensführung ermöglichen. <br />
                    <br />
                    Zuständig dafür ist die Pflegeversicherung, falls nicht andere
                    Leistungsträger wie zum Beispiel die Krankenversicherung die Kosten
                    tragen müssen. Dies kann beispielsweise der Fall sein, wenn eine
                    Krankheit oder Behinderung bestimmte Hilfsmittel erforderlich macht.
                    Dann ist die Pflegekasse nicht die richtige Anlaufstelle. <br />
                    <br />
                    Die Pflegeversicherung unterscheidet zwischen technischen
                    Pflegehilfsmitteln und zum Verbrauch bestimmten Pflegehilfsmitteln.
                    Zu den technischen Pflegehilfsmitteln zählen unter anderem
                    Pflegebetten, Lagerungshilfen oder Notrufsysteme. Hier müssen
                    Pflegebedürftige ab dem 18. Lebensjahr einen Eigenanteil von 10
                    Prozent bezahlen, aber höchstens 25 Euro je Hilfsmittel. Größere
                    technische Pflegehilfsmittel kann man oft mieten. Eine Zuzahlung
                    entfällt dann.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #ebf8e9">
            <div class="section5-list-left">
                <span class="word-break">Wohnumfeldverbessernde</span> Maßnahmen (§ 40
                Abs. 4 SGB XI) je Maßnahme
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img12"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img12"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 12 ######################## -->
            <div class="news-info-popup news-info-popup12">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 4k. Wohnumfeldverbessernde Maßnahmen (§
                    40, Abs. 4) je Maßnahme
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Pflegebedürftige der Pflegegrade 1 bis 5 können einen Zuschuss von
                    bis zu 4.180 Euro für notwendige Veränderungen ihrer Wohnung bei der
                    Pflegekasse beantragen. Die Anpassungsmaßnahmen müssen dazu dienen,
                    die häusliche Pflege in der Wohnung zu ermöglichen, zu erleichtern
                    oder eine möglichst selbstständige Lebensführung wiederherzustellen.
                    Sie sollen auch dazu beitragen, dass Pflegekräfte oder pflegende
                    Angehörige nicht überfordert werden. <br />
                    <br />
                    Einen Anspruch auf den Zuschuss haben auch Pflegebedürftige in
                    Pflege-WGs. Bis zu vier pflegebedürftige WG-Mitglieder können je
                    4.180 Euro erhalten, insgesamt sind also bis zu 16.720 Euro möglich.
                    Bei mehr als vier Anspruchsberechtigten wird der Gesamtbetrag
                    anteilig auf die Bewohnerinnen und Bewohner aufgeteilt. <br />
                    <br />
                    Zuschüsse zur Wohnungsanpassung gibt es unter anderem für Maßnahmen,
                    die mit wesentlichen Eingriffen in die Bausubstanz verbunden sind.
                    Dazu zählen etwa Türverbreiterungen, pflegegerechte Badumbauten oder
                    die Installation von Rampen und Treppenliften. Auch der Ein-­ und
                    Umbau von Mobiliar, der für die Pflege erforderlich ist, wird
                    finanziell unterstützt.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div>4.180 €</div>
                <div>4.180 €</div>
                <div>4.180 €</div>
                <div>4.180 €</div>
                <div>4.180 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #e9f4f8">
            <div class="section5-list-left">
                Leistungen zur sozialen Sicherung der Pflegepersonen (§ 44 SGB XI)
            </div>
            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #e9f4f8">
            <div class="section5-list-left">
                Zusätzliche Leistungen bei Pflegezeit und kurzzeitiger
                <span class="word-break">Arbeitsverhinderung</span> (§ 44a SGB XI)
            </div>
            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #f3f3f3">
            <div class="section5-list-left">
                Vollstationäre Pflege (§ 43 SGB XI) mtl. <br />
                + Zuschlag f. Eigenant. 0-12 Monate <br />
                + Zuschlag f. Eigenant. 13-24 Monate <br />
                + Zuschlag f. Eigenant. 25-36 Monate <br />
                + Zuschlag f. Eigenant. ab 37 Monate
                <img class="ms-1 d-none d-md-inline info-circle-img info-circle-img13"
                    src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />
            </div>
            <img class="ms-1 d-block d-md-none info-circle-img info-circle-img13"
                src="{{ asset('assets/Images/News_und_section4_info-circle.svg') }}" alt="" />

            <!-- ######################## POPUP 13 ######################## -->
            <div class="news-info-popup news-info-popup13">
                <div class="popup-top">
                    <i class="fa fa-eye"></i> 6a. Vollstationäre Pflege (§ 43) mtl.
                    <i class="fa-solid fa-circle-xmark close-popup"></i>
                </div>
                <div class="popup-bottom">
                    Die Pflegeversicherung zahlt bei vollstationärer Pflege pauschale
                    Leistungen für pflegebedingte Aufwendungen einschließlich der
                    Aufwendungen für Betreuung und die Aufwendungen für Leistungen der
                    medizinischen Behandlungspflege in Pflegeheimen. <br />
                    <br />
                    Wählen Pflegebedürftige mit Pflegegrad 1 vollstationäre Pflege,
                    gewährt ihnen die Pflegeversicherung einen Zuschuss in Höhe von 131
                    Euro monatlich. <br />
                    <br />
                    Einen guten Überblick über zugelassene Pflegeheime geben zum
                    Beispiel die Leistungs­ und Preisvergleichslisten, die die
                    Pflegekassen auf Anforderung kostenfrei zur Verfügung stellen; sie
                    sind auch im Internet abrufbar. <br />
                    <br />
                    <br />
                    Die Prozentsätze steigen zum 01.01.2024 an: im ersten Jahr: 15
                    Prozent statt bisher 5 Prozent, im zweiten Jahr: 30 Prozent statt
                    bisher 25 Prozent, im dritten Jahr: 50 Prozent statt bisher 45
                    Prozent, ab dem vierten Jahr: 75 Prozent statt bisher 70 Prozent.
                    <br />
                    Die Zuschüsse zum Eigenanteil betreffen weiterhin nur die
                    Pflegekosten und nicht die beiden anderen Kostenpunkte, die in einer
                    stationären Pflegeeinrichtung anfallen.
                </div>
                <button class="news-popup-btn">
                    Schließen <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>

            <div class="section5-list-right">
                <div>
                    131 € <br />
                    15% <br />
                    30% <br />
                    50% <br />
                    75%
                </div>
                <div>
                    805 € <br />
                    15% <br />
                    30% <br />
                    50% <br />
                    75%
                </div>
                <div>
                    1.319 € <br />
                    15% <br />
                    30% <br />
                    50% <br />
                    75%
                </div>
                <div>
                    1.855 € <br />
                    15% <br />
                    30% <br />
                    50% <br />
                    75%
                </div>
                <div>
                    2.096 € <br />
                    15% <br />
                    30% <br />
                    50% <br />
                    75%
                </div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #f3f3f3">
            <div class="section5-list-left">
                Pflege in vollstationären Einrichtungen der Hilfe für behinderte
                Menschen (§ 43a SGB XI) mtl.
            </div>
            <div class="section5-list-right">
                <div style="font-size: 33.5px; font-weight: 700">-</div>
                <div>266 €</div>
                <div>266 €</div>
                <div>266 €</div>
                <div>266 €</div>
            </div>
        </div>
        <div class="news-und-section5-list" style="background-color: #f3f3f3">
            <div class="section5-list-left">
                Zusätzliche Betreuung und Aktivierung in stationären
                Pflegeeinrichtungen (§ 43b SGB XI)
            </div>
            <div class="section5-list-right">
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
                <div><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
    </div>

    <!-- ############################# NEWS UND RATGEBER SECTION 5 ########################### -->

    <div class="news-und-section5">
        <div class="news-und-section5-sub">
            <div class="news-und-section5-heading">
                Leistungen der Krankenversicherung
            </div>
            <div class="news-und-section5-content">
                Die Leistungen der Krankenversicherung umfassen medizinische
                Behandlungspflege (z.B. Medikamentengabe, Wundversorgung), die
                unabhängig vom Pflegegrad nach ärztlicher Verordnung übernommen wird.
                Spezielle Hilfsmittel, die zur Unterstützung der Pflege oder zur
                Verbesserung der Mobilität dienen (z.B. Rollstühle, Gehhilfen), werden
                ebenfalls von der Krankenversicherung abgedeckt, die Kostenübernahme
                hängt von der medizinischen Notwendigkeit und der Genehmigung durch
                die Krankenversicherung ab. <br />
                <div style="margin-top: 0.6rem">
                    Diese Beträge und Leistungen können sich je nach gesetzlichen
                    Änderungen und individuellen Versicherungsbedingungen ändern. Es
                    wird empfohlen, sich für spezifische Informationen und aktuelle
                    Beträge direkt an die zuständige Pflegekasse oder Krankenkasse zu
                    wenden.
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Newundrateger_bottom.svg') }}" alt="" />
    </div>
    @include('components.footer.footer_second')

</body>

</html>
