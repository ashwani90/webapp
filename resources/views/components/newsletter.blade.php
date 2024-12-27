<div class="newsletter">

        <img class="newsletter-image" src="{{ $data['newsletter_image'] ?? './img/products/meeting.webp' }}" alt="nature images"/>

        <div class="text-container">
            <form name="email-signup" class="enable-analytics" data-form-name="stay-in-the-know.newsletter-subscription-form" data-form-type="Subscription Form">
                <div class="signup-right-content-inner-section">
                    <div class="signup-form-section">
                        <h2 class="signup-right-content-heading-h2 mb-4">{{ $data['newsletter_head'] ?? 'Stay in the know' }}</h2>

                        <p class="signup-right-content-para-p">{{ $data['newsletter_desc'] ?? 'Register for our email newsletter to get the freshest takes, straight to your inbox.' }} </p>
                        <div class="row loader-outer">
                            <div class="col-12 col-xl-8">
                                <div class="form-element form-element-error">



                                     <input autocomplete="off" id="emailSignupId" aria-label="Email" data-validation="email" type="email" maxlength="250" name="emailId" class="form-control email-check position-relative email-signup-input-field msg-tooltip" placeholder="Email" aria-describedby="inputEmailSignUpError"> <span class="email-signup-mail-icon position-absolute" title="Email"><span class="sr-only">Email</span></span>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 order-3 order-lg-3 order-xl-1 email-button-wrapper loader-hide-button">
                                <button type="button" class="btn btn-responsive tcs-primary-btn d-inline-block tcs-section-click">Register</button>
                            </div>
                            <!-- Loader button -->
                            <div class="col-12 col-xl-4 order-3 order-lg-3 order-xl-1 loader-button-wrapper d-none">
                                <div class="loader-button-visible-text" tabindex="-1">
                                    <button disabled="" type="submit" class="d-grid btn loader-button px-3" aria-hidden="true">
                                        <span class="spinner">Sending... <i class="loader-spin"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="sigunup-form-common-error-text"></p>
                    </div>
                    <!-- Thank you Box -->
                    <div class="email-signup-thankyou-box d-none" tabindex="0">
                        <div class="email-signup-email-icon mb-3"></div>
                        <p>Thank you! We'll be in touch with you shortly.</p>

                    </div>
                    <div class="contact-server-error-msg d-none" tabindex="0">
                        <div class="email-signup-email-icon mb-3"></div>
                        <h5 class="contact-server-error-msg-heading">Oops! Something went wrong!</h5>
                        <p class="contact-server-error-msg-content">Looks like we are experiencing some connectivity issues. Please try after some time.</p>
                        <p class="post-servlet-Error"></p>
                    </div>
                </div>

                </form>
        </div>
    </div>
