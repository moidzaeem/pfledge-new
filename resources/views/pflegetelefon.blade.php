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
        <span>Umfassendes Angebot zur Vereinbarkeit von Pflege und Beruf </span>
        <div>Pflegetelefon und Wege zur Pflege</div>
      </div>
    </div>

    <!-- ######################## PFLEGETELEFON PAGE SECTION 1 ######################## -->
    <div class="academy-page-section1-container">
      <div class="row">
        <div class="col-md-6 academy-page-section1-top mb-3 mb-md-0 pe-md-4">
          Von gesetzlichen Ansprüchen bis zur finanziellen Unterstützung: Auf der neu gestalteten Website <a href="https://www.wege-zur-pflege.de" target="_blank">www.wege-zur-pflege.de</a> des Bundesministeriums für Familie, Senioren, Frauen und Jugend finden pflegende Angehörige, Arbeitgeber und Pflegebedürftige für sie relevante Informationen zur Vereinbarkeit von Pflege und Beruf. 
        </div>
        <div class="col-md-6 academy-page-section1-top ps-md-4">
          Neben der Website "Wege zur Pflege" bietet auch das Pflegetelefon individuelle Beratung und Informationen zur Vereinbarkeit von Pflege und Beruf an, insbesondere zu den Regelungen des Pflegezeit- und Familienpflegezeitgesetzes. Das Beratungsteam ist derzeit von montags bis donnerstags von 9 bis 16 Uhr unter der Telefonnummer 030 20 17 91 31 erreichbar. Die telefonische Beratung ist anonym und vertraulich. 
        </div>
      </div>
    </div>

    <!-- ############################ PFLEGETELFON PAGE SECTION 2 ######################## -->
    <div class="row bucher-card-container">
      <div class="col-12 bucher-card-heading"></div>
        <a href="https://www.wege-zur-pflege.de" target="_blank"><img src="https://pflegepur.de/assets/Images/wzp-logos-data.png" target="_blank" style="width:80%;"></a>


 

      
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
