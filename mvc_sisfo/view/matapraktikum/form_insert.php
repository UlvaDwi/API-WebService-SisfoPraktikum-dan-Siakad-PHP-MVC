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
    $url = 'http://localhost/pemrograman_web2/uas/api_siakad/view_mk.php';
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
<form method="post" action="index.php?lihat=utama/index_matapraktikum&save=true">
    <!-- <div class="form-group">
    <label>ID Mata Praktikum</label>
    <input type="text" name="idMataPraktikum" class="form-control" required>
    </div> -->
    <div class="form-group">
            <label>Mata Praktikum</label>
            <select type ="text" id="namaMataPraktikum" name = "namaMataPraktikum" class="form-control" required>
            <?php
            echo "<option>--pilih Mata Praktikum --</option>";
              $no=0;
              foreach ($krs['list_info'] as $kr) {
                $no++;
                foreach ($kr as $key => $value) {
                  $$key=$value; 
                }
                
              ?>

              <option><?php echo $namaMk; }?></option>
            </select>
          </div>
    <div class="form-group">
            <label>Tahun Ajaran</label>
            <select type ="text" id="tahunAjaran" name = "tahunAjaran" class="form-control" required>
            <?php
            echo "<option>--pilih tahun ajaran --</option>";
              $no=0;
              foreach ($krs['list_info'] as $kr) {
                $no++;
                foreach ($kr as $key => $value) {
                  $$key=$value; 
                }
                
              ?>

              <option><?php echo $tahunAjaran; }?></option>
            </select>
          </div>
    <div>
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