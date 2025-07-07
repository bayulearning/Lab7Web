<!DOCTYPE html> 
<html lang="en"> 
    <head> <meta charset="UTF-8"> <title><?= $title; ?></title> 
    <link rel="stylesheet" href="<?= base_url(relativePath: '/style.css');?>"> 
    <link rel="stylesheet" href="<?= base_url(relativePath: '/edit.css');?>">
</head> 
<body> <div id="container"> <header> 
    <h1>Layout Sederhana</h1>
</header> 
<nav class="nav-bar"> 
    <ul class="nav-links">
        <li><a href="<?= base_url('/home');?>" class="active">Home</a> </li>
        <li><a href="<?= base_url('/artikel/index');?>">Artikel</a> </li>
        <li><a href="<?= base_url('/about');?>">About</a> </li>
        <li><a href="<?= base_url('/contact');?>">Kontak</a></li>
    </ul>
<!-- <button class="logout">Logout</button> -->
</nav> 
<div class="container">
<section id="wrapper" class="content-about"> 
    <section id="main"></section>

