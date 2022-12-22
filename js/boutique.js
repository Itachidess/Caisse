function getProduct(id)
{
   var p = document.getElementById('p-'+id);
   /*
   produit.querySelector("h3").style.backgroundColor = "red";
   produit.querySelector("p").style.backgroundColor = "green";
   */
  var nom = p.querySelector("h3").innerHTML;
  var prix = p.querySelector("p").innerHTML;
  var produit = [id , nom , prix , 1]
  return produit

}



function ajoutProduitTable(id) {
 var produit = getProduct(id);
 var table = document.getElementById("myTable");
 
 var taille= table.rows.length;
 var bool = 0
prix = produit[2].split(" ")
console.log(prix[0])
 //Ajout d'un ancien produit en rajoutant la quantité
 for (i =1 ; i<taille ; i++)
 {
  
       if (id ==table.rows[i].cells[0].innerHTML )
       {
        bool = 1;
        quantite =  parseInt(table.rows[i].cells[3].innerHTML)+1;
        total = parseInt(table.rows[i].cells[4].innerHTML)
        table.rows[i].cells[3].innerHTML = quantite;
        table.rows[i].cells[4].innerHTML = quantite*prix[0]+" DHS";
        
       }
 }
 // Ajout d'un nouveau Produit 
 if (bool == 0)
 {
   
 var row = table.insertRow();
 var col_id = row.insertCell(0);
 var col_nom = row.insertCell(1);
 var col_prix = row.insertCell(2);
 var col_quantité = row.insertCell(3);
 var col_total = row.insertCell(4);
 var col_ajout_quantite = row.insertCell(5);
 col_id.innerHTML = produit[0];
 col_nom.innerHTML = produit[1];
col_prix.innerHTML = produit[2];
quantite = col_quantité.innerHTML = produit[3];
 col_total.innerHTML = quantite* prix[0]+" DHS";
col_ajout_quantite.innerHTML = "<div class='ecarter'> <button class='btn btn-danger' onclick='retirer("+col_id.innerHTML+")'>-</button> <button class='btn btn-primary green' onclick='ajouter("+col_id.innerHTML+")'>+</button></div>";
}

 calcul_total()

}

function retirer(id)
{
  var table = document.getElementById("myTable");
 
  var taille= table.rows.length;
  console.log(id);
  for (i =1 ; i<taille ; i++)
  {
   
        if (id ==table.rows[i].cells[0].innerHTML && table.rows[i].cells[3].innerHTML>0 )
        { 
          
         bool = 1;
         quantite =  parseInt(table.rows[i].cells[3].innerHTML)-1;
         total = parseInt(table.rows[i].cells[4].innerHTML)
         table.rows[i].cells[3].innerHTML = quantite;
         table.rows[i].cells[4].innerHTML = quantite*prix[0]+" DHS";
         
        }
  }
  calcul_total()
}


function ajouter(id)
{
  var table = document.getElementById("myTable");
 
  var taille= table.rows.length;
  console.log(id);
  for (i =1 ; i<taille ; i++)
  {
   
        if (id ==table.rows[i].cells[0].innerHTML && table.rows[i].cells[3].innerHTML>0 )
        { 
          
         bool = 1;
         quantite =  parseInt(table.rows[i].cells[3].innerHTML)+1;
         total = parseInt(table.rows[i].cells[4].innerHTML)
         table.rows[i].cells[3].innerHTML = quantite;
         table.rows[i].cells[4].innerHTML = quantite*prix[0]+" DHS";
         
        }
  }
  calcul_total()
}

function calcul_total()
{
     total = document.getElementById('total_final');
  
     var table = document.getElementById("myTable");
     var taille= table.rows.length;
     var somme = 0;

     for (i =1 ; i<taille ; i++)
     {
      
       valeur = parseInt(table.rows[i].cells[4].innerHTML)
       somme += valeur
         
     }

     total.innerHTML = somme +" DHS"

     

}

function deleteRow()
{
  var table = document.getElementById("myTable");
  var taille= table.rows.length;

  if (taille >1 ){
    console.log("ici")
    document.getElementById('myTable').deleteRow(-1);

  }

  
      
}


function deleteAllRow()
{
  var table = document.getElementById("myTable");
  var taille= table.rows.length;
  for (i =taille ; i>1 ; i--)
  {
    
   
      
      document.getElementById('myTable').deleteRow(-1)

  }

  calcul_total()
  
      
}

function getAllProduct()
{
  var liste= [];
  var table = document.getElementById("myTable");
  var taille= table.rows.length;
  for (i =1 ;i<taille ; i++)
  {
    for (j=1;j<5;j++)
    {
      liste[i] =(table.rows[i].cells[j].innerHTML);
    }
  }
  console.log(liste);
}



