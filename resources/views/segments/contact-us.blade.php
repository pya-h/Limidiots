<div class="tt-section padding-top-xlg-150">
    <div class="tt-section-inner tt-wrap max-width-700">

        <!-- Begin tt-Heading
                    ======================
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-stroke" to enable stroke style.
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
        <div class="tt-heading tt-heading-xxlg margin-bottom-8-p anim-fadeinup">
            <h3 class="tt-heading-subtitle">Get in Touch</h3>
            <h2 class="tt-heading-title">Let's Work<br> Together!</h2>
            <!-- You can use <br> to break a text line if needed -->
        </div>
        <!-- End tt-Heading -->

        <!-- Begin form
                    ================
                    * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
                    * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                    -->
        <form id="tt-contact-form" class="tt-form-filled anim-fadeinup">

            <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
            <input type="hidden" name="project_name" value="yourwebsiteaddress.com">
            <!-- Change value to your site name -->
            <input type="hidden" name="admin_email" value="your@email.com">
            <!-- Change value to your valid email address (where a message will be sent) -->
            <input type="hidden" name="form_subject"
                value="Message from yourwebsiteaddress.com">
            <!-- Change value to your own message subject -->
            <!-- End Hidden Required Fields -->

            <div class="tt-row">
                <div class="tt-col-md-6">

                    <div class="tt-form-group">
                        <label>Your Name <span class="required">*</span></label>
                        <input class="tt-form-control" type="text" name="Name"
                            placeholder="" required>
                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-md-6">

                    <div class="tt-form-group">
                        <label>Email address <span class="required">*</span></label>
                        <input class="tt-form-control" type="email" name="Email"
                            placeholder="" required>
                    </div>

                </div> <!-- /.tt-col -->
            </div> <!-- /.tt-row -->

            <div class="tt-form-group">
                <label>Subject <span class="required">*</span></label>
                <input class="tt-form-control" type="text" name="Subject" placeholder=""
                    required>
            </div>

            <!-- <div class="tt-form-group">
                      <label>Select an option <span class="required">*</span></label>
                      <select class="tt-form-control" name="option" required>
                       <option value="" disabled selected>Please choose an option</option>
                       <option value="Say Hello">Say hello</option>
                       <option value="New Project">New project</option>
                       <option value="Feedback">Feedback</option>
                       <option value="Other">Other</option>
                      </select>
                     </div> -->

            <div class="tt-form-group">
                <label>Your Message <span class="required">*</span></label>
                <textarea class="tt-form-control" rows="5" name="Message" placeholder="" required></textarea>
            </div>

            <small class="tt-form-text"><em>Fields marked with an asterisk (*) are
                    required!</em></small>

            <button type="submit" class="tt-btn tt-btn-primary margin-top-30">
                <div data-hover="Send Message">Send Message</div>
                <span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
            </button>
        </form>
        <!-- End form -->

    </div> <!-- /.tt-section-inner -->
</div>
<!-- End tt-section -->
