<?php
     $a=$b=$c=$d=$f=$x=$y="";
     $nameErr=$emailErr=$cinErr=$dateErr=$mpErr=$testErr=$mp2Err="";
     $test=false;
 if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $test=true;
  $a= test_input($_POST['nom']);
  $b= test_input($_POST['cin']);
  $c = test_input($_POST['email']);
  $d= test_input($_POST['date']);
  $f= test_input($_POST['mp']);
  $x= test_input($_POST['test']);
  $y=test_input($_POST['mp2']);
  if(empty($a)){
    $nameErr = "* champ obligatoire";
    $test=false;
  }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$a)){
      $nameErr = "Seuls les lettres et les espaces blancs sont autorisés";
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
  if(empty($b))
  {
    $cinErr = "* champ obligatoire";
    $test=false;
  }

  if(empty($d))
  {
    $dateErr = "* champ obligatoire";
    $test=false;
  }
  if(empty($f))
  {
    $mpErr = "* champ obligatoire";
    $test=false;
  }
  if(empty($x))
  {
    $testErr = "* champ obligatoire";
    $test=false;
  }
  if(empty($y))
  {
    $mp2Err = "* champ obligatoire";
    $test=false;
  }
  elseif(strcmp($x,$y)>0||strcmp($x,$y)>0)
  {
    $mp2Err = "* verifier le mots de passe";
    $test=false;
  }
if($test)
{
  $conn = new mysqli ("localhost","root","");
 $conn->select_db("testdb");
  $conn->query("INSERT INTO  enfant(nometprenom,cin,email,datedenaissance,activitesnumerique,motsdepasse)VALUES ('$a','$b','$c','$d','$x','$f')");
   $conn->close();
   

  }}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Club Robotique d'enfant </title>
      
   <style type="text/css">
      body{
  background-color: #8ccfe0;
}

h1{font-family: showcard gothic ;
font-size:xxx-large;
color:green;
text-align: center;
margin-top: 48px;
}
.form1,.form2{
    width: 42%;
    background-color: aliceblue;
    margin: 60px;
    margin-left: 369px;
    padding: 73px;
    padding-right: 87px;
    padding-left: 109px;
    border-radius: 39px;
    box-shadow: 0 0 20px 0 rgb(0 0 0 / 20%), 0 5px 5px 0 rgb(0 0 0 / 24%);
}
select,input[type=email], input[type=password],[type=tel], input[type=number],input[type=text], input[type=date], input[type=radio]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;}
    label{
    font-weight: bold;}
    input[type=submit],input[type=reset] {
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
span.input{
           margin-left: 17%;
       }
#botton{
    width:20%;
    width: 20%;
    margin-top: 84px;
    margin-left: 355px;
    margin-right: -335px;
    background-color: #2ab8ce;
    color:white;
}
#botton:hover{
    background-color: white;
    color:  #8ccfe0;
    border: 1px solid  #8ccfe0;
}
.s{
  color:red;
} 
#sub{
  margin-top: -12px;
    margin-left: -24px;
}
     </style>
        <link  rel="icon" href="1.png" alt="photo"/>
        <meta content="robot">
        <meta content="robotique">
        <meta content="programme">
        <meta content="programmeur">
        <meta content="Programmation">
        <meta content="enfant">
        <meta content="club">
        <meta content="clubrobotiqued">
        <script type="text/javascript" src="enfant.js">
        </script>
    </head>
    <body>
    <?php include("header.php"); ?>
    <div>
        <a id="botton" class="btn btn-outline-primary col-sm-5" href="inscriptiont.php">Enfant</a> 
          <a  id="botton" class="btn btn-outline-primary col-sm-5" href="inscriptionparent.php" >Parent</a>
        <h1>Inscription pour les enfants  </h1>
        <form method='POST' class="form1" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
        <label> Nom et Prénom de l'enfant</label>
        <input type="text" id="nom" name="nom" placeholder="Entre Nom et Prénom"  class="text1"  value="<?php if($test==false) echo $a ;?>" />
        <span class="s"> <?php if($test==false) echo $nameErr;?> </span> <br>
        <label>CIN de parent<label>
        <input type="number" value="<?php if($test==false) echo $b ;?>" name="cin" id="cin" placeholder="Entre CIN" />
        <span class="s"> <?php echo $cinErr ;?></span><br>
        <label>Email </label>
        <input  type="email" value="<?php if($test==false)  echo $c ;?>" id="mail" placeholder="mail@serveur.com" name="email"/>
        <span class="s"><?php echo $emailErr ?></span><br>
       <label>Date de naissance </label>
        <input class="border" value="<?php if($test==false) echo $d ;?>" type="date" name="date"/> 
        <span class="s"><?php echo $dateErr;?> </span><br>
        <labrl>Quelles sont les activités numerique préférés?</label>
        <select name="test">
            <option>......</option>
            <option value="programmation" id="radio1">programmation<option>
            <option value="robotique" id="radio1">robotique<option>
        </select>
        <span class="s"><?php  echo $testErr;?></span><br>
        <label>Mots de passe </label>
        <input  type="password" value="<?php if($test==false)  echo $f ;?>"  placeholder="Entre mots de passe" maxlength="8" id="mp"name="mp"  >
        <span class="s"><?php echo $mpErr;?></span><br>
       <label> Confirmation de Mots de passe </label>
        <input class="border" type="password" value="<?php if($test==false) echo $y ;?>" placeholder="Confirmée mots de passe" maxlength="8"id="mp2" name="mp2">
        <span class="s"><?php echo $mp2Err;?></span><br>
         <span class="input"><input  id="sub" type="submit" value="Envoyer" name="sub1" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" />
        </span> <input type="reset" value="effacer" style="border-radius: 4px;"/>
        </form>
        </div>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php if($test=true) echo"inscription effectuer " ;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>
    </body>
</html>