<?php
session_start();
$_SESSION['clientFN'] = $_POST['firstname'];
$_SESSION['clientrSN'] = $_POST['surname'];

if(isset($_POST['patchtest'])){
   $_SESSION['patchtest'] = 1;
   header("Location: caseysminks.html");
}
else {
    $_SESSION['patchtest'] = 0;
    header("Location: finalStepbooking.php");
}

?>