<html>
    <head>
        <style type="text/css">
        #titre1{
  font-size: 50px;
  font-family: sigmar one;
  color: green;
}
#titre2{
  font-size: 50px;
  font-family: sigmar one;
  color: darkblue;
}
#titre3{
  font-size: 50px;
  font-family: sigmar one;
  color:coral;
}
 .titre{
  margin-left: -1%;
  margin-top: 2%;

}
#it{
  display: grid;
  grid-template-columns: 130px 1fr;
  height: 125px;
}
  nav{
          background-color:   rgb(96, 50, 129) ;
          flex-direction: center;
          height: 55px;


      }
 nav  ul {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  margin-right: 51px;
}
nav  ul li{
  list-style: none;
margin-right :60px ;
padding-top: 3px;
padding-bottom: 20px;
margin-left: 50px;
}
.lien{
  color: coral;
    cursor: pointer;
  font-size: 24px;
    font-family: showcard gothic ;
    margin-right: 81px;
    text-decoration: none;
}
.j{
  list-style: none;
  margin-right: -4px;
    margin-left: 6px;
    padding-top: 10px;
  
}
.j#j1{
  min-width: 250px;
}
header{
  width: 100%;
}

.menu {
  width: 100px;
  font-weight: bold;
    margin-top: -113px;
    position: relative;
    float: right;
    margin-right: 27px;
}
.menu .selected {
  display: flex;   
  justify-content: space-between;
  line-height: 2;
  cursor: pointer;
  margin-left: 18px;
}
.menu .selected:before {
  content: '';
  display: inline-block;
  width: 29px;
  height: 45px;
  background-image: url(https://www.countryflags.io/fr/flat/32.png);
  background-size: contain;
  background-repeat: no-repeat;
}

.menu ul {
  margin: 0;
  padding: 0;
  display: none;
  background-color: #fff;
  border: 1px solid #f8f8f8;
  position: absolute;
  top: 45px;
  right: 0px;
  width: 125px;
  border-radius: 5px;
  box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
}


.menu ul li {
  list-style: none;
  text-align: left;
  display: flex;
  justify-content: space-between;
}

.menu ul li a {
  text-decoration: none;
  width: 125px;
  padding: 5px 10px;
  display: block;
}

.menu ul li:hover {
  background-color: #f2f2f2;
}

.menu ul li a:before {
  content: '';
  display: inline-block;
  width: 25px;
  height: 25px;
  vertical-align: middle;
  margin-right: 10px;
  background-size: contain;
  background-repeat: no-repeat;
}

.en:before {
  background-image: url(https://www.countryflags.io/us/flat/32.png);
  font-size: 10px;
}
.fr:before {
  background-image: url(https://www.countryflags.io/fr/flat/32.png);
  font-size: 10px;
}


.menu:hover ul {
  display: block;
}
#eng:before{
  background-image: url(https://www.countryflags.io/us/flat/32.png);
}
img{
  margin: -1px 28px;
}
   .lien:hover{
    color:white;
   }
   </style>
</head>
<body>
<header>
      <div id="it"><img src="1.png" width="120" height="120" alt="photo"/>
      <span class="titre"><center><span id="titre1"> club </span><span id="titre2">robotique </span><span id="titre3">d'enfant</span></center></span>
    </div>
    <div class="menu">
        <div class="selected" >
            French
        </div>
        <ul>
            <li>
                <a href="Reception.php" class="en" id="en" >English</a>
            </li>
            <li>
                <a href="Accueil.php" class="fr">French</a>
            </li>
        </ul>
        
    </div>
      <nav>
          <ul>
                <li class="j"><a class="lien" href="Accueil.php">Accueil </a></li>
                <li class="j"><a  class="lien" href="Ateliers.php">Ateliers</a></li>
                <li class="j"><a  class="lien"  href="inscription.php">Inscription </a></li>
                <li class="j"><a   class="lien" href="contact.php">contact</a> </li>
                <li class="j" ><input type="search" name="recherche" id="j1"placeholder="Recherchez..." width="30px"> <button>&#128269;</button></li>
                <li ><a href="conx.php"><img  class="j2" src="contact-book.png" width="60%" height="50" ></a></li>
          </ul> 
      </nav>
      </header>
</body>
</html>