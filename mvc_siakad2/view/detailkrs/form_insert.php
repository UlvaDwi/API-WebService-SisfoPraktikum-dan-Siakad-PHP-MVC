<!DOCTYPE html>
<html>
<head>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/bootstrap.min.js"></script>
</head>
<body>
  <style type="text/css">
    body{
      background-color:  #f0f5f5;
      /*background: transparent;*/
    }
    form, table{
      background-color: white;
      padding:20px;
      border-radius: 5px;

    }
  </style>

</body>
<?php
$url = 'http://localhost/pemrograman_web2/uas/mvc_sisfo/API/api.php';
$json = file_get_contents($url);

$krs = json_decode($json,true);
?>
<div class = "row"> 
  <div class = "col-lg-12">
    <h2><p align="center">TAMBAH DATA</p></h2>
    <hr style = "border-top:1px dotted #000;"/>

    <div class = "row"> 
      <div class = "col-lg-4"></div>
      <div class = "row"> 
        <div class = "col-lg-4">
          <form method="post" action="index.php?lihat=utama/index_detailkrs&save=true">
            
            <div class="form-group">
              <label>id krs</label>
              <select class="form-control" name="idKrs" value="<?= $data->idKrs ?>">
                <?php
                $con = mysqli_connect("localhost","root","","demosiakad");
                $result = mysqli_query($con,"SELECT *FROM krs ORDER BY idKrs");
                while($row = mysqli_fetch_assoc($result)){

                  echo "<option value=$row[idKrs]>$row[idKrs]  :  $row[npm]</option>";
                } 
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>ID Mata Kuliah</label>
              <select class="form-control" name="idMk" value="<?= $data->idMk?>">
                <?php
                $con = mysqli_connect("localhost","root","","demosiakad");
                $result = mysqli_query($con,"SELECT *FROM mk ORDER BY idMk");
                while($row = mysqli_fetch_assoc($result)){

                  echo "<option value=$row[idMk]>$row[idMk] : $row[namaMk]</option>";
                } 
                ?>
              </select>
            </div>
            
            <div class="form-group">
              <label>UTS</label>
              <input type ="text" id="uts" name = "uts" class="form-control" >
            </div>
            <div class="form-group">
              <label>UAS</label>
              <input type ="text" id="uas" name = "uas" class="form-control" >
            </div>
            <!-- <div class="form-group">
              <label>Praktikum</label>
              <input type ="text" id="praktikum" name = "praktikum" class="form-control" readonly >
            
            </div> -->
            <div class="form-group">
              <label>Tugas</label>
              <input type ="text" id="tugas" name = "tugas" class="form-control" >
            </div>
            
            <div class = "form-group">
              <button name = "simpan" value="SIMPAN" class = "btn btn-success">
                <span class = "glyphicon glyphicon-floppy-disk"></span> 
                Simpan
              </button>
            </div>
          </form>
        </div><!-- .col-lg-6 -->
        <div class = "col-lg-3"></div>
      </div><!-- .row -->
      
      
      

    </body>
    </html>