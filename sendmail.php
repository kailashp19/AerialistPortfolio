<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $mailTo = "kcpatel9689@yahoo.com";
    $header = "From: ".$emailFrom;
    $txt = "You have recieved a message from: ".$name.".\n\n".$message;

}

?>