
<div class="login-box">
  <div class="login-logo">
    <img width="300px" src="<?= base_url('assets/img/logo-base.png') ;?>" alt=""></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>

    <?= $this->session->flashdata('message') ;?>

      <form action="<?= base_url('auth') ;?>" method="post">
        <div class="form-group">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email') ;?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('email') ;?></small>
      </div>
      
      <div class="form-group">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('password') ;?></small>
        </div>


        <div class="row">
          <!-- /.col -->
          <div class="col-12 ">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <small>
      <p class="mb-0 mt-3 text-center">
        <a href="<?= base_url() ;?>auth/registration" class="text-center">Buat Akun</a>
      </p>
      </small>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
