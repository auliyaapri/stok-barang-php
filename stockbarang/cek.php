<?php
    # Jika belum login, maka tidak bisa langsung ketik index.php di url
    if (isset($_SESSION['log'])) {
        
    } else {
        header('location:login.php');
    }

?>