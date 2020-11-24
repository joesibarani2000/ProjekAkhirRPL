      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <form action="<?php echo base_url() . 'homepage/cariArtikel' ?>" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." name="cari">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </div>
          </form>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                  <?php foreach ($allData as $data) : ?>
                    <li>
                      <a href="<?= base_url(); ?>homepage/data_ID/<?= $data['id']; ?>"><?= $data['artikel_judul']; ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Calendar</h5>
          <div class="card-body">
            <div id="calendar">
              <?php $controller->kalender(0); ?>
            </div>
            <button class="btn btn-info btn-sm" style="float: left;" id="bs">Bulan Sebelumnya</button>
            <button class="btn btn-info btn-sm" style="float: right;" id="bb">Bulan Berikutnya</button>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->
  </div>