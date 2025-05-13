<!DOCTYPE html>
<html lang="en">
    @include('components.header.head')

  <body>
    <div
      class="header-container service-header-bg"
      style="background-image: url('{{asset('assets/Images/Uber_uns_header_bg.svg')}}') !important"
    >
    

    
    @include('components.header.header')


      <div class="service-header-content">
        <span>Marktführer im Bereich Essen auf Rädern </span>
        <div>Landhausküche. Mehr als eine Mahlzeit.</div>
      </div>
    </div>

    <!-- ######################## ESSEN AUF RÄDERN PAGE SECTION 1 ######################## -->
    

        <div class="container-fluid section1-container" style="width: 85%">
            <div class="row" style="height: 100%">
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Essen auf Rädern</span>
                    <div class="section1-top2 text-start">
                        Landhausküche. Mehr als eine Mahlzeit.
                    </div>
                    <div class="section1-top4">
Als Marktführer im Bereich Essen auf Rädern versorgt die Landhausküche mehrere Zehntausende Tischgäste im Jahr mit mehreren Millionen Menüs, die von Menükurieren täglich heiß geliefert werden.<br /><br /> 
Der Anspruch ist aber deutlich größer: Die Landhausküche bietet mehr als eine Mahlzeit. <br /><br />
Mit vielfältigen Services und Dienstleistungen kümmert die Landhausküche sich im persönlichen Kontakt direkt vor Ort um Seniorinnen und Senioren.<br /><br /> 
Die Landhausküche nimmt ihnen die Sorge, vergessen zu werden, sie unterstützt Angehörige bei der Versorgung ihrer Eltern oder von Verwandten und liefert Entlastung – sei es mit einer vielfältigen Menüauswahl, mit flexiblen Bestellmöglichkeiten, mit verschiedenen Kostformen für die richtige Ernährung und einer umfangreichen Ernährungsberatung, mit einem Schlüsselservice oder mit Benachrichtigungen über die Landhausküche-App, ob und wann die Lieferung erfolgt ist.<br /><br />
<strong>Tel: 0800 1208020</strong> 
                    </div>
                    <div style="margin-bottom:50px;">
                        <button><a href="https://www.landhaus-kueche.de/info" target="_blank"style="text-decoration: none;color:white">Zur Landhausküche</a></button>
                    </div>
                </div>
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 0px; width: 100%; object-fit: cover"
                        src="{{ asset('assets/Images/LHK-Logo.jpg') }}" alt="" />
                </div>
                
            </div>    
    </div>
    


    <div style="width: 100%;margin-top:100px;">
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
