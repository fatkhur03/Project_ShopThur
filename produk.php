<?php
	include_once 'templates/topbar.php';
	include_once 'templates/header.php';

  require_once 'dbkoneksi.php';

    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql);

   
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
              <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- section -->
  <div class=" mt-8 mb-lg-14 mb-8">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row gx-10">
        <!-- col -->
        <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
          <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50 " tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">

            <div class="offcanvas-header d-lg-none">
              <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ps-lg-2 pt-lg-0">
            <div class="mb-8">
            <!-- title -->
            <h5 class="mb-3">Categories</h5>
            <!-- nav -->
            <ul class="nav nav-category" id="categoryCollapseMenu">
              
              <!-- nav item -->
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"><a href="#"
                  class="nav-link">
                  Snacks &
                  Munchies <i class="feather-icon icon-chevron-right"></i>
                </a>

                <!-- collapse -->
                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>



                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Chips & Crisps</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Nachos</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Popcorn</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Bhujia & Mixtures</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Namkeen Snacks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Healthy Snacks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Cakes & Rolls</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Energy Bars</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Papad & Fryums</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Rusks & Wafers</a></li>
                    </ul>


                  </div>
                </div>

              </li>
              

              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"> <a
                  href="#" class="nav-link">Cold Drinks & Juices <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseFour" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>
                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Soft Drinks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Fruit Juices</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Coldpress</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Energy Drinks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Water & Ice Cubes</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Soda & Mixers</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Concentrates & Syrups</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Detox & Energy Drinks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Juice Collection</a></li>
                    </ul>
                  </div>
                </div>
              </li>



              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> <a
                  href="#" class="nav-link">Breakfast & Instant Food <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseFive" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>

                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">Batter</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Breakfast Cereal</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Noodles, Pasta & Soup</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Frozen Non-Veg Snackss</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Frozen Veg</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Vermicelli</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Instant Mixes</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"> <a href="#"
                  class="nav-link">Bakery & Biscuits <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseSix" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>

                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">Cookies</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Glucose & Marie</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Sweet & Salty</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Healthy & Digestive</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Cream Biscuits</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Rusks & Wafers</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Cakes & Rolls</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">
                          Buns & Bakery</a>
                      </li>
                    </ul>

                  </div>
                </div>
              </li>
             

            </ul>
          </div>

          <div class="mb-8">

            <h5 class="mb-3">Stores</h5>
            <div class="my-4">
              <!-- input -->
              <input type="search" class="form-control" placeholder="Search by store">
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked>
              <label class="form-check-label" for="eGrocery">
                E-Grocery
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="DealShare">
              <label class="form-check-label" for="DealShare">
                DealShare
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="Dmart">
              <label class="form-check-label" for="Dmart">
                DMart
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="Blinkit">
              <label class="form-check-label" for="Blinkit">
                Blinkit
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="BigBasket">
              <label class="form-check-label" for="BigBasket">
                BigBasket
              </label>
            </div>

          </div>
          
          <!-- rating -->
          <div class="mb-8">

            <h5 class="mb-3">Rating</h5>
            <div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingFive">
                <label class="form-check-label" for="ratingFive">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingFour" checked>
                <label class="form-check-label" for="ratingFour">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingThree">
                <label class="form-check-label" for="ratingThree">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingTwo">
                <label class="form-check-label" for="ratingTwo">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingOne">
                <label class="form-check-label" for="ratingOne">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
            </div>


          </div>
          <div class="mb-8 position-relative">
            <!-- Banner Design -->
            <!-- Banner Content -->
            <div class="position-absolute p-5 py-8">
              <h3 class="mb-0 text-white">Fresh Coffee </h3>
              <p class="text-white">Get Upto 25% Off</p>
              <a href="produk.php" class="btn btn-primary">Shop Now <i data-feather="arrow-right"></i></a>
            </div>
            <!-- Banner Content -->
            <!-- Banner Image -->
            <!-- img --><img src="https://freshcart.codescandy.com/assets/images/banner/banner-deal.jpg" alt=""
              class="img-fluid rounded ">
            <!-- Banner Image -->
          </div>
          </div>
        </div>
        </aside>
        <section class="col-lg-9 col-md-12">
          <!-- card -->
          <div class="card mb-4 bg-light border-0">
            <!-- card body -->
            <div class=" card-body p-9">
              <h2 class="mb-0 fs-1">Fresh Foods</h2>
            </div>
          </div>
          <!-- list icon -->
          <div class="d-lg-flex justify-content-between align-items-center">
            <div class="mb-3 mb-lg-0">
              <p class="mb-0"> <span class="text-dark">24 </span> Products found </p>
            </div>

            <!-- icon -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center justify-content-between">
              <div>

              <a href="#" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
              <a href="#" class=" me-3 active"><i class="bi bi-grid"></i></a>
              <a href="#" class="me-3 text-muted"><i class="bi bi-grid-3x3-gap"></i></a>
              </div>
              <div class="ms-2 d-lg-none">
                <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter me-2">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                </svg> Filters</a>
              </div>
            </div>

              <div class="d-flex mt-2 mt-lg-0">
                <div class="me-2 flex-grow-1">
                  <!-- select option -->
                  <select class="form-select">
                    <option selected>Show: 50</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                  </select></div>
                <div>
                  <!-- select option -->
                  <select class="form-select">
                    <option selected>Sort by: Featured</option>
                    <option value="Low to High">Price: Low to High</option>
                    <option value="High to Low"> Price: High to Low</option>
                    <option value="Release Date"> Release Date</option>
                    <option value="Avg. Rating"> Avg. Rating</option>

                  </select></div>

              </div>

            </div>
          </div>
          <!-- row -->
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

          <div class="row mt-8">
            <div class="col">
                     <!-- nav -->
              <nav>
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link  mx-1 " href="#" aria-label="Previous">
                    <i data-feather="chevron-left"></i>
                    </a>
                  </li>
                  <li class="page-item "><a class="page-link  mx-1 active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link mx-1 text-body" href="#">2</a></li>

                  <li class="page-item"><a class="page-link mx-1 text-body" href="#">...</a></li>
                  <li class="page-item"><a class="page-link mx-1 text-body" href="#">12</a></li>
                  <li class="page-item">
                    <a class="page-link mx-1 text-body" href="#" aria-label="Next">
                    <i data-feather="chevron-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php
	include_once 'templates/footer.php';
	include_once 'templates/bottom.php';
?>
