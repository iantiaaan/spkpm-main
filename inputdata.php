<?php
    include "koneksi.php";
?>

<html>
<head>
	<title>Input | Profile Matching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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


	<!-- Form awal -->
	<form  role="form" method="post" class="form-inline" class="animated infinite zoomIn delay-2s">
  		<div class="form-group mb-2">
    		<label class="sr-only"></label>
    		<input type="text" readonly class="form-control-plaintext" value="Jumlah Input">
  		</div>
  		<div class="form-group mx-sm-3 mb-2">
    		<select name="jmlsiswa" class="form-control" id="exampleFormControlSelect1">
      			<option>Choose</option>
      			<option value="1">1</option>
      			<option value="2">2</option>
    				<option value="3">3</option>
    				<option value="4">4</option>
    				<option value="5">5</option>
      			<option value="6">6</option>
    		</select>
  		</div>
  		<button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
	</form>
	<!-- /Form -->



	<!-- Form -->
	<?php
	 if(isset($_POST['submit'])) {
	?>
	 <form  role="form" method="post" action="proses.php"><br>
	 <?php
	  session_start();
		$jumlah = $_POST['jmlsiswa'];
		$_SESSION['jumlahsiswa'] = $jumlah;
			for($a=1;$a<=$jumlah;$a++) {
	 ?>

  	<div class="form-group">
  		<label><b>Pegawai ke <?php echo$a; ?></b></label><br>
    	<label for="exampleFormControlInput1">Nama Pegawai</label>
    	<input class="form-control" placeholder="Nama" name="namasiswa<?php echo $a; ?>" autocomplete="off">
 	  </div>
 	<div class="form-group">
    	<label for="exampleFormControlSelect1">Prestasi Kerja</label>
    	<select name="ipk<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect1">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
      		<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>
  	</div>

  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Kesetiaan</label>
    	<select name="penghasilan<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="3">Lebih dari 5 Tahun</option>
      		<option value="4">3-5 Tahun</option>
			<option value="2">2-3 Tahun</option>
			<option value="1">1-2 Tahun</option>
    	</select>
  	</div>

  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Kepemimpinan</label>
    	<select name="tanggungan<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
      		<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>
  	</div>

  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Kerjasama</label>
    	<select name="smt<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
			<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>
  	</div>

	  <div class="form-group">
    	<label for="exampleFormControlSelect2">Produktivitas</label>
    	<select name="produktivitas<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
			<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>
  	</div>

	  <div class="form-group">
    	<label for="exampleFormControlSelect2">Keandalan</label>
    	<select name="keandalan<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
			<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>

		<div class="form-group">
    	<label for="exampleFormControlSelect2">Fokus</label>
    	<select name="fokus<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
			<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>

		<div class="form-group">
    	<label for="exampleFormControlSelect2">Evaluasi Kinerja</label>
    	<select name="evaluasi<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
			<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>

		<div class="form-group">
    	<label for="exampleFormControlSelect2">Integritas Kejujuran</label>
    	<select name="integritas<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
			<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>

		<div class="form-group">
    	<label for="exampleFormControlSelect2">Pengetahuan Teknis</label>
    	<select name="pengetahuantk<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">sedang</option>
			<option value="2">cukup</option>
			<option value="4">baik</option>
			<option value="3">amat baik</option>
    	</select>
  	</div>
  	</div>
  	</div>
  	</div>
  	</div>
 	<br>
 	<?php } ?>
  		<button type="submit" name="submitform" class="btn btn-primary">Submit</button><br>
	</form>
	<?php } ?>
	<!-- /Form -->

	</div>

</body>
</html>