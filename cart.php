<?php
    include_once 'templates/topbar.php';
    include_once 'templates/header.php';
    require_once 'dbkoneksi.php';

 
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
        <div class="col-12">
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
            <div class="alert alert-danger p-2" role="alert">
              You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
            </div>
            <ul class="list-group list-group-flush">
              <!-- list group -->
              <li class="list-group-item py-3 py-lg-0 px-0 border-top">
                <!-- row -->
                <div class="row align-items-center">
                  <div class="col-3 col-md-2">
                    <!-- img --> <img src="assets/images/s1.jpeg" alt="Ecommerce"
                      class="img-fluid"></div>
                  <div class="col-4 col-md-5">
                    <!-- title -->
                    <a href="shop-single.html" class="text-inherit"><h6 class="mb-0"><?=$row['nama']?></h6></a>
                    <span><small class="text-muted">Stok: <?=$row['stok']?></small></span>
                    <!-- text -->
                    <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                          class="me-1 align-text-bottom">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2 text-success">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                          </svg></span><span class="text-muted">Remove</span></a></div>
                  </div>
                  <!-- input group -->
                  <div class="col-3 col-md-3 col-lg-2">
                       <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>


                  </div>
                  <!-- price -->
                  <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                    <span class="fw-bold">Rp <?php echo number_format($row['harga'],0,',','.'); ?></span>

                  </div>
                </div>

              </li>

            </ul>
            <hr>
            <!-- btn -->
            <div class="d-flex justify-content-between mt-4">
              <a href="produk.php" class="btn btn-primary">Continue Shopping</a>
              <a href="produk.php" class="btn btn-dark">Update Cart</a>
            </div>

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
                    <span>Rp <?php echo number_format($row['harga'],0,',','.'); ?></span>
                  </li>

                  <!-- list group item -->
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                      <div>Service Fee</div>

                    </div>
                    <span>Rp 0,-</span>
                  </li>
                  <!-- list group item -->
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                      <div class="fw-bold">Subtotal</div>

                    </div>
                    <span class="fw-bold">Rp <?php echo number_format($row['harga'],0,',','.'); ?></span></span>
                  </li>
                </ul>

              </div>
              <div class="d-grid mb-1 mt-4">
                <!-- btn -->
                <a href="form_pesanan.php?id=<?=$row['id']?>" class="btn btn-primary btn-lg  align-items-center" type="">
                  Go to Checkout<span class="fw-bold"></span></a>
              </div>
              <!-- text -->
              <p><small>By placing your order, you agree to be bound by the Freshcart <a href="#!">Terms of Service</a>
                  and <a href="#!">Privacy Policy.</a> </small></p>

              <!-- heading -->
              
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

