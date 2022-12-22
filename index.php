<?php
   include("config.php");
   $sql  ="Select * from  user";
   $result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
    <!-- Coding by CodingLab | www.codinglabweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/user.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Page connection</title>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="w3images/w3.css">
        <link rel="stylesheet" href="w3images/font-awesome.min.css">
        
                                        
    </head>
    <body>
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-white w3-left-align w3-large w3-card">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-gray w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>eboutique</a>
  <a  class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-gray" title="Ajout User" data-toggle="modal" data-target="#myModal"><i class="fa fa-address-card-o"></i></a>
  
  
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Info Compte">
    <img src="w3images/avatar1.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large">eStock</a>
  <a href="add_user.php" class="w3-bar-item w3-button w3-padding-large">Ajout User</a>
 </div>
<br><br>
<center>
<br><br>
<div class="w3-container w3-card"  style="width:95%;height:570px;"><br>

    
        <form action="page_code.php" method="GET">
          <p id ="connecter" style="color: red; font-weight: bold; text-transform: uppercase; display: none; justify-content: center;">Veuillez vous connecter</p>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                <script>
                    function getId(id)
                    {
                       //alert("id "+id);

                       var liens = "page_code.php?id="+id;
                       window.location=""+liens+"";
                    }


                </script>
                   
                <!--  Partie a boucler.  --> 
                <?php 
                   while ($row = mysqli_fetch_assoc($result)) {?>
                    
                    
              
                
                <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay" onclick="getId(<?php echo $row['id']; ?>)"></span>

                            <div class="card-image">
                            <?php if($row['Sexe'] =="M"){ ?>
                                <img src="images/avatar_homme2.jpg" alt="" class="card-img">
                                <?php  }
                                else {?>  <img src="images/avatar_femme.png" alt="" class="card-img">

                                 <?php ;} ?>
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"><?php echo $row["nom"]; ?>
                            <?php echo $row["prenom"]; ?>
                        </h2>
                       <!--  <?php  $_SESSION['id']  = $row['id']; ?> -->

                            <button type="submit" class="button">View More</button>
                            <p id="my_id"  value=""><?php echo $row["id"]; ?></p>
            
                        </div>
                    </div><?php }?> 

                <!--  ---------------------- -->
                  
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        </form>


        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajout User</h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <fieldset> 
                <table class="modal_table">
                    <tr>
                        <th >Nom :</th>
                        <td><input type="text" name="nom"></td> 
                    </tr> 

                    <tr>
                        <th>Prenom :</th>
                        <td><input type="text" name="prenom"></td>
                    </tr>

                    <tr>
                        <th align="left">Password :</th>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <br>
                      <tr>             
                    <td ><input type="radio" name="radio1" value="H">Homme</td>
                    <td align="right"><input type="radio" name="radio1" value="F">Femme</td>
                  
                    </tr> 

                    
                   <br>
                

                </table>
                <div class="modal_bouton">
                <button type="button" class="button" data-dismiss="modal" style="background-color: red;" >annuler</button>
                <input type="submit" value="submit" class="button">

                </div>
            </fieldset>
          </form>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>

<?php 

if(isset($_POST['submit']))
{   
  
    // Prendre les informations
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['radio1'];
    $password = md5($_POST['password']);
    //Requete d'insertion dans la base de donnée
   $sql11 = "INSERT INTO `user`(`nom`, `prenom`, `password` ,`sexe`) VALUES 
   ('$nom','$prenom','$password' , '$sexe')";

   
   

    $res = mysqli_query($conn , $sql11) ;
    if ($res == TRUE)
    {
        $_SESSION['add']  = 'Admin added succesfully';
        header('Location: ../index.php');
    }

    else

    {
        $_SESSION['add']  = 'Fail , Retry later';
        header('Location: ../admin/add-admin.php');
    }
    

}

?>

        
    </body>

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</html>