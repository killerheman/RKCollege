@extends('home.includes.layout', ['title' => 'Contact Us'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Contact Us">
                <span>Contact Us</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <article class="contact-form col-md-8 col-sm-7  page-row">
                    <form>
                        <div class="form-group name">
                            <span id="ctl00_ContentPlaceHolder1_lblMessage"></span>
                            <label for="name">Name <span class="required"> <span
                                        id="ctl00_ContentPlaceHolder1_RequiredFieldValidator5"
                                        style="color:Red;display:none;">*</span></span></label>
                            <input name="ctl00$ContentPlaceHolder1$txtName" type="text"
                                id="ctl00_ContentPlaceHolder1_txtName" class="form-control"
                                placeholder="Enter your name" />

                        </div>
                        <!--//form-group-->
                        <div class="form-group email">
                            <label for="email">Email <span class="required"> <span
                                        id="ctl00_ContentPlaceHolder1_RequiredFieldValidator4"
                                        style="color:Red;display:none;">*</span></span></label>
                            <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text"
                                id="ctl00_ContentPlaceHolder1_txtEmail" class="form-control"
                                placeholder="Enter your email" />

                        </div>
                        <!--//form-group-->
                        <div class="form-group phone">
                            <label for="phone">Phone <span class="required"> <span
                                        id="ctl00_ContentPlaceHolder1_RequiredFieldValidator3"
                                        style="color:Red;display:none;">*</span></span></label>
                            <input name="ctl00$ContentPlaceHolder1$txtPhone" type="text"
                                id="ctl00_ContentPlaceHolder1_txtPhone" class="form-control"
                                placeholder="Enter your contact number" />

                        </div>
                        <!--//form-group-->
                        <div class="form-group subject">
                            <label for="phone">Subject <span class="required"><span
                                        id="ctl00_ContentPlaceHolder1_RequiredFieldValidator2"
                                        style="color:Red;display:none;">*</span></span></label>
                            <input name="ctl00$ContentPlaceHolder1$txtSubject" type="text"
                                id="ctl00_ContentPlaceHolder1_txtSubject" class="form-control"
                                placeholder="Subject" />

                        </div>
                        <!--//form-group-->
                        <div class="form-group message">
                            <label for="message">Message<span class="required"> <span
                                        id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1"
                                        style="color:Red;display:none;">*</span></span></label>
                            <textarea name="ctl00$ContentPlaceHolder1$txtMessage"
                                id="ctl00_ContentPlaceHolder1_txtMessage" class="form-control" rows="6"
                                placeholder="Enter your message here..."></textarea>

                        </div>
                        <!--//form-group-->

                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnSave" value="Send Message"
                            onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSave&quot;, &quot;&quot;, true, &quot;Required&quot;, &quot;&quot;, false, false))"
                            id="ctl00_ContentPlaceHolder1_btnSave" class="btn btn-theme" />
                    </form>
                </article>
                <!--//contact-form-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                    <section class="widget has-divider">
                        <h3 class="title">Postal Address</h3>
                        <p class="adr">
                            <span class="adr-group">
                                <span class="street-address">C.M. College</span><br>
                                <span class="region">Quilaghat, Rahamganj</span><br>
                                <span class="postal-code">Darbhanga - 846004</span><br>
                                <span class="country-name">Bihar (India)</span>
                            </span>
                        </p>
                    </section>
                    <!--//widget-->

                    <section class="widget has-divider">
                        <h3 class="title">Working Hours</h3>
                        <p><b>Monday-Saturday :</b> 08:00am - 04:00pm </p>
                        <p><b>Sunday :</b> CLOSED </p>
                    </section>
                    <!--//widget-->

                    <section class="widget">
                        <h3 class="title">All Enquiries</h3>
                        <p class="tel"><i class="fa fa-phone"></i>Phone : <a href="tel:+919191683430" target='_blank'>+91 9191683430</a></p>
                        <p class="email"><i class="fa fa-envelope"></i>Email: <a
                                href="mailto:principalcmcollege@yahoo.com" target='_blank'>principalcmcollege@yahoo.com</a></p>
                    </section>
                </aside>
                <!--//page-sidebar-->
            </div>
            <!--//page-row-->
            <div class="page-row">
                <article class="map-section">
                    <h3 class="title">How to find us</h3>
                    <div class="gmap-wrapper" id="map">
                        <!--//You need to embed your own google map below-->
                        <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1206.2378580730024!2d85.89134851380634!3d26.1450174042117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb84ae3a028c9%3A0x6f21f89995fface2!2sC.%20M.%20College!5e0!3m2!1sen!2sin!4v1667933717345!5m2!1sen!2sin"
                            width="600" height="450" frameborder="0" style="border:0"
                            allowfullscreen></iframe>
                    </div>
                    <!--//gmap-wrapper-->
                </article>
                <!--//map-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
