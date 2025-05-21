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
            <form action="{{ route('register.user.new') }}" method="post">
                @csrf

                <!-- Gender -->
                <div class="registration-top-checkbox-containers">
                    <div class="registration-top-checkbox-headings">Geschlecht</div>
                    <div class="index2-login-middle-cont index2-login-middle-cont11" style="margin-top: 0.7rem;">
                        <div class="index2-login-middle-left">
                            <div class="index2-radio-group">
                                <label class="index2-custom-radio">
                                    <input type="radio" name="gender" value="0">
                                    <span class="index2-radio-mark"></span>Männlich
                                </label>
                            </div>
                        </div>
                        <div class="index2-login-middle-left">
                            <div class="index2-radio-group">
                                <label class="index2-custom-radio">
                                    <input type="radio" name="gender" value="1">
                                    <span class="index2-radio-mark"></span>Weiblich
                                </label>
                            </div>
                        </div>
                        <div class="index2-login-middle-left">
                            <div class="index2-radio-group">
                                <label class="index2-custom-radio">
                                    <input type="radio" name="gender" value="2">
                                    <span class="index2-radio-mark"></span>Divers
                                </label>
                            </div>
                        </div>
                    </div>
                    @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- First Name & Last Name -->
                <div class="index2-input-container index2-input-container2 mt-2">
                    <div class="index2-eamil-input">
                        <input name="first_name" type="text" placeholder="Ihr Vorname"
                            value="{{ old('first_name') }}">
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="index2-eamil-input">
                        <input name="last_name" type="text" placeholder="Ihr Nachname"
                            value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Email & Password -->
                <div class="index2-input-container">
                    <div class="index2-eamil-input">
                        <input type="email" name="email" placeholder="Ihre E-Mail" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="index2-password-container">
                        <input type="password" class="index2PasswordInput" name="password" placeholder="Ihr Passwort">
                        <span id="index2TogglePassword" class="index2-eye-icon index2TogglePassword">
                            <i class="fa fa-eye-slash"></i>
                        </span>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Terms & Newsletter -->
                <div class="index2-login-middle-cont" style="margin-top: 0.7rem;">
                    <div class="index2-login-middle-left">
                        <div class="index2-radio-group">
                            <label class="index2-custom-radio">
                                <input type="radio" name="terms" value="1">
                                <span class="index2-radio-mark"></span>akzeptiere die AGB und die Datenschutzerklärung
                                und willige in die Erstellung eines Profils auf PflegePur ein.
                            </label>
                        </div>
                        @error('terms')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="index2-login-middle-left">
                        <div class="index2-radio-group">
                            <label class="index2-custom-radio">
                                <input type="radio" name="newsletter" value="1">
                                <span class="index2-radio-mark"></span>Ja, ich möchte aktuelle Informationen zu Pflege
                                und Gesundheit per E-Mail erhalten!
                            </label>
                        </div>
                        @error('newsletter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit -->
                <div class="index2-login-btn">
                    <button type="submit">Registrieren</button>
                </div>
            </form>

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
