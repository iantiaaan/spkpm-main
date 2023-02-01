<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Hasil | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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


    <!-- Table -->
    <form  role="form" method="post" class="form-inline">
        <table class="table">
            <!-- <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Prestasi Kerja</th>
                  <th scope="col">Kesetiaan</th>
                  <th scope="col">Kepemimpinan</th>
                  <th scope="col">Kerjasama</th>
                  <th scope="col">Produktivitas</th>
                  <th scope="col">keandalan</th>
                  <th scope="col">Fokus</th>
                  <th scope="col">Evaluasi Kinerja</th>
                  <th scope="col">Integritas Kejujuran</th>
                  <th scope="col">Pengetahuan Teknis</th>
                </tr>
            </thead> -->
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <!-- <tr>
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
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">2</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM gapsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["gapipk"];?></td>
                  <td><?php echo $data["gappenghasilan"];?></td>
                  <td><?php echo $data["gaptanggungan"];?></td>
                  <td><?php echo $data["gapsmt"];?></td>
                  <td><?php echo $data["gapproduktivitas"];?></td>
                  <td><?php echo $data["gapkeandalan"];?></td>
                  <td><?php echo $data["gapfokus"];?></td>
                  <td><?php echo $data["gapevaluasi"];?></td>
                  <td><?php echo $data["gapintegritas"];?></td>
                  <td><?php echo $data["gappengetahuantk"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
        </table> -->
    </form>
    <!-- /Tabel -->

    <!-- Tabel -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot Prestasi Kerja</th>
                <th scope="col">Bobot Kesetiaan</th>
                <th scope="col">Bobot Kepemimpinan</th>
                <th scope="col">Bobot Kerjasama</th>
                <th scope="col">Bobot Produktivitas</th>
                <th scope="col">Bobot Keandalan</th>
                <th scope="col">Bobot Fokus</th>
                <th scope="col">Bobot Evaluasi Kinerja</th>
                <th scope="col">Bobot Integritas</th>
                <th scope="col">Bobot Pengetahuan Teknis</th>
                <th scope="col">NCF (60%)</th>
                <th scope="col">NSF (40%)</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasilsiswa");
                if(mysqli_num_rows($query)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["bobotipk"];?></td>
                <td><?php echo $data["bobotpenghasilan"];?></td>
                <td><?php echo $data["bobottanggungan"];?></td>
                <td><?php echo $data["bobotsmt"];?></td>
                <td><?php echo $data["bobotproduktivitas"];?></td>
                <td><?php echo $data["bobotkeandalan"];?></td>
                <td><?php echo $data["bobotfokus"];?></td>
                <td><?php echo $data["bobotevaluasi"];?></td>
                <td><?php echo $data["bobotintegritas"];?></td>
                <td><?php echo $data["bobotpengetahuantk"];?></td>
                <td><?php echo $data["ncf"];?></td>
                <td><?php echo $data["nsf"];?></td>
                <td><?php echo $data["hasil"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Tabel -->

    <br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="rangking.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Perankingan">
        </div>
        <button type="submit" name="submitranking" class="btn btn-info">Ranking!</button>
    </form>
    <!-- /Hapus Record -->

    </div>

</body>
</html>