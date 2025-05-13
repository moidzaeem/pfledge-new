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
            <span>Unterstützung für Ihren Pflegealltag</span>
            <div>Mein PflegePur</div>
        </div>
    </div>

    <!-- ######################## MEIN PFLEGEPUR SECTION 1 ######################## -->
    <div class="section1-container text-center mein-pflege-top-heading">
        Jetzt kostenlos registrieren und alle Vorteile von Mein PflegePur nutzen!
    </div>
    <div class="section1-container text-center mein-pflege-top-heading2">
        Mit einer kostenlosen Registrierung bei PflegePur profitieren Sie von
        vielen zusätzlichen Funktionen, die Ihnen die Pflege Ihres Angehörigen
        deutlich erleichtern. Werfen Sie einen Blick auf die Unterschiede:
    </div>

    <div class="mein-pflegepur-section1-container mein-pflegpur-section1-mobile-container">
        <div class="mein-pflegepur-section1-cont mein-pflegepur-section1-cont1">
            <div class="mein-pflege-section1-sub-cont">Blog</div>
            <div class="mein-pflege-section1-sub-cont">News und Ratgeber</div>
            <div class="mein-pflege-section1-sub-cont">Marktplatz</div>
            <div class="mein-pflege-section1-sub-cont">Academy</div>
            <div class="mein-pflege-section1-sub-cont">Eigenes Benutzerkonto</div>
            <div class="mein-pflege-section1-sub-cont">
                Übersicht Pflegeleistungen
            </div>
            <div class="mein-pflege-section1-sub-cont">
                Simulation Pflegeleistungen
            </div>
            <div class="mein-pflege-section1-sub-cont">Checklisten</div>
            <div class="mein-pflege-section1-sub-cont">Online-Rechner</div>
            <div class="mein-pflege-section1-sub-cont" style="border-bottom: none; padding-bottom: 0">
                Anschreiben
            </div>
        </div>
        <div class="mein-pflegepur-section1-cont text-center mein-pflegepur-section1-cont2">
            <div class="mein-pflegpur-ohne">Ohne Mein PflegePur</div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont" style="border-bottom: none; padding-bottom: 0">
                <i class="fa-solid fa-x"></i>
            </div>
        </div>
        <div class="mein-pflegepur-section1-cont text-center mein-pflegepur-section1-cont2">
            <div class="mein-pflegpur-ohne">Mit Mein PflegePur</div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="mein-pflege-section1-sub-cont" style="border-bottom: none; padding-bottom: 0">
                <i class="fa-solid fa-check"></i>
            </div>
        </div>
    </div>

    <!-- ######################## MEIN PFLEGEPUR SECTION 2 ######################## -->

    <div class="mein-pflegpur-section2-container section1-container mt-3">
        <div class="mein-pflege-section2-heading">
            Ihre Vorteile nach der Registrierung
        </div>
        <div class="mein-pflege-section2-heading2">
            Nach Ihrer kostenlosen Anmeldung können Sie Ihre Pflegesituation
            schildern, ein persönliches Profil erstellen und so sicherstellen, dass
            Ihre Daten nicht verloren gehen. Starten Sie mit PflegePur und planen
            Sie die nächsten Schritte in Ihrer Pflegesituation gezielt und
            indviduell! <br /><br />Registrieren Sie sich jetzt und entdecken Sie,
            wie Mein PflegePur Ihnen den Alltag erleichtern kann.
        </div>

        <div class="mein-pflegpur-section2-btn text-center">
            <button>Zur Registrierung</button>
        </div>
    </div>

    @guest
        <div class="index2-login-container ">
            <div class="index2-login-um section1-container"> Um Zugang zu Ihrem persönlichen Bereich „Mein PflegePur“ zu
                erhalten, loggen Sie sich bitte ein oder erstellen Sie kostenlos ein neues Benutzerkonto.</div>

            <div class="index2-login-cont ">
                <div class="index2-login-heading">Login </div>

                <div class="index2-input-container">
                    <div class="index2-eamil-input"><input type="email" placeholder="Ihre E-Mail"></div>
                    <div class="index2-password-container">
                        <input type="password" id="index2PasswordInput" placeholder="Ihr Passwort">
                        <span id="index2TogglePassword" class="index2-eye-icon">
                            <i class="fa fa-eye-slash"></i>
                        </span>
                    </div>

                </div>

                <div class="index2-login-middle-cont " style="margin-top: 0.7rem;">
                    <div class="index2-login-middle-left">
                        <div class="index2-radio-group">
                            <label class="index2-custom-radio">
                                <input type="radio" name="option" value="3">
                                <span class="index2-radio-mark"></span>Angemeldet bleiben
                            </label>
                        </div>
                    </div>
                    <div class="index2-login-middle-right">Passwort vergessen?</div>
                </div>

                <div class="index2-login-btn"><button>Login</button></div>

                <div class="index2-login-oder">
                    <div class="index2-login-oder-heading">Oder Login mit</div>
                </div>
                <div class="index2-social-btn-cont">
                    <div class="index2-google-btn"><button><img src="{{ asset('assets/Images/google.svg') }}"
                                alt="">Google</button></div>
                    <div class="index2-apple-btn"><button><img src="{{ asset('assets/Images/apple.svg') }}"
                                alt="">Apple</button></div>
                </div>

                <div class="index2-input-sie">Sie haben noch kein Benutzerkonto?</div>
                <div class="index2-input-registration">Registrieren Sie sich kostenlos hier!</div>

            </div>

        </div>
    @endguest




    <div style="width: 100%" class="mt-5">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/meinPflegepur_bottom_img.svg') }}" alt="" />
    </div>
    @include('components.footer.footer_second')

</body>

</html>
