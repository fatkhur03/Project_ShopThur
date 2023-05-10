<?php
    include_once 'templates/topbar.php';
    include_once 'templates/header.php';
    require_once 'dbkoneksi.php';

    $_id = $_GET['id'];
   
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

    

?>



<main>
     <!-- section-->
    <div class="mt-4">
    <div class="container">
      <!-- row -->
      <div class="row ">
        <!-- col -->
        <div class="col-12">
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Home</a></li>
              <li class="breadcrumb-item"><a href="#!">Orders</a></li>
              <li class="breadcrumb-item active" aria-current="page">Order Details</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    </div>
    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
      <!-- row -->
      <div>
        <!-- row -->
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <!-- accordion -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <!-- accordion item -->
              <div class="accordion-item py-4">

                <div class="d-flex justify-content-between align-items-center">
                  <!-- heading one -->
                  <a href="#" class="fs-5 text-inherit collapsed h4"  data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                    <i class="feather-icon icon-map-pin me-2 text-muted"></i>Details Data Pesanan
                  </a>
                  <!-- btn -->
                  <a href="list_pesanan.php" class="btn btn-outline-primary btn-sm">Back </a>
                  <!-- collapse -->
                </div><hr>
                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                  data-bs-parent="#accordionFlushExample">
                  <div class="mt-5">
                    <div class="row">
                      <table class="table table-centered table-hover">
                            
                            <tr>
                                <td>ID</td>
                                <td><?=$row['id']?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Produk</b></td>
                                <td><?=$row['nama_produk']?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Pesanan</b></td>
                                <td><?=$row['tanggal']?></td>
                            </tr>
                            <tr>
                                <td><b>Jumlah</b></td>
                                <td><?=$row['qty']?></td>
                            </tr>
                            <tr>
                                <td><b>Total Harga</b></td>
                                <td><?=$row['total_harga']?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Pemesan</b></td>
                                <td><?=$row['nama_pemesan']?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Pemesan</b></td>
                                <td><?=$row['alamat_pemesan']?></td>
                            </tr>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
              <!-- accordion item -->
             


            </div>

          </div>

          <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
            <div class="mt-4 mt-lg-0">
              <div class="card shadow-sm">
                <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                <ul class="list-group list-group-flush">
                  <!-- list group item -->
                  <li class="list-group-item px-4 py-3">
                    <div class="row align-items-center">
                      <div class="col-2 col-md-2">
                        <img src="https://s.id/produk_" alt="Ecommerce" class="img-fluid"></div>
                      <div class="col-5 col-md-5">
                        <h6 class="mb-0">
                            
                        <?=$row['nama_produk']?></h6>
                        <span><small class="text-muted">kategori produk</small></span>

                      </div>
                      <div class="col-2 col-md-2 text-center text-muted">
                        <span><?=$row['qty']?></span>

                      </div>
                      <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                        <span class="fw-bold">Rp<?php echo number_format($row['total_harga'],0,',','.'); ?></span>

                      </div>
                    </div>

                  </li>

                  <!-- list group item -->
                  <li class="list-group-item px-4 py-3">
                    <div class="d-flex align-items-center justify-content-between   mb-2">
                      <div>
                        Item Subtotal

                      </div>
                      <div class="fw-bold">
                      Rp <?php echo number_format($row['total_harga'],0,',','.'); ?>

                      </div>

                    </div>
                    <div class="d-flex align-items-center justify-content-between  ">
                      <div>
                        Service Fee <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip"
                          title="Default tooltip"></i>

                      </div>
                      <div class="fw-bold">
                        Rp 0,-

                      </div>

                    </div>

                  </li>
                  <!-- list group item -->
                  <li class="list-group-item px-4 py-3">
                    <div class="d-flex align-items-center justify-content-between fw-bold">
                      <div>
                        Subtotal
                      </div>
                      <div>
                      Rp <?php echo number_format($row['total_harga'],0,',','.'); ?>


                      </div>

                    </div>


                  </li>

                </ul>

              </div>


            </div>
          </div>


        </div>
      </div>


    </div>


  </section>
</main>

<?php 
        include_once 'templates/footer.php';
        include_once 'templates/bottom.php';
?>