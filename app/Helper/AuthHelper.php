<?php

class AuthHelper
{
    public function __construct()
    {
    }

    public function loginUser($user)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['current_user'] = $user->email;
        $_SESSION['last_active'] = time();
        header("Location: " . BASE_URL . "administration");
    }

    public function logout()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
    }

    public function VerifySession()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['current_user']) or (!isset($_SESSION['last_active'])) or (time() - $_SESSION['last_active'] > 300)) {
            $this->logout();
        } else {
            return true;
        }
        $_SESSION['last_active'] = time();
    }
}
