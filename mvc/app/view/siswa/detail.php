<div class="container">
    <div class="card mt-4" style="width: 50rem;">
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>                
                <td><h5 class="card-title"><?= $data['siswa']['nama']; ?></h5></td>
                <td><h6 class="card-text"><?= $data['siswa']['jenis_kelamin']; ?></h6></td>
                <td><p class="card-text"><?= $data['siswa']['alamat']; ?></p></td>
                </tr>
            </tbody>            
            </table>
            <a href="<?= BASE_URL; ?>/data_siswa" class="card-link">kembali</a>
        </div>
    </div>
</div>
