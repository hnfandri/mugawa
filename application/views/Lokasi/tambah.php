


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-md-12">
        
            <div class="card">
                <div class="card-header">
                    Detail lokasi
                </div>
                <div class="card-body">
                    
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Perusahaan" name="nama" value="<?= set_value('nama') ;?>">
                        <?= form_error('nama','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" name="alamat" value="<?= set_value('alamat') ;?>">
                        <?= form_error('alamat','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telpon</label>
                        <input type="text" class="form-control" id="telp" placeholder="No telpon" name="telp" value="<?= set_value('telp') ;?>">
                        <?= form_error('telp','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group mt-auto">
                        <hr>
                        <small>Nilai kriteria</small>
                    </div>
                    <div class="form-group">
                        <label for="multimedia">Multimedia</label>
                        <input type="text" class="form-control" id="multimedia" name="multimedia" value="<?= set_value('multimedia') ;?>">
                        <?= form_error('multimedia','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="desain_grafis">Desain grafis</label>
                        <input type="text" class="form-control" id="desain_grafis" name="desain_grafis" value="<?= set_value('desain_grafis') ;?>">
                        <?= form_error('desain_grafis','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="hardware_software">Hardware Software</label>
                        <input type="text" class="form-control" id="hardware_software" name="hardware_software" value="<?= set_value('hardware_software') ;?>">
                        <?= form_error('hardware_software','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="inggris">Bahasa Inggris</label>
                        <input type="text" class="form-control" id="inggris" name="inggris" value="<?= set_value('inggris') ;?>">
                        <?= form_error('inggris','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="so">Sistem Operasi</label>
                        <input type="text" class="form-control" id="so" name="so" value="<?= set_value('so') ;?>">
                        <?= form_error('so','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="videografi">Videografi</label>
                        <input type="text" class="form-control" id="videografi" name="videografi" value="<?= set_value('videografi') ;?>">
                        <?= form_error('videografi','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="fotografi">Fotografi</label>
                        <input type="text" class="form-control" id="fotografi" name="fotografi" value="<?= set_value('fotografi') ;?>">
                        <?= form_error('fotografi','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="editting">Editting</label>
                        <input type="text" class="form-control" id="editting" name="editting" value="<?= set_value('editting') ;?>">
                        <?= form_error('editting','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <div class="form-group">
                        <label for="teamwork">Teamwork</label>
                        <input type="text" class="form-control" id="teamwork" name="teamwork" value="<?= set_value('teamwork') ;?>">
                        <?= form_error('teamwork','<small class="text-danger pl-3">','</small>') ;?>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data Lokasi</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

      </div><!-- /.container-fluid -->
    </div>
    
  </div>