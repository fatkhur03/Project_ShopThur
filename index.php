<?php
	include_once 'templates/topbar.php';
	include_once 'templates/header.php';

    require_once 'dbkoneksi.php';

    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql); 
?>

<script src="https://unpkg.com/feather-icons"></script>

<main>
  <section class="mt-8">
    <div class="container">
      <div class="hero-slider">
        <div
          style="
            background: url(assets/images/10.png)
              no-repeat;
            background-size: cover;
            border-radius: 0.5rem;
            background-position: center;">
          <div
            class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
            <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

            <h2 class="text-dark display-5 fw-bold mt-4">
            SuperMarket For Fresh Food & Drink</h2>
            <p class="lead">
            Introducing a new model for convenient online food shopping and home delivery.</p>
            <a href="produk.php" class="btn btn-dark mt-3">Shop Now <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
          </div>
        </div>
        <div
          class=" "
          style="
            background: url(assets/images/8.png)
              no-repeat;
            background-size: cover;
            border-radius: 0.5rem;
            background-position: center;
          "
        >
          <div
            class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center"
          >
            <span class="badge text-bg-warning"
              >Free Shipping - orders over $10</span
            >
            <h2 class="text-dark display-5 fw-bold mt-4">
            Free Shipping for First Customers only</span>
            </h2>
            <p class="lead">
              Free Shipping to First-Time Customers Only, After promotions and
              discounts are applied.
            </p>
            <a href="produk.php" class="btn btn-dark mt-3"
              >Shop Now <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Category Section Start-->
  <section class="mb-lg-10 mt-lg-14 my-8">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-6">
          <h3 class="mb-0">Featured Categories</h3>
        </div>
      </div>
      <div class="category-slider">
        <div class="item">
          <a
            href="produk.php"
            class="text-decoration-none text-inherit"
          >
            <div class="card card-product mb-lg-4">
              <div class="card-body text-center py-8">
                <img src="assets/images/buah2.png" width="95px" alt="" class="mb-3 img-fluid" />
                <div class="text-truncate">Fruits & Vegetables</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a
            href="produk.php"
            class="text-decoration-none text-inherit"
          >
            <div class="card card-product mb-lg-4">
              <div class="card-body text-center py-8">
                <img
                  src="assets/images/snack.jpg"
                  alt="Grocery Ecommerce Template"
                  class="mb-3"
                />
                <div class="text-truncate">Snack & Munchies</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a
            href="produk.php"
            class="text-decoration-none text-inherit"
          >
            <div class="card card-product mb-lg-4">
              <div class="card-body text-center py-8">
                <img
                  src="assets/images/biskuit.jpg"
                  alt="Grocery Ecommerce Template"
                  class="mb-3"
                />
                <div class="text-truncate">Bakery & Biscuits</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a
            href="produk.php"
            class="text-decoration-none text-inherit"
          >
            <div class="card card-product mb-lg-4">
              <div class="card-body text-center py-8">
                <img
                  src="assets/images/instan.jpg"
                  alt="Grocery Ecommerce Template"
                  class="mb-3"
                />
                <div class="text-truncate">Instant Food</div>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a
            href="produk.php"
            class="text-decoration-none text-inherit"
          >
            <div class="card card-product mb-lg-4">
              <div class="card-body text-center py-8">
                <img
                  src="assets/images/teh.png" width="150px"
                  alt="Grocery Ecommerce Template"
                  class="mb-3"
                />
                <div class="text-truncate">Tea & Coffee</div>
              </div>
            </div>
          </a>
        </div>

        <div class="item">
          <a
            href="produk.php"
            class="text-decoration-none text-inherit"
          >
            <div class="card card-product mb-lg-4">
              <div class="card-body text-center py-8">
                <img
                  src="assets/images/drinks.png" width="120px"
                  alt="Grocery Ecommerce Template"
                  class="mb-3"
                />
                <div class="text-truncate">Cool Drinks & Juices</div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Category Section End-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-lg-0">
          <div>
            <div
              class="py-10 px-8 rounded"
              style="
                background: url(assets/images/5.png)
                  no-repeat;
                background-size: cover;
                background-position: center;
              "
            >
              <div>
                <h3 class="fw-bold mb-1">Healthy food</h3>
                <p class="mb-4">
                  Get Upto <span class="fw-bold">30%</span> Off
                </p>
                <a href="produk.php" class="btn btn-dark">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div>
            <div
              class="py-10 px-8 rounded"
              style="
                background: url(assets/images/6.png)
                  no-repeat;
                background-size: cover;
                background-position: center;
              "
            >
              <div>
                <h3 class="fw-bold mb-1">Fresh Drinks</h3>
                <p class="mb-4">
                  Get Upto <span class="fw-bold">25%</span> Off
                </p>
                <a href="produk.php" class="btn btn-dark">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


       




  <!-- Popular Products Start-->
  <section class="my-lg-14 my-8">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-6">
          <h3 class="mb-0">Popular Products</h3>
        </div>
      </div>

      <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
        <?php 
            $nomor  =1 ;
            foreach($rs as $row){
        ?>

        <div class="col">
        <a href="detail_produk.php?id=<?=$row['id']?>">
          <div class="card card-product">
            <div class="card-body">
              <div class="text-center position-relative">
                <div class="position-absolute top-0 start-0">
                  <span class="badge bg-primary">
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
            </span>
                </div>
                <a href="detail_produk.php?id=<?=$row['id']?>">
                  <img
                    src="assets/images/s4.jpeg"
                    alt="Grocery Ecommerce Template"
                    class="mb-3 img-fluid"/></a>

                <div class="card-product-action">
                  <a href="detail_produk.php?id=<?=$row['id']?>"class="btn-action"><i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"title="Quick View"></i></a>
                  <a
                    href="#!"
                    class="btn-action"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    title="Wishlist"
                    ><i class="bi bi-heart"></i></a>
                 
                </div>
              </div>
              
              <h2 class="fs-6">
                <a href="detail_produk.php?id=<?=$row['id']?>"
                  class="text-inherit text-decoration-none"
                  ><?=$row['nama']?></a>
                  
              </h2>
              <a href="detail_produk.php?id=<?=$row['id']?>">
              <h1 class="fs-4">
              <span class="text-primary">Rp <?php echo number_format($row['harga'],0,',','.'); ?></span> 
              </h1>
              <div>
                <small class="text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i
                ></small>
                <span class="text-muted small">4.5(149)</span>
                <span class="badge bg-orange">Diskon Rp6RB</span>
              </div>
              </a>
              <div class="d-flex justify-content-between align-items-center mt-3">
              <div>
              <span class="text-dark">Depok</span> 
              </div>
              <div>
                 <span><small>1,3RB Terjual</small></span>
              </div>
                  
           </div>
            </div>
          </div>
        </div>
        </a>
        <?php 
          $nomor++;   
            } 
        ?>
      
      </div>
    </div>
  </section> 



  <!-- Popular Products End-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-6">
          <h3 class="mb-0">Daily Best Sells</h3>
        </div>
      </div>
      <div class="table-responsive-xl pb-6">
        <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
          <div class="col">
            <div
              class="pt-8 px-6 px-xl-8 rounded"
              style="
                background: url(https://freshcart.codescandy.com/assets/images/banner/banner-deal.jpg)
                  no-repeat;
                background-size: cover;
                height: 470px;
              "
            >
              <div>
                <h3 class="fw-bold text-white">100% Organic Coffee Beans.</h3>
                <p class="text-white">Get the best deal before close.</p>
                <a href="produk.php" class="btn btn-primary">Shop Now <i data-feather="arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative">
                  <a
                    href="produk.php"
                    ><img
                      src="assets/images/2.png" width="215px"
                      alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"
                  /></a>

                  <div class="card-product-action">
                    <a
                      href="#!"
                      class="btn-action"
                      data-bs-toggle="modal"
                      data-bs-target="#quickViewModal"
                      ><i
                        class="bi bi-eye"
                        data-bs-toggle="tooltip"
                        data-bs-html="true"
                        title="Quick View"
                      ></i
                    ></a>
                    <a
                      href="#!"
                      class="btn-action"
                      data-bs-toggle="tooltip"
                      data-bs-html="true"
                      title="Wishlist"
                      ><i class="bi bi-heart"></i
                    ></a>
                    <a
                      href="#!"
                      class="btn-action"
                      data-bs-toggle="tooltip"
                      data-bs-html="true"
                      title="Compare"
                      ><i class="bi bi-arrow-left-right"></i
                    ></a>
                  </div>
                </div>
                <div class="text-small mb-1">
                  <a href="#!" class="text-decoration-none text-muted"
                    ><small>Tea, Coffee & Drinks</small></a
                  >
                </div>
                <h2 class="fs-6">
                  <a href="#" class="text-inherit text-decoration-none" >Roast Ground Coffee</a>
                </h2>

                <div;
                  class="d-flex justify-content-between align-items-center mt-3"
                >
                  <div>
                    <span class="text-dark">Rp 12.000</span>
                    <span class="text-decoration-line-through text-muted"
                      >Rp 15.000</span
                    >
                  </div>
                  <div>
                    <small class="text-warning">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div;>
                <div class="d-grid mt-2">
                  <a href="produk.php" class="btn btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-plus"
                    >
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add to cart
                  </a>
                </div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div
                    class="deals-countdown w-100"
                    data-countdown="2028/10/10 00:00:00"
                  ></div>
                </div>
              </div>
            </div>
          </div>

           <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative">
                  <a
                    href="produk.php"
                    ><img
                      src="assets/images/4.png" width="215px"
                      alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"
                  /></a>

                  <div class="card-product-action">
                    <a
                      href="produk.php"
                      class="btn-action"
                      data-bs-toggle="modal"
                      data-bs-target="#quickViewModal"
                      ><i
                        class="bi bi-eye"
                        data-bs-toggle="tooltip"
                        data-bs-html="true"
                        title="Quick View"
                      ></i
                    ></a>
                    <a
                      href="produk.php"
                      class="btn-action"
                      data-bs-toggle="tooltip"
                      data-bs-html="true"
                      title="Wishlist"
                      ><i class="bi bi-heart"></i
                    ></a>
                    <a
                      href="produk.php"
                      class="btn-action"
                      data-bs-toggle="tooltip"
                      data-bs-html="true"
                      title="Compare"
                      ><i class="bi bi-arrow-left-right"></i
                    ></a>
                  </div>
                </div>
                <div class="text-small mb-1">
                  <a href="produk.php" class="text-decoration-none text-muted"
                    ><small>Tea, Coffee & Drinks</small></a
                  >
                </div>
                <h2 class="fs-6">
                  <a href="#" class="text-inherit text-decoration-none" >Es Coffee Ground</a>
                </h2>

                <div;
                  class="d-flex justify-content-between align-items-center mt-3"
                >
                  <div>
                    <span class="text-dark">Rp 9.000</span>
                    <span class="text-decoration-line-through text-muted"
                      >Rp 11.000</span
                    >
                  </div>
                  <div>
                    <small class="text-warning">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div;>
                <div class="d-grid mt-2">
                  <a href="produk.php" class="btn btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-plus"
                    >
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add to cart
                  </a>
                </div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div
                    class="deals-countdown w-100"
                    data-countdown="2028/10/10 00:00:00"
                  ></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative">
                  <a
                    href="produk.php"
                    ><img
                      src="assets/images/3.png" width="215px"
                      alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"
                  /></a>
                  <div class="card-product-action">
                    <a
                      href="produk.php"
                      class="btn-action"
                      data-bs-toggle="modal"
                      data-bs-target="#quickViewModal"
                      ><i
                        class="bi bi-eye"
                        data-bs-toggle="tooltip"
                        data-bs-html="true"
                        title="Quick View"
                      ></i
                    ></a>
                    <a
                      href="produk.php"
                      class="btn-action"
                      data-bs-toggle="tooltip"
                      data-bs-html="true"
                      title="Wishlist"
                      ><i class="bi bi-heart"></i
                    ></a>
                    <a
                      href="produk.php"
                      class="btn-action"
                      data-bs-toggle="tooltip"
                      data-bs-html="true"
                      title="Compare"
                      ><i class="bi bi-arrow-left-right"></i
                    ></a>
                  </div>
                </div>
                <div class="text-small mb-1">
                  <a href="produk.php" class="text-decoration-none text-muted"
                    ><small>Tea, Coffee & Drinks</small></a
                  >
                </div>
                <h2 class="fs-6">
                  <a
                    href="produk.php"
                    class="text-inherit text-decoration-none"
                    >Coffee Coco</a
                  >
                </h2>
                <div
                  class="d-flex justify-content-between align-items-center mt-3"
                >
                  <div>
                    <span class="text-dark">Rp 16.000</span>
                    <span class="text-decoration-line-through text-muted"
                      >Rp 18.000</span
                    >
                  </div>
                  <div>
                    <small class="text-warning">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i
                    ></small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2">
                  <a href="produk.php" class="btn btn-primary">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-plus"
                    >
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add to cart
                  </a>
                </div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div
                    class="deals-countdown w-100"
                    data-countdown="2028/11/11 00:00:00"
                  ></div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
 
  <section class="bg-dark"
    style="background:url(assets/images/pattern.svg)no-repeat; background-size: cover; background-position: center;">
    <div class="container">
       <!-- row -->
      <div class="row">
        <div class="offset-lg-1 col-lg-10">

          <div class="row align-items-center">
             <!-- col -->
            <div class="col-md-6">
              <br><br>
              <div class="text-white mt-8 mt-lg-0">
                <span>$30 discount for your first order</span>
                <h2 class="h2 text-white  my-4">Get top deals, latest trends,
                  and more.</h2>
                <p class="text-white-50">Join our email subscription now to get updates on promotions
                  and coupons.</p>
                   <!-- form -->
                <form class="row g-3">

                  <div class="col-6">
                     <!-- input -->
                    <label for="emailAddress" class="visually-hidden">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
                  </div>
                   <!-- btn -->
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Sign Up</button>
                  </div>
                  <br><br>
                </form>
                <br><br>
              </div>
            </div>
             <!-- col -->
            

          </div>
        </div>
      </div>
    </div>
  </section>
 

  
</main>

<script>
      feather.replace()
    </script>

<!-- footer and bottom -->
<?php
		include_once 'templates/footer.php';
		include_once 'templates/bottom.php';
	?>
