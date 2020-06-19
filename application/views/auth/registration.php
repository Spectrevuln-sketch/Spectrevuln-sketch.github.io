<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
          <div class="navbar navbar-light bg-light">
            <td class="icon-brand align-middle">
              <img src="<?= base_url('assets/'); ?>img/logo-rms.png" width="70" height="50" class="text-dark text-centre my-2 my-lg-0" alt="Responsive image">
          </div>
          <h3 class="text-center font-weight-normal pr-4">Create Account</h3>
          <div class="card-body">
            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
              <div class="form-group">
                <label class="small mb-1">Name</label>
                <input type="text" class="form-control from-control-user py-4" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label class="small mb-1">Email</label>
                <input type="text" class="form-control from-control-user py-4" id="email" name="email" placeholder="Email address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="small mb-1">Password</label>
                    <input type="password" class="form-control form-control-user text-muted py-4" id="password1" name="password1" placeholder="Enter password"></div>
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="small mb-1">Repeat Password</label>
                    <input type="password" class="form-control form-control-user text-muted py-4" id="password2" name="password2" placeholder="Repeat password"></div>
                  <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group mt-4 mb-0">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Create Account
                </button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <div class="small">
              <a href="<?= base_url('auth/login'); ?>">Have an account? Go to login</a>
            </div>
            <div class="small">
              <a href="<?= base_url('user/dashboard'); ?>">FOR Persentation JUST TEST</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>