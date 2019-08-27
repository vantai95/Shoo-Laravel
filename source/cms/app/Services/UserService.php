<?php

namespace App\Services;

class UserService
{
    public static function passwordComplexValidate($pwd)
    {
        if(empty($pwd)) return false;                              // Password is null or empty
        if (strlen($pwd) < 6 || strlen($pwd) > 20)  return false;  // Password too short or too long
        if (!preg_match("#[0-9]+#", $pwd))  return false;  // Password must include at least one number!
        if (!preg_match("#[a-zA-Z]+#", $pwd)) return false;// Password must include at least one letter!
        return true;
    }
}