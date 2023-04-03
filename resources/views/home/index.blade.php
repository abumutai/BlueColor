@extends('layouts.home')

@section('title')
    <title>Home</title>
@endsection

@section('content')
         <!-- Banner Area Start -->
         <section class="jobguru-banner-area">
            <div class="banner-slider owl-carousel">
               <div class="banner-single-slider slider-item-1">
                  <div class="slider-offset"></div>
               </div>
               <div class="banner-single-slider slider-item-2">
                  <div class="slider-offset"></div>
               </div>
            </div>
            <div class="banner-text">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner-search">
                           <h2>Hire Professionals</h2>
                           <h4>We have 100 professionals on our platform! </h4>
                           <form>
                              <div class="banner-form-box">
                                 <div class="banner-form-input">
                                    <input type="text" placeholder="Service Title, Keywords, or Phrase">
                                 </div>
                                 <div class="banner-form-input">
                                    <input type="text" placeholder="City or County">
                                 </div>
                                 <div class="banner-form-input">
                                    <select class="banner-select">
                                       <option selected>Select Category</option>
                                       <option value="1">Plumbing</option>
                                       <option value="2">Car wash</option>
                                       <option value="3">Cleaning</option>
                                    </select>
                                 </div>
                                 <div class="banner-form-input">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Banner Area End -->
          
          
         <!-- Categories Area Start -->
         <section class="jobguru-categories-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="site-heading">
                        <h2>top Trending <span>Service Categories</span></h2>
                        <p>An expert is out there. We'll help you find them. We're your first step to find the services you need.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder account_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>Office Cleaning</h3>
                        </div>
                        <img src="assets/img/account_cat.jpg" alt="category" />
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder design_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>Clerical Work</h3>
                        </div>
                        <img src="assets/img/design_art.jpg" alt="category" />
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder restaurant_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-cutlery"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>Cooking</h3>
                        </div>
                        <img src="assets/img/restaurent.jpg" alt="category" />
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder tech_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-code"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>Computer</h3>
                        </div>
                        <img src="assets/img/programing_cat.jpg" alt="category" />
                     </a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder data_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>Maths Tutor</h3>
                        </div>
                        <img src="assets/img/data_cat.png" alt="category" />
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder writing_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-pencil"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>Writing / Translations</h3>
                        </div>
                        <img src="assets/img/writing_cat.jpg" alt="category" />
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder edu_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>Home Schooling</h3>
                        </div>
                        <img src="assets/img/edu_cat.jpg" alt="category" />
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <a href="#" class="single-category-holder sale_cat">
                        <div class="category-holder-icon">
                           <i class="fa fa-bullhorn"></i>
                        </div>
                        <div class="category-holder-text">
                           <h3>sales</h3>
                        </div>
                        <img src="assets/img/sale_cat.png" alt="category" />
                     </a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="load-more">
                        <a href="#" class="jobguru-btn">browse all categories</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Categories Area End -->
          
          
         <!-- Inner Hire Area Start -->
         <section class="jobguru-inner-hire-area section_100">
            <div class="hire_circle"></div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="inner-hire-left">
                        <h3>Hire a professional</h3>
                        <p>Explore The Greatest of Our professionals. You Won’t Be Disappointed</p>
                        <a href="#" class="jobguru-btn-3">sign up as user</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Inner Hire Area End -->
          
          
         <!-- Job Tab Area Start -->
         <section class="jobguru-job-tab-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="site-heading">
                        <h2>Top Service Providers <span></span></h2>
                        <p>It's easy. Simply book a service that you need completed and receive booking from our providers within minutes</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class=" job-tab">
                        <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="pills-companies-tab" data-bs-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">top Companies</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-job-tab" data-bs-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">job openning</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                           <div class="top-company-tab">
                              <ul>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-4.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">jamulai - consulting & finance Co.</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-briefcase"></i>32 Services</p>
                                          <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                          <p class="rating-company">4.9</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">view profile</a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-2.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">Buildo - construction Co.</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-briefcase"></i>32 Services</p>
                                          <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                          <p class="rating-company">4.2</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">view profile</a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-3.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">palms - school & college.</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-briefcase"></i>32 Services</p>
                                          <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                          <p class="rating-company">4.6</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">view profile</a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-1.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">finance - consulting & business Co.</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-briefcase"></i>32 Services</p>
                                          <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                          <p class="rating-company">4.9</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">view profile</a>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                           <div class="top-company-tab">
                              <ul>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-1.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">Regional Sales Manager</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                          <p class="varify"><i class="fa fa-check"></i>Fixed price : Kshs 1200-Kshs 2000</p>
                                          <p class="rating-company">4.1</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">bid now</a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-4.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">C Developer (Senior) C .Net</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                          <p class="varify"><i class="fa fa-check"></i>Fixed price : Kshs 800-Kshs 1200</p>
                                          <p class="rating-company">3.1</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">bid now</a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-3.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">Asst. Teacher</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-clock-o"></i>3 minutes ago</p>
                                          <p class="varify"><i class="fa fa-check"></i>Fixed price : Kshs 800-Kshs 1200</p>
                                          <p class="rating-company">4.3</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">bid now</a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="top-company-list">
                                       <div class="company-list-logo">
                                          <a href="#">
                                          <img src="assets/img/company-logo-2.png" alt="company list 1" />
                                          </a>
                                       </div>
                                       <div class="company-list-details">
                                          <h3><a href="#">civil engineer</a></h3>
                                          <p class="company-state"><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                                          <p class="open-icon"><i class="fa fa-clock-o"></i>30 minutes ago</p>
                                          <p class="varify"><i class="fa fa-check"></i>Fixed price : Kshs 2000-Kshs 2500</p>
                                          <p class="rating-company">3.7</p>
                                       </div>
                                       <div class="company-list-btn">
                                          <a href="#" class="jobguru-btn">bid now</a>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="load-more">
                        <a href="#" class="jobguru-btn">browse more professionals</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Job Tab Area End -->
          
          
         <!-- Video Area Start -->
         <section class="jobguru-video-area section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="video-container">
                        <h2>Hire experts service providers today for <br> any job, any time.</h2>
                        <div class="video-btn">
                           <a class="popup-youtube" href="https://www.youtube.com/watch?v=k-R6AFn9-ek">
                           <i class="fa fa-play"></i>
                           how it works
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Video Area End -->
          
          
         <!-- How Works Area Start -->
         <section class="how-works-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="site-heading">
                        <h2>how it <span>works</span></h2>
                        <p>It's easy. Simply search for services you need completed and book within minutes</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="how-works-box box-1">
                        <img src="assets/img/arrow-right-top.png" alt="works" />
                        <div class="works-box-icon">
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="works-box-text">
                           <p>sign up</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="how-works-box box-2">
                        <img src="assets/img/arrow-right-bottom.png" alt="works" />
                        <div class="works-box-icon">
                           <i class="fa fa-gavel"></i>
                        </div>
                        <div class="works-box-text">
                           <p>find expert</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="how-works-box box-3">
                        <div class="works-box-icon">
                           <i class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="works-box-text">
                           <p>book</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- How Works Area End -->
          
          
         <!-- Blog Area Start -->
         <section class="jobguru-blog-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="site-heading">
                        <h2>Recent From <span>Blog</span></h2>
                        <p>Learn more about BlueColor</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-12">
                     <a href="#">
                        <div class="single-blog">
                           <div class="blog-image">
                              <img src="assets/img/blog-1.jpg" alt="blog image" />
                              <p><span> 21</span> July</p>
                           </div>
                           <div class="blog-text">
                              <h3>How to become a BlueColor Professional</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-4 col-md-12">
                     <a href="#">
                        <div class="single-blog">
                           <div class="blog-image">
                              <img src="assets/img/blog-2.jpg" alt="blog image" />
                              <p><span> 21</span> July</p>
                           </div>
                           <div class="blog-text">
                              <h3>Learn how to earn a living from BlueColor</h3>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-4 col-md-12">
                     <a href="#">
                        <div class="single-blog">
                           <div class="blog-image">
                              <img src="assets/img/blog-3.jpeg" alt="blog image" />
                              <p><span> 21</span> July</p>
                           </div>
                           <div class="blog-text">
                              <h3>what are those Steps to be a Successful provider</h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Blog Area End -->
@endsection