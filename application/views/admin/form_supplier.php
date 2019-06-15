<form role="form" action="<?php echo base_url();?>index.php/supplier/simpan" method="post">
 	<div class="box-body">
	    <div class="form-group">
	      <label for="exampleInputEmail1">Kode Supplier</label>
	      <input type="text" name="kode_supplier" class="form-control" id="kode_supplier" placeholder="Masukkan Kode Supplier" value="<?php echo $row==""?"":$row->kode_supplier;?>">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Nama</label>
	      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Supplier" value="<?php echo $row==""?"":$row->nama;?>">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Email</label>
	      <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?php echo $row==""?"":$row->email;?>">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Nomor Telepon</label>
	      <input type="text" name="satuan" class="form-control" id="satuan" placeholder="Masukkan No Telepon" value="<?php echo $row==""?"":$row->notelp;?>">
	    </div>
	</div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>