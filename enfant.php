
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
              Pour modifier l'utilisateur :<a href="modifier.php">Modofier</a>;
              <br>
              Pour supprimer un utilisateur :<a href="suprime.php">Supprimer</a>;
              <br>
            
                <table>
                <thead>
                <tr>
                    <th>Nom et Prénom</th>
                    <th>CIN de parent</th>
                    <th>E-mail</th>
                    <th>Date de naissance</th>
                    <th>Activite numerique</th>
                   
                    </tr>
                </thead>
                <tbody>
                <?php
                session_start(); 
                $conn = new mysqli ("localhost","root","");
                 $conn->select_db("testdb");
                $e=$conn->query("SELECT nometprenom,cin,email,datedenaissance,activitesnumerique,motsdepasse FROM enfant");
                if(!$e) {
                   echo "Lecture impossible";
                     }
                     else{
                        while ( $row = $e->fetch_array(MYSQLI_ASSOC)) 
                        { echo '<tr>';
                            echo '<td>'.$row["nometprenom"] .'</td>';
                            echo '<td>'.$row["cin"].'</td>';
                            echo '<td>'.$row["email"].'</td>';
                            echo'<td>'.$row["datedenaissance"].'</td>';
                            echo'<td>'.$row["activitesnumerique"].'</td>';
                        echo '</tr>';
                        }
                        }
                        $x=$conn->query("SELECT count(*) AS nbenfant from enfant");
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

