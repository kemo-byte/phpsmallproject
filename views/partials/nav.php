<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a <?php echo urlIs('/') ? 'class="active"' : '' ?> href="/">Home</a></li>
          <li class="breadcrumb-item"><a <?php echo urlIs('/about') ? 'class="active"' : '' ?> href="/about">About</a></li>
          <li class="breadcrumb-item"><a <?php echo urlIs('/contact') ? 'class="active"' : '' ?> href="/contact">Contact</a></li>
          <?php if($_SESSION['user'] ?? false){ ?>
            <li class="breadcrumb-item"><a <?php echo urlIs('/notes') ? 'class="active"' : '' ?> href="/notes">Notes</a></li>
          <?php } ?>
        </ol>
</nav>