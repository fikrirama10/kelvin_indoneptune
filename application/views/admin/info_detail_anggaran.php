 <div class="container">
	<div class="row mt-3">
		<div class="col-md-6 ">

			<div class="card-header" >
				Detail Request Data Kupon
			  <div class="card-body">
			  	<ul class="list-group list-group-flush">
			  		<li class="list-group-item">Nama. = <?= $kupon ['nama'];?></li>
				    <li class="list-group-item">No Induk. = <?= $kupon ['noinduk'];?></li>
				    <li class="list-group-item">Jabatan. = <?= $kupon ['namajabatan'];?> Orang</li>
				    <li class="list-group-item">Uang Makan. = <?= $kupon['uang_kupon'];?> Orang</li>
				    <li class="list-group-item">Shift. = <?= $kupon ['shift'];?> Orang</li>
				    <li class="list-group-item">Departemen. = <?= $kupon ['menu'];?> Orang</li>
				    <li class="badge-secondary">Jumalah Kupon. = <?= $kupon ['jumlah'];?> Kupon</li>
			    </ul>
			  </div>
			</div>
		
		</div>
	</div>
</div> 
