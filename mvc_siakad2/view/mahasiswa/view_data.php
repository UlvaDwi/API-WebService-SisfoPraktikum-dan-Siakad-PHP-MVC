<!DOCTYPE html>
<html>
<head>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="jquery/jquery.min.js"></script>
    <script src="jquery/bootstrap.min.js"></script>
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
</head>

<div class = "row"> 
    <div class = "col-lg-12">
        <h3 class = "text-primary">MAHASISWA</h3>
        <hr style = "border-top:1px dotted #000;"/>

    
                            <a href='index.php?lihat=utama/index_mahasiswa&insert=add'class="btn btn-primary btn-sm">
                                <span class = "glyphicon glyphicon-edit"></span> tambah
                            </a> 
   <!--  <th colspan="5" align="left"><button><a href='index.php?insert=add'>TAMBAH DATA</a></button></th> -->
   <table class="table table-hover table-bordered" style="margin-top: 10px">
  <tr class="info" >
    
    <td>NO</td>
    <td>NIM</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Password</td>
    <td>Status</td>
    <td>Aksi</td>
</tr>
<tbody>
    <?php $i=1?>
            <?php foreach ($data as $value){ ?>
                <tr>
                <td><?php echo $i++ ?></td>
                    <td><?php echo $value['npm'] ?></td>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['alamat'] ?></td>
                    <td><?php echo $value['password'] ?></td>
                    <td><?php echo $value['status'] ?></td>
                    <!-- <td p align="center" bgcolor="#FFFFFF">
                        <a href="index.php?nim=<?php echo $value['npm']?>&get=true">Edit</a>
                       <a href="index.php?nim=<?php echo $value['npm']?>&delete=true">Delete</a>
                    </td> -->
                    <td style="text-align: center;">
                            <a href="index.php?lihat=utama/index_mahasiswa&npm=<?php echo $value['npm']?>&get=true" class="btn btn-primary btn-sm">
                                <span class = "glyphicon glyphicon-edit"></span> Edit
                            </a> 
                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" a href="index.php?lihat=utama/index_mahasiswa&npm=<?php echo $value['npm']?>&delete=true" class="btn btn-danger btn-sm">
                                <span class = "glyphicon glyphicon-trash"></span> Hapus
                            </a>
                        </td>

                </tr>
 

<?php } ?>
</tbody>
</table>
</body>
</html>