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
    <form method="post" action="index.php?lihat=utama/index_detilkrp&update=true">
<div class="form-group">

  <?php foreach ($data as $value) {?>
      <div class="form-group">
      <label>Id Detil Krp</label>
      <input type="text" name="idDetilKrp" value="<?php echo $value['idDetilKrp'] ?>" class="form-control" readonly> 
      </div>
      <div class="form-group">
      <label>Id Krp</label>
      <select class="form-control" name="idKrp" value="<?= $data->idKrp ?>">
          <?php
          $con = mysqli_connect("localhost","root","","demosiapraktikum");
          $result = mysqli_query($con,"SELECT *FROM krp ORDER BY idKrp");
          
          while($row = mysqli_fetch_assoc($result)){
             if ($fetch['idKrp']==$row['idKrp']){
            echo "<option value=$row[idKrp]>$row[idKrp] : $row[idKrp]</option>";
          } 
          echo "<option value=$row[idKrp]>$row[idKrp] : $row[idKrp]</option>";
        }
          ?>
          </select>
      </div>
    <div class="form-group">
    <label>Id Mata Praktikum</label>
      <select class="form-control" name="idMataPraktikum" value="<?= $data->idMataPraktikum ?>">
          <?php
          $con = mysqli_connect("localhost","root","","demosiapraktikum");
          $result = mysqli_query($con,"SELECT *FROM matapraktikum ORDER BY idMataPraktikum");
         
          while($row = mysqli_fetch_assoc($result)){
            if ($fetch['idMataPraktikum']==$row['idMataPraktikum']){
           echo "<option value=$row[idMataPraktikum]>$row[namaMataPraktikum]</option>";
          }

            echo "<option value=$row[idMataPraktikum]>$row[namaMataPraktikum]</option>";
          } 
          ?>
          </select>
     </div>
     <div class="form-group">
     <label>Tugas</label>
      <input name="tugas" type="text" value="<?php echo $value['tugas'] ?>" class="form-control">
     </div>
     <div class="form-group">
     <label>Uts</label>
      <input name="uts" type="text" value="<?php echo $value['uts'] ?>" class="form-control">
     </div>
    <div class="form-group">
     <label>Uas</label>
      <input name="uas" type="text" value="<?php echo $value['uas'] ?>" class="form-control">
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