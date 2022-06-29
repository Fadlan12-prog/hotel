<?php $this->load->view('master/head');?>
    <div class="container">
		<div class="card mb-3">
		  <img src="https://i.pinimg.com/564x/ab/13/c7/ab13c713031d3e1be3f4906607e502c6.jpg" class="card-img-top" alt="..." style="max-height: 50vh;">
		  <div class="card-body">
		    <h5 class="card-title">List Bookingmu</h5>
		    <p class="card-text">
					Kode Booking Anda :
		    </p>
		    <p>
		    	<div class="row">
		    		<?php $data['book'] = array_reverse($data['book']);foreach($data['book'] as $key => $item):?>
		    		<div class="col-md-6 mb-2">
							<div class="card">
							  <img src="<?=$item->img_room?>" class="card-img-top" alt="<?=$item->img_room?>">
							  <div class="card-body">
							    <h5 class="card-title"><?=$item->Nama_room?> x <?=$item->jml_kamar?> Kamar </h5>
								<p>Nama Tamu = <?=$item->nama_tamu?></p>
							    <p>Tgl check in = <?=$item->tgl_cekin?></p>
							    <p>Tgl check out = <?=$item->tgl_cekout?></p>
							    <p>payby = <?=$item->PayBay?></p>
							    <p>Pembayaran = 
							    	<?php if($item->PayEND==0)
							    	{$pesan='belum di Bayar';}
							    	else
									{$pesan='sudah di bayar';}
							    	echo $pesan;
							    	?>
							    </p>
							    <p>
									<strong>
							    		Kode Booking = <?=$item->RefPB?>
									</strong>
							    </p>
							    <a href="<?=base_url('/Tamu/print?id='.$item->id_pesanan)?>" class="btn btn-primary col-12" target="_blank">Print</a>
							  </div>
							</div>
		    		</div>
		    		<?php endforeach?>

		    	</div>
		    </p>
		  </div>
		</div>    		
    </div>
<?php $this->load->view('master/foot');?>
