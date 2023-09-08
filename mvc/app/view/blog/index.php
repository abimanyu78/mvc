 <body>
    <div class="container mt-5">
        
            <div class="col-6">
                <?php Flasher::flash(); ?>
                <button style="margin-bottom:20px;background:#37988e;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalGuru"
                    data-bs-whatever="@getbootstrap">
                    Tambah Data Guru
                </button>

            <h1>Data Guru</h1>
            <ul class="list-group"></ul>
            <?php foreach ($data['blog'] as $guru) : ?>
    
              <table class="table">
  <tbody>
    <tr>
     
      <td class="col-8"><?= $guru['nama'];?></td>
      
      <td >
        <a href="<?= BASE_URL; ?>/blog/hapus/<?= $guru['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');" style="background:#37988e;">hapus</a>  
      </td>
      <td>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$guru['id']?>" style="background:#37988e;">
  ubah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$guru['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASE_URL; ?>/blog/ubah" method="POST">
          <input type="hidden" name="id" value="<?=$guru['id']?>">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" value="<?= $guru['nama'];?>" name="nama" >
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Komli</label>
              <input type="text" class="form-control" value="<?= $guru['komli'];?>" name="komli" >
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Alamat</label>
              <input type="text" class="form-control" value="<?=$guru["alamat"]?>" name="alamat">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </div>
        
        </form>
      </div>
      
    </div>
  </div>
</div>
      </td>
      <td>
      <a href="<?= BASE_URL; ?>/blog/detail/<?= $guru['id']; ?>" class="btn btn-primary" style="background:#37988e;">detail</a>
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
<div class="modal fade" id="ModalGuru" tabindex="-1" aria-labelledby="ModalGuruLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="ModalGuruLabel">Tambah Data Guru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASE_URL; ?>/blog/tambah" method="POST">
          <input type="hidden" name="id" id="id">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Komli</label>
              <input type="text" class="form-control" id="komli" name="komli">
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
