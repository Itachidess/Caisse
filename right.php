<div class="container">

   <h3 class="title"> organic products </h3>

   <div class="products-container">

   <?php  
   while ($row = mysqli_fetch_assoc($result)) {?>



      <div class="product "  id="p-<?php echo $row['id'];?>" data-name="p-<?php echo $row['id'];?>" onclick="<?php  $ids = $row['id'];  ?> ajoutProduitTable(<?php echo $row['id'] ;?>)">
         <img src="images/<?php echo $row['image']; ?>" alt="">
         <h3 id="produit-<?php echo $row['id'];?>"><?php echo $row['nom'];?></h3>
         <p class="price-<?php echo $row['id'];?>"><?php echo $row['prix'] ?> DHS</p>
      </div>

      <?php };?>

   </div>

</div>