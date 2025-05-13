<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body style="background-color: #b22222">


    <!-- ######################## MEIN PFLEGEPUR SECTION 2 ######################## -->
    <div class="index2-login-container mb-5">
        <div class="index2-login-top-img" style="text-align: center;margin-bottom: 1rem;
    margin-top: 3rem;"><img
                src="{{ asset('assets/Images/pflegepur.svg') }}" alt=""></div>

        <div class="index2-login-cont " style="background-color: rgba(255, 255, 255, 1) !important;">
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
                            alt="">Google</button>
                </div>
                {{-- <div class="index2-apple-btn"><button><img src="{{asset('assets/Images/apple.svg')}}" alt="">Apple</button></div> --}}
            </div>

            <div class="index2-input-sie">Sie haben noch kein Benutzerkonto?</div>
            <div class="index2-input-registration">Registrieren Sie sich kostenlos hier!</div>

        </div>


    </div>














    <!-- ######################## END ############################ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
