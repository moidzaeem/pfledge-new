   <!-- ############################# CONTACT SECTION ########################### -->
   <div class="contact-container" id="contact">
       <div class="row contact-row">
           <div class="col-lg-5">
               <span class="contact-top1">Kontakt</span>
               <div class="contact-top2">Wir sind für Sie da!</div>
               <div class="contact-top3">
                   Haben Sie Fragen zu unseren Dienstleistungen, benötigen Sie
                   Unterstützung oder möchten Sie einen Termin vereinbaren? Zögern Sie
                   nicht, uns zu kontaktieren.
               </div>
               <div class="contact-div">
                   <img src="{{ asset('assets/Images/Contact_email.svg') }}" alt="" />
                   <div class="contact-email">E-Mail <br />kontakt@pflegepur.de</div>
               </div>
               <div class="contact-div">
                   <img src="{{ asset('assets/Images/Contact_phone.svg') }}" alt="" />
                   <div class="contact-phone">Telefon <br />05151–7909862</div>
               </div>
               <div class="contact-div">
                   <img src="{{ asset('assets/Images/Contact_time.svg') }}" alt="" />
                   <div class="contact-time">
                       Mo. - Sa. 9:00 - 18:00 <br />Sonntag geschlossen
                   </div>
               </div>
           </div>
           <div class="col-lg-7 contact-right" id="contactFormTest">
            <form action="{{ route('contact.form') }}" method="POST" class="row">
                @csrf
                <div class="col-lg-6 pe-sm-0">
                    <input type="text" name="name" placeholder="Ihr Name*" required value="{{ old('name') }}" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 pe-sm-0">
                    <input type="email" name="email" placeholder="Ihre E-Mail*" required value="{{ old('email') }}" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 pe-sm-0">
                    <input type="tel" name="phone" placeholder="Ihre Telefonnummer" value="{{ old('phone') }}" />
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 pe-sm-0">
                    <input type="text" name="city" placeholder="Ihre Stadt" value="{{ old('city') }}" />
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 pe-sm-0">
                    <textarea name="message" placeholder="Ihre Nachricht*" rows="6" required>{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- CAPTCHA Section -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ route('captcha') }}" alt="CAPTCHA" />
                        </div>
                        <div class="col-md-6">
                            <input maxlength="6" type="text" name="captcha" placeholder="Code" required />
                            @error('captcha')
                                <div class="text-danger" style="color: white!important">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
        
                <div class="col-12">
                    <div class="row ps-2 captcha-main-row">
                        <div class="col-lg-4 contact-submit-btn-div pe-0 text-end">
                            <button class="contact-submit-btn" type="submit">
                                Nachricht senden
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        

           <!-- Display success message 
           @if (session('success'))
               <div class="alert alert-success mt-3">
                   {{ session('success') }}
               </div>
           @endif
           -->

       </div>
   </div>
