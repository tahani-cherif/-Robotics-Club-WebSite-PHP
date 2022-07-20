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
    margin-top:10%;
    margin-left: -54%;
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
input[type=email], input[type=password] {
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
    margin-left: 8%;
    margin-right: 10px;
    
}
label{
    float: left;
}
        </style>
        <script type="text/javascript" >
        function checkEmail(email) {
    let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function verif1() {
    let  email = document.getElementById("name").value;
     if (checkEmail(email)) {
       document.getElementById("s1").style.color = "green";
       document.getElementById("name").style.borderColor = "green";
   } 
    else
    { document.getElementById("s1").innerHTML="Email address Invalid";
    document.getElementById("s1").style.color = "red";
    document.getElementById("name").style.borderColor = "red";
}
    
}
function verif2()
            {
               let mp=document.getElementById("pd").value;
               if(mp.match( /[0-9]/g) && 
                    mp.match( /[A-Z]/g) && 
                    mp.match(/[a-z]/g) && 
                    mp.match( /[^a-zA-Z\d]/g))
                   {  
                       document.getElementById("s2").style.color = "green";
                       document.getElementById("pd").style.borderColor = "green";
            }
            else {
                document.getElementById("s2").innerHTML=" * Required Field ";
                document.getElementById("s2").style.color = "red"
                document.getElementById("pd").style.borderColor = "red";
               }
           

            }
       </script>
    </head>
    <body>
    <center>
        <div id="conx">
            <form >
                <h1>Log in</h1>
                <label><b>username</b></label>
                <input type="email" placeholder="Enter Username" required id="name" onblur="verif1();"><span id="s1"></span>
               <br> <label><b>Password</b></label>
                <input type="password" maxlength="8" placeholder="Enter password" id="pd" required onblur="verif2();"><span id="s2"></span>

                <input type="submit" id='submit' value='LOGIN' >
                <span class="s"><a href="inscriptionang.php">Register now</span></a>  <a href="Reception.php">Reception</span></a>
            </form>
        </div>
        <center>
        
    </body>
</html>
