<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
</head>
<body>

<?php 
$Notes= ["Rami"=>7.50, "Mohamed"=>19.00,"Amira"=>15.50,"Asma"=>10.00,"Ahmed"=>09.5,"Yassine"=>15.5, "Islem"=>12.00] ;

//Question n°1

foreach ($Notes as $key => $value) { 
    if ($value >= 10) { 
?>
        <?= $key ?><br>
<?php 
    } 
}
?>

<!--Question n°2-->
<?= count($Notes) ?>


<!--Question n°3-->



<!--Question n°4-->
<table border="5">
  <tr>
    <th>Nom</th>
    <th>Moyenne</th>
  </tr>  
<?php 
foreach ($Notes as $key => $value) {
?> 
  <tr>
    <td><?= $key ?> </td>
    <td><?= $value ?> </td>
  </tr>
<?php 
}
?>
</table>
    
</body>
</html>