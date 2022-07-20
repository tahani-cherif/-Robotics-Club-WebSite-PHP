<?php 
$conn = new mysqli("localhost","root","");           
$conn->select_db("testdb");
$cin=$_POST['cin'];
$sql=$conn->query("DELETE FROM enfant WHERE cin='".$cin."' ");
    ?>
<html >
	<head>
	</head>
	<body >
    pour la suppression entre le cin de parent :
        <form method="POST" action="suprime.php">
<input type="number" name="cin" >
<input type="submit" value='envoyer'>
</form>
<a href="enfant.php">retour</a>
    </body>

</html>
