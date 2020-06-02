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
  <div class = "row"> 
  <div class = "col-lg-12">
<h2><p align="center">TAMBAH DATA</p></h2>
<hr style = "border-top:1px dotted #000;"/>

<div class = "row"> 
<div class = "col-lg-4"></div>
<div class = "row"> 
<div class = "col-lg-4">
<form method="post" action="index.php?lihat=utama/index_detilkrp&save=true">
    <!-- <div class="form-group">
    <label>Id Detil Krp</label>
    <input type="text" name="idDetilKrp" class="form-control" required>
    </div> -->
    <div class="form-group">
    <label>ID Krp</label>
    <select class="form-control" name="idKrp" value="<?= $data->idKrp ?>">
          <?php
          $con = mysqli_connect("localhost","root","","demosiapraktikum");
          $result = mysqli_query($con,"SELECT *FROM krp ORDER BY idKrp");
          echo "<option>--pilih ID KRP--</option>";
          while($row = mysqli_fetch_assoc($result)){

            echo "<option value=$row[idKrp]>$row[idKrp] : $row[npm]</option>";
          } 
          ?>
          </select>
    </div>
    <div class="form-group">
    <label>ID Mata Praktikum</label>
   <select class="form-control" name="idMataPraktikum" value="<?= $data->idMataPraktikum ?>">
          <?php
          $con = mysqli_connect("localhost","root","","demosiapraktikum");
          $result = mysqli_query($con,"SELECT *FROM matapraktikum ORDER BY idMataPraktikum");
          echo "<option>--pilih Mata Praktikum--</option>";
          while($row = mysqli_fetch_assoc($result)){

            echo "<option value=$row[idMataPraktikum]>$row[namaMataPraktikum]</option>";
          } 
          ?>
          </select>
    </div>
    <div class="form-group">
    <label>Tugas</label>
    <input type="text" name="tugas" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Uts</label>
    <input type="text" name="uts" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Uas</label>
    <input type="text" name="uas" class="form-control" required>
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