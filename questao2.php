<?php

function executeIfLoggedIn($session, callable $func)
{
    if ($session &&
        isset($_SESSION['loggedin']) &&
        $_SESSION['loggedin'] == true
    ) {
            call_user_func($func);
            return;
    }

    if (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
        call_user_func($func);
    };
}

function redirect()
{
    header("Location: http://www.google.com");
}

executeIfLoggedIn(true, 'redirect');
exit();
