  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?= $artikel['artikel_judul'] ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?= $artikel['artikel_penulis'] ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><?= $artikel['artikel_waktu'] ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo base_url() ?>asset/<?= $artikel['path_gambar'] ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead" id="cont"><?= $artikel['artikel_isi'] ?></p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="post" action="<?php echo base_url() . 'adminpage/tambahKomentar' ?>">
              <div class="form-group">
                <input type="hidden" name="idArtikel" value="<?= $artikel['id'] ?>">
                <textarea class="form-control" rows="3" name="komen" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->

        <?php foreach ($komen as $data) : ?>
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?= $data['nama'] ?></h5>
              <div class="float-right">
              <a href="<?php echo base_url(); ?>adminpage/hapusKomentar/<?= $data['idArtikel'] ?>/<?= $data['idKomentar']; ?>">Hapus</a>
            </div>
              <?= $data['isi'] ?>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
          </div>
    <!-- /.row -->
  </div>