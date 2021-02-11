<?php
session_start();
if(isset($_GET['submit'])){
if(isset($_GET['name'])){
   $name = $_GET['name'];

    if(isset($_GET['subject'])){ 
        $subject = $_GET['subject'];

        if(isset($_GET['email'])){
        $email = $_GET['email'];

            if(isset($_GET['message'])){
            $message = $_GET['message'];

            $mailTo = "acharyaamol36@gmail.com";
   $headers = "From: ".$email;
   $txt = "You have received an e-mail from ".$name.".\n\n".$message;

//    mail($mailTo,$subject,$txt,$headers);
//    header("Location: index.php?message=mail sent");

$_SESSION['success'] = "Message Sent";
//    header("Location: index.php");
echo $_SESSION['success'];
echo "<script>window.location.href='index.php'</script>";
            }
        }
    }
}
}

