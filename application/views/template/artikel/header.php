<?php
if (session_status() != 2) {
  session_start();
}
$_SESSION['i'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $judul ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>asset/css/blog-post.css" rel="stylesheet">
  <style>
    p {
      text-align: justify;
    }

    ul {
      text-align: justify;
    }
    #Login, #Signup{
      display: none;
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
            <a class="nav-link" href="<?php echo base_url() ?>">Home
              <span class="sr-only">(current)</span>
            </a>
        </ul>
      </div>
    </div>
  </nav>