<?php
 require base_path('views/partials/head.php');
 require base_path('views/partials/header.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Note</h1>
      <?php 
        require base_path('views/partials/nav.php')
      ?>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Welcome</h5> -->
              <p class="card-body">
                <h3><?= htmlspecialchars($note['body']) ?></h3>        
                <a href="/notes" class="mt-3">Go back</a>
              <p>
                <form  method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="id" value="<?= $note['id'] ?>">
                  <a href="/note/edit?id=<?= $note['id'] ?>" class="btn btn-secondary">Edit</a>
                  <button class="btn btn-danger">Delete</button>
                </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
  require base_path('views/partials/footer.php')
?>
