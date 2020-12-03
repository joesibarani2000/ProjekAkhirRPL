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

    table {
      width: 100%;
    }

    td,
    th {
      text-align: left;
      padding: 8px;
    }

    #t {
      text-align: center;
      width: 10px;
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
        <a href="<?php echo base_url() . 'adminpage/donation' ?>" class="nav-link">Donation List</a>
        </ul>
        <a href="<?php echo base_url() . 'adminpage/logout' ?>" class="nav-link">Logout</a>

      </div>
    </div>
  </nav>
  <!-- Container -->
  <div class="container">
    <br>
    <h5 align="center"> <strong>Daftar Artikel</strong></h5>
    <table class="table-bordered">
      <tr>
        <th>Nama artikel</th>
        <th>Penulis</th>
        <th id="t">
          Tombol Edit
        </th>
        <th id="t">
          Tombol Preview
        </th>
        <th id="t">
          Tombol Delete
        </th>
      </tr>

      <?php

      for ($i = 0; $i < count($titlei); $i++) :

      ?>
        <tr>
          <td><?php echo $titlei[$i]; ?></td>
          <td><?php echo $writeri[$i]; ?></td>
          <td id="t">
            <form action="<?php echo base_url(); ?>adminpage/data_ID/<?= $idi[$i]; ?>">
              <button class="btn btn-light">Edit</button>
            </form>
          </td>
          <td id="t">
            <form action="<?php echo base_url(); ?>adminpage/lihatArtikel/<?= $idi[$i]; ?>">
              <button class="btn btn-light">Preview</button>
            </form>
          </td>
          <td id="t">
            <form action="<?php echo base_url(); ?>adminpage/menghapusArtikel/<?= $idi[$i]; ?>">
              <button class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      <?php endfor; ?>
    </table>
  </div>


  <!-- <form action = "logout">
    <button class="btn btn-danger" id="blog">Logout</button>
</form> -->