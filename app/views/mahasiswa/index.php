<div class="container mt-3">
	<div class="row">
			<div class="col-lg-6">
					<?php Flasher::flash(); ?>
			</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
			Tambah Mahasiswa
			</button>
			<?php 
				var_dump($data['mhs']);
			?>
			<ul class="list-group">
				<?php foreach($data['mhs'] as $mhs) : ?>
			  	<li class="list-group-item">
			  		<?= $mhs['nama']; ?>
			  		<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>	
			  		<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>	
			  		<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>	
			  	</li>
			  	<?php endforeach; ?>
			</ul>
			
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
				<input type="hidden" name='id' id="id">
        	<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
			 </div>

			 <div class="form-group">
			    <label for="nim">NIM</label>
			    <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
			 </div>

			 <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
			 </div>

			 <div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Teknik Mesin">Teknik Mesin</option>
			      <option value="Teknik Ngibul">Teknik Ngibul</option>
			    </select>
			  </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
         </form>
      </div>
    </div>
  </div>
</div>