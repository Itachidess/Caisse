<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/access.css">
    <title>access</title>

</head>
<body>
<?php 
      $id = @$_GET['id'];
      echo $id;
    ?> 

<script>
    function ajouteChiffre(form,val)
{
    form.texte.value += val;
	
}
</script>

  
<div class="block">
    <form>
    <div class="saisi_mdp">
        <input type="text"  maxlength="4" name="calculatrice" >
    </div>
    <div class="grid-container">
        <input value="7" onclick="ajouteChiffre(this.form,7)" type="button" class="mainbutton" />
        <button class="grid-item" onclick="form.display.value +='7'">2</button>
        <button class="grid-item">3</button>
        <button class="grid-item">4</button>
        <button class="grid-item">5</button>
        <button class="grid-item">6</button>
        <button class="grid-item">7</button>
        <button class="grid-item">8</button>
        <button class="grid-item">9</button>
    </div>
    
    <div class="">
        <button>truck</button>
        <button>truck</button>
        <button>truck</button>
    </div>
    </form>
</div>
    
</body>
</html>