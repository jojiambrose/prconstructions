<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
     echo('test');
    $mailTo = "shalomgeorge97@gmail.com";
    $header ="From: ".$name; 
    $txt ="You have recieved a message from".$name.".\n\n".$message;

    mail($mailTo, $txt, $header);
    header("Location: index.php?mailsend")
 }