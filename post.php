<?php 
 $connection = mysqli_connect('localhost','root','','test'); 
 $var1 = $_POST['name'];
 $var2 = $_POST['pass'];
 $sql = "insert into userdetails(uname,upass) values('$var1','$var2')";
 $db = mysqli_query($connection,$sql);  

 if($db)
 {
     echo 'Added Data Successfully into the database';
 }
?>