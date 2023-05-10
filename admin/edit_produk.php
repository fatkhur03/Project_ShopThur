<?php
    include_once 'templates/topbar.php';
    include_once 'templates/header.php';
    include_once 'templates/sidebar.php';

    require_once '../dbkoneksi.php';

    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM produk WHERE id = ?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
    <!-- main -->
    <main class="main-content-wrapper">
      <div class="container">
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div>
                <h2>Orders</h2>
                  <!-- breacrumb -->
                  <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">

    <form method="POST" action="proses_produk.php" style="margin-left:20px">
    
    <div class="form-group row">
        <div class="col">
          <div class="mb-3 col-lg-6">
            <label class="form-label" for="kode">Kode</label>
            <input type="text" id="kode" name="kode" class="form-control" value="<?= $row['kode']?>">
        </div>

        <div class="col">
          <div class="mb-3 col-lg-6">
            <label class="form-label" for="nama">Nama Produk</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?= $row['nama']?>">
        </div>

        <div class="col">
          <div class="mb-3 col-lg-6">
            <label class="form-label" for="harga">Harga</label>
            <input type="text" id="harga" name="harga" class="form-control" value="<?= $row['harga']?>">
        </div>

        <div class="col">
          <div class="mb-3 col-lg-6">
            <label class="form-label" for="stok">Stok</label>
            <input type="text" id="stok" name="stok" class="form-control" value="<?= $row['stok']?>">
        </div>

        <div class="col">
          <div class="mb-3 col-lg-6">
            <label class="col-form-label" for="nama">Jenis Produk</label>

            <?php 
                $sqljenis = "SELECT * FROM jenis_produk";
                $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="jenis_produk" name="jenis_produk" class="form-select">
            
                <?php 
                    foreach($rsjenis as $rowjenis){
                ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama'] ?></option>
                <?php
                    }
                ?>
           </select>       
         </div>

         <?php
                $button = (empty($_idedit)) ? "Simpan":"Update"; 
            ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>" />
            <input type="hidden" name="idedit" value="<?=$_idedit?>" />
    </div>
    
    
</form>

</div>
<br>
</div>

</div>
</div>

</main>

 



    <?php
        include_once 'templates/bottom.php';
    ?>