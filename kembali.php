<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="kembali.css">
</head>

<body>
    <header>
    <nav class="navbar">
        <a class="toggler-navbar">
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        <a class="logo" href ="sewa.html">
            MOCARS
        </a>
    </nav>
    <div class="sidebar">
        <ul>
          <li class="active"><a href="index.html">Logout</a></li>
          <li><a href="profil.html">Profil</a></li>
          <li><a href="sewa.html">Peminjaman</a></li>
          <li><a href="kembali.php" target="_self">Pengembalian</a></li>
          <li><a href="riwayat.php" target="_self">Riwayat</a></li>
        </ul>
    </div>
    </header>
     
    <main>
      <div class="container">
        <div class="row gutters">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="invoice-container">
                 <!-- Row start -->
                 <div class="row gutters">
                  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="invoice-header">
                     <h2>PENGEMBALIAN</h2>
                     <h2>KENDARAAN</h2>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="invoice-details">
                      <div class="invoice-num">
                        <table>
                          <?php 
                          require 'koneksi.php';
                          $data = mysqli_query($koneksi_db,"select * from peminjaman ORDER BY id DESC LIMIT 1");
                          $no = mysqli_num_rows($data);
                          if($d = mysqli_fetch_array($data)){
                            $nama=$d['namapenyewa'];
                            $pinjam=$d['tgl_pinjam'];
                            $kembali=$d['tgl_kembali'];
                            $harga=$d['hargamobil'];
                            $durasiawal=strtotime($pinjam);
                            $durasiakhir=strtotime($kembali);
                            $waktu=$durasiakhir-$durasiawal;
                            $durasi=($waktu/3600)/24;
                            $total=$harga*$durasi;
                        ?>
                          <tr>
                            <td>Nama Penyewa</td>
                            <td>:</td>
                            <td><?php echo $nama; ?></td>
                          </tr>
                          <tr>
                            <td>Durasi Pinjam</td>
                            <td>:</td>
                            <td><?php echo $durasi; ?></td>
                          </tr>
                          <tr>
                            <td>Harga Total</td>
                            <td>:</td>
                            <td><?php echo $total; ?></td>
                          </tr>
                          <?php 
                        }
                        ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="custom-actions-btns mb-5">
                  <button class="btn btn-primary click" onclick="clicked()">PROSES</button>
                  
                  <script>
                    function clicked(){
                      if(img==1){
                      document.getElementById("img").style.display="inline"
                      return img=0;
                    } else {
                      document.getElementById("img").style.display="none"
                      return img=1;
                    }
                    }
                  </script>
                </div>
                
                <div class="barcode">
                  <img id="img" width="150 px" height="150 px" src="images\frame.png"/>
                </div>
              </div>
            </div>
            <!-- Row end -->
          </div> <!-- End of invoice-container -->
      </div> <!-- End of card-body -->
    </div> <!-- End of card -->
  </div> <!-- End of col-12 -->
  </div> <!-- End of row -->
  </div> <!-- End of container -->
    </main>
    </main>
    <script src="navigasi.js">
      
    </script>
</body>
</html>