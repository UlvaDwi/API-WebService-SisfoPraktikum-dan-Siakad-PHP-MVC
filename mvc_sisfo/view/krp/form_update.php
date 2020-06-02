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
  $url = 'http://localhost/pemrograman_web2/uas/api_siakad/view_krs.php';
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
          <form method="post" action="index.php?lihat=utama/index_krp&update=true">
            <div class="form-group">

              <?php foreach ($data as $value) {?>
                <label>Id Krp</label>
                <input type="text" name="idKrp" value="<?php echo $value['idKrp'] ?>" class="form-control" readonly="readonly"> 
              </div>
              <div class="form-group">
                <label>NPM</label>
                <select type ="text" id="npm" name = "npm" class="form-control" required>
                  <?php
                  echo "<option>--pilih NPM --</option>";
                  $no=0;
                  foreach ($krs['kirim'] as $kr) {
                    $no++;
                    foreach ($kr as $key => $value) {
                      $$key=$value; 
                    }


                    ?>

                    <option><?php echo $npm; }?></option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <select type ="text" id="tahunAjaran" name = "tahunAjaran" class="form-control" required>
                    <?php
                    echo "<option>--pilih Tahun Ajaran --</option>";
                    $no=0;
                    foreach ($krs['kirim'] as $kr) {
                      $no++;
                      foreach ($kr as $key => $value) {
                        $$key=$value; 
                      }


                      ?>

                      <option><?php echo $tahunAjaran; }?></option>
                    </select>
                  </div>
                  <div>
                  <label>Tanggal</label>
                  <input name="tanggal" type="date" value="<?php echo $value['tanggal'] ?>" class="form-control">
                </div>

              <?php } ?>
<br>

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