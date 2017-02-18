<?php

$name = $_POST['name'];
$fname = $_POST['Fname'];
$age = $_POST['age'];
$sex = $_POST['sex'];

$conn = mysqli_connect("home17.localhost", "root", "", "testhome");

mysqli_query($conn, "INSERT INTO testdb (Name, 'First Name', Sex, Age) VALUES ($name, $fname, $sex, $age)");

$conn -> close();
?>
