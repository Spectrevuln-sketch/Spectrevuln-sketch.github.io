</main>
</div>
<div id="layoutAuthentication_footer">
  <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">Copyright &copy; <?= $copyright; ?></div>
        <div>
          <a href="#">Privacy Policy</a>
          &middot;
          <a href="#">Terms &amp; Conditions</a>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/dist/'); ?>js/scripts.js"></script>
<!-- including the jQuery dependency -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- including the plugin -->
<script src="hideShowPassword.min.js"></script>
<script>
  // Example 1:
  // - Password hidden by default
  // - Inner toggle shown
  $('#password-1').hidePassword(true);

  // Example 2:
  // - Password shown by default
  // - Toggle shown on 'focus' of element
  // - Custom toggle class
  $('#password-2').showPassword('focus', {
    toggle: {
      className: 'my-toggle'
    }
  });

  // Example 3:
  // - When checkbox changes, toggle password
  //   visibility based on its 'checked' property
  $('#show-password').change(function() {
    $('#password-3').hideShowPassword($(this).prop('checked'));
  });
</script>

</body>


</html>