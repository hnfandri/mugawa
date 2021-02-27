
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      <!-- isi konten -->

      <div class="row">
          <div class="col-md-8">
          <h1 class="h3 mb-4 text-gray-800"><?= $title ;?></h1>
          </div>
          <div class="col-md-4">
            <a href="<?= base_url('perhitungan/ranking') ;?>" class="btn btn-success float-right">Hasil Perankingan</a>
          </div>
      </div>

      <div class="row mt-3">
        <table class="table"> 
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama siswa</th>
                    <th>Nama lokasi</th>
                    <th>Mulmed</th>
                    <th>Desain</th>
                    <th>Hardware</th>
                    <th>B.Inggris</th>
                    <th>SO</th>
                    <th>Videografi</th>
                    <th>Fotografi</th>
                    <th>Editting</th>
                    <th>Teamwork</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach($pengurangan as $p) : ?>
                <tr class="text-center">
                    <th><?= $i++ ;?></th>
                    <th class="text-left"><?= $p['nama_siswa'] ;?></th>
                    <th class="text-left"><?= $p['nama_lokasi'] ;?></th>
                    <th><?= $p['dev_n1'] ;?></th>
                    <th><?= $p['dev_n2'] ;?></th>
                    <th><?= $p['dev_n3'] ;?></th>
                    <th><?= $p['dev_n4'] ;?></th>
                    <th><?= $p['dev_n5'] ;?></th>
                    <th><?= $p['dev_n6'] ;?></th>
                    <th><?= $p['dev_n7'] ;?></th>
                    <th><?= $p['dev_n8'] ;?></th>
                    <th><?= $p['dev_n9'] ;?></th>

                    <th>
                        
                       <a href="<?= base_url('perhitungan/hitung_gap/' .$p['id_siswa']) ;?>" class="badge badge-pill badge-primary">hitung rank</a>
                        
                    </th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

     <!-- end isi konten -->
    </div>

      </div><!-- /.container-fluid -->
    </div>
    