<html>
<head>
	<title>Home | Profile Matching</title>
	  
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

	<!-- Container -->
	<div class="container"><br><br>

		<h2 style="text-align: center;">
			<b >Sistem Rekomendasi pegawai terbaik metode profile matching <br> pada biro kepegawaian Kemenag RI</b>
	  	</h2>
  
		<p style="text-align: justify;">
		ini merupakan aplikasi yang sementara di kembangkan dan masih berupa prototipe 
		</p>

	

		<ul class="list-unstyled">
    		<li><b>Core factor (60%) :</b>
        		<ul>
            		<li>Prestasi Kerja</li>
            		<li>Kesetiaan</li>
					<li>Produktivitas</li>
					<li>Keandalan</li>
					<li>Fokus</li>
        		</ul>
      		</li>
      		<li><b>Secondar factor (40%) :</b>
        		<ul>
		            <li>Kepemimpinan</li>
		            <li>Kerjasama</li>
					<li>Evaluasi Kinerja</li>
					<li>Integritas Kejujuran</li>
					<li>Pengetahuan Teknis</li>
        		</ul>
      		</li>
    	</ul>

		<!-- Prestasi Kerja -->
		<dl class="row">
			<dt class="col-sm-1">1.</dt>
			<dd class="col-sm-11"><b>Prestasi Kerja</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan, berdasarkan jumlah nilai
				Prestasi Kerja yang diperoleh.
			</dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
			    <table class="table table-striped">
			    	<thead>
			        	<tr>
			            	<th scope="col">Prestasi Kerja</th>
			            	<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
    		</dd>
  		</dl>
  		<!-- /Prestasi Kerja -->

		<!-- Kesetiaan -->
		<dl class="row">
    		<dt class="col-sm-1">2.</dt>
    		<dd class="col-sm-11"><b>Kesetiaan</b></dd>

    		<dt class="col-sm-1"></dt>
    		<dd class="col-sm-11">
    			Kriteria Kesetiaan merupakan persyaratan yang dibutuhkan untuk pengambilan
      			keputusan
    		</dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
      			<table class="table table-striped">
        			<thead>
          				<tr>
            				<th scope="col">Kesetiaan</th>
				            <th scope="col">Nilai</th>
				        </tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Bekerja Lebih dari 5 Tahun </td>
			            	<th scope="row">4</th>
			          	</tr>
			          	<tr>
			            	<td>Bekerja 3-5 Tahun</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Bekerja 2-3 Tahun</td>
			            	<th scope="row">2</th>
		          		</tr>
		          		<tr>
		            		<td>Bekerja 1-2 Tahun</td>
		            		<th scope="row">1</th>
		          		</tr>
		        	</tbody>
		      	</table>
		    </dd>
		</dl>
  		<!-- /Kesetiaan -->

  		<!-- Kepemimpinan -->
  		<dl class="row">
    		<dt class="col-sm-1">3.</dt>
    		<dd class="col-sm-11"><b>Kepemimpinan</b></dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
		      	Kriteria jumlah Kepemimpinan merupakan persyaratan yang dibutuhkan untuk pengambilan
		      	keputusan.
		    </dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
		      	<table class="table table-striped">
		        	<thead>
		          		<tr>
		            		<th scope="col">Kepemimpinan</th>
		            		<th scope="col">Nilai</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Sedang</td>
		            		<th scope="row">1</th>
		          		</tr>
		          		<tr>
		            		<td>Cukup</td>
		            		<th scope="row">2</th>
		          		</tr>
		          		<tr>
		            		<td>Baik</td>
		            		<th scope="row">3</th>
		         		</tr>
		          		<tr>
		            		<td>Amat Baik</td>
		            		<th scope="row">4</th>
		          		</tr>
		        	</tbody>
		      	</table>
		    </dd>
		</dl>
		<!-- /Kepemimpinan -->

	  	<!-- Kerjasama -->
	  	<dl class="row">
	    	<dt class="col-sm-1">4.</dt>
	    	<dd class="col-sm-11"><b>Kerjasama / Pitching</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Kerjasama / Pitching merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Kerjasama</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Kurang</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Kerjasama --><br>

		<!-- Produktivitas -->
		<dl class="row">
	    	<dt class="col-sm-1">5.</dt>
	    	<dd class="col-sm-11"><b>Produktivitas</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Produktivitas merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Produktivitas</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Kurang</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Produktivitas --><br>

		<!-- Keandalan -->
		<dl class="row">
	    	<dt class="col-sm-1">6.</dt>
	    	<dd class="col-sm-11"><b>Keandalan</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Keandalan merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Keandalan</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Kurang</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Keandalan --><br>

		<!-- Fokus -->
		<dl class="row">
	    	<dt class="col-sm-1">7.</dt>
	    	<dd class="col-sm-11"><b>Fokus</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Fokus merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Fokus</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Kurang</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Fokus --><br>

		<!-- Evaluasi -->
		<dl class="row">
	    	<dt class="col-sm-1">8.</dt>
	    	<dd class="col-sm-11"><b>Evaluasi Kinerja</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Evaluasi Kinerja merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Evaluasi Kinerja</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Kurang</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Evaluasi --><br>

		<!-- Integritas -->
		<dl class="row">
	    	<dt class="col-sm-1">9.</dt>
	    	<dd class="col-sm-11"><b>Integritas Kejujuran</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Integritas Kejujuran merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Integritas</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Kurang</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Integritas --><br>

		<!-- Kerjasama -->
		<dl class="row">
	    	<dt class="col-sm-1">10.</dt>
	    	<dd class="col-sm-11"><b>Pengetahuan Teknis</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Pengetahuan Teknis merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped">
	        		<thead>
	          			<tr>
	            			<th scope="col">Pengetahuan Teknis</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>Kurang</td>
			            	<th scope="row">0</th>
			          	</tr>
			          	<tr>
			            	<td>Sedang</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>Cukup</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>Baik</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>Amat Baik</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Kerjasama --><br>



		<!-- GAP -->
  		<h4>GAP</h4>
  		<table class="table table-hover">
  			<thead>
    			<tr>
			    	<th scope="col">#</th>
			      	<th scope="col">Kriteria</th>
			      	<th scope="col">GAP</th>
			    </tr>
			</thead>
			<tbody>
    			<tr>
		      		<th scope="row">1</th>
		      		<td>Prestasi Kerja</td>
		      		<td>3</td>
		    	<tr>
      				<th scope="row">2</th>
      				<td>Kesetiaan</td>
      				<td>3</td>
    			</tr>
			    <tr>
			      	<th scope="row">3</th>
			      	<td>Kepemimpinan</td>
			      	<td>3</td>
			    </tr>
			    <tr>
			      	<th scope="row">4</th>
			      	<td>Kerjasama</td>
			      	<td>2</td>
			    </tr>
			</tbody>
		</table><br><br>
		<!-- /GAP -->

		<!-- BOBOT -->
	  	<h4>Bobot</h4>
	  	<table class="table table-hover">
	  		<thead>
	    		<tr>
	      			<th scope="col">#</th>
	      			<th scope="col">Selisih</th>
	      			<th scope="col">Bobot Nilai</th>
	      			<th scope="col">Keterangan</th>
	    		</tr>
	  		</thead>
	  		<tbody>
			    <tr>
			      	<th scope="row">1</th>
			      	<td>0</td>
			      	<td>5</td>
			      	<td>Tidak ada selisih(kompetensi sesuai dengan yang dibutuhkan)</td>
			    </tr>
			    <tr>
			      	<th scope="row">2</th>
			      	<td>1</td>
			      	<td>4,5</td>
			      	<td>Kompetensi individu kelebihan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">3</th>
			      	<td>-1</td>
			      	<td>4</td>
			      	<td>Kompetensi individu kekurangan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">4</th>
			     	<td>2</td>
			      	<td>3,5</td>
			      	<td>Kompetensi individu kelebihan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">5</th>
			      	<td>-2</td>
			      	<td>3</td>
			      	<td>Kompetensi individu kekurangan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">6</th>
			      	<td>3</td>
			      	<td>2,5</td>
			      	<td>Kompetensi individu kelebihan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">7</th>
			      	<td>-3</td>
			      	<td>2</td>
			      	<td>Kompetensi individu kekurangan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">8</th>
			      	<td>4</td>
			      	<td>1,5</td>
			      	<td>Kompetensi individu kelebihan 4 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">9</th>
			      	<td>-4</td>
			      	<td>1</td>
			      	<td>Kompetensi individu kekurangan 4 tingkat/level</td>
			    </tr>
			</tbody>
		</table>
		<!-- /BOBOT -->

	</div>
  	<!-- /Container -->

</body>
</html>