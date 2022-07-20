<?php 
session_start();
$y=$_POST['sel'];
$i="enfant";
$t="admin";
$z="parent";
  $conn = new mysqli ("localhost","root","");
  $conn->select_db("testdb");
  //conx  enfant
 if(strcmp($i,$y)==0){ 
if(isset($_POST['cin']) && isset($_POST['mp']))
{   $a = $_POST['cin']; 
    $b = $_POST['mp'];
    if($a!== "" && $b!== "")		
    {
	$e=$conn->query("SELECT * FROM enfant where cin= '$a' and motsdepasse='$b'"); }
			  
if(!$e) {
    echo "lecture impossible";
      }
      else
	  {
        $x = mysqli_num_rows($e);
		if ($x!=0) 
		{ $_SESSION['cin'] = $a;
              $_SESSION['mp'] = $b;	
		header('Location: enfant.php');}
			else
{ echo"utilisateur n'existe pas"; }}  } }
//conx admin
elseif(strcmp($t,$y)==0)
{if(isset($_POST['cin']) && isset($_POST['mp']))
  {   $a = $_POST['cin']; 
      $b = $_POST['mp'];	
    $e=$conn->query("SELECT * FROM admin1 where cin= '$a'and motsdepasse='$b'"); 
  if(!$e) {
      echo "lecture impossible";
        }
        else
      {
          $x =mysqli_num_rows($e);
      if ($x!=0) 
      { $_SESSION['cin'] = $a;
                $_SESSION['mp'] = $b;	

      header('Location: admin.php');}
        else
  { echo"utilisateur n'existe pas"; }}  }

}//conx parent 
elseif(strcmp($z,$y)==0)
{
  if(isset($_POST['cin']) && isset($_POST['mp']))
{   $a = $_POST['cin']; 
    $b = $_POST['mp'];
	$e=$conn->query("SELECT * FROM parent where cin= '$a' and motsdepasse='$b'"); 
			  
if(!$e) {
    echo "lecture impossible";
      }
      else
	  {
        $x = mysqli_num_rows($e);
		if ($x!=0) 
		{ $_SESSION['cin'] = $a;
              $_SESSION['mp'] = $b;	
		header('Location: parent.php');}
			else
{ echo"utilisateur n'existe pas"; }}  }
}
else{
  echo "erreur";
}
 $conn->close();
 ?>