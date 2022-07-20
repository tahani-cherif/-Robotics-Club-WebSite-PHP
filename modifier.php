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
}
  if($test){

    $conn = new mysqli("localhost","root","");   
    $conn->select_db("testdb");
    $s=$conn->query("UPDATE enfant set nometprenom ='".$a."' ,cin='".$b."',email='".$c."' ,datedenaissance='".$d."'
    ,activitesnumerique='".$x."',motsdepasse='".$f."' where cin='".$b."'");
    $conn->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
 
 ?>
<html>
<head>
<style type="text/css">
input[type=email], input[type=password],[type=tel], input[type=number],input[type=text], input[type=date], input[type=radio]{
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
a{
     margin:20px;
 }  
</style>
</head>
<body>
<h1>Modifier corrdonnée  </h1>
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
        <a href="enfant.php">retour</a>
</body>
</html>
