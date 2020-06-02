<!DOCTYPE html>
<html>
    <head>
    </head>
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
    <h2><p align="center">EDIT DATA</p></h2>
    <hr style = "border-top:1px dotted #000;"/>

<div class = "row"> 
<div class = "col-lg-4"></div>
<div class = "row"> 
<div class = "col-lg-4">
    <form method="post" action="index.php?lihat=utama/index_mahasiswa&update=true">
<div class="form-group">

  <?php foreach ($data as $value) {?>
      <label>NPM</label>
      <input type="text" name="npm" value="<?php echo $value['npm'] ?>" class="form-control" readonly="readonly"> 
      </div>
      <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" value="<?php echo $value['nama'] ?>" class="form-control" >
      </div>
    <div class="form-group">
    <label>Alamat</label>
      <input name="alamat" type="text" value="<?php echo $value['alamat'] ?>" class="form-control">
     </div>
    <div class="form-group">
    <label>Password</label>
    <input name="password" type="text" value="<?php echo $value['password'] ?>" class="form-control">
    </div>
    <div class="form-group">
    <label>Status</label>
    <select type ="text" id="status" value="<?php echo $fetch['status']?>" name = "status" class="form-control" >
      <?php
        echo "<option>Aktif</option>";
        echo "<option>Tidak Ktif</option>";
      ?>
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