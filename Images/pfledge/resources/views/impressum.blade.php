<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="background-image: url('{{ asset('assets/Images/Impressum_header_bg.svg') }}') !important">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Rechtliches – Ihr Schutz, unsere Pflicht</span>
            <div>Impressum und <span class="span2">Datenschutzerklärung</span></div>
        </div>
    </div>

    <div class="impressum-section1">
        <div class="impressum-section1-heading">Impressum</div>

        <div class="impressum-section1-accordion1">
            <div class="impressum-accordion1-top-div">
                <div class="impressum-accordion1-heading ">1. Angaben gemäß § 5 TMG</div>
                <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                    class="accordion-icon rotated ">
            </div>
            <div class="impressum-accordion1-bottom-div active">
                Melanie Zick <br> Mühlenfeld 10a <div class="mb-2">31789 Hameln</div>
                Kontakt: <br> Telefon: 05151 – 7 90 98 62 <br> E-Mail: info@pflegepur.de
            </div>
        </div>
        <div class="impressum-section1-accordion1">
            <div class="impressum-accordion1-top-div">
                <div class="impressum-accordion1-heading">2. Streitschlichtung</div>
                <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon">
            </div>
            <div class="impressum-accordion1-bottom-div">
                Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:
                https://ec.europa.eu/consumers/odr. <br>
                Unsere E-Mail-Adresse finden Sie oben im Impressum. <br>
                <br>
                Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer
                Verbraucherschlichtungsstelle
                teilzunehmen.
            </div>
        </div>
        <div class="impressum-section1-accordion1">
            <div class="impressum-accordion1-top-div">
                <div class="impressum-accordion1-heading">2.1. Haftung für Inhalte</div>
                <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon">
            </div>
            <div class="impressum-accordion1-bottom-div">
                Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den
                allgemeinen
                Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet,
                übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die
                auf eine
                rechtswidrige Tätigkeit hinweisen. <br>
                <br>
                Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen
                bleiben
                hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer
                konkreten
                Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese
                Inhalte
                umgehend entfernen.


            </div>
        </div>
        <div class="impressum-section1-accordion1">
            <div class="impressum-accordion1-top-div">
                <div class="impressum-accordion1-heading">2.2. Haftung für Links</div>
                <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon">
            </div>
            <div class="impressum-accordion1-bottom-div">
                Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben.
                Deshalb
                können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten
                ist
                stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum
                Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum
                Zeitpunkt der
                Verlinkung nicht erkennbar. <br>
                <br>
                Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer
                Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links
                umgehend
                entfernen.
            </div>
        </div>
        <div class="impressum-section1-accordion1">
            <div class="impressum-accordion1-top-div">
                <div class="impressum-accordion1-heading">2.3. Urheberrecht</div>
                <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon">
            </div>
            <div class="impressum-accordion1-bottom-div">
                Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen
                Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der
                Grenzen
                des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
                Downloads und
                Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. <br>
                <br>
                Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte
                Dritter
                beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine
                Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden
                von
                Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
            </div>
        </div>


    </div>


    <!-- ########################### IMPRESSUM SECTION 2 ########################### -->

    <div class="impressum-section2">
        <div class="impressum-section1">
            <div class="impressum-section1-heading">Datenschutzerklärung</div>

            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">1. Allgemeine Hinweise</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon rotated">
                </div>
                <div class="impressum-accordion1-bottom-div active">
                    Die Verarbeitung Ihrer personenbezogener Daten erfolgt in Übereinstimmung mit der
                    EU-Datenschutz-Grundverordnung und mit den für uns geltenden landesspezifischen
                    Datenschutzbestimmungen. Mit
                    unserer Datenschutzerklärung möchten wir Sie unter anderem über die Erhebung und Speicherung
                    personenbezogener
                    Daten, über die Art und den Zweck von deren Verwendung, die hierfür jeweils maßgebliche
                    Rechtsgrundlage sowie
                    über die Ihnen zustehenden Rechte informieren.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">2. Name und Kontaktdaten des für die Verarbeitung
                        Verantwortlichen
                    </div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Diese Datenschutzerklärung gilt für die Datenverarbeitung durch: <br>
                    <br>
                    Verantwortlicher: <br>
                    Melanie Zick <br>
                    Mühlenfeld 10a <br>
                    31789 Hameln <br>
                    <br>
                    Tel.: 05151 – 7909924 <br>
                    Fax: 05151 – 7909355 <br>
                    E-Mail: info@pflegepur.de
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">3. Begriffsbestimmungen</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Wir verwenden in unserer Datenschutzerklärung unter anderem die folgenden Begriffe, die wir
                    nachfolgend
                    erläutern möchten: <br>
                    <br>
                    a) Personenbezogene Daten <br>
                    Personenbezogene Daten sind alle Informationen, die sich auf eine identifizierte oder
                    identifizierbare
                    natürliche Person (im Folgenden „betroffene Person“) beziehen. Als identifizierbar wird eine
                    natürliche Person
                    angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem
                    Namen, zu einer
                    Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder mehreren besonderen
                    Merkmalen, die
                    Ausdruck der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen
                    oder
                    sozialen Identität dieser natürlichen Person sind, identifiziert werden kann. <br>
                    <br>
                    b)Betroffene Person <br>
                    Betroffene Person ist jede identifizierte oder identifizierbare natürliche Person, deren
                    personenbezogene
                    Daten von dem für die Verarbeitung Verantwortlichen verarbeitet werden. <br>
                    <br>
                    c)Verarbeitung <br>
                    Verarbeitung ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte Vorgang oder jede
                    solche
                    Vorgangsreihe im Zusammenhang mit personenbezogenen Daten wie das Erheben, das Erfassen, die
                    Organisation, das
                    Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung,
                    die
                    Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung, den Abgleich
                    oder die
                    Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung. <br>
                    <br>
                    d) Einschränkung der Verarbeitung <br>
                    Einschränkung der Verarbeitung ist die Markierung gespeicherter personenbezogener Daten mit dem
                    Ziel, ihre
                    künftige Verarbeitung einzuschränken. <br>
                    <br>
                    e) Profiling <br>
                    Profiling ist jede Art der automatisierten Verarbeitung personenbezogener Daten, die darin besteht,
                    dass diese
                    personenbezogenen Daten verwendet werden, um bestimmte persönliche Aspekte, die sich auf eine
                    natürliche
                    Person beziehen, zu bewerten, insbesondere, um Aspekte bezüglich Arbeitsleistung, wirtschaftlicher
                    Lage,
                    Gesundheit, persönlicher Vorlieben, Interessen, Zuverlässigkeit, Verhalten, Aufenthaltsort oder
                    Ortswechsel
                    dieser natürlichen Person zu analysieren oder vorherzusagen. <br>
                    <br>
                    f) Pseudonymisierung <br>
                    Pseudonymisierung ist die Verarbeitung personenbezogener Daten in einer Weise, auf welche die
                    personenbezogenen Daten ohne Hinzuziehung zusätzlicher Informationen nicht mehr einer spezifischen
                    betroffenen
                    Person zugeordnet werden können, sofern diese zusätzlichen Informationen gesondert aufbewahrt werden
                    und
                    technischen und organisatorischen Maßnahmen unterliegen, die gewährleisten, dass die
                    personenbezogenen Daten
                    nicht einer identifizierten oder identifizierbaren natürlichen Person zugewiesen werden. <br>
                    <br>
                    g) Verantwortlicher oder für die Verarbeitung Verantwortlicher <br>
                    Verantwortlicher oder für die Verarbeitung Verantwortlicher ist die natürliche oder juristische
                    Person,
                    Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen über die Zwecke und
                    Mittel der
                    Verarbeitung von personenbezogenen Daten entscheidet. Sind die Zwecke und Mittel dieser Verarbeitung
                    durch das
                    Unionsrecht oder das Recht der Mitgliedstaaten vorgegeben, so kann der Verantwortliche
                    beziehungsweise können
                    die bestimmten Kriterien seiner Benennung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten
                    vorgesehen
                    werden. <br>
                    <br>
                    h) Auftragsverarbeiter <br>
                    Auftragsverarbeiter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere
                    Stelle, die
                    personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet. <br>
                    <br>
                    i) Empfänger <br>
                    Empfänger ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, der
                    personenbezogene Daten offengelegt werden, unabhängig davon, ob es sich bei ihr um einen Dritten
                    handelt oder
                    nicht. Behörden, die im Rahmen eines bestimmten Untersuchungsauftrags nach dem Unionsrecht oder dem
                    Recht der
                    Mitgliedstaaten möglicherweise personenbezogene Daten erhalten, gelten jedoch nicht als Empfänger.
                    <br>
                    <br>
                    j) Dritter <br>
                    Dritter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle außer
                    der
                    betroffenen Person, dem Verantwortlichen, dem Auftragsverarbeiter und den Personen, die unter der
                    unmittelbaren Verantwortung des Verantwortlichen oder des Auftragsverarbeiters befugt sind, die
                    personenbezogenen Daten zu verarbeiten. <br>
                    <br>
                    k) Einwilligung <br>
                    Einwilligung ist jede von der betroffenen Person freiwillig für den bestimmten Fall in informierter
                    Weise und
                    unmissverständlich abgegebene Willensbekundung in Form einer Erklärung oder einer sonstigen
                    eindeutigen
                    bestätigenden Handlung, mit der die betroffene Person zu verstehen gibt, dass sie mit der
                    Verarbeitung der sie
                    betreffenden personenbezogenen Daten einverstanden ist. <br>
                    <br>
                    l) Verletzung des Schutzes personenbezogener Daten <br>
                    Verletzung des Schutzes personenbezogener Daten ist eine Verletzung der Sicherheit, die zur
                    Vernichtung, zum
                    Verlust oder zur Veränderung, ob unbeabsichtigt oder unrechtmäßig, oder zur unbefugten Offenlegung
                    von
                    beziehungsweise zum unbefugten Zugang zu personenbezogenen Daten führt, die übermittelt, gespeichert
                    oder auf
                    sonstige Weise verarbeitet wurden.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">4. Erhebung und Speicherung personenbezogener Daten sowie
                        Art und
                        Zweck von deren Verwendung</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    a) beim Besuch unserer Website <br>
                    Beim Aufrufen unserer Website https://pflegepur.de werden durch den auf Ihrem Endgerät zum Einsatz
                    kommenden
                    Browser automatisch Informationen an den Server unserer Website gesendet. Diese Informationen werden
                    temporär
                    in einem sog. Logfile gespeichert. Folgende Informationen werden dabei ohne Ihr Zutun erfasst und
                    bis zur
                    automatisierten Löschung nach Verlassen unserer Webseite gespeichert: <br>
                    <br>
                    – IP-Adresse des anfragenden Rechners <br>
                    – Datum und Uhrzeit des Zugriffs <br>
                    – Name und URL der abgerufenen Datei <br>
                    – Website, von der aus der Zugriff erfolgt (Referrer-URL) <br>
                    – verwendeter Browser und ggf. das Betriebssystem Ihres Rechners sowie der Name Ihres
                    Access-Providers <br>
                    <br>
                    Die genannten Daten werden durch uns zu folgenden Zwecken verarbeitet: <br>
                    <br>
                    – Gewährleistung eines reibungslosen Verbindungsaufbaus der Website <br>
                    – Gewährleistung einer komfortablen Nutzung unserer Website <br>
                    – Auswertung der Systemsicherheit und -stabilität sowie <br>
                    – zu weiteren administrativen Zwecken <br>
                    <br>
                    Die Rechtsgrundlage für die Datenverarbeitung ist Art. 6 Abs. 1 S. 1 lit. f DSGVO. Unser
                    berechtigtes
                    Interesse folgt aus oben aufgelisteten Zwecken zur Datenerhebung. In keinem Fall verwenden wir die
                    erhobenen
                    Daten zu dem Zweck, Rückschlüsse auf Ihre Person zu ziehen. <br>
                    <br>
                    b) bei Ihrer Kontaktaufnahme per E-Mail oder über unser Kontaktformular <br>
                    Wir erheben personenbezogene Daten, wenn Sie uns diese bei einer Kontaktaufnahme per E-Mail an
                    info@pflegepur.de oder über unser Kontaktformular freiwillig mitteilen. Welche Daten erhoben werden,
                    ist aus
                    dem Eingabeformular ersichtlich. Wir verwenden die von Ihnen mitgeteilten Daten zur Bearbeitung
                    Ihrer Anfragen
                    und zur Vertragsabwicklung. Nach vollständiger Bearbeitung Ihrer Anfrage bzw. nach vollständiger
                    Abwicklung
                    des Vertrages bzw. nach Löschung Ihres Benutzerkontos werden Ihre Daten für die weitere Verwendung
                    gesperrt
                    und nach Ablauf der steuer- und handelsrechtlichen Aufbewahrungsfristen gelöscht, sofern Sie nicht
                    ausdrücklich in eine weitere Nutzung Ihrer Daten eingewilligt haben oder wir uns eine darüber
                    hinausgehende
                    Datenverwendung vorbehalten, die gesetzlich erlaubt ist und über die wir Sie nachstehend
                    informieren. <br>
                    Die Datenverarbeitung zum Zwecke der Kontaktaufnahme mit uns bzw. bei Anlegen eines Benutzerkontos
                    bei uns
                    erfolgt nach Art. 6 Abs. 1 S. 1 lit. a DSGVO auf Grundlage Ihrer freiwillig erteilten Einwilligung.
                    <br>
                    Die Datenverarbeitung bei Zustandekommen eines Vertrages mit uns erfolgt nach Art. 6 Abs. 1 S. 1
                    lit. a DSGVO
                    auf Grundlage Ihrer freiwillig erteilten Einwilligung bzw. nach Art. 6 Abs. 1 S. 1 lit. b DSG zur
                    Vertragserfüllung. <br>
                    Sie können der Speicherung und Verwendung Ihrer Daten zu diesen Zwecken jederzeit durch eine
                    Nachricht an die
                    oben unter Ziffer 1. genannten Kontaktmöglichkeiten widersprechen. <br>
                    <br>
                    c) Hinweise zu elektronischer Post (E-Mail) <br>
                    Die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) kann Sicherheitslücken
                    aufweisen.
                    Informationen, die Sie unverschlüsselt per elektronische Post (E-Mail) an uns schicken, können von
                    Dritten
                    unterwegs gelesen, gespeichert und zweckentfremdet werden. Bitte senden Sie daher keine
                    vertraulichen
                    Informationen ohne Verwendung eines Verschlüsselungsprogramms. <br>
                    <br>
                    d) Passwortgeschützter Login-Bereich <br>
                    Der Kunde kann sich registrieren und nach Freischaltung seinen eigenen Pflegeanbieter-Eintrag
                    erfassen/
                    bearbeiten und löschen. Gleiches gilt für die Erfassung von Stellenangeboten. Hierfür wird für den
                    Kunden ein
                    passwortgeschützter Login-Bereich eingerichtet. Personenbezogene Daten nach vorstehendem Absatz
                    werden in
                    diesem Kontext auch genutzt, um den Login in den persönlichen Login-Bereich zu ermöglichen. Der
                    Login-Bereich
                    bietet den direkten Zugang zu gespeicherten personenbezogenen Daten und deren Verwaltung durch den
                    Kunden.
                    Zugangsdaten zum Login-Bereich müssen vertraulich behandelt und dürfen nicht an Dritte weitergegeben
                    werden.
                    <br>
                    <br>
                    e) Sonstige Weitergabe von Daten <br>
                    Eine Übermittlung Ihrer personenbezogenen Daten an Dritte zu anderen als den im Folgenden
                    aufgeführten Zwecken
                    findet nicht statt. <br>
                    <br>
                    Wir geben Ihre personenbezogenen Daten nur an Dritte weiter, wenn: <br>
                    <br>
                    – Sie Ihre nach Art. 6 Abs. 1 S. 1 lit. a DSGVO ausdrückliche Einwilligung dazu erteilt haben,
                    – die Weitergabe nach Art. 6 Abs. 1 S. 1 lit. f DSGVO zur Geltendmachung, Ausübung oder Verteidigung
                    von
                    Rechtsansprächen erforderlich ist und kein Grund zur Annahme besteht, dass Sie ein überwiegendes
                    schutzwürdiges Interesse an der Nichtweitergabe Ihrer Daten haben, <br>
                    – für den Fall, dass für die Weitergabe nach Art. 6 Abs. 1 S. 1 lit. c DSGVO eine gesetzliche
                    Verpflichtung
                    besteht, sowie <br>
                    – dies gesetzlich zulässig und nach Art. 6 Abs. 1 S. 1 lit. b DSGVO f¸r die Abwicklung von
                    Vertragsverhältnissen mit Ihnen erforderlich ist
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">5. Cookies</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Wie viele andere Websites benutzen auch wir „Cookies“, kleine Textdateien, die es ermöglichen, auf
                    dem
                    Zugriffsgerät des Nutzers (PC, Tablet, Smartphone) spezifische, auf das Gerät bezogene Informationen
                    zu
                    speichern. Sie dienen zum einen der Benutzerfreundlichkeit unserer Website und damit dem Nutzer, zum
                    anderen
                    aber auch der statistischen Erfassung der Daten der Webseitennutzung und damit der Verbesserung
                    unseres
                    Angebotes. Einige der von uns verwendeten Cookies werden nach Ende der Browser-Sitzung, also nach
                    Schließen
                    Ihres Browsers, wieder gelöscht, sog. Sitzungs-Cookies. Andere Cookies verbleiben auf Ihrem Endgerät
                    und
                    ermöglichen uns, Ihren Browser beim nächsten Besuch wiederzuerkennen, persistente Cookies. <br>
                    Als Nutzer können Sie auf den Einsatz von Cookies Einfluss nehmen. Die meisten Browser verfügen über
                    eine
                    Option, mit der das Speichern von Cookies reduziert oder komplett verhindert werden kann. Allerdings
                    weisen
                    wir darauf hin, dass die Nutzung und der Nutzungskomfort auf unserer Website durch das Ausschließen
                    von
                    Cookies eingeschränkt werden können. <br>
                    Detailinformationen über Cookies, z.B. wie Sie feststellen können, welche Cookies gesetzt wurden und
                    wie Sie
                    damit umgehen und sie löschen können, finden Sie auf folgender Seite:
                    http://www.allaboutcookies.org/ge/
                    Rechtsgrundlage für die Datenverarbeitung, d.h. für die Nutzung von sog. Cookies, ist Art. 6 Abs. 1
                    S. 1 lit.
                    f DSGVO. Unser berechtigtes Interesse folgt aus unserem Interesse an der Benutzerfreundlichkeit
                    unserer
                    Website und an der Verbesserung unseres Angebotes.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">6. Link zu Facebook</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Unsere Website enthält einen Link zum sozialen Netzwerk facebook.com, welches von der Facebook Inc.,
                    1601 S.
                    California Ave, Palo Alto, CA 94304, USA betrieben wird. Beim Besuch unserer Website werden keine
                    Daten an
                    Facebook übertragen, da keine Plug-Ins von Facebook eingebunden sind. Bei einem Klick auf den
                    Facebook-Button
                    gelangen Sie jedoch zu Facebook, wo Daten durch Facebook erhoben werden. Wir haben keinen Einfluss
                    auf den
                    Umfang der Daten, die Facebook erhebt. <br>
                    Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook
                    sowie
                    Ihre diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz Ihrer Privatsphäre entnehmen
                    Sie bitte
                    der Datenrichtlinie von Facebook, die Sie unter dem folgenden Link erreichen:
                    https://www.de-de.facebook.com/about/privacy/. <br>
                    Wenn Sie bei Facebook Mitglied sind und nicht möchten, dass Facebook weitere Daten über Sie sammelt
                    und mit
                    Ihren bei Facebook gespeicherten Mitgliedsdaten verknüpft, können Sie sich vor dem Klick auf den
                    Facebook-Button bei Facebook ausloggen.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">7. Links zu Webauftritten Dritter</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret" class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Unsere Webseiten enthalten Links zu Webauftritten Dritter. Die Einhaltung des Datenschutzes auf
                    diesen fremden
                    Webseiten liegt außerhalb unseres Einfluss- und Verantwortungsbereiches. Bitte informieren Sie sich
                    gegebenenfalls auf den verlinkten Webseiten über die dort mitgeteilten Datenschutzinformationen.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">8. Google Web Fonts</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Web Fonts, die von
                    Google
                    bereitgestellt werden. Beim Aufruf einer Seite lädt Ihr Browser die benötigten Web Fonts in ihren
                    Browsercache, um Texte und Schriftarten korrekt anzuzeigen. <br>
                    Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern von Google
                    aufnehmen.
                    Hierdurch erlangt Google Kenntnis darüber, dass über Ihre IP-Adresse unsere Website aufgerufen
                    wurde. Die
                    Nutzung von Google Web Fonts erfolgt im Interesse einer einheitlichen und ansprechenden Darstellung
                    unserer
                    Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.
                    <br>
                    Wenn Ihr Browser Web Fonts nicht unterstützt, wird eine Standardschrift von Ihrem Computer genutzt.
                    Weitere Informationen zu Google Web Fonts finden Sie unter
                    https://www.developers.google.com/fonts/faq und in
                    der
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">9. Einbindung von umap/OpenStreetMap</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Wir verwenden auf unserer Webseite einen Kartenausschnitt von Umap
                    (https://umap.openstreetmap.fr/de), um für
                    Sie den Anfahrtsweg zu unserer Organisation oder unseren Veranstaltungen darzustellen und Ihnen die
                    Planung
                    der Anfahrt zu vereinfachen. <br>
                    <br>
                    Bei Umap handelt es sich um ein Open-Source-Mapping-Werkzeug, welches auf Basis des französischen
                    Angebots von
                    OpenStreetMap (https://openstreetmap.fr) funktioniert. Damit Ihnen die Karte angezeigt werden kann,
                    wird Ihre
                    IP-Adresse an OpenStreetMap weitergeleitet. Wie OpenStreetMap Ihre Daten speichert, können Sie auf
                    der
                    Datenschutzseite von OpenStreetMap hier wiki.openstreetmap.org/wiki/DE:Datenschutz und hier
                    wiki.openstreetmap.org/wiki/DE:Legal_FAQ einsehen. <br>
                    <br>
                    Anbieter von OpenStreetMap ist die Openstreetmap Foundation: <br>
                    Openstreetmap Foundation <br>
                    132 Maney Hill Road <br>
                    Sutton Coldfield <br>
                    West Midlands <br>
                    B72 1JU <br>
                    United Kingdom <br>
                    <br>
                    Wir stützen den Einsatz der vorgenannten Tools auf Art. 6 Abs. 1 Buchst. f) DSGVO: die
                    Datenverarbeitung
                    erfolgt zur Verbesserung der Nutzerfreundlichkeit auf unserer Webseite und liegt daher in unserem
                    berechtigten
                    Interesse.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">10. Einsatz von Google AdSense</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Diese Website verwendet den Online-Werbedienst Google AdSense, durch den Ihnen auf Ihre Interessen
                    ausgelegte
                    Werbung präsentiert werden kann. Wir verfolgen damit das Interesse, Ihnen Werbung anzuzeigen, die
                    für Sie von
                    Interesse sein könnte, um unsere Website für Sie interessanter zu gestalten. Hierzu werden
                    statistische
                    Informationen über Sie erfasst, die durch unsere Werbepartner verarbeitet werden. Diese
                    Werbeanzeigen sind
                    über den Hinweis „Google-Anzeigen“ in der jeweiligen Anzeige erkennbar. <br>
                    <br>
                    Durch den Besuch unserer Website erhält Google die Information, dass Sie unsere Website aufgerufen
                    haben. Dazu
                    nutzt Google einen Web Beacon, um einen Cookie auf Ihrem Rechner zu setzen. Es werden die unter § 3
                    dieser
                    Erklärung genannten Daten übermittelt. Wir haben weder Einfluss auf die erhobenen Daten, noch ist
                    uns der
                    volle Umfang der Datenerhebung und die Speicherdauer bekannt. Ihre Daten werden in die USA
                    übertragen und dort
                    ausgewertet. Wenn Sie mit Ihrem Google-Account eingeloggt sind, können Ihre Daten diesem direkt
                    zugeordnet
                    werden. Wenn Sie die Zuordnung mit Ihrem Google-Profil nicht wünschen, müssen Sie sich ausloggen. Es
                    ist
                    möglich, dass diese Daten an Vertragspartner von Google an Dritte und Behörden weitergegeben werden.
                    Rechtsgrundlage für die Verarbeitung Ihrer Daten ist Art. 6 Abs. 1 S. 1 lit. f DS-GVO. Diese Website
                    schaltet
                    über Google AdSense keine Anzeigen von Drittanbietern. <br>
                    <br>
                    Sie können die Installation der Cookies von Google AdSense auf verschiedene Weise verhindern: a)
                    durch eine
                    entsprechende Einstellung Ihrer Browser-Software, insbesondere führt die Unterdrückung von
                    Drittcookies dazu,
                    dass Sie keine Anzeigen von Drittanbietern erhalten; b) durch Deaktivierung der interessenbezogenen
                    Anzeigen
                    bei Google über den Link www.google.de/ads/preferences, wobei diese Einstellung gelöscht wird, wenn
                    Sie Ihre
                    Cookies löschen; c) durch Deaktivierung der interessenbezogenen Anzeigen der Anbieter, die Teil der
                    Selbstregulierungs-Kampagne „About Ads“ sind, über den Link www.aboutads.info/choices, wobei diese
                    Einstellung
                    gelöscht wird, wenn Sie Ihre Cookies löschen; d) durch dauerhafte Deaktivierung in Ihren Browsern
                    Firefox,
                    Internetexplorer oder Google Chrome unter dem Link www.google.com/settings/ads/plugin. Wir weisen
                    Sie darauf
                    hin, dass Sie in diesem Fall gegebenenfalls nicht alle Funktionen dieses Angebots vollumfänglich
                    nutzen
                    können.
                    Weitere Informationen zu Zweck und Umfang der Datenerhebung und ihrer Verarbeitung sowie weitere
                    Informationen
                    zu Ihren diesbezüglichen Rechten und Einstellungsmöglichkeiten zum Schutze Ihrer Privatsphäre
                    erhalten Sie
                    bei: Google Inc., 1600 Amphitheater Parkway, Mountainview, California 94043, USA;
                    Datenschutzbedingungen für
                    Werbung: www.google.de/intl/de/policies/technologies/ads. Google hat sich dem EU-US Privacy Shield
                    unterworfen, www.privacyshield.gov/EU-US-Framework.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">11. Einsatz von AdCell</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite Komponenten von Adcell
                    integriert.
                    Adcell ist ein deutsches Affiliate-Netzwerk, welches Affiliate-Marketing anbietet.
                    Affiliate-Marketing ist
                    eine internetgestützte Vertriebsform, die es kommerziellen Betreibern von Internetseiten, den
                    sogenannten
                    Merchants oder Advertisern, ermöglicht, Werbung, die meist über Klick- oder Sale-Provisionen
                    vergütet wird,
                    auf Internetseiten Dritter, also bei Vertriebspartnern, die auch Affiliates oder Publisher genannt
                    werden,
                    einzublenden. Der Merchant stellt über das Affiliate-Netzwerk ein Werbemittel, also einen
                    Werbebanner oder
                    andere geeignete Mittel der Internetwerbung, zur Verfügung, welche in der Folge von einem Affiliate
                    auf
                    eigenen Internetseiten eingebunden oder über sonstige Kanäle, wie etwa das Keyword-Advertising oder
                    E-Mail-Marketing, beworben werden. <br>
                    <br>
                    Betreibergesellschaft von Adcell ist die Firstlead GmbH, Rosenfelder Str. 15-16, 10315 Berlin,
                    Deutschland.
                    <br>
                    <br>
                    Adcell setzt ein Cookie auf dem informationstechnologischen System der betroffenen Person. Was
                    Cookies sind,
                    wurde oben bereits erläutert. Der Tracking-Cookie von Adcell speichert keinerlei personenbezogene
                    Daten.
                    Gespeichert werden lediglich die Identifikationsnummer des Affiliate, also des den potentiellen
                    Kunden
                    vermittelnden Partners, sowie die Ordnungsnummer des Besuchers einer Internetseite und des
                    angeklickten
                    Werbemittels. Zweck der Speicherung dieser Daten ist die Abwicklung von Provisionszahlungen zwischen
                    einem
                    Merchant und dem Affiliate, welche über das Affiliate-Netzwerk, also Adcell, abgewickelt werden.
                    <br>
                    <br>
                    Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite, wie oben bereits
                    dargestellt,
                    jederzeit mittels einer entsprechenden Einstellung des genutzten Internetbrowsers verhindern und
                    damit der
                    Setzung von Cookies dauerhaft widersprechen. Eine solche Einstellung des genutzten Internetbrowsers
                    würde auch
                    verhindern, dass Adcell ein Cookie auf dem informationstechnologischen System der betroffenen Person
                    setzt.
                    Zudem können von Adcell bereits gesetzte Cookies jederzeit über einen Internetbrowser oder andere
                    Softwareprogramme gelöscht werden. <br>
                    <br>
                    Die geltenden Datenschutzbestimmungen von Adcell können unter https://www.adcell.de/agb abgerufen
                    werden. <br>
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">12. Einsatz von Matomo</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Sie haben die Möglichkeit zu verhindern, dass von Ihnen hier getätigte Aktionen analysiert und
                    verknüpft
                    werden. Dies wird Ihre Privatsphäre schützen, aber wird auch den Besitzer daran hindern, aus Ihren
                    Aktionen zu
                    lernen und die Bedienbarkeit für Sie und andere Benutzer zu verbessern.
                    <br><br>
                    <div class="checklisten-checkbox-container">
                        <label>
                            <input type="checkbox" checked />
                            <span class="custom-checkbox"></span>
                        </label>
                        <div class="checklisten-checkbox-data">
                            <strong>Ihr Besuch dieser Webseite wird aktuell von der Matomo Webanalyse erfasst. Diese
                                Checkbox abwählen
                                für Opt-Out.</strong>
                        </div>
                    </div>
                    <br>
                    Mit Ihrer Einwilligung verwenden wir die Open-Source-Software Matomo zur Analyse und statistischen
                    Auswertung
                    der Nutzung der Website. Hierzu werden von uns keine Cookies eingesetzt. <br>
                    <br>
                    Die IP-Adressen der Besucher werden anonymisiert (IPMasking), sodass eine Zuordnung zu einzelnen
                    Nutzern nicht
                    möglich ist. <br>
                    <br>
                    Die Benutzer ID wird durch ein Pseudonym ersetzt, um zu verhindern, dass persönlich identifizierbare
                    Informationen direkt gespeichert oder angezeigt werden. In technischer Beschreibung: Matomo
                    pseudonymisiert
                    die Benutzer ID mit Hilfe einer salted hash Funktion. <br>
                    <br>
                    Opt-In / Opt-Out: Sie haben die Möglichkeit durch Klicken auf die nachstehende Checkbox zu
                    verhindern, dass
                    von Ihnen hier getätigte Aktionen analysiert und verknüpft werden. Dies wird Ihre Privatsphäre
                    schützen, aber
                    wird auch den Besitzer daran hindern, aus Ihren Aktionen zu lernen und die Bedienbarkeit für Sie und
                    andere
                    Benutzer zu verbessern. <br>
                    <br>
                    Die Verarbeitung der Daten erfolgt auf Grundlage von Art. 6 Abs. 1 S. 1 lit. a DSGVO. Wir verfolgen
                    damit
                    unser berechtigtes Interesse an der Optimierung unserer Webseite für unsere Außendarstellung. <br>
                    <br>
                    Sie können Ihre Einwilligung jederzeit widerrufen, indem Sie die Cookies in Ihrem Browser löschen
                    oder Ihre
                    Datenschutzeinstellungen ändern.


                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">13. Newsletter</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    <br>
                    <strong>Newsletterdaten</strong>
                    <br><br>
                    Wenn Sie den auf der Website angebotenen Newsletter beziehen möchten, benötigen wir von Ihnen eine
                    E-Mail-Adresse sowie Informationen, welche uns die Überprüfung gestatten, dass Sie der Inhaber der
                    angegebenen
                    E-Mail-Adresse sind und mit dem Empfang des Newsletters einverstanden sind. Weitere Daten werden
                    nicht bzw.
                    nur auf freiwilliger Basis erhoben. Diese Daten verwenden wir ausschließlich für den Versand der
                    angeforderten
                    Informationen und geben diese nicht an Dritte weiter. <br>
                    <br>
                    Die Verarbeitung der in das Newsletteranmeldeformular eingegebenen Daten erfolgt ausschließlich auf
                    Grundlage
                    Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Die erteilte Einwilligung zur Speicherung der
                    Daten, der
                    E-Mail-Adresse sowie deren Nutzung zum Versand des Newsletters können Sie jederzeit widerrufen, etwa
                    über den
                    „Austragen“-Link im Newsletter. Die Rechtmäßigkeit der bereits erfolgten Datenverarbeitungsvorgänge
                    bleibt vom
                    Widerruf unberührt. <br>
                    <br>
                    Die von Ihnen zum Zwecke des Newsletter-Bezugs bei uns hinterlegten Daten werden von uns bis zu
                    Ihrer
                    Austragung aus dem Newsletter bei uns bzw. dem Newsletterdiensteanbieter gespeichert und nach der
                    Abbestellung
                    des Newsletters aus der Newsletterverteilerliste gelöscht. Daten, die zu anderen Zwecken bei uns
                    gespeichert
                    wurden bleiben hiervon unberührt. <br>
                    <br>
                    Nach Ihrer Austragung aus der Newsletterverteilerliste wird Ihre E-Mail-Adresse bei uns bzw. dem
                    Newsletterdiensteanbieter ggf. in einer Blacklist gespeichert, um künftige Mailings zu verhindern.
                    Die Daten
                    aus der Blacklist werden nur für diesen Zweck verwendet und nicht mit anderen Daten zusammengeführt.
                    Dies
                    dient sowohl Ihrem Interesse als auch unserem Interesse an der Einhaltung der gesetzlichen Vorgaben
                    beim
                    Versand von Newslettern (berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO). Die
                    Speicherung in
                    der Blacklist ist zeitlich nicht befristet. Sie können der Speicherung widersprechen, sofern Ihre
                    Interessen
                    unser berechtigtes Interesse überwiegen. <br>
                    <br>
                    <strong>Brevo</strong> <br> <br>
                    Diese Website nutzt Brevo für den Versand von Newslettern. Anbieter ist die Sendinblue GmbH,
                    Köpenicker Straße
                    126, 10179 Berlin. <br>
                    <br>
                    Brevo ist ein Dienst, mit dem u.a. der Versand von Newslettern organisiert und analysiert werden
                    kann. Die von
                    Ihnen zum Zwecke des Newsletterbezugs eingegeben Daten werden auf den Servern von Brevo in
                    Deutschland
                    gespeichert. Wenn Sie keine Analyse durch Brevo wollen, müssen Sie den Newsletter abbestellen.
                    Hierfür stellen
                    wir in jeder Newsletternachricht einen entsprechenden Link zur Verfügung. Des Weiteren können Sie
                    den
                    Newsletter auch direkt auf der Website abbestellen. <br>
                    <br>
                    <strong>Datenanalyse durch Brevo</strong> <br> <br>
                    Mit Hilfe von Brevo ist es uns möglich, unsere Newsletter-Kampagnen zu analysieren. So können wir
                    z.B. sehen,
                    ob eine Newsletter-Nachricht geöffnet wurde und welche Links ggf. angeklickt wurden. Auf diese Weise
                    können
                    wir u.a. feststellen, welche Links besonders oft angeklickt wurden. <br>
                    <br>
                    Außerdem können wir erkennen, ob nach dem Öffnen/ Anklicken bestimmte vorher definierte Aktionen
                    durchgeführt
                    wurden (Conversion-Rate). Wir können so z.B. erkennen, ob Sie nach dem Anklicken des Newsletters
                    einen Kauf
                    getätigt haben. <br>
                    <br>
                    Brevo ermöglicht es uns auch, die Newsletter-Empfänger anhand verschiedener Kategorien zu
                    unterteilen
                    („clustern“). Dabei lassen sich die Newsletterempfänger z.B. nach Alter, Geschlecht oder Wohnort
                    unterteilen.
                    Auf diese Weise lassen sich die Newsletter besser an die jeweiligen Zielgruppen anpassen. <br>
                    <br>
                    Ausführliche Informationen zu den Funktionen von Brevo entnehmen Sie folgendem Link: <a
                        style="color: rgb(178, 34, 34);" href="https://www.brevo.com/de"
                        target="_blank">https://www.brevo.com/de</a> <br>
                    <br>
                    Die Datenschutzerklärung von Brevo finden Sie unter: <a style="color: rgb(178, 34, 34);"
                        href="https://www.brevo.de/sicherheit-datenschutz"
                        target="_blank">https://www.brevo.de/sicherheit-datenschutz </a> <br>
                    <br>
                    <strong>Rechtsgrundlage</strong> <br><br>
                    Die Datenverarbeitung erfolgt auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Sie
                    können diese
                    Einwilligung jederzeit widerrufen. Die Rechtmäßigkeit der bereits erfolgten
                    Datenverarbeitungsvorgänge bleibt
                    vom Widerruf unberührt. <br>
                    <br>
                    <strong>Speicherdauer</strong> <br><br>
                    Die von Ihnen zum Zwecke des Newsletter-Bezugs bei uns hinterlegten Daten werden von uns bis zu
                    Ihrer
                    Austragung aus dem Newsletter bei uns bzw. dem Newsletterdiensteanbieter gespeichert und nach der
                    Abbestellung
                    des Newsletters aus der Newsletterverteilerliste gelöscht. Daten, die zu anderen Zwecken bei uns
                    gespeichert
                    wurden bleiben hiervon unberührt. <br>
                    <br>
                    Nach Ihrer Austragung aus der Newsletterverteilerliste wird Ihre E-Mail-Adresse bei uns bzw. dem
                    Newsletterdiensteanbieter ggf. in einer Blacklist gespeichert, um künftige Mailings zu verhindern.
                    Die Daten
                    aus der Blacklist werden nur für diesen Zweck verwendet und nicht mit anderen Daten zusammengeführt.
                    Dies
                    dient sowohl Ihrem Interesse als auch unserem Interesse an der Einhaltung der gesetzlichen Vorgaben
                    beim
                    Versand von Newslettern (berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO). Die
                    Speicherung in
                    der Blacklist ist zeitlich nicht befristet. Sie können der Speicherung widersprechen, sofern Ihre
                    Interessen
                    unser berechtigtes Interesse überwiegen. <br>
                    <br>
                    <strong>Abschluss eines Vertrags über Auftragsverarbeitung </strong>
                    <br><br>
                    Wir haben mit Brevo einen Vertrag zur Auftragsverarbeitung abgeschlossen und setzen die strengen
                    Vorgaben der
                    deutschen Datenschutzbehörden bei der Nutzung von Brevo vollständig um.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">14. Amazon-Partnerprogramm</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    In unserem Internetauftritt setzen wir das AMAZON-Partnerprogramm ein. Es handelt sich hierbei um
                    einen Dienst
                    der Amazon Europe Core S.à r.l., 5 Rue Plaetis, L -2338 Luxemburg. Über das AMAZON-Partnerprogramm
                    werden in
                    unserem Internetauftritt Werbeanzeigen von Amazon.de platziert. Klicken Sie auf eine dieser
                    Werbeanzeigen,
                    werden Sie zu dem damit korrespondierenden Angebot auf dem AMZON-Internetportal weitergeleitet.
                    Sofern Sie
                    sich dort anschließend für den Kauf des beworbenen Produkts entscheiden, erhalten wir hierfür eine
                    „Vermittlungsprovision“ von Amazon. <br>
                    <br>
                    Damit dieser Dienst ermöglicht werden kann, setzt Amazon Cookies ein. Mit Hilfe dieser Cookies kann
                    Amazon
                    nachvollziehen, dass Sie von unserem Internetauftritt auf das AMAZON- Internetportal weitergeleitet
                    worden
                    sind. <br>
                    <br>
                    Amazon bietet unter <br>
                    <br>
                    <a href="https://www.amazon.de/gp/help/customer/display.html?nodeId=201909010" target="_blank"
                        style="color:rgb(178, 34, 34);">https://www.amazon.de/gp/help/customer/display.html?nodeId=201909010</a>
                    <br>
                    <br>
                    weitergehende Datenschutzinformationen an. <br>
                    <br>
                    Im Falle einer von Ihnen erteilten Einwilligung für diese Verarbeitung ist Rechtsgrundlage Art. 6
                    Abs. 1 lit.
                    a DSGVO. Rechtsgrundlage kann auch Art. 6 Abs. 1 lit. f DSGVO sein. Unser berechtigtes Interesse
                    liegt in der
                    Gewährleistung der Abwicklung und Auszahlung unserer Provisionsansprüche durch Amazon. <br>
                    <br>
                    Falls Sie mit dieser Verarbeitung nicht einverstanden sind, haben Sie die Möglichkeit, die
                    Speicherung der
                    Cookies durch eine Einstellung in Ihrem Internet-Browsers zu verhindern. Nähere Informationen hierzu
                    finden
                    Sie vorstehend unter dem Abschnitt "5. Cookies". <br>
                    <br>
                    Quelle für den Abschnitt "14. Amazon-Partnerprogramm": <a
                        href="https://www.xn--generator-datenschutzerklrung-pqc.de/" target="_blank"
                        style="color: rgb(178, 34, 34);">Muster-Datenschutzerklärung</a> der <a
                        href="https://www.ratgeberrecht.eu/datenschutz/datenschutzerklaerung-generator-dsgvo.html"
                        target="_blank" style="color: rgb(178, 34, 34);">Anwaltskanzlei Weiß & Partner</a>
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">15. Betroffenenrechte</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    <br>
                    Sie haben das Recht: <br>
                    <br>
                    – gemäß Art. 15 DSGVO Auskunft ¸ber Ihre von uns verarbeiteten personenbezogenen Daten zu verlangen.
                    Insbesondere können Sie Auskunft über die Verarbeitungszwecke, die Kategorie der personenbezogenen
                    Daten, die
                    Kategorien von Empfängern, gegenüber denen Ihre Daten offengelegt wurden oder werden, die geplante
                    Speicherdauer, das Bestehen eines Rechts auf Berichtigung, Löschung, Einschränkung der Verarbeitung
                    oder
                    Widerspruch, das Bestehen eines Beschwerderechts, die Herkunft ihrer Daten, sofern diese nicht bei
                    uns erhoben
                    wurden, sowie über das Bestehen einer automatisierten Entscheidungsfindung einschließlich Profiling
                    und ggf.
                    aussagekräftigen Informationen zu deren Einzelheiten verlangen; <br>
                    – gemäß Art. 16 DSGVO unverzüglich die Berichtigung unrichtiger oder Vervollständigung Ihrer bei uns
                    gespeicherten personenbezogenen Daten zu verlangen;
                    – gemäß Art. 17 DSGVO die Löschung Ihrer bei uns gespeicherten personenbezogenen Daten zu verlangen,
                    soweit
                    nicht die Verarbeitung zur Ausübung des Rechts auf freie Meinungsäußerung und Information, zur
                    Erfüllung einer
                    rechtlichen Verpflichtung, aus Gründen des öffentlichen Interesses oder zur Geltendmachung, Ausübung
                    oder
                    Verteidigung von Rechtsansprüchen erforderlich ist;
                    – gemäß Art. 18 DSGVO die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen,
                    soweit
                    die Richtigkeit der Daten von Ihnen bestritten wird, die Verarbeitung unrechtmäßig ist, Sie aber
                    deren
                    Löschung ablehnen und wir die Daten nicht mehr benötigen, Sie jedoch diese zur Geltendmachung,
                    Ausübung oder
                    Verteidigung von Rechtsansprüchen benötigen oder Sie gemäß Art. 21 DSGVO Widerspruch gegen die
                    Verarbeitung
                    eingelegt haben; <br>
                    – gemäß Art. 20 DSGVO Ihre personenbezogenen Daten, die Sie uns bereitgestellt haben, in einem
                    strukturierten,
                    gängigen und maschinenlesebaren Format zu erhalten oder die Übermittlung an einen anderen
                    Verantwortlichen zu
                    verlangen; <br>
                    – gemäß Art. 7 Abs. 3 DSGVO Ihre einmal erteilte Einwilligung jederzeit gegenüber uns zu widerrufen.
                    Dies hat
                    zur Folge, dass wir die Datenverarbeitung, die auf dieser Einwilligung beruhte, für die Zukunft
                    nicht mehr
                    fortführen dürfen und <br>
                    – gemäß Art. 77 DSGVO sich unbeschadet eines anderweitigen verwaltungsrechtlichen oder gerichtlichen
                    Rechtsbehelfs bei einer Aufsichtsbehörde zu beschweren, insbesondere in dem Mitgliedstaat Ihres
                    gewöhnlichen
                    Aufenthaltsorts, Ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes. Eine Liste der
                    Aufsichtsbehörden mit den jeweiligen Kontaktdaten können folgendem Link entnommen werden: <br>
                    <br>

                    https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">16. Widerspruchsrecht</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Sofern Ihre personenbezogenen Daten auf Grundlage von berechtigten Interessen gemäß Art. 6 Abs. 1 S.
                    1 lit. f
                    DSGVO verarbeitet werden, haben Sie das Recht, gemäß Art. 21 DSGVO Widerspruch gegen die
                    Verarbeitung Ihrer
                    personenbezogenen Daten einzulegen, soweit dafür Gründe vorliegen, die sich aus Ihrer besonderen
                    Situation
                    ergeben oder sich der Widerspruch gegen Direktwerbung richtet. Im letzteren Fall haben Sie ein
                    generelles
                    Widerspruchsrecht, das ohne Angabe einer besonderen Situation von uns umgesetzt wird. <br>
                    Möchten Sie von Ihrem Widerrufs- oder Widerspruchsrecht Gebrauch machen, genügt eine E-Mail an
                    info@pflegepur.de. Weiterhin können Sie Ihre Daten über den Loginbereich löschen lassen.
                </div>
            </div>
            <div class="impressum-section1-accordion1">
                <div class="impressum-accordion1-top-div">
                    <div class="impressum-accordion1-heading ">17. Datensicherheit</div>
                    <img src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="caret"
                        class="accordion-icon ">
                </div>
                <div class="impressum-accordion1-bottom-div ">
                    Unsere Website nutzt aus Gründen der Sicherheit eine SSL (Secure Socket Layer) -Verschlüsselung. Ob
                    eine
                    einzelne Seite unseres Internetauftrittes verschlüsselt übertragen wird, erkennen Sie daran, dass
                    die
                    Adresszeile des Browsers von „http://“ auf „https://“ wechselt und an der geschlossenen Darstellung
                    des
                    Schüssel- beziehungsweise Schloss-Symbols in der Statusleiste Ihres Browsers.
                    Des Weiteren bedienen wir uns geeigneter technischer und organisatorischer Sicherheitsmaßnahmen, um
                    Ihre Daten
                    gegen zufällige oder vorsätzliche Manipulationen, teilweisen oder vollständigen Verlust, Zerstörung
                    oder gegen
                    den unbefugten Zugriff Dritter zu schützen. Unsere Sicherheitsmaßnahmen werden entsprechend der
                    technologischen Entwicklung fortlaufend verbessert.
                </div>
            </div>





        </div>



    </div>
    </div>
    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Impressum_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>

</html>
