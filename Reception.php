<!DOCTYPE html>
<html>
    <head>
        <title>Club Robotique d'enfant </title>
        <style type="text/css">
        body{
  background-color: #8ccfe0;
}
img{
  margin:16px 36px ;
}

aside {
  width: 30%;
  padding-left: .3rem;
  margin-left: .5rem;
  float: right;
  box-shadow: inset 5px 0 5px -5px #29627e;
  color: #29627e;
}
p{
  text-align: center;
font-size: x-large;
}
.image{
  width: 100%;
  min-width: 400px;
  
  margin: 0 auto;
}
.parg{
  font-family: 'Lucida Sans';
  color: black;
  font-size: x-large;
}
h1{
  font-size: xxx-large;
  text-align: center;
  color: rgb(13, 13, 75);
  font-family: 'Lucida Sans'
}
h2{text-align: center;}
div#galerie
{
  width: 70% ;
  background:transparent ;
  border: 1px  transparent;
  padding: 15px ;
  margin: 15px 30px ;
  margin-left: 15%;
  text-align: center ;
  font: 0.9em Georgia, serif ;
}

ul#galerie_mini
{
  margin: 0 ;
  padding: 0 ;
  list-style-type: none ;
}

ul#galerie_mini li
{
  float: left ;
  
}

ul#galerie_mini li a img
{
  margin: 2px 1px ;
  border: 1px transparent ;
}

dl#photo
{
  clear: both ;
  margin: 0 auto ;
}

dl#photo dt
{
  font: italic 3em/2em Georgia, serif ;
  color:rgb(13, 13, 75) ;
}

dl#photo dd
{
  margin: 0 ;
}

dl#photo img
{
  border: 1px transparent ;
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
        <script type="text/javascript" >
          function displayPics()
          {
            let  photos = document.getElementById('galerie_mini') ;
            let liens = photos.getElementsByTagName('a') ;
            let  big_photo = document.getElementById('big_pict') ;       
            let  titre_photo = document.getElementById('photo').getElementsByTagName('dt')[0] ;
            for (let  i = 0 ; i < liens.length ; ++i) {
              liens[i].onclick = function() {
                big_photo.src = this.href; 
                big_photo.alt = this.title; 
                titre_photo.firstChild.nodeValue = this.title; 
                return false; 
              }
            }
          }
          window.onload = displayPics;
  </script>
    </head>
    <body  >
      <?php include("header2.php");?>
      <h1><marquee>Welcome &#128400; &#65039; &#128400; &#65039;</marquee></h1>
      <aside>
          <br>
          <br>
          <h2>&#128222; phone:</h2>
          <br>
              <p>  55 598 556 .</p>  
           <br>
           <h2> &#128231; E-mail : </h2>
           <br>
           <p> clubrobotiqued'enfant@gmail.com .</p>  
          <br>
          <h2>&#127968; Adress:</h2>
        <br>
        <p>Cited cheker rawed ariana </p>
        <a target="_blank" href="https://www.facebook.com/"><img src="facebook.png" width="10%" class="a" ></a>
        <a target="_blank" href="https://www.instagram.com/"><img src="instagram.webp" width="10%" class="b"></a>
        <a target="_blank" href="https://accounts.google.com/b/0/AddMailService"><img  src="gmail.png" width="13%"class="c"></a>
  
    </aside>
    <main>
     <section>
         
       <article class="image">
         <img class="img" src="12345.jpg" width="150" height="450" alt="photo">
         <img class="img" src="1.png" width="300" height="250" aligne="center" alt="photo">
         <img class="img"  src="123456.jpg" width="150" height="450" aligne="rigth" alt="photo">
       </article>
     </section>
       <br>
       <br>
       <section>
         <article>
        <b> <p class="parg">
            Our club offers children the opportunity to discover digital activities that cover the following themes:
           <br>
           robotics, electronics, 2D drawing and animation, 3D modeling and printing, etc.</p></b></article>
       </section>
       <br>
       <br>
       <section>
         <br>
        <article>
         <div id="galerie">
          <ul id="galerie_mini">
            <li>
              <a href="12345678.jpg" title=" photo 1"><img src="12345678.jpg" alt=" photo 1" width="20%" /></a>   
              <a href="1234567.jpg" title=" photo 2"><img src="1234567.jpg" alt="photo 2"  width="20%"/></a>    
              <a href="0123.jpg" title=" photo 3"><img src="0123.jpg" alt=" photo 3" width="20%"/></a>    
              <a href="012.png" title=" photo 4"><img src="012.png" alt=" photo 4" width="20%"/></a>    
            <li>
        </ul>
        
          <dl id="photo">
            <dt> Photo 1 </dt>
            <dd><img id="big_pict" src="12345678.jpg" alt="Photo 1 en taille normale" width="95%" height="550" /></dd>
          </dl>
        </div>
      </article>
       </section>
       
       <section>
         <article>
         <h2 class="titre " > About the project :</h2>
         <p>for 7 years we have been helping children discover and love science through participatory and fun workshops.    
            Our goal in the club is not to train programmers. The first step is to give children the opportunity to get their hands dirty,
             in order to understand how the programs are made. It is now an essential key to understanding the world in which they live. </p>  
              <img src="b.jpg" width="200" height="300"  alt="photo">
             <img src="a.jpg"  width="300" height="300" alt="photo">
             <img src="m.jpg" width="300" height="300" alt="photo">
             <img src="f.jpg"  width="200" height="300" alt="photo">
            </article>
          </section>
     </article>
    </main>
     <?php include("footer2.php");
     ?>
    </body>
</html>