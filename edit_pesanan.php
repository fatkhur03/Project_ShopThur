<?php
	include_once 'templates/topbar.php';
	include_once 'templates/header.php';
  
  require_once 'dbkoneksi.php';

  $_idedit = $_GET['idedit'];
  if(!empty($_idedit)){
      // edit
      $sql = "SELECT * FROM pesanan WHERE id = ?";
      $st = $dbh->prepare($sql);
      $st->execute([$_idedit]);
      $row = $st->fetch();

      $sql2 = "SELECT * FROM produk WHERE nama = ?";
      $st2 = $dbh->prepare($sql2);
      $st2->execute([$row['nama_produk']]);
      $produk = $st2->fetch();


  }else{
      // new data
      $row = [];
  }

  

?>




<main>
    <!-- section-->
    <div class="mt-4">
    <div class="container">
      <!-- row -->
      <div class="row ">
        <!-- col -->
        <div class="col-12"><br>
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Home</a></li>
              <li class="breadcrumb-item"><a href="#!">Shop</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
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
      
      <!-- row -->
      <div class="row">
        <div class="col-lg-8 col-md-7">

          <div class="py-3">
            <!-- alert -->
            <div class="alert alert-danger p-2" role="alert">Edit in your personal data!</a>
            </div>
            


            <!-- Validation Form -->
  <form class="row g-3 needs-validation" method="POST" action="proses_pesanan.php" novalidate>

  <div class="col-md-6">
    <label for="nama_produk" class="form-label">Nama Produk</label>
    <input id="nama_produk" name="nama_produk" value="<?=$row['nama_produk']?>" class="form-control" readonly>
  </div>


  <div class="col-md-6">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input id="tanggal" name="tanggal" value="<?php echo date('20y-m-d'); ?>" type="date" class="form-control" readonly>
  </div>
  
  <div class="col-md-6">
    <label for="qty" class="form-label">Jumlah Pesanan</label>
    <input id="qty" name="qty" value="<?= $row['qty'] ?>" type="number" class="form-control">
  </div>

  <div class="col-md-6">
    <label for="harga" class="form-label">Harga Satuan</label>
    <input id="harga" name="harga" type="number" class="form-control" value="<?=$produk['harga']?>" readonly>
  </div>

  
  <div class="col-md-6">
    <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
    <input id="nama_pemesan" name="nama_pemesan" value="<?= $row['nama_pemesan'] ?>" type="text" class="form-control">
  </div>

  <div class="col-md-12">
    <label for="alamat_pemesan" class="form-label">Alamat Pemesan</label>
    <input id="alamat_pemesan" name="alamat_pemesan" value="<?= $row['alamat_pemesan'] ?>" type="text" class="form-control">

  </div>
  <hr>
            <!-- btn -->
    <div class="d-flex justify-content-between mt-4">
    <?php
                $button = (empty($_idedit)) ? "Simpan":"Update"; 
            ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>" />
            <input type="hidden" name="idedit" value="<?=$_idedit?>" />
    </div>
  
  
  </form>

           

          </div>
        </div>

        <!-- sidebar -->
        <div class="col-12 col-lg-4 col-md-5">
          <!-- card -->
          <div class="mb-5 card mt-1">
            <div class="card-body p-6">
              <!-- heading -->
              <h2 class="h5 mb-4">Summary</h2>
              <div class="card mb-2">
                <!-- list group -->
                <ul class="list-group list-group-flush">
                  <!-- list group item -->
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                      <div>Item Subtotal</div>

                    </div>
                    <span>Rp <?php echo number_format($row['total_harga'],0,',','.'); ?></span>
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                      <div>Qty</div>

                    </div>
                    <span><?= $row['qty'] ?> Produk</span>
                  </li>

                  <!-- list group item -->
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                      <div>Service Fee</div>

                    </div>
                    <span>Rp 0,-</span>
                  </li>
                  <!-- list group item -->
                  
                </ul>

              </div>
              <div class="d-grid mb-1 mt-4">
                <!-- btn -->
                <a class="btn btn-primary btn-lg d-flex justify-content-between align-items-center">
                  Sub Total <span class="fw-bold">Rp <?php echo number_format($row['total_harga'],0,',','.'); ?></span></a>
              </div>
              <!-- text -->
              <p><small>By placing your order, you agree to be bound by the Freshcart <a href="#!">Terms of Service</a>
                  and <a href="#!">Privacy Policy.</a> </small></p>

              <!-- heading -->
              <div class="mt-8">
                <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                <form>
                  <div class="mb-2">
                    <!-- input -->
                    <label for="giftcard" class="form-label sr-only">Email address</label>
                    <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card">

                  </div>
                  <!-- btn -->
                  <div class="d-grid"><a class="btn btn-outline-dark mb-1">Redeem</a></div>
                  <p class="text-muted mb-0"> <small>Terms & Conditions apply</small></p>
                </form>
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

