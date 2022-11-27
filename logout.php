<?php
    session_start();
    if($_SESSION['name']){
        session_destroy();
    }
    else {
        session_destroy();
        header('Location: index.php');
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> <header> <div class="header" id="head">
        <div class="hambuger" id="ham"></div>
        <a href="index.php" ><h1 class="logo">IGLOOO</h1></a>
    </div></header>
    <section class="sec">
        <div>
<h1 style="text-align: center; margin-top: 10%;">You have been logged out :) </h1>

