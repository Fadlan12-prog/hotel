<?php $this->load->view('master/head');?>

<div class="container">
	<!-- div ren -->
	<div class="row">
		<div class="col-md-21">
			<div class="card mb-3 text-center">
			  <img src="https://i.pinimg.com/564x/ab/13/c7/ab13c713031d3e1be3f4906607e502c6.jpg" class="card-img-top" alt="" style="max-height: 850px;object-fit: cover;">
			  <div class="card-body">
			    <h5 class="card-title">Tentang Kami</h5>
			    <p class="card-text">Hotel kami yang berlokasi di kota besar terletak di pusat kota sehingga memberi akses mudah untuk bepergian agar para wisatawan bisa menikmati liburannya dengan sempurna. Semua properti kami dilengkapi dengan fasilitas premium untuk memanjakan para tamu serta layanan berkelas internasional</p>
			    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
			  </div>
			</div>
		</div>
	</div>
	<hr>
	<!-- div fasilitas -->
	<div class="row">
		<?php foreach ($fas as $key => $fasi):?>
		<div class="col-md-6">
			<div class="card">
			  <div class="card-body">
			    <h5 class="card-title"><?=$fasi->nama_fasilitas?></h5>
			    <p class="card-text"><?=$fasi->deks?>.</p>
			  </div>
			  <img src="<?=$fasi->img?>" class="card-img-bottom" alt="" style="max-height: 200px;object-fit: cover;">
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<?php $this->load->view('master/foot');?>
