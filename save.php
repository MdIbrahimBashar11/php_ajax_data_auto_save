<?php
$con = new mysqli('localhost', 'root', '', 'php_otp');

if ($_POST['id'] != '') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE usertable SET name = '$name', email = '$email' WHERE id = '$id'";
    mysqli_query($con, $sql);
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO usertable (name, email) VALUES ('$name', '$email')";
    mysqli_query($con, $sql);
}
?>
