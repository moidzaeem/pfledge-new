<!DOCTYPE html>
<html lang="en">
    @include('components.header.head')

  <body>
    <div
      class="header-container service-header-bg"
      style="background-image: url('{{asset('assets/Images/Bucher_header_bg.svg')}}') !important"
    >
    @include('components.header.header')


      <div class="service-header-content">
        <span>Literatur zum Thema Pflege und Gesundheit</span>
        <div>Bücher</div>
      </div>
    </div>

    <!-- ######################## BUCHER PAGE SECTION 1 ######################## -->
    <div class="academy-page-section1-container">
      <div class="row">
        <div class="col-md-6 academy-page-section1-top mb-3 mb-md-0 pe-md-4">
          Die Seite "Bücher" befindet sich noch im Aufbau. Hier werden wir Ihnen
          Bücher zum Thema Pflege und Gesundheit präsentieren. Wir arbeiten mit
          Affiliate-Links. Wenn Sie über diese Links ein Produkt oder eine
          Dienstleistung kaufen, erhalten wir vom Anbieter eine Provision.
        </div>
        <div class="col-md-6 academy-page-section1-top ps-md-4">
          Für Sie entstehen dabei keine Mehrkosten. Wo und wann Sie ein Produkt
          oder eine Dienstleistung kaufen, bleibt natürlich Ihnen überlassen.
        </div>
      </div>
    </div>

    <!-- ############################ BUCHER PAGE SECTION 2 ######################## -->
    <div class="row bucher-card-container">
      <div class="col-12 bucher-card-heading">Für pflegende Angehörige</div>

      <div class="col-12" style="margin-top: 2rem">
        <div class="row">
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/46e0eKE" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_top_card1.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Wenn das Leben um Hilfe ruft: Angehörige zwischen Hingabe,
              Pflichtgefühl und Verzweiflung
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/3W4UAG4" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_top_card2.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Pflege organisieren und finanzieren: Eine Orientierungshilfe für
              Angehörige
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/4cFjZ05" target="_blank">
                <img src="{{asset('assets/Images/Bucher_top_card3.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Pflege zu Hause: Was Angehörige wissen müssen
            </div>
          </div>
        </div>
      </div>

      <div class="col-12" style="margin-top: 1.5rem">
        <div class="row">
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/3WfDdm4" target="_blank">
                <img src="{{asset('assets/Images/Bucher_top_card4.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Pflege zu Hause - Grundpflege: Der Ratgeber für Angehörige und
              Pflegende
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/4cMmA8p" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_top_card5.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Pflegende Angehörige besser pflegen: Soziale Arbeit für eine
              hochbelastete Bevölkerungsgruppe
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/3LzMqAw" target="_blank">
                <img src="{{asset('assets/Images/Bucher_top_card6.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Gute Pflege braucht Kraft. Selbsthilfe für pflegende Angehörige
            </div>
          </div>
        </div>
      </div>

      <div class="col-12" style="margin-top: 1.5rem">
        <div class="row">
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/46bImjq" target="_blank">
                <img src="{{asset('assets/Images/Bucher_top_card7.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Pflegefall: Der praktische Ratgeber zu Ihren Rechten, Ansprüchen
              und den Pflegegraden
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/3LvZmaD">
                <img src="{{asset('assets/Images/Bucher_top_card8.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Angehörige in der Palliative Care: Unterstützung, Begleitung und
              Beratung
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/3WvtGsf" target="_blank">
                <img src="{{asset('assets/Images/Bucher_top_card9.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Demenz erkennen und verstehen: Ein Ratgeber für Angehörige zum
              Umgang mit Alzheimer und anderen Demenzformen
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 bucher-card-heading" style="margin-top: 5rem">
        Für Pflegekräfte
      </div>

      <div class="col-12" style="margin-top: 2rem">
        <div class="row">
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/4cRRlJo" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_bottom_card1.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Kittelbuch Alltagsretter für Pflegekräfte: Mehr als ein Notizbuch
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/46b23Il" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_bottom_card2.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Das Freundebuch für Pflegekräfte: Für die besten Kollegen aus der
              Pflege
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/46geSAX" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_bottom_card3.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Kreuzworträtsel für Pflegeberufe: 1.800 Wissensfragen für die
              Pflegeausbildung und examinierte
            </div>
          </div>
        </div>
      </div>

      <div class="col-12" style="margin-top: 1.5rem">
        <div class="row">
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/3A23MDy" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_bottom_card4.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Pflege-Notizbuch mini: Der perfekte Begleiter für jede Pflegekraft
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/4bRoROC" target="_blank"
                ><img src="{{asset('assets/Images/Bucher_bottom_card5.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Dienstplangestaltung: Was Pflegekräfte wissen müssen
            </div>
          </div>
          <div class="col-md-4 bucher-card">
            <div class="bucher-card-img">
              <a href="https://amzn.to/4cM46Fd" target="_blank">
                <img src="{{asset('assets/Images/Bucher_bottom_card6.svg')}}" alt=""
              /></a>
            </div>
            <div class="bucher-card-content">
              Altenpflege - Kämpfen statt Kündigen: Wie Pflegekräfte ihren
              Berufsalltag nachhaltig verbessern können
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="width: 100%">
      <img
        class="page-bottom-img"
        style="width: 100%; object-fit: cover; height: 100%"
        src="{{asset('assets/Images/Bucher_bottom_img.svg')}}"
        alt=""
      />
    </div>

    @include('components.footer.footer_second')

  </body>
</html>
