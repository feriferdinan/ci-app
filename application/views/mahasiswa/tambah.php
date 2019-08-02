<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			   Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">

				<form action="" method="post">
				<div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama" >
				    <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
				 </div>
				 <div class="form-group">
				    <label for="nrp">NRP</label>
				    <input type="text" class="form-control" id="nrp"  name="nrp">
				     <small class="form-text text-danger"><?php echo form_error('nrp'); ?></small>
				 </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" id="email" name="email" >
				     <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
				 </div>	
					<div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option value="Teknik Informatika">Teknik Informatika</option>
				      <option value="Teknik Industri">Teknik Industri</option>
				      <option value="Teknik Pangan">Teknik Pangan</option>
				      <option value="Teknik Pertanian">Teknik Pertanian</option>
				    </select>
				  </div>
				  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>