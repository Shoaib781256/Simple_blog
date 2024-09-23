<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard d-flex justify-content-between ">
        <div class="sidebar bg-dark vh-100 ">
            <h1 class="bg-primary p-4"><a href="./index.php" class="text-light text-decoration-none">Dashboard</a></h1>
            <!-- For Menues after the Dashboard -->
             <div class="menues p-4 mt-5">
                <div class="menu">
                    <a href="create.php" class="text-light text-decoration-none "><strong>Add New Post</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="../index.php" class="text-light text-decoration-none "><strong>View website</strong></a>
                </div>
                <div class="menu mt-5">
                    <a href="logout.php" class="btn btn-info">Logout</a>
                </div>
             </div>
        </div>