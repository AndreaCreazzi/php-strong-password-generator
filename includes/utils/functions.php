<?php  
function generateRandomPassword($length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $password = '';
    $charCount = strlen($chars) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $charCount)];
    }

    return $password;
}

$error_message = '';
$generated_password = '';
