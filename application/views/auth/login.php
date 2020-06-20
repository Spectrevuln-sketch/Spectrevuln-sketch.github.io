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
          <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
            <div class="form-group">
              <label class="small mb-1" for="inputEmailAddress">Email</label>
              <input class="form-control py-4" type="text" id="email" name="email" placeholder="Enter email address">
            </div>
            <div class="form-group">
              <label class="small mb-1" for="inputEmailAddress">Password</label>
              <div class="input-group">
                <input type="password" name="password" id="password" class="form-control py-4" placeholder="Enter Password" data-toggle="password">
                <span class="input-group-btn">
                  <button id="show_password hide_password" class="btn btn-secondary btn-group" type="button">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </button>
                </span>
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a><button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center">
          <div class="small">
            <a href="<?= base_url('auth/registration'); ?>">Need an account? Sign up!</a>
          </div>
          <div class="small">
            <a href="<?= base_url('auth'); ?>">Back To Page</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $("#show_password").click(
    function functionName() {
      //Change the attribute to text
      $("#password").attr("type", "text");
      $(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
    },
    $("#hide_password").click(
      function functionName() {
        //Change the attribute back to password
        $("#password").attr("type", "password");
        $(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
      }
    ));
</script>