
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      <!-- isi konten -->

      <div class="card">
        <div class="card-header">
            Detail Siswa
        </div>
        <div class="card-body">
        <h5 class="card-title"><?= $siswa['nama'] ;?></h5>
                    <p class="card-text"><?= $siswa['alamat'];?></p>
                    <p class="card-text"><?= $siswa['telp'];?></p>
                    
                    <table class="table text-center">
                        <thead>
                            <tr class="">
                                <th scope="col">#</th>
                                <th scope="col">Mulmed</th>
                                <th scope="col">Desain</th>
                                <th scope="col">Hardware</th>
                                <th scope="col">B.Inggris</th>
                                <th scope="col">so</th>
                                <th scope="col">Videografi</th>
                                <th scope="col">Fotografi</th>
                                <th scope="col">Editting</th>
                                <th scope="col">Teamwork</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><p class="card-text"><?= $siswa['multimedia'];?></p></td>
                                <td><p class="card-text"><?= $siswa['desain_grafis'];?></p></td>
                                <td><p class="card-text"><?= $siswa['hardware_software'];?></p></td>
                                <td><p class="card-text"><?= $siswa['inggris'];?></p></td>
                                <td><p class="card-text"><?= $siswa['so'];?></p></td>
                                <td><p class="card-text"><?= $siswa['videografi'];?></p></td>
                                <td><p class="card-text"><?= $siswa['fotografi'];?></p></td>
                                <td><p class="card-text"><?= $siswa['editting'];?></p></td>
                                <td><p class="card-text"><?= $siswa['teamwork'];?></p></td>
                            </tr>
                        </tbody>
                        </table>




                    <a href="<?= base_url() ;?>siswa/index" class="btn btn-primary">kembali</a>
        </div>
    </div>

     <!-- end isi konten -->
    </div>

      </div><!-- /.container-fluid -->
    </div>
    
  </div>