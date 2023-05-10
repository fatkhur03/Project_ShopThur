<?php
	include_once 'templates/topbar.php';
	include_once 'templates/header.php';
    require_once 'dbkoneksi.php';

    $sql = "SELECT * FROM pesanan";
    $rs = $dbh->query($sql);

?>


    <!-- main -->
    <main>
      <div class="container">
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div><br><br>
                <h2>Orders</h2>
                  <!-- breacrumb -->
                  <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Orders</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              <div>
                <a href="produk.php" class="btn btn-primary">Add Orders</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Qty</th>
                        <th>Total Harga</th>
                        <th>Nama Pemesan</th>
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
            <td><?=$row['nama_produk']?></td>
            <td><?=$row['qty']?></td>
            <td>Rp <?php echo number_format($row['total_harga'],0,',','.'); ?></td>
            <td><?=$row['nama_pemesan']?></td>
            <td>
                <a class="" href="detail_pesanan.php?id=<?=$row['id']?>"><i class="bi bi-eye me-3 "></i></a>
                            <a class="" href="edit_pesanan.php?idedit=<?=$row['id']?>"><i class="bi bi-pencil-square me-3 "></i></a>
                            <a class="" href="delete_pesanan.php?iddel=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Pesanan <?=$row['nama']?>?')) {return false}"><i class="bi bi-trash me-3 "></i></a>
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


<?php
	include_once 'templates/footer.php';
	include_once 'templates/bottom.php';
?>

