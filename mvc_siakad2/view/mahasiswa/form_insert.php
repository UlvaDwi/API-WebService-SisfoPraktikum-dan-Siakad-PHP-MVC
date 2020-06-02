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
<form method="post" action="index.php?lihat=utama/index_mahasiswa&save=true">
    <div class="form-group">
    <label>NPM</label>
    <input type="text" name="npm" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="text" name="password" class="form-control" required>
    </div>
    <div>
    <label>Status</label>
    <select type ="text" id="status" name = "status" class="form-control" >
            <?php
            echo "<option>Aktif</option>";
            echo "<option>Tidak Ktif</option>";
          ?>
        </select>
        <br>
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