<?php
setcookie("name", "Zeina", time() + 60*60*24*30);
print_r($_COOKIE);

if(isset($_COOKIE['background'])){
    echo "<style>body{background-color:".$_COOKIE['background']."; color:#fff;}</style>";
}

if($_POST){
    setcookie("background", $_POST['bg-color'], time() + 60 * 60 * 24 * 365);
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
?>
<form action="" method="POST">
    <input type="color" name="bg-color">
    <input type="submit" value="Choose color"/>
</form>