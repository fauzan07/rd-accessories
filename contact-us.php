<?php include('header.php'); ?>

<!-- banners section start -->

<section class="contact py-5 bg-light">
    <div class="container"> 
        <div class="row contact-box-white justify-content-center">
            <div class="col-lg-6">
                <div class="contact-box border shadow bg-white">
                <form action="#" method="POST">
                    <h3>GET IN TOUCH</h3>
                    <p>If you're looking forward to contact RD Team, you are in the right page. Fill in the form below and our team will get in touch with you as soon as possible.</p>
                    <div class="form-row pb-3">
                        <div class="col">
                            <input type="text" class="form-control form-control-sm" name="first_name" id="first_name" placeholder="First name" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm" name="last_name" id="last_name" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="form-row pb-3">
                        <div class="col">
                            <input type="email" class="form-control form-control-sm" name="email_id" id="email_id" placeholder="Email Address" required>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control form-control-sm" name="phone_no" id="phone_no" placeholder="Phone number" required>
                        </div>
                    </div>
                    <div class="form-row pb-3">
                        <div class="col">
                            <select class="form-control form-control-sm">
                                <option>Enquiry</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-contact">Submit</button>
                </form>
                </div>
            </div>
   
            <div class="col-lg-3">
                <div class="contact-box2 p-4 border shadow">
                <h4 class="pb-4">CONTACT US</h4>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-map-marker fa-2x pr-4"></i>Mumbai<br><span class="lower-text">Maharashtra-400007<span></a></li>
                    <li><a href="#"><i class="fa fa-envelope-o fa-2x pr-4"></i>nfo@rdaccessories.in</a></li>
                    <li><a href="#"><i class="fa fa-volume-control-phone fa-2x pr-4"></i>+91 9326081617</a></li>
                </ul>
                </div>
            </div>
        </div>  
</section>


<!-- banners section ends -->




<?php include('footer.php'); ?>