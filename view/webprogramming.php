<?php 

include('../template/header.php');
include('../template/link.php');

?>

    <!-- kategori -->
    <div class="container kt">
      <div class="kategori">
        <h5>Web Programming</h5>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1><i class="bi bi-code-square"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Front End Developer</h6>
              <p class="card-text">Tutorial Membuat tampilan depan pada website</p>
              <a href="<?php echo $url['base_url'];?>view/frontend.php" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-code-square"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Back End Developer</h6>
              <p class="card-text">Tutorial membuat back end Developer</p>
              <button type="button" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1 class="card-title"><i class="bi bi-code-square"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Basis Data</h6>
              <p class="card-text">Tutorial membuat database pada website</p>
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