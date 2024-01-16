<div class="tt-section padding-top-xlg-150">
    <div id="contact-us-form" class="tt-section-inner tt-wrap max-width-700">

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
        <form class="tt-form-filled anim-fadeinup" method="post" action="{{ route('contact-us') }}">
            @csrf
            <div class="tt-row">
                <div class="tt-col-md-6">

                    <div class="tt-form-group">
                        <label>Your Name <span class="required">*</span></label>
                        <input class="tt-form-control" type="text" name="your_name" placeholder="" value="{{old('your_name')}}" required>
                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-md-6">

                    <div class="tt-form-group">
                        <label>Email address <span class="required">*</span></label>
                        <input class="tt-form-control" type="email" name="your_email" placeholder=""  value="{{old('your_email')}}" required>
                    </div>

                </div> <!-- /.tt-col -->
            </div> <!-- /.tt-row -->

            <div class="tt-form-group">
                <label>Subject</label>
                <input class="tt-form-control" type="text" name="your_subject" placeholder="" value="{{old('your_subject')}}">
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
                <textarea class="tt-form-control" rows="5" name="your_message" placeholder="" required>{{old('your_message')}}</textarea>
            </div>
            @if (!$contact_result)
                <small class="tt-form-text"><em>Fields marked with an asterisk (*) are
                        required!</em></small>

                <button type="submit" class="tt-btn tt-btn-primary margin-top-30">
                    <div data-hover="Now!">Send Message</div>
                    <span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
                </button>
            @elseif (!$contact_result['ok'])
                <div class="alert alert-danger text-danger">
                    <ul>
                        @foreach ($contact_result['msg'] as $error)
                            <li style="color: red !important">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="submit" class="tt-btn tt-btn-primary margin-top-30">
                    <div data-hover="Again!">Send Message</div>
                    <span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
                </button>
            @else
                <h5 class="tt-form-text" style="color:{{ $contact_result['ok'] ? 'green' : 'red' }} !important">
                    <em>{{ $contact_result['msg'] }}</em></h5>
                {{-- <script>
                    setTimeout(() => {
                        var formElement = document.getElementById('contact-us-form');
                        console.log(formElement)

                        if (formElement) {
                            if ('scrollBehavior' in document.documentElement.style) {
                                formElement.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            } else {
                                formElement.scrollIntoView();
                            }
                        }
                    }, [1000]);
                </script> --}}
            @endif

        </form>
        <!-- End form -->

    </div> <!-- /.tt-section-inner -->
</div>
<!-- End tt-section -->
