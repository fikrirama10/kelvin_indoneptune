 <div class="container">
	<div class="row mt-3">
		<div class="col-md-6 ">

			<div class="card-header" >
				Detail Request Data Kupon
			  <div class="card-body">
			  	<ul class="list-group list-group-flush">
			  		<li class="list-group-item">Total Pegawai. <?= $val ['total_pegawai'];?> Orang</li>
				    <li class="list-group-item">Absen. <?= $val ['absen'];?> Orang</li>
				    <li class="list-group-item">Alfa. <?= $val ['alfa'];?> Orang</li>
				    <li class="list-group-item">Sakit. <?= $val['sakit'];?> Orang</li>
				    <li class="list-group-item">Izin. <?= $val ['izin'];?> Orang</li>
				    <li class="list-group-item">Cuti. <?= $val ['cuti'];?> Orang</li>
				    <li class="badge-secondary">Jumalah Kupon Dipinta = <?= $val ['total_kupon'];?> Kupon</li>
				    <br>
				    <center>
				    <h4><li class="badge badge-success">Status Verifikasi. : <?= $val ['validasi_cek'];?>  </li></h4>
					</center>
				    <center>
				   <h4> <li class="badge badge-info">Di Setujui Oleh. : <?= $val ['pemeriksa'];?> </li></h4>
				    </center>
			    </ul>
			  </div>
			</div>
		
		</div>
	</div>
</div> 
