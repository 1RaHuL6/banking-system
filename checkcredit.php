<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$SESSION['name'];
$q="select amount from user where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['amount'];
$from=$_SESSION['name'];
$to=$_POST['receiver'];
$q1="select amount from user where name = '$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['amounnt'];
session_destroy();
if ($var >= $_POST["transfer"])
{
    $sub=$var-$_POST["transfer"];
    $q="update suer set amount='$sub' where name='$from'";
    $result=mysqli_query($con,$q);
    $sum=$var1+$POST["transfer"];
    $q="update user set amount ='$sum' where name='$to'";
    $result=mysqli_query($con,$q);
       $c=$_POST ["trasnfer"];
       $q="insert into mini_statement(sender,receiver,amount)
                values('$from', '$to',$c)";
       $result=mysqli_query($con,$q);
       include 'getdetail.php';
       $message= "successful transfer!";
       echo"<script type='text/javascript'>alert($message');
       </script>";


}
else 
{
    include 'getdetail.php';
    $message="Insufficient Balance";
    echo"<script type='text/javascript'>alert('$message');
    </script>";
}
?>