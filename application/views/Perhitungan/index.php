
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      <!-- isi konten -->
<form action="<?= base_url('perhitungan/proses_hitung') ;?>" method="POST">
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="m-0">Pilih Siswa</h5>
                    </div>
                    <div class="card-body">

                      <div class="col-lg">
                      <div class="form-group">
                        <div class="select2-purple">
                        <select name="siswa[]" class="select2" multiple="multiple" data-placeholder="Nama siswa" data-dropdown-css-class="select2-purple" style="width: 100%;">
                          <?php foreach($siswa as $sis) : ?>
                          <option value="<?= $sis['id'] ;?>"><?= $sis['nama'] ;?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="content">
          <div class="container-fluid">
              <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="m-0">Pilih lokasi prakerin</h5>
                    </div>
                    <div class="card-body">

                      <div class="col-lg">
                      <div class="form-group">
                                <select name="lokasi" class="form-control" id="lokasi">
                                    <?php foreach($lokasi as $lk) : ?>
                                        <option value="<?= $lk['id'] ;?>"><?= $lk['nama'] ;?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button class="btn btn-primary mt-2 float-right" type="submit" >Hitung</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</form>
     <!-- end isi konten -->
    </div>

      </div><!-- /.container-fluid -->
    </div>
    