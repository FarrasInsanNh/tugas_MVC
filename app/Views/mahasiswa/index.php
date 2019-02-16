<div class="container">
<div class="jumbotron mt-5 text-center">
  <h1 class="display-4">Data Mahasiswa</h1>
  <hr class="my-2">
  <p class="lead"></p>
</div>
  <button type="button" class="btn btn-primary btn-lg tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Mahasiswa
      </button>
  <div class="row">
    <div class="col-lg-6">
    </div>
  </div>

  <div class="row mb-5 mt-5">
    <div class="col-lg-6">
      <?php Flasher::flash()?>
      <h3>Daftar Mahasiswa</h3>
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
      <div class="input-group mb-2">
        <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword" autoComplete="off">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </div>
      </form>
      <ul class="list-group mt-4">
        <?php foreach ($data['mhs'] as $mhs): ?>
        <li class="list-group-item ">
          <?=$mhs['nama']; ?>
          <a href="<?=BASEURL; ?>/mahasiswa/hapus/<?=$mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
          <a href="<?=BASEURL; ?>/mahasiswa/ubah/<?=$mhs['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
          <a href="<?=BASEURL; ?>/mahasiswa/detail/<?=$mhs['id']; ?>" class="badge badge-primary float-right ml-1 mr-1">detail</a>
        </li>

        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  

  <!-- Modal -->
  <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="formMantul">
          <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
              <div class="modal-body" >
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                
                <div class="form-group">
                  <label for="nrp">NRP</label>
                  <input type="number" class="form-control" id="nrp" name="nrp">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Akutansi">Akutansi</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Pemasaran">Pemasaran</option>
                  </select>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>


</div>
