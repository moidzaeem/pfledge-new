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
        <button class="checklisten-section2-top-btn3 checklisten-top-btn active-btn" id="checklisten-top-btn3">
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
        <button class="checklisten-section2-top-btn7 checklisten-top-btn" id="checklisten-top-btn7">
            <a href="{{ route('checklist.6') }}"></a>
            GESUNDHEITSÜBERWACHUNG
        </button>
    </div>

    <div class="checklisten-section2-bottom-btn-container" id="checklisten-bottom-container3">
        <button class="checklisten-section2-bottom-btn31 check-bottom-btns check-active-btn"
            id="checklisten-bottom-btn31">
            Körperpflege (Baden, Anziehen, Hygiene)
        </button>
        <button class="checklisten-section2-bottom-btn32 check-bottom-btns" id="checklisten-bottom-btn32">
            Mahlzeiten und Ernährung
        </button>
        <button class="checklisten-section2-bottom-btn33 check-bottom-btns" id="checklisten-bottom-btn33">
            Mobilitätshilfen und Transfers (Rollstuhl, Gehstock)
        </button>
        <button class="checklisten-section2-bottom-btn34 check-bottom-btns" id="checklisten-bottom-btn34">
            Sicherheit im Haushalt (Sturzprävention, Notrufsysteme)
        </button>
    </div>


    <!-- #################### Körperpflege (Baden, Anziehen, Hygiene) form ###################   -->

    <form action="" class="check-listen-forms" id="hausl-form1">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Körperpflege (Baden, Anziehen, Hygiene)
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Vorbereitung der Pflegeutensilien
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Handtücher und Waschlappen bereitlegen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Duschgel, Shampoo, Conditioner und Seife griffbereit haben
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zahnbürste, Zahnpasta, Zahnseide und Mundspülung vorbereiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rasierutensilien (Rasierer, Rasiercreme, Aftershave)
                            bereitstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Körperlotion, Deodorant und andere Hautpflegeprodukte
                            bereithalten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Baden und Duschen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Badewanne oder Dusche auf die richtige Temperatur einstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rutschfeste Matten in der Dusche oder Badewanne verwenden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Haltegriffe und Sitzgelegenheiten in der Dusche/Badewanne
                            installieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Haltegriffe und Sitzgelegenheiten in der Dusche/Badewanne
                            installieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Auf Sicherheit achten (z.B. nicht allein baden, wenn Sturzgefahr
                            besteht)
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Haarpflege
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Haare gründlich waschen und ausspülen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Conditioner verwenden und ausspülen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Haare trocken tupfen und kämmen/bürsten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßiges Schneiden oder Frisieren der Haare einplanen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Mundhygiene
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zähne mindestens zweimal täglich putzen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Zahnseide oder Interdentalbürsten verwenden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Mundspülung für zusätzliche Frische und Hygiene
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Kontrolltermine beim Zahnarzt vereinbaren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">5. Rasur</div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rasierutensilien vorbereiten und auf Sauberkeit achten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Haut vor der Rasur anfeuchten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nach der Rasur Hautpflegeprodukte auftragen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">6. Anziehen</div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Saubere und bequeme Kleidung bereitlegen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hilfsmittel wie Anziehhilfen oder Strumpfanzieher verwenden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kleidung je nach Wetter und Temperatur anpassen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Schuhe mit rutschfesten Sohlen wählen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Hautpflege
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Körperlotion nach dem Baden/Duschen auftragen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Besondere Pflege bei trockenen Hautstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Kontrolle auf Hautveränderungen oder Wunden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sonnenschutz auftragen, wenn notwendig
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Händewaschen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hände regelmäßig mit Seife und Wasser waschen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fingernägel sauber halten und regelmäßig schneiden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Handdesinfektionsmittel verwenden, wenn kein Wasser verfügbar
                            ist
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Intimhygiene
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Tägliche Reinigung des Intimbereichs mit milden Produkten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Verwendung von speziellen Produkten bei Bedarf (z.B.
                            Inkontinenzprodukte)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Kontrolle auf Hautirritationen oder Infektionen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Zusätzliche Hygiene
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ohren regelmäßig reinigen (keine Wattestäbchen im Gehörgang
                            verwenden)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Augenpflege, falls erforderlich (z.B. Augentropfen, Reinigung
                            der Augenlider)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nagelpflege an Händen und Füßen (schneiden, feilen)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, eine umfassende und regelmäßige
                Körperpflege sicherzustellen, um Gesundheit und Wohlbefinden zu
                fördern.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('hausl-form1')"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Mahlzeiten und Ernährung form ###################   -->

    <form action="" class="check-listen-forms" id="hausl-form2">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Mahlzeiten und Ernährung
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Ernährungsbedürfnisse und -präferenzen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ernährungsbedürfnisse und Diätvorgaben berücksichtigen (z.B.
                            Diabetiker, glutenfrei, laktosefrei)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vorlieben und Abneigungen bei Lebensmitteln notieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Allergien und Unverträglichkeiten dokumentieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Besondere Ernährungsanforderungen (z.B. proteinreich,
                            ballaststoffreich) beachten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Mahlzeitenplanung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wöchentlicher Mahlzeitenplan erstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ausgewogene Ernährung sicherstellen (Obst, Gemüse, Proteine,
                            Kohlenhydrate, Fette)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vielfalt in den Speiseplan integrieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rezepte und Ideen für Mahlzeiten sammeln
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Einkaufsliste und Vorratshaltung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Einkaufsliste basierend auf dem Mahlzeitenplan erstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Frische und haltbare Lebensmittel in der richtigen Menge kaufen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vorräte regelmäßig überprüfen und auffüllen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ablaufdaten der Lebensmittel beachten
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Essensvorbereitung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Vorbereitungen für die Mahlzeiten (z.B. Gemüse schneiden,
                            Fleisch marinieren)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hygienische Handhabung der Lebensmittel beachten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Küchengeräte und Utensilien bereithalten (Mixer, Messer,
                            Schneidebrett)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Mahlzeitenzeiten und -häufigkeit
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Essenszeiten einhalten (Frühstück, Mittagessen,
                            Abendessen, Zwischenmahlzeiten)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anzahl der Mahlzeiten pro Tag festlegen (3 Hauptmahlzeiten, 2-3
                            Snacks)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ausreichend Zeit für die Mahlzeiten einplanen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Flüssigkeitszufuhr
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ausreichend Wasser und andere gesunde Getränke bereitstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Tägliche Trinkmenge überwachen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Alkohol- und koffeinhaltige Getränke in Maßen konsumieren
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Spezielles Equipment und Hilfsmittel
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hilfsmittel für Menschen mit eingeschränkter Handfunktion (z.B.
                            spezielle Bestecke)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassungen für Menschen mit Schluckbeschwerden (z.B. angedickte
                            Flüssigkeiten)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geräte zur Essenszubereitung (z.B. Mikrowelle, Wasserkocher)
                            einfach zugänglich machen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        8. Essensumgebung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Angenehme und ruhige Essensatmosphäre schaffen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Tisch schön decken und ansprechende Präsentation der Mahlzeiten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bequeme Sitzmöglichkeiten und angemessene Tischhöhe
                            sicherstellen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Überwachung der Ernährung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ernährungsprotokoll führen (gegessene Mahlzeiten und Mengen
                            notieren)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßiges Wiegen und Beobachtung der Gewichtsentwicklung
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rücksprache mit Ernährungsberater oder Arzt bei Bedarf
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Unterstützung bei den Mahlzeiten
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Unterstützung beim Essen anbieten, falls notwendig
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bei Bedarf Anreize zur Selbstständigkeit geben
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Gemeinsame Mahlzeiten zur Förderung des sozialen Kontakts
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, eine ausgewogene und gesunde Ernährung
                sicherzustellen, um das Wohlbefinden und die Gesundheit zu fördern.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('hausl-form2')"><button>Drucken</button></div>
        </div>
    </form>

    <!-- #################### Mobilitätshilfen und Transfers (Rollstuhl, Gehstock) form ###################   -->

    <form action="" class="check-listen-forms" id="hausl-form3">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Mobilitätshilfen und Transfers (Rollstuhl, Gehstock)
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Auswahl der Mobilitätshilfen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beratung durch Fachpersonal (z.B. Arzt, Physiotherapeut)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geeignete Mobilitätshilfe auswählen (Rollstuhl, Gehstock,
                            Rollator)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Individuelle Anpassung und Einstellung der Hilfsmittel
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">2. Rollstuhl</div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rollstuhltyp (manuell, elektrisch) auswählen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sitzhöhe, Sitztiefe und Rückenlehne anpassen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Fußstützen und Armlehnen richtig einstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rollstuhl regelmäßig warten (Reifen, Bremsen, Sitzpolster)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sicherheitshinweise und Handhabung des Rollstuhls lernen
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">3. Gehstock</div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Richtige Höhe des Gehstocks anpassen (Handgelenkshöhe)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geeigneten Griff (ergonomisch, rutschfest) wählen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung auf Abnutzung oder Schäden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nutzung des Gehstocks in der richtigen Hand (gegenüberliegende
                            Seite des schwächeren Beins)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">4. Rollator</div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rollatorhöhe und Handgriffposition einstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bremsen und Räder überprüfen und warten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sitzgelegenheit und Korb für den Rollator in Betracht ziehen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nutzung und Sicherheitshinweise lernen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">5. Transfers</div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Richtige Transfertechniken erlernen (z.B. von Bett zu Rollstuhl,
                            von Rollstuhl zu Toilette)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nutzung von Transferhilfen (Rutschbrett, Hebelifter)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegeperson oder Assistent in Transfertechniken schulen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sicherheit des Umfelds gewährleisten (rutschfeste Matten,
                            Haltegriffe)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Sicherheitsmaßnahmen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Umgebung barrierefrei gestalten (Breite Türen, Rampen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Hindernisse aus dem Weg räumen (Teppiche, Kabel)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Haltegriffe und Handläufe in wichtigen Bereichen installieren
                            (Badezimmer, Treppen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Sturzpräventionsmaßnahmen umsetzen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        7. Training und Übung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßiges Training zur Stärkung der Mobilität
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Übungen zur Verbesserung des Gleichgewichts und der Koordination
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anweisungen des Physiotherapeuten befolgen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Selbstständige Nutzung der Mobilitätshilfen üben
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
                            Regelmäßige Überprüfung der Mobilitätshilfen durch Fachpersonal
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Anpassungen und Veränderungen bei Bedarf durchführen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Feedback von der nutzenden Person einholen und berücksichtigen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        9. Transport und Lagerung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Geeignete Transportmöglichkeiten für Mobilitätshilfen (Auto,
                            öffentliche Verkehrsmittel)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rollstuhl oder Rollator sicher im Fahrzeug verstauen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Lagerung der Mobilitätshilfen bei Nichtgebrauch (trocken,
                            sicher)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        10. Finanzielle und rechtliche Aspekte
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Kostenübernahme durch Krankenversicherung klären
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Beantragung von Zuschüssen oder Hilfsmitteln bei Bedarf
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Informationen zu gesetzlichen Regelungen und Rechten einholen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, die richtige Mobilitätshilfe auszuwählen
                und deren Nutzung und Wartung zu gewährleisten, um eine sichere und
                selbstständige Fortbewegung zu ermöglichen.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('hausl-form3')"><button>Drucken</button></div>
        </div>
    </form>
    <!-- #################### Sicherheit im Haushalt (Sturzprävention, Notrufsysteme) form ###################   -->

    <form action="" class="check-listen-forms" id="hausl-form4">
        <div class="checklisten-section3-container">
            <div class="checklisten-section3-top1">
                Checkliste Sicherheit im Haushalt (Sturzprävention, Notrufsysteme)
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        1. Sturzprävention
                    </div>
                    <div class="checklisten-section3-wrapper-sub-heading">
                        a. Wohnbereich
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Teppiche mit rutschfesten Unterlagen sichern oder entfernen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Stolperfallen beseitigen (z.B. Kabel, lose Gegenstände)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ausreichende Beleuchtung in allen Räumen sicherstellen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Möbel so anordnen, dass genügend Platz zum Gehen bleibt
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Stabilität von Möbeln überprüfen (keine wackeligen Stühle oder
                            Tische)
                        </div>
                    </div>
                    <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                        b. Badezimmer
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Rutschfeste Matten in Dusche und Badewanne verwenden
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Haltegriffe anbringen (in Dusche, Badewanne und neben der
                            Toilette)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Duschhocker oder -sitz installieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Antirutsch-Beschichtung auf Fliesen auftragen
                        </div>
                    </div>

                    <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                        c. Treppen und Flure
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Handläufe auf beiden Seiten der Treppe montieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Stufenmarkierungen anbringen (gut sichtbare, kontrastreiche
                            Streifen)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Treppenstufen frei von Gegenständen halten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Ausreichende Beleuchtung auf Treppen und in Fluren sicherstellen
                        </div>
                    </div>

                    <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                        d. Schlafzimmer
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nachttischlampe oder Notlicht in Reichweite des Bettes
                            platzieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Bett in einer Höhe, die das einfache Ein- und Aussteigen
                            ermöglicht
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Telefon oder Notrufknopf in Reichweite des Bettes
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        2. Notrufsysteme
                    </div>
                    <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                        a. Notrufknöpfe und Armbänder
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Notrufknopf an zentraler Stelle im Haus installieren
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Tragbare Notrufknöpfe oder -armbänder nutzen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Überprüfung der Funktionsfähigkeit
                        </div>
                    </div>
                    <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                        b. Telefon und Kommunikation
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Telefon in jedem Raum verfügbar haben
                        </div>
                    </div>
                    <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                        <div class="checklisten-checkbox-container">
                            <label>
                                <input type="checkbox" />
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="checklisten-checkbox-data">
                                Schnurlose Telefone oder Mobiltelefone verwenden
                            </div>
                        </div>
                        <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                            <div class="checklisten-checkbox-container">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Telefonnummern für Notfälle programmieren (z.B. Familie,
                                    Nachbarn, Rettungsdienste)
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Telefonliste mit wichtigen Kontakten gut sichtbar
                                    aufbewahren
                                </div>
                            </div>
                            <div class="checklisten-section3-wrapper-sub-heading" style="margin-top: 1rem">
                                c. Sicherheitssysteme
                            </div>
                            <div class="checklisten-checkbox-container">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Rauchmelder und Kohlenmonoxidmelder installieren und
                                    regelmäßig testen
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Sicherheitsbeleuchtung für Notfälle einrichten
                                </div>
                            </div>
                            <div class="checklisten-checkbox-container">
                                <label>
                                    <input type="checkbox" />
                                    <span class="custom-checkbox"></span>
                                </label>
                                <div class="checklisten-checkbox-data">
                                    Einbruchssicherungen an Türen und Fenstern anbringen
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        3. Regelmäßige Überprüfungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Hausinspektionen durchführen (monatlich oder
                            vierteljährlich)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Wartung und Austausch von defekten Sicherheitsgeräten
                        </div>
                    </div>

                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Aktualisierung der Notfallkontakte und Überprüfung der
                            Erreichbarkeit
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        4. Training und Übungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Schulungen zur Nutzung von Notrufsystemen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßige Übungen für den Notfall (z.B. wie man sicher das
                            Haus verlässt)
                        </div>
                    </div>

                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Erste-Hilfe-Kurs besuchen oder auffrischen
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        5. Hilfsmittel und Anpassungen
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Gehhilfen oder Rollstühle regelmäßig warten
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Individuelle Anpassungen im Haus vornehmen (z.B. Rampe für
                            Rollstuhl, höhenverstellbare Möbel)
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Nutzung von Alltagshilfen (z.B. Greifzangen, Halterungen)
                        </div>
                    </div>
                </div>
            </div>
            <div class="checklisten-section3-sub-container">
                <div class="checklisten-section3-wrapper">
                    <div class="checklisten-section3-wrapper-heading">
                        6. Kommunikation und Unterstützung
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Regelmäßiger Kontakt mit Familie, Freunden oder Nachbarn
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Teilnahme an lokalen Unterstützungsgruppen oder Programmen
                        </div>
                    </div>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            Pflegekräfte oder Haushaltshilfen bei Bedarf engagieren
                        </div>
                    </div>
                </div>
            </div>

            <div class="checklisten-section3-bottom">
                Diese Checkliste hilft dabei, die Sicherheit im Haushalt zu verbessern
                und Sturzrisiken sowie andere Gefahren zu minimieren. Durch präventive
                Maßnahmen und die Installation von Notrufsystemen kann das
                Wohlbefinden und die Sicherheit erheblich gesteigert werden.
            </div>

            <div class="checklisten-section3-btn" onClick="printDiv('hausl-form4')"><button>Drucken</button></div>
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
            // const checkboxes = document.querySelectorAll('.checklisten-checkbox-container');

            // // Loop through each checkbox container
            // checkboxes.forEach(function(checkboxContainer) {
            //     // Find the checkbox within the container
            //     const checkbox = checkboxContainer.querySelector('input[type="checkbox"]');

            //     // Find the heading ('.checklisten-section3-wrapper-heading') for this container's section
            //     const heading = checkboxContainer.closest('.checklisten-section3-wrapper').querySelector(
            //         '.checklisten-section3-wrapper-heading');

            //     // If the checkbox is not checked, hide its container and its heading
            //     if (heading && !checkbox.checked) {
            //         heading.style.display = 'none'; // Hide the heading
            //         checkboxContainer.style.display = 'none'; // Hide the checkbox container
            //     } else {
            //         // Ensure visible checkboxes remain visible (restore visibility)
            //         if (heading) heading.style.display = ''; // Ensure heading is visible
            //         checkboxContainer.style.display = ''; // Ensure checkbox container is visible
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
    </script>

</body>

</html>
