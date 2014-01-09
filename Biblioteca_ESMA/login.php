<?php 
session_start(); 
include_once "conexion.php"; 
  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'"; 
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            header("location:biblioteca-virtual/administrador/inicio.php"); 
        } 
        else 
        { 
            echo '</br></br><div class="error">Su usuario es incorrecto, intente nuevamente.</div></br>'; 
        } 
    } 
?> 
  
<style type="text/css"> 
*{ 
    font-size: 14px; 
} 
body{ 
background-image:url('http://www.100hdwallpapers.com/wallpapers/1920x1200/abstract_color_background_picture_8016-widescreen_wallpapers.jpg')

} 
form.login { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 278px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.login div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.login div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.login div input[type="text"], form.login div input[type="password"] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.login div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #780F0F; 
    float: right; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: #FCFCFC; 
	font-family: century gothic;
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 
  
<form action="" method="post" class="login">
     <center><img src="images/login.png" width="200px" height="200px"/></center>
	 </br>
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div> 
</form> 
<?php 
} else { 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="logout.php">Logout</a>'; 
} 
?>