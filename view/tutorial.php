<?php 

include('../template/header.php');
include('../template/link.php');

?>

    <!-- kategori -->
    <div class="container kt">
      <div class="kategori">
        <h5>Tutorial</h5>
        <h4>Mau belajar apa hari ini ?</h4>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1><i class="bi bi-code-square"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Web Programming</h6>
              <p class="card-text">Tutorial Membuat website</p>
              <a href="<?php echo $url['base_url'];?>/view/webprogramming.php" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-laptop"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Desain grafis</h6>
              <p class="card-text">Tutorial belajar desain</p>
              <button type="button" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-cpu"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Robotika</h6>
              <p class="card-text">Tutorial membuat robot</p>
              <button type="button" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></button>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1><i class="bi bi-router"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">IoT</h6>
              <p class="card-text">Tutorial Membuat Iot</p>
              <button type="button" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-phone"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Mobile Apps</h6>
              <p class="card-text">Tutorial membuat Mobile Apps</p>
              <button type="button" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-shop"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Digital Marketing</h6>
              <p class="card-text">Tutorial belajar digital Marketing</p>
              <button type="button" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- akhir kategori -->

    <!-- akhir update -->


    <?php 
    
      include('../template/footer.php');
    
    ?>
