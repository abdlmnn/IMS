<?php
session_start();

include '../connection.php';

if (isset($_POST['sign-up-button'])) {
    $fullname = $_POST['inputFullname'];
    $address = $_POST['inputAddress'];
    $phone_number = $_POST['inputPhoneNumber'];
    $postal_code = $_POST['inputPostalCode'];
    $location = $_POST['inputLocation'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $confirm_password = $_POST['inputCpassword'];

    if ($password !== $confirm_password) {
        echo "<script> alert('Passwords do not match!') </script>";
        header('location: registration.php');
        exit();
    }

    $sql = "INSERT INTO user (fullname, address, phoneNumber, postal, location, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssissss", $fullname, $address, $phone_number, $postal_code, $location, $email, $password);

    if ($stmt->execute()) {
        header("Location: shop.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }


}