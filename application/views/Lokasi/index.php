
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      <?php if($this->session->flashdata('flash') ) : ?>
          <div class="row mt-3">
              <div class="col-md-6">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      Data Lokasi <strong> success</strong> <?= $this->session->flashdata('flash') ;?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
          </div>
      <?php endif; ?>

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Lokasi Prakerin</h1>
            <a href="<?= base_url('lokasi/tambah');?>" class="btn btn-primary">Tambah Data Lokasi</a>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row mt-3">
            <div class="col-md-6">
              <ul class="list-group">
                <?php foreach($lokasi as $lk) : ?>
                    <li class="list-group-item"><?= $lk['nama'] ;?>
                    <span class="float-right">
                        <a href="<?= base_url() ;?>lokasi/detail/<?= $lk['id'] ;?>"><i class="fas fa-bars mr-2"></i></a>
                        <!-- <a href="<?= base_url() ;?>lokasi/ubah/<?= $lk['id'];?>"><i class="fas fa-pencil-alt mr-2"></i></a> -->
                        <a href="<?= base_url();?>lokasi/hapus/<?= $lk['id'];?>" class="text-danger" onclick="return confirm('Want to delete data ?');"><i class="fas fa-trash mr-1"></i></a>
                    </span>
                    </li>
                <?php endforeach; ?>
              </ul>
            </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    
  </div>