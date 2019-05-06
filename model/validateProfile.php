<?php
/**
 * Created by PhpStorm.
 * User: saman
 * Date: 5/5/2019
 * Time: 7:44 PM
 */


function validEmail($email)
{
    return isset($email) && !empty($email);
    //return preg_match("/\b(?:(?:http?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;
    //]*[-a-z0-9+&@#\/%=~_|]/i", $email);
}

/**
 * @param $gender
 * @return bool
 */
function validGenderLook($genderLook)
{
    return isset($genderLook);
}

if (empty($biography)) {
    $errorsProfile['biography'] = "Please enter a bio";
}

if (!validEmail($email)) {
    $errorsProfile['email'] = "Please enter a valid e-mail address";
}

if (!isset($state)) {
    $errorsProfile['state'] = "Please provide your state";
}

if (!validGenderLook($genderLook)) {
    $errorsProfile['genderLook'] = "Please provide a binary choice of attraction";
}

$successProfile = sizeof($errorsProfile) == 0;