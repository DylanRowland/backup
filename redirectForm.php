<?php
  
  $fullName = explode(" ", $_POST['fullName']);

  

  $fName = $fullName[0];
  $lName = $fullName[1];

    
  $reason = $_POST['reason'];



  header("Location: /form.php?fName=$fName&lName=$lName&reason=$reason");


?>