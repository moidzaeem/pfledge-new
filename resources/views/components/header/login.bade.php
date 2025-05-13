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

    <div class="index2-input-neu">Neu bei PflegePur?</div>
    <div class="index2-input-erstellen section1-container mt-2">Erstellen Sie jetzt ein kostenloses Konto, um alle
        Vorteile von Mein PflegePur zu nutzen, einschließlich persönlicher Pflegeprofile, Simulationen, Checklisten
        und mehr.
    </div>
    @auth
    <div class="index2-input-mein-btn text-center mt-3"><button>Mein PflegePur</button></div>
    @endauth

    @guest
    <div class="index2-input-mein-btn text-center mt-3"><button>Zur Registrierung</button></div>
    @endguest
</div>