    <!-- ######################### FOOTER SECTION ######################### -->
 
    <div class="footer-container">
        <div class="footer-left-shape"></div>
        <div class="footer-right-shape"></div>

        <div class="row footer-main-row">
            <div class="col-lg-4 footer-left">
                <img src="./Images/pflegepur_logo.svg" alt="" />
                <div class="footer-contact-div">
                    <div class="contact-div">
                        <img src="./Images/footer_email_icon.svg" alt="" />
                        <div class="contact-phone">E-Mail <br />kontakt@pflegepur.de</div>
                    </div>
                    <div class="contact-div">
                        <img src="./Images/footer_call_icon.svg" alt="" />
                        <div class="contact-time">Telefon <br />05151–7909862</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 footer-right">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <span class="footer-items-heading">Informationen</span>
                        <ul>
                            <li><a href="{{route('ratgeber') }}">Pflegeleistungen</a></li>
                            <li><a href="{{ route('achrichten') }}">News</a></li>
                            <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                            <li><a href="https://open.spotify.com/show/6JACh2eflNeIcxU8U2ltyL" target="_blank">Podcast</a></li>                            
                            <li><a href="{{ route('innovationen.index') }}">Innovationen</a></li>                     
                            <li><a href="{{ route('partner') }}"> Partner werden!</a></li>                   
                        </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6">
                        <span class="footer-items-heading">Services</span>
                        <ul>
                            <li><a href="{{ route('checklisten') }}">Checklisten </a></li>
                            <li>
                                <a href="{{ route('online.rechner.index') }}">Online-Rechner</a>
                            </li>
                            <li><a href="{{ route('musteranschreiben') }}">Musteranschreiben</a></li>
                            <li><a href="{{ route('pflegetelefon') }}">Pflegetelefon</a></li>                            
                            <li><a href="{{route('academy')}}">Online-Pflegekurse</a></li>
                            <li><a href="{{route('24h-betreuung')}}">24h-Betreuung</a></li>                            
                    </ul>                                                                                                                                                                        
                    </div>
                    <div class="col-lg-3 col-6">
                        <span class="footer-items-heading">Shop</span>
                        <ul>
                            <li><a href="{{ route('marketplace.index') }}">Marktplatz </a></li>
                            <li><a href="https://www.sanicare.de/rezept-einloesen?sPartner=adcell&utm_source=adcell&bid=337905-111699-&adcref=pflegepur.de%2F" target="_blank" >Apotheke</a></li>
                            <li><a href="https://t.adcell.com/p/click?promoId=278495&slotId=111699" target="_blank" >Pflegehilfsmittel</a></li>
                            <li><a href="https://pflegehase.de/hausnotruf-bestellung/?bid=307274-111699-&adcref=pflegepur.de%2F" target="_blank" >Hausnotruf</a></li>                            
                            <li><a href="{{route('essen-auf-raedern')}}">Landhausküche</a></li>                                                                                    
                    </ul>                                                                                                                                                                        
                    </div>                    
                    <div class="col-lg-3">
                        <span style="display: block; margin-bottom: 4rem" class="footer-items-heading">Newsletter</span>
                        <button class="footer-btn" style="position: relative;">
                            <a style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                                href="{{ route('newsletter') }}" target="_blank"></a> Abonnieren Sie unseren
                            Newsletter!
                        </button>
                        <div class="footer-icons-div">
                            <a href="https://www.facebook.com/profile.php?id=100079595010397" target="_blank"><img
                                    src="{{ asset('assets/Images/footer_fb_icon.svg') }}" alt="" /></a>

                            <a href="https://twitter.com/Pflege_Pur" target="_blank"><img
                                    src="{{ asset('assets/Images/footer_x_icon.svg') }}" alt="" /></a>
                            <a href="https://open.spotify.com/show/6JACh2eflNeIcxU8U2ltyL" target="_blank"><img
                                    src="{{ asset('assets/Images/footer_spotify_icon.svg') }}" alt="" /></a>
                            <a href="https://www.youtube.com/@PflegePur" target="_blank"><img
                                    src="{{ asset('assets/Images/footer_utube_icon.svg') }}" alt="" /></a>
                            <a href="https://www.instagram.com/_pflegepur/" target="_blank" class="social-icon">
                                <i class="fab fa-instagram" style="font-weight: bold;color:white;font-size:30px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="footer-bottom-flex">
                <div class="footer-copyright" style="flex: 2">
                    Copyright © PflegePur
                </div>
                <div style="text-align: right" class="footer-bottom-flex-inner">
                    <a href="{{ route('impressum') }}" class="footer-impressum ">Impressum und Datenschutzerklärung</a>
                    <a target="_blank"
                        href="https://61cac9fd.sibforms.com/serve/MUIFAGHCIVlNnpFo6oZ8Bxe81qPMrQsIHzE3gZBM3cN41OqxlCOPZgqD00GPoBXSOr5OUmg4_xleR7Qsgn1T1UNQQH1le1Ws3QaZ_KhUrVPJBqD_yR_IykEsyz19cbQVNPHUiLc-avpokGlRq28zKceSlVbepTWnhMS4b3MKFh-UjB_67WhHhruMNmQj6DaFQTBAuCOEBppJpfM-"
                        class="footer-newsletter"> Newsletter-Abmeldung</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ######################## END ############################ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- <script id="CookieDeclaration" src="https://consent.cookiebot.com/985f611d-8977-47e6-9427-b1f4e5d959f1/cd.js"
        type="text/javascript" async></script> -->
