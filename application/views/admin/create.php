<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Menu</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>asset/css/small-business.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/blog-post.css" rel="stylesheet">
  <style>
    p {
      text-align: justify;
    }

    ul {
      text-align: justify;
    }

    #imp {
      text-align: center;
    }

    #bpost {
      float: left;
    }

    #blog {
      float: right;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Healthcare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url() . 'adminpage/index' ?>">Home
              <span class="sr-only">(current)</span>
            </a>
            </ul>
        <a href="<?php echo base_url() . 'adminpage/create' ?>" class="nav-link">Create Article</a>
        </ul>
        <a href="<?php echo base_url() . 'adminpage/create' ?>" class="nav-link">Donation List</a>
        </ul>
        <a href="logout" class="nav-link">Logout</a>
      </div>
    </div>
  </nav>
  <!-- Container -->
  <div class="container">
    <br>
    <form class="email-compose-body" action="prosesMenambahArtikel" method="post" enctype="multipart/form-data">
      <h4 class="c-grey-900 mB-20">Write Article</h4>
      <div class="send-header">
        <div class="form-group">
          <input class="form-control" name="judul" placeholder="Title.." required>
        </div>
        <div class="form-group">
          <input class="form-control" name="penulis" placeholder="Writer.." required>
        </div>
        <div class="form-group">
          <textarea name="isi" class="form-control" placeholder="your article goes here.." rows='10'></textarea>
        </div>
      </div>
      <div id="compose-area"></div>
      <div><input type="file" name="gambar"></div>
      <br>
      <div class="text-right mrg-top-30">
        <button class="btn btn-danger" id="bpost">Post</button>
      </div>
    </form>
  </div>
  <!-- <form action = "logout">
    <button class="btn btn-danger" id="blog">Logout</button>
</form> -->