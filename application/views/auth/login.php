<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
          <div class="navbar navbar-light bg-light">
            <td class="icon-brand align-middle">
              <img src="<?= base_url('assets/'); ?>img/logo-rms.png" width="70" height="50" class="text-dark text-centre my-2 my-lg-0" alt="Responsive image">
            </td>
          </div>
          <h2 class="text-center font-weight-normal pr-4">Login</h2>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
          <form class="user" method="post" action="<?= base_url('auth'); ?>">
            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>
              <input class="form-control py-4" type="text" id="email" name="email" placeholder="Enter email address">
              <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4" type="text" id="password" name="password" placeholder="Enter password">
                <div class="form-group">
                  <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a><a class="btn btn-primary" href="index.html">Login</a></div>
          </form>
        </div>
        <div class="card-footer text-center">
          <div class="small">
            <a href="<?= base_url('auth/registration'); ?>">Need an account? Sign up!</a>
          </div>
          <div class="small">
            <a href="<?= base_url('/'); ?>">Back To Page</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>