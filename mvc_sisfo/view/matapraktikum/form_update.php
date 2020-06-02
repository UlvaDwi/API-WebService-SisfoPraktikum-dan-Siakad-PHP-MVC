<!DOCTYPE html>
<html>
    <head>
    </head>
   <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="jquery/jquery.min.js"></script>
    <script src="jquery/bootstrap.min.js"></script>
    </head>
<body>
  <?php
    $url = 'http://localhost/pemrograman_web2/uas/api_siakad/view_mk.php';
$json = file_get_contents($url);

$krs = json_decode($json,true);
?>
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
    <h2><p align="center">EDIT DATA</p></h2>
    <hr style = "border-top:1px dotted #000;"/>

<div class = "row"> 
<div class = "col-lg-4"></div>
<div class = "row"> 
<div class = "col-lg-4">
    <form method="post" action="index.php?lihat=utama/index_matapraktikum&update=true">
<div class="form-group">

  <?php foreach ($data as $value) {?>
      <label>Id Mata Praktikum</label>
      <input type="text" name="idMataPraktikum" value="<?php echo $value['idMataPraktikum'] ?>" class="form-control" readonly> 
      </div>
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
    
<?php } ?>
    
    <div class = "form-group">
            <button name = "submit" value="EDIT" id="edit" class = "btn btn-success">
              <span class = "glyphicon glyphicon-floppy-disk"></span> 
              EDIT
            </button>
          </div>
          </form>
      </div><!-- .col-lg-6 -->
      <div class = "col-lg-3"></div>
    </div><!-- .row -->

   <!--  <input type="submit" name="submit" value="EDIT" id="edit">
  </tr>
  </table>
</div> -->
  </body>
</html>