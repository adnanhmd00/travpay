<?php
session_start();
include("connection.php");
if (isset($_SESSION['mobile'])) {
    ?>

    Dashboard

    <?php
} else {
    ?>
    <SCRIPT LANGUAGE='JavaScript'>
        // alert('Please Login or Register!!');
        window.location.href = 'travpay-login.php';
    </Script>

<?php
}
?>