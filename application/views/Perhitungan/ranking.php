<!DOCTYPE html>
<html>
<head>
	<title><?= $title ;?></title>
</head>
<body>

<div class="container">
	<center>
		<h2><a href="<?= base_url('dashbord') ;?>"><img src="<?= base_url('assets/img/logo-base.png') ;?>" alt=""></a></h2>
		<h4>Laporan data Siswa PKL SMK Muhammadiyah 3 Wates</h4>
	</center>

	<br/>


    <!-- content -->
    <label for="">Lokasi Prakerin : <?= $lokasi['nama_lokasi'] ;?></label>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Skor Nilai</th>
      <th scope="col">Ranking</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; $j = 1; ?>
  <?php foreach($hasil_rank as $hr) : ?>
    <tr>
      <th><?= $i++ ;?></th>
      <th><?= $hr['nama_siswa'] ;?></th>
      <th><?= $hr['nilai_akhir'] ;?></th>
      <th><?= $j++ ;?></th>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


 <footer class="text-center mb-auto">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="https:///www.smkmuh3wates.sch.id/">SMK Muhammadiyah 3 Wates</a>.</strong> All rights reserved.
  </footer>
    <!-- end Content -->
    </div>

	<script>
		window.print();
	</script>
	
</body>
</html>