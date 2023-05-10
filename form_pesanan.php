<?php
	include_once 'templates/topbar.php';
	include_once 'templates/header.php';
  
  require_once 'dbkoneksi.php';

    $sql = "SELECT * FROM pesanan";
    $rs = $dbh->query($sql);

  $_id = $_GET['id'];
  $sql = "SELECT * FROM produk WHERE id=?";
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
            <div class="alert alert-danger p-2" role="alert">Immediately fill in your personal data!</a>
            </div>
            


            <!-- Validation Form -->
  <form class="row g-3 needs-validation" method="POST" action="proses_pesanan.php" novalidate>
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama Produk</label>
    <input name="nama_produk" value="<?=$row['nama']?>" class="form-control" readonly>
  </div>

  <div class="col-md-6">
    <label for="harga" class="form-label">Harga</label>
    <input id="harga" name="harga" type="number" class="form-control" value="<?=$row['harga']?>" readonly>
  </div>

  
  <div class="col-md-4">
    <label for="qty" class="form-label">Qty</label>
    <input id="qty" name="qty" type="number" class="form-control" value="" placeholder="Masukkan Jumlah Pesanan">
  </div>

  <div class="col-md-4">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input id="tanggal" name="tanggal" value="<?php echo date('20y-m-d'); ?>" type="date" class="form-control" readonly>
  </div>

  <div class="col-md-4">
    <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
    <input id="nama_pemesan" name="nama_pemesan" value="" type="text" class="form-control" placeholder="Masukkan Nama Pemesan">
  </div>

  <div class="col-md-12">
    <label for="alamat_pemesan" class="form-label">Alamat Pemesan</label>
    <textarea id="alamat_pemesan" name="alamat_pemesan" value="" class="form-control" cols="15" rows="5" placeholder="Masukkan Alamat pemesan"></textarea>

  </div>
  <hr>
            <!-- btn -->
    <div class="d-flex justify-content-between mt-4">
    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        <!-- <a href="#!" class="btn btn-dark">Update Cart</a> -->
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
              
              
              <!-- text -->
              

              <!-- heading -->
              <div class="mt-8">
                <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                <form>
                  <div class="mb-2">
                    <!-- input -->
                    <label for="giftcard" class="form-label sr-only">Input your code</label>
                    <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card">

                  </div>
                  <!-- btn -->
                  <div class="d-grid"><a type="" class="btn btn-outline-dark mb-1">Redeem</a></div>
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

