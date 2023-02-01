<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Ranking | Profile Matching</title>
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
    <h5>Ranking</h5>
    <!-- Tabel Ranking -->

    <?php 
        $query = mysqli_query($koneksi,"SELECT * FROM hasilsiswa ORDER BY hasil DESC LIMIT 1");
        if(mysqli_num_rows($query)>0){ 
    ?>
    <?php
        $a = 1;
        while($data = mysqli_fetch_array($query)){
    ?>

    <div class="alert alert-primary" role="alert">
        Pegawai dengan nama <b style="font-size: 15pt;"><?php echo $data["nama"];?></b> menjadi urutan pertama sebagai karyawan terbaik.
    </div>
    

    <?php $a++; } ?>
    <?php } ?>

    <div class="table-responsive"> 
    <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Bobot Prestasi Kerja</th>
                <th scope="col">Bobot Kesetiaan</th>
                <th scope="col">Bobot Kepemimpinan</th>
                <th scope="col">Bobot Kerjasama</th>
                <th scope="col">Bobot Produktivitas</th>
                <th scope="col">Bobot Keandalan</th>
                <th scope="col">Bobot Fokus</th>
                <th scope="col">Bobot Evaluasi</th>
                <th scope="col">Bobot Integritas</th>
                <th scope="col">Bobot Pengetahuan Teknis</th>
                <th scope="col">NCF (60%)</th>
                <th scope="col">NSF (40%)</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasilsiswa ORDER BY hasil DESC");
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
    <!-- /Tabel Ranking --><br>
    </div>
    

    </div>

</body>
</html>