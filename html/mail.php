<?php 

if(isset($_POST['contact_submit'])){ 
    $name = $_POST['contact_name']; 
    $userEmail = $_POST['contact_email']; 
    $subject = "New Message From COntact"; 
    $message = $_POST['contact_message']; 
    
    $mailTo = "api@360webworks.tech"; 
    $headers = "From: ".$userEmail; 
    $txt = "You have received an email form ".$name.".\n\n".$message; 

    mail($mailTo, $subject, $txt, $headers); 
    
    header("Location: home-option-1.html"); 

}
?>