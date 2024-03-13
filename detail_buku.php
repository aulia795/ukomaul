<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="card">
            <div class="row m-4">
            <?php 
                include '../../koneksi/koneksi.php';
                if(isset($_GET['idbuku'])) {
                    $idbuku = $_GET['idbuku'];
                }else{
                    die ("Error, Data Tidak  Ditemukan");
                }
                $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$idbuku' ");
                $result = mysqli_fetch_array($query);
            ?>
                <div class="col text-center">
                    <img src="../../asset/img/novel book.jpg"  height="500" alt="">
                </div>
                <div class="col" style="margin-top: 5rem;">
                <h2>Detail Buku</h2> 
                <a href="../buku.php" class="btn btn-danger">Kembali</a><hr>
                    <table>
                        <tr>
                            <td><h5>ID Buku</h5></td>
                            <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Judul Buku</h5></td>
                            <td><h5>: <?php echo $result['judul'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penulis Buku</h5></td>
                            <td><h5>: <?php echo $result['penulis'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penerbit Buku</h5></td>
                            <td><h5>: <?php echo $result['penerbit'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tahun terbit</h5></td>
                            <td><h5>: <?php echo $result['tahunterbit'];?></h5></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>