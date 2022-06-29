<?php $this->load->view('master/head');?>
    <div class="container">
		<div class="card mb-3">
		  <img src="https://i.pinimg.com/564x/ab/13/c7/ab13c713031d3e1be3f4906607e502c6.jpg" class="card-img-top" alt="..." style="max-height: 50vh;">
		  <div class="card-body">
		    <h5 class="card-title">Cari Data</h5>
		    <p class="card-text">
				Masukan Code Booking :
                <form action="<?=base_url('/Reseptionis/DataTrack')?>" method="get">
                    <input type="text" name="ref" class="form-control">
                    <button type="submit" class="btn btn-primary col-md-12 mt-2">Cari</button>
                </form>
		    </p>
		  </div>
		</div>    		
    </div>
<?php $this->load->view('master/foot');?>
