@extends('layouts.layout')

@section('title')
    <title>Contact Us</title>
@endsection

@section('content')
     
<div class="content">
				
   <div class="container">
   
      <!-- Contact Details -->
      <div class="contact-details">
         <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="contact-info flex-fill">
                  <span><i class="feather-phone"></i></span>
                  <div class="contact-data">
                     <h4>Phone Number</h4>
                     <p>(888) 888-8888</p>
                     <p>(123) 456-7890</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="contact-info flex-fill">
                  <span><i class="feather-mail"></i></span>
                  <div class="contact-data">
                     <h4>Email Address</h4>
                     <p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection#abdfd9decec7d2d8cec7c7ebced3cac6dbc7ce85c8c4c6"><span class="__cf_email__" data-cfemail="9befe9eefef7e2e8fef7f7dbfee3faf6ebf7feb5f8f4f6">[email&#160;protected]</span></a></p>
                     <p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection#f8929790968b95918c90b89d80999588949dd69b9795"><span class="__cf_email__" data-cfemail="472d282f29342a2e332f07223f262a372b226924282a">[email&#160;protected]</span></a></p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
               <div class="contact-info flex-fill">
                  <span><i class="feather-map-pin"></i></span>
                  <div class="contact-data">
                     <h4>Address</h4>
                     <p>367 Hillcrest Lane, Irvine, California, United States</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /Contact Details -->
      
      <!-- Get In Touch -->
      <div class="row">
         <div class="col-md-6">
            <div class="contact-img">
               <img src="assets/img/contact.jpg" class="img-fluid" alt="img">
            </div>
         </div>
         <div class="col-md-6">
            <div class="contact-queries">
               <h2>Get In Touch</h2>
               <form action="https://html.truelysell.com/template3/contact-us.html">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Name</label>
                           <input class="form-control" type="text" placeholder="Enter Name*">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Email</label>
                           <input class="form-control" type="email" placeholder="Enter Email Address*">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="col-form-label">Phone Number</label>
                           <input class="form-control" type="text" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Message</label>
                           <textarea class="form-control" rows="4" placeholder="Type Message"></textarea>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Send Message<i class="feather-arrow-right-circle ms-2"></i></button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      
      <!-- /Get In Touch -->
      
   </div>
</div>

<!-- Map -->
<div class="map-grid">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact-map"></iframe>
</div>	
<!-- /Map -->
      
@endsection