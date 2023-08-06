<?php
require('partials/head.php');
require('partials/header.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>My Notes</h1>
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
                <?php foreach($notes as $note) :?>
                    <a href="note?id=<?= $note['id']?>" class="text-decoration-underline">
                      <li><?= $note['body'] ?></li>
                    </a>
              <?php endforeach; ?>
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
