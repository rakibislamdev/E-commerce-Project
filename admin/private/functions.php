<?php

function u($string = "")
{
    return urlencode($string);
}

function raw_u($string = "")
{
    return rawurlencode($string);
}

function h($string = "")
{
    return htmlspecialchars($string);
}

function realescape($string)
{
    global $db;
    return mysqli_real_escape_string($db, $string);
}

function redirect_to($location)
{
    header("Location: " . $location);
    exit;
}

function is_post_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}




function logout()
{
    unset($_SESSION['login']);
    return redirect_to('./login.php');
}

function is_login()
{
    if (isset($_SESSION['login'])) {
        return redirect_to('./dashboard.php');
    }
}


function login_required()
{
    if (!isset($_SESSION['login'])) {
        return redirect_to('./login.php');
    }
}

function selected($fileName, $value)
{
    if ($fileName == $value) {
        echo "selected";
    }
}


function count_number_rows($result)
{
    $subject = mysqli_num_rows($result);
    return $subject;
}
