<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<style>
  /* Media query for printing */
  @media print {
      .checklisten-section3-btn{
          display: none;
      }
      /* Hide the entire checkbox container if the checkbox is unchecked */
      .checklisten-checkbox-container input[type="checkbox"]:not(:checked) {
          display: none; /* Hide the checkbox */
      }
  
      /* Hide the title/heading (checklisten-section3-wrapper-heading) when the checkbox is unchecked */
      .checklisten-checkbox-container input[type="checkbox"]:not(:checked) 
          ~ .checklisten-section3-wrapper-heading {
          display: none; /* Hide the corresponding title/heading */
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
        <button class="checklisten-section2-top-btn3 checklisten-top-btn" id="checklisten-top-btn3">
            <a href="{{ route('checklist.2') }}"></a>
            HÄUSLICHE PFLEGE UND UNTERSTÜTZUNG
        </button>
        <button class="checklisten-section2-top-btn4 checklisten-top-btn " id="checklisten-top-btn4">
          <a href="{{route('checklist.3')}}"></a>
          PSYCHISCHE UND SOZIALE UNTERSTÜTZUNG
        </button>
        <button class="checklisten-section2-top-btn5 checklisten-top-btn" id="checklisten-top-btn5 ">
          <a href="{{route('checklist.4')}}"></a>
          FINANZIELLE UND RECHTLICHE ANGELEGENHEITEN
        </button>
        <button class="checklisten-section2-top-btn6 checklisten-top-btn  active-btn" id="checklisten-top-btn6">
          <a href="{{route('checklist.5')}}"></a>
          NOTFALLVORBEREITUNG
        </button>
        <button class="checklisten-section2-top-btn7 checklisten-top-btn" id="checklisten-top-btn7">
          <a href="{{route('checklist.6')}}"></a>
          GESUNDHEITSÜBERWACHUNG
        </button>
    </div>

    <div
    class="checklisten-section2-bottom-btn-container"
    id="checklisten-bottom-container6"
  >
    <button
      class="checklisten-section2-bottom-btn61 check-bottom-btns check-active-btn"
      id="checklisten-bottom-btn61"
    >
      Notfallkontakte und -informationen
    </button>
    <button
      class="checklisten-section2-bottom-btn62 check-bottom-btns"
      id="checklisten-bottom-btn62"
    >
      Erste-Hilfe-Maßnahmen und -Sets
    </button>
    <button
      class="checklisten-section2-bottom-btn63 check-bottom-btns"
      id="checklisten-bottom-btn63"
    >
      Notfallplan und Evakuierungswege
    </button>
  </div>


    <form action="" class="check-listen-forms" id="notf-form1">
        <div class="checklisten-section3-container">
          <div class="checklisten-section3-top1">
            Checkliste Notfallkontakte und -informationen
          </div>
  
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                1. Erstellung einer Notfallkontaktliste
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Liste der wichtigsten Notfallkontakte erstellen (Familie,
                  Freunde, Nachbarn)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Telefonnummern, E-Mail-Adressen und physische Adressen der
                  Notfallkontakte notieren
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kontaktinformationen für den Hausarzt und Spezialisten einfügen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfallkontakte nach Priorität ordnen (z.B. zuerst zu
                  verständigen)
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                2. Medizinische Notfallinformationen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Liste der aktuellen Medikamente und Dosierungen erstellen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Alle bekannten Allergien und Unverträglichkeiten notieren
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Informationen zu bestehenden medizinischen Bedingungen und
                  Diagnosen hinzufügen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Blutgruppe und Impfstatus vermerken
                </div>
              </div>
            </div>
          </div>
  
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                3. Versicherungsinformationen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Krankenversicherungsdaten (Versicherungsgesellschaft,
                  Versicherungsnummer) bereitstellen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Informationen zur Pflegeversicherung und anderen relevanten
                  Versicherungen einfügen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kopien der Versicherungskarten und -dokumente beilegen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                4. Vollmachten und rechtliche Dokumente
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kopien von Vorsorgevollmachten und Patientenverfügungen
                  hinzufügen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kontaktinformationen des Bevollmächtigten (falls vorhanden)
                  einfügen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Informationen zu bestehenden rechtlichen Vertretungen oder
                  Vormundschaften notieren
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                5. Notfallkontakte für Pflegepersonal
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Liste mit Kontakten des betreuenden Pflegepersonals erstellen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Namen, Telefonnummern und Dienstzeiten der Pflegekräfte einfügen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kontaktinformationen von Pflegediensten und Notrufdiensten
                  bereitstellen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                6. Örtliche Notfallnummern
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Telefonnummern von Rettungsdiensten, Polizei und Feuerwehr
                  notieren
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kontaktinformationen der nächstgelegenen Notaufnahme und des
                  Krankenhauses hinzufügen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notrufnummer für den Giftnotruf bereitstellen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                7. Standort der Notfallinformationen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfallkontakte und -informationen in einem leicht zugänglichen
                  Ordner oder einer Mappe aufbewahren
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kopie der Notfallinformationen an einem zentralen Ort im
                  Haushalt aufbewahren (z.B. Kühlschrank, neben dem Telefon)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Elektronische Kopien der Notfallinformationen auf dem Smartphone
                  oder Computer speichern
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                8. Information an relevante Personen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Sicherstellen, dass alle relevanten Personen (Familie,
                  Pflegepersonal, Nachbarn) wissen, wo die Notfallinformationen
                  aufbewahrt werden
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfallkontakte regelmäßig über Aktualisierungen und Änderungen
                  informieren
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                9. Regelmäßige Überprüfung und Aktualisierung
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Jährliche Überprüfung und Aktualisierung der Notfallkontakte und
                  -informationen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Änderungen in medizinischen Bedingungen oder Kontaktdaten sofort
                  einpflegen
                </div>
              </div>
  
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Gültigkeit und Aktualität der rechtlichen Dokumente überprüfen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                10. Training und Notfallübungen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Regelmäßige Notfallübungen mit Familie oder Pflegepersonal
                  durchführen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Schulung der Angehörigen und Pflegekräfte im Umgang mit
                  Notfallsituationen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfallplan für spezifische Risiken (z.B. Sturz, Herzinfarkt)
                  erstellen und kommunizieren
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-bottom">
            Diese Checkliste hilft dabei, im Ernstfall schnell und effektiv zu
            reagieren, indem alle wichtigen Informationen und Kontakte organisiert
            und leicht zugänglich sind.
          </div>
  
          <div class="checklisten-section3-btn" onClick="printDiv('notf-form1')"><button>Drucken</button></div>
        </div>
      </form>
  
      <!-- #################### Erste-Hilfe-Maßnahmen und -Sets form ###################   -->
  
      <form action="" class="check-listen-forms" id="notf-form2">
        <div class="checklisten-section3-container">
          <div class="checklisten-section3-top1">
            Checkliste Erste-Hilfe-Maßnahmen und -Sets
          </div>
  
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                1. Grundausstattung des Erste-Hilfe-Sets
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Sterile Wundauflagen in verschiedenen Größen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Pflaster in unterschiedlichen Formen und Größen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Verbandpäckchen (mittlerer und großer Verband)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Elastische Binden (z.B. Dreiecktuch, Mullbinde)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Desinfektionsmittel für Wunden
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Schere (Verbandschere)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Pinzette (z.B. zum Entfernen von Splittern)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Einmalhandschuhe (am besten mehrere Paare)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Rettungsdecke (Wärmeerhalt)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Mundschutz für die Mund-zu-Mund-Beatmung
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kältekompressen (Sofort-Kältepackungen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Sicherheitsnadeln oder Klebeband zum Fixieren von Verbänden
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                2. Zusätzliche Hilfsmittel
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">Fieberthermometer</div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Blutzuckermessgerät (bei Diabetikern)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Augenspülung oder sterile Kochsalzlösung
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Schmerzmittel (z.B. Paracetamol, Ibuprofen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Antihistaminika (bei allergischen Reaktionen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Medikamente zur persönlichen Notfallversorgung (z.B.
                  Adrenalinpen, Asthma-Spray)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfallnummern und medizinische Informationen (z.B. Allergien,
                  bestehende Erkrankungen)
                </div>
              </div>
            </div>
          </div>
  
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                3. Wartung und Kontrolle des Erste-Hilfe-Sets
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Regelmäßige Überprüfung des Inhalts auf Vollständigkeit
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kontrolle der Verfallsdaten von sterilen Produkten und
                  Medikamenten
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Verbrauchte oder abgelaufene Materialien sofort ersetzen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Erste-Hilfe-Set an einem leicht zugänglichen, bekannten Ort
                  aufbewahren
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                4. Erste-Hilfe-Maßnahmen im Notfall
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Grundlagen der Wundversorgung kennen (Reinigung, Desinfektion,
                  Verband anlegen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Blutungen stillen (Druckverband, Hochlagern)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Bewusstlose Person in stabile Seitenlage bringen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Herz-Lungen-Wiederbelebung (CPR) durchführen können
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Umgang mit Verbrennungen (Kühlen, sterile Abdeckung)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Sofortmaßnahmen bei Knochenbrüchen (Schienen, Ruhigstellen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Maßnahmen bei allergischen Reaktionen (z.B. Antihistaminika,
                  Adrenalinpen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Erkennen und Reagieren auf Schockzustände (Beruhigen, Beine
                  hochlagern)
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                5. Notfallkommunikation
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notrufnummern kennen (z.B. 112 in Europa)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Wichtige Informationen bei einem Notruf weitergeben (Ort, Art
                  des Notfalls, Anzahl der Betroffenen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Erste-Hilfe-Maßnahmen bis zum Eintreffen des Rettungsdienstes
                  fortsetzen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                6. Schulung und regelmäßige Auffrischung
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Teilnahme an einem Erste-Hilfe-Kurs (mindestens alle zwei Jahre)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Spezielle Schulungen für bestimmte Risiken (z.B. Kinder,
                  Herz-Kreislauf-Erkrankungen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Vorbereitung auf Fachprüfungen (z. B. Fasten, besondere
                  Kleidung)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Regelmäßige Übung und Auffrischung der Kenntnisse (z.B. im
                  Rahmen von Übungen oder Online-Kursen)
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                7. Erweiterte Erste-Hilfe-Maßnahmen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Anwendung von Defibrillatoren (AED) kennen und üben
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Umgang mit speziellen Notfallgeräten (z.B. Blutzuckermessgerät,
                  Asthma-Inhalator)
                </div>
              </div>
  
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Beruhigungstechniken und psychologische Erste Hilfe bei Traumata
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                8. Anpassung des Erste-Hilfe-Sets an individuelle Bedürfnisse
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Besondere Bedürfnisse berücksichtigen (z.B. Kinder, ältere
                  Menschen, chronische Erkrankungen)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Zusätzliche Medikamente und Hilfsmittel einfügen, die regelmäßig
                  benötigt werden
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Transportables Erste-Hilfe-Set für unterwegs oder im Auto
                  bereithalten
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-bottom">
            Diese Checkliste hilft dabei, ein gut ausgestattetes Erste-Hilfe-Set
            bereitzuhalten und die notwendigen Maßnahmen im Notfall schnell und
            effektiv zu ergreifen. Regelmäßige Überprüfung und Auffrischung der
            Erste-Hilfe-Kenntnisse sind entscheidend, um im Ernstfall richtig
            reagieren zu können.
          </div>
  
          <div class="checklisten-section3-btn"  onClick="printDiv('notf-form2')"><button>Drucken</button></div>
        </div>
      </form>
  
      <!-- #################### Notfallplan und Evakuierungswege form ###################   -->
  
      <form action="" class="check-listen-forms" id="notf-form3">
        <div class="checklisten-section3-container">
          <div class="checklisten-section3-top1">
            Checkliste Notfallplan und Evakuierungswege
          </div>
  
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                1. Erstellung eines Notfallplans
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Liste möglicher Notfallszenarien erstellen (z.B. Feuer,
                  Naturkatastrophen, medizinische Notfälle)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Für jedes Szenario spezifische Maßnahmen und Verhaltensregeln
                  festlegen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Aufgabenverteilung innerhalb der Familie oder des Haushalts (Wer
                  ruft die Notdienste? Wer kümmert sich um Kinder/Haustiere?)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Einen zentralen Treffpunkt außerhalb des Hauses festlegen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                2. Identifizierung und Markierung von Evakuierungswegen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Haupt- und alternative Evakuierungswege in jedem Raum bestimmen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Sicherstellen, dass alle Türen und Fenster leicht zugänglich und
                  funktionstüchtig sind
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Evakuierungswege frei von Hindernissen halten (keine Möbel oder
                  Gegenstände im Weg)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Evakuierungswege in einem Plan aufzeichnen und in der Nähe von
                  Ausgängen aufhängen
                </div>
              </div>
            </div>
          </div>
  
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                3. Sicherheitsmaßnahmen in den Räumen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Rauchmelder in jedem Raum und auf jedem Stockwerk installieren
                  und regelmäßig testen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kohlenmonoxidmelder installieren und überprüfen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Feuerlöscher an strategisch günstigen Stellen im Haus anbringen
                  (z.B. Küche, Flur)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Erste-Hilfe-Kasten und Notfallausrüstung griffbereit halten
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                4. Evakuierungsübungen und Training
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Regelmäßige Evakuierungsübungen mit der Familie oder dem
                  Haushalt durchführen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Spezielle Übungen für Kinder und ältere Personen einplanen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Schulung im Umgang mit Feuerlöschern und anderen Notfallgeräten
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                5. Notfallkommunikation
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Liste wichtiger Notrufnummern (z.B. Feuerwehr, Polizei,
                  Rettungsdienst) an einem zentralen Ort aufbewahren
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Kontaktinformationen von Familienmitgliedern und Nachbarn
                  bereitstellen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Ein Handy oder Funkgerät für die Kommunikation während eines
                  Notfalls bereithalten
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfallkontakte über den Notfallplan und Treffpunkte informieren
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                6. Vorräte für den Notfall
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfalltasche mit wichtigen Dokumenten, Medikamenten, Wasser und
                  Nahrung vorbereiten
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Wechselkleidung und wettergerechte Ausrüstung in der
                  Notfalltasche bereithalten
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Taschenlampe, Batterien und weitere Notfallausrüstung in der
                  Nähe der Evakuierungswege lagern
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                7. Besondere Bedürfnisse berücksichtigen
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Maßnahmen für Menschen mit Behinderungen oder eingeschränkter
                  Mobilität planen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Evakuierung von Haustieren im Notfall einplanen (Transportboxen,
                  Futter)
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Besondere medizinische Ausrüstung griffbereit halten (z.B.
                  Sauerstoff, Rollstuhl)
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                8. Information und Schulung
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notfallplan mit allen Haushaltsmitgliedern besprechen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Regelmäßige Auffrischung und Aktualisierung des Notfallwissens
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Informationsveranstaltungen oder Schulungen zu Notfallvorsorge
                  und Evakuierung besuchen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                9. Regelmäßige Überprüfung und Aktualisierung des Notfallplans
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Jährliche Überprüfung und Anpassung des Notfallplans
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Änderungen in der Haushaltsstruktur (z.B. neue Mitglieder,
                  Umzüge) berücksichtigen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Aktualisierung der Kontaktlisten und Notfallvorräte
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-sub-container">
            <div class="checklisten-section3-wrapper">
              <div class="checklisten-section3-wrapper-heading">
                10. Nachbereitung eines Notfalls
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Nach einem Notfall eine Auswertung der Evakuierung und der
                  getroffenen Maßnahmen durchführen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Notwendige Verbesserungen und Anpassungen im Notfallplan
                  vornehmen
                </div>
              </div>
              <div class="checklisten-checkbox-container">
                <label>
                  <input type="checkbox" />
                  <span class="custom-checkbox"></span>
                </label>
                <div class="checklisten-checkbox-data">
                  Psychologische Unterstützung für Betroffene in Erwägung ziehen
                </div>
              </div>
            </div>
          </div>
          <div class="checklisten-section3-bottom">
            Diese Checkliste hilft dabei, auf Notfälle vorbereitet zu sein und im
            Ernstfall schnell und sicher zu handeln. Eine gute Planung und
            regelmäßige Übungen können das Risiko minimieren und die Sicherheit
            aller Haushaltsmitglieder gewährleisten.
          </div>
  
          <div class="checklisten-section3-btn"  onClick="printDiv('notf-form3')"><button>Drucken</button></div>
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
            const checkboxes = document.querySelectorAll('.checklisten-checkbox-container');

            // Loop through each checkbox container
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
