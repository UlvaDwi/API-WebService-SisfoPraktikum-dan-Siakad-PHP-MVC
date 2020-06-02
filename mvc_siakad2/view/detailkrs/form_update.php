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
    <form method="post" action="index.php?lihat=utama/index_detailkrs&update=true">
<div class="form-group">

  <?php foreach ($data as $value) {?>
      <div class="form-group">
      <label>Id detail</label>
      <input type ="text" id="idDetilKrs" value = "<?php echo $value['idDetilKrs']?>" name = "idDetilKrs" class="form-control" readonly>
    </div>
      <label>ID KRS</label>
      <select class="form-control" name="idKrs"  value="<?= $data->idKrs ?>">
        <?php
        $con = mysqli_connect("localhost","root","","demosiakad");
        $result = mysqli_query($con,"SELECT *FROM krs ORDER BY idKrs");
        while($row = mysqli_fetch_assoc($result)){
          if ($fetch['idKrs']==$row['idKrs']){
            echo "<option value=$row[idKrs] selected>$row[idKrs] : $row[npm]</option>";
          }
          echo "<option value=$row[idKrs]>$row[idKrs] : $row[npm]</option>";
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
          if ($fetch['idMk']==$row['idMk']){
            echo "<option value=$row[idMk] selected>$row[idMk] : $row[namaMk]</option>";
          }
          echo "<option value=$row[idMk]>$row[idMk] : $row[namaMk]</option>";
        } 
        ?>
        </select>
    </div>
    
    <div class="form-group">
      <label>UTS</label>
      <input type ="text" id="uts" value = "<?php echo $value['uts']?>" name = "uts" class="form-control" >
    </div>
    <div class="form-group">
      <label>UAS</label>
      <input type ="text" id="uas" value = "<?php echo $value['uas']?>" name = "uas" class="form-control" >
    </div>
    <div class="form-group">
      <label>Praktikum</label>
      <input type ="text" id="praktikum" value = "<?php echo $value['praktikum']?>" name = "praktikum" class="form-control" readonly >
    </div>
    <div class="form-group">
      <label>Tugas</label>
      <input type ="text" id="tugas" value = "<?php echo $value['tugas']?>" name = "tugas" class="form-control" >
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