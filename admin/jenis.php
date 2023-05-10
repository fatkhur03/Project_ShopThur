<?php
    include_once 'templates/topbar.php';
    include_once 'templates/header.php';
    include_once 'templates/sidebar.php';

    require_once '../dbkoneksi.php';

    $sql = "SELECT * FROM jenis_produk";
    $rs = $dbh->query($sql);
?>
   


    <!-- main -->
    <main class="main-content-wrapper">
      <div class="container">
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div>
                <h2>Categories</h2>
                  <!-- breacrumb -->
                  <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add Categories</button>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              <div class="px-6 py-6 ">
                <div class="row justify-content-between">
                  <!-- form -->
                  <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                    <form class="d-flex" role="search">
                      <input class="form-control" type="search" placeholder="Search Products" aria-label="Search">
                    </form>
                  </div>
                  <!-- select option -->
                  <div class="col-lg-2 col-md-4 col-12">
                    <select class="form-select">
                      <option selected>Status</option>
                      <option value="1">Active</option>
                      <option value="2">Deactive</option>
                      <option value="3">Draft</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                      <tr>
                        <td><?=$nomor?></td>
                        
                        <td><?=$row['nama']?></td>
                        
                        
                        <td>
                            
                            <a class="" href="edit_jenis.php?idedit=<?=$row['id']?>"><i class="bi bi-pencil-square me-3 "></i></a>
                            <a class="" href="delete_jenis.php?iddel=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Jenis <?=$row['nama']?>?')) {return false}"><i class="bi bi-trash me-3"></i></a>
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
              <div class=" border-top d-md-flex justify-content-between align-items-center px-6 py-6">
                <span>Showing 1 to 8 of 12 entries</span>
                <nav class="mt-2 mt-md-0">
                  <ul class="pagination mb-0 ">
                    <li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>
                    <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>

          </div>

        </div>
      </div>
       
    </main>

        <!-- add modal -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelOne">Form Input Categories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="proses_jenis.php">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Kategori</label>
                    <input type="text" class="form-control" id="" name="nama">
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />

                </div>
            </form>
            </div>
            </div>
        </div>
        </div> 





  



    <?php
        include_once 'templates/bottom.php';
    ?>