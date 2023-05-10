<?php
    include_once 'templates/topbar.php';
    include_once 'templates/header.php';
    include_once 'templates/sidebar.php';

    require_once '../dbkoneksi.php';

    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM jenis_produk WHERE id = ?";
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
              
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
<form method="POST" action="proses_jenis.php" style="margin-left:20px">
    
    <div class="form-group row">
        <div class="col-8">
          <div class="mb-3 col-lg-6">
          <label class="form-label" for="nama">Kategori</label>
          <input type="text" id="nama" name="nama" class="form-control" value="<?= $row['nama']?>">
      </div>
      <?php
      $button = (empty($_idedit)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" class="btn btn-sm btn-primary" value="<?=$button?>" />
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