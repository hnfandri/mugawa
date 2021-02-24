
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      <?php if($this->session->flashdata('flash') ) : ?>
          <div class="row mt-3">
              <div class="col-md-6">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      Data siswa <strong> success</strong> <?= $this->session->flashdata('flash') ;?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
          </div>
      <?php endif; ?>

      <div class="row">
          <div class="col-md-6">
          <h1 class="h3 mb-4 text-gray-800"><?= $title ;?></h1>
              <a href="<?= base_url('siswa/tambah');?>" class="btn btn-primary">Tambah Data Siswa</a>
          </div>
      </div>

      <div class="row mt-3">
        <table class="table"> 
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
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
                <?php foreach($siswa as $sis) : ?>
                <tr class="text-center">
                    <th><?= $i++ ;?></th>
                    <th class="text-left"><?= $sis['nama'] ;?></th>
                    <th><?= $sis['multimedia'] ;?></th>
                    <th><?= $sis['desain_grafis'] ;?></th>
                    <th><?= $sis['hardware_software'] ;?></th>
                    <th><?= $sis['inggris'] ;?></th>
                    <th><?= $sis['so'] ;?></th>
                    <th><?= $sis['videografi'] ;?></th>
                    <th><?= $sis['fotografi'] ;?></th>
                    <th><?= $sis['editting'] ;?></th>
                    <th><?= $sis['teamwork'] ;?></th>

                    <th>
                        
                        <a href="<?= base_url() ;?>siswa/detail/<?= $sis['id'] ;?>"><i class="fas fa-bars mr-2"></i></a>
                        <!-- <a href="<?= base_url() ;?>siswa/ubah/<?= $sis['id'];?>"><i class="fas fa-pencil-alt mr-2"></i></a> -->
                        <a href="<?= base_url();?>siswa/hapus/<?= $sis['id'];?>" class="text-danger" onclick="return confirm('Want to delete data ?');">
                            <i class="fas fa-trash mr-1">
                        </i></a>

                    </th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

      </div><!-- /.container-fluid -->
    </div>
    
  </div>