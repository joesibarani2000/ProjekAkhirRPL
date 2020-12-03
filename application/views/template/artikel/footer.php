<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">INI Copyright &copy; SITUS</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url() ?>asset/vendor/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  $("#bs").on("click", function() {
    $.ajax({
      url: "<?= base_url(); ?>homepage/kalender/<?= -1; ?>",
      success: function(result) {
        $("#calendar").html(result);
      }
    });
  });
  $("#bb").on("click", function() {
    $.ajax({
      url: "<?= base_url(); ?>homepage/kalender/<?= 1; ?>",
      success: function(result) {
        $("#calendar").html(result);
      }
    });
  });
  $("#btnLogin").on("click", function(){
    $("#login_signup").toggle();
    $("#Login").toggle();
  });
  $("#btnSignup").on("click", function(){
    $("#login_signup").toggle();
    $("#Signup").toggle();
  });
</script>

</body>

</html>