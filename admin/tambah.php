<?php 
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses_produk.php">
                <div class="mb-3">
                    <label for="kode" class="col-form-label">Kode</label>
                    <input id="kode" name="kode" type="text" class="form-control" value="">
                </div>

                <div class="mb-3">
                    <label for="nama" class="col-form-label">Nama Produk</label>
                    <input id="nama" name="nama" type="text" class="form-control" value="">
                </div>

                <div class="mb-3">
                    <label for="harga" class="col-form-label">Harga</label>
                    <input id="harga" name="harga" value="" type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="stok" class="col-form-label">Stok</label>
                    <input id="stok" name="stok" value="" type="number" class="form-control">
                </div>

                

                <div class="mb-3">
                    <label for="stok" class="col-form-label">Jenis Produk</label>
                    <?php 
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
            <select id="jenis_produk" name="jenis_produk" class="custom-select">
                <?php 
            foreach($rsjenis as $rowjenis){
         ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                <?php
            }
        ?>
            

            </select>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />

                </div>
            </form>