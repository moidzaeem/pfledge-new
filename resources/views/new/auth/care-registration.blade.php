<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<link rel="stylesheet" href="{{ asset('assets/style_2.css') }}" />
<script src="{{ asset('assets/index_2.js') }}"></script>



<body style="background-color: #b22222">


    <!-- ######################## REGISTRATION 2SECTION 1 ######################## -->
    <div class="index2-login-container mb-5">
        <div class="index2-login-top-img" style="text-align: center;margin-bottom: 1rem;
    margin-top: 3rem;"><img src="{{asset('assets/Images/pflegepur.svg')}}" alt=""></div>

        <div class="index2-login-cont registration2-cont " style="background-color: rgba(255, 255, 255, 1) !important;">

            <div class="registration2-progress-bar">
                <div class="registration2-active"></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="registration2-step registration2-active2">
                <div class="registration2-steps-heading">Wer ist pflegebedürftig?</div>
                <div class="registration2-radio-group">
                    <label class="registration2-radio">
                        <input type="radio" checked name="registration2-options" value="option1">
                        <span class="registration2-custom-radio"></span> Ich selbst
                    </label>
                    <label class="registration2-radio">
                        <input type="radio" name="registration2-options" value="option2">
                        <span class="registration2-custom-radio"></span> Eine andere Person
                    </label>
                    <label class="registration2-radio">
                        <input type="radio" name="registration2-options" value="option3">
                        <span class="registration2-custom-radio"></span> Niemand
                    </label>
                </div>


            </div>
            <div class="registration2-step">

                <div class="registration2-step2-cont1">

                    <div class="registration2-steps-heading ">Besteht schon ein Pflegegrad?</div>

                    <div class="registration2-radio-group">
                        <label class="registration2-radio">
                            <input type="radio" checked name="registration22-options" value="option11">
                            <span class="registration2-custom-radio"></span> Ja
                        </label>

                        <div class="stepper-range-container">
                            <!-- Progress Bar (Fills as You Slide) -->
                            <div class="stepper-range-track">
                                <div class="stepper-range-progress" id="stepper-range-progress"></div>
                            </div>

                            <!-- Moving Red Thumb with Value Inside -->
                            <div class="stepper-range-thumb" id="stepper-range-thumb">2</div>

                            <!-- Hidden Range Slider -->
                            <input type="range" min="1" max="5" value="2" class="stepper-range-slider"
                                id="stepper-range-slider">
                        </div>


                        <label class="registration2-radio ">
                            <input type="radio" name="registration22-options" value="option33">
                            <span class="registration2-custom-radio"></span> Nien
                        </label>
                    </div>
                </div>


                <div class="registration2-step2-cont2">

                    <div class="registration2-steps-heading">Welchen Pflegegrad hat die zu pflegende Person?</div>
                    <div class="registration2-radio-group" id="registration2-step2-cont2">
                        <label class="registration2-radio">
                            <input type="radio" checked name="registration44-options" value="option11">
                            <span class="registration2-custom-radio"></span> Pflegegrad 1
                        </label>
                        <label class="registration2-radio">
                            <input type="radio" name="registration44-options" value="option33">
                            <span class="registration2-custom-radio"></span> Pflegegrad 2
                        </label>
                        <label class="registration2-radio">
                            <input type="radio" name="registration44-options" value="option33">
                            <span class="registration2-custom-radio"></span> Pflegegrad 3
                        </label>
                        <label class="registration2-radio">
                            <input type="radio" name="registration44-options" value="option33">
                            <span class="registration2-custom-radio"></span> Pflegegrad 4
                        </label>
                        <label class="registration2-radio">
                            <input type="radio" name="registration44-options" value="option33">
                            <span class="registration2-custom-radio"></span> Pflegegrad 5
                        </label>
                    </div>
                </div>



            </div>
            <div class="registration2-step">
                <div class="registration2-steps-heading">Welche Pflegeform wird genutzt?</div>
                <div class="registration2-radio-group">
                    <label class="registration2-radio">
                        <input type="radio" checked name="registration33-options" value="option1">
                        <span class="registration2-custom-radio"></span> Zu Hause
                    </label>
                    <label class="registration2-radio">
                        <input type="radio" name="registration33-options" value="option2">
                        <span class="registration2-custom-radio"></span> Zu Hause mit Unterstützung durch einen
                        Pflegedienst
                    </label>
                    <label class="registration2-radio">
                        <input type="radio" name="registration33-options" value="option3">
                        <span class="registration2-custom-radio"></span> Stationäre Pflege (Pflegeheim oder Betreutes
                        Wohnen)
                    </label>
                </div>
            </div>
            <div class="registration2-step">
                <div class="registration2-steps-heading">Daten zur pflegenden Person</div>
                <div class="index2-registration-cont">
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
                </div>

                <div class="index2-input-container index2-input-container2 mt-2">
                    <div class="index2-eamil-input"><input type="text" placeholder="Vorname*"></div>
                    <div class="index2-eamil-input"><input type="text" placeholder="Nachname*"></div>
                </div>



                <div class="index2-input-container mb-3">
                    <div class="index2-eamil-input"><input type="email" placeholder="Ihre E-Mail"></div>
                </div>

                <div class="index2-input-container index2-input-container2 mt-2">
                    <div class="index2-eamil-input"><input type="text" placeholder="Straße"></div>
                    <div class="index2-eamil-input"><input type="text" placeholder="Hausnummer"></div>
                </div>


                <div class="index2-input-container index2-input-container2 mt-2">
                    <div class="index2-eamil-input"><input type="text" placeholder="PLZ" pattern="[0-9]{5}"
                            maxlength="5"></div>
                    <div class="index2-eamil-input"><input type="text" placeholder="Stadt"></div>
                    <div class="index2-eamil-input">
                        <select name="" id="">
                            <option value="0">Bundesland</option>
                            <option value="1">Bundesland</option>
                            <option value="2">Bundesland</option>
                        </select>
                        <i class="fa fa-angle-down"></i>
                    </div>

                </div>


                <div class="index2-input-container index2-input-container2 mt-2">
                    <div class="index2-eamil-input"><input type="tel" placeholder="Telefonnummer" pattern="[0-9]{5}"
                            maxlength="5"></div>
                    <div class="index2-eamil-input">
                        <select class="h-100" name="" id="">
                            <option value="0">Pflegekasse</option>
                            <option value="1">Pflegekasse</option>
                            <option value="2">Pflegekasse</option>
                        </select>
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>



            </div>
            <div class="registration2-btn-container">
                <button class="registration2-btn registration2-hidden" onclick="prevStep()"
                    id="registration2PrevBtn">Zurück</button>
                <button class="registration2-btn registration2-full-width" onclick="nextStep()"
                    id="registration2NextBtn">Weiter</button>
            </div>
        </div>




        <!-- ######################## REGISTRATION 2 POPUP 1 ######################## -->

        <!-- Modal -->
        <div class="modal fade " id="successModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="check-icon">
                            <img src="./Images/check-circle.svg" alt="">
                        </div>
                        <div class="fw-bold">Registrierung erfolgreich</div>
                        <div class="fw-normal">Ihr Benutzerkonto wurde erfolgreich erstellt. Wir haben Ihnen eine E-Mail
                            geschickt. Bitte klicken Sie auf den Link in dieser E-Mail zur Aktivierung Ihres Kontos.
                        </div>
                        <button class="fw-btn" data-bs-dismiss="modal">Zu Mein PflegePur</button>
                    </div>
                </div>
            </div>
        </div>




    </div>






    <!-- ######################## REGISTRATION 2 POPUP 2 ######################## -->

    <!-- Modal -->
    <div class="modal fade " id="successModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="check-icon">
                        <img src="./Images/check-circle.svg" alt="">
                    </div>
                    <div class="fw-bold mb-4">Herzlichen Glückwunsch! Ihr Benutzerkonto wurde erfolgreich aktiviert. Sie
                        können sich nun mit Ihren Zugangsdaten einloggen.</div>
                    <button class="fw-btn" data-bs-dismiss="modal">Zu Mein PflegePur</button>
                </div>
            </div>
        </div>
    </div>

    </div>









    <!-- ######################## END ############################ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>