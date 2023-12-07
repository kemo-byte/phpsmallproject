<?php
 require base_path('views/partials/head.php');
 require base_path('views/partials/header.php');
?>
<link rel="stylesheet" href="/assets/css/login.css">

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sign Up</h1>
      <?php 
        require base_path('views/partials/nav.php')
      ?>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

     




          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->


              <?php if(!empty($errors['email'])) :?>
                      <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                        <?= $errors['email'] ?>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>                   
                   <?php endif; ?>
                   
                   <?php if(!empty($errors['password'])) :?>
                      <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                        <?= $errors['password'] ?>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>                   
                   <?php endif; ?>
                   

              <h6 class="mb-0 pb-3"><span>Login </span><span>Register</span></h6>

              
              <!-- Start Login  -->

              <!-- <div class="card mb-3 "> -->
                <!-- Start Toggle -->
              <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" onclick=" if (checked == 'true') {checked='checked' }" />
              <label for="reg-log"></label>
              <!-- End Toggle -->

                <div class="card-3d-wrap mx-auto">
                  
                  <div class="card card-3d-wrapper">


                    <div class="card-front">

                    <div class="card-body">

                      <div class="pt-4 pb-2 ">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Account</h5>
                        <p class="text-center small">Enter your email & password to login</p>
                      </div>

                      <form class="row g-3 needs-validation" action="/users/login" method="post" novalidate>

                        <div class="col-12">
                          <div class="input-group has-validation">
                            <input type="email" placeholder="Email" name="email" class="form-control" id="loginemail"
                            value=""
                            required>
                            <div class="invalid-feedback">Please enter your email.</div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="input-group has-validation">
                            <input type="password" placeholder="Password" name="password" class="form-control" id="loginpassword"
                            value=""
                            required>
                            <div class="invalid-feedback">Please enter your password.</div>
                          </div>
                        </div>

                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Login</button>
                        </div>
                                            </form>

                    </div>
                    </div>

                    <!-- End Login -->

                    <!-- Start Register -->
                    <div class="card-back">
                    <div class="card-body">

                      <div class="pt-4 pb-2 ">
                        <h5 class="card-title text-center pb-0 fs-4">Register New  Account</h5>
                        <p class="text-center small">Fill all the fields to register</p>
                      </div>

                      
                      <form class="row g-3 needs-validation" action="/register" method="post" novalidate>

                        <div class="col-12">
                         <!-- <div class="input-group has-validation">
                            <input type="text" placeholder="Name" name="name" class="form-control" id="name"
                            value=""
                            required>
                            
                          </div> -->
                        </div>
                        <div class="col-12">
                          <div class="input-group has-validation">
                            <input type="email" placeholder="Email" name="email1" class="form-control" id="email"
                            value=""
                            required>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-group has-validation">
                            <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                            <input type="password" placeholder="Password" name="password1" class="form-control" id="password"
                            value=""
                            required>
                          </div>
                        </div>
                        <!-- <div class="col-12">
                          <div class="input-group has-validation">
                            <input type="password" placeholder="Confirm password" name="password2" class="form-control" id="password2"
                            value=""
                            required>
                          </div>
                        </div>
                         -->
                        
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Register</button>
                        </div>
                      </form>

                    </div>
                </div>
                
                <!-- End Register -->
            </div>
            
            </div>
                <!-- </div> -->




                <div class="credits mt-3">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>

              </div>
            </div>
          </div>

      </section>







        
      </div>

  </main><!-- End #main -->

  <?php
require base_path('views/partials/footer.php')
?>
