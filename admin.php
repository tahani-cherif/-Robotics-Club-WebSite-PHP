<html>
    <head>
        <meta charset="utf-8">
      <style>
	  </style>
    </head>
	<html>
    <body>
    <h1>Bienvenue</h1>
              Pour modifier l'utilisateur(enfant) :<a href="modifier.php">Modofier</a>;<br>
              Pour modifier l'utilisateur(parent) :<a href="modifier2.php">Modofier</a>;
              <br>
              Pour supprimer un utilisateur(enfant) :<a href="suprime.php">Supprimer</a>;<br>
              Pour supprimer un utilisateur(parent) :<a href="suprim2.php">Supprimer</a>;<br>
              Pour Ajouter un utilisateur :<a href="ajouter.php">Ajouter</a>;<br>
              <p>les coordonnée de l'admin est: </p>
              
            <?php
                session_start(); 
                $conn = new mysqli ("localhost","root","");
        $conn->select_db("testdb");
                    $e=$conn->query("SELECT * FROM admin1");
                if(!$e) {
                   echo "Lecture impossible";
                     }
                     else{
                        while ( $row = $e->fetch_array(MYSQLI_ASSOC)) {
                            echo "<hr/>";
                       foreach($row as $donn => $value)
                        { 
                            echo $donn." : ".$value." | "; 
                           }echo "<hr/>";
                        }
                    }

                $conn->close();           
				?> 
				</div> 
                <a href="conx.php"> Déconnexion</a>
				
    </body>
</html>

