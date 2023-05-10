<?php
    include_once 'templates/topbar.php';
    include_once 'templates/header.php';
    include_once 'templates/sidebar.php';

    require_once '../dbkoneksi.php';

    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql);
?>
   
    

            <!-- main wrapper -->
            <main class="main-content-wrapper">
                <section class="container">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <!-- card -->
                            <div class="card bg-light border-0 rounded-4"
                                style="background-image: url(https://www.alphaebarcode.com/images/Ecommorce/e-comm_bg.jpg); background-repeat: no-repeat; background-size: cover; background-position: right;">
                                <div class="card-body p-lg-12">
                                    <h1>Welcome back! Shop Thur
                                    </h1>
                                    <p>FreshCart is simple & clean design for developer and
                                        designer.</p>
                                    <a href="produk.php" class="btn btn-primary">
                                        Create Product
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table -->￼
                    <div class="row">
                            <div class="col-lg-4 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Earnings</h4>
                                            </div>
                                            <div
                                                class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                                <i class="bi bi-currency-dollar fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                            <h1 class=" mb-2 fw-bold fs-2">$93,438.78</h1>
                                            <span>Monthly revenue</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Orders</h4>
                                            </div>
                                            <div
                                                class="icon-shape icon-md bg-light-warning text-dark-warning rounded-circle">
                                                <i class="bi bi-cart fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                            <h1 class=" mb-2 fw-bold fs-2">42,339</h1>
                                            <span><span class="text-dark me-1">35+</span>New Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Customer</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-info text-dark-info rounded-circle">
                                                <i class="bi bi-people fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                            <h1 class=" mb-2 fw-bold fs-2">39,354</h1>
                                            <span><span class="text-dark me-1">30+</span>new in 2 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                   
                    <!-- row -->
                    
                    <!-- row -->
                    <div class="row ">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <h3 class="mb-0 fs-5">Sales Overview </h3>
                                    <div class="mt-6">
                                        <!-- text -->
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Profit</h5>
                                                <span><span class="me-1 text-dark">$1,619</span> (8.6%)</span>
                                            </div>
                                            <!-- main wrapper -->
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-light-primary" style="height: 6px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <!-- text -->
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Income</h5>
                                                <span><span class="me-1 text-dark">$3,571</span> (86.4%)</span>
                                            </div>
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-info-soft" style="height: 6px;">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 88%;"
                                                        aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>


                        



                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-6">
                            <div class=" position-relative h-100">
                                <!-- card -->
                                <div class="card card-lg mb-6">
                                    <!-- card body -->
                                    <div class="card-body px-6 py-8">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <!-- svg -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-bell text-warning"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                </svg>
                                            </div>
                                            <!-- text -->
                                            <div class="ms-4">
                                                <h5 class="mb-1">Start your day with New Notification.</h5>
                                                <p class="mb-0">You have <a class="link-info" href="#!">2 new
                                                        notification</a></p>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                                <!-- card -->
                                
                            </div>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Kode</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Jenis Produk</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                      <tr>
                        <td><?=$nomor?></td>
                        <td>
                          <a href="#!"> <img src="https://freshcart.codescandy.com/assets/images/products/product-img-1.jpg" alt=""
                              class="icon-shape icon-md"></a>
                        </td>
                        
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td>Rp <?php echo number_format($row['harga'],0,',','.'); ?></td>
                        <td><?=$row['stok']?></td>
                        <td>
                          <?php
                                if ($row['jenis_produk'] == "1") {
                                  echo "Makanan";
                                } elseif ($row['jenis_produk'] == "2") {
                                  echo "Minuman";
                                }elseif ($row['jenis_produk'] == "3") {
                                  echo "Makanan Pokok";
                                }elseif ($row['jenis_produk'] == "4") {
                                  echo "Sayuran";
                                }elseif ($row['jenis_produk'] == "5") {
                                  echo "Buah-Buahan	";
                                }elseif ($row['jenis_produk'] == "6") {
                                  echo "Daging & Ikan	";
                                }elseif ($row['jenis_produk'] == "7") {
                                  echo "Seafood";
                                } else {
                                  echo "Non Category";
                                }
                          ?>
                        </td>
                        
                        
                      </tr>

                      <?php 
                $nomor++;   
                } 
                ?>

                    </tbody>
                  </table>

                </div>
              </div>
                 
                </section>
            </main>
        </div>
    </div>



    <?php
        include_once 'templates/bottom.php';
    ?>