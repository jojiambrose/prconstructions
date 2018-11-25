<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $mailTo = "ebin@prconstructionskochi.com";
    $header ="From: ".$name; 
    $txt ="You have recieved a message from".$name.".\n\n".$message;

    mail($mailTo, $txt, $header);
    header("Location: index.php?mailsend")
}