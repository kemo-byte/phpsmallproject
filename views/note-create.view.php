<?php
require('partials/head.php');
require('partials/header.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Note</h1>
      <?php 
        require('partials/nav.php')
      ?>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Welcome</h5> -->
              <p class="card-body">
                <form  method="POST">
                  <div class="row gy-4">


                    <div class="col-md-12">
                      <textarea class="form-control" name="body" rows="6" placeholder="Type your note here ..." required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                    
                      <button class="create-note-btn" type="submit">Save</button>
                    </div>

                  </div>
                </form>
              <p>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
require('partials/footer.php')
?>
