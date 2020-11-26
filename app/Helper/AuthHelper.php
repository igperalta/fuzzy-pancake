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
        $_SESSION['is_admin'] = $user->is_admin;
        $_SESSION['last_active'] = time();
        if ($_SESSION['is_admin']) {
            header("Location: " . BASE_URL . "administration");
        } else {
            header("Location: " . BASE_URL);
        }
    }

    public function logout()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        header("Location: " . BASE_URL . "login");
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

    public function verifyAdmin()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['is_admin']) or !$_SESSION['is_admin']) {
            header("Location: " . BASE_URL);
        } else {
            return true;
        }
        $_SESSION['last_active'] = time();
    }

    public function CheckSession()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['current_user']) or (!isset($_SESSION['last_active'])) or (time() - $_SESSION['last_active'] > 300)) {
            return false;
        } else {
            return true;
        }
        $_SESSION['last_active'] = time();
    }

    public function isAdmin()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['is_admin']) or !$_SESSION['is_admin']) {
            return false;
        } else {
            return true;
        }
        $_SESSION['last_active'] = time();
    }

    public function isUser()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['is_admin'])) {
            if (!$_SESSION['is_admin']) {
                return true;
            }
        } else {
            return false;
        }
        $_SESSION['last_active'] = time();
    }
}
