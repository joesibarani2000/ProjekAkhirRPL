 <!-- Footer -->
 <footer class="py-5 bg-dark">
   <div class="container">
     <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
   </div>
   <!-- /.container -->
 </footer>

 <!-- Bootstrap core JavaScript -->
 <script src="<?php echo base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <script>
   $("#mengawhy").hide();
   $("#why").click(function() {
     $("#mengawhy").show();
   });
 </script>

 <script type='text/javascript'>
   $('#button1').click(function() {
     $.ajax({
       type: "POST",
       url: "abc.php",
       data: "",
       success: function(msg) {
         alert(msg);
       },
       error: function(XMLHttpRequest, textStatus, errorThrown) {
         alert("Some error occured");
       }
     });
   });
 </script>

 </body>

 </html>