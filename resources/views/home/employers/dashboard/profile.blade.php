@extends('layouts.home')

@section('title')
    <title>Edit Profile</title>
@endsection

@section('content')
      
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
           <div class="container">
              <div class="row">
                 <div class="col-md-12">
                    <div class="breadcromb-box">
                       <h3>Professional Profile</h3>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="breadcromb-bottom">
           <div class="container">
              <div class="row">
                 <div class="col-md-12">
                    <div class="breadcromb-box-pagin">
                       <ul>
                          <li><a href="#">home</a></li>
                          <li><a href="#">Professional</a></li>
                          <li class="active-breadcromb"><a href="#">Professional Profile</a></li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Breadcromb Area End -->
      
      
     <!-- Candidate Dashboard Area Start -->
     <section class="candidate-dashboard-area section_70">
        <div class="container">
           <div class="row">
              <div class="col-md-4 col-lg-3 dashboard-left-border">
                 @include('home.employer_sidebar')
              </div>
              <div class="col-md-8 col-lg-9">
                 <div class="dashboard-right">
                    <div class="candidate-profile">
                       <div class="candidate-single-profile-info">
                          {{-- <div class="single-resume-feild resume-avatar">
                             <div class="resume-image Professional-resume-image">
                                <img src="assets/img/Professional_page_logo.jpg" alt="resume avatar">
                                <div class="resume-avatar-hover">
                                   <div class="resume-avatar-upload">
                                      <p>
                                         <i class="fa fa-pencil"></i>
                                         Edit
                                      </p>
                                      <input type="file">
                                   </div>
                                </div>
                             </div>
                          </div> --}}
                       </div>
                       <div class="candidate-single-profile-info">
                          <form>
                             <div class="resume-box">
                                <h3>Professional profile</h3>
                                <div class="single-resume-feild feild-flex-2">
                                   <div class="single-input">
                                      <label for="name">Professional Name:</label>
                                      <input type="text" value="{{Auth::user()->name}}" id="name">
                                   </div>
                                   <div class="single-input">
                                      <label for="c_cat">Professional category:</label>
                                      <select id="c_cat">
                                         <option selected>Choose Category</option>
                                         <option>IT Service</option>
                                         <option>Non-Profit</option>
                                         <option>StartUP</option>
                                         <option>Corporate</option>
                                      </select>
                                   </div>
                                </div>
                                {{-- <div class="single-resume-feild feild-flex-2">
                                   <div class="single-input">
                                      <label for="Start">Start:</label>
                                      <input type="text" value="1990" id="Start">
                                   </div>
                                   <div class="single-input">
                                      <label for="member">Team Member:</label>
                                      <input type="text" value="132" id="member">
                                   </div>
                                </div> --}}
                                <div class="single-resume-feild feild-flex-2">
                                   <div class="single-input">
                                      <label for="Location">County:</label>
                                      <input type="text" value="County" id="Location">
                                   </div>
                                   <div class="single-input">
                                      <label for="City">City:</label>
                                      <input type="text" value="Nairobi" id="City">
                                   </div>
                                </div>
                                <div class="single-resume-feild ">
                                   <div class="single-input">
                                      <label for="Bio">Description:</label>
                                      <textarea id="Bio"></textarea>
                                   </div>
                                </div>
                             </div>
                             <div class="resume-box">
                                <h3>Contact Information</h3>
                                <div class="single-resume-feild feild-flex-2">
                                   <div class="single-input">
                                      <label for="Phone">Phone:</label>
                                      <input type="text" value="{{Auth::user()->phone}}" id="Phone">
                                   </div>
                                   <div class="single-input">
                                      <label for="Email">Email:</label>
                                      <input type="text" value="{{Auth::user()->email}}" id="Email">
                                   </div>
                                </div>
                                <div class="single-resume-feild feild-flex-2">
                                 
                                   <div class="single-input">
                                      <label for="City2">City:</label>
                                      <input type="text" value="Nairobi" id="City2">
                                   </div>
                                </div>
                                <div class="single-resume-feild feild-flex-2">
                                   <div class="single-input">
                                      <label for="Zip">Zip:</label>
                                      <input type="text" value="6100" id="Zip">
                                   </div>
                                   <div class="single-input">
                                      <label for="Address22">Address:</label>
                                      <input type="text" value="Nairobi, Kenya" id="Address22">
                                   </div>
                                </div>
                             </div>
                             <div class="resume-box">
                                <h3>social link</h3>
                                <div class="single-resume-feild feild-flex-2">
                                   <div class="single-input">
                                      <label for="twitter">
                                      <i class="fa fa-twitter twitter"></i>
                                      twitter
                                      </label>
                                      <input type="text" value="https://www.twitter.com/" id="twitter" name="twitter">
                                   </div>
                                   <div class="single-input">
                                      <label for="twitter">
                                      <i class="fa fa-facebook facebook"></i>
                                      facebook
                                      </label>
                                      <input type="text" value="https://www.facebook.com/" id="facebook" name="facebook">
                                   </div>
                                </div>
                                <div class="single-resume-feild feild-flex-2">
                                   <div class="single-input">
                                      <label for="google">
                                      <i class="fa fa-google-plus google"></i>
                                      Google
                                      </label>
                                      <input type="text" value="https://www.google.com/" id="google" name="twitter">
                                   </div>
                                   <div class="single-input">
                                      <label for="linkedin">
                                      <i class="fa fa-linkedin linkedin"></i>
                                      linkedin
                                      </label>
                                      <input type="text" value="https://www.linkedin.com/" id="linkedin" name="twitter">
                                   </div>
                                </div>
                             </div>
                             <div class="submit-resume">
                                <button type="submit">Update</button>
                             </div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Candidate Dashboard Area End -->
      
      
@endsection