  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo base_url() ?>asset/<?php echo $pathi[0]; ?>" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light"><b><strong><?php echo $titlei[0]; ?></strong></b></h1>
        <p><?php echo (str_word_count($contenti[0]) > 20 ? substr($contenti[0], 0, 238) . "[..]" : $contenti[0]); ?></p>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>homepage/data_ID/<?= $idi[0]; ?>">Read more</a>
      </div>
      <!-- /.col-md-4 -->
    </div>

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <h4>Daily protection measures against coronavirus</h4>
        <br>
        <p class="text-white m-0" id="imp"><?php echo $quote; ?></p>
        <br>
        <button class="btn btn-primary" id="why">Why?</button>
        <p class="text-white m-0 text-center" id="mengawhy"><br><?php echo $quotePlus; ?></p>
      </div>
    </div>

    <div class="row">
      <?php

      for ($i = 1; $i < count($titlei); $i++) :

      ?>
        <div class="col-md-4 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title"><?php echo $titlei[$i]; ?></h2>
              <p class="font-weight-light"><?php echo (str_word_count($contenti[$i]) > 60 ? substr($contenti[$i], 0, 200) . "[..]" : $contenti[$i]); ?></p>
            </div>
            <div class="card-footer">
              <a href="<?php echo base_url(); ?>homepage/data_ID/<?= $idi[$i]; ?>" class="btn btn-primary btn-sm">Read more</a>
            </div>
          </div>
        </div>

      <?php endfor; ?>
    </div>
    <!-- /.row -->
    <table>
    <tr>
    <td>
    <div class="container content">
			<form name ="Myform" class="form-content" method="post" action="<?php echo base_url() . 'homepage/tambahDonasi' ?>">
			<h4><strong>Consider Donate To Our Effort</strong></h4>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2">Name</span>
				  </div>
				  <input name="name" type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon2" required>
				</div>
        <div class="input-group">
  <input name ="amount" type="number" min="10" max="1000000000000000000" type="text" class="form-control" placeholder="Amount" aria-label="Amount" aria-describedby="basic-addon2">
  <div class="input-group-append">
  <button type="submit" value="Submit" class="btn btn-outline-success">Donate</button>
  </div>
</div>
      </form>
      
    </div>
      </td>
      <td>
      <img src="asset/img/donate.png" alt="Donate" style="max-height:25%; max-width:25%"> 
      </td>
      </tr>
    <table>
    <br>
  </div>