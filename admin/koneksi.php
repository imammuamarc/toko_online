

<?php
// $kon=mysql_connect("localhost","root","") or die(mysql_error());
// mysql_select_db("db_aqilla",$kon);


$kon=mysqli_connect('localhost','root','','db_aqilla');
if(!$kon){
    echo "salah";
}

?>

