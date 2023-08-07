<?php
require('partials/head.php');
require('partials/header.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Note</h1>
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
                <h3><?= $note['body'] ?></h3>        
                <a href="/notes" class="mt-3">Go back</a>
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
