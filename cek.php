<?php

//jika belum login 

if (isset($_session['log'])) {
} else {
    header('location:login.php');
}
