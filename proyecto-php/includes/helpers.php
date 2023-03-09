<?php

function showErrors($errors, $field)
{
    $alert = '';
    if (isset($errors[$field]) && !empty($field)) {
        $alert = "<div class='alert alert-error'>" . $errors[$field] . "</div>";
    }
    return $alert;
}

function deleteErrors()
{
    $_SESSION['errors'] = null;
    $deleted = session_unset();
    return $deleted;
}