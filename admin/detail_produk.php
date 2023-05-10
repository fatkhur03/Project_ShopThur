<?php
    include_once 'templates/topbar.php';
    include_once 'templates/header.php';
    include_once 'templates/sidebar.php';
    require_once '../dbkoneksi.php';

    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>



<main class="main-content-wrapper">
    <div class="container">
    <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div><br>
                <h2>Detail Produk</h2>
                  <!-- breacrumb -->
                  <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="produk.php" class="text-inherit">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$row['nama']?></li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
             
            </div>
          </div>
        </div>
  <section class="mt-8">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="slider slider-for">
           
            <div>
              <div class="zoom" onmousemove="zoom(event)"
              style="background-image: url(../assets/images/s1.jpeg)">
              <!-- img -->
              <!-- img --><img src="../assets/images/s1.jpeg" alt="">
            </div>
            </div>
            <div>
              <div class="zoom" onmousemove="zoom(event)"
              style="background-image: url(../assets/images/s2.jpeg)">
              <!-- img -->
              <!-- img --><img src="../assets/images/s2.jpeg" alt="">
            </div>
            </div>
            <div>
              <div class="zoom" onmousemove="zoom(event)"
              style="background-image: url(../assets/images/s3.jpeg)">
              <!-- img -->
              <!-- img --><img src="../assets/images/s3.jpeg" alt="">
            </div>
            </div>
            <div>
              <div class="zoom" onmousemove="zoom(event)"
              style="background-image: url(../assets/images/4.jpeg)">
              <!-- img -->
              <!-- img --><img src="../assets/images/s4.jpeg" alt="">
            </div>
            </div>
            <div>
              <div class="zoom" onmousemove="zoom(event)"
              style="background-image: url(../assets/images/s5.jpeg)">
              <!-- img -->
              <!-- img --><img src="../assets/images/s5.jpeg" alt="">
            </div>
            </div>
          </div>
          <div class="slider slider-nav mt-4">
            <div>
              <img src="../assets/images/s1.jpeg" alt="" class="w-100 rounded">
            </div>
              <div>
              <img src="../assets/images/s2.jpeg" alt="" class="w-100 rounded">
            </div>
              <div>
              <img src="../assets/images/s3.jpeg" alt="" class="w-100 rounded">
            </div>
              <div>
              <img src="../assets/images/s4.jpeg" alt="" class="w-100 rounded">
            </div>
              <div>
              <img src="../assets/images/s5.jpeg" alt="" class="w-100 rounded">
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="ps-lg-10 mt-6 mt-md-0">
            <!-- content -->
            <a href="#!" class="mb-4 d-block"><?php
                    if ($row['jenis_produk'] == "1") {
                        echo "Makanan";
                    } elseif ($row['jenis_produk'] == "2") {
                        echo "Minuman";
                    }elseif ($row['jenis_produk'] == "3") {
                        echo "Seafood";
                    } elseif ($row['jenis_produk'] == "4") {
                        echo "Aneka Jus";
                    }else {
                        echo "Non Member";
                    }
                    

            ?></a>
            <!-- heading -->
            <h1 class="mb-1"><?=$row['nama']?></h1>
            <div class="mb-4">
              <!-- rating -->
              <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i></small><a href="#" class="ms-2">(30 reviews)</a></div>
            <div class="fs-4">
              <!-- price --><span class="fw-bold text-dark">Rp <?php echo number_format($row['harga'],0,',','.'); ?></span> <span><small class="fs-6 ms-2 text-danger">26%
                  Off</small></span>
            </div>
            <!-- hr -->
            <hr class="my-6">
            <div class="mb-5">


                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>

            </div>
            <div class="mt-3 row justify-content-start g-2 align-items-center">

              <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                <!-- button -->
                <!-- btn --> <a href="#" type="button" class="btn btn-primary">Add to Cart</a>
              </div>
              <div class="col-md-4 col-4">
                <!-- btn -->
                
                <a class="btn btn-light " href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i data-feather="heart"></i></a>
              </div>
            </div>
            <!-- hr -->
            <hr class="my-6">
            <div>
              <!-- table -->
              <table class="table table-borderless mb-0">

                <tbody>
                  <tr>
                    <td>Product Code</td>
                    <td>   <?=$row['kode']?></td>

                  </tr>
                  <tr>
                    <td>Nama Produk</td>
                    <td><?=$row['nama']?></td>

                  </tr>
                  <tr>
                    <td>Harga</td>
                    <td>Rp <?php echo number_format($row['harga'],0,',','.'); ?></td>

                  </tr>
                  <tr>
                    <td>Stok</td>
                    <td><?=$row['stok']?></td>

                  </tr>


                </tbody>
              </table>

            </div>
            <hr>
            <div class="mt-8">
              <!-- dropdown -->
              <div class="">
                Share <i data-feather="chevron-right"></i>

               
                  <a class="" href="#"><i class="bi bi-facebook me-2"></i>Facebook</a> &nbsp;
                  <a class="" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a>&nbsp;
                  <a class="" href="#"><i class="bi bi-whatsapp me-2"></i>Whatsapp</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-lg-14 mt-8 ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
            <!-- nav item -->
            <li class="nav-item" role="presentation">
              <!-- btn --> <button class="nav-link active" id="product-tab" data-bs-toggle="tab"
                data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane"
                aria-selected="true">Product Details</button>
            </li>
            <!-- nav item -->
            <li class="nav-item" role="presentation">
              <!-- btn --> <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane"
                aria-selected="false">Information</button>
            </li>
            <!-- nav item -->
            <li class="nav-item" role="presentation">
              <!-- btn --> <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
                aria-selected="false">Reviews</button>
            </li>
            
          </ul>
          <!-- tab content -->
          <div class="tab-content" id="myTabContent">
            <!-- tab pane -->
            <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab"
              tabindex="0">
              <div class="my-8">
                <div class="mb-5">
                  <!-- text -->
                  <h4 class="mb-1">Seafood</h4>
                  <p class="mb-0">Makanan seafood adalah jenis makanan yang terbuat dari berbagai jenis hewan laut seperti ikan, udang, kerang, cumi-cumi, dan lain sebagainya. Di dalam aplikasi belanja online, makanan seafood dapat menjadi salah satu pilihan produk yang disediakan</p>
                </div>
                <div class="mb-5">
                  <h5 class="mb-1">Storage Tips</h5>
                  <p class="mb-0">Simpan seafood di dalam kulkas atau freezer sesegera mungkin setelah membelinya. Semakin lama seafood tidak disimpan di dalam kulkas atau freezer, semakin cepat juga kualitasnya menurun.</p>
                </div>
                <!-- content -->
                <div class="mb-5">
                  <h5 class="mb-1">Jenis</h5>
                  <p class="mb-0">Ikan, Udang, Kerang, Cumi-Cumi dll</p>
                </div>
                <div class="mb-5">
                  <h5 class="mb-1">Seller</h5>
                  <p class="mb-0">DMart ThurShop</p>
                </div>
                <div>
                  <h5 class="mb-1">Disclaimer</h5>
                  <p class="mb-0">Gambar yang ditampilkan adalah representasi dan mungkin sedikit berbeda dari produk yang sebenarnya. Setiap upaya dibuat untuk menjaga keakuratan semua informasi yang ditampilkan.</p>
                </div>
              </div>
            </div>
            <!-- tab pane -->
            <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
              <div class="my-8">
                <div class="row">
                  <div class="col-12">
                    <h4 class="mb-4">Details</h4>
                  </div>
                  <div class="col-12 col-lg-6">
                    <table class="table table-striped">
                      <!-- table -->
                      <tbody>
                        <tr>
                          <th>Weight</th>
                          <td>1000 Grams</td>
                        </tr>
                        <tr>
                          <th>Ingredient Type</th>
                          <td>Animals</td>
                        </tr>
                        <tr>
                          <th>Brand</th>
                          <td>Dmart</td>
                        </tr>
                        <tr>
                          <th>Item Package Quantity</th>
                          <td>3</td>
                        </tr>
                        <tr>
                          <th>Form</th>
                          <td>Udang & Cumi</td>
                        </tr>
                        <tr>
                          <th>Manufacturer</th>
                          <td>Dmart</td>
                        </tr>
                        <tr>
                          <th>Net Quantity</th>
                          <td>340.0 Gram</td>
                        </tr>
                        <tr>
                          <th>Product Dimensions</th>
                          <td>9.6 x 7.49 x 18.49 cm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-12 col-lg-6">
                    <table class="table table-striped">
                      <!-- table -->
                      <tbody>
                        <tr>
                          <th>ASIN</th>
                          <td>SB0025UJ75W</td>
                        </tr>
                        <tr>
                          <th>Best Sellers Rank</th>
                          <td>#1 in Seafoods</td>
                        </tr>
                        <tr>
                          <th>Date First Available</th>
                          <td>30 April 2024</td>
                        </tr>
                        <tr>
                          <th>Item Weight</th>
                          <td>500g</td>
                        </tr>
                        <tr>
                          <th>Generic Name</th>
                          <td>Fresh Foods</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- tab pane -->
            <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
              <div class="my-8">
                <!-- row -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="me-lg-12 mb-6 mb-md-0">
                      <div class="mb-5">
                        <!-- title -->
                        <h4 class="mb-3">Customer reviews</h4>
                        <span>
                          <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i></small><span class="ms-3">4.1 out of 5</span><small
                            class="ms-3">11,130 global ratings</small></span>
                      </div>
                      <div class="mb-8">
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">5</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div><span class="text-muted ms-3">53%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">4</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                            </div>
                          </div><span class="text-muted ms-3">22%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">3</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;"
                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                            </div>
                          </div><span class="text-muted ms-3">14%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">2</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 22%;"
                                aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                            </div>
                          </div><span class="text-muted ms-3">5%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">1</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 14%;"
                                aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                            </div>
                          </div><span class="text-muted ms-3">7%</span>
                        </div>
                      </div>
                      <div class="d-grid">
                        <h4>Review this product</h4>
                        <p class="mb-0">Share your thoughts with other customers.</p>
                        <a href="#" class="btn btn-outline-gray-400 mt-4 text-muted">Write the Review</a>
                      </div>

                    </div>
                  </div>
                  <!-- col -->
                  <div class="col-md-8">
                    <div class="mb-10">
                      <div class="d-flex justify-content-between align-items-center mb-8">
                        <div>
                          <!-- heading -->
                          <h4>Reviews</h4>
                        </div>
                        <div>
                          <select class="form-select">
                            <option selected>Top Review</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>

                      </div>
                      <div class="d-flex border-bottom pb-6 mb-6">
                        <!-- img -->
                        <!-- img --><img src="https://tunasmadyaperkasa.com/wp-content/uploads/2021/08/user.png" alt=""
                          class="rounded-circle avatar-lg">
                        <div class="ms-5">
                          <h6 class="mb-1">
                            Xythur

                          </h6>
                          <!-- select option -->
                          <!-- content -->
                          <p class="small"> <span class="text-muted">30 Aril 2023</span>
                            <span class="text-primary ms-3 fw-bold">Verified Purchase</span></p>
                          <!-- rating -->
                          <div class=" mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-3 text-dark fw-bold">This is a food stall that I highly recommend</span>
                          </div>
                          <!-- text-->
                          <p>"Saya benar-benar suka dengan seafood yang saya beli di toko ini! Segala sesuatu yang saya pesan selalu segar, lezat dan terlihat seperti di foto. Saya sangat merekomendasikan produk seafood di sini kepada siapa saja yang mencari makanan seafood berkualitas tinggi dan enak. Tidak hanya itu, layanan pelanggan mereka juga sangat baik dan responsif. Saya sangat puas dengan pengalaman belanja saya di toko ini dan pasti akan kembali membeli makanan seafood di sini."</p>
                          <div>
                            <div class="border icon-shape icon-lg border-2 ">
                              <!-- img --><img src="../assets/images/s4.jpeg" alt=""
                                class="img-fluid ">
                            </div>
                            <div class="border icon-shape icon-lg border-2 ms-1 ">
                              <!-- img --><img src="../assets/images/s5.jpeg" alt=""
                                class="img-fluid ">
                            </div>
                            <div class="border icon-shape icon-lg border-2 ms-1 ">
                              <!-- img --><img src="../assets/images/s3.jpeg" alt=""
                                class="img-fluid ">
                            </div>

                          </div>
                          <!-- icon -->
                          <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="text-muted"><i class="feather-icon icon-thumbs-up me-1"></i>Helpful</a>
                            <a href="#" class="text-muted ms-4"><i class="feather-icon icon-flag me-2"></i>Report
                              abuse</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>


            </div>
            <!-- tab pane -->
            <div class="tab-pane fade" id="sellerInfo-tab-pane" role="tabpanel" aria-labelledby="sellerInfo-tab"
              tabindex="0">...</div>
          </div>
        </div>
      </div>
    </div>



  </section>
    </div>
</main>

<?php
        include_once 'templates/bottom.php';
?>