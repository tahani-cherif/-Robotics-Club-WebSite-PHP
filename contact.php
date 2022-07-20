<!DOCTYPE html>
<html>
    <head>
        <title>Club Robotique d'enfant </title>
        <link  rel="icon" href="1.png" alt="photo"/>
        <meta name="keywords" content="robot">
        <meta content="robotique">
        <meta content="programme">
        <meta content="programmeur">
        <meta content="Programmation">
        <meta content="enfant">
        <meta content="club">
        <meta content="clubrobotiqued">
        <style type="text/css">
        body{
  background-color: #8ccfe0;
}
p.message{ font-family: showcard gothic ;
    font-size:xxx-large;
    color:green;}
h2{font-family: sigmar one ;
    text-align: center;
}
form{
  width: 25%;
    background-color: aliceblue;
    margin: 60px;
    margin-left: 96px;
    padding: 51px;
    padding-right: 87px;
    padding-left: 109px;
    border-radius: 39px;
    box-shadow: 0 0 20px 0 rgb(0 0 0 / 20%), 0 5px 5px 0 rgb(0 0 0 / 24%);
}
p{
    text-align: center;
  font-size: x-large;
  }
  input[type=email], input[type=text], input[type=text],input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;}
    label{
    font-weight: bold;}
    label{
      float:left;
    }
    input[type=submit],input[type=reset]{
        background-color: #2ab8ce;
        padding: 12px;
    border: none;
    cursor: pointer;
    width: 35%;
    color: white;
    margin: -7px;
    margin-top: 32px;
    margin-left: 19px;
}
input[type=submit]:hover,input[type=reset]:hover {
    background-color: white;
    color:  #8ccfe0;
    border: 1px solid  #8ccfe0;
}
#s1{
  color:red;
  float: left;
}
        </style>
    </head>
    <body bgcolor="ooffff">
    <?php
    $prenomErr=$nameErr=$emailErr=$msgErr="";
    $a=$b=$c=$d="";
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $test=true;
  $a= test_input($_POST['nom']);
  $b= test_input($_POST['prenom']);
  $c = test_input($_POST['email']);
  $d= test_input($_POST['msg']);
  if(empty($a)){
    $nameErr = "* champ obligatoire";
    $test=false;
  }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$a)){
      $nameErr = "Seuls les lettres et les espaces blancs sont autorisés";
      $test=false;
    }
    if(empty($b)){
      $prenomErr = "* champ obligatoire";
      $test=false;
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$b)){
        $prenomErr = "Seuls les lettres et les espaces blancs sont autorisés";
        $test=false;
      }
      if(empty($d)){
        $msgErr = "* champ obligatoire";
        $test=false;
      }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$d)){
          $msgErr = "Seuls les lettres et les espaces blancs sont autorisés";
          $test=false;
        }

  if(empty($c))
  {
    $emailErr = "* champ obligatoire";
    $test=false;
  }
  elseif (!filter_var($c, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Adresse e-mail non valide";
    $test=false;
  }
if($test)
{
  $conn = new mysqli ("localhost","root","");
 $conn->select_db("testdb");
  $conn->query("INSERT INTO  mesage(nom,prenom,email,msg)VALUES ('$a','$b','$c','$d')");
   $conn->close();
   

  }}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
    <?php include("header.php");?>

            <h2>Contacté : </h2>
                <p >
                    &#128222 téléphone :  55 598 556 .  &#128231 E-mail :  clubrobotiqued'enfant@gmail.com .
                     &#127968 Address : cité cheker rawed ariana. <br>
                     &#128343 Horaires de travail : Lundi - vendredi  8h-17h 
                        
                  </p>
           <hr size="10" width="80%" aligne="center" color="aliceblue">
           <h2 classe="a">LAISSEZ NOUS UN MESSAGE &#128071</h2>
           <center>
           <form method='POST' action="<?php echo $_SERVER["PHP_SELF"];?>">
                <label>Nom  </label>  
                <input   class="input" type="text" id="nom" name="nom" placeholder="Entre Nom "><br>
                <span id="s1"><?php echo $nameErr; ?></span><br>
            <label> Prénom</label>
            <input  class="input" type="text" id="prenom" name="prenom" placeholder="Entre Prénom" ><br>
            <span id="s1"><?php echo $prenomErr; ?></span><br>
            <label>E-mail </label>
          <input   class="input" type="email" id="email" name="email" placeholder="Entre adresse E-mail" ><br>
          <span id="s1"><?php echo $emailErr; ?></span><br>
           <label>Message</label>
      <input  class="input"  type="text" id="mesg" name="msg" placeholder="Entre Message" > <br>
      <span id="s1"><?php echo $msgErr; ?></span> <br>
      <input class="botton" type="submit" value="Envoyer" >
      <input class="botton" type="reset" value="Effacer"  >

           </form>
    </center>
        <p class="message">on va répondre a bientôt &#128578 &#128578</p>
        <?php include("footer.php");
     ?>
    </body>
</html>