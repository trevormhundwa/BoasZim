<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "sales@boaszim.co.zw";
    $headers = "From: ".$mailFrom;
    $txt = "There is a new website enquiry from ".$name.".\n\n".$message;

    mail($mailTo,"Website Enquiry",$txt,$headers);
    header("Location: index.php?mailSent");
}
?>