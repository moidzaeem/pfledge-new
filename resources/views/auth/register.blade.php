<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="
        background-image: url('{{ asset('assets/Images/Service_header_bg.svg') }}') !important;
      ">
        @include('components.header.header')
        <div class="service-header-content">
            <span>Unterstützung für Ihren Pflegealltag</span>
            <div>Registrierung</div>
        </div>
    </div>

    <!-- ######################## MEIN PFLEGEPUR SECTION 1 ######################## -->
    <div class="section1-container text-center mein-pflege-top-heading">Jetzt kostenlos registrieren und alle Vorteile
        von Mein PflegePur nutzen!</div>
    <div class="section1-container text-center mein-pflege-top-heading2">Mit einer kostenlosen Registrierung bei
        PflegePur profitieren Sie von vielen zusätzlichen Funktionen, die Ihnen die Pflege Ihres Angehörigen deutlich
        erleichtern.</div>



    <div class="index2-login-container mb-5">
        <div class="index2-login-cont index2-registration-cont">
            <div class="index2-login-heading">Registrierung</div>

            <div class="registration-top-checkbox-containers">
                <div class="registration-top-checkbox-headings">Geschlecht</div>

                <div class="index2-login-middle-cont index2-login-middle-cont11 " style="margin-top: 0.7rem;">
                    <div class="index2-login-middle-left">
                        <div class="index2-radio-group">
                            <label class="index2-custom-radio">
                                <input type="radio" name="option" value="0">
                                <span class="index2-radio-mark"></span>Männlich
                            </label>
                        </div>
                    </div>
                    <div class="index2-login-middle-left">
                        <div class="index2-radio-group">
                            <label class="index2-custom-radio">
                                <input type="radio" name="option" value="1">
                                <span class="index2-radio-mark"></span>Weiblich
                            </label>
                        </div>
                    </div>

                    <div class="index2-login-middle-left">
                        <div class="index2-radio-group">
                            <label class="index2-custom-radio">
                                <input type="radio" name="option" value="2">
                                <span class="index2-radio-mark"></span>Divers
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="index2-input-container index2-input-container2 mt-2">
                <div class="index2-eamil-input"><input type="text" placeholder="Ihr Vorname"></div>
                <div class="index2-eamil-input"><input type="text" placeholder="Ihr Nachname"></div>


            </div>


            <div class="index2-input-container">
                <div class="index2-eamil-input"><input type="email" placeholder="Ihre E-Mail"></div>
                <div class="index2-password-container">
                    <input type="password" class="index2PasswordInput" placeholder="Ihr Passwort">
                    <span id="index2TogglePassword" class="index2-eye-icon index2TogglePassword">
                        <i class="fa fa-eye-slash"></i>
                    </span>
                </div>

            </div>

            <div class="index2-login-middle-cont " style="margin-top: 0.7rem;">
                <div class="index2-login-middle-left">
                    <div class="index2-radio-group">
                        <label class="index2-custom-radio">
                            <input type="radio" name="option" value="1">
                            <span class="index2-radio-mark"></span>akzeptiere die AGB und die Datenschutzerklärung und
                            willige in die Erstellung eines Profils auf PflegePur ein.
                        </label>
                    </div>


                </div>
                <div class="index2-login-middle-left">
                    <div class="index2-radio-group">
                        <label class="index2-custom-radio">
                            <input type="radio" name="option" value="2">
                            <span class="index2-radio-mark"></span>Ja, ich möchte aktuelle Informationen zu Pflege und
                            Gesundheit per E-Mail erhalten!
                        </label>
                    </div>
                </div>
            </div>

            <div class="index2-login-btn"><button>Registrieren</button></div>

            {{-- <div class="index2-login-oder">
                <div class="index2-login-oder-heading">Oder anmelden mit nur einem Klick</div>
            </div>
            <div class="index2-social-btn-cont">
                <div class="index2-google-btn"><button><img src="./Images/google.svg" alt="">Google</button>
                </div>
                <div class="index2-apple-btn"><button><img src="./Images/apple.svg" alt="">Apple</button></div>
            </div> --}}

            <div class="index2-input-sie mt-5">Sie haben noch kein Benutzerkonto?</div>
            <div class="index2-input-registration">Registrieren Sie sich kostenlos hier!</div>

        </div>


    </div>




    <div style="width: 100%" class="mt-5">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/meinPflegepur_bottom_img.svg') }}" alt="" />
    </div>
    @include('components.footer.footer_second')

</body>

</html>
