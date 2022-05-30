<?php
$conn = mysqli_connect('localhost','root','','test');
$var1 = $_POST['name'];
$var2 = $_POST['pass'];
$sql = "select * from userdetails where uname='$var1'";


$dbconnect  = mysqli_query($conn,$sql);
$var3 = mysqli_fetch_assoc($dbconnect);
if($var3==NULL)
{
    echo "<h1>Username Doesn't exits</h1>";
    echo "<script>window.location.href='http://localhost/index.html'</script>";
}
$flag = 0;
while($array = mysqli_fetch_assoc($dbconnect))
{
    if($array['upass']==$var2)
    {
    echo "<h1>Hello Successful Login</h1>";
    $flag = 1;

    break;
    }  
} 
if($flag==0)
echo('Wrong password, pls try again')



































































?>