<?php
session_start();
$email = $_SESSION['username'];
$base = "https://localhost/tatvasoft/Helperland_MVC/";
if(!isset($_SESSION['username'])){
  header('Location:' . $base);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Service provider | Settings</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/SPsetting.css" />
  
   
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  
</head>

<body>
<?php
  include('navbar_BS.php');
  ?>

  <section class="welcom-section">
    <div class="container-welcom">
      <h3>Welcome, <?php echo $_SESSION['firstname']; ?></h3>
    </div>
    <hr />
  </section>

  <section class="history-section">
    <div class="container-main">
      <div class="row sidebar">
        <div class="col-lg-6 col-md-3 col-sm-6 left-sidebar">
          <div class="list-group list-group-flush">

            <a class="list-group-item p-2" id="dash_link">Dashboard</a>
            <a class="list-group-item p-2" id="history_link">New Service Requests</a>
            <a class="list-group-item p-2 " href="#!">Upcoming Services</a>
            <a class="list-group-item p-2" id="fav_link">
            Service Schedule
            </a>
            <a class="list-group-item p-2" href="#!">
            Service History
            </a>
           
            <a class="list-group-item p-2" href="#!">My Ratings</a>
            <a class="list-group-item p-2" href="#!">Block Customer</a>
            
          </div>
        </div>

        <div class="col-lg-8 col-md-3 col-sm-6 tab-content">
          
          <div id="settings" class="my_settings">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="home" aria-selected="true">My Details</button>
              </li>
              
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#change_pass" type="button" role="tab" aria-controls="contact" aria-selected="false">Change Password</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="home-tab">
              <div class="my_details">
                  <div class="accStatus"><b>Account Status: </b> <span>Active</span> </div>
                <div class="row">
                  <div class="row">
                    <div class="col-11">
                    <h6>Basic details</h6>
                    <hr>
                    </div>
                    <div class="col-1">
                    <div class="avtarimage_dp">
                        <img src="./assets/assets/cap.png" class="avatarimgdp">
                     </div>
                    </div>
                  </div>
                    
                    
                   
                  <div class="col-4">
                    <label for="first_name">First name</label>
                    <input type="text" id="first_name" class="form-control" placeholder="First name" >
                  </div>
                  <div class="col-4">
                    <label for="last_name">Last name</label>
                    <input type="text" id="last_name" class="form-control" placeholder="Last name" >
                  </div>
                  <div class="col-4">
                    <label for="email_detail">Email address</label>
                    <input type="email" id="email_detail" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="col-4">
                    <label for="phone_detail">Phone number</label>
                    <input type="tel" id="phone_detail" class="form-control" placeholder="Phone number">
                  </div>
                  <div class="col-4">
                    <label for="birthdate">Date of Birth</label>
                    <div class="row">
                            <div class="col-md-3" id="dobDate">
                            <select class="form-control" id="birthdate">
                                <option value="00">Day</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>


                            </select>
                            </div>

                            <div class="col-md-5" id="dobMonth">
                            <select class="form-control  " id="birthmonth">
                                <option value="00">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            </div>

                            <div class="col-md-4" id="dobYear">
                            <select class="form-control" id="birthyear">
                                <option value="00">Year</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>

                            </select>
                            </div>

                            <span class="dob_err"></span>
                            </div>
                  </div>
                  <div class="col-4">
                  <label for="nationality">Nationality</label>
                    
                      <div id="dobDate">
                          <select class="form-control" id="nationality">
                          <option value="">Nationality</option>
                            
                            <option value="176685">Indian</option>
                            <option value="176625">German</option>
                            <option value="176626">Afghan</option>
                            <option value="176650">Brazilian</option>
                            <option value="176651">British</option>
                            <option value="176639">Australian</option>
                            <option value="176630">American</option>
                          </select>
                          <span style="color: red; font-size: 13px;" class="errmsg1"></span>
                      </div>
                  </div>
                  </div>
                  <hr style="margin-top: 20px;">
                  <div class="col-4">
                    <div class="row">
                        <label>Gender</label>
                        <div class="col radiovalues">
                            <label>
                                <input name="gender" type="radio" value="1">
                                Male
                            </label>
                        </div>
    
                        <div class="col radiovalues">
    
                            <label>
                                <input name="gender" type="radio" value="2">
                                Female
                            </label>
                        </div>
                        <div class="col radiovalues">
    
                            <label>
                                <input name="gender" type="radio" value="0">
    
                                Other
                            </label>
                        </div>
                        <span style="color: red; font-size: 13px;" class="errmsg2"></span>
                    </div>
                    
                  </div> 
                  
                  <div class="row">
                  <label style="margin-top: 15px;">Select Avatar</label>
                  <div class="col-2">
                  <div class="avtarimages">
                        <img src="./assets/assets/avatar-hat.png" class="avatarimg active">
                  </div>
                  
                  </div>
                  <div class="col-2">
                  <div class="avtarimages">
                        <img src="./assets/assets/avatar-car.png" class="avatarimg capImg">
                  </div>
                  </div>
                  <div class="col-2">
                  <div class="avtarimages">
                        <img src="./assets/assets/avatar-ship.png" class="avatarimg">
                  </div>
                  </div>
                  <div class="col-2">
                  <div class="avtarimages">
                        <img src="./assets/assets/avatar-iron.png" class="avatarimg">
                  </div>
                  </div>
                  <div class="col-2">
                  <div class="avtarimages">
                        <img src="./assets/assets/avatar-female.png" class="avatarimg">
                  </div>
                  </div>
                  <div class="col-2">
                  <div class="avtarimages">
                        <img src="./assets/assets/avatar-male.png" class="avatarimg">
                  </div>
                  </div>
                  <span style="color: red; font-size: 13px;" class="errmsg3"></span>
                  </div>
                  
                  <div class="row">
                      <h6 style="margin-top: 15px;">My address</h6>
                      <hr>
                      
                    <div class="col-4">
                        <label for="street_detail">Street Name</label>
                        <input type="text" id="street_detail" class="form-control" placeholder="Street Name">
                        <span style="color: red; font-size: 13px;" class="errmsg4"></span>
                      </div>
                       
                      
                      <div class="col-4">
                        <label for="house">House number</label>
                        <input type="number" id="house" class="form-control" placeholder="House number">
                        <span style="color: red; font-size: 13px;" class="errmsg5"></span>
                      </div>
                      
                      <div class="col-4">
                        <label for="postal">Postal code</label>
                        <input type="number" id="postal" class="form-control" placeholder="Postal code">
                        <span style="color: red; font-size: 13px;" class="errmsg6"></span>
                      </div>
                      
                      <div class="col-4">
                        <label for="city">City</label>
                        <input type="text" id="city" class="form-control" placeholder="City">
                        <span style="color: red; font-size: 13px;" class="errmsg7"></span>
                      </div>
                      
                  </div>
                 

                  <div><button class="save-btn" id="save">Save</button></div>
                  
                </div>

              </div>
              

              
              <div class="tab-pane fade" id="change_pass" role="change_pass" aria-labelledby="contact-tab">
                <div class="change_password">
                <label for="old_pass">Old Password</label>
                  <input type="password" id="old_pass" class="form-control w-25" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,14}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 to 14 characters" placeholder="Current Password" >
                  <div class="errMsg1" style="color: red"></div>
                  <label for="new_pass">New Password</label>
                  <input type="password" id="new_pass" class="form-control w-25" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,14}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 to 14 characters" placeholder="Password" >
                  <div class="errMsg2" style="color: red"></div>
                  <label for="confirm_pass">Confirm Password</label>
                  <input type="password" id="confirm_pass" class="form-control w-25" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,14}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 to 14 characters" placeholder="Confirm Password" >
                  <div class="errMsg3" style="color: red"></div>
                
                  <!-- <button type="submit" class="savePass">Save</button> -->
                </div>
                <div class="save-pass">
                <button type="submit" class="savePass">Save</button>
                </div>

              </div>
            </div>

          </div>
         
        </div>
        
        

      </div>






    </div>
    </div>
  </section>

  <footer class="site-footer">
    <div class="footer-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2 footer-widget">
            <a href="#" title="Helper Hand">
              <img src="./assets/assets/logo-small.png" alt="Helper Hand" />
            </a>
          </div>
          <div class="col-lg-8 footer-widget">
            <ul class="footer-navigation d-flex justify-content-center">
              <li>
                <a href="#" title="Home">Home</a>
              </li>
              <li>
                <a href="#" title="About">About</a>
              </li>
              <li>
                <a href="#" title="Testimonials">Testimonials</a>
              </li>
              <li>
                <a href="#" title="FAQs">FAQs</a>
              </li>
              <li>
                <a href="#" title="Insurance Policy">Insurance Policy</a>
              </li>
              <li>
                <a href="#" title="Impressum">Impressum</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 footer-widget">
            <ul class="social-media-list d-flex justify-content-end">
              <li>
                <a href="#" target="_blank" title="Facebook">
                  <img src="./assets/assets/ic-facebook.png" alt="Facebook" />
                </a>
              </li>
              <li>
                <a href="#" target="_blank" title="Instagram">
                  <img src="./assets/assets/ic-instagram.png" alt="Instagram" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="./assets/js/jquery.js"></script>
  
  
  <script src="./assets/js/SPsetting.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script>
    $(document).ready(function () {
      $("#datepicker").datepicker();
         

    });
    
    
  </script>
  <?php 
    include('SPsettingAJAX.php');
  ?>



</body>

</html>