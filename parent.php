
<html>
    <head>
        <meta charset="utf-8">
      <style>
      table{
        border-style: solid;
      }
      th, td{
  border: 1px solid black;
  padding: 10px;
}

	  </style>
    </head>
	<html>
    <body>
    <h1>Bienvenue</h1>
    Pour modifier l'utilisateur :<a href="modifier2.php">Modofier</a>;
              <br>
              Pour supprimer un utilisateur :<a href="suprim2.php">Supprimer</a>;
              <br>
                <table>
                <thead>
                <tr>
                    <th>Nom et Prénom</th>
                    <th>CIN de parent</th>
                    <th>E-mail</th>
                    <th>telephone</th>
                    <th>Nom Enfant</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                session_start(); 
                $conn = new mysqli ("localhost","root","");
                 $conn->select_db("testdb");
                $e=$conn->query("SELECT nometprenom,cin,email,telephone,nomenfant FROM parent");
                if(!$e) {
                   echo "Lecture impossible";
                     }
                     else{
                        while ( $row = $e->fetch_array(MYSQLI_ASSOC)) 
                        { echo '<tr>';
                            echo '<td>'.$row["nometprenom"] .'</td>';
                            echo '<td>'.$row["cin"].'</td>';
                            echo '<td>'.$row["email"].'</td>';
                            echo'<td>'.$row["telephone"].'</td>';
                            echo'<td>'.$row["nomenfant"].'</td>';
                        echo '</tr>';
                        }
                        }
                        $x=$conn->query("SELECT count(*) AS nbenfant from parent");
                        $x=$x->fetch_assoc();
                        echo "Nombre d'enfant a inscrit est :".$x['nbenfant'];
                $e->free();
                $conn->close();  
				?>
                </tbody>
              </table>
              <a href="conx.php"> Déconnexion</a>
    </body>
</html>

