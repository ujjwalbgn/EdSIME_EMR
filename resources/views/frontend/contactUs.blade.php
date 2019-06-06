<section class="section-dark" id="contact">

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col-md-10 -->
            <div class="col-md-10 col-md-offset-1 text-center margin-bottom-40">

                <h2 class="section-title grey">Contact</h2>

                <p class="section-subtitle grey">Tell us about your requirements</p>

            </div>
            <!--end col-md-10 -->

        </div>
        <!--end row-->

        <!--begin row-->
        <div class="row margin-bottom-30">

            <!--begin success message -->
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <p class="contact_success_box">
                        {{ Session::get('success') }}
                    </p>
                </div>
            @endif
            <!--end success message -->

            <!--begin contact form -->
            <form class="contact" action="/contact-us" method="post">
            @csrf
            <!--begin col-md-6-->
                <div class="col-md-6">
                    <input class="contact-input white-input" required="" name="name" placeholder="Full Name*" type="text">

                    <input class="contact-input white-input" required="" name="organization" placeholder="Organization Name*" type="text">

                    <input class="contact-input white-input" required="" name="position" placeholder="Position*" type="text">

                    <input class="contact-input white-input" required="" name="email" placeholder="Email Adress*" type="email">



                </div>
                <!--end col-md-6-->

                <!--begin col-md-6-->
                <div class="col-md-6">
                    <input class="contact-input white-input" required="" name="phone" placeholder="Phone Number*" type="text">
                    <textarea class="contact-commnent white-input" rows="2" cols="20" name="message" placeholder="Your Message..."></textarea>
                    <div class="g-recaptcha"
                         data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                    </div>
                </div>
                <!--end col-md-6-->

                <!--begin col-md-12-->
                <div class="col-md-12 text-center">

                    <input value="Send Message" id="submit-button" class="contact-submit" type="submit">

                </div>
                <!--end col-md-12-->

            </form>
            <!--end contact form -->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
