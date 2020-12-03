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
        <a href="<?php echo base_url() . 'adminpage/create' ?>" class="nav-link">Donation List</a>
        </ul>
        <a href="<?php echo base_url() . 'adminpage/logout' ?>" class="nav-link">Logout</a>

      </div>
    </div>
  </nav>
  <!-- Container -->
  <div class="container">
    <br>
    <h5 align="center"> <strong>Donator</strong></h5>
    <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Name</th>
                      <th>Amount</th>                                       
                  </tr>
              </thead>   
              <tbody>
                  <?php
                  for ($i = 0; $i < count($name); $i++) :?>
              <tr>
                    <td><?php echo $name[$i];?></td>
                    <td><?php echo $amount[$i];?></td>
                    </td>                                       
                </tr>
                <?php endfor; ?>                           
              </tbody>
            </table>
            <tr>
            <td id="t">
            <form action="<?php echo base_url() . 'adminpage/cetak' ?>">
              <button class="btn btn-danger">Cetak</button>
            </form>
          </td>
            </tr>
  </div>


  <!-- <form action = "logout">
    <button class="btn btn-danger" id="blog">Logout</button>
</form> -->