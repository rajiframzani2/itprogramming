<?php 

include('../template/header.php');
include('../template/link.php');

?>

    <!-- kategori -->
    <div class="container kt">
      <div class="kategori">
        <h5>Web Front End Developer</h5>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1><i class="bi bi-filetype-html"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">HTML</h6>
              <p class="card-text">Tutorial belajar HTML</p>
              <a href="<?php echo $url['base_url'];?>view/halhtml.php" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-filetype-css"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">CSS</h6>
              <p class="card-text">Tutorial belajar CSS</p>
              <button type="button" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-filetype-js"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Java Script</h6>
              <p class="card-text">Tutorial belajar Javascript</p>
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
