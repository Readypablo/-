

<?php
$str = htmlentities(file_get_contents("text.php"));
echo $str;
?>

<?php
$fd = fopen("text.php", 'a+') or die("не удалось создать файл");

$str = htmlentities(file_get_contents("text.php"));


if(isset($_POST['btn'])){

$login = $_POST['login']; 
$pass = $_POST['pass']; 
$pass2 = $_POST['pass2']; 
$email = $_POST['email']; 



if(stristr($str,$pass) === FALSE) {
    echo '<h1>ЛОХ</h1>';
}
else{
    if(stristr($str,$login) === FALSE) {
        echo '<h1>ЛОХ</h1>';
      }
      else{
            echo '<h1>Вы вошли в систему</h1>';
      }
}


$all=$login." ".$pass." ".$pass2." ".$email;






strval($all);

 fwrite($fd, $all) ;

fclose($fd);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="Windows-1251">
   <title></title>
   <link rel="icon" href="images/3.jpg" type="image/x-icon"/>
   <link rel="shortcut icon" href="images/3.jpg" type="image/x-icon"/> 
   <link rel="stylesheet" type="text/css" href="123.css"/>
   <script type="text/javascript" src="forma.js"></script>
</head>
<body>

 

 
<form name="register" method="post" >
 <div id="zhzh">
<b>Регистрационная форма</b>
             <p><br>Введите логин<br> <input type="text" id=login name="login">
        <br>Введите пароль<br> <input type="text" id=pass  name="pass">
        <br>Введите пароль еще раз<br> <input type="text" id=pass2 name="pass2">
        <br>E-mail <br><input type="text" id=email name="email">
        </P>   
<br>

<input type="submit" id=btn value = "OK" name="btn"></br>
</P>
</div>
</form>

<br>

      
</body>
</html>