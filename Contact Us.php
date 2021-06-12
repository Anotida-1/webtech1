<?php

  $con = mysqli_connect('127.0.0.1','root','');
  
  if(!$con)
  {
    echo 'Not Connected to Server';
  }
if(!mysqli_select_db($con,'test'))
{
  echo 'Database Not Selected';
}


$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Message = $_POST['text'];

$sql = "INSERT INTO person (Name,Phone,Email,Message) VALUES ('$Name','$Phone','$Email','$Message')";

if(!mysqli_query($con,$sql))
{
  echo "<script> alert('Your Message has not been sent')
window.location.href='Contact Us.html';
          </script>";
}
else
{
  echo "<script> alert('Your Message has been sucessfully sent')
window.location.href='Contact Us.html';
          </script>";
}

header("refresh:2; url=Contact Us.html");


?>