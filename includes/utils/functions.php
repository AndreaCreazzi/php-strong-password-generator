<?php
function generateRandomPassword($length, $allow_repeat_chars = false)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $password = '';
    $charCount = strlen($chars) - 1;

    if ($allow_repeat_chars) {
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[rand(0, $charCount)];
        }
    } else {
        $used_chars = array();
        while (strlen($password) < $length) {
            $char = $chars[rand(0, $charCount)];
            if (!in_array($char, $used_chars)) {
                $password .= $char;
                $used_chars[] = $char;
            }
        }
    }

    return $password;
}
