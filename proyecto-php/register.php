<?php

if (isset($_POST)) {

    require_once('includes/connect.php');
    session_start();

    //Recoger valores del formulario
    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Validar datos antes de guardar en la BBDD

    $errors = array();

    if (!empty($name) && !is_numeric($name) && !preg_match('/[0-9]/', $name)) {
        $name_validate = true;
    } else {
        $name_validate = false;
        $errors['name'] = "El nombre no es válido";
    }

    if (!empty($surname) && !is_numeric($surname) && !preg_match('/[0-9]/', $surname)) {
        $surname_validate = true;
    } else {
        $surname_validate = false;
        $errors['surname'] = "El apellido no es válido";
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validate = true;
    } else {
        $email_validate = false;
        $errors['email'] = "El email no es válido";
    }

    if (!empty($password)) {
        $password_validate = true;
    } else {
        $password_validate = false;
        $errors['password'] = "La contraseña está vacía";
    }

    $insert_user = false;

    if (count($errors) == 0) {
        //INSERT user en la BBDD
        $insert_user = true;

        $encrypt_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        $sql = "INSERT INTO usuarios VALUES(null,$name,$surname,$email,$encrypt_password, CURTDATE())";
        $saveUser = mysqli_query($db, $saveUser);
        if ($sql) {
            $_SESSION['complete'] = 'El usuario se ha registrado correctamente';
        } else {
            $_SESSION['errors']['general'] = 'El usuario no se ha podido registrar';
        }
    } else {
        $_SESSION['errors'] = $errors;
    }
}
header('Location: index.php');
