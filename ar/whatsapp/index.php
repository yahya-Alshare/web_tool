<?php
if(isset($_POST['submit'])){
    $countryCode = $_POST['zip'];
    $phoneNumber = $_POST['number'];
    $message = 'مرحبًا، هذه رسالة من الرمز PHP';

    $apiUrl = "https://wa.me/$countryCode$phoneNumber?text=" . urlencode($message);
    header("Location: $apiUrl");
    exit();
}
?>
