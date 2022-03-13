<?php

function loginQuery($email, $password)
{
    global $db;

    $sql        = "SELECT * FROM `admin` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "'";
    $result     = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($result);

    if ($result) {
        $_SESSION['login'] = $result;
        is_login();
    }
    return false;
}


function categories()
{
    global $db;
    $sql        = "SELECT * FROM `product_categorey`";
    $result     = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($result);
}
