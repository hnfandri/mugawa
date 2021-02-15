
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
      </div>

      <div class="row mt-3">
        <table class="table"> 
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama siswa</th>
                    <th>Nilai Skor</th>
                    <th class="text-center">Ranking</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; $j = 1; ?>
                <?php foreach($hasil_rank as $hr) : ?>
                <tr class="">
                    <td><?= $i++ ;?></td>
                    <td class=""><?= $hr['nama_siswa'] ;?></td>
                    <td class=""><?= $hr['nilai_akhir'] ;?></td>
                    <td class="text-center"><?= $j++ ;?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="ml-auto mr-3 mt-4">
                <a class="btn btn-success" href="<?= base_url('Perhitungan/cetak') ;?>"><i class="fas fa-print"></i> Cetak Data</a>
        </div>
    </div>

     <!-- end isi konten -->
    </div>

      </div><!-- /.container-fluid -->
    </div>
    