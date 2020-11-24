  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <h5 class="mt-4">Hasil penelusuran : <?= $cari?></h5>
        <?php if(count($artikel) == 0){
                echo '<h5 class="mt-4">Tidak ditemukan hasil</h5>';
              } 
        ?>
        <br>
        <ul class="list-group">
            <?php foreach($artikel as $data) : ?>
            <li class="list-group-item"> 
                <a href="<?= base_url(); ?>homepage/data_ID/<?= $data['id']; ?> ?>"><?=$data['artikel_judul']; ?></a>
                <hr>
                <?=$data['artikel_penulis'];?>
                <div class="float-right"><?=$data['artikel_waktu'];?></div>
            </li>
            <?php endforeach; ?>
        </ul>

      </div>