<?php 
$conn = new mysqli("localhost","root","");           
$conn->select_db("testdb");
$cin=$_POST['cin'];
$sql=$conn->query("DELETE FROM parent WHERE cin='".$cin."' ");
    ?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        
	</head>
	<body >
    pour la suppression  entre le cin de parent :
        <form method="POST" action="suprim2.php">
<input type="number" name="cin" >
<input type="submit" value='envoyer'>
</form>
<a href="parent.php">retour</a>
    </body>

</html>
