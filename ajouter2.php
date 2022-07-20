<?php
     $a=$b=$c=$d=$f=$x="";
     $nameErr=$emailErr=$nomenfantErr=$mppErr=$mpp2Err=$cinErr=$telErr="";
     $test=false;
     if ($_SERVER["REQUEST_METHOD"] == 'POST') {
      $test=true;
        $a=$_POST['nomp'];
        $b=$_POST['cinp'];
        $c=$_POST['emailp'];
        $x=$_POST['tel'];
        $d=$_POST['nome'];
        $f=$_POST['mpp'];
        $y=$_POST['mpp2'];
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
  if(empty($d))
  {
    $nomenfantErr= "* champ obligatoire";
    $test=false;
  }
  elseif(!preg_match("/^[a-zA-Z-' ]*$/",$d)){
    $nomenfantErr = "Seuls les lettres et les espaces blancs sont autorisés";
    $test=false;
  }
  if(empty($b))
  {
    $cinErr = "* champ obligatoire";
    $test=false;
  }
  if(empty($x))
  {
    $telErr= "* champ obligatoire";
    $test=false;
  }
  if(empty($f))
  {
    $mppErr = "* champ obligatoire";
    $test=false;
  }
  if(empty($y))
  {
    $mpp2Err = "* champ obligatoire";
    $test=false;
  }
  elseif(strcmp($f,$y)>0||strcmp($f,$y)>0)
  {
    $mpp2Err = "* verifier le mots de passe";
    $test=false;
  }
if($test){
  $conn = new mysqli ("localhost","root","");
  $f=password_hash($f, PASSWORD_DEFAULT);
  $conn->select_db("testdb");
  $conn->query("INSERT INTO  parent(nometprenom,cin,email,telephone,nomenfant,motsdepasse)VALUES ('$a','$b','$c','$x','$d','$f');");
  $conn->close(); 
  }}
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
<a id="botton" class="btn btn-outline-primary col-sm-5"  href="ajouter.php">Enfant</a> 
          <a  id="botton" class="btn btn-outline-primary col-sm-5"  href="ajouter2.php">Parent</a>
                <h1>Inscription pour les parents</h1>
                <form class="form2"  method='POST' action="<?php echo $_SERVER["PHP_SELF"];?>">

        <input type="text" value="<?php if($test==false) echo $a ;?>" id="nomp" name="nomp" placeholder="Entre Nom et Prénom" class="text1"  />
       <span class="s"><?php echo  $nameErr ;?></span><br>
        <label>CIN</label> 
        <input type="number" id="cinp" value="<?php if($test==false) echo $b ;?>" name="cinp" placeholder="Entre CIN" />
        <span class="s"><?php echo  $cinErr ;?></span><br>
        <label>Email </label>
        <input  type="email" value="<?php if($test==false) echo $c ;?>" placeholder="mail@serveur.com" name="emailp" id="emailp" />
        <span class="s"><?php echo  $emailErr ;?></span><br>
        <label>Numéro de téléphone </label>
        <input class="border"  id="tel" type="tel" pattern="[0-9]{2}[0-9]{3}[0-9]{3}"name="tel" placeholder="Numéro de téléphone" valieu="<?php if($test==false) echo $x ;?>"/>
        <span class="s"><?php echo  $telErr ;?></span><br>
       <label> Nom et Prénom de l'enfant</label>
        <input type="text" value="<?php if($test==false) echo $d ;?>" name="nome" id="nome" placeholder="Entre Nom et Prénom" />
        <span class="s"><?php echo $nomenfantErr ;?></span><br>
        <label>Mots de passe</label>
        <input  type="password" value=""  placeholder="Entre mots de passe" maxlength="8" id="mpp" name="mpp" >
        <span class="s"><?php echo  $mppErr ;?></span><br>
        <label> Confirmation de Mots de passe </label>
        <input class="border" type="password" value=""  placeholder="Confirmée mots de passe" maxlength="8" id="mpp2" name="mpp2" >
        <span class="s"><?php echo  $mpp2Err ;?></span><br>
        <span class="input"> <input type="submit" id="sub" name="sub2" value="Envoyer"  > </span>
        <input type="reset" value="effacer" style="border-radius: 4px;"/>
        </form>
        <a href="admin.php">retour</a>
</body>
</html>