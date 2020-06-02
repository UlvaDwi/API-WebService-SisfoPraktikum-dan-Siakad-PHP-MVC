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
    <form method="post" action="index.php?lihat=utama/index_matkul&update=true">
<div class="form-group">

  <?php foreach ($data as $value) {?>
      <label>Id Mk</label>
      <input type="text" name="idMk" value="<?php echo $value['idMk'] ?>" class="form-control" readonly> 
      </div>
      <div class="form-group">
      <label>Nama Mk</label>
      <input type="text" name="namaMk" value="<?php echo $value['namaMk'] ?>" class="form-control" >
      </div>
    <div class="form-group">
    <label>Tahun Ajaran</label>
      <input name="tahunAjaran" type="text" value="<?php echo $value['tahunAjaran'] ?>" class="form-control">
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