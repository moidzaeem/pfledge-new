<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="background-image: url('{{ asset('assets/Images/Musteranschreiben_header_bg.svg') }}') !important">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Ihre zuverlässige Vorlage für formelle Schreiben</span>
            <div>Musteranschreiben</div>
        </div>
    </div>


    <!-- ######################## MUSTERANSCHREIBEN SECTION 1 ######################## -->
    <div class="cover-letter-section1 row">
        <div class="col-md-6 p-0 d-none d-md-block">
            <img style="
              object-fit: cover;
              width: 100%;
              height: 100%;
              border-radius: 20px;
            "
                src="{{ asset('assets/Images/Musteranschreiben_section1_img.svg') }}" alt="" />
        </div>

        <div class="col-md-6 p-0 d-block d-md-none">
            <img style="
              object-fit: cover;
              width: 100%;
              height: 100%;
              border-radius: 20px;
            "
                src="{{ asset('assets/Images/Musteranschreiben_section1_img_sm.svg') }}" alt="" />
        </div>

        <div class="col-md-6 cover-letter-section1-content ps-md-4 ps-0 mt-4 mt-md-0 d-flex align-items-center">
            Hier finden Sie praktische Musteranschreiben, die Pflegebedürftigen und
            pflegenden Angehörigen als wertvolle Hilfestellung dienen. Ob Sie ein
            Schreiben an die Pflegekasse, den Arbeitgeber oder andere wichtige
            Stellen verfassen müssen – unsere Vorlagen bieten Ihnen eine solide
            Grundlage. Sie sind so gestaltet, dass Sie sie einfach an Ihre
            individuellen Bedürfnisse anpassen können, um Ihre Anliegen klar und
            professionell zu kommunizieren. Sparen Sie Zeit und Nerven mit unseren
            bewährten Musteranschreiben. Klicken Sie den entsprechenden Button zum
            Aufruf des gewünschten Musteranschreibens.
        </div>
    </div>

    <!-- ######################## MUSTERANSCHREIBEN SECTION 2 ######################## -->

    <div class="cover-letter-buttons">
        <div class="cover-letter-top-buttons">
            <button class="cover-letter-top-btn1 cover-letter-top-btn active-btn1" id="cover-letter-top-btn1">
                <a href="{{ route('musteranschreiben') }}"></a>FÜR PFLEGEBEDÜRFTIGE
            </button>
            <button class="cover-letter-top-btn2 cover-letter-top-btn" id="cover-letter-top-btn2">
                <a href="{{ route('fur_pflegebedurftige') }}"></a>FÜR PFLEGENDE ANGEHÖRIGE
            </button>
        </div>


        <div class="cover-letter-bottom-buttons row justify-content-center" id="cover-letter-bottom-buttons1">
            <div class="col-lg-3">
                <button class="cover-letter-bottom-btn cover-letter-bottom-btn11 cover-letter-active-btn"
                    id="cover-letter-bottom-btn11">
                    ANTRAG AUF FESTSTELLUNG EINES PFLEGEGRADES
                </button>
            </div>
            <div class="col-lg-3">
                <button class="cover-letter-bottom-btn cover-letter-bottom-btn12" id="cover-letter-bottom-btn12">
                    WIDERSPRUCH GEGEN DIE EINSTUFUNG DES PFLEGEGRADES
                </button>
            </div>
            <div class="col-lg-3">
                <button class="cover-letter-bottom-btn cover-letter-bottom-btn13" id="cover-letter-bottom-btn13">
                    ANTRAG AUF ERHÖHUNG DES PFLEGEGRADES
                </button>
            </div>
            <div class="col-lg-3">
                <button class="cover-letter-bottom-btn cover-letter-bottom-btn14" id="cover-letter-bottom-btn14">
                    ANTRAG AUF PFLEGEHILFSMITTEL
                </button>
            </div>
            <div class="col-lg-3">
                <button class="cover-letter-bottom-btn cover-letter-bottom-btn15" id="cover-letter-bottom-btn15">
                    ANTRAG AUF KURZZEITPFLEGE
                </button>
            </div>
            <div class="col-lg-3">
                <button class="cover-letter-bottom-btn cover-letter-bottom-btn16" id="cover-letter-bottom-btn16">
                    ANTRAG AUF VERHINDERUNGSPFLEGE
                </button>
            </div>
            <div class="col-lg-3">
                <button class="cover-letter-bottom-btn cover-letter-bottom-btn17" id="cover-letter-bottom-btn17">
                    ANTRAG AUF WOHNUMFELDVERBESSERNDE MASSNAHMEN
                </button>
            </div>
        </div>
    </div>

    <!-- ######################## MUSTERANSCHREIBEN SECTION 3 ######################## -->

    <div class="cover-letter-section3">
        <!-- ################# COVER LETTER 11 ################# -->
        <div class="cover-letter-section3-sub" id="cover-letter-content-11">
            <div class="cover-letter-section3-heading">
                Musteranschreiben Antrag auf Feststellung eines Pflegegrades
            </div>
            <div class="cover-letter-section3-content">
                [Ihr Vor- und Nachname] <br />
                [Ihre Adresse] <br />
                [PLZ Ort] <br />
                [Ihre Telefonnummer] <br />
                [Ihre E-Mail-Adresse] <br />
                <br />
                [Datum] <br />
                <br />
                Pflegekasse der [Name der Krankenkasse] <br />
                [Adresse der Pflegekasse] <br />
                [PLZ Ort] <br />
                <br />
                Betreff: Antrag auf Feststellung eines Pflegegrades <br />
                <br />
                Sehr geehrte Damen und Herren, <br />
                <br />
                hiermit stelle ich, [Ihr Vor- und Nachname], geboren am [Ihr
                Geburtsdatum], einen Antrag auf Feststellung eines Pflegegrades.
                <br />
                <br />
                Aufgrund meiner gesundheitlichen Einschränkungen bin ich im Alltag auf
                Unterstützung angewiesen. Diese Einschränkungen betreffen insbesondere
                [kurze Beschreibung Ihrer Einschränkungen, z.B. Mobilität,
                Körperpflege, Haushalt etc.]. <br />
                <br />
                Ich bitte Sie, den Medizinischen Dienst (MD) mit der Begutachtung
                meiner Pflegebedürftigkeit zu beauftragen. Bitte informieren Sie mich
                über den weiteren Ablauf und die notwendigen Schritte. <br />
                <br />
                Sollten Sie weitere Informationen oder Unterlagen benötigen, stehe ich
                Ihnen jederzeit gerne zur Verfügung. <br />
                <br />
                Vielen Dank im Voraus für die Bearbeitung meines Antrags. <br />
                <br />
                Mit freundlichen Grüßen, <br />
                <br />
                [Ihre Unterschrift (bei postalischem Versand)] <br />
                [Ihr Vor- und Nachname] <br />
            </div>
            <div class="cover-letter-section3-btn d-print-none" onClick="printDiv('cover-letter-content-11')">
                <button>Drucken</button>
            </div>
        </div>

        <!-- ################# COVER LETTER 12 ################# -->

        <div class="cover-letter-section3-sub" id="cover-letter-content-12">
            <div class="cover-letter-section3-heading">
                Musteranschreiben Widerspruch gegen die Einstufung des Pflegegrades
            </div>
            <div class="cover-letter-section3-content">
                [Ihr Vor- und Nachname] <br />
                [Ihre Adresse] <br />
                [PLZ Ort] <br />
                [Ihre Telefonnummer] <br />
                [Ihre E-Mail-Adresse] <br />
                <br />
                [Datum] <br />
                <br />
                Pflegekasse der [Name der Krankenkasse] <br />
                [Adresse der Pflegekasse] <br />
                [PLZ Ort] <br />
                <br />
                Betreff: Widerspruch gegen die Einstufung des Pflegegrades <br />
                <br />
                Sehr geehrte Damen und Herren, <br />
                <br />
                hiermit lege ich, [Ihr Vor- und Nachname], geboren am [Ihr
                Geburtsdatum], Widerspruch gegen die Einstufung meines Pflegegrades
                ein, wie sie im Bescheid vom [Datum des Bescheids] festgelegt wurde.
                <br />
                <br />
                Nach eingehender Prüfung des Gutachtens des Medizinischen Dienstes
                (MD) bin ich der Auffassung, dass die festgestellte Einstufung meines
                Pflegegrades nicht meinen tatsächlichen Pflegebedarf widerspiegelt.
                Insbesondere in den Bereichen [konkrete Bereiche nennen, z.B.
                Mobilität, Selbstversorgung, kognitive und kommunikative Fähigkeiten]
                sehe ich eine erhebliche Unterschätzung meines Pflegebedarfs. <br />
                <br />
                Ich bitte Sie daher, die Entscheidung zu überprüfen und den Pflegegrad
                entsprechend meiner tatsächlichen Bedürfnisse anzupassen. Sollten
                weitere Informationen oder Unterlagen benötigt werden, stehe ich Ihnen
                selbstverständlich zur Verfügung. <br />
                <br />
                Vielen Dank für die erneute Prüfung meines Antrags. <br />
                <br />
                Mit freundlichen Grüßen, <br />
                <br />
                [Ihre Unterschrift (bei postalischem Versand)] <br />
                [Ihr Vor- und Nachname]
            </div>
            <div class="cover-letter-section3-btn d-print-none" onClick="printDiv('cover-letter-content-12')">
                <button>Drucken</button>
            </div>
        </div>
        <!-- ################# COVER LETTER 13 ################# -->

        <div class="cover-letter-section3-sub" id="cover-letter-content-13">
            <div class="cover-letter-section3-heading">
                Musteranschreiben Antrag auf Erhöhung des Pflegegrades
            </div>
            <div class="cover-letter-section3-content">
                [Ihr Vor- und Nachname] <br />
                [Ihre Adresse] <br />
                [PLZ Ort] <br />
                [Ihre Telefonnummer] <br />
                [Ihre E-Mail-Adresse] <br />
                <br />
                [Datum] <br />
                <br />
                Pflegekasse der [Name der Krankenkasse] <br />
                [Adresse der Pflegekasse] <br />
                [PLZ Ort] <br />
                <br />
                Betreff: Antrag auf Erhöhung des Pflegegrades <br />
                <br />
                Sehr geehrte Damen und Herren, <br />
                <br />
                hiermit beantrage ich, [Ihr Vor- und Nachname], geboren am [Ihr
                Geburtsdatum], die Erhöhung meines Pflegegrades. Seit der letzten
                Begutachtung am [Datum der letzten Begutachtung] hat sich mein
                gesundheitlicher Zustand verschlechtert, was zu einem erhöhten
                Pflegebedarf geführt hat. <br />
                <br />
                Insbesondere in den Bereichen [konkrete Bereiche nennen, z.B.
                Mobilität, Selbstversorgung, kognitive und kommunikative Fähigkeiten]
                ist eine deutliche Verschlechterung eingetreten. Diese Einschränkungen
                erfordern nun eine intensivere Unterstützung, die im derzeitigen
                Pflegegrad nicht ausreichend berücksichtigt wird. <br />
                <br />
                Ich bitte Sie daher, eine erneute Begutachtung durch den Medizinischen
                Dienst (MD) zu veranlassen, um meinen aktuellen Pflegebedarf korrekt
                zu erfassen und den Pflegegrad entsprechend anzupassen. <br />
                <br />
                Sollten Sie weitere Informationen oder Unterlagen benötigen, stehe ich
                Ihnen jederzeit gerne zur Verfügung. <br />
                <br />
                Vielen Dank für die Bearbeitung meines Antrags. <br />
                <br />
                Mit freundlichen Grüßen,<br />
                <br />
                [Ihre Unterschrift (bei postalischem Versand)] <br />
                [Ihr Vor- und Nachname]
            </div>
            <div class="cover-letter-section3-btn d-print-none" onClick="printDiv('cover-letter-content-13')">
                <button>Drucken</button>
            </div>
        </div>
        <!-- ################# COVER LETTER 14 ################# -->

        <div class="cover-letter-section3-sub" id="cover-letter-content-14">
            <div class="cover-letter-section3-heading">
                Musteranschreiben Antrag auf Pflegehilfsmittel
            </div>
            <div class="cover-letter-section3-content">
                [Ihr Vor- und Nachname] <br />
                [Ihre Adresse] <br />
                [PLZ Ort] <br />
                [Ihre Telefonnummer] <br />
                [Ihre E-Mail-Adresse] <br />
                <br />
                [Datum] <br />
                <br />
                Pflegekasse der [Name der Krankenkasse] <br />
                [Adresse der Pflegekasse] <br />
                [PLZ Ort] <br />
                <br />
                Betreff: Antrag auf Pflegehilfsmittel <br />
                <br />
                Sehr geehrte Damen und Herren, <br />
                <br />
                hiermit beantrage ich, [Ihr Vor- und Nachname], geboren am [Ihr
                Geburtsdatum], die Bereitstellung von Pflegehilfsmitteln gemäß § 40
                SGB XI. Aufgrund meiner gesundheitlichen Situation und des damit
                verbundenen Pflegebedarfs sind folgende Pflegehilfsmittel
                erforderlich, um eine angemessene Pflege in meinem häuslichen Umfeld
                zu gewährleisten: <br />
                <br />
                <ul>
                    <li>[Beispiel: Pflegebett]</li>
                    <li>[Beispiel: Rollstuhl]</li>
                    <li>[Beispiel: Inkontinenzmaterial]</li>
                    <li>[Beispiel: Hausnotrufsystem]</li>
                </ul>
                <br />
                Diese Pflegehilfsmittel sind notwendig, um meine Pflege zu
                erleichtern, Komplikationen zu vermeiden und meine Selbstständigkeit
                so weit wie möglich zu erhalten. Ich bitte Sie daher, meinem Antrag
                zuzustimmen und die benötigten Pflegehilfsmittel schnellstmöglich zur
                Verfügung zu stellen. <br />
                <br />
                Sollten Sie weitere Informationen oder medizinische Unterlagen
                benötigen, stehe ich Ihnen gerne zur Verfügung. Ich wäre Ihnen
                dankbar, wenn Sie mich über die weiteren Schritte informieren könnten.
                <br />
                <br />
                Vielen Dank im Voraus für die Bearbeitung meines Antrags. <br />
                <br />
                Mit freundlichen Grüßen, <br />
                <br />
                [Ihre Unterschrift (bei postalischem Versand)] <br />
                [Ihr Vor- und Nachname]
            </div>
            <div class="cover-letter-section3-btn d-print-none" onClick="printDiv('cover-letter-content-14')">
                <button>Drucken</button>
            </div>
        </div>
        <!-- ################# COVER LETTER 15 ################# -->

        <div class="cover-letter-section3-sub" id="cover-letter-content-15">
            <div class="cover-letter-section3-heading">
                Musteranschreiben Antrag auf Kurzzeitpflege
            </div>
            <div class="cover-letter-section3-content">
                [Ihr Vor- und Nachname] <br />
                [Ihre Adresse] <br />
                [PLZ Ort] <br />
                [Ihre Telefonnummer] <br />
                [Ihre E-Mail-Adresse] <br />
                <br />
                [Datum] <br />
                <br />
                Pflegekasse der [Name der Krankenkasse] <br />
                [Adresse der Pflegekasse] <br />
                [PLZ Ort] <br />
                <br />
                Betreff: Antrag auf Kurzzeitpflege <br />
                <br />
                Sehr geehrte Damen und Herren, <br />
                <br />
                hiermit beantrage ich, [Ihr Vor- und Nachname], geboren am [Ihr
                Geburtsdatum], die Bewilligung von Kurzzeitpflege gemäß § 42 SGB XI.
                <br />
                <br />
                Aufgrund von [Grund für den Bedarf, z.B. Entlastung der pflegenden
                Angehörigen, gesundheitliche Verschlechterung, nach einem
                Krankenhausaufenthalt] ist eine vorübergehende vollstationäre Pflege
                erforderlich. Ich beabsichtige, die Kurzzeitpflege in der Einrichtung
                [Name der Pflegeeinrichtung] in Anspruch zu nehmen. <br />
                <br />
                Der voraussichtliche Zeitraum der Kurzzeitpflege beträgt [geplanter
                Zeitraum, z.B. 2 Wochen ab dem 01.08.2024]. Ich bitte Sie daher, die
                Kostenübernahme für die Kurzzeitpflege zu genehmigen und mich über das
                weitere Vorgehen zu informieren. <br />
                <br />
                Für die Bearbeitung meines Antrags stehe ich Ihnen bei Rückfragen oder
                dem Bedarf nach weiteren Unterlagen gerne zur Verfügung. <br />
                <br />
                Vielen Dank im Voraus für Ihre Unterstützung. <br />
                <br />
                Mit freundlichen Grüßen, <br />
                <br />

                [Ihre Unterschrift (bei postalischem Versand)] <br />
                [Ihr Vor- und Nachname]
            </div>
            <div class="cover-letter-section3-btn d-print-none" onClick="printDiv('cover-letter-content-15')">
                <button>Drucken</button>
            </div>
        </div>
        <!-- ################# COVER LETTER 16 ################# -->

        <div class="cover-letter-section3-sub" id="cover-letter-content-16">
            <div class="cover-letter-section3-heading">
                Musteranschreiben Antrag auf Verhinderungspflege
            </div>
            <div class="cover-letter-section3-content">
                [Ihr Vor- und Nachname] <br />
                [Ihre Adresse] <br />
                [PLZ Ort] <br />
                [Ihre Telefonnummer] <br />
                [Ihre E-Mail-Adresse] <br />
                <br />
                [Datum] <br />
                <br />
                Pflegekasse der [Name der Krankenkasse] <br />
                [Adresse der Pflegekasse] <br />
                [PLZ Ort] <br />
                <br />
                Betreff: Antrag auf Verhinderungspflege <br />
                <br />
                Sehr geehrte Damen und Herren, <br />
                <br />
                hiermit beantrage ich, [Ihr Vor- und Nachname], geboren am [Ihr
                Geburtsdatum], die Bewilligung von Verhinderungspflege gemäß § 39 SGB
                XI. <br />
                <br />
                Da die reguläre Pflegeperson, [Name der Pflegeperson], in der Zeit vom
                [Beginn der Verhinderung, z.B. 01.08.2024] bis zum [Ende der
                Verhinderung, z.B. 15.08.2024] aufgrund von [Grund für die
                Verhinderung, z.B. Krankheit, Urlaub] verhindert ist, ist es
                erforderlich, dass in diesem Zeitraum eine Ersatzpflege organisiert
                wird. <br />
                <br />
                Ich beabsichtige, die Verhinderungspflege durch [Name der
                Ersatzpflegeperson oder des Pflegedienstes] durchführen zu lassen. Die
                voraussichtlichen Kosten belaufen sich auf [geschätzter Betrag]. Ich
                bitte Sie daher, die Kostenübernahme für die Verhinderungspflege zu
                genehmigen. <br />
                <br />
                Für die Bearbeitung meines Antrags stehe ich Ihnen bei Rückfragen oder
                dem Bedarf nach weiteren Unterlagen gerne zur Verfügung. <br />

                Vielen Dank im Voraus für Ihre Unterstützung. <br />
                <br />
                Mit freundlichen Grüßen, <br />
                <br />
                [Ihre Unterschrift (bei postalischem Versand)] <br />
                [Ihr Vor- und Nachname]
            </div>
            <div class="cover-letter-section3-btn d-print-none" onClick="printDiv('cover-letter-content-16')">
                <button>Drucken</button>
            </div>
        </div>
        <!-- ################# COVER LETTER 17 ################# -->

        <div class="cover-letter-section3-sub" id="cover-letter-content-17">
            <div class="cover-letter-section3-heading">
                Musteranschreiben Antrag auf wohnumfeldverbessernde Maßnahmen
            </div>
            <div class="cover-letter-section3-content">
                [Ihr Vor- und Nachname] <br />
                [Ihre Adresse] <br />
                [PLZ Ort] <br />
                [Ihre Telefonnummer] <br />
                [Ihre E-Mail-Adresse] <br />
                <br />
                [Datum] <br />
                <br />
                Pflegekasse der [Name der Krankenkasse] <br />
                [Adresse der Pflegekasse] <br />
                [PLZ Ort] <br />
                <br />
                Betreff: Antrag auf wohnumfeldverbessernde Maßnahmen <br />
                <br />
                Sehr geehrte Damen und Herren, <br />
                <br />
                hiermit beantrage ich, [Ihr Vor- und Nachname], geboren am [Ihr
                Geburtsdatum], die Bewilligung von wohnumfeldverbessernden Maßnahmen
                gemäß § 40 Abs. 4 SGB XI. <br />
                <br />
                Aufgrund meiner gesundheitlichen Einschränkungen ist es notwendig,
                meine Wohnung barrierefrei bzw. pflegegerecht umzubauen, um eine
                adäquate Pflege und Selbstständigkeit weiterhin zu ermöglichen.
                Konkret benötige ich folgende Maßnahmen: <br />
                <br />
                <ul>
                    <li>[Beispiel: Einbau einer bodengleichen Dusche]</li>
                    <li>[Beispiel: Installation von Haltegriffen im Badezimmer]</li>
                    <li>[Beispiel: Verbreiterung von Türen für Rollstuhlfahrer]</li>
                    <li>[Beispiel: Anbringen eines Treppenlifts]</li>
                </ul>
                <br />
                Diese Maßnahmen sind erforderlich, um die Pflege in meinem häuslichen
                Umfeld zu erleichtern und meine Selbstständigkeit so weit wie möglich
                zu erhalten. Ich bitte Sie daher, die Kostenübernahme für die
                genannten Umbaumaßnahmen zu genehmigen. <br />
                <br />
                Sollten Sie weitere Informationen oder Unterlagen benötigen, stehe ich
                Ihnen gerne zur Verfügung. Über eine positive Rückmeldung und die
                weitere Vorgehensweise würde ich mich sehr freuen. <br />
                <br />
                Vielen Dank im Voraus für Ihre Unterstützung. <br />
                <br />
                Mit freundlichen Grüßen, <br />
                <br />
                [Ihre Unterschrift (bei postalischem Versand)] <br />
                [Ihr Vor- und Nachname]
            </div>
            <div class="cover-letter-section3-btn d-print-none" onClick="printDiv('cover-letter-content-17')">
                <button>Drucken</button>
            </div>
        </div>
    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Musteranschreiben_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

    <script>
        function printDiv(divId) {
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
