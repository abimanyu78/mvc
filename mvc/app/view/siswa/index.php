<body>
    <div class="container mt-5">
    <?= Flasher::flash(); ?>
            <div class="col-6">
                
                <button style="margin-bottom:20px; background:#37988e;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                  data-bs-whatever="@getbootstrap">
                  Tambah Data Siswa
                </button>
                


                <h1>Data Siswa</h1>
            <ul class="list-group"></ul>
            <?php foreach ($data['siswa'] as $siswa) : ?>
              
    <table class="table">
  <tbody>
    <tr>
     
      <td class="col-8"><?= $siswa['nama'];?></td>
      
      <td >
      <a href="<?= BASE_URL; ?>/data_siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');" style="background:#37988e;">hapus</a>  
      </td>
      
 
      <td>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$siswa['id']?>" style="background:#37988e;">
  ubah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$siswa['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASE_URL; ?>/data_siswa/ubah" method="POST">
          <input type="hidden" name="id" value="<?=$siswa['id']?>">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" value="<?= $siswa['nama'];?>" name="nama" >
            </div>
            <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <?php if ($siswa['jenis_kelamin'] == "laki-laki") : ?>
                                    <option value="laki-laki" selected>Laki - laki</option>
                                    <option value="perempuan">Perempuan</option>
                                <?php else : ?>
                                    <option value="laki-laki">Laki - laki</option>
                                    <option value="perempuan" selected>Perempuan</option>
                                <?php endif ?>
                            </select>
                        </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Alamat</label>
              <input type="text" class="form-control" value="<?=$siswa["alamat"]?>" name="alamat">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        
        </form>
      </div>
      
    </div>
  </div>
</div>
      </td>
    
      <td>
      <a href="<?= BASE_URL; ?>/data_siswa/detail/<?= $siswa['id']; ?>" class="btn btn-primary" style="background:#37988e;">detail</a>
      </td>
    </tr>
    
  </tbody>
</table>
<?php endforeach; ?>
            </div>
        </div>
    </div>

</body>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASE_URL; ?>/data_siswa/tambah" method="POST">
          <input type="hidden" name="id" id="id">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group mb-3">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>

            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  