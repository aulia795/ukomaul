<?php
  include 'layout/header.php';
?>

   <div class="container" style="margin-to: 2rem;">
    <div class="row">
    <h4>Daftar Buku</h4>
    <?php
       include '../koneksi/koneksi.php';
       $no = 1;
       $data = mysqli_query($koneksi, "SELECT * FROM buku Order by IDbuku asc");

       while ($d =mysqli_fetch_array($data)) {

       
    ?>
    <div class="card" style="width: 14rem;">
    <img src="../asset/img/novel book.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $d['judul'];?></h5>
        <h6>Tahun terbit : <?php echo $d['tahunterbit'];?></h6>
        <a href="data/detail.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-warning text-white">Detail</a>
        <a href="data/pinjam_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Pinjam</a>
    </div>
  </div>
  <?php
  }
    ?>
  </div>
</div>



<?php
  include 'layout/footer.php';
?>