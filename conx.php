
<html>
    <head>
        <title>Club Robotique d'enfant </title>
        <link href="style4.css" rel="stylesheet" type="text/css"/>
        <link  rel="icon" href="1.png" alt="photo"/>
        <meta content="robot">
        <meta content="robotique">
        <meta content="programme">
        <meta content="programmeur">
        <meta content="Programmation">
        <meta content="enfant">
        <meta content="club">
        <meta content="clubrobotiqued">
        <style type="text/css">
        body{
    background:  #8ccfe0;
}
#conx{
    width:400px;
    margin-left: 7%;
    margin-top:10%;
}
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#conx h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}
input[type=number], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit] {
    background-color:  #2ab8ce;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color:  #8ccfe0;
    border: 1px solid  #8ccfe0;
}
.s{
    color: #2ab8ce;
    text-align: center;
    margin-left: 33%;
    margin-right: 10px;
}
.tt{
    width:101% ;
    padding: 12px 138px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
        </style>
    </head>
    <body>
        <div id="conx">
            <form method='POST'action="conxphp.php" >
                <h1>Connexion</h1>
                <label><b>Nom d'utilisateur(CIN)</b></label>
                <input type="number" placeholder="Entrer le nom d'utilisateur" id="name" name="cin" require ><span id="s1"></span>
               <br> <label><b>Mot de passe</b></label>
                <input type="password"  placeholder="Entrer le mot de passe" id="pd"  name="mp" required><span id="s2"></span>
                <label><b>connecté en tanque :</b></label>
                <select name='sel' class="tt">
                <option value="">-------</option>
                <option value="admin">admin</option>
                <option value="enfant">enfant</option>
                <option value="parent">parent</option>
                <select>
                <input type="submit" id='submit' value='LOGIN' >
                <span class="s"><a href="inscription.php">S'inscrire</span></a><a href="Accueil.php">Accueil</span></a>
            </form>
        </div>
        
    </body>
</html>
