<?php 
    include('./template/link.php');
    include('./template/header.php')

?>

    <!-- Jumbotron -->
    <div class="container-fluid jb">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4">Pinter Ngaji Melek IT</h1>
            <p class="lead">Memberdayakan siswa dalam penelitian IT melalui pendidikan dan praktik dalam menggunakan Pemikiran Kreatif dan Komputasional.</p>

            <a class="btn btn-success btn" href="<?php echo $url['base_url'];?>view/tutorial.php" role="button"><i class="bi bi-book"></i> Mulai Belajar</a>
          </div>
        </div>
        <div class="col">
          <img src="<?php echo $url['base_url'];?>assets/img/bg1.png" alt="" class="animate__animated animate__lightSpeedInRight" />
        </div>
      </div>
    </div>
    <!-- akhor jumbotron -->

    <!-- kategori -->
    <div class="container kt">
      <div class="kategori">
        <h5>Kategori</h5>
        <h4>Mau belajar apa hari ini ?</h4>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem">
            <div class="card-body">
              <h1><i class="bi bi-code-square"></i></h1>
              <h6 class="card-subtitle mb-2 text-muted">Web Programming</h6>
              <p class="card-text">Tutorial Membuat website</p>
              <a href="<?php echo $url['base_url'];?>view/tutorial.php" class="btn btn-success btn-sm">Mulai belajar <i class="bi bi-chevron-compact-right"></i></a>
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
    </div>

    <!-- akhir kategori -->

    <!-- update -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="update">
            <h4>Apa yang baru di IT Club ?</h4>
            <p class="lead">Baca Artikel terbaru kami</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="<?php echo $url['base_url'];?>assets/img/web-development.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="<?php echo $url['base_url'];?>assets/img/web-development.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="<?php echo $url['base_url'];?>assets/img/web-development.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="page">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- akhir update -->

    <!-- newslater -->
    <div class="container newslater">
      <div class="row">
        <h4>Newslater</h4>
        <p class="lead">Mau dapat info, tips belajar Programming & Design langsung ke email mu ?</p>
        <div class="col">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" id="email" placeholder="Masukan Email" />
          </div>
          <button type="button" class="btn btn-success btn-sm">Ya, Saya Mau!</button>
        </div>
        <div class="col"></div>
      </div>
    </div>

    <!-- akhir newslater -->

   


<?php 
    
    include('./template/footer.php')

?>
