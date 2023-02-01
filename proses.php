<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Proses | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" languange="javascript" src="/cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</head>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
	$('.table-paginate').dataTable();
 } );
</script>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="inputdata.php">Input Data</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="proses.php">Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rangking.php">Ranking</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container"><br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="inputdata.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Tambah">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-success">Tambah</button>
    </form>
    <!-- /Hapus Record -->

    <!-- Hapus Record -->
    <form  role="form" method="post" action="recorddelete.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Hapus Semua Record">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-danger">Hapus</button>
    </form>
    <!-- /Hapus Record -->

    <?php
        session_start();
        if (isset($_POST['submitform'])) {

            if(isset($_SESSION['jumlahsiswa'])){

                $jumlah = $_SESSION['jumlahsiswa'];
                $nama = array();

                $nilaiipk = array();
                $textipk = array();
                $gapipk = array();
                $bobotipk = array();

                $nilaipenghasilan = array();
                $textpenghasilan = array();
                $gappenghasilan = array();
                $bobotpenghasilan = array();

                $nilaitanggungan = array();
                $texttanggungan = array();
                $gaptanggungan = array();
                $bobottanggungan = array();

                $nilaismt = array();
                $textsmt = array();
                $gapsmt = array();
                $bobotsmt = array();

                $nilaiproduktivitas = array();
                $textproduktivitas = array();
                $gapproduktivitas = array();
                $bobotproduktivitas = array();

                $nilaikeandalan = array();
                $textkeandalan = array();
                $gapkeandalan = array();
                $bobotkeandalan = array();

                $nilaifokus = array();
                $textfokus = array();
                $gapfokus = array();
                $bobotfokus = array();

                $nilaievaluasi = array();
                $textevaluasi = array();
                $gapevaluasi = array();
                $bobotevaluasi = array();

                $nilaiintegritas = array();
                $textintegritas = array();
                $gapintegritas = array();
                $bobotintegritas = array();

                $nilaipengetahuantk = array();
                $textpengetahuantk = array();
                $gappengetahuantk = array();
                $bobotpengetahuantk = array();


                $ncfsiswa = array();
                $nsfsiswa = array();
                $hasilsiswa = array();

                for($a=1;$a<=$jumlah;$a++) {

        	       $nama[$a] = $_POST['namasiswa'.$a];
                   $nilaiipk[$a] = $_POST['ipk'.$a];
                   $nilaipenghasilan[$a] = $_POST['penghasilan'.$a];
                   $nilaitanggungan[$a] = $_POST['tanggungan'.$a];
                   $nilaismt[$a] = $_POST['smt'.$a];
                   $nilaiproduktivitas[$a] = $_POST['produktivitas'.$a];
                   $nilaikeandalan[$a] = $_POST['keandalan'.$a];
                   $nilaifokus[$a] = $_POST['fokus'.$a];
                   $nilaievaluasi[$a] = $_POST['evaluasi'.$a];
                   $nilaiintegritas[$a] = $_POST['integritas'.$a];
                   $nilaipengetahuantk[$a] = $_POST['pengetahuantk'.$a];

                   $sql = mysqli_query($koneksi,"INSERT INTO siswa (nama, ipk, penghasilan, tanggungan, semester, produktivitas, keandalan, fokus, evaluasi, integritas, pengetahuantk) VALUES('$nama[$a]','$nilaiipk[$a]','$nilaipenghasilan[$a]','$nilaitanggungan[$a]','$nilaismt[$a]','$nilaiproduktivitas[$a]','$nilaikeandalan[$a]','$nilaifokus[$a]','$nilaievaluasi[$a]','$nilaiintegritas[$a]','$nilaipengetahuantk[$a]')") or die (mysqli_error($koneksi));

                }




                for($a=1;$a<=$jumlah;$a++) {
                    
                    $nama[$a] = $_POST['namasiswa'.$a];
                    $gapipk[$a] = $nilaiipk[$a] - 3;
                    $gappenghasilan[$a] = $nilaipenghasilan[$a] - 3;
                    $gaptanggungan[$a] = $nilaitanggungan[$a] - 3;
                    $gapsmt[$a] = $nilaismt[$a] - 2;
                    $gapproduktivitas[$a] = $nilaiproduktivitas[$a] - 3;
                    $gapkeandalan[$a] = $nilaikeandalan[$a] - 3;
                    $gapfokus[$a] = $nilaifokus[$a] - 3;
                    $gapevaluasi[$a] = $nilaievaluasi[$a] - 3;
                    $gapintegritas[$a] = $nilaiintegritas[$a] - 3;
                    $gappengetahuantk[$a] = $nilaipengetahuantk[$a] - 3;

                    $sql = mysqli_query($koneksi,"INSERT INTO gapsiswa (nama, gapipk, gappenghasilan, gaptanggungan, gapsmt, gapproduktivitas, gapkeandalan, gapfokus, gapevaluasi, gapintegritas, gappengetahuantk) VALUES('$nama[$a]','$gapipk[$a]','$gappenghasilan[$a]','$gaptanggungan[$a]','$gapsmt[$a]','$gapproduktivitas[$a]','$gapkeandalan[$a]','$gapfokus[$a]','$gapevaluasi[$a]','$gapintegritas[$a]','$gappengetahuantk[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($gapipk[$a] == "0"){
                        $bobotipk[$a] = "5";
                    } elseif ($gapipk[$a] == "1") {
                        $bobotipk[$a] = "4.5";
                    } elseif ($gapipk[$a] == "-1") {
                        $bobotipk[$a] = "4";
                    } elseif ($gapipk[$a] == "2") {
                        $bobotipk[$a] = "3.5";
                    } elseif ($gapipk[$a] == "-2") {
                        $bobotipk[$a] = "3";
                    } elseif ($gapipk[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapipk[$a] == "-3") {
                        $bobotipk[$a] = "2";
                    } elseif ($gapipk[$a] == "4") {
                        $bobotipk[$a] = "1.5";
                    } else {
                        $bobotipk[$a] = "1";
                    }

                    if ($gappenghasilan[$a] == "0"){
                        $bobotpenghasilan[$a] = "5";
                    } elseif ($gappenghasilan[$a] == "1") {
                        $bobotpenghasilan[$a] = "4.5";
                    } elseif ($gappenghasilan[$a] == "-1") {
                        $bobotpenghasilan[$a] = "4";
                    } elseif ($gappenghasilan[$a] == "2") {
                        $bobotpenghasilan[$a] = "3.5";
                    } elseif ($gappenghasilan[$a] == "-2") {
                        $bobotpenghasilan[$a] = "3";
                    } elseif ($gappenghasilan[$a] == "3") {
                        $bobotpenghasilan[$a] = "2.5";
                    } elseif ($gappenghasilan[$a] == "-3") {
                        $bobotpenghasilan[$a] = "2";
                    } elseif ($gappenghasilan[$a] == "4") {
                        $bobotpenghasilan[$a] = "1.5";
                    } else {
                        $bobotpenghasilan[$a] = "1";
                    }

                    if ($gaptanggungan[$a] == "0"){
                        $bobottanggungan[$a] = "5";
                    } elseif ($gaptanggungan[$a] == "1") {
                        $bobottanggungan[$a] = "4.5";
                    } elseif ($gaptanggungan[$a] == "-1") {
                        $bobottanggungan[$a] = "4";
                    } elseif ($gaptanggungan[$a] == "2") {
                        $bobottanggungan[$a] = "3.5";
                    } elseif ($gaptanggungan[$a] == "-2") {
                        $bobottanggungan[$a] = "3";
                    } elseif ($gaptanggungan[$a] == "3") {
                        $bobottanggungan[$a] = "2.5";
                    } elseif ($gaptanggungan[$a] == "-3") {
                        $bobottanggungan[$a] = "2";
                    } elseif ($gaptanggungank[$a] == "4") {
                        $bobottanggungan[$a] = "1.5";
                    } else {
                        $bobottanggungan[$a] = "1";
                    }

                    if ($gapsmt[$a] == "0"){
                        $bobotsmt[$a] = "5";
                    } elseif ($gapsmt[$a] == "1") {
                        $bobotsmt[$a] = "4.5";
                    } elseif ($gapsmt[$a] == "-1") {
                        $bobotsmt[$a] = "4";
                    } elseif ($gapsmt[$a] == "2") {
                        $bobotsmt[$a] = "3.5";
                    } elseif ($gapsmt[$a] == "-2") {
                        $bobotsmt[$a] = "3";
                    } elseif ($gapsmt[$a] == "3") {
                        $bobotsmt[$a] = "2.5";
                    } elseif ($gapsmt[$a] == "-3") {
                        $bobotsmt[$a] = "2";
                    } elseif ($gapsmt[$a] == "4") {
                        $bobotsmt[$a] = "1.5";
                    } else {
                        $bobotsmt[$a] = "1";
                    }

                    if ($gapproduktivitas[$a] == "0"){
                        $bobotproduktivitas[$a] = "5";
                    } elseif ($gapproduktivitas[$a] == "1") {
                        $bobotproduktivitas[$a] = "4.5";
                    } elseif ($gapproduktivitas[$a] == "-1") {
                        $bobotproduktivitas[$a] = "4";
                    } elseif ($gapproduktivitas[$a] == "2") {
                        $bobotproduktivitas[$a] = "3.5";
                    } elseif ($gapproduktivitas[$a] == "-2") {
                        $bobotproduktivitas[$a] = "3";
                    } elseif ($gapproduktivitas[$a] == "3") {
                        $bobotproduktivitas[$a] = "2.5";
                    } elseif ($gapproduktivitas[$a] == "-3") {
                        $bobotproduktivitas[$a] = "2";
                    } elseif ($gapproduktivitas[$a] == "4") {
                        $bobotproduktivitas[$a] = "1.5";
                    } else {
                        $bobotproduktivitas[$a] = "1";
                    }

                    if ($gapkeandalan[$a] == "0"){
                        $bobotkeandalan[$a] = "5";
                    } elseif ($gapkeandalan[$a] == "1") {
                        $bobotkeandalan[$a] = "4.5";
                    } elseif ($gapkeandalan[$a] == "-1") {
                        $bobotkeandalan[$a] = "4";
                    } elseif ($gapkeandalan[$a] == "2") {
                        $bobotkeandalan[$a] = "3.5";
                    } elseif ($gapkeandalan[$a] == "-2") {
                        $bobotkeandalan[$a] = "3";
                    } elseif ($gapkeandalan[$a] == "3") {
                        $bobotkeandalan[$a] = "2.5";
                    } elseif ($gapkeandalan[$a] == "-3") {
                        $bobotkeandalan[$a] = "2";
                    } elseif ($gapkeandalan[$a] == "4") {
                        $bobotkeandalan[$a] = "1.5";
                    } else {
                        $bobotkeandalan[$a] = "1";
                    }

                    if ($gapfokus[$a] == "0"){
                        $bobotfokus[$a] = "5";
                    } elseif ($gapfokus[$a] == "1") {
                        $bobotfokus[$a] = "4.5";
                    } elseif ($gapfokus[$a] == "-1") {
                        $bobotfokus[$a] = "4";
                    } elseif ($gapfokus[$a] == "2") {
                        $bobotfokus[$a] = "3.5";
                    } elseif ($gapfokus[$a] == "-2") {
                        $bobotfokus[$a] = "3";
                    } elseif ($gapfokus[$a] == "3") {
                        $bobotfokus[$a] = "2.5";
                    } elseif ($gapfokus[$a] == "-3") {
                        $bobotfokus[$a] = "2";
                    } elseif ($gapfokus[$a] == "4") {
                        $bobotfokus[$a] = "1.5";
                    } else {
                        $bobotfokus[$a] = "1";
                    }

                    if ($gapevaluasi[$a] == "0"){
                        $bobotevaluasi[$a] = "5";
                    } elseif ($gapevaluasi[$a] == "1") {
                        $bobotevaluasi[$a] = "4.5";
                    } elseif ($gapevaluasi[$a] == "-1") {
                        $bobotevaluasi[$a] = "4";
                    } elseif ($gapevaluasi[$a] == "2") {
                        $bobotevaluasi[$a] = "3.5";
                    } elseif ($gapevaluasi[$a] == "-2") {
                        $bobotevaluasi[$a] = "3";
                    } elseif ($gapevaluasi[$a] == "3") {
                        $bobotevaluasi[$a] = "2.5";
                    } elseif ($gapevaluasi[$a] == "-3") {
                        $bobotevaluasi[$a] = "2";
                    } elseif ($gapevaluasi[$a] == "4") {
                        $bobotevaluasi[$a] = "1.5";
                    } else {
                        $bobotevaluasi[$a] = "1";
                    }

                    if ($gapintegritas[$a] == "0"){
                        $bobotintegritas[$a] = "5";
                    } elseif ($gapintegritas[$a] == "1") {
                        $bobotintegritas[$a] = "4.5";
                    } elseif ($gapintegritas[$a] == "-1") {
                        $bobotintegritas[$a] = "4";
                    } elseif ($gapintegritas[$a] == "2") {
                        $bobotintegritas[$a] = "3.5";
                    } elseif ($gapintegritas[$a] == "-2") {
                        $bobotintegritas[$a] = "3";
                    } elseif ($gapintegritas[$a] == "3") {
                        $bobotintegritas[$a] = "2.5";
                    } elseif ($gapintegritas[$a] == "-3") {
                        $bobotintegritas[$a] = "2";
                    } elseif ($gapintegritas[$a] == "4") {
                        $bobotintegritas[$a] = "1.5";
                    } else {
                        $bobotintegritas[$a] = "1";
                    }

                    if ($gappengetahuantk[$a] == "0"){
                        $bobotpengetahuantk[$a] = "5";
                    } elseif ($gappengetahuantk[$a] == "1") {
                        $bobotpengetahuantk[$a] = "4.5";
                    } elseif ($gappengetahuantk[$a] == "-1") {
                        $bobotpengetahuantk[$a] = "4";
                    } elseif ($gappengetahuantk[$a] == "2") {
                        $bobotpengetahuantk[$a] = "3.5";
                    } elseif ($gappengetahuantk[$a] == "-2") {
                        $bobotpengetahuantk[$a] = "3";
                    } elseif ($gappengetahuantk[$a] == "3") {
                        $bobotpengetahuantk[$a] = "2.5";
                    } elseif ($gappengetahuantk[$a] == "-3") {
                        $bobotpengetahuantk[$a] = "2";
                    } elseif ($gappengetahuantk[$a] == "4") {
                        $bobotpengetahuantk[$a] = "1.5";
                    } else {
                        $bobotpengetahuantk[$a] = "1";
                    }

                    $ncfsiswa[$a] = (($bobotipk[$a]) + ($bobotpenghasilan[$a]))/2;
                    $nsfsiswa[$a] = (($bobottanggungan[$a]) + ($bobotsmt[$a]))/2;
                    $hasilsiswa[$a] = (0.6 * $ncfsiswa[$a]) + (0.4 * $nsfsiswa[$a]);

                    $sql = mysqli_query($koneksi,"INSERT INTO hasilsiswa (nama, bobotipk, bobotpenghasilan, bobottanggungan, bobotsmt, bobotproduktivitas, bobotkeandalan, bobotfokus, bobotevaluasi, bobotintegritas, bobotpengetahuantk, ncf, nsf, hasil) VALUES('$nama[$a]','$bobotipk[$a]','$bobotpenghasilan[$a]','$bobottanggungan[$a]','$bobotsmt[$a]','$bobotproduktivitas[$a]','$bobotkeandalan[$a]','$bobotfokus[$a]','$bobotevaluasi[$a]','$bobotintegritas[$a]','$bobotpengetahuantk[$a]','$ncfsiswa[$a]','$nsfsiswa[$a]','$hasilsiswa[$a]')") or die (mysqli_error($koneksi));

                }

    ?>

    <!-- TUTUP -->
    <?php
            }
        }
    ?>
    <!-- /TUTUP -->
    <br><br>
    


    <br><br>


    <!-- Table -->
    <div class="table-responsive">
    <form  role="form" method="post" action="hasil.php" class="form-inline">
        <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Prestasi Kerja</th>
                  <th scope="col">Kesetiaan</th>
                  <th scope="col">Kepemimpinan</th>
                  <th scope="col">Kerjasama</th>
                  <th scope="col">Produktivitas</th>
                  <th scope="col">Keandalan</th>
                  <th scope="col">Fokus</th>
                  <th scope="col">Evaluasi Kinerja</th>
                  <th scope="col">Integritas Kejujuran</th>
                  <th scope="col">Pengetahuan Teknis</th>
				  <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["ipk"];?></td>
                  <td><?php echo $data["penghasilan"];?></td>
                  <td><?php echo $data["tanggungan"];?></td>
                  <td><?php echo $data["semester"];?></td>
                  <td><?php echo $data["produktivitas"];?></td>
                  <td><?php echo $data["keandalan"];?></td>
                  <td><?php echo $data["fokus"];?></td>
                  <td><?php echo $data["evaluasi"];?></td>
                  <td><?php echo $data["integritas"];?></td>
                  <td><?php echo $data["pengetahuantk"];?></td>
				  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='delete.php?id=<?php echo $data['nama']; ?>'">Hapus</button>
                    </div>
					</td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <!-- <thead class="thead-dark">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">2</th>
                </tr>
            </thead> -->
        </table>
        <button type="submit" name="hitunggap" class="btn btn-primary mb-2">Hitung</button>
    </form>


    </div>
    
    <!-- /Tabel -->

    </div>

</body>
</html>