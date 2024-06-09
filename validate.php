<?php
// validate input fields

function validateName($name) {
    if (empty($name)) {
        return "Name is required";
    }
    if (strlen($name) < 2 || strlen($name) > 30) {
        return "Name must be between 2 and 30 characters.";
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        return "Name must contain only letters and spaces.";
    }
    return true;
}

function validateEmail($email) {
    if (empty($email)) {
        return "E-mail field is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "E-mail is invalid.";
    }
    return true;
}

function validatePass($password) {
    if (empty($password)) {
        return "Password is required.";
    }
    if (strlen($password) < 8) {
        return "Password must be at least 8 characters long.";
    }
    if (!preg_match("/[A-Z]/", $password)) {
        return "Password must contain at least one uppercase letter.";
    }
    if (!preg_match("/[a-z]/", $password)) {
        return "Password must contain at list one lowercase letter.";
    }
    if (!preg_match("/[0-9]/", $password)) {
        return "Password must contain at least one number.";
    }
    if (!preg_match("/[\W]/", $password)) {
        return "Password must contain at least one special character.";
    }
    return true;
}
?>
