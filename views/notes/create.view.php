<?php
 require base_path('views/partials/head.php');
 require base_path('views/partials/header.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Note</h1>
      <?php 
        require base_path('views/partials/nav.php')
      ?>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-6">

          <div class="card  pt-3">
              
              <!-- <h5 class="card-title">Welcome</h5> -->
              <?php if(!empty($errors)) :?>
                      <div class="small alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                        <?= $errors['body'] ?>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>                   
                   <?php endif; ?>
                   
              <div class="card-body pt-3">
                
                  <div class="row gy-4">
                  
                  <form action="/notes" method="POST">


                    <div class="col-md-12">
                      <textarea class="form-control" 
                      name="body" rows="6" placeholder="Type your note here ..."
                    required><?= isset($_POST['body']) ? $_POST['body'] : ''?></textarea>
                    </div>
                   
                    
                    <div class="col-md-12 text-center mt-3">
                    
                      <button class="create-note-btn" type="submit">Save</button>
                    </div>

                </form>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
require base_path('views/partials/footer.php')
?>
