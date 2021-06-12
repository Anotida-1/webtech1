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


$Cmessage = $_POST['message'];


$sql = "INSERT INTO chat (Cmessage) VALUES ('$Cmessage')";

if(!mysqli_query($con,$sql))
{
  echo "<script> alert('Your Message has not been sent')
window.location.href='index.html';
          </script>";
}
else
{
  echo "<script> alert('Your Message has been sucessfully sent')
window.location.href='index.html';
          </script>";
}

header("refresh:2; url=index.html");


?>