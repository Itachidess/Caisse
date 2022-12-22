<?php
   include("config.php");
   session_start();
   if ($_SESSION['id'] == null)
   {
    header("location:../index.php");
   }
   $sql  ="Select * from  produit";
   $result = mysqli_query($conn,$sql);
?>

<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="css/boutique.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="w3images/w3.css">
    <link rel="stylesheet" href="w3images/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="w3images/w3.css">
    <link rel="stylesheet" href="w3images/font-awesome.min.css">
    <script src="js/boutique.js"></script>
</head>
<body>

         


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-white w3-left-align w3-large w3-card">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-gray w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>eboutique</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-gray" title="Ajout User"><i class="fa fa-address-card-o"></i></a>
  
  
    <a href="index.php" <?php session_destroy(); ?> data-toggle="modal" data-target="#myModal" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Info Compte">
    
    <i class="fa fa-power-off" class="w3-circle" style="height:23px;width:23px" alt="Deconection" ></i>
  </a> 
 </div>
</div>


<div class="contain">


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div class="left">
      <?php include('left.php') ?>
      
</div>



<div class="right">
<?php include('right.php') ?>

</div>




</div>




</div>
    
</body>
</html>