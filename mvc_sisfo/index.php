<!DOCTYPE html>
<html>

  <head>
    <title>SISFO PRAKTIKUM</title>
    <link rel="shortcut icon" type="image/icon" href="kanjuruhan.png">
    <!-- Panggil Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="jquery/jquery.min.js"></script>
    <script src="jquery/bootstrap.min.js"></script>
    <style type="text/css">
      body{
        /*background-color: #FF8C00;*/
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <!-- Skrip dibawah ini akan aktif ketika posisi mobile -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="index.php">SISFO PRAKTIKUM</a>
        </div>
        <!-- Daftar menu yang diinginkan-->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li>
              <a href="index.php">
                <span class="glyphicon glyphicon-home"></span> Beranda
              </a>
            </li>
            <li>
              <a href="index.php?lihat=utama/index_matapraktikum">
              <span class="glyphicon glyphicon-book"></span> &nbsp; Mata Praktikum</a>
            </li>

            <li>
              <a href="index.php?lihat=utama/index_krp">
              <span class="glyphicon glyphicon-check"></span> &nbsp; KRP</a>
            </li>

            <li>
              <a href="index.php?lihat=utama/index_detilkrp">
              <span class="glyphicon glyphicon-file"></span> &nbsp; Detil KRP</a>
            </li>

          </ul>
        </div><!-- #navbar -->
      </div><!-- .container -->
    </nav><!-- .navbar -->


    <div class="container">

      <?php
        /*Skrip dibawah berfungsi memanggil perintah sesuai nama file*/
        if(!empty($_GET['lihat'])){
          include($_GET['lihat'].'.php');
        }

        else{
          include 'beranda.php';
        }
      ?>

    </div> <!-- .container -->


    <!-- Panggil JavaScript -->
    <!-- <script src="jquery/jquery.min.js"></script> -->
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script>     -->
  </body>

</html>
